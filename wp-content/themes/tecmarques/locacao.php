<?php
/*
 Template Name: Locação
*/ include '_header.php'; ?>
<main id="content" class="content" itemscope itemprop="mainContentOfPage">

<div class="page-header page-header-produto">
    <div class="grid section">
        <h1 class="c-brand heading"><strong>Locação |</strong>
            <small class="c-white">Cestos Àereos</small>
        </h1>
    </div>
</div>

<div class="page-content page-content-produto">
    <div class="grid section">
        <div class="gutter-l">
            <div class="page-content--block product-images" data-grid="s-1 m-3 l-3">
                <div class="featured featured-home bc-white" data-atomic="p-s mb-m" data-grid="s-1 m-1 l-1">
                    <div class="media">
                        <div class="media--ratio"></div>
                        <div class="media--content" data-atomic="o-h">
                            <div class="featured-align-img" data-atomic="o-h p-r">
                                <div data-atomic="d-t w-100 h-100">
                                    <div data-atomic="d-tc ta-c va-m">
                                        <?php $thumb = get_post_thumbnail_id();
                                        $img_url = wp_get_attachment_url( $thumb,'full' ); 
                                        $image = oll_image( $img_url, ['w' => '353', 'h' => '353', 'zc' => '2']); ?>
                                        <img src="<?php echo $image ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="gutter-m">
                    <?php for($i=0; $i<3; $i++) { ?>
                    <div class="featured featured-home bc-white" data-atomic="p-s" data-grid="s-3 m-3 l-3">
                        <div class="media">
                            <div class="media--ratio"></div>
                            <div class="media--content" data-atomic="o-h">
                                <div class="featured-align-img" data-atomic="o-h p-r">
                                    <div data-atomic="d-t w-100 h-100">
                                        <div data-atomic="d-tc ta-c va-m">
                                            <img alt="asdf" class="featured--img" src="<?php bloginfo('template_directory'); ?>/assets/img/locacao/thumbnail.jpg">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>

            <div class="page-content--block" data-grid="s-1 m-3x2 l-3x2">
                <header data-atomic="p-r">
                    <h1 class="heading-alt c-brand">Locação de Cestos Áereos</h1>
                    <a href="javascript: history.go(-1)" class="btn btn-border-primary btn-product-back" data-atomic="p-a">Voltar</a>
                </header>
                <div class="product-description article c-grey">
                    <p>
                        Curabitur iaculis diam id arcu dictum accumsan. Nulla sagittis quam ut metus placerat ullamcorper sit amet eu orci. Ut quis velit sem. Mauris pulvinar tempor ultricies. Quisque sit amet aliquet neque. Praesent congue sapien eu odio auctor semper. Nullam iaculis turpis odio, sit amet pharetra justo convallis quis. Etiam suscipit volutpat vehicula.
                    </p>
                    <p>
                        Donec dolor magna, lacinia ut ultricies non, tempor sed mi. Mauris commodo suscipit dui, eu bibendum massa auctor at. Quisque et finibus eros. Ut placerat felis nunc. Maecenas pellentesque nulla tellus, a consectetur ipsum suscipit ac. Sed lacinia sem eu molestie vestibulum. Nulla facilisi.
                    </p>
                    <p>
                        Donec dolor magna, lacinia ut ultricies non, tempor sed mi. Mauris commodo suscipit dui, eu bibendum massa auctor at. Quisque et finibus eros. Ut placerat felis nunc. Maecenas pellentesque nulla tellus, a consectetur ipsum suscipit ac. Sed lacinia sem eu molestie vestibulum. Nulla facilisi.
                    </p>
                </div>
            </div>
        </div>

        <div class="simpleTabs" data-atomic="mt-xl">
            <ul class="simpleTabsNavigation">
                <li data-tab="oll1"><a href="#"><h3>Modelos</h3></a></li>
                <li data-tab="oll2"><a href="#"><h3>Dados Técnicos</h3></a></li>
                <li data-tab="oll3"><a href="#"><h3>Características</h3></a></li>
                <li data-tab="oll4"><a href="#"><h3>Downloads</h3></a></li>
            </ul>
            <div class="simpleTabsContent oll-tab-oll1" data-atomic="mt-xs p-m" style="display: block!important;">
                <table class="table table-product table-product-main" data-atomic="w-100">
                    <thead>
                        <tr>
                        	<td class="td-1" data-atomic="w-10">Código</td>
                        	<td class="td-2">Descrição</td>
                        	<td class="td-3">Tamanhos</td>
                        	<td class="td-4" data-atomic="w-10">Quantidade</td>
                        	<td class="td-5" data-atomic="w-20"></td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for($i=0; $i<8; $i++) { ?>
                        <tr class="product-model  oll-item" id="product[<?php echo $i; ?>]">
                        	<td class="td-1 product-model--code" data-atomic="w-10">0<?php echo $i; ?></td>
                        	<td class="td-2 product-model--desc desc">Integer faucibus porttitor risus et accumsan.</td>
                        	<td class="td-3 product-model--size" data-atomic="w-10">0<?php echo $i; ?></td>
                        	<td class="td-4 product-model--quant"><input type="number" class="oll-quantity" value="1" min="1"></td>
                        	<td class="td-5 product-model--add" data-atomic="w-20"><button class="btn-black c-brand oll-add-location" type="button" data-productid="<?php echo $post->ID;?>" data-productname="<?php echo get_the_title();?>" data-modelcode="<?php echo "L{$post->ID}M_IDMODELO{$i}_";?>" data-modelname="_DESCRICAOMODELO_">Adcionar ao Orçamento</button></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="simpleTabsContent oll-tab-oll2" data-atomic="mt-xs p-m">
                <table class="table table-product table-product-details">
                    <tbody>
                        <tr>
                            <td>
                                <strong>Produto</strong>
                            </td>
                            <td>
                                Nome do produto
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Imagem</strong>
                            </td>
                            <td class="text-left">
                                <div class="img-holder img-holder-xl" data-atomic="m-y-m">
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/locacao/thumbnail.jpg" alt="Nome do produto" title="Nome do produto" class="product-thumbnail" />
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Preço</strong>
                            </td>
                            <td>
                                R$ 210,59
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Modelo</strong>
                            </td>
                            <td>
                                Modelo 01
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Marca</strong>
                            </td>
                            <td>Marca 01</td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Disponibilidade</strong>
                            </td>
                            <td>
                                10
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Avaliação</strong>
                            </td>
                            <td class="rating">
                                <span class="fa fa-stack">
                                    <i class="fa fa-star fa-stack-2x"></i>
                                </span>
                                <span class="fa fa-stack">
                                    <i class="fa fa-star fa-stack-2x"></i>
                                </span>
                                <span class="fa fa-stack">
                                    <i class="fa fa-star fa-stack-2x"></i>
                                </span>
                                <span class="fa fa-stack">
                                    <i class="fa fa-star-o fa-stack-2x"></i>
                                </span>
                                <span class="fa fa-stack">
                                    <i class="fa fa-star-o fa-stack-2x"></i>
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Resumo</strong>
                            </td>
                            <td class="description desc">
                                Mesa sanfonada medindo 0,80cm de altura por 0,80x0,80 cm de largura.Fabricada com metalons 25x25 nas colunas e tesouras de ombilongos, encaixes superiores feitos com metalons 16x16 e cantoneiras. Tamp..
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Peso</strong>
                            </td>
                            <td>
                                1.200 kg
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Dimensões (C x L x A)</strong>
                            </td>
                            <td>
                                0.00cm x 0.00cm x 0.00cm
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="simpleTabsContent oll-tab-oll3" data-atomic="mt-xs p-m">
                <h4 class="c-brand heading-alt2">Vestibulum sit amet arcu Características</h4>
                <p> tabCaracteristicas Vestibulum sit amet arcu a leo dignissim lobortis. Quisque augue neque, adipiscing id, condimentum eu, congue at, pede. Vivamus rhoncus. Aliquam pulvinar justo et ligula. Pellentesque ligula elit, placerat vel, luctus ac, facilisis et, enim. Nulla
                    malesuada venenatis metus.</p>
                <h5 class="c-brand">Característica 1</h5>
                <p> tabCaracteristicas Vestibulum sit amet arcu a leo dignissim lobortis. Quisque augue neque, adipiscing id, condimentum eu, congue at, pede. Vivamus rhoncus. Aliquam pulvinar justo et ligula. Pellentesque ligula elit, placerat vel, luctus ac, facilisis et, enim. Nulla
                    malesuada venenatis metus.</p>
                <h5 class="c-brand">Característica 2</h5>
                <p> tabCaracteristicas Vestibulum sit amet arcu a leo dignissim lobortis. Quisque augue neque, adipiscing id, condimentum eu, congue at, pede. Vivamus rhoncus. Aliquam pulvinar justo et ligula. Pellentesque ligula elit, placerat vel, luctus ac, facilisis et, enim. Nulla
                    malesuada venenatis metus.</p>
                <h5 class="c-brand">Característica 3</h5>
                <p> tabCaracteristicas Vestibulum sit amet arcu a leo dignissim lobortis. Quisque augue neque, adipiscing id, condimentum eu, congue at, pede. Vivamus rhoncus. Aliquam pulvinar justo et ligula. Pellentesque ligula elit, placerat vel, luctus ac, facilisis et, enim. Nulla
                    malesuada venenatis metus.</p>
            </div>
            <div class="simpleTabsContent oll-tab-oll4" data-atomic="mt-xs p-m">
                <table class="table table-product table-product-details">
                    <tbody>
                        <?php for($i=0; $i<8; $i++) { ?>
                        <tr>
                            <td>
                                <strong>Modelo xpto-<?php echo $i; ?></strong>
                            </td>
                            <td class="text-left" data-atomic="w-70">
                                <i class="fa fa-file-pdf-o "></i> Manual version 1.14.3
                            </td>
                            <td class="td-5 product-model--add" data-atomic="w-15"><button class="btn-black c-brand" type="button" name="addProduct">Download <i class="fa fa-download"></i></button></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/oll.cart.js" type="text/javascript"></script>
<script>
    $(window).load(function(){
        ollcart(null, null, 'locations');
        jQuery('.table-product-main button.oll-add-location').on('click', function(){
            ollcart($(this), 'add', 'locations');
        });
    });
    $(document).ready(function(){
        $('.simpleTabsNavigation li').on('click', function(e){
            e.preventDefault();
            var contentOpen = $(this).data('tab');

            $('.simpleTabsContent').fadeOut(); 
            $('.oll-tab-' + contentOpen).fadeIn(); 
        });
    });
</script>
</main>
<?php include '_footer.php'; ?>
