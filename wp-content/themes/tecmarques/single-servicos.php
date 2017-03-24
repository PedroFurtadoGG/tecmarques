<?php
/*
Template Name: Serviço
*/ include '_header.php'; ?>
<main id="content" class="content" itemscope itemprop="mainContentOfPage">

  <?php if (have_posts()): while (have_posts()) : the_post();?>
    <div class="page-header page-header-servicos">
      <div class="grid section">
        <h1 class="c-brand heading"><strong>servicos |</strong>
          <small class="c-white">
            <?php
            $terms = get_the_terms($post->ID, 'servicos-categoria-servicos' );
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

    <div class="page-content page-content-servicos grid section">
      <div class="page-content--block text-left" data-grid="s-1 m-1 l-3x2">
        <article class="servico-article">

          <?php $video = get_field('nx_video_servico');
          if($video): ?>
          <div class="servico--video" data-atomic="mb-l">
            <span class="media">
              <span class="media--ratio ratio-16by9"></span>
              <span class="media--content" id="ytplayer">
               <img src="http://tecmarques.com.br/wp-content/uploads/2016/09/ensaios_eletricos.png"/>
              </span>
            </span>
          </div>
        <?php endif; ?>
        <h1 class="c-brand"><?php the_title(); ?></h1>
        <div class="article">
          <p align="justify"><?php the_content(); ?></p>
        </div>
		<button data-modelname="<?php the_title(); ?>" data-modelcode="" data-productname="<?php the_title(); ?>" data-productid="68" type="button" class="btn btn-large btn-primary oll-add" data-category="services">
			Solicite um Orçamento
		</button>
        
      </article>
    </div>
  </div>
<?php endwhile; else:?>
<?php endif;?>




<script src="<?php bloginfo('template_directory'); ?>/assets/js/oll.cart.js" type="text/javascript"></script>
<script>
jQuery(window).load(function(){
		
	jQuery('.oll-add').on('click', function(){

		ollcart($(this), 'add', 'services');
		window.location.href="http://tecmarques.com.br/site/faca-seu-orcamento/'; ?>";
	});

});

</script>

</main>
<?php include '_footer.php'; ?>
