<footer class="global-footer bc-black c-white" id="globalFooter" itemscope itemtype="http://schema.org/WPFooter" role="contentinfo">
  <div class="global-footer--nav">
    <div class="grid section">
      <div data-grid="s-1 m-6 l-6">
        <h4 class="c-brand list-column--title">Serviços</h4>
        <ul class="list c-grey" role="menu">
          <?php wp_nav_menu( array( 'theme_location' => 'menu-servicos', 'items_wrap'=>'%3$s', 'container' => false ) ); ?>
        </ul>
      </div>

      <div data-grid="s-1 m-6x4 l-6x4">
        <h4 class="c-brand list-column--title">Produtos</h4>
        <ul class="list list-column list-padding c-grey" role="menu">
          <?php
          $taxonomy = 'produtos-categoria-produtos';
          $tax_terms = get_terms($taxonomy);
          foreach ($tax_terms as $tax_term) {
            echo '<li>' . '<a href="' . esc_attr(get_term_link($tax_term, $taxonomy)) . '" title="' . sprintf( __( "View all posts in %s" ), $tax_term->name ) . '" ' . '>' . $tax_term->name.'</a></li>';
          };
          ?>
        </ul>
      </div>

      <div data-grid="s-1 m-6 l-6">
        <h4 class="c-brand list-column--title">Locação</h4>
        <ul class="list c-grey" role="menu">
          <?php
          $taxonomy = 'locacoes-categoria-locacoes';
          $tax_terms = get_terms($taxonomy);
          foreach ($tax_terms as $tax_term) {
            echo '<li>' . '<a href="' . esc_attr(get_term_link($tax_term, $taxonomy)) . '" title="' . sprintf( __( "View all posts in %s" ), $tax_term->name ) . '" ' . '>' . $tax_term->name.'</a></li>';
          };
          ?>
        </ul>

        <h4 class="c-brand list-column--title" data-atomic="mt-l">Contato</h4>
        <ul class="list c-grey" role="menu">
          <?php wp_nav_menu( array( 'theme_location' => 'menu-contato', 'items_wrap'=>'%3$s', 'container' => false ) ); ?>
        </ul>
      </div>
    </div>
  </div>
  <div class="grid">
    <hr style="opacity:0.3;">
  </div>
  <div class="global-footer--container section">
    <div class="grid">
      <div class="gutter-l">
        <div data-grid="s-1 m-2 l-2">
          <figure class="logo brand-holder" id="logoFooter">
            <a href="index" rel="nofollow"><img src="<?php bloginfo('template_directory'); ?>/assets/img/logo.png"></a>
          </figure>

          <div class="c-mute" data-atomic="mt-l">
            <div class="brand-info grid-inline grid-va-m">
              <div data-atomic="ta-c" data-grid="s-6 m-6 l-6">
                <div class="img-holder">
                  <i class="fa fa-phone" data-atomic="fs-l"></i>
                </div>
              </div>
              <div data-atomic="lh-15" data-grid="s-6x5 m-6x5 l-6x5">
                <span data-atomic="d-b">(62) 3516-1129</span>
              </div>
            </div>
            <div class="brand-info grid-inline grid-va-m">
              <div data-atomic="ta-c" data-grid="s-6 m-6 l-6">
                <div class="img-holder">
                  <i class="fa fa-mobile" data-atomic="fs-l"></i>
                </div>
              </div>
              <div data-atomic="lh-15" data-grid="s-6x5 m-6x5 l-6x5">
                <span data-atomic="d-b">(62) 8492-4455</span>
              </div>
            </div>

            <div class="brand-info grid-inline grid-va-m" data-atomic="m-y-l">
              <div data-atomic="ta-c" data-grid="s-6 m-6 l-6">
                <div class="img-holder">
                  <i class="fa fa-envelope-o" data-atomic="fs-l"></i>
                </div>
              </div>
              <div data-atomic="lh-15" data-grid="s-6x5 m-6x5 l-6x5">
                <div class="truncate" data-atomic="d-b">vendas@tecmarques.com.br</div>
                <div class="truncate" data-atomic="d-b">tecmarques@tecmarques.com.br</div>
              </div>
            </div>

            <div class="brand-info grid-inline grid-va-m">
              <div data-atomic="ta-c" data-grid="s-6 m-6 l-6">
                <div class="img-holder">
                  <i class="fa fa-map-marker" data-atomic="fs-l"></i>
                </div>
              </div>
              <address data-atomic="lh-15" data-grid="s-6x5 m-6x5 l-6x5">
                <span data-atomic="d-b">Rua 21 c/ Rua 28, Qd. 48,</span>
                <span data-atomic="d-b">Setor Linda Vista, CEP: 75370-000,</span>
                <span data-atomic="d-b">Goianira - GO, Brasil</span>
              </address>
            </div>
          </div>
        </div>

        <div data-atomic="f-r" data-grid="s-1 m-3 l-3">
          <div data-grid="s-1 m-2 l-2">
            <div class="c-brand text-light div-bndes" style="margin-left: -35px;"><img alt="" data-atomic="f-l mr-m" src="<?php bloginfo('template_directory'); ?>/assets/img/bndes.png"/>
              <span data-atomic="va-m">Aceitamos
                <br>Cartão BNDES</span>
              </div>
            </div>

            <div data-grid="s-1 m-2 l-2">
              <h5 class="c-brand text-light">Redes Sociais:</h5>
              <ul class="social-list list-inline" data-atomic="mb-l">
                <li>
                  <a class="img-holder fa fa-facebook c-brand" data-atomic="fs-xxl" href="https://www.facebook.com/TecMarques1/ " rel="nofollow" target="_blank" title="facebook"></a>
                </li>
                <li data-atomic="m-x-m">
                  <a class="img-holder fa fa-linkedin c-brand" data-atomic="fs-xxl" href="https://www.linkedin.com/company/tecmarques" rel="nofollow" target="_blank" title="linkedin"></a>
                </li>
                <li>
                  <a class="img-holder fa fa-youtube-play c-brand" data-atomic="fs-xxl" href="https://www.youtube.com/channel/UCTvLej9AkPUZ4SMCqeadUrA" rel="nofollow" target="_blank" title="youtube"></a>
                </li>
              </ul>
            </div>

            <h5 class="c-brand text-light" data-atomic="mb-0">Receba nossas novidades</h5>
            <div class="c-grey" data-atomic="mb-m fs-s">direto na sua caixa de entrada.</div>
            <?php include 'form.newsletter.php'; ?>
          </div>
        </div>
      </div>
    </div>
    <!-- @global-footer-container -->

    <div class="global-footer--copyright bc-brand c-black cf" data-atomic="p-y-s ta-c o-h">
      <div class="grid">
        <span data-atomic="lh-2 va-m">Copyright © TECMARQUES - Todos os direitos Reservados</span>

        <div class="dev-author invisible" data-atomic="lh-2 fs-s f-r">
          <span>Desenvolvido por
          </span>
          <a data-atomic="va-b d-ib ml-s" href="http://nextsites.com.br" target="_blank" title="Site desenvolvido por Next Sites Tecnologias de comunicação"><img alt="" src="<?php bloginfo('template_directory'); ?>/assets/img/dev-logo.png"></a>
        </div>
      </div>
    </div>
  </footer>

  <script charset="utf-8" src="<?php bloginfo('template_directory'); ?>/assets/js/scripts.min.js" type="text/javascript"></script>
  <!-- <script charset="utf-8" src="<?php bloginfo('template_directory'); ?>/assets/js/plugins/mobileMenu.js" type="text/javascript"></script>
  <script charset="utf-8" src="<?php bloginfo('template_directory'); ?>/assets/js/plugins/jquery.validate.js" type="text/javascript"></script>
  <script charset="utf-8" src="<?php bloginfo('template_directory'); ?>/assets/js/plugins/simpletabs_1.3.js" type="text/javascript"></script>
  <script charset="utf-8" src="<?php bloginfo('template_directory'); ?>/assets/js/plugins/slick.min.js" type="text/javascript"></script>
  <script charset="utf-8" src="<?php bloginfo('template_directory'); ?>/assets/js/scripts.js" type="text/javascript"></script> -->
</body>
</html>
