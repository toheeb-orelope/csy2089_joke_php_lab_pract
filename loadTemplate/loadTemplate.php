<?php
//This function is used to load file such as templates file and it value send it to the browser
function loadTemlate($fileName, $variables)
{
    //Extract keyword For each element in the array, it creates a variable with the name of the key
    extract($variables);
    //This is an output buffer anything under type under it is going to be caputre and save it
    ob_start();
    require $fileName;
    //Output buffering this is going to read from the ob_start(); and send it to the page where the varaible is
    $output = ob_get_clean();
    return $output;
}
