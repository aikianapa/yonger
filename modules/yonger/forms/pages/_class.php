<?php
use Nahid\JsonQ\Jsonq;

class pagesClass extends cmsFormsClass {

function beforeItemShow(&$item) {
    $lang = $item['lang'][$this->app->vars('_sess.lang')];
    $item = array_merge($item,$lang);
}

function list() {
    $app = &$this->app;
    $this->jq = new Jsonq();
    $this->count = 0;
    $out = $app->fromFile(__DIR__ . '/list.php');
    //$list = $app->itemList('pages',["projection" => ['id','header','path']]);
    //$this->list = $list['list'];
    $this->tpl = $out->find('#pagesList');
    $res = $this->listNested();
    $out->find('#pagesList')->replaceWith($res);
    echo $out;
    echo wbUsageStat();
}

private function listNested($path = '') {
    $this->count++;
    $level = $this->app->itemList('pages',['filter'=>['path'=>$path]]);
    $count = $level['count'];
    $level = $level['list'];
    $out = $this->tpl->clone();
    $out->fetch(['list'=>$level]);
    foreach($level as $item) {
            $path = $item['path'].'/'.$item['id'];
            $res = $this->listNested($path);
               if ($path == '/home' && $item['id'] == 'home') $path = '/';
                $li = $out->find('[data-path="'.$path.'"]')->parent()->parent()->parent();
                $li->append($res);
            
    
    }
    return $out;
}


}
?>
