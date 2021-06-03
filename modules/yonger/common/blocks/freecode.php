<html>
<view>
    <section>
    {{ html_entity_decode( {{freecode}} ) }}
    </section>
</view>
<edit header="{{_lang.header}}">
    <div>
        <wb-include wb-src="common.inc.php" />
    </div>
    <wb-module wb="module=codemirror&oconv=html_entity_decode" name="freecode"></wb-module>
    <wb-lang>
    [ru]
    header = "Произвольный код"
    [en]
    header = "Free code"
</wb-lang>
</edit>
</html>