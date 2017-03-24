<script>

  $(function(){
    $('.cat-img').mouseover(function(){
      var image = $(this).attr('id');
      $('#img-link').attr('src', image);
    });
  });

</script>
<li aria-haspopup="true" class="list-dropdown with-icon" role="menuitem">
  <a href="<?php bloginfo('url'); ?>/a-empresa/">Institucional
    <i class="fa fa-angle-down" data-atomic="va-b fs-xl ml-xs"></i>
  </a>
  <ul class="list dropdown dropdown-menu shadow-xl c-brand" data-atomic="p-l" role="menu">
    <?php wp_nav_menu( array( 'theme_location' => 'menu-institucional', 'items_wrap'=>'%3$s', 'container' => false ) ); ?>
  </ul>
</li>

<li aria-haspopup="true" class="list-dropdown with-icon trigger--mega-menu" role="menuitem">
  <a href="<?php bloginfo('url'); ?>/produtos/">Produtos
    <i class="fa fa-angle-down" data-atomic="va-b fs-xl ml-xs"></i>
  </a>
  <ul class="list dropdown" role="menu">
    <li class="mega-menu shadow-xl" data-atomic="p-l">
      <div class="gutter-l grid-inline grid-va-m">
        <div class="hidden-s hidden-m" data-grid="s-1 m-1 l-3">
          <div class="mega-menu--img-holder">
            <div class="media">
              <div class="media--ratio"></div>
              <div class="media--content media--content-photo">
                <img alt="Thumbnail da notícia" id="img-link" class="fade-in" src="http://tecmarques.com.br/site/wp-content/uploads/2016/02/03.jpg">
              </div>
            </div>
          </div>
        </div>

        <div data-grid="s-1 m-1 l-3x2">
          <ul class="list list-column col-2 mega-menu--list c-brand">
            <?php
            //list terms in a given taxonomy (useful as a widget for twentyten)
            $taxonomy = 'produtos-categoria-produtos';
            $tax_terms = get_terms($taxonomy);
            foreach ($tax_terms as $tax_term) {
              echo '<li class="cat-img" id="'.z_taxonomy_image_url($tax_term->term_id).'">' . '<a href="' . esc_attr(get_term_link($tax_term, $taxonomy)) . '" title="' . sprintf( __( "View all posts in %s" ), $tax_term->name ) . '" ' . ' role="menuitem">' . $tax_term->name.'</a></li>';
            };
            ?>
          </ul>
        </div>
      </div>
    </li>
  </ul>
</li>

<li aria-haspopup="true" class="list-dropdown with-icon" role="menuitem">
  <a href="<?php bloginfo('url'); ?>/servicos/">Serviços
    <i class="fa fa-angle-down" data-atomic="va-b fs-xl ml-xs"></i>
  </a>
  <ul class="list dropdown dropdown-menu shadow-xl c-brand" data-atomic="p-l" role="menu">
    <?php wp_nav_menu( array( 'theme_location' => 'menu-servicos', 'items_wrap'=>'%3$s', 'container' => false ) ); ?>
  </ul>
</li>

<li role="menuitem">
  <a href="<?php bloginfo('url'); ?>/locacoes/cestos-aereos/">Locação</a>
</li>

<li aria-haspopup="true" class="list-dropdown with-icon" role="menuitem">
  <a href="<?php bloginfo('url'); ?>/fale-conosco/">Contato
    <i class="fa fa-angle-down" data-atomic="va-b fs-xl ml-xs"></i>
  </a>
  <ul class="list dropdown dropdown-menu shadow-xl c-brand" data-atomic="p-l" role="menu">
    <?php wp_nav_menu( array( 'theme_location' => 'menu-contato', 'items_wrap'=>'%3$s', 'container' => false ) ); ?>
    <li role="menuitem">
      <a href="<?php bloginfo('url'); ?>/faca-seu-orcamento/">Faça seu Orçamento</a>
    </li>
  </ul>
</li>
