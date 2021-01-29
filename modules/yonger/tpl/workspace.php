<html>
<wb-include wb="{'src':'/modules/yonger/tpl/wrapper.inc.php'}" />
<meta http-equiv="refresh" content="5; url=/signin/" wb-disallow="user">

<wb-jq wb-append="body">
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
                    <img src="/tpl/assets/img/svg/logo.svg" alt="Логотип">
                </a>

                <svg class="icon logo-menu aside-menu-link">
                    <use xlink:href="/tpl/assets/img/svg/sprite.svg#menu"></use>
                </svg>
            </div>

            <div class="aside-body ps">
                <div class="aside-loggedin d-flex align-items-center justify-content-between">
                    <span>сайты</span>
                    <button class="mg-l-auto">+ создать сайт</button>
                </div>
                <ul class="nav nav-aside"
                    wb-tree="{'table':'_settings','item':'settings','field':'cmsmenu','branch':'aside','parent':'false'}">
                    <li class="mg-t-25" wb-if=' "{{_lvl}}" == "1" AND "{{active}}" == "on"'>
                        <span class="nav-label">{{data.label}}</span>
                    </li>
                    <li class="nav-item" wb-if=' "{{_lvl}}" == "2" AND "{{active}}" == "on" '>
                        <wb-var icon="{{data.icon}}" wb-if='"{{data.icon}}">""' />
                        <wb-var icon="ri-sticky-note-line" wb-if='"{{data.icon}}"==""' />
                        <a href="#" data-ajax="{{data.ajax}}" class="nav-link"><i class="{{_var.icon}}"></i>&nbsp;&nbsp;
                            <span>{{data.label}}</span>
                        </a>
                    </li>
                </ul>

            </div>
        </aside>

        <div class="content ht-100v pd-0">
            <div class="content-header">
                <nav class="nav__list d-flex align-items-center">
                    <a href="#" class="nav__item d-flex align-items-center mg-r-20-f">
                        <div class="nav__icon d-flex align-items-center justify-content-center">
                            <svg>
                                <use xlink:href="/tpl/assets/img/svg/sprite.svg#done"></use>
                            </svg>
                        </div>
                        <span>Сайты</span>
                    </a>
                    <a href="#" class="nav__item d-flex align-items-center mg-r-20-f">
                        <div class="nav__icon d-flex align-items-center justify-content-center">
                            <svg>
                                <use xlink:href="/tpl/assets/img/svg/sprite.svg#cursor"></use>
                            </svg>
                        </div>
                        <span>Проекты</span>
                    </a>
                    <a href="#" class="nav__item d-flex align-items-center mg-r-20-f">
                        <div class="nav__icon d-flex align-items-center justify-content-center">
                            <svg>
                                <use xlink:href="/tpl/assets/img/svg/sprite.svg#square"></use>
                            </svg>
                        </div>
                        <span>Документы</span>
                    </a>
                    <a href="#" class="nav__item d-flex align-items-center mg-r-20-f">
                        <div class="nav__icon d-flex align-items-center justify-content-center">
                            <svg>
                                <use xlink:href="/tpl/assets/img/svg/sprite.svg#select"></use>
                            </svg>
                        </div>
                        <span>Контакты</span>
                    </a>
                    <a href="#" class="nav__item d-flex align-items-center mg-r-20-f">
                        <div class="nav__icon d-flex align-items-center justify-content-center">
                            <svg>
                                <use xlink:href="/tpl/assets/img/svg/sprite.svg#add"></use>
                            </svg>
                        </div>
                        <span>Все сервисы</span>
                    </a>
                </nav>

                <div class="navbar__right d-flex align-items-center">
                    <a id="navbarSearch" href="#" class="search-link navbar-right-icon mg-r-20-f">
                        <svg>
                            <use xlink:href="/tpl/assets/img/svg/sprite.svg#search"></use>
                        </svg>
                    </a>
                    <div class="dropdown dropdown-message mg-r-20-f">
                        <a href="" class="dropdown-link new-indicator" data-toggle="dropdown">
                            <svg>
                                <use xlink:href="/tpl/assets/img/svg/sprite.svg#users"></use>
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
                    <div class="dropdown dropdown-message mg-r-20-f">
                        <a href="" class="dropdown-link new-indicator" data-toggle="dropdown">
                            <svg>
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
                    <!-- dropdown -->
                    <div class="dropdown dropdown-notification mg-r-30-f">
                        <a href="" class="dropdown-link new-indicator" data-toggle="dropdown">
                            <svg>
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
                    </div><!-- dropdown -->

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
                                <div class="d-flex flex-column mg-r-10">

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
                                <a href="page-signin.html" class="dropdown-item"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-log-out">
                                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                        <polyline points="16 17 21 12 16 7"></polyline>
                                        <line x1="21" y1="12" x2="9" y2="12"></line>
                                    </svg>Sign Out</a>
                            </div><!-- dropdown-menu -->
                        </template>
                    </div><!-- dropdown -->
                </div>
            </div>
            <!-- content-header -->
            <div class="content-toasts pos-absolute t-10 r-10" style="z-index:5000;"></div>
            <div class="content-body pd-0">
            </div>
        </div>
    </div>
    <style wb-if='"{{_sett.logofontsize}}" > ""'>
    .aside-logo {
        font-size: {
                {
                _sett.logofontsize
            }
        }

        px;
    }
    </style>
    <script type="wbapp">
        wbapp.loadScripts(["{{_var.base}}./assets/js/cms.js"]);
  </script>

    <wb-lang>
        [en]
        forms = Forms
        profile = Profile
        signout = Sign Out
        [ru]
        forms = Формы
        profile = Профиль
        signout = Выход
    </wb-lang>
</wb-jq>

</html>