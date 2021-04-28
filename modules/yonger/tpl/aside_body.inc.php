<div class="aside-loggedin d-flex flex-wrap align-items-center justify-content-between">
    <span>сайты</span>
    <button class="mg-t-10 mg-l-auto btn btn-light text-dark bd-0 w-100"
        data-ajax="{'url':'/module/yonger/createSite','html':'.content-body'}">
        <svg class="mi mi-brush-edit-create-sqaure" wb-module="myicons"></svg>
        <span>создать сайт</span>
    </button>
</div>
<hr />
<ul class="nav nav-aside" wb-if='"{{_route.subdomain}}" > ""'>
    <li>
        <div class="mg-y-20">Навигация</div>
    </li>
    <li class="nav-item">
        <a href="#" data-ajax="{'url':'/cms/settings/settings_ui','html':'.content-body'}" class="nav-link">
            <svg class="mi mi-settings.2" wb-module="myicons"></svg>
            <span>Настройки</span>
        </a>
    </li>
    <li class="nav-item with-sub">
        <a href="#" data-ajax="{'url':'/cms/ajax/form/pages/list/','html':'.content-body'}" class="nav-link">
            <svg class="mi mi-browser-internet-web-network-window-app-icon" wb-module="myicons"></svg>
            <span>Страницы</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="#" data-ajax="{'url':'/cms/ajax/form/users/list/','html':'.content-body'}" class="nav-link">
            <svg class="mi mi-group-user.1" wb-module="myicons"></svg>
            <span>Пользователи</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="#" data-ajax="{'url':'/cms/ajax/form/orders/list/','html':'.content-body'}" class="nav-link">
            <svg class="mi mi-document-contract-edit-pen" wb-module="myicons"></svg>
            <span>Заявки</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="#" data-ajax="{'url':'/cms/ajax/form/comments/list/','html':'.content-body'}" class="nav-link">
            <svg class="mi mi-users-message-support-1" wb-module="myicons"></svg>
            <span>Коментарии</span>
        </a>
    </li>

    <li class="nav-item">
        <a href="#" data-ajax="{'url':'/module/chat/','html':'.content-body'}" class="nav-link">
            <svg class="mi mi-chat-messages-bubble.14" wb-module="myicons"></svg>
            <span>Сообщения</span>
        </a>
    </li>

    <li>
        <div class="mg-y-20">Система</div>
    </li>

    <li class="nav-item">
        <a href="#" data-ajax="{'url':'/module/formbuilder/','html':'.content-body'}" class="nav-link">
            <svg class="mi mi-design-47" wb-module="myicons"></svg>
            <span>Конструктор</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="#" data-ajax="{'url':'/module/filemanager','html':'.content-body'}" class="nav-link">
            <svg class="mi mi-protection-06" wb-module="myicons"></svg>
            <span>Поддержка</span>
        </a>
    </li>
</ul>