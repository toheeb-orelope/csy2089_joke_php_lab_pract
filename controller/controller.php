<?php

class Controller
{
    public function __construct(public $myJokes, public $output)
    {
    }


    public function home()
    {

        $title = 'Internet Joke Database';

        $joke = $this->myJokes->genFind('id', 2);
        $this->output = loadTemlate('../templates/welcomePage.html.php', ['joke' => $joke]);
        return $this->output;
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

            header('location: jokes.php');
        } else {

            $this->output = $this->myJokes->loadTemlate('../templates/editJoke.html.php', ['joke' => $joke]);
            $title = 'Edit';
            return $this->output;
        }
    }

    public function jokes()
    {
        $jokes = $this->myJokes->genFindAll();

        $variables = ['jokes' => $jokes];

        $title = 'Joke list';

        $this->output = loadTemlate('../templates/displayJokes.html.php', $variables);
        return $this->output;
    }
}