<html>
<view head>
    <link this is a SEO />
    
</view>
<edit header="{{_lang.header}}">
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
    </wb-multilang>
</edit>
<wb-lang>
    [ru]
    header = "Поисковая оптимизация"
    [en]
    header = "Search Engine Optimization"
</wb-lang>

</html>