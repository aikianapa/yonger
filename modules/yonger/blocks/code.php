<html>
<view head>
    {{ html_entity_decode( {{code}} ) }}
</view>
<edit header="{{_lang.header}}">
    <wb-include wb-src="common.inc.php" />
    <wb-module wb="module=codemirror&oconv=html_entity_decode" name="code"></wb-module>
</edit>
<wb-lang>
    [ru]
    header = "Вставки кода"
    [en]
    header = "Append code"
</wb-lang>

</html>