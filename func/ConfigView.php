<?php


namespace Func;

//bloqueando entrada direta nessa arquivo
if (!defined('URL')):
    header("Location: http://localhost/celkeEp2-v2/");
endif;

class ConfigView{

    private string $nome;
    private $dados;

    public function __construct($nome, array $dados){
        $this->nome = $nome;
        $this->dados= $dados;
    }

    public function renderizar(){
        if (file_exists('app/' . $this->nome . '.php')):
            include_once 'app/sts/Views/include/head.php';
            include_once 'app/' . $this->nome . '.php';
            include_once 'app/sts/Views/include/rodape.php';
            include_once 'app/sts/Views/include/footer.php';


        else:
            echo "Erro ao carregar à página <br>";
            echo "Erro ao carregar view: {$this->nome} <br>";
        endif;
    }
}