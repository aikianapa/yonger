<?php

class modPhonecheck {
    public function __construct($app)
    {
        $this->checkRequires(['curl']);
        $mode = $app->route->mode;
        if (isset(($app->route->params))) $param = $app->route->params[0];
        in_array($mode,['reg']) ? null : $app->apikey('module');
        $this->app = $app;
        if (method_exists($this, $mode)) {
            echo $this->$mode();
        } else if ($this->isPhone($param)) {
            $this->reg($param);
        } else {
            $form = $app->controller('form');
            echo $form->get404();
        }
        die;
    }

    private function reg() {
        echo 1234;
    }

    private function isPhone() {
        return true;
    }


    private function checkRequires($req = []) {
        $ready = true;
        foreach((array)$req as $mod) {
            if (!extension_loaded($mod)) {$ready = false; echo 'Warning: PHP module '.$mod.' not intalled!<br>';}
        }
        
    }
    
}
?>