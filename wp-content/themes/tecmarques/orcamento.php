<?php
/*
Template Name: Orçamento
*/


//PRODUCT
$args = ['post_type' => 'produtos'];
$products = new WP_Query($args);
wp_reset_query();
//LOCATION
$args = ['post_type' => 'locacoes'];
$locations = new WP_Query($args);


//print_r($products);exit;

include '_header.php'; ?>
<main id="content" class="content" itemscope itemprop="mainContentOfPage">

  <div class="page-header page-header-orcamento">
    <div class="grid section">
      <h1 class="c-brand heading"><strong>Contato |</strong>
        <small class="c-white">Solicite seu Orçamento</small>
      </h1>
    </div>
  </div>

  <div class="page-content page-content-orcamento">
    <div class="grid section">
      <div class="article">
        Escolha quais produtos deseja receber o orçamento, preencha o <br>formulário e aguarde que retornaremos o contato.
      </div>
    </div>

    <div class="grid section">
      <div class="gutter-l grid-inline grid-va-t">
        <div data-grid="s-1 m-2 l-1">
          <h2 class="c-brand">Quais Produtos Deseja <br>Receber Orçamento?</h2>
          
		  <div id="oll-content-to-gf">
			<table class="table table-product" width="100%">
			  <thead>
				<tr>
				  <td>Nome</td>
				  <td>Modelo</td>
				  <td>Quantidade</td>
				  <td>Tipo</td>
				  <td></td>
				</tr>
			  </thead>
			  <tbody>
			  </tbody>
			</table>
		  </div>
		  
        </div>
		<br /><br /><br /><br />
        <div data-grid="s-1 m-2 l-1">
          <div class="">
            <h3 class="c-brand">Seus Dados</h3>
            <div class="form-container cf">

				<div class="form-container">
					<form id="orcamentoForm" name="" action="<?php bloginfo('url'); ?>/send/send-cart.php" method="post" class="form form-orcamento label-hidden">
						<div class="input-group">
							<label for="nome">Nome: </label>
							<input class="input input-text" id="nome" name="nome" type="text" placeholder="Nome" required>
						</div>

						<div class="input-group">
							<label for="telefone">Telefone: </label>
							<input class="input input-tel" id="telefone" name="telefone" type="tel" placeholder="Telefone" required>
						</div>

						<div class="input-group">
							<label for="email">E-mail: </label>
							<input class="input input-email" id="email" name="email" type="email" placeholder="E-mail" required>
						</div>

						<div class="cf gutter-m c-b">
							<div class="input-group" data-grid="s-1 m-2 l-2">
								<label for="estado">Estado</label>
								<!-- <input class="input input-address" id="estado" name="estado" type="text" placeholder="Estado" /> -->
								<select class="input input-address" id="estado" name="estado" required>
									<option value="">Selecione o Estado</option> 
									<option value="ac">Acre</option> 
									<option value="al">Alagoas</option> 
									<option value="am">Amazonas</option> 
									<option value="ap">Amapá</option> 
									<option value="ba">Bahia</option> 
									<option value="ce">Ceará</option> 
									<option value="df">Distrito Federal</option> 
									<option value="es">Espírito Santo</option> 
									<option value="go">Goiás</option> 
									<option value="ma">Maranhão</option> 
									<option value="mt">Mato Grosso</option> 
									<option value="ms">Mato Grosso do Sul</option> 
									<option value="mg">Minas Gerais</option> 
									<option value="pa">Pará</option> 
									<option value="pb">Paraíba</option> 
									<option value="pr">Paraná</option> 
									<option value="pe">Pernambuco</option> 
									<option value="pi">Piauí</option> 
									<option value="rj">Rio de Janeiro</option> 
									<option value="rn">Rio Grande do Norte</option> 
									<option value="ro">Rondônia</option> 
									<option value="rs">Rio Grande do Sul</option> 
									<option value="rr">Roraima</option> 
									<option value="sc">Santa Catarina</option> 
									<option value="se">Sergipe</option> 
									<option value="sp">São Paulo</option> 
									<option value="to">Tocantins</option>
								</select>
							</div>

							<div class="input-group" data-grid="s-1 m-2 l-2">
								<label for="cidade">Cidade</label>
								<input class="input input-address" id="cidade" name="cidade" type="text" placeholder="Cidade" required />
							</div>

							<div data-grid="s-1 m-4x3 l-4x3">
								<label for="mensagem">Mensagem: </label>
								<textarea class="input input-textarea" id="mensagem" name="mensagem" placeholder="Mensagem"></textarea>
								<input type="hidden" id="produtos" name="produtos" />
							</div>

							<div data-grid="s-1 m-4 l-4">
								<button id="btnSubmit" class="btn btn-large btn-block btn-primary" type="submit">Enviar</button>
							</div>
						</div>

						<div id="errorMessage" class="form-alert alert alert-danger" hidden="hidden">Oops! Por favor, preencha todos os campos.</div>
						<h3 id="successMessage" class="form-alert alert alert-success" hidden="hidden">Obrigado pelo seu contato.</h3>
					</form>
				</div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/select2.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/select2.min.css">
<script src="<?php bloginfo('template_directory'); ?>/assets/js/oll.cart.js?v=oll4" type="text/javascript"></script>
<script>
$(document).ready(function () {
	$.ajax({
		url: '<?php bloginfo('url'); ?>/cart.php?action=list',
		success: function(response) {
			$('table tbody').html(response);
			$('#produtos').val(response);
		},
		error: function(response){
			alert('ERROR');
		}
		
	});
	
	/*
  ///////
  // PRODUCT
  //////
  $(".select-product").select2({
    language: "pt-br"
  }).on('change', function (e) {
    var attributes = $('option:selected', this).prop("attributes");

    $.each(attributes, function () {
      if (this.name != 'class') {
        $('.oll-add').attr(this.name, this.value);
      }
    });
  });
  ollcart('table.oll-products-table-list tbody', 'list', 'products');
  $('button.oll-add').on('click', function () {
    if ($('.select-product').val().length > 0) {
      ollcart('.oll-add', 'add', 'products');
      ollcart('table.oll-products-table-list tbody', 'list', 'products');
    }
  });


  ///////
  // LOCATION
  //////
  $(".select-location").select2({
    language: "pt-br"
  }).on('change', function (e) {
    var attributes = $('option:selected', this).prop("attributes");

    $.each(attributes, function () {
      if (this.name != 'class') {
        $('.oll-add-location').attr(this.name, this.value);
      }
    });
  });
  ollcart('table.oll-locations-table-list tbody', 'list', 'locations');
  $('button.oll-add-location').on('click', function () {
    if ($('.select-location').val().length > 0) {
      ollcart('.oll-add-location', 'add', 'locations');
      ollcart('table.oll-locations-table-list tbody', 'list', 'locations');
    }
  });
  */
});
</script>
<?php include '_footer.php'; ?>
