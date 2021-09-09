<div class="divider-text" wb-if='"{{_route.subdomain}}" > ""  AND "{{_sett.modules.yonger.standalone}}" !== "on"'>{{_route.subdomain}}</div>
<hr wb-if='"{{_route.subdomain}}" == "" AND "{{_sett.modules.yonger.standalone}}" !== "on"'>

<ul class="nav nav-aside" wb-tree="from=_sett.cmsmenu.data&branch=aside&parent=false">
    <li wb-if="'{{_lvl}}'=='1' && '{{active}}'=='on'">
        <div class="mg-y-20">{{data.label}}</div>
    </li>
    <li wb-if=" '{{_lvl}}' > '1' " class="nav-item with-sub">
        <a href="#" data-ajax="{{data.ajax}}" auto class="nav-link">
            <svg wb-if="'{{data.icon}}'>''" class="mi mi-{{data.icon}}" wb-module="myicons"></svg>
            <span>{{data.label}}</span>
        </a>
    </li>
</ul>

<ul class="nav nav-aside" wb-if='"{{_route.subdomain}}" > "" OR "{{_sett.modules.yonger.standalone}}" == "on"'>
    <wb-foreach wb="from=_sett.modules.yonger.aside" wb-filter="active=on">
    
    <li wb-if="'{{link}}'==''">
        <div class="mg-y-20">{{label}}</div>
    </li>
    <li wb-if=" '{{link}}' > '' " class="nav-item with-sub">
        <a href="#" data-ajax="{{link}}" auto class="nav-link">
            <svg wb-if="'{{icon}}'>''" class="mi mi-{{icon}}" wb-module="myicons"></svg>
            <span>{{label}}</span>
        </a>
    </li>

    </wb-foreach>
</ul>

<div wb-if='( "{{_route.subdomain}}" == "" AND "{{_sett.modules.yonger.standalone}}" !== "on" )'>
    <ul class="nav nav-aside">
        <li>
            <div class="mg-y-20">Система</div>
        </li>

        <li class="nav-item">
            <a href="#" data-ajax="{'url':'/module/yonger/_settings/','html':'.content-body'}" class="nav-link">
                <svg class="mi mi-setting-edit-filter-gear.1" wb-module="myicons"></svg>
                <span>Настройки</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="#" data-ajax="{'url':'/module/yonger/support','html':'.content-body'}" class="nav-link">
                <svg class="mi mi-protection-06" wb-module="myicons"></svg>
                <span>Поддержка</span>
            </a>
        </li>
    </ul>


    <div class="card bg-primary text-white text-center p-3">
        <blockquote class="blockquote mb-0">
            <p>Хочешь больше возможностей?</p>
            <div class="blockquote-footer text-white">
            Используй Yonger Pro
            </div>
        </blockquote>
        <a href="#" class="btn btn-secondary mt-3">ПОДКЛЮЧИТЬ</a>
    </div>
</div>