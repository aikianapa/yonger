<html>
<div class="m-3" id="yongerSupport">
        <nav class="nav navbar navbar-expand-md col">
        <h3 class="tx-bold tx-spacing--2 order-1">Страницы</h3>
        <a href="#" data-ajax="{'url':'/cms/ajax/form/pages/edit/_new','html':'#yongerSupport modals'}" class="ml-auto order-2 float-right btn btn-primary">
            <img src="/module/myicons/item-select-plus-add.svg?size=24&stroke=FFFFFF" /> Добавить страницу
        </a>
    </nav>
    
    <div id="yongerPagesTree" class="dd yonger-nested">
        <span class="bg-light">
            <div class="header p-2">
                <span clsss="row">
                <div class="col-3">
                <input type="search" class="form-control" placeholder="Поиск страницы">
                </div>
                </span>
            </div>
            
        </span>
        <ol id="pagesList" class="dd-list">
            <wb-foreach wb="from=list&form=pages&bind=cms.list.pages" wb-filter="{'login':'{{_sess.user.login}}' }">
                <li class="dd-item row" data-item="{{id}}" data-name="{{name}}">
                    <span class="dd-handle"><img src="/module/myicons/dots-2.svg?size=20px&stroke=000000" /></span>
                    <span class="dd-text col-3">
                    <span>{{header}}</span>
                    </span>
                    <span class="dd-info col-9">
                        <span class="row">
                            <span class="dd-path col-6" data-path="{{url}}">{{url}}</span>
                            <form method="post" class="col-6 text-right m-0">
                                <wb-var wb-if='"{{active}}" == ""' stroke="FC5A5A" else="82C43C" />
                                <input type="checkbox" name="active" class="d-none">
                                <img src="/module/myicons/power-turn-on-square.1.svg?size=24&stroke={{_var.stroke}}" class="dd-active cursor-pointer">
                                <img src="/module/myicons/content-edit-pen.svg?size=24&stroke=323232" class="dd-edit">
                                <img src="/module/myicons/trash-delete-bin.2.svg?size=24&stroke=323232" class="dd-remove">
                                <img src="/module/myicons/copy-windows-square.svg?size=24&stroke=323232" class="dd-clone">
                            </form>
                        </span>
                    </span>
                </li>
            </wb-foreach>
        </ol>
    </div>
    <modals></modals>
    <script wb-app>
    wbapp.loadStyles(['/engine/lib/js/nestable/nestable.css']);
    wbapp.loadScripts(['/engine/lib/js/nestable/nestable.min.js'], '', function() {

        var datapath = [] ; // для передачи списка при смене путей

        $('#yongerPagesTree').delegate('li','mouseover',function(e) {
                $('#yongerPagesTree li').removeClass('hover');
                e.stopPropagation();
                $(this).addClass('hover');
        });

        $('#yongerPagesTree').delegate('li','mouseout',function(e) {
            $(this).removeClass('hover');
        });
            
        $('#yongerPagesTree').delegate('.dd-active','mouseout',function(e) {
            $(this).removeClass('hover');
        });

        $('#yongerPagesTree').delegate('.dd-path',wbapp.evClick,function(e){
            e.stopPropagation();
            let url = document.location.origin + $(this).text();
            let target = md5(url);
            window.open(url, target).focus();
            e.stopPropogation();
        });

        $('#yongerPagesTree').delegate('.dd-active',wbapp.evClick,function(e){
            let id = $(e.currentTarget).parents('[data-item]').attr('data-item');
            $(e.currentTarget).parent('form').find('[name=active]').trigger('click');
            wbapp.save($(e.currentTarget),{'table':'pages','id':id,'update':'cms.list.pages','silent':'true'})
        });

        $('#yongerPagesTree').delegate('li[data-item] .dd-edit',wbapp.evClick,function(e){
            e.stopPropagation();
            let item = $(this).parents('[data-item]').attr('data-item')
            wbapp.ajax({'url':'/cms/ajax/form/pages/edit/'+item,'html':'#yongerSupport modals'});
        });

        $(document).on('bind-cms.list.pages',function(){
            $('#yongerPagesTree').nestable({
                maxDepth: 100,
                beforeDragStop: function(l,e, p){
                    datapath = {};
                    changePath(e,p).then(function(){
                        wbapp.post('/cms/ajax/form/pages/path',{'data':datapath});
                    });
                }
            });
        });

        var changePath = async function (e,p) {
            let self = $(e).attr('data-item');
            let name = $(e).attr('data-name');
            let parent = $(p).closest('.dd-item').find('.dd-path').attr('data-path');
            if (parent == undefined) {parent = '';} 
            if (parent == '/') {parent = '/home'}
            let path = parent + '/' + name;
            datapath[self] = parent;
            $(e).children('.dd-info').find('.dd-path')
                .text(path)
                .attr('data-path',path);
                $(e).find('ol.dd-list .dd-item').each(await function(){
                        changePath(this,e);
                });
        }
        $(document).trigger('bind-cms.list.pages');
    })
    </script>

</html>