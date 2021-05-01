<html>
<div class="m-3" id="yongerSupport">


    <nav class="nav navbar navbar-expand-md col">
        <h3 class="tx-bold tx-spacing--2 order-1">Страницы</h3>
        <a href="#" data-ajax="{'url':'/cms/ajax/form/pages/edit/_new','html':'#yongerSupport modals'}" class="ml-auto order-2 float-right btn btn-primary">
            <img src="/module/myicons/item-select-plus-add.svg?size=24&stroke=FFFFFF" /> Добавить страницу
        </a>
    </nav>

    <div id="yongerPagesTree" class="dd">
        <span class="bg-light">
            <div class="header p-2">
                <span clsss="row">
                <div class="col-3">
                <input type="search" class="form-control">
                </div>
                </span>
            </div>
            
        </span>
        <ol>
            <li data-id="home">Главная</li>
            <li>О проекте</li>
            <li>Проекты
                <ol>
                    <li>О нас</li>
                    <li>Работы</li>
                </ol>
            </li>
            <li>Контакты</li>
            <li>Сотрудники</li>
            <li>Документы</li>

        </ol>
        <modals></modals>
    </div>
    <script wb-app>
    wbapp.loadStyles(['/engine/lib/js/nestable/nestable.css']);
    wbapp.loadScripts(['/engine/lib/js/nestable/nestable.min.js'], '', function() {

        $('#yongerPagesTree ol').addClass('dd-list')
        $('#yongerPagesTree li').contents().filter(function() {
            return this.nodeType === 3 && $.trim(this.nodeValue) !== '';
        }).wrap('<span class="dd-text nobr"/>');

        $('#yongerPagesTree li').each(function() {
            $(this)
                .addClass('dd-item row')
                .children('.dd-text')
                .addClass('col-3')
                .prepend(
                    '<img src="/module/myicons/dots-2.svg?size=20px&stroke=323232" class="dd-handle"/>')
                .after('<span class="dd-info col-9"><span class="row" /></span>');
            $(this).children('.dd-info').children('.row')
                .append('<span class="dd-path col-6">/project </span>')
                .append('<span class="col-6 text-right">' +
                    '<img src="/module/myicons/power-turn-on-square.1.svg?size=28&stroke=FC5A5A" class="dd-active">' +
                    '<img src="/module/myicons/content-edit-pen.svg?size=28&stroke=323232" class="dd-edit">' +
                    '<img src="/module/myicons/trash-delete-bin.2.svg?size=28&stroke=323232" class="dd-remove">' +
                    '<img src="/module/myicons/copy-windows-square.svg?size=28&stroke=323232" class="dd-clone">' +
                    '</span>');
        });
        $('#yongerPagesTree').nestable({
            maxDepth: 100,
        });

        $('#yongerPagesTree li').mouseover(function(e) {
            e.stopPropagation();
            $(this).addClass('hover');
        });

        $('#yongerPagesTree li').mouseout(function() {
            $(this).removeClass('hover');
        });

        $('#yongerPagesTree li[data-id] .dd-edit').on('tap click touchstart',function(){
            let item = $(this).parents('[data-id]').attr('data-id')
            wbapp.ajax({'url':'/cms/ajax/form/pages/edit/'+item,'html':'#yongerSupport modals'});
           
        });

    })
    </script>

</html>