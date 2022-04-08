<?php

use Framework\HTTP\Request;

chdir(dirname(__DIR__));

require 'vendor/autoload.php';

$request = new Request();

$name = $request->getQueryParams()['name'] ?? 'World';
header('X-Developer: Nikolay D.');
echo "<h1>Hello, $name!</h1>";