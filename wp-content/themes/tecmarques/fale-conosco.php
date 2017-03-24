<?php
/*
Template Name: Fale Conosco
*/ include '_header.php'; ?>
<main id="content" class="content" itemscope itemprop="mainContentOfPage">

  <div class="page-header page-header-servicos">
    <div class="grid section">
      <h1 class="c-brand heading"><strong>Contato |</strong>
        <small class="c-white">Fale Conosco</small>
      </h1>
    </div>
  </div>

  <div class="page-content page-content-institucional">
    <div class="grid section">
      <div class="gutter-l grid-inline grid-va-t">
        <div data-grid="s-1 m-2 l-2">
          <table class="c-grey" data-atomic="w-100" style="table-layout:auto;">
            <tr>
              <td><i class="fa fa-2x fa-phone img-holder c-brand"></i></td>
              <td>
                <span data-atomic="d-b" itemprop="telephone">(62) 3516 1129 ou (62) 3516 3472</span>
                <span data-atomic="d-b" itemprop="times">Seg. à Sex. em horário comercial</span>
              </td>
            </tr>

            <tr>
              <td><i class="fa fa-2x fa-envelope-o img-holder c-brand" data-atomic="m-y-m"></i></td>
              <td>
                <span class="truncate" itemprop="email">vendas@tecmarques.com.br – Região Norte e Sudeste<br>vendas02@tecmarques.com.br – Região Centro-oeste<br> vendas03@tecmarques.com.br – Região Sul<br> vendas04@tecmarques.com.br – Região Nordeste.</span>
              </td>
            </tr>

            <tr>
              <td><i class="fa fa-2x fa-map-marker img-holder c-brand"></i></td>
              <td>
                <address data-atomic="d-b" itemprop="address"> 
                  <span data-atomic="d-b"> Rua 21 Quadra 48 Lote 16 -</span>
                  <span data-atomic="d-b">Setor Linda Vista - Goianira - GO - CEP 75370-000.</span>
                </address>
              </td>
            </tr>
          </table>

          <div class="form-container cf" data-atomic="c-b mt-l">
           			<div class="form-container">				<form name="" action="http://tecmarques.com.br/site/send/send-contact.php" method="post" class="form form-contato label-hidden">										<div class="input-group">						<label for="nome">Nome: </label>						<input class="input input-text" id="nome" name="nome" type="text" placeholder="Nome">					</div>					<div class="input-group">						<label for="telefone">Telefone: </label>						<input class="input input-tel" id="telefone" name="telefone" type="tel" placeholder="Telefone">					</div>					<div class="input-group">						<label for="email">E-mail: </label>						<input class="input input-email" id="email" name="email" type="email" placeholder="E-mail">					</div>					<div class="cf gutter-m c-b">						<div data-grid="s-1 m-4x3 l-4x3">							<label for="mensagem">Mensagem: </label>							<textarea class="input input-textarea" id="mensagem" name="mensagem" placeholder="Mensagem"></textarea>						</div>						<div data-grid="s-1 m-4 l-4">							<button id="btnSubmit" class="btn btn-large btn-block btn-primary" type="submit">Enviar</button>						</div>					</div>					<div id="errorMessage" class="form-alert alert alert-danger" hidden="hidden">Oops! Por favor, preencha todos os campos.</div>					<h3 id="successMessage" class="form-alert alert alert-success" hidden="hidden">Obrigado pelo seu contato.</h3>				</form>			</div>						
          </div>
        </div>

        <div data-grid="s-1 m-2 l-2">
          <div class="media">
            <div class="media--ratio ratio-4by3"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3825.513546020229!2d-49.44083788513567!3d-16.500151588615957!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935e635b4260caaf%3A0x54ca32b5ae1ec2a!2sTECMARQUES!5e0!3m2!1spt-BR!2sbr!4v1471025625238" width="600" height="689" frameborder="0" style="border:0" allowfullscreen></iframe></div>
            <!--<div class="media--content fade-in delay-l" id="contactMap" data-lat="-16.6813938" data-lng="-49.256359">
              <script src="https://maps.googleapis.com/maps/api/js"></script>
              <script type="text/javascript">
              var map = document.getElementById('contactMap');

              initializeContactMap(map);

              function initializeContactMap(el) {
                var lat = el.getAttribute('data-lat'),
                lng = el.getAttribute('data-lng');

                var mapOptions = {
                  center: new google.maps.LatLng(lat, lng),
                  zoom: 15,
                  scrollwheel: false,
                  navigationControl: false,
                  mapTypeControl: false,
                  scaleControl: false,
                  draggable: true,
                  mapTypeId: google.maps.MapTypeId.ROADMAP
                }

                var map = new google.maps.Map(el, mapOptions)
              }
              </script>
            </div>-->

          </div>
        </div>
      </div>
    </div>
  </div>

</main>
<?php include '_footer.php'; ?>
