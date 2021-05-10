<html>
<div id="yongerPageBlocks" class="dd yonger-nested pl-3">
    <ul class="dd-list" id="yonblocks">
        <wb-foreach wb="bind=cms.page.blocks&render=client">
            <li class="dd-item row" data-id="{{id}}" data-form="{{form}}" data-name="{{name}}">
                <span class="dd-handle"><img src="/module/myicons/dots-2.svg?size=20px&stroke=000000" /></span>
                <span class="dd-text col-3">
                    <b>{{header}}&nbsp;</b>
                    <small class="tx-gray lh--5"><br>{{name}}</small>
                </span>
                <span class="dd-info col-9">
                    <span class="row">
                        <div method="post" class="col-12 text-right m-0">
                            <wb-var wb-if='"{{active}}" == ""' stroke="FC5A5A" else="82C43C" />
                            <input type="checkbox" name="active" class="d-none">
                            {{#if active=='on'}}
                            <img src="/module/myicons/power-turn-on-square.1.svg?size=24&stroke=82C43C" />
                            {{else}}
                            <img src="/module/myicons/power-turn-on-square.1.svg?size=24&stroke=FC5A5A" />
                            {{/if}}
                            <img src="/module/myicons/content-edit-pen.svg?size=24&stroke=323232" class="dd-edit">
                            <img src="/module/myicons/trash-delete-bin.2.svg?size=24&stroke=323232" class="dd-remove">
                        </div>
                    </span>
                </span>
            </li>
        </wb-foreach>
    </ul>
    <textarea name="blocks" class="d-none"></textarea>
</div>
<script wb-app>
var yongerPageBlocks = function() {
    let $blockform = $('#yongerBlocksForm > form');
    let $blocks = $('#yongerPageBlocks [name=blocks]');
    let $modal = $blockform.parents('.modal');
    let $current;
    
    if ($blocks.val() == '') $blocks.val('null');

    let data = json_decode($blocks.val(),true);
    $.each(data,function(i,item) {
        if (item.id == undefined) delete data[i];
    });
    wbapp.storage('cms.page.blocks', data);
    $('#yongerPageBlocks').nestable({
        maxDepth: 0,
    });


    $blockform.delegate(':input', 'change', function() {
        blockSave();
    })

    $('#yongerPageBlocks').delegate('.dd-remove', 'tap click touchStart', function() {
        let id = $(this).parents('.dd-item').attr('data-id');
        if (id > '') {
            wbapp.storage('cms.page.blocks.'+id, null);
            $blocks.text(json_encode(wbapp.storage('cms.page.blocks')));
        }
    });

    $('#yongerPageBlocks').delegate('.dd-edit', 'tap click touchStart', function() {
        let $line = $(this).parents('.dd-item');
        let id = $line.attr('data-id');
        let form = $line.attr('data-form');
        let item = wbapp.storage('cms.page.blocks.'+id);
        let $editor = $(wbapp.postSync('/module/yonger/blockform', {
            'form': form,
            'item': item
        }));
        $modal.find('.modal-header .header').text($editor.attr("header"));
        $blockform.html($editor.html());
        $current = $line;
    })

    var blockSave = function() {
        if ($current !== undefined) {
            let data = $blockform.serializeJson();
            let id = $current.attr('data-id');
            data.id  = id;
            data.name = $current.attr('data-name');
            data.form = $current.attr('data-form');
            wbapp.storage('cms.page.blocks.'+id,data);
            $blocks.text(json_encode(wbapp.storage('cms.page.blocks')));
        }
        

    }

}
yongerPageBlocks();
</script>

</html>