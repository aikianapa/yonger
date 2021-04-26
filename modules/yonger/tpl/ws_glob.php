<html lang="en">
<meta http-equiv="refresh" content="2; url=/signin/" wb-disallow="user">
<wb-include wb="{'src':'/modules/yonger/tpl/head.inc.php'}" />
<body class="app-chat">
    <div class="app-chat" wb-allow="admin">
        <div class="container">
            <div class="alert alert-outline alert-danger d-flex align-items-center t-100" role="alert">
                <i class="fa fa-info-circle"></i> &nbsp; Ошибка входа в систему!
            </div>
        </div>
    </div>
    <div wb-allow="user">
        <aside class="aside aside-fixed">
            <div class="aside-header">
                <a href="#" class="aside-logo"
                    data-ajax="{'url':'/cms/ajax/form/_settings/start','html':'.content-body'}">
                    <wb-include wb-src="/tpl/assets/img/svg/logo.svg" alt="Логотип" />
                </a>

                <svg class="icon logo-menu aside-menu-link">
                    <use xlink:href="/tpl/assets/img/svg/sprite.svg#menu"></use>
                </svg>
            </div>

            <div class="aside-body ps">
                <div class="aside-loggedin d-flex flex-wrap align-items-center justify-content-between">
                    <span>сайты</span>
                    <button class="mg-t-10 mg-l-auto btn btn-light text-dark bd-0 w-100" data-ajax="{'url':'/module/yonger/createSite','html':'.content-body'}">
                        <svg class="mi mi-brush-edit-create-sqaure" wb-module="myicons"></svg>
                        <span>создать сайт</span>
                    </button>
                </div>
            </div>
        </aside>

        <div class="content ht-100v pd-0">
            <div class="content-header">
                <nav class="nav nav__list d-flex align-items-center">
                    <a href="#sites" class="nav-link nav__item d-flex align-items-center mg-r-10"
                    data-ajax="{'url':'/module/yonger/listSites','html':'.content-body'}" auto>
                        <div class="nav__icon d-flex align-items-center justify-content-center">
                            <svg class="mi mi-cursor.1" wb-module="myicons">
                            </svg>
                        </div>
                        <span class='d-none d-lg-inline'>Сайты</span>
                    </a>
                    <a href="#" class="nav-link nav__item d-flex align-items-center mg-r-10">
                        <div class="nav__icon d-flex align-items-center justify-content-center">
                            <svg class="mi mi-checkmark-sqaure.1" wb-module="myicons">
                            </svg>
                        </div>
                        <span class='d-none d-lg-inline'>Проекты</span>
                    </a>
                    <a href="#" class="nav-link nav__item d-flex align-items-center mg-r-10">
                        <div class="nav__icon d-flex align-items-center justify-content-center">
                            <svg class="mi mi-document-content" wb-module="myicons">
                            </svg>
                        </div>
                        <span class='d-none d-lg-inline'>Документы</span>
                    </a>
                    <a href="#" class="nav-link nav__item d-flex align-items-center mg-r-10">
                        <div class="nav__icon d-flex align-items-center justify-content-center">
                            <svg class="mi mi-user-square" wb-module="myicons">
                            </svg>
                        </div>
                        <span class='d-none d-lg-inline'>Контакты</span>
                    </a>
                    <a href="#" data-ajax="{'url':'/cms/ajax/form/_settings/start','html':'.content-body'}" class="nav-link btn btn-sm btn-dashed nobr d-flex align-items-center mg-r-10">
                        <div class="d-flex align-items-center justify-content-center mg-r-10">
                            <svg class="mi mi-grid-layout-add" wb-module="myicons">
                            </svg>
                        </div>
                        <span>Все сервисы</span>
                    </a>
                </nav>


            </div>
            <!-- content-header -->
            <div class="content-toasts pos-absolute t-10 r-10" style="z-index:5000;"></div>
            <div class="content-body pd-0 pl-2">
            </div>
        </div>
    </div>
    <wb-include wb="{'src':'/modules/yonger/tpl/foot.inc.php'}" />
</body>

</html>