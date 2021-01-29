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
                <div class="aside-logo wblogo"
                    data-ajax="{'url':'/cms/ajax/form/_settings/start','html':'.content-body'}" auto>
                    <wb-var wb-if='"{{_sett.logofontsize}}" == ""' fontsize="20" />
                    <wb-var wb-if='"{{_sett.logofontsize}}" > ""' fontsize="{{_sett.logofontsize}}" />
                    <div class="tx-50 d-inline-block">
                        <img data-src="/tpl/assets/img/logo.svg" width="110">
                    </div>
                </div>
                <a href="" class="aside-menu-link">
                    <i class="ri-menu-line"></i>
                    <!--i class="ri-close-line"></i-->
                </a>
                <a href="javascript:$('body').removeClass('chat-content-show');" class="burger-menu"><i
                        class="ri-arrow-left-line"></i></a>
            </div>
            <div class="aside-body">
                <div class="aside-loggedin">
                    <div id="userProfileMenu">
                        <template>
                            <div class="d-flex align-items-center justify-content-start">
                                <a href="#loggedinMenu" data-toggle="collapse" class="avatar">
                                    {{#if avatar.0.img}}
                                    <img data-src="/thumbc/48x48/src/{{avatar.0.img}}" class="rounded-circle" alt="">
                                    {{else}}
                                    <img data-src="/engine/modules/cms/tpl/assets/img/user.svg" class="rounded-circle"
                                        alt="">
                                    {{/if}}
                                </a>
                                <div class="aside-alert-link">
                                    <a href="#"
                                        data-ajax="{'url':'/cms/ajax/form/users/profile','html':'.content-body'}"><i
                                            class="ri-user-settings-line"></i></a>
                                    <a href="#" data-ajax="{'url':'/cms/logout'}" data-toggle="tooltip"
                                        title="{{_lang.signout}}"><i class="ri-logout-box-r-line"></i></a>
                                </div>
                            </div>
                            <div class="aside-loggedin-user">
                                <a href="#loggedinMenu" class="d-flex align-items-center justify-content-between mg-b-2"
                                    data-toggle="collapse">
                                    <h6 class="tx-semibold mg-b-0">{{first_name}} {{last_name}}</h6>
                                    <i data-feather="chevron-down"></i>
                                </a>
                                <p class="tx-color-03 tx-12 mg-b-0">{{role}}</p>
                            </div>
                        </template>
                    </div>
                    <div class="collapse" id="loggedinMenu">
                        <ul class="nav nav-aside mg-b-0">
                            <li class="nav-item">
                                <a href="#" data-ajax="{'url':'/cms/ajax/form/users/profile','html':'.content-body'}"
                                    class="nav-link"><i class="ri-user-settings-line"></i>
                                    <span>&nbsp;{{_lang.profile}}</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" data-ajax="{'url':'/cms/logout'}" class="nav-link"><i
                                        class="ri-logout-box-r-line"></i>
                                    <span>&nbsp;{{_lang.signout}}</span>
                                </a>
                            </li>
                        </ul>
                    </div>
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
                <div>
                    <a href class="btn btn-sm"><i wb-module="myicons"
                            class="mi mi-item-cursor-select.1 mr-2"></i><span>Сайты</span></a>
                    <a href class="btn btn-sm"><i wb-module="myicons"
                            class="mi mi-interface-essential-111 mr-2"></i><span>Проекты</span></a>
                    <a href class="btn btn-sm"><i wb-module="myicons"
                            class="mi mi-document-content.16 mr-2"></i><span>Документы</span></a>
                    <a href class="btn btn-sm"><i wb-module="myicons"
                            class="mi mi-user-square mr-2"></i><span>Контакты</span></a>
                    <a href class="btn btn-sm"><i wb-module="myicons" class="mi mi-grid-layout-add mr-2"></i><span>Все
                            сервисы</span></a>
                </div>

                <nav class="nav">
                    <a href="#" data-ajax="" data-toggle="tooltip" title="Поиск" class="nav-link tx-18 mr-2">
                        <i wb-module="myicons" class="mi mi-interface-essential-251"></i></a>
                    <a href="#" data-ajax="" data-toggle="tooltip" title="Пользователь?" class="nav-link tx-18 mr-2">
                        <i wb-module="myicons" class="mi mi-users-profile-group"></i></a>

                    <div class="dropdown dropdown-message mr-2" data-toggle="tooltip" title="Сообщения">
                        <a href="" class="dropdown-link new-indicator" data-toggle="dropdown" aria-expanded="true">
                            <i wb-module="myicons" class="mi mi-messages-chat-07"></i>
                            <span>2</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-header">New Messages</div>
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


                    <div class="dropdown dropdown-notification mr-2" data-toggle="tooltip" title="Уведомления">
                        <a href="" class="dropdown-link new-indicator" data-toggle="dropdown" aria-expanded="false">
                            <i wb-module="myicons" class="mi mi-bell-notification"></i>
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
                            <div class="dropdown-footer"><a href="">View all Notifications</a></div>
                        </div><!-- dropdown-menu -->
                    </div>

                    <div class="dropdown dropdown-profile">
                        <a href="" class="dropdown-link" data-toggle="dropdown" data-display="static"
                            aria-expanded="false">
                            <div class="avatar avatar-xs"><img src="https://via.placeholder.com/500"
                                    class="rounded-circle" alt=""></div>
                                    <div class="ml-2">
                                        {{_sess.user.first_name}} {{_sess.user.last_name}}
                                        <sup class="mt-2 d-block tx-dark">{{_sess.user.role}}</sup>
                            </div>
                        </a><!-- dropdown-link -->
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="avatar avatar-lg mg-b-15"><img src="https://via.placeholder.com/500"
                                    class="rounded-circle" alt=""></div>
                            <h6 class="tx-semibold mg-b-5">Katherine Pechon</h6>
                            <p class="mg-b-25 tx-12 tx-color-03">Administrator</p>

                            <a href="" class="dropdown-item"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3">
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
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-life-buoy">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <circle cx="12" cy="12" r="4"></circle>
                                    <line x1="4.93" y1="4.93" x2="9.17" y2="9.17"></line>
                                    <line x1="14.83" y1="14.83" x2="19.07" y2="19.07"></line>
                                    <line x1="14.83" y1="9.17" x2="19.07" y2="4.93"></line>
                                    <line x1="14.83" y1="9.17" x2="18.36" y2="5.64"></line>
                                    <line x1="4.93" y1="19.07" x2="9.17" y2="14.83"></line>
                                </svg> Forum</a>
                            <a href="" class="dropdown-item"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings">
                                    <circle cx="12" cy="12" r="3"></circle>
                                    <path
                                        d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                    </path>
                                </svg>Account Settings</a>
                            <a href="" class="dropdown-item"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings">
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
                    </div>

                </nav>
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