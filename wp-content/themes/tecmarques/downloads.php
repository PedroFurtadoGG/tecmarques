<?php
/* Template Name: Downloads*/

include '_header.php';
?>

<main id="content" class="content" itemscope itemprop="mainContentOfPage">
  <div class="page-header page-header-produtos">
    <div class="grid section">
      <h1 class="c-brand heading"><strong>Acesso Restrito |</strong>
        <small class="c-white">Downloads</small>
      </h1>
    </div>
  </div>

  <div class="page-content page-content-produtos">
    <div class="grid">
      <div class="gutter-l">
        <div class="page-content--block" data-grid="s-1 m-4 l-4">
          <aside class="aside-menu menu-caterory section">
            <ul class="list c-brand list-padding" role="menu">
              <?php for($i=0; $i<13; $i++) { ?>
                <li role="menuitem">
                  <a class="link" href="#">Arquivo Lorem Ipsum</a>
                </li>
              <?php } ?>
            </ul>
          </aside>
        </div>

        <div class="page-content--block bc-white" data-grid="s-1 m-4x3 l-4x3">
          <ul class="download-list grid-inline gutter-l section" data-atomic="pl-l">
            <?php for($i=0; $i<13; $i++) { ?>
              <li class="download-list--item" data-grid="s-2 m-2 l-2" data-atomic="mb-l">
                <a class="btn btn-block btn-medium btn-black cf" href="#!" tabindex="-1" data-atomic="ta-l">
                  <span class="bc-brand img-holder -ml" data-atomic="f-r"><i class="fa fa-download c-white" role="img"></i></span>
                  <span class="truncate text-light" data-atomic="o-h p-x-m">Arquivo Lorem Ipsum</span>
                </a>
              </li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</main>

<?php include '_footer.php'; ?>
