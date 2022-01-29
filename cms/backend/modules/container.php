<?php

class Container{
    private $config;

    public function init(array $config){
        $this->config = $config;
    }

    public function getByName(string $name){
        switch ($name){
            case 'Router':
                return new Router();

            case 'Model':
                return new Model();

            case 'View':
                return new View($this->config['templates']);

            default:
                return false;
        }
    }
}