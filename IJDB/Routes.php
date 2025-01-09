<?php

namespace IJDB;
class Routes
{
    public function getPage($pageName)
    {
        require '../public/DBConfig.php';
        $jokesTable = new \GenericClasses\DatabaseTable($pdo, 'jokes', 'id');
        $categoriesTable = new \GenericClasses\DatabaseTable($pdo, 'category', 'id');
        $controllers = [];
        $controllers['joke'] = new \IJDB\Controllers\Joke($jokesTable);
        $controllers['category'] = new \IJDB\Controllers\Category($categoriesTable);

        $route = $pageName;

        if ($route == '') {
            $page = $controllers['joke']->home();
        } else {
            list($controllerName, $functionName) = explode('/', $route);
            $controller = $controllers[$controllerName];
            $page = $controller->$functionName();
        }
        return $page;
    }
}
