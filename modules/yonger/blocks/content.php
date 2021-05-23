<view>
<section class="block-{{name}}">
    <h3 wb-if="header > ''">{{header}}</h3>
    <div>
        {{text}}
    </div>
</section>
</view>
<edit header="Контент">
    <div>
        <wb-include wb-src="common.inc.php" />
    </div>
    <wb-multilang wb-lang="{{_sett.locales}}" name="lang">
        <div class="form-group row">
        
        <label class="form-control-label col-md-3">{{_lang.name}}</label>
        <div class="col-md-9">
            <input type="text" class="form-control" name="header" placeholder="{{_lang.name}}">
        </div>
        </div>
        <div class="form-group row">
            <div class="col-12">
                <wb-module wb="module=filepicker&mode=single&width=150&height=100" name="image" />
            </div>
        </div>


        <div class="form-group row">
            <div class="col-12">
                <wb-module wb="{'module':'jodit'}" name="text" />
            </div>
        </div>
    </wb-multilang>
    <wb-lang>
        [ru]
        name = "Заголовок блока"
        active = "Отображать блок"
        template = Шаблон
    </wb-lang>
</edit>