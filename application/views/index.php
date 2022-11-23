<?php
$iphone = strpos($_SERVER['HTTP_USER_AGENT'], "iPhone");
$ipad = strpos($_SERVER['HTTP_USER_AGENT'], "iPad");
$android = strpos($_SERVER['HTTP_USER_AGENT'], "Android");
$palmpre = strpos($_SERVER['HTTP_USER_AGENT'], "webOS");
$berry = strpos($_SERVER['HTTP_USER_AGENT'], "BlackBerry");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'], "iPod");
$symbian =  strpos($_SERVER['HTTP_USER_AGENT'], "Symbian");
if ($iphone || $ipad || $android || $palmpre || $ipod || $berry || $symbian == true) {
    $mobile_view = 1;
} else {
    $mobile_view = 0;
}
?>
<style>

    .img-square {
        aspect-ratio: 1/1;
        object-fit: contain;
    }

    .prod-preco {
        color: #EC9706;
        font-size: 18px;
        border: 1px solid #EC9706;
        border-radius: 4px;
        max-width: fit-content;
        padding: 0 8px;
        transition: all 300ms ease-in-out;
    }

    .prod-preco:hover {
        color: #fff;
        background-color: #EC9706;
    }

    .old-prod-preco {
        text-decoration: line-through;
    }

    .stars {
        margin-top: 15px;
        margin-bottom: 0px;
        line-height: 0px;
    }

    .section-content {
        padding: 0 15px 0 15px;
    }


    .zoom:hover {
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 5px;
    }

    .text-ebook {
        text-shadow: 2px 2px #f9c716;
        display: initial;
        position: relative;
        top: 30px;
        left: 35%;
        color: black;
        font-weight: 900;
        font-size: 50px;
    }

    .button-ebook {
        position: relative;
        left: 71%;
        top: 50% !important;
        ;
        width: auto;
        background: #fbab02;
        border-color: #232323;
        border-width: 1.5 !important;
    }

    .divLeft {
        padding: 5% 4%;
        padding-bottom: 0 !important;
        background: #f9c716;
        margin-bottom: 3rem !important;
    }

    .divEbook {
        margin-top: 1%;
        background-size: 100% 100%;
        height: 285px;
        /*<?php if ($mobile_view == 0) { ?>background-image: url(imagens/site/banner1.png);<?php } ?>*/
    }

    /*.card-header{border-radius: 20px!important; background: #f9c716;margin: 20px 0;}*/
    /*.collapse{position: relative;top: -35px;width: 97%;left: 2%;border-radius: 11px!important;}*/
    .collapsed:hover {
        color: black !important;
    }

    .btn-link:hover {
        color: black !important;
    }

    .divImagemServico {
        padding: 0 75px;
    }

    .divPrincipal {
        margin-top: 2%;
        padding: 0 50px;
    }

    .divImagemScreen {
        padding-top: 12%;
    }

    .pResumo {
        padding: 0 50px;
        text-align: justify;
        color: #444;
        font-size: 15px;
        font-weight: 500
    }

    .btnServico {
        height: 60px;
        width: 80%;
        margin-left: auto;
        margin-right: auto;
    }

    .btn-decoration:hover {
        color: #6E6B5F !important;
        text-decoration: none !important;
    }

    .btn-decoration:active {
        color: #6E6B5F !important;
        text-decoration: none !important;
        box-shadow: none;
    }

    .btn-decoration:focus {
        text-decoration: none !important;
        box-shadow: none;
    }

    .faqs .card {
        margin-bottom: 15px;
        border: none;
        border-radius: 0;
    }

    .faqs .card:last-child {
        margin-bottom: 0;
    }

    .faqs .card-header {
        padding: 0;
        border: none;
        background: #ffffff;
    }

    .faqs .card-header a {
        display: block;
        padding: 10px 15px;
        width: 100%;
        color: #121518;
        font-size: 16px;
        line-height: 30px;
        border: 1px solid rgba(0, 0, 0, .1);
        transition: .5s;
    }

    .faqs .card-header [data-toggle="collapse"][aria-expanded="true"] {
        background: #EC9706;
        color: white;
    }

    .faqs .card-header [data-toggle="collapse"]:after {
        font-family: 'font Awesome 5 Free';
        content: "\002B";
        float: right;
        color: #0b193c;
        /*#fdbe33*/
        font-size: 12px;
        font-weight: 900;
        transition: .5s;
    }

    .faqs .card-header [data-toggle="collapse"][aria-expanded="true"]:after {
        font-family: 'font Awesome 5 Free';
        content: "\2212";
        float: right;
        color: #030f27;
        font-size: 12px;
        font-weight: 900;
        transition: .5s;
    }

    .faqs .card-body {
        padding: 20px 25px;
        font-size: 16px;
        background: #ffffff;
        border: 1px solid rgba(0, 0, 0, .1);
        border-top: none;
    }

    .parallax {
        background-size: cover !important;
        background-repeat: no-repeat;
        background-position: 50% 0;
        background-attachment: fixed !important;
        padding: 110px 0;
        color: #fff;
        position: relative;
    }

    .parallax2 {
        background: url(<?php echo base_url() ?>imagens/site/parallax.png) no-repeat;
    }

    #novidades .btn {
        color: #EC9706;
        border-color: #EC9706;
        background-color: white;
    }

    #novidades .btn:hover {
        color: white;
        border-color: white;
        background-color: #EC9706;
    }

    p {
        font-family: Poppins, sans-serif !important;
    }

    .servico-titulo {
        text-align: center;
        color: #828282;
        display: -webkit-box;
        overflow: hidden;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        word-break: break-word;
        font-size: 0.9rem;
        margin-top: 2%;
    }

    .servico-titulo2 {
        text-align: center;
        color: #828282;
        display: -webkit-box;
        overflow: hidden;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        word-break: break-word;
        font-size: 0.9rem;
        margin-top: 2%;
    }

    .servico-titulo:hover {
        text-decoration: none !important;
    }

    .servico-titulo2:hover {
        text-decoration: none !important;
    }

    #novidades .servico-titulo {
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
    }

    #promocao .carousel .item {
        padding: 5%;
        border-bottom: 8px solid #EC9706;
    }

    #promocao .carousel .item .img-box {
        height: 164px !important;
        margin-bottom: 15px !important;
        margin-top: 0 !important;
    }

    #promocao .list-inline-item:not(:last-child) {
        margin-right: 0 !important;
    }

    #promocao .carousel .thumb-content .btn:hover {
        background-color: #EC9706 !important;
        border-color: white;
    }

    #header-carousel a:hover {
        background-color: #EC9706 !important;
        border-color: #EC9706 !important;
        color: #fff !important;
    }

    /* XX-Small devices (300px and up) */
    @media (min-width: 299px) and (max-width: 398px) {
        .section-content {
            padding: 0 15px 0 15px;
        }

        .text-ebook {
            left: 10% !important
        }

        .button-ebook {
            left: 19% !important;
            top: 65% !important;
            width: 65% !important;
            background: #f9c716;
            border: 1px solid #f9c716;
        }

        .divLeft {
            padding: 10% 10% !important;
        }

        .divEbook {
            margin-top: -6% !important;
            margin-bottom: 5% !important;
            height: 100px !important;
        }

        .divImagemServico {
            padding: 10px !important;
        }

        .divPrincipal {
            padding: 0 30px !important;
        }

        .divPrincipalPerguntas {
            padding: 0 4% !important;
            margin: 0 !important;
        }

        .questao-pergunta {
            white-space: initial !important;
        }

        .prod-preco {
            font-size: 24px;
            font-weight: 700;
        }

        .card-body {
            padding: 10px;
        }

        .stars {
            font-size: 14px;
            margin-bottom: 10px;
        }

        .divImagemScreen {
            padding-top: 0 !important;
        }

        .pResumo {
            padding: 2px !important;
        }

        .btnServico {
            width: 100%;
        }

        .side-padding-mobile {
            padding-left: 5% !important;
            padding-right: 5% !important;
        }

        .prod-preco-txt {
            bottom: 16px !important;
        }

        .old-preco {
            font-size: 11px;
        }

        #novidades .prod-preco {
            height: 27px;
        }

        .faqs .card-header a {
            line-height: 25px;
        }

    }

    /* X-Small devices (iPhone and others mobiles, 400px and up) */
    @media (max-width: 574px) {
        .prod-preco {
            color: #EC9706;
            font-size: 16px;
            border: 1px solid #EC9706;
            border-radius: 4px;
            max-width: fit-content;
            padding: 0 8px;
            transition: all 300ms ease-in-out;
        }

        .prod-preco:hover {
            color: #fff;
            background-color: #EC9706;
        }

        .old-prod-preco {
            text-decoration: line-through;
        }

        .section-content {
            padding: 0 15px 0 15px;
        }

        .divImagemScreen {
            padding-top: 0 !important;
        }

        .divEbook {
            margin-top: -46%;
            margin-bottom: -15%;
            right: 36%;
        }

        .side-padding-mobile {
            padding-left: 5% !important;
            padding-right: 5% !important;
        }

        .stars {
            margin-bottom: 10px;
        }

        .perguntas-mobile {
            font-size: 24px !important;
            padding-top: 15%;
            padding-bottom: 7%;
        }

        .questao-pergunta {
            font-size: 18px !important;
        }

        .questao-resposta {
            font-size: 16px !important;
        }

        .button-ebook {
            left: 73%;
            top: 80% !important;
        }

        .card-plus-position {
            padding-top: 15% !important;
        }

        .imagem-servico {
            position: relative;
            left: -24%;
        }

        #novidades .prod-preco {
            height: 27px;
        }

        .faqs .card-header a {
            line-height: 25px;
        }
    }

    /* Small devices (landscape phones, 576px and up) */
    @media (min-width: 575px) and (max-width: 766px) {
        .divImagemScreen {
            padding-top: 0 !important;
        }

        .stars {
            font-size: 8px;
            margin-bottom: 10px;
        }

        #novidades .prod-preco {
            height: 27px;
        }

        .faqs .card-header a {
            line-height: 25px;
        }
    }

    @media (min-width: 501px) and (max-width: 600px) {
        .stars {
            font-size: 8px;
            margin-bottom: 10px;
        }

        .imagem-servico {
            width: 100% !important;
            margin-left: 0 !important;
            left: 0 !important;
        }

        #novidades .prod-preco {
            height: 27px;
        }

        .faqs .card-header a {
            line-height: 25px;
        }
    }

    /* Medium devices (tablets, 768px and up) */
    @media (min-width: 767px) and (max-width: 990px) {
        <?php $tablet = 1; ?>.divImagemScreen {
            padding-top: 0 !important;
        }

        .divEbook {
            margin-top: 1%;
            background-size: 100% 100%;
            height: 60px;
            position: relative;
            right: 28%;
        }

        .form-group {
            margin-bottom: 2rem;
        }

        .divImagemServico {
            padding: 0px 0px;
            position: relative;
            left: 25%;
        }

        .perguntas-mobile {
            font-size: 46px !important;
        }

        .imagem-servico {
            width: 100% !important;
            height: auto !important;
            margin-left: 2% !important;
        }

        .margin-card-ipad {
            margin-right: 0 !important;
            margin-left: 0 !important;
        }

        .stars {
            font-size: 10px;
            margin-bottom: 6px;
        }

        .questao-pergunta {
            font-size: 18px !important;
        }

        .questao-resposta {
            font-size: 16px !important;
        }

        .perguntas-largura-mobile {
            width: 110%;
        }

        .prod-preco-txt {
            bottom: 8px !important;
            font-size: 12px !important;
        }

        .old-preco {
            font-size: 11px;
        }

        #novidades .prod-preco {
            height: 27px;
        }

        #carousel-mobile {
            margin-top: 3%;
        }

        #novidades img {
            position: relative;
            left: -13%;
        }

        .faqs .card-header a {
            line-height: 25px;
        }

    }

    /* Large devices (desktops, 992px and up) */
    @media (min-width: 991px) and (max-width: 1198px) {
        <?php $tablet = 1; ?>.divImagemScreen {
            padding-top: 0 !important;
        }

        .divImagemScreen {
            padding-top: 0 !important;
        }

        .divEbook {
            margin-top: 1%;
            background-size: 100% 100%;
            height: 60px;
            position: relative;
            right: 26%;
        }

        .form-group {
            margin-bottom: 2rem;
        }

        .divImagemServico {
            padding: 0px 0px;
            position: relative;
            left: 25%;
        }

        .perguntas-mobile {
            font-size: 46px !important;
        }

        .margin-card-ipad {
            margin-right: 0 !important;
            margin-left: 0 !important;
        }

        .stars {
            font-size: 10px;
            margin-bottom: 6px;
        }

        .questao-pergunta {
            font-size: 18px !important;
        }

        .questao-resposta {
            font-size: 16px !important;
        }

        .perguntas-largura-mobile {
            width: 110%;
        }

        .prod-preco-txt {
            bottom: 8px !important;
            font-size: 12px !important;
        }

        .old-preco {
            font-size: 11px;
        }

        #novidades .prod-preco {
            height: 27px;
        }

        #carousel-mobile {
            margin-top: 3%;
        }

        #novidades img {
            position: relative;
            left: -13%;
        }

        .faqs .card-header a {
            line-height: 25px;
        }
    }

    /* X-Large devices (large desktops, 1200px and up) */
    @media (min-width: 1199px) and (max-width: 1398px) {
        .limite-largura-prod-img {
            max-width: 190px;
        }

        .limite-largura-prod2-img {
            max-width: 110px;
        }
    }


    @media (min-width: 1900px) and (max-width: 2299px) {


        #promocao {
            width: 80% !important;
            height: 890px;
            margin-top: 5%;
        }

        #novidades .prod-departamento {
            margin-top: 0% !important;
        }

        #promocao .bbb_viewed_tittle_container {
            width: 100% !important;
        }
    }

    @media (max-width: 768px) {
        #header-carousel .carousel-item {
            position: relative;
            min-height: 450px;
        }

        #header-carousel .carousel-item img {
            position: absolute;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    }

    .card-categoria {
        height: 200px !important;
    }

    #header-carousel .carousel-caption {
        text-align: left !important;
    }

    #header-carousel .btn-primary:hover {
        background-color: #FFD55F;
        border-color: #FFD55F
    }

    .carousel-control-prev {
        background-color: transparent;
        border: 0 solid;
    }

    .carousel-control-next {
        background-color: transparent;
        border: 0 solid;
    }

    .img_full {
        background-size: cover !important;
        background-repeat: no-repeat !important;
        background-position: center !important;
    }

    /*** Testimonial ***/
    .testimonial {
        background: linear-gradient(rgba(15, 23, 43, .7), rgba(15, 23, 43, .7)), url(https://www.mirao.com.br/media/mageplaza/blog/post/s/h/shutterstock_1430140061-scaled.jpg);
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset, rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset, rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset, rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;
    }

    .testimonial-carousel {
        padding-left: 65px;
        padding-right: 65px;
    }

    .testimonial-carousel .testimonial-item {
        padding: 30px;
    }

    .testimonial-carousel .owl-nav {
        position: absolute;
        width: 100%;
        height: 40px;
        top: calc(50% - 20px);
        left: 0;
        display: flex;
        justify-content: space-between;
        z-index: 1;
    }

    .testimonial-carousel .owl-nav .owl-prev,
    .testimonial-carousel .owl-nav .owl-next {
        position: relative;
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #FFFFFF;
        background: var(--primary);
        border-radius: 2px;
        font-size: 18px;
        transition: .5s;
    }

    .testimonial-carousel .owl-nav .owl-prev:hover,
    .testimonial-carousel .owl-nav .owl-next:hover {
        color: var(--primary);
        background: #FFFFFF;
    }

    #carousel-mobile .carousel-item {
        height: 250px;
        background-repeat: no-repeat !important;
        background-size: cover !important;
    }

    #carousel-mobile .carousel-item h3 {
        font-size: 30px;
        bottom: 24px;
        position: relative;
        right: -5px;
        text-align: left;
    }
</style>

<style>
    .teste {
        width: 100% !important;
        -webkit-transition: all 0.5s;
        -ms-transition: all 0.5s;
        transition: all 0.5s;
    }

    .img-novidade {
        height: 90%;
        max-width: 90%;
        width: auto;
    }
</style>

<link media rel="stylesheet" href="<?php echo base_url('resources/css/'); ?>style.css">


<style>
    .carousel-caption {
        bottom: 82px !important;
    }
</style>


<main style="position: relative; background: white;">
    <div class="section-content">
        <div class="row" style="<?php if ($mobile_view == 0) { ?> <?php } else { ?> margin-top: -10px!important <?php } ?>">


            <?php if ($mobile_view == 1) { ?>

                <!-- Carousel Mobile start -->
                <section id="carousel-mobile" style="width: 100%;">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" style="background: url(<?php echo base_url() ?>imagens/site/banner_principal1.png);">
                                <a href="<?php echo $site['btn_banner1']; ?>">
                                                                        <div class="carousel-caption">
                                        <h3 style="z-index: 1;"><?= $site['text_banner1']; ?></h3>
                                    </div>
                                </a>
                            </div>
                            <div class="carousel-item" style="background: url(<?php echo base_url() ?>imagens/site/banner_principal2.png);">
                                <a href="<?php echo $site['btn_banner2']; ?>">
                                    <div class="carousel-caption">
                                        <h3 style="z-index: 1;"><?= $site['text_banner2']; ?></h3>
                                    </div>
                                </a>
                            </div>
                            <div class="carousel-item" style="background: url(<?php echo base_url() ?>imagens/site/banner_principal3.png);">
                                <a href="<?php echo $site['btn_banner3']; ?>">
                                    <div class="carousel-caption">
                                        <h3 style="z-index: 1;"><?= $site['text_banner3']; ?></h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </section>
                <!--/ Carousel Mobile end -->

                <div class="container">
                    <div class="row my-5 justify-content-center" style="width: 140%; margin-left: -20%;">
                        <div class="col-3">
                            <img class="img-fluid" src="imagens/site/acessorios.png">
                        </div>
                        <div class="col-3">
                            <img class="img-fluid" src="imagens/site/texturas.png">
                        </div>
                        <div class="col-3">
                            <img class="img-fluid" src="imagens/site/tintas.png">
                        </div>
                    </div>
                </div>
                

                <!-- Produtos novos -->
                <div id="novidades" class="section-content container" style="<?php if ($mobile_view == 0) { echo "margin-bottom: 20px;"; } ?> background: #ffffff; width: 80%;">
                    <div class="row" style="margin-top:2%">
                        <?php foreach ($produtos as $p) {
                            $aux_nome = explode(' ', $p['servico_nome'], 2) ?>
                            <div class="col-6 col-md-4 col-xs-3 col-sm-4 col-lg-3 form-group">
                                <div class="card zoom card-relacionados" style="border-radius: 7px; height: 100%;">
                                    <div class="card-body" style="border-bottom: 7px solid #EC9706; border-radius: 7px;">
                                        <a href="<?php echo base_url('e9b8ed001f1726b0385dcfec2dbe2ea1/') . $p['servico_id'] ?>">
                                            <div class="row">
                                                <div class="justify-content-center col-md-12" style="height: 6rem">
                                                    <img class="img-fluid img-square" src="<?php echo base_url($p['servico_imagem']) ?>">
                                                </div>

                                                <div class="col-md-12 text-center">
                                                    <p class="text-center stars" style="font-size: 12px;">
                                                        <i style="color: gold" class="fa fa-star" aria-hidden="true"></i>
                                                        <i style="color: gold" class="fa fa-star" aria-hidden="true"></i>
                                                        <i style="color: gold" class="fa fa-star" aria-hidden="true"></i>
                                                        <i style="color: gold" class="fa fa-star" aria-hidden="true"></i>
                                                        <i style="color: gold" class="fa fa-star" aria-hidden="true"></i>
                                                    </p>

                                                    <div class="text-center" style="height: 1.5rem">
                                                        <p class="servico-titulo" style="margin-top: 7%; font-weight: 600; color: #0b193c;"><?= ucfirst(mb_strtolower($p['servico_nome'])) ?></p>
                                                    </div>
                                                    <?php if ($p['produto_promocao']) { ?>
                                                        <div class="col-12 col-md-12 text-center p-0">
                                                            <p class="text-muted p-0 m-0"><strike>R$ <?php echo number_format($p['servico_valor'], 2, ',', '.') ?></strike></p>
                                                            <button class="btn btn-secondary">
                                                                R$ <?php echo number_format($p['produto_promocao'], 2, ',', '.') ?>
                                                            </button>
                                                            <?php if ($p['servico_parcelamento'] == 0) { ?>
                                                                <p class="text-center text-muted">
                                                                    <?= $p['servico_qtd_parcela'] ?>
                                                                </p>
                                                            <?php } ?>
                                                        </div>
                                                    <?php } else { ?>
                                                        <div class="col-12 col-md-12 text-center mt-4 p-0">
                                                            <button class="btn btn-secondary">
                                                                R$ <?php echo number_format($p['servico_valor'], 2, ',', '.') ?>
                                                            </button>
                                                            <?php if ($p['servico_parcelamento'] == 0) { ?>
                                                                <p class="text-center text-muted">
                                                                    <?= $p['servico_qtd_parcela'] ?>
                                                                </p>
                                                            <?php } ?>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>

            <?php } ?>

            <?php if ($mobile_view == 0) { ?>


                <!-- Carousel Start -->
                <div class="container-fluid p-0 my-5">
                    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner" style="">
                            <div class="carousel-item active" style="background: url(<?php echo base_url() ?>imagens/site/banner_principal1.png); height: 600px; background-repeat: no-repeat; background-size: cover;">
                                
                            </div>
                            <div class="carousel-item" style="background: url(<?php echo base_url() ?>imagens/site/banner_principal2.png); height: 600px; background-repeat: no-repeat; background-size: cover;">
                                
                            </div>
                            <div class="carousel-item" style="background: url(<?php echo base_url() ?>imagens/site/banner_principal3.png); height: 600px; background-repeat: no-repeat; background-size: cover;">
                                
                            </div>
                        </div>
                        <button class="left carousel-control-prev carousel-control" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </button>
                        <button class="right carousel-control-next carousel-control" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </button>
                    </div>
                </div>
                <!-- Carousel End -->

                <div class="container">
                    <div class="row col-md-12 my-5 justify-content-center">
                        <div class="col-3">
                            <img class="img-fluid" src="imagens/site/acessorios.png">
                        </div>
                        <div class="col-3">
                            <img class="img-fluid" src="imagens/site/texturas.png">
                        </div>
                        <div class="col-3">
                            <img class="img-fluid" src="imagens/site/tintas.png">
                        </div>
                    </div>
                </div>

                <!-- Produtos novos -->
                <div id="novidades" class="section-content container" style="<?php if ($mobile_view == 0) { echo "margin-bottom: 20px;"; } ?> background: #ffffff; width: 80%;">
                    <div class="row" style="margin-top:2%">
                        <?php foreach ($produtos as $p) {
                            $aux_nome = explode(' ', $p['servico_nome'], 2) ?>
                            <div class="col-6 col-md-4 col-xs-3 col-sm-4 col-lg-3 form-group">
                                <div class="card zoom card-relacionados" style="border-radius: 7px; height: 100%;">
                                    <div class="card-body" style="border-bottom: 7px solid #EC9706; border-radius: 7px;">
                                        <a href="<?php echo base_url('e9b8ed001f1726b0385dcfec2dbe2ea1/') . $p['servico_id'] ?>">
                                            <div class="row">
                                                <div class="justify-content-center col-md-12" style="height: 11rem">
                                                    <img class="img-fluid img-square" src="<?php echo base_url($p['servico_imagem']) ?>">
                                                </div>

                                                <div class="col-md-12 text-center">
                                                    <p class="text-center stars" style="font-size: 12px;">
                                                        <i style="color: gold" class="fa fa-star" aria-hidden="true"></i>
                                                        <i style="color: gold" class="fa fa-star" aria-hidden="true"></i>
                                                        <i style="color: gold" class="fa fa-star" aria-hidden="true"></i>
                                                        <i style="color: gold" class="fa fa-star" aria-hidden="true"></i>
                                                        <i style="color: gold" class="fa fa-star" aria-hidden="true"></i>
                                                    </p>

                                                    <div class="text-center" style="height: 1.5rem">
                                                        <p class="servico-titulo" style="margin-top: 7%; font-weight: 600; color: #0b193c;"><?= ucfirst(mb_strtolower($p['servico_nome'])) ?></p>
                                                    </div>
                                                    <?php if ($p['produto_promocao']) { ?>
                                                        <div class="col-12 col-md-12 text-center p-0">
                                                            <p class="text-muted p-0 m-0"><strike>R$ <?php echo number_format($p['servico_valor'], 2, ',', '.') ?></strike></p>
                                                            <button class="btn btn-secondary">
                                                                R$ <?php echo number_format($p['produto_promocao'], 2, ',', '.') ?>
                                                            </button>
                                                            <?php if ($p['servico_parcelamento'] == 0) { ?>
                                                                <p class="text-center text-muted">
                                                                    <?= $p['servico_qtd_parcela'] ?>
                                                                </p>
                                                            <?php } ?>
                                                        </div>
                                                    <?php } else { ?>
                                                        <div class="col-12 col-md-12 text-center mt-4 p-0">
                                                            <button class="btn btn-secondary">
                                                                R$ <?php echo number_format($p['servico_valor'], 2, ',', '.') ?>
                                                            </button>
                                                            <?php if ($p['servico_parcelamento'] == 0) { ?>
                                                                <p class="text-center text-muted">
                                                                    <?= $p['servico_qtd_parcela'] ?>
                                                                </p>
                                                            <?php } ?>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>

            <?php } ?>
            
</main>



<div id="myModal" class="modal" style="z-index: 100">

    <!-- The Close Button -->
    <span class="close">&times;</span>

    <!-- Modal Content (The Image) -->
    <img class="modal-content" id="img01">

    <!-- Modal Caption (Image Text) -->
    <div id="caption"></div>
</div>


<style>
    /* Style the Image Used to Trigger the Modal */
    #myImg {
        cursor: pointer;
        transition: 0.3s;
    }

    #myImg:hover {
        opacity: 0.7;
    }

    /* The Modal (background) */
    .modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Sit on top */
        padding-top: 100px;
        /* Location of the box */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.9);
        /* Black w/ opacity */
    }

    /* Modal Content (Image) */
    #myModal .modal-content {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
    }

    /* Caption of Modal Image (Image Text) - Same Width as the Image */
    #caption {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
        text-align: center;
        color: #ccc;
        padding: 10px 0;
        height: 150px;
    }

    /* Add Animation - Zoom in the Modal */
    .modal-content,
    #caption {
        animation-name: zoom;
        animation-duration: 0.6s;
    }

    @keyframes zoom {
        from {
            transform: scale(0)
        }

        to {
            transform: scale(1)
        }
    }

    /* The Close Button */
    .close {
        position: absolute;
        top: 15px;
        right: 35px;
        color: #f1f1f1;
        font-size: 40px;
        font-weight: bold;
        transition: 0.3s;
    }

    .close:hover,
    .close:focus {
        color: #bbb;
        text-decoration: none;
        cursor: pointer;
    }

    /* 100% Image Width on Smaller Screens */
    @media only screen and (max-width: 700px) {
        .modal-content {
            width: 100%;
        }
    }

</style>

<script>
    $(function() {

        if ($('.owl-2').length > 0) {
            $('.owl-2').owlCarousel({
                center: false,
                items: 1,
                loop: true,
                stagePadding: 0,
                margin: 20,
                smartSpeed: 1000,
                autoplay: true,
                nav: true,
                dots: false,
                pauseOnHover: false,
                responsive: {
                    600: {
                        margin: 20,
                        nav: true,
                        items: 2
                    },
                    1000: {
                        margin: 20,
                        stagePadding: 0,
                        nav: true,
                        items: 3
                    }
                }
            });
        }
    })
</script>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    $(document).ready(function() {
        $('.carousel').carousel({
            interval: 3000
        });

        $('.carousel').carousel('cycle');
    });
</script>

<script>
    $(document).ready(function() {
        <?php if ($this->session->userdata('ebook_solicitado')) { ?>
            $('#baixarTesteModal').modal('show');
            <?php $this->session->unset_userdata('ebook_solicitado') ?>
        <?php } ?>
    });
</script>