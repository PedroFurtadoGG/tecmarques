<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>


    <!-- menu do post type -->
    <div class="page-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="list-unstyled">
                    <?php $args = array(
                        'sort_column'		=> 'menu_order',
                        'sort_order'		=> 'asc',
                        'child_of'     		=> 0,
                        'style'             => 'list',
                        'title_li'          => '',
                        'post_type'          => 'institucional',
                    ); ?>
                    <?php wp_list_pages( $args ); ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <?php iex_page_menu(); ?>

    <!-- título da página -->
    <div  id="inicio" class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2><?php the_title(); ?></h2>
                </div>
            </div>

        </div>
    </div>

    <!-- conteúdo padrão da página -->
    <div class="page-content">
        <div class="container">
            <?php iex_post(); ?>
        </div>
    </div>

    <div class="page-content">
        <!-- conteúdo flexível do post -->
        <?php iex_page(); ?>
    </div>



<?php endwhile; ?>
<?php get_footer(); ?>