<?php

require_once 'app/Core/Core.php';
require_once 'app/controller/HomeController.php';
require_once 'app/controller/ErroController.php';

$template = file_get_contents('app/template/estrutura.html');

ob_start();
    $core = new Core;
    $core->start($_GET);

    $saida = ob_get_contents();
ob_end_clean();


$tplPronto = str_replace('{{area_dinamica}}', $saida, $template);


var_dump($saida);

echo $tplPronto; 