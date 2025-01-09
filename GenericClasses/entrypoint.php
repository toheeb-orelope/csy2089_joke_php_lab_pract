<?php
namespace GenericClasses;

class EntryPoint
{
    public function __construct(public \IJDB\Routes $routes)
    {
    }
    public function run()
    {
        // require '../public/autoload.php';
        require '../loadTemplate/loadTemplate.php';
        require '../loadTemplate/functions.php';

        $pageName = ltrim(explode('?', $_SERVER['REQUEST_URI'])[0], '/');
        $page = $this->routes->getPage($pageName);

        $title = $page['title'];
        $output = $this->loadTemplate($page['tempName'], $page['variables']);
        require '../templates/layout.html.php';
    }

    public function loadTemplate($fileName, $templateVars)
    {
        extract($templateVars);
        ob_start();
        require $fileName;
        $contents = ob_get_clean();
        return $contents;
    }
}