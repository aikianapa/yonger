<?php
class yongerPage {

    public function __construct($dom = null)
    {
        $this->app = &$_ENV['app'];
        $this->dom = &$dom;
    }

    function list() {
        $files = $this->app->listFiles(__DIR__.'/common/blocks');
        $list = [];
        foreach($files as $file) {
            $name = basename($file,'.php');
            if ($name !== 'common.inc') {
                $form = $this->app->fromFile(__DIR__.'/common/blocks/'.$file);
                $form->find('edit')->fetch();
                $header = $form->find('edit')->attr('header');
                $id = $this->app->newId();
                $list[$id] = ['id'=>$id,'header'=>$header,'name'=>$name,'file'=>$file,'path'=>'/_yonger_/common/blocks/'.$file];
            }
        }
        $files = $this->app->listFiles($this->app->route->path_app.'/blocks');
        foreach($files as $file) {
            $name = basename($file,'.php');
            if ($name !== 'common.inc') {
                $form = $this->app->fromFile($this->app->route->path_app.'/blocks/'.$file);
                $form->find('edit')->fetch();
                $header = $form->find('edit')->attr('header');
                $id = $this->app->newId();
                $list[$id] = ['id'=>$id,'header'=>$header,'name'=>$name,'file'=>$file,'path'=>'/_app_/blocks/'.$file];
            }
        };
        if ($this->dom == null) return $list;
        $res = $this->app->fromFile(__DIR__.'/common/forms/pages/struct.php');
        $res->fetch(['blocks'=>$this->dom->item['blocks']]);
        return $res->outer();
    }

    function blockform($item = []) {
        if (!isset($item['form'])) return;
        $file = $item['form'];
        strpos(' '.$file,'_yonger_') ? $file = str_replace('/_yonger_',$this->app->route->path_app.'/modules/yonger',$file) : null;
        strpos(' '.$file, '_app_') ? $file = str_replace('/_app_',$this->app->route->path_app, $file) : null;
        $out = $this->app->fromFile($file);
        $out->fetch($item);
        $out = $out->find('edit');
        $out->path = $this->app->route->path_app.'/modules/yonger/common/blocks/';
        return $out->outer();

    }

    function blockview($file = null) {
        if ($file == null) return;
        $src = $file;
        strpos(' '.$file,'_yonger_') ? $file = str_replace('/_yonger_',$this->app->route->path_app.'/modules/yonger',$file) : null;
        strpos(' '.$file, '_app_') ? $file = str_replace('/_app_',$this->app->route->path_app, $file) : null;
        !is_file($file) ? $file = __DIR__ . '/common/blocks/'.$file : null; // если не прописане полный путь
        if (!is_file($file)) {
            $out = $this->app->fromString("<span><!-- Block not found: {$src} --></span>");
        } else {
            $out = $this->app->fromFile($file);
            $out = $out->find('view');
        }
        return $out;

    }

}
?>