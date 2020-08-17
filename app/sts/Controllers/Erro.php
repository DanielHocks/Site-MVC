<?php

namespace App\sts\Controllers;

if (!defined('URL')):
    header("Location: http://localhost/celkeEp2-v2/");
endif;

class Erro{

    public function index(){
        echo "Pagina erro <br>";
    }
}