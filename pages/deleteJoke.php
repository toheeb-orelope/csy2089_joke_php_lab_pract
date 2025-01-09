<?php
if (isset($_GET['id'])) {

    $id = $_GET['id'];


    //Calling a func from a class
    $myJokes->genDelete('id', $id);
}



$output = loadTemplate('../templates/displayJokes.html.php', []);