<?php
class modYonger
{
    public function __construct($app)
    {
        $mode = $app->route->mode;
        in_array($mode,explode(',','workspace,logo,signin,signup,signrc,createSite,removeSite'))? null : $app->apikey('module');
        if (in_array($mode,explode(',','createSite,removeSite')) AND $app->getDomain( $app->route->refferer) !== $app->route->domain ) {
            echo json_encode(['error'=>true,'msg'=>'Access denied']);
            die;
        }
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
        $app = &$this->app;
        $subdom = $app->route->subdomain;
        if ($subdom > '' && $app->vars('_post.token') > '' && $app->vars('_post.uid') > '') {
            $tok = file_get_contents( $app->vars('_env.path_app').'/database/_token.json');
            $tok = json_decode($tok);
            if ($tok->token == $app->vars('_post.token') && $tok->uid == $app->vars('_post.uid')) {
                $app->login($tok->uid);          
            }
        }

        $user = $app->vars('_sess.user');
        $login = $app->vars('_sess.user.login');
        $role = $app->vars('_sess.user.role');

        if ($subdom == '' AND ($login == '' OR $role !== 'user')) {
            $form = $app->controller('form');
            return $form->get404();
        } else if ($login == '_new') {
            $master = $ws = $app->fromFile(__DIR__."/tpl/master.php", true);
            $master->fetch();
            return $master;
        }
        $ws = $app->fromFile(__DIR__."/tpl/workspace.php", true);
        $ws->fetch();
        return $ws;
    }

    private function logo() {
        header( 'Content-type: image/svg+xml' ); 
        return file_get_contents(__DIR__. '/tpl/assets/img/logo.svg');
    }

    private function signin() {
        $form = $this->app->fromFile(__DIR__ . '/tpl/signin.php');
        return $form->fetch();
    }

    private function signup() {
        $form = $this->app->fromFile(__DIR__ . '/tpl/signup.php');
        return $form->fetch();
    }

    private function signrc() {
        $form = $this->app->fromFile(__DIR__ . '/tpl/signrc.php');
        return $form->fetch();
    }

    private function goto() {
        $sid = $this->app->route->params[0];
        $uid = $this->app->vars('_sess.user.id');
        $path = $this->app->vars('_env.path_app').'/sites/'.$sid;
        file_put_contents( $path.'/database/_token.json', json_encode(['token'=>$_SESSION['token'],'uid'=>$uid]));
        header("Content-type: application/json; charset=utf-8");
        return json_encode([
            'goto' => $this->app->route->scheme . '://' . $sid . '.' . $this->app->route->domain . '/workspace'
        ]);
    }

    private function removeSite() {
        $app = &$this->app;
        $this->setMainDba();        
        $sid = $app->route->params[0];

        $allow = false;
        $user = &$app->vars('_sess.user');
        $path = $this->app->vars('_env.path_app').'/sites/'.$sid;
        $res = ['error'=>true,'msg'=>'Ошибка удаления сайта'];
        $self = false;
        if ($app->route->subdomain > '') {
            $sid == $app->route->subdomain ? $self = true : null;
            $site = $app->itemRead('sites',$sid);
            $site && $site['login'] == $user['login'] ? $allow = true : null;
            $path = realpath($this->app->vars('_env.path_app').'/../'.$sid);
        } else {
            $path = $this->app->vars('_env.path_app').'/sites/'.$sid;
            $allow = true;
        }

        if ($allow) {
            $app->recurseDelete($path);
            $app->itemRemove('sites',$sid);
            $res = ['error'=>false,'msg'=>'Сайт удалён', 'self'=>$self];
        } else {
            $res = ['error'=>true,'msg'=>'Ошибка удаления сайта'];
        }
        header("Content-type: application/json; charset=utf-8");
        return json_encode($res);
    }

    private function createSite() {
        $app = &$this->app;
        $site = $app->vars('_post');
        $dirmod = dirname(__DIR__ .'..');
        if (isset($site['url'])) {
            $form = $this->app->fromFile(__DIR__ . '/tpl/create_site.php');
            return $form->fetch();
        } else {
            $res = false;
            $this->setMainDba();
            isset($site['login']) ? null : $site['login'] = $app->vars('_sess.user.login');
            $user = $app->itemList('users',['filter'=>[
                'active' => 'on',
                'login' => $site['login'],
                'role' => 'user'
            ]]);
            $user = array_pop($user['list']);
            if ($user) {
                isset($user['sitenum']) ? $sitenum = intval($user['sitenum'])+1 : $sitenum = 1;
                $sid = $site['login'].'-'.$sitenum;
                $site['id'] = $sid;
                $app->login($user);
                $path = $app->vars('_env.path_app').'/sites/'.$sid;
                $hosts = $app->vars('_env.path_app').'/sites/hosts';
                is_dir($path) ? null : mkdir($path, 0777, true);
                is_dir($hosts) ? null : mkdir($hosts, 0777, true);
                foreach(['database','uploads','tpl','modules'] as $dir) {
                    is_dir($path.'/'.$dir) ? null : mkdir($path.'/'.$dir, 0777, true);
                }
                symlink($app->vars('_env.path_engine'), $path.'/engine' );
                symlink(__DIR__ , $path.'/modules/yonger' );
                symlink($dirmod.'/phonecheck', $path.'/modules/phonecheck');
                
                copy ($app->vars('_env.path_engine').'/index.php' , $path. '/index.php' );
                $domain = $app->route->domain;
                $this->createSiteUser($path);
                file_put_contents($hosts.'/.domainname',$domain);
                $res = $app->itemSave('sites',$site);
                file_put_contents($hosts.'/'.$sid,null);
                header("Content-type: application/json; charset=utf-8");
            }
            if ($res) {
                $this->app->login($res);
                return json_encode(['error'=>false,'msg'=>'Сайт успешно создан']);
            } else {
                return json_encode(['error'=>true,'msg'=>'Ошибка создания сайта']);
            }
        }
    }

    private function createSiteUser($path) {
        $app = &$this->app;
        $uid = $app->vars('_sess.user.id');
        $users = $app->itemList('users',['filter'=>[
            'active'=>'on',
            '$or'=> [
                ['isgroup' => 'on'], 
                ['id' => $uid]
            ]
        ]]);
        $users = $users['list'];
        $users[$uid]['role'] = 'admin';
        $users = json_encode($app->arrayToObj($users));
        file_put_contents($path.'/database/users.json',$users);
    }

    private function listSites() {
        $this->setMainDba();
        $list = $this->app->fromFile(__DIR__ . '/tpl/list_sites.php');
        return $list->fetch();
    }


    private function finishRegistration() {
        header("Content-type: application/json; charset=utf-8");
        $user = $this->app->vars('_post');
        $user['id'] = $this->app->user->id;
        //unset($user['_login']);
        $res = $this->app->itemSave('users',$user);
        if ($res) {
            $this->app->login($res);
            return json_encode(['error'=>false]);
        } else {
            return json_encode(['error'=>true]);
        }
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

    private function setMainDba() {
        $app = &$this->app;
        $dba = $this->app->vars('_env.dba');
        if ($this->app->route->subdomain > '') {
            $dba = str_replace('/sites/'.$this->app->route->subdomain,'',$dba);
            $this->app->vars('_env.dba',$dba);
        }
    }

    /*
    private function create_site() {
        $app = $this->app;
        $login = $this->main_login();
        if ($login) {
            $site = $app->vars('_post.formdata');
            $site['login'] = $login;
            $site = $app->itemSave('sites',$site);
            header("Content-type: application/json; charset=utf-8");
            if ($site) {
                return json_encode(['error'=>false,'data'=>$site]);
            } else {
                return json_encode(['error'=>true,'msg'=>'Неизвестная ошибка']);
            }
        } else {
            return json_encode(['error'=>true,'msg'=>'Запрещено для данного пользователя']);
        }
    }
    */
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
