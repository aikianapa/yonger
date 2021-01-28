<?php
class modYonger
{
    public function __construct($app)
    {
        $app->router->addRouteFile(__DIR__."/router.ini");
        $mode = $app->route->mode;
        $this->app = $app;
        if (method_exists($this, $mode) AND (isset($app->route->subdomain) && $app->route->subdomain == $app->vars('_sess.user.login') )) {
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
        $ws = $app->fromFile(__DIR__."/tpl/workspace.php", true);
        $ws->fetch();
//        if (is_callable('modCmsBeforeShow')) {
//            modCmsBeforeShow($cms);
//        }
        return $ws;
    }

    public function settings()
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
}
