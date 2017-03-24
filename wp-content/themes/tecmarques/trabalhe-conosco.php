<?php
/*
 Template Name: Trabalhe Conosco
*/ include '_header.php'; ?>
<main id="content" class="content" itemscope itemprop="mainContentOfPage">

<div class="page-header page-header-servicos">
    <div class="grid section">
        <h1 class="c-brand heading"><strong>Contato |</strong>
            <small class="c-white">Trabalhe Conosco</small>
        </h1>
    </div>
</div>

<div class="page-content page-content-institucional">
    <div class="grid section">
        <div class="gutter-l grid-inline grid-va-t">
            <div data-grid="s-1 m-2 l-2">
                <div class="article c-brand">
                    <p>
                        A TecMarques está em constante crescimento e aprimoramento de suas atividades, por isso, buscamos pessoas comprometidas com os resultados do Grupo e sobre tudo, com o seu próprio crescimento.
                    </p>
                    <p>
                        Buscamos talentos de alto desempenho para diversar vagas, junte-se a nós.
                    </p>
                </div>
            </div>

            <div data-grid="s-1 m-2 l-2">
                <div class="form-container cf">
                    <?php include 'form.trabalhe-conosco.php'; ?>
<?php //echo do_shortcode('[contact-form-7 id="536" title="Trabalhe conosco"]'); ?>
                </div>
            </div>
        </div>
    </div>
</div>

</main>
<?php include '_footer.php'; ?>
