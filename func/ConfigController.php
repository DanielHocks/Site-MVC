<?php

    namespace Func;

    if (!defined('URL')):
        header("Location: http://localhost/celkeEp2-v2/");
    endif;

class ConfigController{

    private string $url;
    public  function __construct(){
        if (!empty(filter_input(INPUT_GET, "url", FILTER_DEFAULT))):
            $this->url = filter_input(INPUT_GET, "url", FILTER_DEFAULT);
        else:
            $this->url = "home";
        endif;
        //echo "Página: {$this->url} <br>";
    }

    public function carregar(){
       /* require 'app/sts/Controllers/Home.php';
        $pagina = new Home();
        $pagina->index();
        require 'app/sts/Controllers/Erro.php';
        $paginaErro = new Erro();
        $paginaErro->index();*/

        $urlControllers = ucwords($this->url);
        $this->config();
        $classe = "\\App\\sts\\Controllers\\" . $urlControllers;
        //echo "Classe: " . $classe . "<br>";
        $classeCarregar = new $classe;
        $classeCarregar -> index();
    }

    private function config(){
        define('URL','http://localhost/celkeEp2-v2/');
    }
}

?>