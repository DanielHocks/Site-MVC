<?php

if (!defined('URL')):
    header("Location: http://localhost/celkeEp2-v2/");
endif;

?>

<!-- Menu do site -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top bg-dark">
    <a class="navbar-brand" href="#"><img id="logo" src='<?= URL ?>app/sts/assets/imagens/home_topo/<?= $this->dados['home_topo']['imagem_logo']?>'></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse"  id="navbarColor02">
        <ul class="navbar-nav  ml-auto">
            <li class="nav-item ">
                <a class="nav-link" href="#inicio">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#servicos">Serviços</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#descricao">Descrição</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contato">Contato</a>
            </li>
        </ul>
    </div>
</nav>

<!-- Parte de Serviços -->
<div class="jumbotron text-center descr-top" style=" background-image: url('<?= URL ?>app/sts/assets/imagens/home_topo/<?= $this->dados['home_topo']['imagem_topo']?>');">
    <h2><a name="inicio" class="link1"></a></h2>
    <div class="container">
        <div id="text-inital">
            <h1 class="display-3 mb-4 titulo"><?= $this->dados['home_topo']['titulo_topo']?></h1>
            <p class="lead mb-4"><?= $this->dados['home_topo']['subtitulo_topo']?></p>
            <p>
                <a class="btn btn-outline-primary btn-lg" href="<?= $this->dados['home_topo']['link_btn_topo']?>"><?= $this->dados['home_topo']['text_btn_topo']?><i class="fa fa-arrow-right" aria-hidden="true"></i>
                </a>
            </p>
        </div>
    </div>
</div>

<div class="jumbotron servicos">
    <h2><a name="servicos" class="link2"></a></h2>
    <div class="container text-center">
        <h2 class="display-4"><?= $this->dados['serv']['titulo_serv']?></h2>
        <p class="lead pb-4"><?= $this->dados['serv']['subtitulo_serv']?></p>
        <div class="row">
            <div class="col-lg-4 col-sm-12 col-xs-12">
                <div class="rounded-circle circulo centralizar border border-info">
                    <img src='<?= URL ?>app/sts/assets/imagens/home_servicos/beer.png'>
                </div>
                <h2 class="mt-4 mb-4"><?= $this->dados['serv']['titulo_um_serv']?></h2>
                <p><?= $this->dados['serv']['desc_um_serv']?></p>
            </div>
            <div class="col-lg-4 col-sm-12 col-xs-12">
                <div class="rounded-circle circulo centralizar border border-info">
                    <img src='<?= URL ?>app/sts/assets/imagens/home_servicos/air-conditioner.png'>
                </div>
                <h2 class="mt-4 mb-4"><?= $this->dados['serv']['titulo_dois_serv']?></h2>
                <p><?= $this->dados['serv']['desc_dois_serv']?></p>
            </div>
            <div class="col-lg-4 col-sm-12 col-xs-12">
                <div class="rounded-circle circulo centralizar border border-info">
                    <img src='<?= URL ?>app/sts/assets/imagens/home_servicos/wifi.png'>
                </div>
                <h2 class="mt-4 mb-4"><?= $this->dados['serv']['titulo_tres_serv']?></h2>
                <p><?= $this->dados['serv']['desc_tres_serv']?></p>
            </div>
        </div>
    </div>
</div>

<div class="jumbotron desc-chamada" style=" background-image: url('<?= URL ?>app/sts/assets/imagens/home_acao/<?= $this->dados['acao']['imagem_acao']?>');">
    <h2><a name="descricao" class="link3"></a></h2>
    <div class="container text-center">
        <h4 class=""><?= $this->dados['acao']['titulo_acao']?></h4>
        <h2 class="display-4 mb-4"> <?= $this->dados['acao']['subtitulo_acao']?></h2>
        <h5><?= $this->dados['acao']['desc_acao']?> <img src='<?= URL ?>app/sts/assets/imagens/home_acao/hair.png'> </h5>
        <br>
        <a href="#" class="btn btn-success"><?= $this->dados['acao']['text_btn_acao']?> <i class="fa fa-arrow-right" aria-hidden="true"></i> </a>
    </div>
</div>

<div class="jumbotron contato">
    <h2><a name="contato" class="link4"></a></h2>
    <div class="container">
        <h2 class="display-4 mb-4 text-center"><?= $this->dados['contato']['titulo_contato']?></h2>
        <br>
        <div class="row">
            <div class="col-lg-6">
                <h2 class="mt-4 mb-4"><?= $this->dados['contato']['subtitulo_contato']?></h2>
                <p><?= $this->dados['contato']['end_contato']?></p>
                <p><?= $this->dados['contato']['tel_contato']?></p>
                <p><?= $this->dados['contato']['email_contato']?></p>
            </div>
            <div class="col-lg-6">
                <form>
                    <div class="form-group">
                        <label for="nome">Nome:</label>
                        <input type="text" class="form-control" id="nome" name="nome" aria-describedby="emailHelp" placeholder="Informe seu nome" required>

                    </div>
                    <div class="form-group">
                        <label for="email">E-mail:</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Informe seu email" required>
                    </div>
                    <div class="form-group">
                        <label for="assunto">Assunto:</label>
                        <input type="text" class="form-control" id="assunto" name="assunto" placeholder="Assunto da mensgem" required>
                    </div>
                    <div class="form-group">
                        <label for="mensagem">Mensagem</label>
                        <textarea class="form-control" id="mensagem" rows="5" required></textarea>
                        <small class="form-text ">Descreva com suas palavras e seja breve.</small>
                    </div>

                    <button type="submit" class="btn btn-primary col-3">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</div>


<?php //var_dump($this->dados);