<?php

class View{
    public $pages;

    function __construct($templates){
        $this->pages = [
            'articles'      => __DIR__. '/../..'. $templates. '/articles.php',
            'article'       => __DIR__. '/../..'. $templates. '/article-detail.php',
            'article-edit'  => __DIR__. '/../..'. $templates. '/article-edit.php',
        ]; 
    }
}