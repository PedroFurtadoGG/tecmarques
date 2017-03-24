<?php include '_header.php'; ?>

<main id="content" class="content" itemscope itemprop="mainContentOfPage">
	<div class="page-content page-content-institucional">
	    <div class="grid section">
			<?php if (have_posts()): while (have_posts()) : the_post();?>

			    <a href="<?php the_permalink(); ?>" class="page-content--block" data-atomic="pb-xl mb-xxl">
			        <h3 class="page-content--title"><?php the_title(); ?></h3><br>
			        <?php the_content(); ?>
			    </a>
				<hr>

			<?php endwhile; else:?>
			<?php endif;?>
	    </div>
	</div>
</main>

<?php include '_footer.php'; ?>