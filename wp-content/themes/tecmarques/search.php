<?php include '_header.php'; ?>

<main id="content" class="content" itemscope itemprop="mainContentOfPage">
	<div class="page-header page-header-servicos">
		<div class="grid section">
			<h1 class="c-brand heading"><strong>Pesquisa | </strong><small class="c-white text-light">Resultados de pesquisa</small></h1>
		</div>
	</div>
	<div class="page-content page-content-institucional">
		<div class="grid section">
			<ul class="page-content--block" data-grid="s-1 m-3x2 l-3x2">
				<?php if (have_posts()): while (have_posts()) : the_post();?>

					<li class="box box-login">
						<a href="<?php the_permalink(); ?>" class="page-content--block">
							<h3 class="page-content--title"><?php the_title(); ?></h3>
							<div class="article">
								<?php the_excerpt(); ?>
							</div>
						</a>
					</li>
				<?php endwhile; else:?>
				<?php endif;?>
			</ul>
		</div>
	</div>
</main>

<?php include '_footer.php'; ?>
