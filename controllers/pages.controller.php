<?php

class PagesController extends Controller {

    public function index() {
        echo 'pages list';
    }

    public function view() {
        $params = App::getRouter()->getParams();
        if ($params[0]) {
            $alias = strtolower($params[0]);
            echo $alias;
        }
    }
}