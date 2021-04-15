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
                    data-ajax="{'url':'/cms/ajax/form/_settings/start','html':'.content-body'}" auto>
                    <wb-include wb-src="/tpl/assets/img/svg/logo.svg" alt="Логотип" />
                </a>

                <svg class="icon logo-menu aside-menu-link">
                    <use xlink:href="/tpl/assets/img/svg/sprite.svg#menu"></use>
                </svg>
            </div>

            <div class="aside-body ps">
                <div class="aside-loggedin d-flex align-items-center justify-content-between">
                    <span>сайты</span>
                    <button class="mg-l-auto" data-ajax="{'url':'/ajax/renderTpl/modules/yonger/tpl/create_site.php','html':'.content-body'}">
                    + создать сайт
                    </button>
                </div>
                <div class="dropdown dropdown-profile" id="sitesMenu">
                    <a href="" class="dropdown-link" data-toggle="dropdown" data-display="static">
                        <div class="avatar avatar-xs">
                            <img data-src="/thumbc/64x64/src/{{avatar.0.img}}" class="rounded-circle" alt="">
                        </div>
                        <div class="d-none d-xl-flex flex-column mg-r-5">
                            <h6 class="tx-semibold mg-b-0">Мой сайт</h6>
                            <p class="mg-b-0 tx-12 tx-color-03">описание</p>

                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-chevron-down">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </a><!-- dropdown-link -->
                    <div class="dropdown-menu dropdown-menu-right tx-13 mg-t-10" id="asideSites">
                        <wb-foreach wb="bind=aside.sites&render=client" wb-ajax='/api/query/sites/' wb-filter="login={{_user.login}}">
                            <a href="" class="dropdown-item" data-id="{{id}}">{{site}}</a>
                        </wb-foreach>
                    </div><!-- dropdown-menu -->
                </div>
                <ul class="nav nav-aside">
                    <li>
                        <div class="mg-y-20">Навигация</div>
                    </li>
                    <li class="nav-item">
                        <a href="#" data-ajax="{'url':'/cms/ajax/form/_settings/start','html':'.content-body'}"
                            class="nav-link">
                            <svg class="mi mi-grid-layout.1" wb-module="myicons"></svg>
                            <span>Рабочий стол</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" data-ajax="{'url':'/cms/ajax/form/orders/list/','html':'.content-body'}"
                            class="nav-link">
                            <svg class="mi mi-content-edit-pen" wb-module="myicons"></svg>
                            <span>Заявки</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" data-ajax="{'url':'/module/chat/','html':'.content-body'}"
                            class="nav-link">
                            <svg class="mi mi-messages-chat-07" wb-module="myicons"></svg>
                            <span>Сообщения</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" data-ajax="{'url':'/cms/ajax/form/comments/list/','html':'.content-body'}"
                            class="nav-link">
                            <svg class="mi mi-messages-chat.1" wb-module="myicons"></svg>
                            <span>Коментарии</span>
                        </a>
                    </li>
                    <li class="nav-item with-sub">
                        <a href="#" data-ajax="{'url':'/cms/ajax/form/pages/list/','html':'.content-body'}"
                            class="nav-link">
                            <svg class="mi mi-content-08" wb-module="myicons"></svg>
                            <span>Страницы</span>
                        </a>
                        <ul>
                            <li class="nav-item">
                                <a href="#" class="nav-link"
                                    data-ajax="{'url':'/cms/ajax/form/pages/list','html':'.content-body','filter':{'active':'on'}}">Активные</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link"
                                    data-ajax="{'url':'/cms/ajax/form/pages/list','html':'.content-body','filter':{'active':''}}">Скрытые</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" data-ajax="{{data.ajax}}" class="nav-link">
                            <svg class="mi mi-programing-data.9" wb-module="myicons"></svg>
                            <span>Разделы</span>
                        </a>
                    </li>
                    <li>
                        <div class="mg-y-20">Система</div>
                    </li>
                    <li class="nav-item">
                        <a href="#" data-ajax="{'url':'/cms/settings/settings_ui','html':'.content-body'}"
                            class="nav-link">
                            <svg class="mi mi-settings.2" wb-module="myicons"></svg>
                            <span>Настройки</span>
                        </a>
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
            </div>
        </aside>

        <div class="content ht-100v pd-0">
            <div class="content-header">
                <nav class="nav nav__list d-flex align-items-center">
                    <a href="#" class="nav-link nav__item d-flex align-items-center mg-r-10">
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
                    <a href="#" class="nav-link btn btn-sm btn-dashed nobr d-flex align-items-center mg-r-10">
                        <div class="d-flex align-items-center justify-content-center mg-r-10">
                            <svg class="mi mi-grid-layout-add" wb-module="myicons">
                            </svg>
                        </div>
                        <span>Все сервисы</span>
                    </a>
                </nav>

                <div class="navbar__right d-flex align-items-center">
                    <a id="navbarSearch" href="#" class="nav-link search-link navbar-right-icon mg-r-10">
                        <svg class="mi">
                            <use xlink:href="/tpl/assets/img/svg/sprite.svg#search"></use>
                        </svg>
                    </a>
                    <div class="dropdown dropdown-message mg-r-10">
                        <a href="" class="dropdown-link new-indicator" data-toggle="dropdown">
                            <svg class="mi">
                                <use xlink:href="/tpl/assets/img/svg/sprite.svg#users"></use>
                            </svg>
                            <span>5</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-header">New Messages</div>
                            <a href="" class="dropdown-item">
                                <div class="media">
                        				,"{{_var.base}}./assets/js/yonger.js"            <div class="avatar avatar-sm avatar-online"><img
                                            src="https://via.placeholder.com/350" class="rounded-circle" alt=""></div>
                                    <div class="media-body mg-l-15">
                                        <strong>Socrates Itumay</strong>
                                        <p>nam libero tempore cum so...</p>
                                        <span>Mar 15 12:32pm</span>
                                    </div><!-- media-body -->
                                </div><!-- media -->
                            </a>
                            <a href="" class="dropdown-item">
                                <div class="media">
                                    <div class="avatar avatar-sm avatar-online"><img
                                            src="https://via.placeholder.com/500" class="rounded-circle" alt=""></div>
                                    <div class="media-body mg-l-15">
                                        <strong>Joyce Chua</strong>
                                        <p>on the other hand we denounce...</p>
                                        <span>Mar 13 04:16am</span>
                                    </div><!-- media-body -->
                                </div><!-- media -->
                            </a>
                            <a href="" class="dropdown-item">
                                <div class="media">
                                    <div class="avatar avatar-sm avatar-online"><img
                                            src="https://via.placeholder.com/600" class="rounded-circle" alt=""></div>
                                    <div class="media-body mg-l-15">
                                        <strong>Althea Cabardo</strong>
                                        <p>is there anyone who loves...</p>
                                        <span>Mar 13 02:56am</span>
                                    </div><!-- media-body -->
                                </div><!-- media -->
                            </a>
                            <a href="" class="dropdown-item">
                                <div class="media">
                                    <div class="avatar avatar-sm avatar-online"><img
                                            src="https://via.placeholder.com/500" class="rounded-circle" alt=""></div>
                                    <div class="media-body mg-l-15">
                                        <strong>Adrian Monino</strong>
                                        <p>duis aute irure dolor in repre...</p>
                                        <span>Mar 12 10:40pm</span>
                                    </div><!-- media-body -->
                                </div><!-- media -->
                            </a>
                            <div class="dropdown-footer"><a href="">View all Messages</a></div>
                        </div><!-- dropdown-menu -->
                    </div>
                    <div class="dropdown dropdown-message mg-r-10">
                        <a href="" class="dropdown-link new-indicator" data-toggle="dropdown">
                            <svg class="mi">
                                <use xlink:href="/tpl/assets/img/svg/sprite.svg#chat"></use>
                            </svg>
                            <span>5</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-header">New Messages</div>
                            <a href="" class="dropdown-item">
                                <div class="media">
                                    <div class="avatar avatar-sm avatar-online"><img
                                            src="https://via.placeholder.com/350" class="rounded-circle" alt=""></div>
                                    <div class="media-body mg-l-15">
                                        <strong>Socrates Itumay</strong>
                                        <p>nam libero tempore cum so...</p>
                                        <span>Mar 15 12:32pm</span>
                                    </div><!-- media-body -->
                                </div><!-- media -->
                            </a>
                            <a href="" class="dropdown-item">
                                <div class="media">
                                    <div class="avatar avatar-sm avatar-online"><img
                                            src="https://via.placeholder.com/500" class="rounded-circle" alt=""></div>
                                    <div class="media-body mg-l-15">
                                        <strong>Joyce Chua</strong>
                                        <p>on the other hand we denounce...</p>
                                        <span>Mar 13 04:16am</span>
                                    </div><!-- media-body -->
                                </div><!-- media -->
                            </a>
                            <a href="" class="dropdown-item">
                                <div class="media">
                                    <div class="avatar avatar-sm avatar-online"><img
                                            src="https://via.placeholder.com/600" class="rounded-circle" alt=""></div>
                                    <div class="media-body mg-l-15">
                                        <strong>Althea Cabardo</strong>
                                        <p>is there anyone who loves...</p>
                                        <span>Mar 13 02:56am</span>
                                    </div><!-- media-body -->
                                </div><!-- media -->
                            </a>
                            <a href="" class="dropdown-item">
                                <div class="media">
                                    <div class="avatar avatar-sm avatar-online"><img
                                            src="https://via.placeholder.com/500" class="rounded-circle" alt=""></div>
                                    <div class="media-body mg-l-15">
                                        <strong>Adrian Monino</strong>
                                        <p>duis aute irure dolor in repre...</p>
                                        <span>Mar 12 10:40pm</span>
                                    </div><!-- media-body -->
                                </div><!-- media -->
                            </a>
                            <div class="dropdown-footer"><a href="">View all Messages</a></div>
                        </div><!-- dropdown-menu -->
                    </div>

                    <div class="dropdown dropdown-notification mg-r-10">
                        <a href="" class="dropdown-link new-indicator" data-toggle="dropdown">
                            <svg class="mi">
                                <use xlink:href="/tpl/assets/img/svg/sprite.svg#bell"></use>
                            </svg>
                            <span>2</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-header">Notifications</div>
                            <a href="" class="dropdown-item">
                                <div class="media">
                                    <div class="avatar avatar-sm avatar-online"><img
                                            src="https://via.placeholder.com/350" class="rounded-circle" alt=""></div>
                                    <div class="media-body mg-l-15">
                                        <p>Congratulate <strong>Socrates Itumay</strong> for work anniversaries</p>
                                        <span>Mar 15 12:32pm</span>
                                    </div><!-- media-body -->
                                </div><!-- media -->
                            </a>
                            <a href="" class="dropdown-item">
                                <div class="media">
                                    <div class="avatar avatar-sm avatar-online"><img
                                            src="https://via.placeholder.com/500" class="rounded-circle" alt=""></div>
                                    <div class="media-body mg-l-15">
                                        <p><strong>Joyce Chua</strong> just created a new blog post</p>
                                        <span>Mar 13 04:16am</span>
                                    </div><!-- media-body -->
                                </div><!-- media -->
                            </a>
                            <a href="" class="dropdown-item">
                                <div class="media">
                                    <div class="avatar avatar-sm avatar-online"><img
                                            src="https://via.placeholder.com/600" class="rounded-circle" alt=""></div>
                                    <div class="media-body mg-l-15">
                                        <p><strong>Althea Cabardo</strong> just created a new blog post</p>
                                        <span>Mar 13 02:56am</span>
                                    </div><!-- media-body -->
                                </div><!-- media -->
                            </a>
                            <a href="" class="dropdown-item">
                                <div class="media">
                                    <div class="avatar avatar-sm avatar-online"><img
                                            src="https://via.placeholder.com/500" class="rounded-circle" alt=""></div>
                                    <div class="media-body mg-l-15">
                                        <p><strong>Adrian Monino</strong> added new comment on your photo</p>
                                        <span>Mar 12 10:40pm</span>
                                    </div><!-- media-body -->
                                </div><!-- media -->
                            </a>
                            <div class="dropdown-footer"><a href="">View all Notifications</a></div>
                        </div><!-- dropdown-menu -->
                    </div>

                    <div class="dropdown dropdown-profile" id="userProfileMenu">
                        <template>
                            <a href="" class="dropdown-link" data-toggle="dropdown" data-display="static">
                                <div class="avatar avatar-xs">
                                    {{#if avatar.0.img}}
                                    <img data-src="/thumbc/64x64/src/{{avatar.0.img}}" class="rounded-circle" alt="">
                                    {{else}}
                                    <img data-src="/engine/modules/cms/tpl/assets/img/user.svg" class="rounded-circle"
                                        alt="">
                                    {{/if}}
                                </div>
                                <div class="d-none d-xl-flex flex-column mg-r-5">

                                    <h6 class="tx-semibold mg-b-0">{{first_name}} {{last_name}}</h6>
                                    <p class="mg-b-0 tx-12 tx-color-03">{{role}}</p>

                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-chevron-down">
                                    <polyline points="6 9 12 15 18 9"></polyline>
                                </svg>

                            </a><!-- dropdown-link -->
                            <div class="dropdown-menu dropdown-menu-right tx-13">
                                <div class="avatar avatar-lg mg-b-15">

                                    {{#if avatar.0.img}}
                                    <img data-src="/thumbc/64x64/src/{{avatar.0.img}}" class="rounded-circle" alt="">
                                    {{else}}
                                    <img data-src="/engine/modules/cms/tpl/assets/img/user.svg" class="rounded-circle"
                                        alt="">
                                    {{/if}}

                                </div>

                                <h6 class="tx-semibold mg-b-5">{{first_name}} {{last_name}}</h6>
                                <p class="mg-b-25 tx-12 tx-color-03">{{role}}</p>


                                <a href="" class="dropdown-item"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-edit-3">
                                        <polygon points="14 2 18 6 7 17 3 17 3 13 14 2"></polygon>
                                        <line x1="3" y1="22" x2="21" y2="22"></line>
                                    </svg> Edit Profile</a>
                                <a href="page-profile-view.html" class="dropdown-item"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg> View Profile</a>
                                <div class="dropdown-divider"></div>
                                <a href="page-help-center.html" class="dropdown-item"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-help-circle">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                        <line x1="12" y1="17" x2="12" y2="17"></line>
                                    </svg> Help Center</a>
                                <a href="" class="dropdown-item"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-life-buoy">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <line x1="4.93" y1="4.93" x2="9.17" y2="9.17"></line>
                                        <line x1="14.83" y1="14.83" x2="19.07" y2="19.07"></line>
                                        <line x1="14.83" y1="9.17" x2="19.07" y2="4.93"></line>
                                        <line x1="14.83" y1="9.17" x2="18.36" y2="5.64"></line>
                                        <line x1="4.93" y1="19.07" x2="9.17" y2="14.83"></line>
                                    </svg> Forum</a>
                                <a href="" class="dropdown-item"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-settings">
                                        <circle cx="12" cy="12" r="3"></circle>
                                        <path
                                            d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                        </path>
                                    </svg>Account Settings</a>
                                <a href="" class="dropdown-item"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-settings">
                                        <circle cx="12" cy="12" r="3"></circle>
                                        <path
                                            d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                        </path>
                                    </svg>Privacy Settings</a>
                                <a href="/signout/" class="dropdown-item"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-log-out">
                                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                        <polyline points="16 17 21 12 16 7"></polyline>
                                        <line x1="21" y1="12" x2="9" y2="12"></line>
                                    </svg>Выход</a>
                            </div><!-- dropdown-menu -->
                        </template>
                    </div>
                </div>
            </div>
            <!-- content-header -->
            <div class="content-toasts pos-absolute t-10 r-10" style="z-index:5000;"></div>
            <div class="content-body pd-0">
            </div>
        </div>
    </div>
    <wb-include wb="{'src':'/modules/yonger/tpl/foot.inc.php'}" />
</body>

</html>