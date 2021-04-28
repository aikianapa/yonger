<wb-var auto="auto" wb-if='"{{_route.subdomain}}" == ""' />
<nav class="nav nav__list d-flex align-items-center">
    <a href="#sites" class="nav-link nav__item d-flex align-items-center mg-r-10"
        data-ajax="{'url':'/module/yonger/listSites','html':'.content-body'}" _var.auto >
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
    <a href="#" data-ajax="{'url':'/cms/ajax/form/_settings/start','html':'.content-body'}"
        class="nav-link btn btn-sm btn-dashed nobr d-flex align-items-center mg-r-10">
        <div class="d-flex align-items-center justify-content-center mg-r-10">
            <svg class="mi mi-grid-layout-add" wb-module="myicons">
            </svg>
        </div>
        <span>Все сервисы</span>
    </a>
</nav>