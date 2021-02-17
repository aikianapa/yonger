var modChat = function (project = 'test', room = null) {
    wbapp.loadStyles(['/modules/yonger/tpl/assets/css/dashforge.chat.css']);
    wbapp.loadScripts(['/modules/yonger/tpl/assets/js/dashforge.chat.js']);
    var current_room = null;
    var conn = null;
    let json = json_decode($('script#schema').html());
    let url = parse_url(json.server);

    var chat_connect = function () {
        if (conn && conn.OPEN) return conn;
        conn = new WebSocket('ws://'+url.host+':8000')
        if (conn.OPEN) {
            conn.onopen = function (e) {
                console.log("Connection established!")
                let msg = Object.assign({}, json)
                msg.command = 'getrooms'
                conn.send(json_encode(msg))
            };

            conn.onmessage = function (e) {
                let data = json_decode(e.data)
                var func = 'chat_' + data.command;

                console.log(data);

                if (data.server !== json.server && data.project !== json.project) return;

                try {
                    eval(func + '(data);');
                } catch (error) {
                    console.log(`Function ${func} not found`);
                }


            };

            conn.onclose = function (e) {
                console.log("Connection closed!");
            }

            $(document).undelegate('#allChannels .nav-link', 'tap click');
            $(document).delegate('#allChannels .nav-link', 'tap click', function () {
                let msg = Object.assign({}, json); // copy json
                msg.room = msg.msg = $(this).text().trim();
                $('#channelTitle').text('#' + msg.msg);
                msg.command = 'join';
                conn.send(json_encode(msg));
            });

            $(document).undelegate('#channelTitle', 'tap click');
            $(document).delegate('#channelTitle', 'tap click', function () {
                $('body').toggleClass("chat-content-show chat-content-hide");
            });

            $(document).undelegate('#showMemberList', 'tap click');
            $(document).delegate('#showMemberList', 'tap click', function (e) {
                $('body').toggleClass("show-sidebar-right");
                e.preventDefault();
            });

            $(document).undelegate('#modChatMsg', 'submit');
            $(document).delegate('#modChatMsg', 'submit', function (e) {
                let msg = Object.assign({}, json); // copy json
                msg.msg = $(this).find('input').val();
                msg.command = 'message';
                if (msg.msg.trim() > ' ') conn.send(json_encode(msg));
                $(this)[0].reset();
                e.preventDefault();
            });
            $(document).data('modChat', conn);
        }
        return conn
    }

    //wbapp.storage('mod.chat', {});
    if ($(document).data('moddChat')) conn = $(document).data('modChat');
    if (!conn || !conn.OPEN) conn = chat_connect()


    var chat_setrooms = function (data) {
        wbapp.storage('mod.chat.rooms', data.msg);
        wbapp.render('#allChannels');
    }

    var chat_message = function (data) {
        let hMsg = 'id' + md5(data.server + data.project + data.room + data.sender + data.receiver);
        let hRoom = 'id' + md5(data.server + data.project + data.room);
        let hUser = 'id' + md5(data.server + data.project + data.sender);
        let mid = 'msg_' + data._created + '_' + hMsg;
        let bind = 'mod.chat.room.' + hRoom;
        if (wbapp.storage(bind) !== undefined) {
            wbapp.storage(bind + '.' + data.id, {
                'msg': data.msg,
                'name': data.sender.name,
                'time': date('d.m.Y H:i:s', strtotime(data._created))
            });
            chat_to_bottom();
        }
    }

    var chat_channelusers = function(data) {
        console.log(data);
        wbapp.storage('mod.chat.roomusers',data.msg);
        wbapp.render("#chatRoomUsers");
        $('#showMemberList span').text(count(data.msg));
    }

    var chat_join = function (data) {
        current_room = data.msg;
        json.room = data.room;
        let bind = 'mod.chat.room.' + current_room
        wbapp.template["#chatRoom"].params.bind = bind;
        if (wbapp.storage(bind) == undefined) wbapp.storage(bind, {});
        wbapp.render("#chatRoom");
        chat_to_bottom(true);
    }

    var chat_to_bottom = function(init = false) {
        if (init == true) {
            $("#chatRoom").css('min-height','3000px');
            $(".chat-content-body").scrollTop(0) 
        }
        setTimeout(function () {
            $(".chat-content-body").animate({ scrollTop: $('.chat-content-body').prop("scrollHeight") }, 500);
        }, 10)
    }


    setTimeout(function () {
        wbapp.render('#allChannels');
    }, 100)

}

//if ($(document).data('modChat') == undefined) modChat(); // run once
modChat('yonger', 'yonger_test');