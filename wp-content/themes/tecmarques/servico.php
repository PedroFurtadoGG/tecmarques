<?php
/*
Template Name: Serviço
*/ include '_header.php'; ?>
<main id="content" class="content" itemscope itemprop="mainContentOfPage">

  <?php if (have_posts()): while (have_posts()) : the_post();?>
    <div class="page-header page-header-servicos">
      <div class="grid section">
        <h1 class="c-brand heading"><strong>servicos |</strong>
          <small class="c-white"><?php the_title(); ?></small>
        </h1>
      </div>
    </div>

    <div class="page-hero page-hero-institucional">
      <div class="grid">
        <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
        if($url) : ?>
        <img alt="asdf" class="featured--img" src="<?php bloginfo('template_directory'); ?>/assets/tim.php?src=<?= $url; ?>&w=1200&h=410&zc=1">
      <?php endif; ?>
    </div>
  </div>

  <div class="page-content page-content-servicos grid section">
    <div class="page-content--block" data-grid="s-1 m-1 l-3x2">
      <article class="servico-article">
        <div class="servico--video" data-atomic="mb-l">
          <div class="media">
            <div class="media--ratio ratio-16by9"></div>
            <div class="media--content" id="ytplayer">
              <iframe frameborder="0" height="100%" id="player" src="http://www.youtube.com/embed/rjB09r8Y3rQ?enablejsapi=1&amp" type="text/html" width="100%"></iframe>
            </div>
          </div>
        </div>
        <h1 class="c-brand"><?php the_title(); ?></h1>
        <div class="article">
          <?php the_content(); ?>
        </div>
        <a href="<?php bloginfo('url'); ?>/faca-seu-orcamento" class="btn btn-large btn-primary oll-add-location" data-atomic="mt-xl">Solicite um Orçamento</a>
      </article>
    </div>
  </div>
<?php endwhile; else:?>
<?php endif;?>

<a id="oll-cart" class="orcamento-widget" href="http://tecmarques.com.br/site/faca-seu-orcamento/">
  <div class="widget-content shadow">
    <div class="widget-text bc-black">
      <h3 class="c-brand">Finalizar Orçamento</h3>

      <div class="widget-count text-center">
        <div class="bc-brand" data-atomic="p-y-xs">
          <div class="img-holder">
            <i class="fa fa-calculator c-white" data-atomic="fs-xl"></i>
          </div>
        </div>
        <span id="widgetCount" class="c-brand" data-atomic="d-b p-y-xs">0</span>
      </div>
    </div>
  </div>
</a>

<script src="<?php bloginfo('template_directory'); ?>/assets/js/oll.cart.js" type="text/javascript"></script>
<script>
$(window).load(function(){
  ollcart(null, null, 'services');
  jQuery('.oll-add-service').on('click', function(){
    ollcart($(this), 'add', 'services');
  });
});
</script>

</main>
<?php include '_footer.php'; ?>
