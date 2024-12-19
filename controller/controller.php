<?php

class Controller
{
    public function __construct(public $myJokes, )
    {
    }


    public function home()
    {

        var_dump($this->myJokes->genFind('id', 2)[0]);
        // $title = 'Internet Joke Database';

        // $joke = $this->myJokes->genFind('id', 2);
        // $output = loadTemlate('../templates/welcomePage.html.php', ['joke' => $joke]);
        return [
            'title' => 'Internet Joke Database',
            'tempName' => '../templates/welcomePage.html.php',
            'variables' => ['joke' => $this->myJokes->genFind('id', 2)[0]],
        ];
    }

    public function editJoke()
    {
        if (isset($_GET['id'])) {


            //Calling the func from the class
            $joke = $this->myJokes->genFind('id', $_GET['id'][0]);
        } else {
            $joke = false;
        }

        if (isset($_POST['edit'])) {


            //Calling the func from the class
            $this->myJokes->genSave($_POST['jokes']);

            header('location: /jokes');
        } else {

            // $output = $this->myJokes->loadTemlate('../templates/editJoke.html.php', ['joke' => $joke]);
            // $title = 'Edit';
            return [
                'title' => 'Edit Joke',
                'tempName' => '../templates/editJoke.html.php',
                'variables' => ['joke' => $joke],
            ];
        }
    }

    public function jokes()
    {
        $jokes = $this->myJokes->genFindAll();
        return [
            'title' => 'Joke list',
            'tempName' => '../templates/displayJokes.html.php',
            'variables' => ['jokes' => $jokes],
        ];
    }
}