<?php include '_header.php'; ?>
<main id="content" class="content" itemscope itemprop="mainContentOfPage">
  <?php if (have_posts()): while (have_posts()) : the_post();?>
    <div class="page-header page-header-produto">
      <div class="grid section">
        <h1 class="c-brand heading"><strong>Produtos |</strong>
          <small class="c-white">
            <?php
            $terms = get_the_terms($post->ID, 'produtos-categoria-produtos' );
            if ($terms && ! is_wp_error($terms)) :
              $term_slugs_arr = array();
              foreach ($terms as $term) {
                $term_slugs_arr[] = $term->name;
              }
              $terms_slug_str = join( ", ", $term_slugs_arr);
            endif;
            echo $terms_slug_str;
            ?>
          </small>
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
                        $image = oll_image( $img_url, ['w' => '353', 'h' => '450', 'zc' => '2']); ?>
                        <img class="featured--img img-main" src="<?php echo $image ?>" alt="<?php the_title( ); ?>">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="gutter-m product-gallery">
              <figure class="featured featured-product bc-white" data-atomic="p-s" data-grid="s-3 m-3 l-3">
                <div class="media">
                  <div class="media--ratio"></div>
                  <div class="media--content" data-atomic="o-h">
                    <div class="featured-align-img" data-atomic="o-h p-r">
                      <div data-atomic="d-t w-100 h-100">
                        <div data-atomic="d-tc ta-c va-m">
                          <?php $thumb = get_post_thumbnail_id();
                          $img_url = wp_get_attachment_url( $thumb,'full' );
                          $image = oll_image( $img_url, ['w' => '800', 'h' => '800', 'zc' => '2']); ?>
                          <img class="featured--img thumb-img" src="<?php echo $image ?>" alt="<?php the_title( ); ?>">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </figure>
              <?php $galeria = get_field('nx_galeria_de_fotos');
              if($galeria): ?>
              <?php foreach( $galeria as $image ): ?>
                <figure class="featured featured-product bc-white" data-atomic="p-s" data-grid="s-3 m-3 l-3">
                  <div class="media">
                    <div class="media--ratio"></div>
                    <div class="media--content" data-atomic="o-h">
                      <div class="featured-align-img" data-atomic="o-h p-r">
                        <div data-atomic="d-t w-100 h-100">
                          <div data-atomic="d-tc ta-c va-m">
                            <img class="featured--img thumb-img" src="<?php echo $image['url']; ?>" alt="<?php the_title();?>">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </figure>
              <?php endforeach; ?>
            <?php endif; ?>
          </div>
        </div>

        <div class="page-content--block" data-grid="s-1 m-3x2 l-3x2">
          <a href="javascript: history.go(-1)" class="btn btn-border-primary btn-product-back" data-atomic="f-r ml-l">Voltar</a>
          <h1 class="heading-alt c-brand" data-atomic="o-h mb-l"><?php the_title();?></h1>
          <div class="product-description article c-grey">
            <?php the_content(); ?>
          </div>
        </div>
      </div>

      <div class="simpleTabs" data-atomic="mt-xl">
        <ul class="simpleTabsNavigation">
          <li data-tab="oll1"><a href="#!Modelos"><h3>Modelos</h3></a></li>
          <?php if( have_rows('nx_outros_dados') ): ?>
            <?php while( have_rows('nx_outros_dados') ): the_row(); $tituloTab = get_sub_field('nx_titulo_aba'); ?>
              <li data-tab="<?php the_ID(); ?>"><a href="#!<?= $tituloTab; ?>"><h3><?= $tituloTab; ?></h3></a></li>
            <?php endwhile; ?>
          <?php endif; ?>
        </ul>
        <div class="simpleTabsContent" data-olltab="oll-tab-oll1" data-atomic="mt-xs p-m">
          <?php if( have_rows('nx_modelos') ): ?>
            <table class="table table-product table-product-main" data-atomic="w-100">
              <thead>
                <tr>
                  <td class="td-1" style="width: 130px;">Código</td>
                  <td class="td-2">Descrição</td>
                  <!--                        	<td class="td-3">Tamanhos</td>-->
                  <td class="td-4" data-atomic="w-10">Quantidade</td>
                  <td class="td-5" data-atomic="w-20"></td>
                </tr>
              </thead>
              <tbody>

                <?php while( have_rows('nx_modelos') ): the_row();
                  // vars
                  $codigo = get_sub_field('nx_codigo');
                  $descricao = get_sub_field('nx_descricao');
                  $tamanho = get_sub_field('nx_tamanhos');
                  ?>
                <tr class="product-model oll-item" id="product[<?php echo $i; ?>]">
                  <td class="td-1 product-model--code" data-atomic="w-10"><?php echo /*"P{$post->ID}M"*/ " {$codigo}";?></td>
                  <td class="td-2 product-model--desc desc"><?= $descricao; ?></td>
                  <!--                        	<td class="td-3 product-model--size" data-atomic="w-10"><?= $tamanho; ?></td>-->
                  <td class="td-4 product-model--quant"><input type="number" name="quantidade" class="oll-quantity" value="1" min="1"></td>
                  <td class="td-5 product-model--add" data-atomic="w-20">
                    <button class="btn-black c-brand oll-add" type="button" data-productid="<?php echo $post->ID;?>" data-productname="<?php echo get_the_title();?>" data-modelcode="<?php echo "P{$post->ID}M{$codigo}";?>" data-modelname="<?php echo $descricao;?>">
                      <span class="hidden-s">Adcionar ao Orçamento</span> <i class="fa fa-plus"></i>
                    </button>
                  </td>
                </tr>
              <?php endwhile; ?>
            </tbody>
          </table>
        <?php endif; ?>
      </div>

      <?php if( have_rows('nx_outros_dados') ): ?>
        <?php while( have_rows('nx_outros_dados') ): the_row(); $textoTab = get_sub_field('nx_conteudo_da_aba'); ?>
          <div class="simpleTabsContent" data-olltab="oll-tab-<?php the_ID(); ?>" data-atomic="mt-xs p-m">
            <?= $textoTab; ?>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>

  <?php
  $posts = get_field('nx_produtos_relacionados');
  if( $posts ):
    ?>
    <div class="page-content--block bc-light">
      <div class="grid section">
        <div>
          <h2 class="heading-alt c-brand">Produtos Relacionados</h2>
        </div>
        <ul class="related-product-list grid-inline gutter-l">

          <?php foreach( $posts as $post): ?>
            <li class="product" itemscope="" itemtype="http://schema.org/Product" data-grid="s-2 m-4 l-6" data-atomic="mt-xl">
              <a href="<?php the_permalink(); ?>" class="product--link" href="produto.php?pecas-de-reposicao" tabindex="-1">
                <div class="media bc-white">
                  <div class="media--ratio"></div>
                  <div class="media--content featured" data-atomic="o-h p-m">
                    <div class="featured-align-img" data-atomic="o-h p-r">
                      <div data-atomic="d-t w-100 h-100">
                        <div data-atomic="d-tc ta-c va-m">
                          <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                          <img alt="asdf" class="featured--img" src="<?php bloginfo('template_directory'); ?>/assets/tim.php?src=<?= $url; ?>&w=170&h=170&zc=2">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="product-caption c-brand" data-atomic="ta-c mt-s">
                  <h3 class="product-caption--name name">
                    <span itemprop="name"><?php the_title(); ?></span>
                  </h3>
                </div>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  <?php endif; ?><!--FECHA PRODUTOS RELACIONADOS-->
</div>
<?php endwhile; else:?>
<?php endif;?>

<a id="oll-cart" class="orcamento-widget"  href="<?php bloginfo('url'); ?>/faca-seu-orcamento/">
  <div class="widget-content shadow">
    <div class="widget-text bc-black">
      <h3 class="c-brand">Finalizar Orçamento</h3>

      <div class="widget-count text-center">
        <div class="bc-brand" data-atomic="p-y-xs">
          <div class="img-holder">
            <i class="fa fa-calculator c-white" data-atomic="fs-xl"></i>
          </div>
        </div>
        <span id="widgetCount" class="c-brand" data-atomic="d-b p-y-xs">000</span>
      </div>
    </div>
  </div>
</a>
<style>
#oll-cart{
  display: block;
}
</style>

</main>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/oll.cart.js" type="text/javascript"></script>
<script>

jQuery(window).load(function(){
  ollcart(null, null, 'products');
  jQuery('.table-product-main button.oll-add').on('click', function(){
    ollcart($(this), 'add', 'products');
  });
});
// $('.simpleTabsNavigation li').on('click', function(e){
//   e.preventDefault();
//   var contentOpen = $(this).data('tab');
//
//   $('.simpleTabsContent').fadeOut();
//   $('.oll-tab-' + contentOpen).fadeIn();
// });
</script>
<?php include '_footer.php'; ?>
