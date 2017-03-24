<?php
/*
 Template Name: Meio Ambiente
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
        <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 
        if($url) : ?>
        <img alt="asdf" class="featured--img" src="<?php bloginfo('template_directory'); ?>/assets/tim.php?src=<?= $url; ?>&w=1200&h=410&zc=1">
        <?php endif; ?>
    </div>
</div>

<div class="page-content page-content-institucional">
    <div class="grid section">
        <div class="page-content--block">
            <h1 class="page-content--title c-brand heading"><strong><?php the_title(); ?></strong></h1>
            <div class="page-content--text article c-grey">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</div>
<?php endwhile; else:?>
<?php endif;?>
</main>
<?php include '_footer.php'; ?>
