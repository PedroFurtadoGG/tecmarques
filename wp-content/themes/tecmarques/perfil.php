<?php
/*
 Template Name: Perfil
*/ include '_header.php'; 
global $current_user;
get_currentuserinfo();
 ?>

<?php if (have_posts()): while (have_posts()) : the_post();?>
<main id="content" class="content" itemscope itemprop="mainContentOfPage">
  <div class="page-header page-header-produtos">
    <div class="grid section">
      <h1 class="c-brand heading"><strong>Acesso Restrito |</strong>
        <small class="c-white"><?php the_title(); ?></small>
      </h1>
    </div>
  </div>

  <div class="page-content page-content-produtos">
    <div class="grid">
      <div class="gutter-l">
        <div class="page-content--block" data-grid="s-1 m-3 l-3">
          <aside class="aside-menu menu-caterory" data-atomic="p-y-xl">
            <ul class="list c-brand" role="menu">
                <li role="menuitem">
                  <?php echo $current_user->user_firstname . ' ' . $current_user->user_lastname; ?>
                </li>
            </ul>
          </aside>
        </div>

        <div class="page-content--block bc-white" data-grid="s-1 m-3x2 l-3x2">
            
            <?php if ( is_user_logged_in() ) : ?>

              <?php if( have_rows('arquivos_de_usuario') ): ?>
                <ul class="download-list grid-inline gutter-l section" data-atomic="pl-l">
                 
                        <?php while( have_rows('arquivos_de_usuario') ): the_row(); 
                            $arquivo = get_sub_field('arquivo'); 
                            $usuarios = get_sub_field('usuario'); 
                            $user_ID = get_current_user_id();
                        ?>
                        <?php if ($user_ID == $usuarios['ID']) : ?>
                          <li class="download-list--item" data-grid="s-2 m-2 l-2" data-atomic="mb-m">
                            <a class="btn btn-block btn-medium btn-black" href="<?php echo $arquivo; ?>" tabindex="-1" data-atomic="ta-l">
                              <span class="bc-brand" data-atomic="f-r p-x-m"><i class="fa fa-download c-white" data-atomic="fs-xl" role="img"></i></span><h4 class="truncate text-light" data-atomic="o-h p-x-m"><?php the_sub_field('titulo_do_arquivo'); ?></h4>
                            </a>
                          </li>
                        <?php endif; ?>

                    <?php endwhile; ?>
                </ul>
              <?php endif; ?>

            <?php else : ?>
                <h3>Você Precisa Estar Logado para Acessar Essa página!!</h3>
            <?php endif; ?>

        </div>
      </div>
    </div>
  </div>

<?php endwhile; endif;?>
</main>
<?php include '_footer.php'; ?>
