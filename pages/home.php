<?php

$title = 'Internet Joke Database';

// ob_start();
// require '../templates/welcomePage.html.php';
// if (isset($_GET['id'])) {
// $joke = find($pdo, 'jokes', 'id', 2);
// }
// $output = ob_get_clean();


$joke = $myJokes->genFind('id', 2);
$output = loadTemlate('../templates/welcomePage.html.php', ['joke' => $joke]);