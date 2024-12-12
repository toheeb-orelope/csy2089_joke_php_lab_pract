<?php
/*

require 'database.php';
require '../loadTemplate/loadTemplate.php';
require '../loadTemplate/functions.php';
require '../classes/database.php';

$myJokes = new Database($pdo, 'jokes', 'id');

if (isset($_GET['id'])) {
    // $stmt = $pdo->prepare('DELETE  FROM jokes WHERE id=:id');
    // $stmt->execute(['id' => $_GET['id']]);

    $id = $_GET['id'];
    //Calling a func from a func file
    // delete($pdo, 'jokes', 'id', $id);

    //Calling a func from a class
    $myJokes->genDelete('id', $id);
}


//This is to hold the value
// ob_start();
// require_once('../templates/displayJokes.html.php');
// $output = ob_get_clean();

$output = loadTemlate('../templates/displayJokes.html.php', []);
require_once('../templates/deleteJoke.php');
*/
