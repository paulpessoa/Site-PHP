<?php

    class Core
    {
        public function start ($urlGet)
        {
            $controller = ucfirst($urlGet['pagina'].'Controller');  


            if (!class_exists($controller)) {
                $controller = 'ErroController';
            }
            echo $controller;
        }
    }