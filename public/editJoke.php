<?php

/*
require 'database.php';
require '../loadTemplate/loadTemplate.php';
require '../loadTemplate/functions.php';
require '../classes/database.php';

$myJokes = new Database($pdo, 'jokes', 'id');
/*
if (isset($_POST['jokestext'])) {


    save($pdo, 'jokes', $_POST, 'id');
    //Function to update joke
    //old
    // update($pdo, $_POST['jokestext']);

    // genUpdate($pdo, 'jokes', ['jokestext' => $_POST['jokestext'], 'jokedate' => $_POST['jokedate'], 'id' => $_POST['id']], $_POST['id']);

    //Old
    
    $sql = 'UPDATE `jokes` SET jokestext = :jokestext, jokedate = :jokedate WHERE id = :id';

    $stmt = $pdo->prepare($sql);

    $stmt->execute(
        [
            'jokestext' => $_POST['jokestext'],
            'jokedate' => $date->format('Y-m-d H:i:s'),
            'id' => $_POST['id']
        ]
    );
    
    header('location: jokes.php');



} else {

    // ob_start();
    // $stmt = $pdo->prepare('SELECT * FROM jokes WHERE id=:id');
    // $stmt->execute(['id' => $_GET['id']]);
    // $joke = $stmt->fetch();
    // require_once('../templates/editJoke.html.php');
    // $output = ob_get_clean();
    $joke = find($pdo, 'jokes', 'id', $_GET['id']);
    $output = loadTemlate('../templates/editJoke.html.php', ['joke' => $joke]);
    $title = 'Edit';
}

*/
/*
if (isset($_GET['id'])) {

    //Calling a func from a func file
    // $joke = find($pdo, 'jokes', 'id', $_GET['id'][0]);

    //Calling the func from the class
    $joke = $myJokes->genFind('id', $_GET['id'][0]);
} else {
    $joke = false;
}

if (isset($_POST['edit'])) {
    //Calling a func from a func file
    // save($pdo, 'jokes', $_POST['jokes'], 'id');

    //Calling the func from the class
    $myJokes->genSave($_POST['jokes']);

    header('location: jokes.php');
} else {
    //Calling a func from a func file
    // $output = loadTemlate('../templates/editJoke.html.php', ['joke' => $joke]);

    //Calling the func from the class
    $output = $myJokes->loadTemlate('../templates/editJoke.html.php', ['joke' => $joke]);
    $title = 'Edit';
}
// $output = ob_get_clean();
require '../templates/layout.html.php';
*/
