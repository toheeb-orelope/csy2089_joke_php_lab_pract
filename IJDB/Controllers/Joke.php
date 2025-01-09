<?php

namespace IJDB\Controllers;
class Joke
{
    public function __construct(public $jokesTable, )
    {
    }


    public function home()
    {

        // var_dump($this->jokesTable->genFind('id', 2)[0]);
        // $title = 'Internet Joke Database';

        // $joke = $this->jokesTable->genFind('id', 2);
        // $output = loadTemplate('../templates/welcomePage.html.php', ['joke' => $joke]);
        return [
            'title' => 'Internet Joke Database',
            'tempName' => '../templates/welcomePage.html.php',
            'variables' => ['joke' => $this->jokesTable->genFind('id', 2)[0]],
        ];
    }

    public function edit()
    {
        if (isset($_GET['id'])) {
            //Calling the func from the class
            $joke = $this->jokesTable->genFind('id', $_GET['id'][0]);
        } else {
            $joke = false;
        }

        if (isset($_POST['edit'])) {


            //Calling the func from the class
            $this->jokesTable->genSave($_POST['jokes']);

            header('location: /list');
        } else {

            // $output = $this->jokesTable->loadTemplate('../templates/editJoke.html.php', ['joke' => $joke]);
            // $title = 'Edit';
            return [
                'title' => 'Edit Joke',
                'tempName' => '../templates/editJoke.html.php',
                'variables' => ['joke' => $joke],
            ];
        }
    }

    public function list()
    {
        $jokes = $this->jokesTable->genFindAll();
        return [
            'title' => 'Joke list',
            'tempName' => '../templates/displayJokes.html.php',
            'variables' => ['jokes' => $jokes],
        ];
    }
}