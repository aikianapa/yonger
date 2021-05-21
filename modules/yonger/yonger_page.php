<?php
class yongerPage {

    public function __construct($dom = null)
    {
        $this->app = &$_ENV['app'];
        $this->dom = &$dom;
    }

    function list() {
        $files = $this->app->listFiles(__DIR__.'/blocks');
        $list = [];
        foreach($files as $file) {
            $name = basename($file,'.php');
            if ($name !== 'common.inc') {
                $form = $this->app->fromFile(__DIR__.'/blocks/'.$file);
                $header = $form->find('edit')->attr('header');
                $id = $this->app->newId();
                $list[$id] = ['id'=>$id,'header'=>$header,'name'=>$name,'file'=>$file];
            }
        }
        if ($this->dom == null) return $list;
        $res = $this->app->fromFile(__DIR__.'/forms/pages/struct.php');
        $res->fetch(['blocks'=>$this->dom->item['blocks']]);
        return $res->outer();
    }

    function blockform($form = null, $item = []) {
        if ($form == null) return;
        $out = $this->app->fromFile(__DIR__.'/blocks/'.$form);
        $out->fetch($item);
        $out = $out->find('edit');
        $out->path = $path;
        return $out->outer();

    }

    function blockview($form = null) {
        if ($form == null) return;
        $out = $this->app->fromFile(__DIR__.'/blocks/'.$form);
        $out = $out->find('view');
        return $out;

    }

}
?>