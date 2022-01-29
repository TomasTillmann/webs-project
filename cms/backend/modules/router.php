<?php

class Router{
    public $data;

    public function dispatch(){
        $tokens = explode('/', $_GET['page']);         // HACK: Maymbe doesn't know about $GET

        $this->data['page'] = $tokens[0];
        $this->data['id'] = intval($tokens[1]);
    }
}