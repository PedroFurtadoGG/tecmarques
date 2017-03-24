<?php include '_header.php'; ?>
<main id="content" class="content" itemscope itemprop="mainContentOfPage">

  <div class="page-header page-header-produtos">
    <div class="grid section">
      <h1 class="c-brand heading"><strong>Produtos |</strong>
        <small class="c-white"><?php the_title(); ?></small>
      </h1>
    </div>
  </div>

  <div class="page-content page-content-produtos">
    <div class="grid">
      <div class="gutter-l">
        <div class="page-content--block" data-grid="s-1 m-3 l-4">
          <aside class="aside-menu c-white" role="complementary">
            <header class="aside-nav-header cf btn-toggle-menu" data-href="#asideNav" role="button">
              <h3 class="aside-nav-header--title">Menu <span class="fa fa-bars c-white" role="img"></h3>
            </header>

            <nav class="aside-nav section" id="asideNav" role="navigation">
              <ul class="list c-brand list-padding" role="menu">
                <?php $categorias = get_terms(['produtos-categoria-produtos']);
                if ($categorias) : foreach ($categorias as $categoria) : ?>
                <li role="menuitem">
                  <a class="link" href="<?= bloginfo('url'); ?>?produtos-categoria-produtos=<?= $categoria->slug; ?>"><?= $categoria->name; ?></a>
                </li>
              <?php endforeach; endif; ?>
            </ul>
            </nav>
          </aside>
      </div>

      <div class="page-content--block" data-grid="s-1 m-3x2 l-4x3">
        <ul class="product-list grid-inline gutter-l" data-atomic="pl-l">
          <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
          <?php query_posts("post_type=produtos&showposts=10&paged=$paged"); ?>

          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <li class="product" itemscope="" itemtype="http://schema.org/Product" data-grid="s-1 m-2 l-3" data-atomic="m-y-l">
                <a class="product--link" href="<?php the_permalink(); ?>" tabindex="-1">
                  <div class="media">
                    <div class="media--ratio"></div>
                    <div class="media--content featured" data-atomic="o-h p-m">
                      <div class="featured-align-img" data-atomic="o-h p-r">
                        <div data-atomic="d-t w-100 h-100">
                          <div data-atomic="d-tc ta-c va-m">
                            <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                            <img alt="<?php the_title(); ?>" class="featured--img" src="<?php bloginfo('template_directory'); ?>/assets/tim.php?src=<?= $url; ?>&w=130&h=93&zc=2">
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
            <?php endwhile; endif; ?>
          </ul>
        </div>
      </div>
    </div>
  </div>

</main>
<?php include '_footer.php'; ?>
