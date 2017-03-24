<?php
/*
 Template Name: A Empresa
*/ include '_header.php'; ?>
<main id="content" class="content" itemscope itemprop="mainContentOfPage">

<?php if (have_posts()): while (have_posts()) : the_post();?>
<div class="page-header page-header-institucional">
    <div class="grid section">
        <span class="c-brand heading"><?php the_title(); ?></span>
    </div>
</div>

<div class="page-hero page-hero-institucional">
    <div class="grid">
        <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
        <img alt="asdf" class="featured--img" src="<?php bloginfo('template_directory'); ?>/assets/tim.php?src=<?= $url; ?>&w=1200&h=410&zc=1">
    </div>
</div>

<div class="page-content page-content-institucional">
    <div class="grid section">
        <div class="page-content--block" data-atomic="pb-xl mb-xxl">
            <h1 class="page-content--title c-brand heading"><strong><?php the_title(); ?></strong></h1>
            <div class="page-content--text article c-grey">
                <?php the_content(); ?>
            </div>
        </div>

        <div class="gutter-l">
            <div class="page-content--block" data-grid="s-1 m-3 l-3">
                <h2 class="page-content--title heading-alt c-brand">Objetivos</h2>
                <div class="page-content--text article c-grey">
                    <p align="justify">
                        Atender nossos clientes com qualidade trazendo o melhor custo benefício do mercado. 
                    </p>
                </div>
            </div>

            <div class="page-content--block" data-grid="s-1 m-3 l-3">
                <h2 class="page-content--title heading-alt c-brand">Missão</h2>
                <div class="page-content--text article c-grey">
                    <p align="justify"><p >
                        Fabricar os melhores equipamentos e ferramentas que ofereçam qualidade e segurança a seus usuários.
                    </p>
                </div>
            </div>

            <div class="page-content--block" data-grid="s-1 m-3 l-3">
                <h2 class="page-content--title heading-alt c-brand">Visão</h2>
                <div class="page-content--text article c-grey">
                    <p align="justify">
                       Ser referência no ramo da fabricação e manutenção de produtos e equipamentos para o setor elétrico.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endwhile; else:?>
<?php endif;?>
</main>
<?php include '_footer.php'; ?>
