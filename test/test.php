<?php

require_once '../vendor/autoload.php';

use ChatApp\Database\Database;

use ChatApp\Templates\Template;

echo Database::test();
echo PHP_EOL;
echo Template::test();
echo PHP_EOL;