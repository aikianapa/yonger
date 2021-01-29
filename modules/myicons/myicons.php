<?php
class modMyicons
{
    public function __construct($dom)
    {
        $this->app = &$dom->app;
        $this->dom = &$dom;
        $icon = $this->icon();
        if ($icon) {
            $dom->after($icon);
            $dom->remove();
        }
    }

    public function icon() {
        $app = &$this->app;
        $params = $this->dom->params;
        $icon = $this->name();
        $path = __DIR__ . '/icons/';
        $path = str_replace($app->route->path_app, '', $path);
        $file = $path.$icon;
        $sprite = $app->fromFile($app->route->path_app.$file);
        if (!$sprite) return false;
        $id = $sprite->attr('id');
        if ($id == '') {
            $id = 'Layer';
            $sprite->attr('id', $id);
            file_put_contents($app->route->path_app.$file,$sprite->outer());
        }
        $svg = $app->fromFile(__DIR__.'/myicon_ui.php');
        $svg->find('use')->attr('href', $file.'#'.$id);
        $svg->find('use')->after($sprite->inner());
        $svg->find('use')->remove();
        $svg->attr('class', $this->dom->attr('class'));
        return $svg->outer();
    }

    public function name() {
        isset($params->name) ? $name = $params->icon : $name = null;
        if (!$name) {
            $class = $this->dom->attr('class');
            $class = $this->app->arrayAttr($class);
            foreach($class as $mi) {
                if (substr($mi,0,3) == 'mi-') {
                    $name = substr($mi, 3);
                    break;
                }
            }
        }
        $name .= '.svg';
        return $name;
    }

}