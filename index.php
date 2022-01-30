<?php

require_once 'app/Core/Core.php';
require_once 'app/controller/HomeController.php';

$template = file_get_contents('app/template/estrutura.html');

$core = new Core;
$core->start($_GET);

echo $template;