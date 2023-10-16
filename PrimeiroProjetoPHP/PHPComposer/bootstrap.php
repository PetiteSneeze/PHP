<?php


require __DIR__.'/vendor/autoload.php';

$method = $_SERVER['REQUEST_METHOD'];
$path = $_SERVER['PATH_INFO']?? '/';

$router = new \Php\Biblioteca\Router($method, $path);

$router->get("/",
    'Php\Biblioteca\Controller\HomeController@index'
);

$router->get("/categoria/inserir",
    'Php\Biblioteca\Controller\CategoriaController@inserir'
);

$router->post("/categoria/gravar",
    'Php\Biblioteca\Controller\CategoriaController@gravar'
);

$router->get("/categoria/index",
    'Php\Biblioteca\Controller\CategoriaController@index'
);

$router->get("/categoria/alterar/{id}",
    'Php\Biblioteca\Controller\CategoriaController@alterar'
);

$router->get("/categoria/excluir/{id}",
    'Php\Biblioteca\Controller\CategoriaController@excluir'
);

$router->post("/categoria/editar",
    'Php\Biblioteca\Controller\CategoriaController@editar'
);





#$router->get("/", function(){ echo "Olá mundo";});
$resultado = $router->handler();

if(!$resultado){
    http_response_code(404);
    echo "Página não encontrada!";
    die();
}

$resultado = explode("@", $resultado);
$controller = new $resultado[0];
$action = $resultado[1];
echo $controller->$action($router->getParams());