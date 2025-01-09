<?php
$jokes = $myJokes->genFindAll();

$variables = ['jokes' => $jokes];

$title = 'Joke list';

$output = loadTemplate('../templates/displayJokes.html.php', $variables);