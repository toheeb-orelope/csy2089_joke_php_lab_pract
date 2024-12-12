<?php
$jokes = $myJokes->genFindAll();

$variables = ['jokes' => $jokes];

$title = 'Joke list';

$output = loadTemlate('../templates/displayJokes.html.php', $variables);