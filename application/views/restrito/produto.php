<?php
    $iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
    $ipad = strpos($_SERVER['HTTP_USER_AGENT'],"iPad");
    $android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
    $palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
    $berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
    $ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
    $symbian =  strpos($_SERVER['HTTP_USER_AGENT'],"Symbian");
    $auxfooter = 0;
    if ($iphone || $ipad || $android || $palmpre || $ipod || $berry || $symbian == true) {
        $sm = 1;
    } else {
        $sm = 0;
    }
?>

<style>
    .nome-form{
        color: black;
        font-size: 16px;
    }
    .nav-tabs {
        background: transparent;
    }
    .nav-tabs {
        border-bottom: 1px transparent;
    }
    .nav-item{
        color: #555;
        cursor: default;
        border-radius: 4px 4px 0 0;
        background-color: #dedede;
    }
    .nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover {
        color: #555;
        cursor: default;
        background-color: #fff;
        border: 1px solid #ddd;
        border-bottom-color: transparent;
    }
        .c-card{
        box-shadow: 0 1px 4px 0 rgb(0 0 0 / 14%);
        border: 0;
        margin-bottom: 30px;
        margin-top: 30px;
        border-radius: 6px;
        color: #333333;
        background: #fff;
        width: 100%;
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
    }
    
    .c-card-header{
        text-align: right;
        margin: 0px 15px 0;
        padding: 0;
        position: relative;
        z-index: 3 !important;
        color: #fff;
        border-bottom: none;
        background: transparent;
        border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0;
        padding-bottom: 15px;
    }
    
    .c-card-icon{
        border-radius: 3px;
        background-color: #999999;
        padding: 15px;
        margin-top: -20px;
        margin-right: 15px;
        float: left;
    }
        
    .c-tabela{
        box-shadow: 0 4px 20px 0px rgb(0 0 0 / 14%), 0 7px 10px -5px rgb(156 39 176 / 40%);
        background: linear-gradient(60deg, #ab47bc, #8e24aa);
    }
    
    .tab-li a{
        cursor: pointer;
    }
    
    .label-imagem{
        margin-top: 10px;
    }
    
    #select2-produtos2-container{
        height: 50px!important;
    }

</style>

<section id="main-content">
    <section class="wrapper">
        <nav aria-label="breadcrumb" style="margin-bottom: -25px; margin-top: 20px;">
            <ol class="breadcrumb" style="margin: 0; padding: 0; background-color: transparent">
                <li class="breadcrumb-item active" aria-current="page">Cat??logo</li>
                <li class="breadcrumb-item"><a href="<?php echo base_url('391a027a8fef2eba4487a00156901156') ?>">Produtos</a></li>
                <li class="breadcrumb-item" aria-current="page">Adicionar</li>
            </ol>
        </nav>
        <div class="c-card">
            <div class="c-card-header">
                <div class="row">
                    <div class="col-md-12 text-left">
                        <h2 style="color: #3a0b0c;"><b>ADICIONAR PRODUTO</b></h2>
                    </div>
                </div>
            </div>
            <form action="<?php echo base_url('a1f2a0b814a1fecd227400e2b74fb25f');?>" method="post" enctype='multipart/form-data' id="form">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade active in" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row" style="background-color: white; margin-left: 5px; margin-right: 5px">
                            <div class="col-md-12">
                                
                                <ul class="nav nav-tabs">
                                  <li class="tab-li active" id="li_dados" data-target="dados" data-fonte="li_dados"><a>Dados</a></li>
                                  <li class="tab-li" id="li_preco" data-target="preco" data-fonte="li_preco"><a>Pre??o</a></li>
                                  <li class="tab-li" id="li_detalhes" data-target="detalhes" data-fonte="li_detalhes"><a>Detalhes</a></li>
                                  <li class="tab-li" id="li_imagens" data-target="imagens" data-fonte="li_imagens"><a>Imagens</a></li>
                                  <li class="tab-li" id="li_promocoes" data-target="promocoes" data-fonte="li_promocoes"><a>Promo????es</a></li>
                                  <li class="tab-li" id="li_ligacoes" data-target="ligacoes" data-fonte="li_ligacoes"><a>Liga????es</a></li>
                                </ul>
                                
                                
                                <div id="dados">
                                    <div class="row" style="margin-top: 2%">
                                        <div class="col-md-6 form-group">
                                            <label><b>Nome do Produto:</b></label>
                                            <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome do Produto" required>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label><b>Volume do Produto:</b></label>
                                            <input type="text" id="modelo" name="modelo" class="form-control" placeholder="Modelo do Produto" required>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-4 form-group">
                                            <label><b>C??digo do Produto:</b></label>
                                            <input type="text" id="codigo" name="codigo" class="form-control" placeholder="C??digo do Produto" required>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label><b>Fabricante:</b></label>
                                            <input type="text" id="fabricante" name="fabricante" class="form-control" placeholder="Fabricante" required>
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <label><b>Habilitado:</b></label><br>
                                            <input type="radio" id="habilitado_1" name="habilitado" value="1" style="display: inline" checked>
                                            &nbsp;<span><b>Sim</b></span>
                                            &nbsp;&nbsp;&nbsp;
                                            <input type="radio" id="habilitado_2" name="habilitado" value="0" style="display: inline">
                                            &nbsp;<span><b>N??o</b></span>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-3 form-group">
                                            <label><b>Quantidade:</b></label>
                                            <input type="text" id="quantidade" name="quantidade" class="form-control number" placeholder="0" required>
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label><b>Estoque M??nimo:</b></label>
                                            <input type="text" id="minimo" name="minimo" class="form-control number" placeholder="0" required>
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <label><b>Reduzir Estoque:</b></label><br>
                                            <input type="radio" id="reduzir_1" name="reduzir" value="1" style="display: inline" checked>
                                            &nbsp;<span><b>Sim</b></span>
                                            &nbsp;&nbsp;&nbsp;
                                            <input type="radio" id="reduzir_2" name="reduzir" value="0" style="display: inline">
                                            &nbsp;<span><b>N??o</b></span>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-2 form-group">
                                            <label><b>Unidade de Medida:</b></label>
                                            <select id="medida" name="medida" class="js-example-basic-multiple" style="width: 100%">
                                                <option value="m">Metro</option>
                                                <option value="cm" selected>Cent??metro</option>
                                                <option value="mm">Mil??metro</option>
                                                <option value='"'>Polegadas</option>
                                            </select>
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <label><b>Comprimento:</b></label>
                                            <input type="text" id="comprimento" name="comprimento" class="form-control number" placeholder="Comprimento" required>
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <label><b>Largura:</b></label>
                                            <input type="text" id="largura" name="largura" class="form-control number" placeholder="Largura" required>
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <label><b>Altura:</b></label>
                                            <input type="text" id="altura" name="altura" class="form-control number" placeholder="Altura" required>
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <label><b>Unidade de Peso:</b></label>
                                            <select id="un_peso" name="un_peso" class="js-example-basic-multiple" style="width: 100%">
                                                <option value="kg">Quilograma</option>
                                                <option value="g" selected>Grama</option>
                                                <option value="mg">Miligrama</option>
                                                <option value="lb">Libra</option>
                                                <option value="oz">On??a</option>
                                            </select>
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <label><b>Peso:</b></label>
                                            <input type="text" id="peso" name="peso" class="form-control" placeholder="Peso" required>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-3 form-group">
                                            <label><b>SKU:</b></label>
                                            <input type="text" id="sku" name="sku" class="form-control" placeholder="SKU">
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label><b>NCM:</b></label>
                                            <input type="text" id="ncm" name="ncm" class="form-control" placeholder="NCM">
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label><b>CEST:</b></label>
                                            <input type="text" id="cest" name="cest" class="form-control" placeholder="CEST">
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label><b>UPC:</b></label>
                                            <input type="text" id="upc" name="upc" class="form-control" placeholder="UPC">
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-3 form-group">
                                            <label><b>EAN:</b></label>
                                            <input type="text" id="ean" name="ean" class="form-control" placeholder="EAN">
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label><b>JAN:</b></label>
                                            <input type="text" id="jan" name="jan" class="form-control" placeholder="JAN">
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label><b>ISBN:</b></label>
                                            <input type="text" id="isbn" name="isbn" class="form-control" placeholder="ISBN">
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label><b>MPN:</b></label>
                                            <input type="text" id="mpn" name="mpn" class="form-control" placeholder="MPN">
                                        </div>
                                    </div>
                                    
                                    <br>
                                </div>
                                
                                <div id="preco" style="display: none">
                                    <div class="row" style="margin-top: 2%">
                                        <div class="col-md-12 form-group">
                                            <h4><b>VAREJO</b></h4>
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <label><b>Pre??o:</b></label>
                                            <input type="text" id="valor" name="valor" class="form-control money" placeholder="0,00" required>
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <label><b>Venda minima:</b></label>
                                            <input type="number" class="form-control" id="minimo_venda" name="minimo_venda">
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top: 2%">
                                        <div class="col-md-12 form-group">
                                            <hr style="height: 1px; border-color: lightgrey; margin: 0">
                                            <h4 style="padding-top: 1%"><b>ATACADO</b></h4>
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <label><b>Pre??o:</b></label>
                                            <input type="text" class="form-control money" placeholder="0,00" id="valor-atacado" name="valor-atacado">
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <label><b>Venda minima:</b></label>
                                            <input type="number" class="form-control" id="minimo_venda_atacado" name="minimo_venda_atacado">
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <label><b>Ativo:</b></label>
                                            <select class="js-example-basic-multiple" id="ativo-atacado" name="ativo-atacado">
                                                <option value="1">Ativo</option>
                                                <option value="0">Inativo</option>
                                            </select> 
                                        </div>
                                    </div>
                                </div>    
                                
                                <div id="detalhes" style="display: none">
                                    <div class="row" style="margin-top: 2%">
                                        <div class="col-md-3 form-group">
                                            <label><b>Local de preparo:</b></label>
                                            <input type="text" id="local_preparo" name="local_preparo" class="form-control">
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label><b>Local de armazenamento:</b></label>
                                            <input type="text" id="local_armazenamento" name="local_armazenamento" class="form-control">
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label><b>Tempo de envelhecimento:</b></label>
                                            <input type="text" id="envelhecimento" name="envelhecimento" class="form-control">
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label><b>Porcentagem de teor alco??lico:</b></label>
                                            <input type="text" id="teor" name="teor" class="form-control">
                                        </div>
                                        <div class="col-md-12 form-group">
                                            <label><b>Detalhes:</b></label>
                                            <div id="editor"></div>
                                            <textarea name="desc" id="desc" style="display: none"></textarea>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                                <div id="imagens" style="display: none">
                                    <div class="row" style="margin-top: 2%">
                                        <div class="col-md-6 form-group">
                                            <label><b>Imagem:</b></label><br>
                                            <button type="button" class="btn btn-primary" style="width: 100%" onclick="$('#imagem').click()">Escolher Arquivo (.jpg / .png)</button>
                                            <input type="file" id="imagem" name="imagem" style="display: none" required>
                                            <p id="imagem_label" class="label-imagem"></p>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label><b>Imagem Opcionais:</b></label><br>
                                            <button type="button" class="btn btn-primary" style="width: 100%" onclick="$('#opcionais').click()">Escolher Arquivo(s) (.jpg / .png)</button>
                                            <input type="file" id="opcionais" name="opcionais" style="display: none" multiple>
                                            <p id="opcionais_label" class="label-imagem"></p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div id="promocoes" style="display: none">
                                    <div class="row" style="margin-top: 2%">
                                        <div class="col-md-2 form-group">
                                            <label><b>Pre??o promo????o:</b></label>
                                            <input type="text" id="preco_promocao" name="preco_promocao" class="form-control money" placeholder="0,00">
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <label><b>Pre??o ativo:</b></label>
                                            <select onchange="ativopromocao()" id="preco_promocao_ativo" name="preco_promocao_ativo" class="js-example-basic-multiple" style="width: 100%!important">
                                                <option value="" selected disabled> Selecione </option>
                                                <option value="1">Ativo</option>
                                                <option value="0">Inativo</option>
                                            </select> 
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <label><b>Desconto %:</b></label>
                                            <input type="text" id="desconto" name="desconto" class="form-control" placeholder="0%">
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <label><b>Desconto ativo:</b></label>
                                            <select onchange="ativodesconto()" id="desconto_ativo" name="desconto_ativo" class="js-example-basic-multiple" style="width: 100%!important">
                                                <option value="" selected disabled> Selecione </option>
                                                <option value="1">Ativo</option>
                                                <option value="0">Inativo</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-3 form-group">
                                            <label><b>Data inicial:</b></label>
                                            <input type="date" id="datainicial_promocao" name="datainicial_promocao" class="form-control" placeholder="Data inicial">
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label><b>Data final:</b></label>
                                            <input type="date" id="datafinal_promocao" name="datafinal_promocao" class="form-control" placeholder="Data final">
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <label><b>Data final ativo:</b></label>
                                            <select id="datafinal_promocao_ativo" name="datafinal_promocao_ativo" class="js-example-basic-multiple" style="width: 100%!important">
                                                <option value="" selected disabled> Selecione </option>
                                                <option value="1">Ativo</option>
                                                <option value="0">Inativo</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                            <hr style="height: 1px; border-color: lightgrey">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label><b>Cupom de desconto:</b></label>
                                            <input type="text" id="cupom" name="cupom" class="form-control" placeholder="xxxx-xxxx-xxxx-xxxx">
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <label><b>Cupom ativo:</b></label>
                                            <select id="cupom_ativo" name="cupom_ativo" class="js-example-basic-multiple" style="width: 100%!important">
                                                <option value="" selected disabled> Selecione </option>
                                                <option value="1">Ativo</option>
                                                <option value="0">Inativo</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>    
                                    
                                <div id="ligacoes" style="display: none">
                                    <div class="row" style="margin-top: 2%">
                                        <div class="col-md-6 form-group">
                                            <label><b>Marca:</b></label>
                                            <select id="marca" name="marca" class="js-example-basic-multiple"  style="width: 100%!important;">
                                                <option value="" selected disabled> Selecione </option>
                                                <?php foreach($marcas as $m){?>
                                                    <option value="<?php echo $m['marca_id'] ?>"><?php echo $m['marca_nome'] ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label><b>Departamentos:</b></label>
                                            <select id="departamentos" name="departamentos" multiple class="js-example-basic-multiple" style="width: 100%!important;">
                                                <?php foreach($departamentos as $d){?>
                                                    <option value="<?php echo $d['departamento_id'] ?>"><?php echo $d['departamento_nome'] ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>    
                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <label><b>Produtos relacionados:</b></label>
                                              <select id="relacionados" name="relacionados[]" multiple class="js-example-basic-multiple" style="width: 100%!important;">
                                                <?php foreach($produtos as $p){?>
                                                    <option value="<?php echo $p['produto_id'] ?>"><?php echo $p['produto_nome'] ?></option>
                                                <?php } ?>
                                              </select> 
                                        </div>
                                    </div>
                                </div>
                                    
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center form-group">
                                    <div class="col-md-12 text-right">
                                        <button type="submit" class="btn btn-primary">Adicionar</button>
                                        &nbsp;&nbsp;
                                        <a href="<?php echo base_url('391a027a8fef2eba4487a00156901156') ?>" style="margin-right: 15px;" class="btn btn-danger">Cancelar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
</section>

<style>
    .ql-snow .ql-picker.ql-size .ql-picker-label::before { content: attr(data-value)!important; }
    .ql-snow .ql-picker.ql-size .ql-picker-item::before { font-size: attr(data-value)!important; content: attr(data-value)!important; }
    .ql-picker-label .custom-content::before { content: attr(data-value)!important; }
    #editor{
        min-height: 300px;
    }
</style>

<!-- Main Quill library -->
<script src="//cdn.quilljs.com/1.3.6/quill.js"></script>
<script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>

<!-- Theme included stylesheets -->
<link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<link href="//cdn.quilljs.com/1.3.6/quill.bubble.css" rel="stylesheet">

<script>
    const sizes = ['10px', '12px', '14px', '16px', '18px', '20px', '22px', '24px'];
    
    var Size = Quill.import('attributors/style/size');
    Size.whitelist = sizes;
    Quill.register(Size, true);
    
    var toolbarOptions = [
        [{ 'size': sizes }],
        [{ 'font': [] }],
        
        ['bold', 'italic', 'underline', 'strike'],
        [{ 'script': 'sub'}, { 'script': 'super' }],
        
        ['blockquote', 'code-block'],
        [{ 'list': 'ordered'}, { 'list': 'bullet' }],
        
        [{ 'indent': '-1'}, { 'indent': '+1' }],
        
        [{ 'color': [] }, { 'background': [] }],
        
        [{ 'align': [] }],
        
        ['clean']
    ];
    
    var quill = new Quill('#editor', {
        modules: {
            toolbar: toolbarOptions
        },
        theme: 'snow'
    });
    
    $('.ql-picker-item').click(function(){
        $('.ql-picker-label').addClass('custom-content').attr('data-content', $(this).data('value'));
    });
</script>

<script type="application/javascript">
    $(document).ready(function(){
        $('.number').mask('0#');
        $('.money').mask("#.##0,00", {reverse: true});
        
        $('.ql-picker-item').each( function(){
            if($(this).data('value') == "14px"){
                $(this).click();
            }
        });
    });
</script>

<script>
    $(".tab-li").click(function(){
        $(".tab-li").each(function(){
            var tg = $(this).data('target');
            var ft = $(this).data('fonte');
            
            $('#'+tg).hide();
            $('#'+ft).removeClass('active');
        });
        
        var tg = $(this).data('target');
        var ft = $(this).data('fonte');
        
        $('#'+tg).show();
        $('#'+ft).addClass('active');
    });
    
    $('#imagem').on('change', function(){
        if($(this).val() != ""){
            var fullPath = $('#imagem').val();
            var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
            var filename = fullPath.substring(startIndex);
            if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                filename = filename.substring(1);
            }
            $('#imagem_label').css('display', 'block').html('Selecionado: '+filename);
        }else{
            $('#imagem_label').css('display', 'none');
        }
    });
    
    $('#opcionais').on('change', function(){
        if($(this).val() != ""){
            var numFiles = $(this).get(0).files.length;
            if(parseInt(numFiles) == 1){
                var fullPath = $('#opcionais').val();
                var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
                var frase = fullPath.substring(startIndex);
                if (frase.indexOf('\\') === 0 || frase.indexOf('/') === 0) {
                    frase = frase.substring(1);
                }
                frase = "Selecionado: "+frase;
            }else{
                var frase = 'Selecionados: '+numFiles+' itens';
            }
            $('#opcionais_label').css('display', 'block').html(frase);
        }else{
            $('#opcionais_label').css('display', 'none');
        }
    });
    
    $('#form').submit(function(e){
        $('#desc').html($('#editor').find('.ql-editor').html());
    });
</script>

<script>
    function ativopromocao(){
        if($('#preco_promocao_ativo').val() == 1){
            if($('#desconto_ativo').val() == 1){
                $('#desconto_ativo').val(0).change();
            }
        }
    }
    
</script>

<script>
    function ativodesconto(){
        if($('#desconto_ativo').val() == 1){
            if($('#preco_promocao_ativo').val() == 1){
                $('#preco_promocao_ativo').val(0).change();
            }
        }
    }
</script>