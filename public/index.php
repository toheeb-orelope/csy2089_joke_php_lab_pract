<?php

require 'database.php';
require '../loadTemplate/loadTemplate.php';
require '../loadTemplate/functions.php';
require '../classes/database.php';
require '../controller/controller.php';

$myJokes = new Database($pdo, 'jokes', 'id');
$myController = new Controller($myJokes, $output);


// $pageName = ltrim(explode('?', $_SERVER['REQUEST_URI'])[0], '/');
// $fileDir = '../pages/' . $pageName;

// $pageName = ltrim($_SERVER['REQUEST_URI'], '/');
// $pageName = explode('?', $pageName);
// require '../pages/' . $pageName[0];
// require '../pages/' . $pageName;//This works for only home page.
// require '../pages/' . $pageName . '.php' Not working at all 

$pageName = explode('?', ltrim($_SERVER['REQUEST_URI'], '/'))[0];
$output = $myController->$pageName();

//Using $_SERVER['REQUEST_URI'] 
/*
if ($_SERVER['REQUEST_URI'] !== '/') {
    require '../pages/' . explode('?', ltrim($_SERVER['REQUEST_URI'], '/'))[0] . '.php';
} else {
    require '../pages/home.php';
}
*/


//Manually type the page name on the browser like this index.php?page=pagename
/*
require '../pages/' . $_GET['page'] . '.php';
if (isset($_GET['page'])) {
    require '../pages/' . $_GET['page'] . '.php';
} else {
    require '../pages/home.php';
}
*/

require '../templates/layout.html.php';
