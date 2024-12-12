<?php
if (isset($_GET['id'])) {


    //Calling the func from the class
    $joke = $myJokes->genFind('id', $_GET['id'][0]);
} else {
    $joke = false;
}

if (isset($_POST['edit'])) {


    //Calling the func from the class
    $myJokes->genSave($_POST['jokes']);

    header('location: jokes.php');
} else {

    $output = $myJokes->loadTemlate('../templates/editJoke.html.php', ['joke' => $joke]);
    $title = 'Edit';
}