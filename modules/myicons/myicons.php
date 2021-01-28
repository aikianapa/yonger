<?php
class modMyicons
{
    public function __construct($dom)
    {
        $this->app = &$dom->app;
        $this->dom = &$dom;
        echo $this->icon();
    }

    public function icon() {
        $app = &$this->app;
        $params = $this->dom->params;
        $icon = $params->icon;
        $path = __DIR__ . '/icons/';
        $sprite = __DIR__.'/sprite.svg';
        $path = str_replace($app->route->path_app, '', $path);
        //$svg = file_get_contents($path.$icon.'.svg');
        $sprite = str_replace($app->route->path_app, '', $sprite);

        $file = $path.$icon.'.svg';
        $svg = $app->fromFile(__DIR__.'/myicon_ui.php');
        $svg->find('use')->attr('xlink:href', $sprite.'#'.$icon);
        $svg->attr('class', $this->dom->attr('class'));
        echo $svg;
        echo "<br>";
        echo htmlentities($this->dom->outer());
        echo "<br>converted to:<br>";
        echo htmlentities($svg);

    }

}