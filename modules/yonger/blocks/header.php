<view>
    <header>
        <div class="jumbotron">
            <h1 class="display-4">{{header}}</h1>
            {{text}}
            <wb-jq wb="$dom->find('p:first-child')->addClass('lead')" />
            <a class="btn btn-primary btn-lg" href="#" role="button">Узнать больше</a>
        </div>
    </header>
</view>
<edit header="Шапка">
    <wb-include wb-src="common.inc.php" />
    <wb-multilang wb-lang="{{_sett.locales}}" name="lang">
        <div class="form-group">
        <div class="col-12">
            <label class="form-control-label">{{_lang.name}}</label>
            <input type="text" class="form-control" name="header" placeholder="{{_lang.name}}">
        </div>
        </div>
        <div class="form-group">
            <div class="col-12">
                <wb-module wb="{'module':'jodit'}" name="text" />
            </div>
        </div>
        <wb-lang>
        [ru]
        name = "Заголовок"
        </wb-lang>
    </wb-multilang>
</edit>