<?php

if (!defined('URL')):
    header("Location: http://localhost/celkeEp2-v2/");
endif;

?>
<div class="jumbotron rodape">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-4 col-xs-12">
                <h5 id="barbeshop"><?= $this->dados['rodape']['titulo_pg']?></h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="#inicio" class="link-rodape">Home</a>
                    </li>
                    <li>
                        <a href="#servicos" class="link-rodape">Serviço</a>
                    </li>
                    <li>
                        <a href="#descricao" class="link-rodape">Descrição</a>
                    </li>
                    <li>
                        <a href="#contato" class="link-rodape">Contato</a>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-xs-12">
                <h5 id="contato2"><?= $this->dados['rodape']['subtitulo_contato']?></h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="<?= $this->dados['rodape']['link_telefone']?>" class="link-rodape"><img src='<?= URL ?>app/sts/assets/imagens/rodape/phone.png'> <?= $this->dados['rodape']['txt_telefone']?></a>
                    </li>
                    <li>
                        <a href="#" class="link-rodape"><img src='<?= URL ?>app/sts/assets/imagens/rodape/map.png'> <?= $this->dados['rodape']['txt_end']?></a>
                    </li>
                    <li>
                        <a href="#" class="link-rodape"><img src='<?= URL ?>app/sts/assets/imagens/rodape/list.png'> <?= $this->dados['rodape']['txt_cnpj']?></a>
                    </li>
                    <li>
                        <a href="<?= $this->dados['rodape']['link_email']?>" class="link-rodape"><img src='<?= URL ?>app/sts/assets/imagens/rodape/gmail.png'> <?= $this->dados['rodape']['txt_email']?></a>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-xs-12">
                <h5 id="redeSocial"><?= $this->dados['rodape']['titulo_rede_soc']?></h5>
                <ul class="list-unstyled">
                    <li style="margin-bottom: 20px;">
                        <a href="<?= $this->dados['rodape']['link_um_rede_soc']?>" target="_blank" class="link-rodape"><img id="facebook" src='<?= URL ?>app/sts/assets/imagens/rodape/facebook.png'>&nbsp; <?= $this->dados['rodape']['txt_um_rede_soc']?></a>
                    </li>
                    <li style="margin-bottom: 20px;">
                        <a href="<?= $this->dados['rodape']['link_dois_rede_soc']?>" target="_blank" class="link-rodape"><img id="facebook" src='<?= URL ?>app/sts/assets/imagens/rodape/instagram.png'>&nbsp; <?= $this->dados['rodape']['txt_dois_rede_soc']?></a>
                    </li>
                    <li>
                        <a href="<?= $this->dados['rodape']['link_tres_rede_soc']?>" target="_blank" class="link-rodape"><img id="facebook" src='<?= URL ?>app/sts/assets/imagens/rodape/youtube.png'>&nbsp; <?= $this->dados['rodape']['txt_tres_rede_soc']?></a>
                    </li>
                </ul>
            </div>
            <p>Site feito por Daniel Henrique C. Ferreira</p>
        </div>
    </div>
</div>
