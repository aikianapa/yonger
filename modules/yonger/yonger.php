<?php
class modYonger
{
    public function __construct($app)
    {
        
        $mode = $app->route->mode;
        $mode == 'workspace' ? null : $app->apikey('module');
        $this->app = $app;
        if (method_exists($this, $mode)) {
            echo $this->$mode();
        } else {
            $form = $app->controller('form');
            echo $form->get404();
        }
        die;
    }

    public function workspace()
    {
        $app = $this->app;
        $subdom = $app->vars('_route.subdomain');
        $login = $app->vars('_sess.user.login');
        $role = $app->vars('_sess.user.role');

        if ($login == '' OR $role !== 'user') {
            $form = $app->controller('form');
            return $form->get404();
        } else if ($login == '_new') {
            $master = $ws = $app->fromFile(__DIR__."/tpl/master.php", true);
            $master->fetch();
            return $master;
        }
        /*else if ($login !== $subdom) {
            print_r($app->route);
            $url = $app->route->scheme.'://'.$app->vars('_sess.user.login').'.'.$app->route->domain.$app->route->uri;
            echo $url;
            header('Location: '.$url);
            die;
        }*/

        $ws = $app->fromFile(__DIR__."/tpl/workspace.php", true);
        $ws->fetch();
//        if (is_callable('modCmsBeforeShow')) {
//            modCmsBeforeShow($cms);
//        }
        return $ws;
    }

    private function settings()
    {
        $app = $this->app;
        $out = $app->getForm('_settings', $app->vars("_route.form"));
        if ($out !== null) {
            $out->fetch();
        } else {
            $out = "Error: /forms/_settings/{$app->vars("_route.form")}.php not found!";
        }
        echo $out;
        die;
    }

    private function create_site() {
        header("Content-type: application/json; charset=utf-8");
        $app = $this->app;
        $login = $this->main_login();
        if ($login) {
            $site = $app->vars('_post.formdata');
            $site['login'] = $login;
            $site = $app->itemSave('sites',$site);
            if ($site) {
                return json_encode(['error'=>false,'data'=>$site]);
            } else {
                return json_encode(['error'=>true,'msg'=>'Неизвестная ошибка']);
            }
        } else {
            return json_encode(['error'=>true,'msg'=>'Запрещено для данного пользователя']);
        }
    }

    private function main_login() {
        $user = $this->app->vars('_user');
        $login = false;
        if (isset($user['login']) && $user['login'] > '' && $user['active'] == 'on') {
            $login = $user['login'];
        } else {

        }
        return $login;
    }

}
