<?php
//Front controller

foreach(glob("backend/modules/*.php") as $include){
    require_once(__DIR__. "/$include");
}

try{
    $container = new Container();
    $config = require __DIR__. '/config/config.php';
    $container->init($config);


    $router = $container->getByName('Router');
    //$model = $container->getByName('Model');
    $view = $container->getByName('View');


    $router->dispatch();


    // rendering template
    if(isset($view->pages[$router->data['page']])){
        $id = $router->data['id'] ?? null;          //HACK, get rid of notice

        require_once $view->pages[$router->data['page']];
    }

}
catch(Exception $e){

}


/* container
    router
        dispatch()
        data

    model - database
        getArticle(id)
        getAllArticles()
        postArticle(type article)
        deleteArticle(type article)

    render - view
        pages[]
            - script template

*/