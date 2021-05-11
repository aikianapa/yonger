<view>
<section>
    <h3 wb-if="header > ''">{{header}}</h3>
    <div>
        {{text}}
    </div>
</section>
</view>
<edit header="Контент">
    <wb-include wb-src="common.inc.php" />
    <wb-multilang wb-lang="ru,en" name="lang">
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
    </wb-multilang>
    <wb-lang>
        [ru]
        name = "Наименование блока"
        active = "Отображать блок"
        template = Шаблон
    </wb-lang>
</edit>