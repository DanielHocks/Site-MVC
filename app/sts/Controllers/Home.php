<?php

namespace App\sts\Controllers;

use App\sts\Models\StsHome;
use Func\ConfigView;

if (!defined('URL')):
    header("Location: http://localhost/celkeEp2-v2/");
endif;

class Home{

    private $dados;

    public function index(){
        //precisa buscar informação no banco de dados ?
        //sim, instancia a model
       $viewHome =  new StsHome();
       //retorno da model e a controllers recebe os dados
       $this->dados = $viewHome->index();

       //carregando a view
       $carregarView = new ConfigView("sts/Views/home/home", $this->dados);
       $carregarView->renderizar();
    }
}