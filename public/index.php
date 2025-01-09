<?php

require_once __DIR__ . '/autoload.php';

$entryPoint = new \GenericClasses\EntryPoint(new \IJDB\Routes());
$entryPoint->run();
