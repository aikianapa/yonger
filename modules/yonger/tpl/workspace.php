<html>
<wb-include wb="{'src':'/modules/yonger/tpl/wrapper.inc.php'}"/>
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
        <div class="aside-logo wblogo" data-ajax="{'url':'/cms/ajax/form/_settings/start','html':'.content-body'}" auto>
          <wb-var wb-if='"{{_sett.logofontsize}}" == ""' fontsize="20" />
          <wb-var wb-if='"{{_sett.logofontsize}}" > ""' fontsize="{{_sett.logofontsize}}"/>
          <div class="tx-50 d-inline-block">
            <img data-src="/tpl/assets/img/logo.svg" width="110">
          </div>
        </div>
        <a href="" class="aside-menu-link">
          <i class="ri-menu-line"></i>
          <!--i class="ri-close-line"></i-->
        </a>
        <a href="javascript:$('body').removeClass('chat-content-show');"  class="burger-menu"><i class="ri-arrow-left-line"></i></a>
      </div>
      <div class="aside-body">
        <div class="aside-loggedin">
          <div  id="userProfileMenu">
          <template>
            <div class="d-flex align-items-center justify-content-start">
              <a href="#loggedinMenu" data-toggle="collapse" class="avatar">
                {{#if avatar.0.img}}
                <img data-src="/thumbc/48x48/src/{{avatar.0.img}}" class="rounded-circle" alt="">
                {{else}}
                <img data-src="/engine/modules/cms/tpl/assets/img/user.svg" class="rounded-circle" alt="">
                {{/if}}
              </a>
              <div class="aside-alert-link">
                <a href="#" data-ajax="{'url':'/cms/ajax/form/users/profile','html':'.content-body'}"><i class="ri-user-settings-line"></i></a>
                <a href="#" data-ajax="{'url':'/cms/logout'}" data-toggle="tooltip" title="{{_lang.signout}}"><i class="ri-logout-box-r-line"></i></a>
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
                <a href="#" data-ajax="{'url':'/cms/ajax/form/users/profile','html':'.content-body'}" class="nav-link"><i class="ri-user-settings-line"></i>
                  <span>&nbsp;{{_lang.profile}}</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" data-ajax="{'url':'/cms/logout'}" class="nav-link"><i class="ri-logout-box-r-line"></i>
                  <span>&nbsp;{{_lang.signout}}</span>
                </a>
              </li>
            </ul>
          </div>
        </div>

        <ul class="nav nav-aside" wb-tree="{'table':'_settings','item':'settings','field':'cmsmenu','branch':'aside','parent':'false'}">
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
            <a href class="btn btn-sm"><i wb-module="myicons" class="mi-select-cursor-item mr-2"></i><span>Сайты</span></a>
            <a href class="btn btn-sm"><i wb-module="myicons" class="mi-interface-essential-113 mr-2"></i><span>Проекты</span></a>
            <a href class="btn btn-sm"><i wb-module="myicons" class="mi-content-03 mr-2"></i><span>Документы</span></a>
            <a href class="btn btn-sm"><i wb-module="myicons" class="mi-user-square mr-2"></i><span>Контакты</span></a>
            <a href class="btn btn-sm"><i wb-module="myicons" class="mi-grid-layout-add mr-2"></i><span>Все сервисы</span></a>
        </div>

        <nav class="nav" wb-tree="{'table':'_settings','item':'settings','field':'cmsmenu','branch':'top','parent':'false'}">
          <a href="#" data-ajax="{{data.ajax}}" data-toggle="tooltip" title="{{data.label}}" class="nav-link tx-18">
          <i class="{{data.icon}}"></i>
          </a>
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
        font-size: {{_sett.logofontsize}}px;
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
