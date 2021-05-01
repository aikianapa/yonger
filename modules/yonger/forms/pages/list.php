<html>
<div class="m-3" id="yongerSupport">

    <nav class="nav navbar navbar-expand-md col">
        <a class="navbar-brand tx-bold tx-spacing--2 order-1" href="javascript:">Страницы</a>
    </nav>

    <div id="yongerPagesTree" class="dd">
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


    </div>
    <script wb-app>
    wbapp.loadStyles(['/engine/lib/js/nestable/nestable.css']);
    wbapp.loadScripts(['/engine/lib/js/nestable/nestable.min.js'], '', function() {

        $('#yongerPagesTree ol').addClass('dd-list')
        $('#yongerPagesTree li').contents().filter(function() {
            return this.nodeType === 3 && $.trim(this.nodeValue) !== '';
        }).wrap('<span class="dd-text"/>');

        $('#yongerPagesTree li').each(function() {
            $(this)
                .addClass('dd-item row')
                .children('.dd-text')
                .addClass('col-3')
                .before('<span class="dd-handle"><img src="/module/myicons/dots-2.svg?size=20px&stroke=000000" /></span>')
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
        

    })
    </script>

</html>