<?php
/*

require 'database.php';
require '../loadTemplate/loadTemplate.php';
require '../classes/database.php';

$myJokes = new Database($pdo, 'jokes', 'id');


$jokes = $myJokes->genFindAll();

$variables = ['jokes' => $jokes];

$title = 'Joke list';
// ob_start();
// require_once('../templates/displayJokes.html.php');
// $output = ob_get_clean();

//Using without execute() and fetchAll() or extra variable
// $output = loadTemplate('../templates/displayJokes.html.php', ['jokes' => $jokes]);

$output = loadTemplate('../templates/displayJokes.html.php', $variables);

require '../templates/layout.html.php';
*/