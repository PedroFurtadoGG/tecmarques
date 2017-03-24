<div class="form-container">
    <form id="trabalheConoscoForm" name="" action="http://tecmarques.com.br/site/send/send-work.php" method="post" enctype="multipart/form-data" class="form form-trabalhe-conosco">
        <div class="input-group">
            <label class="invisible" for="nome">Nome: </label>
            <input class="input input-text" id="nome" name="nome" type="text" placeholder="Nome" />
        </div>

        <div class="input-group">
            <label class="invisible" for="telefone">Telefone: </label>
            <input class="input input-tel" id="telefone" name="telefone" type="tel" placeholder="Telefone" />
        </div>

        <div class="input-group">
            <label class="invisible" for="email">E-mail: </label>
            <input class="input input-email" id="email" name="email" type="email" placeholder="E-mail" />
        </div>

        <div class="input-group">
            <strong class="c-grey" data-atomic="mr-m">Currículo </strong>
            <label class="btn" for="curriculo">Escolher Arquivo </label>
            <input class="input input-file invisible" type="file" id="curriculo" name="arquivo[]" />
        </div>

        <div class="cf gutter-m c-b">
            <div data-grid="s-1 m-4x3 l-4x3">
                <label class="invisible" for="mensagem">Mensagem: </label>
                <textarea class="input input-textarea" id="mensagem" name="mensagem" placeholder="Mensagem"></textarea>
            </div>

            <div data-grid="s-1 m-4 l-4">
                <button id="btnSubmit" class="btn btn-large btn-block btn-primary" type="submit">Enviar</button>
            </div>
        </div>

        <div id="errorMessage" class="form-alert alert alert-danger" hidden="hidden">Oops! Por favor, preencha todos os campos.</div>
        <h3 id="successMessage" class="form-alert alert alert-success" hidden="hidden">Obrigado pelo seu contato.</h3>
    </form>
</div>
