<?php
use Nahid\JsonQ\Jsonq;

class pagesClass extends cmsFormsClass {

function beforeItemShow(&$item) {
    $lang = $item['lang'][$this->app->vars('_sess.lang')];
    $item = (array)$lang + (array)$item;
    $item['header'] = $item['header'][$_SESSION['lang']];
}

function afterItemRead(&$item) {
    if ($item['path'] == '/') $item['path'] = '';
    $item['url'] = $item['path'] . '/' .$item['name'];
    $item['url'] == '/home' ? $item['url'] = '/' : null;
    $item['blocks'] = $item['blocks'];
}

function beforeItemSave(&$item) {
    $item['login'] = $this->app->vars('_sess.user.login');
}

function afterItemSave(&$item) {
    
}


function list() {
    $app = &$this->app;
    $this->jq = new Jsonq();
    $this->count = 0;
    $out = $app->fromFile(__DIR__ . '/list.php');
    $this->tpl = $out->find('#pagesList');
    $res = $this->listNested();
    $out->find('#pagesList')->replaceWith($res);
    echo $out;
    echo wbUsageStat();
}

function listNested($path = '') {
    $this->count++;
    $level = $this->app->itemList('pages',['filter'=>['path'=>$path]]);
    $count = $level['count'];
    $level = $level['list'];
    $out = $this->tpl->clone();
    if (!count($level)) return $this->app->fromString("");
    $out->fetch(['list'=>$level]);
    foreach($level as $item) {
            $path = $item['path'].'/'.$item['name'];
            $res = $this->listNested($path);
            if ($path == '/home' && $item['name'] == 'home') $path = '/';
            $li = $out->find('[data-path="'.$path.'"]')->parent()->parent()->parent();
            $li->append($res);

    }
    return $out;
}

function path() {
    $app = &$this->app;
    $data = $app->vars('_post.data');
    foreach(array_keys($data) as $id) {
        $app->itemSave('pages',['_id'=>$id,'path'=>$data[$id]],false);
    }
    $app->tableFlush('pages');
}

}
?>
