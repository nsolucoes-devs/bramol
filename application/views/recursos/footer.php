<?php#0b193c
$iphone = strpos($_SERVER['HTTP_USER_AGENT'], "iPhone");
$ipad = strpos($_SERVER['HTTP_USER_AGENT'], "iPad");
$android = strpos($_SERVER['HTTP_USER_AGENT'], "Android");
$palmpre = strpos($_SERVER['HTTP_USER_AGENT'], "webOS");
$berry = strpos($_SERVER['HTTP_USER_AGENT'], "BlackBerry");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'], "iPod");
$symbian =  strpos($_SERVER['HTTP_USER_AGENT'], "Symbian");
if ($iphone || $ipad || $android || $palmpre || $ipod || $berry || $symbian == true) {
    $mobile_view = true;
} else {
    $mobile_view = false;
}
?>

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/fontawesome5/css/all.css">

<style>
    .footer {
        background-color: #bd3034;
        z-index: 99;
    }

    .f-white {
        color: white;
        font-size: 11px;
        line-height: 13px;
        margin-bottom: 5px;
    }

    .f-white b {
        color: white;
        font-size: 11px;
        line-height: 13px;
        margin-bottom: 5px;
        font-weight: bold;
    }

    .cookie-pc {
        width: 100%;
        display: block;
        padding: 10px 20px;
    }

    .cookie-mob {
        width: 100%;
        display: none;
    }

    #div_cookies {
        z-index: 1000;
        position: fixed;
        bottom: 10px;
        width: 80%;
        margin-left: 10%;
        margin-right: 10%;
        background-color: white;
        -webkit-box-shadow: 0 0 10px grey;
        box-shadow: 0 0 10px grey;
    }

    .cookie-10 {
        flex: 0 0 83.33%;
        max-width: 83.33%;
        width: 83.33%;
        float: left;
        padding: 10px 20px;
    }

    .cookie-2 {
        flex: 0 0 16.66%;
        max-width: 16.66%;
        width: 16.66%;
        height: 100%;
        float: left;
        position: relative;
    }

    .frase {
        font-size: 12px;
        color: black;
        font-weight: bold;
        margin-bottom: 10px;
        text-align: justify;
        line-height: 20px;
        margin-bottom: 0;
    }

    #acc_cookies,
    #acc_cookies2 {
        color: white;
        border-radius: 0;
        padding: 15px 20px 15px 20px;
        font-size: 14px;
        width: 100%;
        height: 100%;
        background-color: #7800a7;
        border-color: #7800a7;
    }

    #acc_cookies2 {
        display: none;
    }

    #footer-mob {
        display: none;
    }

    .large-modal {
        width: 70%;
        max-width: 70%;
    }

    .espacamento-icone {
        margin: 5%;
    }

    /* XX-Small devices (300px and up) */
    @media (min-width: 299px) and (max-width: 398px) {
        #footer-pc {
            display: none;
        }

        #footer-mob {
            display: block;
        }

        .large-modal {
            width: 95%;
            max-width: 95%;
        }

        footer {
            font-size: 40px !important;
        }

        .cookie-pc {
            display: none;
        }

        .cookie-mob {
            display: block;
            padding: 10px 20px;
        }

        .cookie-12 {
            flex: 0 0 100%;
            max-width: 100%;
            float: left;
            position: relative;
        }

        .frase {
            line-height: 13px;
        }

        .cookie-10 {
            flex: 0 0 70%;
            max-width: 70%;
            float: left;
            padding: 10px 20px;
        }

        .cookie-2 {
            flex: 0 0 30%;
            max-width: 30%;
            float: left;
            position: relative;
        }

        #acc_cookies {
            display: none;
        }

        #acc_cookies2 {
            display: block;
            text-align: center;
            margin-top: 10px;
            font-size: 12px;
            line-height: 0px;
        }
    }

    /* X-Small devices (iPhone and others mobiles, 400px and up) */
    @media (min-width: 399px) and (max-width: 574px) {
        #footer-pc {
            display: none;
        }

        #footer-mob {
            display: block;
        }

        .large-modal {
            width: 95%;
            max-width: 95%;
        }

        footer {
            font-size: 40px !important;
        }

        .cookie-pc {
            display: none;
        }

        .cookie-mob {
            display: block;
            padding: 10px 20px;
        }

        .cookie-12 {
            flex: 0 0 100%;
            max-width: 100%;
            float: left;
            position: relative;
        }

        .frase {
            line-height: 13px;
        }

        .cookie-10 {
            flex: 0 0 70%;
            max-width: 70%;
            float: left;
            padding: 10px 20px;
        }

        .cookie-2 {
            flex: 0 0 30%;
            max-width: 30%;
            float: left;
            position: relative;
        }

        #acc_cookies {
            display: none;
        }

        #acc_cookies2 {
            display: block;
            text-align: center;
            margin-top: 10px;
            font-size: 12px;
            line-height: 0px;
        }

        .espacamento-icone {
            margin-right: 5%;
        }
    }

    /* Small devices (landscape phones, 576px and up) */
    @media (min-width: 575px) and (max-width: 766px) {
        #footer-pc {
            display: none;
        }

        #footer-mob {
            display: block;
        }

        .large-modal {
            width: 95%;
            max-width: 95%;
        }

        footer {
            font-size: 40px !important;
        }

        .cookie-pc {
            display: none;
        }

        .cookie-mob {
            display: block;
        }

        .cookie-12 {
            flex: 0 0 100%;
            max-width: 100%;
            float: left;
            position: relative;
        }

        .frase {
            line-height: 13px;
        }

        .cookie-10 {
            flex: 0 0 70%;
            max-width: 70%;
            float: left;
            padding: 10px 20px;
        }

        .cookie-2 {
            flex: 0 0 30%;
            max-width: 30%;
            float: left;
            position: relative;
        }

        #acc_cookies {
            display: none;
        }

        #acc_cookies2 {
            display: block;
            text-align: center;
            margin-top: 10px;
            font-size: 12px;
            line-height: 0px;
        }
    }

    /* Medium devices (tablets, 768px and up) */
    @media (min-width: 767px) and (max-width: 990px) {
        <?php $tablet = 1; ?>#footer-pc {
            display: none;
        }

        #footer-mob {
            display: block;
        }

        .large-modal {
            width: 95%;
            max-width: 95%;
        }

        footer {
            font-size: 40px !important;
        }

        .cookie-pc {
            display: none;
        }

        .cookie-mob {
            display: block;
            padding: 10px 20px;
        }

        .cookie-12 {
            flex: 0 0 100%;
            max-width: 100%;
            float: left;
            position: relative;
        }

        .frase {
            line-height: 13px;
        }

        .cookie-10 {
            flex: 0 0 70%;
            max-width: 70%;
            float: left;
            padding: 10px 20px;
        }

        .cookie-2 {
            flex: 0 0 30%;
            max-width: 30%;
            float: left;
            position: relative;
        }

        #acc_cookies {
            display: none;
        }

        #acc_cookies2 {
            display: block;
            text-align: center;
            margin-top: 10px;
            font-size: 12px;
            line-height: 0px;
        }

        .div-social {
            margin-top: -3%;
        }

        .formas-pagamento-ipad {
            margin: -7% 4% 0% 4% !important;
        }
    }

    /* Large devices (desktops, 992px and up) */
    @media (min-width: 991px) and (max-width: 1198px) {
        <?php $tablet = 1; ?>#footer-pc {
            display: none;
        }

        #footer-mob {
            display: block;
        }

        .large-modal {
            width: 95%;
            max-width: 95%;
        }

        footer {
            font-size: 40px !important;
        }

        .cookie-pc {
            display: none;
        }

        .cookie-mob {
            display: block;
            padding: 10px 20px;
        }

        .cookie-12 {
            flex: 0 0 100%;
            max-width: 100%;
            float: left;
            position: relative;
        }

        .frase {
            line-height: 13px;
        }

        .cookie-10 {
            flex: 0 0 70%;
            max-width: 70%;
            float: left;
            padding: 10px 20px;
        }

        .cookie-2 {
            flex: 0 0 30%;
            max-width: 30%;
            float: left;
            position: relative;
        }

        #acc_cookies {
            display: none;
        }

        #acc_cookies2 {
            display: block;
            text-align: center;
            margin-top: 10px;
            font-size: 12px;
            line-height: 0px;
        }

        .div-social {
            margin-top: -3%;
        }

        .formas-pagamento-ipad {
            margin: -7% 4% 0% 4% !important;
        }
    }

    /* X-Large devices (large desktops, 1200px and up) */
    @media (min-width: 1199px) and (max-width: 1398px) {}

    /* XX-Large devices (larger desktops, 1400px and up) */
    @media (min-width: 1399px) {}

    #back-top {
        left: 15px;
        right: unset;
        bottom: 52px;
        background-color: grey;
        border-color: grey;
        opacity: 0.7;
        box-shadow: unset;
        z-index: 999;
        display: none;
    }

    .link-footer {
        cursor: pointer;
    }

    .p-footer {
        color: #a7a7a7;
        ;
        margin: 0;
        padding: 0;
        font-size: 12px;
        line-height: 18px;
        cursor: pointer;
    }

    .p-footer:hover {
        color: white;
    }

    footer {
        width: 100%;
        background: #bd3034;
    }

    .social-footer {
        font-size: 25px;
        position: absolute;
        color: white;
    }

    .social-footer:hover {
        color: #d4d3cf;
    }

    .fa-arrow-up {
        color: black;
    }

    .copyright {
        padding: 25px 0 0;
        font-size: 15px;
        border-top: 1px solid rgba(256, 256, 256, .1);
    }

    #back-top {
        background: #EC9706;
        /*afd4fa*/
        color: black;
        left: unset;
        right: 20px;
        position: fixed;
        border-radius: 100%;
        padding: 5px 16px;
    }

    .new-cookie {
        visibility: hidden;
    }

    #new-cookie {
        z-index: 1000;
        position: fixed;
        width: 100%;
        margin-left: 0;
        margin-right: 0;
        background-color: white;
        bottom: 0;
        visibility: visible;
        box-shadow: 0px 0 10px rgba(0, 0, 0, 0.8);
    }

    .new-cookie-btn {
        font-size: 11px;
        margin-top: -4px;
        color: white;
        border: 2px solid #3a0b0c;
        background-color: #3a0b0c;
    }

    <?php if ($mobile_view) { ?>#back-top {
        float: right;
    }

    <?php } ?>#footer-pc .row {
        margin-left: 0;
        margin-right: 0;
    }

    p a {
        border: 0 !important;
    }

    p a:hover {
        background: 0;
    }
</style>

<div class="row new-cookie" id="new-cookie" style="display: none">
    <div class="cookie-pc col-md-12">
        <div class="row">
            <div class="col-md-10">
                <p class="frase" style="margin-top: 5px;">Ao clicar em "Aceitar e Fechar", voc?? concorda com o armazenamento de cookies em seu dispositivo. Para mais detalhes, leia nossa <span data-toggle="modal" data-target="#privacidade" style="color: red; cursor: pointer">Pol??tica de Privacidade</span>.</p>
            </div>
            <div class="col-md-2">
                <button type="button" class="btn btn-primary" onclick="acceptCookie()" style="height: auto; padding: 4px;">Aceitar e Fechar</button>
            </div>
        </div>
    </div>

    <div class="cookie-mob col-md-12">
        <div class="row">
            <div class="col-md-12" style="margin-bottom: 30px">
                <p class="frase text-center" style="margin-top: 5px;">N??s usamos cookies para aprimorar seu acesso.<br> Ver <a style="color: red" data-toggle="modal" data-target="#privacidade">Pol??tica de Privacidade</a>.</p>
            </div>
            <div class="col-md-12 text-center" style="margin-bottom: 10px">
                <button type="button" class="btn btn-primary" onclick="acceptCookie()" style="height: auto; padding: 4px;">Aceitar e Fechar</button>
            </div>
        </div>
    </div>
</div>
</main>

<footer <?php if ($mobile_view == 1) { ?> style="margin-bottom: -5%;" <?php } ?> >
    <!-- Footer Start-->
    <div id="footer-pc" style="background: #bd3034; width: 100%; padding-top: 3%; background: -webkit-linear-gradient(top, #e02f36, #bd3034, #9d3033, #7a2e31);">
        <div class="row">
            
            <div class="col-md-6">
                <div class="endereco-ipad" style="">
                    <ul>
                        <li style="color: white; font-size: 14px; list-style-type: none; font-weight:bold; padding-bottom: 7px;">Bramol </li>
                        <li style="color: white; font-size: 14px; list-style-type: none; padding-bottom: 7px;"><i class="fa fa-phone-alt text-primary me-2" style="color: #ec9706 !important;"></i> (34) 3336-6226 </li>
                        <li style="color: white; font-size: 14px; list-style-type: none; padding-bottom: 7px;"><i class="fas fa-map-marker-alt text-primary me-2" style="color: #ec9706 !important;"></i>&nbsp Av. Bar??o do Rio Branco, 1877 - S??o Benedito, Uberaba - MG, 38020-300 </li>
                        <li style="color: white; font-size: 14px; list-style-type: none; padding-bottom: 7px;"><i class="fas fa-envelope text-primary me-2" style="color: #ec9706 !important;"></i>&nbsp contato@bramol.com.br </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row justify-content-center">
                        <h5 style="color: white; font-size: 14px; list-style-type: none; font-weight:bold; padding-bottom: 7px ;">Conhe??a nossas redes sociais</h5>
                        <div class="col-4 my-4 p-0" style="margin-left: -30%;">
                            <a href="https://www.facebook.com/bramoltintaserevestimentos/" target="_blank" style="margin: 5%;">
                                <i class="social-footer fab fa-facebook" aria-hidden="true" style="color: #ec9706;"></i>
                            </a>
                        
                            <a href="https://www.instagram.com/bramoltintasoficial/" target="_blank" style="margin: 20%;">
                                <i class="social-footer fab fa-instagram" aria-hidden="true" style="color: #ec9706;"></i>
                            </a>
                        
                            <a href="#" target="_blank" style="margin: 5%;">
                                <i class="social-footer fab fa-youtube" aria-hidden="true" style="color: #ec9706;"></i>
                            </a>
                        </div>
                </div>                 
            </div>
            <div class="row col-12">
                <div class="col-md-6 text-center mb-5 mb-md-0">
                    <p style="color: white; font-size: 11px;">?? Bramol, todos os direitos reservados. </p>        
                </div>
                <div class="col-md-6 text-center mb-5 mb-md-0" style="text-align: right; padding-right: 2%;">
                    <p style="color: white; font-size: 11px;">Desenvolvido por <a style="color: white; margin-right: 15%;" href="https://www.nsolucoes.digital/">N Solu????es</a></p>
                </div>
            </div>               
        </div>
        <!-- <img class="img-fluid" src="imagens/site/footer.jpg"> -->
    </div>

    <?php if ($mobile_view == 0) { ?>
        <!-- Footer mobile -->
        <div id="footer-mob" class="row w-100  text-center mx-auto" style="background: #bd3034; margin: 0%; background: -webkit-linear-gradient(top, #e02f36, #bd3034, #9d3033, #7a2e31); overflow-x: hidden;">
            <div>
                <div class="text-center form-group div-logo" style="padding-top: 10%">
                    <img class="logo-img" style="z-index: 40; width: 170px;" src="<?php echo base_url('imagens/site/logo/01.png') ?>" alt="logo" title="Bramol">
                </div>
                <div class="text-center form-group div-social" style="">
                    <a href="https://www.facebook.com/Datacomnotebook/?ref=bookmarks" class="espacamento-icone" target="_blank">
                        <i class="social-footer fab fa-facebook" aria-hidden="true" style="color: #EC9706; position: relative !important"></i>
                    </a>

                    <a href="https://www.instagram.com/datacomnotebook/?hl=pt-br" class="espacamento-icone" target="_blank">
                        <i class="social-footer fab fa-instagram" aria-hidden="true" style="color: #EC9706; position: relative !important"></i>
                    </a>

                    <a href="#" class="espacamento-icone" target="_blank">
                        <i class="social-footer fab fa-youtube" aria-hidden="true" style="color: #EC9706; position: relative !important"></i>
                    </a>                    
                </div>

                <hr style="border-top: 1px solid rgba(256, 256, 256, .1)">

                <div class="contato-div-ipad text-center form-group" style="">
                    <li style="color: white; font-size: 14px; list-style-type: none; padding-bottom: 7px;"><i class="fa fa-phone-alt text-primary me-2" style="color: #EC9706!important;"></i> (34) 3336-6226</li>
                    <li style="color: white; font-size: 14px; list-style-type: none; padding-bottom: 7px;"><i class="fas fa-map-marker-alt text-primary me-2" style="color: #EC9706!important;"></i>&nbsp Av. Bar??o do Rio Branco, 1877 - S??o Benedito, <br>Uberaba - MG, 38020-300 </li>
                    <li style="color: white; font-size: 14px; list-style-type: none; padding-bottom: 7px;"><i class="fas fa-envelope text-primary me-2" style="color: #EC9706!important;"></i>&nbsp contato@bramol.com.br </li>
                </div>
                <hr style="border-top: 1px solid rgba(256, 256, 256, .1); width: 107%;">
                <div class="<?php if ($tablet == 1) { ?>mb-3<?php } ?>">
                    <div style="font-size: 12px; color:grey;" class="row">
                        <div class="<?php if ($tablet == 1) { ?> col-md-6 text-center mb-3 mb-md-0<?php } else { ?> col-md-4 text-center mb-3 mb-md-0 <?php } ?>">
                            <p style="color: white; font-size: 11px;">?? Bramol, todos os direitos reservados.</p>

                        </div>
                        <div class="<?php if ($tablet == 1) { ?> col-md-6 text-center mb-3 mb-md-0<?php } else { ?> col-md-4 text-center mb-3 mb-md-0 <?php } ?>" style="text-align: right; padding-right: 2%;">
                            <p style="color: white; font-size: 11px;">Desenvolvido por <a style="color: white;" href="https://www.nsolucoes.digital/">N Solu????es</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    <!-- Footer End-->
</footer>

<div class="modal" tabindex="-1" role="dialog" id="sobre" style="z-index: 1041">
    <div class="modal-dialog modal-dialog-centered large-modal" role="document">
        <div class="modal-content">
            <div class="modal-header" style="border-bottom: 0; padding: 10px 20px;">
                <h5 class="modal-title" style="color: black; font-weight: bold; font-size: 16px;">Sobre a Loja</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="padding: 10px 20px;">
                <div class="row">
                    <div class="col-md-12">
                        <?php if (isset($sobre_loja)) { ?>
                            <?php echo $sobre_loja ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="modal-footer" style="border-top: 0; padding: 10px 20px;">
                <div style="width: 100px">
                    <button type="button" class="btn-main" data-dismiss="modal" style="font-size: 14px">Fechar</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal" tabindex="-1" role="dialog" id="nossaloja" style="z-index: 1041">
    <div class="modal-dialog modal-dialog-centered large-modal" role="document">
        <div class="modal-content">
            <div class="modal-header" style="border-bottom: 0; padding: 10px 20px;">
                <h2 class="modal-title" style="color: black; font-weight: bold;">Nossa Loja</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="padding: 10px 20px;">
                <div class="row">
                    <div class="col-md-12">
                        <div class="container" style="margin-top:2%; margin-bottom: 5%">
                            <div class="row mx-auto" style="width: 95%; margin-bottom: 5%">
                                <div class="col-lg-6">
                                    <div class="about-img mb-4 mb-md-0">
                                        <img style="border-radius: 15px;" src="<?= $loja_imagem_principal ?>" class="img-fluid" alt="about">
                                    </div>
                                </div>
                                <div class="col-lg-6 about-content d-flex align-content-center flex-wrap">
                                    <p class="text-center" style="font-size: 18px"><?= $loja_text ?></p>
                                </div>
                            </div>
                            <div class="row mx-auto">
                                <div class="col-12 mb-4 mb-md-0 col-md-3 mx-auto">
                                    <img src="<?= $loja_imagem_secundaria1 ?>" class="img-fluid foto-modal" alt="about">
                                </div>
                                <div class="col-12 mb-4 mb-md-0 col-md-3 mx-auto">
                                    <img src="<?= $loja_imagem_secundaria2 ?>" class="img-fluid foto-modal" alt="about">
                                </div>
                                <div class="col-12 mb-4 mb-md-0 col-md-3 mx-auto">
                                    <img src="<?= $loja_imagem_secundaria3 ?>" class="img-fluid foto-modal" alt="about">
                                </div>
                                <div class="col-12 mb-4 mb-md-0 col-md-3 mx-auto">
                                    <img src="<?= $loja_imagem_secundaria4 ?>" class="img-fluid foto-modal" alt="about">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer" style="border-top: 0; padding: 10px 20px;">
                <div style="width: 100px">
                    <button type="button" class="btn btn-primary" data-dismiss="modal" style="font-size: 14px">Fechar</button>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .foto-modal {
        aspect-ratio: 4/3;
        object-fit: cover;
        border-radius: 10px;
    }

    .modal {
        padding-top: 20px;
    }
</style>


<div class="modal" tabindex="-1" role="dialog" id="namidia" style="z-index: 1041">
    <div class="modal-dialog modal-dialog-centered large-modal" role="document">
        <div class="modal-content">
            <div class="modal-header" style="border-bottom: 0; padding: 10px 20px;">
                <h2 class="modal-title" style="color: black; font-weight: bold;">Na M??dia</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="padding: 10px 20px;">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row mx-auto" style="width: 95%; margin-bottom: 2%">
                            <div class="col-lg-6 about-content d-flex align-content-center flex-wrap mb-4">
                                <div class="about-img">
                                    <video class="video-servico" style="background: black; width: 100%;" controls>
                                        <source src="<?= $midia_video ?>" type="video/mp4">
                                    </video>
                                </div>
                            </div>
                            <div class="col-lg-6 about-content d-flex align-content-center flex-wrap">
                                <p class="text-center" style="font-size: 18px">
                                    <?= $midia_text ?>
                                </p>
                            </div>
                        </div>
                        <div class="row mx-auto">
                            <div class="col-12 mb-4 mb-md-0 col-md-3 mx-auto">
                                <img src="<?= $midia_imagem1 ?>" class="img-fluid foto-modal" alt="about">
                            </div>
                            <div class="col-12 mb-4 mb-md-0 col-md-3 mx-auto">
                                <img src="<?= $midia_imagem2 ?>" class="img-fluid foto-modal" alt="about">
                            </div>
                            <div class="col-12 mb-4 mb-md-0 col-md-3 mx-auto">
                                <img src="<?= $midia_imagem3 ?>" class="img-fluid foto-modal" alt="about">
                            </div>
                            <div class="col-12 mb-4 mb-md-0 col-md-3 mx-auto">
                                <img src="<?= $midia_imagem4 ?>" class="img-fluid foto-modal" alt="about">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer" style="border-top: 0; padding: 10px 20px;">
                <div style="width: 100px">
                    <button type="button" class="btn btn-primary" data-dismiss="modal" style="font-size: 14px">Fechar</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal" tabindex="-1" role="dialog" id="entrega" style="z-index: 1041">
    <div class="modal-dialog modal-dialog-centered large-modal" role="document">
        <div class="modal-content">
            <div class="modal-header" style="border-bottom: 0; padding: 10px 20px;">
                <h5 class="modal-title" style="color: black; font-weight: bold; font-size: 16px;">Pol??tica de Entrega</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="padding: 10px 20px;">
                <div class="row">
                    <div class="col-md-12">
                        <?php if (isset($politica_entrega)) { ?>
                            <?php echo $politica_entrega ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="modal-footer" style="border-top: 0; padding: 10px 20px;">
                <div style="width: 100px">
                    <button type="button" class="btn-main" data-dismiss="modal" style="font-size: 14px">Fechar</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal" tabindex="-1" role="dialog" id="privacidade" style="z-index: 1042">
    <div class="modal-dialog modal-dialog-centered large-modal" role="document">
        <div class="modal-content">
            <div class="modal-header" style="border-bottom: 0; padding: 10px 20px;">
                <h5 class="modal-title" style="color: black; font-weight: bold; font-size: 16px;">Pol??tica de privacidade</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="padding: 10px 20px;">
                <div class="row">
                    <div class="col-md-12">
                        <?php if (isset($politica_privacidade)) { ?>
                            <?php echo $politica_privacidade ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="modal-footer" style="border-top: 0; padding: 10px 20px;">
                <div style="width: 100px">
                    <button type="button" class="btn btn-primary" data-dismiss="modal" style="font-size: 14px">Fechar</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal" tabindex="-1" role="dialog" id="termos" style="z-index: 1041">
    <div class="modal-dialog modal-dialog-centered large-modal" role="document">
        <div class="modal-content">
            <div class="modal-header" style="border-bottom: 0; padding: 10px 20px;">
                <h5 class="modal-title" style="color: black; font-weight: bold; font-size: 16px;">Termos e condi????es</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="padding: 10px 20px;">
                <div class="row">
                    <div class="col-md-12">
                        <?php if (isset($termos)) { ?>
                            <?php echo $termos ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="modal-footer" style="border-top: 0; padding: 10px 20px;">
                <div style="width: 100px">
                    <button type="button" class="btn-main" data-dismiss="modal" style="font-size: 14px">Fechar</button>
                </div>
            </div>
        </div>
    </div>
</div>


<style>
    .form-control.x {
        border: 1px solid #999999;
        border-radius: 5px;
        color: black;
        width: 100%;
        height: 34px;
        font-size: 15px;
    }

    .btn-file {
        font-size: 15px;
        padding: .375rem .85rem;
        line-height: 1.5;
        color: white;
        border-radius: 5px;
        width: 50%;
        height: 34px;
        background-color: #7800a7;
        border: 1px solid #7800a7;
        cursor: pointer;
    }

    .input-file {
        display: none;
    }

    .msg-file {
        margin-left: 10px;
        font-size: 12px;
    }

    #reembolsoModal .form-group {
        margin-bottom: 15px;
    }

    .ree_h3 {
        font-family: "Poppins", sans-serif;
        color: black;
        font-size: 12px;
        font-weight: bold;
        margin-bottom: 0px;
    }

    .ree_hr {
        margin-top: 15px;
        border: 0;
        height: 1px;
        border-bottom: 1px solid #e9ecef;
    }

    .ree_alert {
        font-size: 12px;
        color: red;
    }

    .select2 {
        width: 100% !important;
    }
</style>

<!-- Scroll Up -->
<div id="back-top">
    <a title="Go to Top" href="#"><i class="fa fa-arrow-up" style="line-height: 43px; font-size: 23px;"></i></a>
</div>
<div class="modal fade" id="logarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ACESSAR A CONTA</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form-login" action="<?php echo base_url('d41d8cd98f00b204e9800998ecf8427e') ?>" method="post">
                <div class="modal-body">
                    <label class="custom-label">
                        <b style="color: #444;">CPF:</b>
                    </label>
                    <input type="text" class="form-control cpf" id="cpf_modal" name="login" placeholder="Digite seu CPF" autocomplete="new-password" required>


                    <label class="custom-label" style="margin-top: 5%!important;">
                        <b style="color: #444;">Senha:</b>
                    </label>
                    <input type="password" class="form-control" id="senha_modal" name="pass" placeholder="Digite sua senha" autocomplete="new-password" required>

                    <a style="position: relative;top: 6px;left: calc(100% - 110px);font-size: 13px; color: #444; cursor: pointer;" href="#" data-toggle="modal" data-target="#esqueciSenhaModal" onclick="esqueciSenha()">Esqueci a senha</a>
                </div>
                <div class="modal-footer">
                    <button onclick="abrirmodalcadastro($('#login_usuario').val())" style="width: 120px;margin-right: auto;" type="button" class="btn btn-primary">Cadastrar</button>
                    <button style="width: 120px;" type="submit" class="btn btn-primary">Logar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="<?php echo base_url('recursos/js/'); ?>slick.min.js"></script>
<script src="<?php echo base_url('recursos/js/'); ?>popper.min.js"></script>
<script src="<?php echo base_url('recursos/js/'); ?>jquery.slicknav.min.js"></script>
<script src="<?php echo base_url('recursos/js/'); ?>wow.min.js"></script>
<script src="<?php echo base_url('recursos/js/'); ?>jquery.magnific-popup.js"></script>
<script src="<?php echo base_url('recursos/js/'); ?>jquery.counterup.min.js"></script>
<script src="<?php echo base_url('recursos/js/'); ?>jquery.countdown.min.js"></script>
<script src="<?php echo base_url('recursos/js/'); ?>contact.js"></script>
<script src="<?php echo base_url('recursos/js/'); ?>jquery.validate.min.js"></script>
<script src="<?php echo base_url('recursos/js/'); ?>plugins.js"></script>
<script src="<?php echo base_url('recursos/js/'); ?>jquery.mask.min.js"></script>
<script src="<?php echo base_url('recursos/js/'); ?>jquery-migrate-1-2-1.js"></script>
<!-- sweetalert2 -->
<script src="<?php echo base_url('recursos/lib/sweetalert2/dist/sweetalert2.min.js') ?>"></script>

<script>
    $(document).ready(function() {
        verificaCookie();

        var SPMaskBehavior = function(val) {
                return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
            },
            spOptions = {
                onKeyPress: function(val, e, field, options) {
                    field.mask(SPMaskBehavior.apply({}, arguments), options);
                }
            };

        $('.telefone').mask(SPMaskBehavior, spOptions);
        $('.cnpj').mask('00.000.000/0000-00', {
            reverse: true
        });



        $('.js-example-basic-multiple').select2({
            theme: "bootstrap"
        });
        //reembolsoModal();
        $('.select-footer').select2({
            theme: "bootstrap"
        });
        $('#ree_cpf').mask('000.000.000-00', {
            reverse: true
        });
        $('#ree_cep').mask('00000-000');
        $('#ree_numero').mask('0#');
        $('#ree_uf').mask('XX', {
            'translation': {
                'X': {
                    pattern: /[A-Za-z]/
                }
            }
        });
        $('#ree_telefone').mask('(00) 0000-0000');
        $('#ree_quantidade').mask('0#');
        $('#ree_valor_total').mask("#.##0,00", {
            reverse: true
        });
        var SPMaskBehavior = function(val) {
                return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
            },
            spOptions = {
                onKeyPress: function(val, e, field, options) {
                    field.mask(SPMaskBehavior.apply({}, arguments), options);
                }
            };
        $('#ree_celular').mask(SPMaskBehavior, spOptions);
    });

    function privacidade() {
        $('#privacidadeModal').modal('show');
    }

    function termo() {
        $('#termosModal').modal('show');
    }

    function quemsomos() {
        $('#quemsomosModal').modal('show');
    }

    function reembolsoModal() {
        $('#termosModal').modal('hide');
        $('#reembolsoModal').modal('show');
    }
    $('.btn-file').on('click', function() {
        $('#' + $(this).data('input')).click();
    });
    $('.input-file').on('change', function() {
        var sp = $(this).val().split('\\');
        if (sp[sp.length - 1].length > 20) {
            var fim = parseInt(sp[sp.length - 1].length) - 10;
            var one = sp[sp.length - 1].substr(0, 6);
            var two = sp[sp.length - 1].substr(fim);
            var last = one + "..." + two;
        } else {
            var last = sp[sp.length - 1];
        }
        $('#' + $(this).data('msg')).html(last);
    });
</script>

<script>
    function inicio() {
        location.replace('<?php echo base_url(); ?>');
    }
</script>

<script>
    function acceptCookie() {
        sessionStorage.setItem('aceitouCookie', 1);

        $('#new-cookie').hide();
    }

    function verificaCookie() {
        var data = sessionStorage.getItem('aceitouCookie');

        if (data == 1) {
            $('#new-cookie').hide();
        } else {
            $('#new-cookie').show();
        }
    }
</script>



<!--  -->
<script src="<?php echo base_url('recursos/js/'); ?>vendor/modernizr-3.5.0.min.js"></script>


<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('recursos/js/'); ?>owl.carousel.min.js"></script>
<script src="<?php echo base_url('recursos/js/'); ?>animated.headline.js"></script>
<script src="<?php echo base_url('recursos/js/'); ?>gijgo.min.js"></script>
<script src="<?php echo base_url('recursos/js/'); ?>waypoints.min.js"></script>
<script src="<?php echo base_url('recursos/js/'); ?>hover-direction-snake.min.js"></script>
<script src="<?php echo base_url('recursos/js/'); ?>jquery.form.js"></script>
<script src="<?php echo base_url('recursos/js/'); ?>jquery.ajaxchimp.min.js"></script>
<script src="<?php echo base_url('recursos/js/'); ?>main.js"></script>
<script src="<?php echo base_url('recursos/js/'); ?>select2/select2.min.js"></script>

<script>
    function alertlogin() {
        $('#logarModal').modal('show');
    }

    function alerterrado() {
        Swal.fire({
            type: 'error',
            text: 'Usu??rio ou senha errado(s)!',
        });
    }

    function alertsucesso() {
        Swal.fire({
            type: 'success',
            text: 'Cadastro realizado com sucesso!',
        });
    }

    function alertcpf() {
        Swal.fire({
            type: 'error',
            text: 'CPF j?? cadastrado, tente novamente!',
        });
    }

    function alertname() {
        Swal.fire({
            type: 'error',
            text: 'Digite um nome, tente novamente!',
        });
    }

    function alertsenha() {
        Swal.fire({
            type: 'error',
            text: 'A senha deve ter mais de seis caracteres, tente novamente!',
        });
    }

    function alertpagamento() {
        Swal.fire({
            type: 'error',
            text: 'Selecione uma forma de pagamento, para continuar a compra!',
        });
    }

    function alertsenhadif() {
        Swal.fire({
            type: 'error',
            text: 'As senhas s??o diferentes, tente novamente!',
        });
    }
</script>