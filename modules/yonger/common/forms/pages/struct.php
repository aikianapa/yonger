<html>

<div class="form-group row">

    <nav class="nav navbar col">
        <h5 class="order-1">Структура</h5>

        <div class="dropdown dropright order-2 d-block">
            <div class="btn-group" role="group" aria-label="Basic example">
                <a href="#" id="yongerPageBlockSeo" class="btn btn-sm btn-outline-secondary nobr">{{_lang.seo}}</a>
                <a href="#" id="yongerPageBlockCode" class="btn btn-sm btn-outline-secondary nobr">{{_lang.code}}</a>
                <a href="#" id="yongerPageBlockAdd" class="btn btn-sm btn-outline-secondary nobr dropdown-toggle"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Добавить блок
                </a>
                <div class="dropdown-menu" aria-labelledby="yongerPageBlockAdd">
                    <wb-foreach wb="ajax=/module/yonger/blocklist&render=client">
                        <a class="dropdown-item" href="#" data-name="{{name}}" onclick="yonger.yongerPageBlockAdd('{{file}}','{{name}}')">
                            {{name}}
                        </a>
                    </wb-foreach>
                </div>
            </div>
        </div>


    </nav>
    <div class="col-12">
        <div id="yongerPageBlocks" class="dd yonger-nested pl-3">
            <ul class="dd-list" id="yonblocks">
                <wb-foreach wb="bind=cms.page.blocks&render=client">
                    <li class="dd-item row" data-id="{{id}}" data-form="{{form}}" data-name="{{name}}">
                        <span class="dd-handle"><img src="/module/myicons/dots-2.svg?size=20px&stroke=000000" /></span>
                        <span class="dd-text col-sm-6 ellipsis">
                            <b>{{header}}&nbsp;</b>
                            <small class="tx-gray lh--5"><br>{{name}}</small>
                        </span>
                        <span class="dd-info col-sm-6">
                            <span class="row">
                                <div method="post" class="col-12 text-right m-0 nobr">
                                    {{#if active=='on'}}
                                    <img src="/module/myicons/power-turn-on-square.1.svg?size=24&stroke=82C43C"
                                        class="dd-active on cursor-pointer">
                                    {{else}}
                                    <img src="/module/myicons/power-turn-on-square.1.svg?size=24&stroke=FC5A5A"
                                        class="dd-active cursor-pointer" />
                                    {{/if}}
                                    <img src="/module/myicons/content-edit-pen.svg?size=24&stroke=323232"
                                        class="dd-edit cursor-pointer">
                                    <img src="/module/myicons/trash-delete-bin.2.svg?size=24&stroke=323232"
                                        class="dd-remove cursor-pointer">
                                </div>
                            </span>
                        </span>
                    </li>
                </wb-foreach>
            </ul>
            <textarea type="json" name="blocks" class="d-none"></textarea>
        </div>
    </div>
</div>



<script wb-app>
yonger.pageBlocks = function() {
    let $blockform = $('#yongerBlocksForm > form');
    let $blocks = $('#yongerPageBlocks [name=blocks]');
    let $modal = $blockform.parents('.modal');
    let $current;
    let timeout = 50;
    if ($blocks.val() == '') $blocks.val('null');

    let data = json_decode($blocks.val(), true);
    $.each(data, function(i, item) {
        if (item.id == undefined) delete data[i];
    });
    wbapp.storage('cms.page.blocks', data);

    $(document).delegate('#yonblocks', 'wb-render-done', function(ev, data) {
        if (!$current) $('#yongerPageBlocks').find('li.dd-item:first .dd-edit').trigger('click');
        let id = $('#yongerPageBlocks').data('current');
        $('#yongerPageBlocks').find('li.dd-item[data-id="' + id + '"]').addClass('active');
        ev.stopPropagation();
    })

    $('#yongerPageBlocks').nestable({
        maxDepth: 0,
        beforeDragStop: function(l, e, p) {
            let data = {};
            setTimeout(() => {
                $('#yongerPageBlocks .dd-item').each(function() {
                    let id = $(this).attr('data-id');
                    data[id] = wbapp.storage('cms.page.blocks.' + id);
                });
                wbapp.storage('cms.page.blocks', data);
                $blocks.text(json_encode(wbapp.storage('cms.page.blocks')));
            }, timeout);

        }
    });


    $blockform.delegate(':input[name]:not(.wb-unsaved)', 'change', function() {
        if ($('#yongerPageBlocks').data('current') !== undefined) blockSave();
    })

    $('#yongerPageBlocks').delegate('.dd-remove', 'tap click touchStart', function() {
        let id = $(this).parents('.dd-item').attr('data-id');
        if (id > '') {
            $modal.find('.modal-header .header').text('');
            $blockform.html('');
            wbapp.storage('cms.page.blocks.' + id, null);
            setTimeout(() => {
                $blocks.text(json_encode(wbapp.storage('cms.page.blocks')));
            }, timeout);
        }
    });

    var blockSave = function() {
        if ($current !== undefined) {
            let data = $blockform.serializeJson();
            let id = $current.attr('data-id');
            data.id = id;
            data.name = $current.attr('data-name');
            data.form = $current.attr('data-form');
            wbapp.storage('cms.page.blocks.' + id, data);
                $blocks.text(json_encode(wbapp.storage('cms.page.blocks')));
        }
    }

    var blockEdit = function(form, id) {
        $('#yongerPageBlocks').data('current', undefined);
        let $blockform = $('#yongerBlocksForm > form');
        let $modal = $blockform.parents('.modal');
        let item = wbapp.storage('cms.page.blocks.' + id);
        if ($('#yongerPageBlocks .dd-item[data-id="' + id + '"]').length == 0) {
            
        }
        let $editor = $(wbapp.postSync('/module/yonger/blockform', {
            'form': form,
            'item': item
        }));
        $modal.find('.modal-header .header').text($editor.attr("header"));
        $blockform.html($editor.html());
        wbapp.wbappScripts();
        $('#yongerPageBlocks').data('current', id);
    }

    $('#yongerPageBlocks').delegate('.dd-active', 'tap click touchStart', function() {
        let $line = $(this).parents('.dd-item');
        let id = $(this).parents('.dd-item').attr('data-id');
        if ($current.attr('data-id') == id) {
            $blockform.find('.yonger-block-common [name=active]').trigger('click');
        } else {
            let active = 'on';
            if ($(this).hasClass('on')) active = '';
            wbapp.storage('cms.page.blocks.' + id + '.active', active);
            $blocks.text(json_encode(wbapp.storage('cms.page.blocks')));
        }
    });


    $('#yongerPageBlocks').delegate('.dd-edit', 'tap click touchStart', function() {
        let $line = $(this).parents('.dd-item');
        let id = $line.attr('data-id');
        let form = $line.attr('data-form');
        if ($current && $current.attr('data-id') == $line.attr('data-id')) return false;
        $line.parents('.dd-list').find('.dd-item').removeClass('active');
        $current = $line;
        $current.addClass('active');
        blockEdit(form, id);
    })

    $(document).delegate('#yongerPageBlockSeo', 'tap click touchStart', function() {
        if ($current) $current.removeClass('active');
        $current = null;
        $(this).parents('.dropdown').find('.dropdown-item[data-name=seo]').trigger('click');
    })

    $(document).delegate('#yongerPageBlockCode', 'tap click touchStart', function() {
        if ($current) $current.removeClass('active');
        $current = null;
        $(this).parents('.dropdown').find('.dropdown-item[data-name=code]').trigger('click');
    })
/*
    $(document).on('bind',function(ev,data) {
        if (strpos(' '+data.key, 'cms.page.blocks')) {
            $('#yongerPageBlocks [name=blocks]').text(json_encode(wbapp.storage('cms.page.blocks')));
            console.log(json_encode(wbapp.storage('cms.page.blocks')));
        }
    });
    */
}

yonger.yongerPageBlockAdd = function(form, name) {
    let id = wbapp.newId();
    if (form == 'seo.php') id = name = 'seo';
    if (form == 'code.php') id = name = 'code';
    if ($('#yongerPageBlocks').find('li.dd-item[data-id="'+id+'"]').length) {
        $('#yongerPageBlocks').find('li.dd-item[data-id="'+id+'"] .dd-edit').trigger('click');
        return;
    }

    let data = {
        'id': id,
        'header': name,
        'name': name,
        'form': form,
        'active': 'on'
    }
    wbapp.storage('cms.page.blocks.' + id, data);
    setTimeout(() => {
        $(document).find('#yongerPageBlocks [name=blocks]').text(json_encode(wbapp.storage('cms.page.blocks')));
        $(document).find('#yongerPageBlocks [name=blocks]').trigger('change');
        $('#yongerPageBlocks').find('li.dd-item:last .dd-edit').trigger('click');
    }, 100);
}

yonger.pageBlocks();
</script>
<wb-lang>
    [ru]
    seo = SEO
    code = Вставки кода
    [en]
    seo = SEO
    code = Code includes
</wb-lang>

</html>