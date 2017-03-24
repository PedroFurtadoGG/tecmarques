<?php include '_header.php'; ?>
<main id="content" class="content" itemscope itemprop="mainContentOfPage">

  <div class="hero hero-home cf">
    <figure class="hero--figure" data-atomic="p-r">
      <img alt="Praticidade e segurança" class="hero--img" src="<?php bloginfo('template_directory'); ?>/assets/img/banners/home.jpg">
      <figcaption class="hero--figcaption home">
        <div class="grid">
          <div class="gutter-l grid-inline grid-va-m" data-atomic="ta-r">
            <div data-atomic="fs-l ta-l" data-grid="s-1 m-3x2 l-3x2">
              <h1 class="c-white text-bold heading-alt">Qualidade e segurança
                <br>aliada a bons equipamentos</h1>

                <a class="btn btn-medium btn-black c-brand" data-atomic="br-m" href="http://tecmarques.com.br/produtos-categoria-produtos/aterramentos-temporarios/">Conheça nossa
                  <strong>linha de produtos</strong>
                </a>
              </div>
            </div>
          </div>
        </figcaption>
      </figure>
    </div>

    <div class="section-features section">
      <div class="grid">

        <?php if( have_rows('bloco_de_categorias', 'option') ): ?>
          <div class="gutter-l">

            <?php while( have_rows('bloco_de_categorias', 'option') ): the_row();
            // vars
            $tituloBloco = get_sub_field('titulo_do_bloco', 'option');
            $backgroundBloco = get_sub_field('background_do_bloco', 'option');
            $linksBloco = get_sub_field('links_do_bloco', 'option');
            ?>
            <article class="feature feature-home bc-brand" data-grid="s-1 m-3 l-3">
              <div class="media">
                <div class="media--ratio"></div>
                <div class="media--content">
                  <header class="feature--header" data-atomic="p-l">
                    <h3 class="heading c-white text-regular">
                      <?= $tituloBloco; ?>
                    </h3>
                  </header>

                  <div class="feature--content" data-atomic="p-l">
                    <img alt="asdf" class="feature--bg" src="<?php bloginfo('template_directory'); ?>/assets/tim.php?src=<?= $backgroundBloco; ?>&w=370&h=463&zc=1" />
                    <ul class="list list-animated">
                      <?php if( $linksBloco ):
                        foreach ($linksBloco as $links) : ?>

                        <li>
                          <div data-atomic="w-100 h-100 d-t">
                            <a href="<?= get_term_link( $links ); ?>" data-atomic="w-100 h-100 d-tc va-m ta-c"><?= $links->name; ?></a>
                          </div>
                        </li>
                      <?php endforeach; endif; ?>
                    </ul>
                  </div>

                  <footer class="feature--footer" data-atomic="p-l">
                    <button type="button" class="btn-black c-brand btn-anime-list" data-atomic="br-m">Saiba Mais</a>
                    </footer>
                  </div>
                </div>
              </article>
            <?php endwhile; ?>
          </div>
        <?php endif; ?>
      </div>
    </div>

    <div class="section-services section">
      <div class="grid">
        <div class="gutter-l">
          <?php if ( have_rows('abas_de_links','option') ) :
            while ( have_rows('abas_de_links','option') ) : the_row();
            $tituloAba = get_sub_field('titulo_aba', 'option');
            $linksAba = get_sub_field('links_de_abas', 'option'); ?>
            <article class="services services-home" data-atomic="ta-c" data-grid="s-1 m-2 l-2">
              <header class="services--header bc-black" data-atomic="p-m">
                <h1 class="text-regular c-brand"><?= $tituloAba; ?></h1>
              </header>
              <?php if ($linksAba) : ?>
                <div class="services--content">
                  <ul class="services-list list list-table c-white text-medium bc-brand-contrast">
                    <?php foreach ($linksAba as $linksA) : ?>
                      <li data-atomic="w-50">
                        <a data-atomic="d-b p-m" href="<?= get_permalink( $linksA->ID ); ?>"><?= get_the_title( $linksA->ID ); ?></a>
                      </li>
                    <?php endforeach; ?>
                  </ul>
                </div>
              <?php endif; ?>
            </article>
          <?php endwhile; endif; ?>
        </div>
      </div>
    </div>

    <div class="section-featured section">
      <div class="grid">
        <h2 class="heading-alt c-brand" data-atomic="ta-c">Produtos em destaque</h2>
        <div class="carousel">
          <?php $produtosDestaques = get_field('produtos_destaques', 'option');

          if ($produtosDestaques) :
            foreach ($produtosDestaques as $produtos) : ?>
            <article class="featured featured-home bc-white" data-atomic="m-x-m p-m" data-grid="s-2 m-4 l-6">
              <a href="<?= get_permalink( $produtos->ID ); ?>">
                <div class="media">
                  <div class="media--ratio"></div>
                  <div class="media--content" data-atomic="o-h">
                    <div class="featured-align-img" data-atomic="o-h p-r">
                      <div data-atomic="d-t w-100 h-100">
                        <div data-atomic="d-tc ta-c va-m">
                          <?php $thumb = get_post_thumbnail_id($produtos->ID);
                          $img_url = wp_get_attachment_url( $thumb,'full' );
                          $image = oll_image( $img_url, ['w' => '150', 'h' => '150', 'zc' => '1']); ?>
                          <img src="<?php echo $image ?>" class="featured--img">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </article>
          <?php endforeach; endif; wp_reset_query(); ?>
        </div>
      </div>
    </div>

    <div class="section-info section" role="navigation">
      <div class="grid">
        <div class="gutter-l">
          <div data-grid="s-1 m-2 l-2">
            <header class="bc-brand c-white" data-atomic="ta-c p-m mb-l">
              <h2 class="heading-alt2">Novidades</h2>
            </header>
            <?php query_posts("showposts=3"); ?>

            <?php if (have_posts()) : ?>
              <?php while (have_posts()) : the_post(); ?>
                <article class="news news-home bc-white">
                  <a href="<?php the_permalink(); ?>">
                    <div class="gutter-l grid-inline grid-va-m">
                      <div data-grid="s-3 m-3 l-3">
                        <div class="media">
                          <div class="media--ratio"></div>
                          <div class="media--content" data-atomic="o-h">
                            <?php $thumb = get_post_thumbnail_id();
                            $img_url = wp_get_attachment_url( $thumb,'full' );
                            $image = oll_image( $img_url, ['w' => '256', 'h' => '256', 'zc' => '1']); ?>
                            <img src="<?php echo $image ?>" alt="<?php the_title(); ?>" class="featured--img">
                          </div>
                        </div>
                      </div>
                      <div data-grid="s-3x3 m-3x2 l-3x2">
                        <div class="news--content">
                          <h3 class="news--title c-brand text-bold link" data-atomic="mb-xs"><?php the_title(); ?></h3>
                          <div class="news--datetime" data-atomic="mb-m"><?php the_time('l, d - F - Y') ?></div>
                          <div class="news-description c-grey" data-atomic="lh-15">
                            <?php the_excerpt(); ?>
                          </div>
                        </div>
                      </div>
                    </div>

                  </a>
                </article>
                <hr>
              <?php endwhile; endif; ?>
            </div>

            <div data-grid="s-1 m-2 l-2">
              <header class="bc-black c-brand" data-atomic="ta-c p-m mb-l">
                <h2 class="heading-alt2">Social</h2>
              </header>

              <div class="social--video">
                <div class="media">
                  <div class="media--ratio ratio-16by9"></div>
                  <div class="media--content" id="ytplayer">
                    <?php the_field('video_youtube', 'options'); ?>
                  </div>
                </div>
              </div>

              <div class="social--facebook bc-black cf" data-atomic="mt-l">
                <div data-grid="s-1 m-2 l-2">

                  <div class="media">
                    <div class="media--ratio"></div>
                    <div class="media--content" id="fbPhoto">
                     
                      <?php echo do_shortcode('[recent_facebook_posts]'); ?>
                    </div>
                  </div>
                </div>

                <div data-grid="s-1 m-2 l-2">
                  <div class="facebook--content c-grey" data-atomic="p-l">
                    <h4 class="heading-alt2 c-brand"><a href="https://www.facebook.com/TecMarques1/?fref=ts">Facebook
                      <br>Tecmarques</a></h4>
                      <p>
                        Curta a nossa página no Facebook e fique por dentro de tudo o que acontece com a gente.
                      </p>

                      <div class="fb-like" data-action="like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-share="true" data-show-faces="false"></div>
                    </div>

                    <div id="fb-root"></div>
                    <script>
                    (function(d, s, id) {
                      var js,
                      fjs = d.getElementsByTagName(s)[0];
                      if (d.getElementById(id))
                      return;
                      js = d.createElement(s);
                      js.id = id;
                      js.src = "//connect.facebook.net/pt_PT/sdk.js#xfbml=1&version=v2.5";
                      fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));
                    </script>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>

      </main>
      <?php include '_footer.php'; ?>
