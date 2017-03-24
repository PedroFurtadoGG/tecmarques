<div class="form-container">
    <form id="contactForm" name="" action="" method="" class="form form-contato label-hidden">
        <div class="input-group">
            <label for="nome">Nome: </label>
            <input class="input input-text" id="nome" name="nome" type="text" placeholder="Nome">
        </div>

        <div class="input-group">
            <label for="telefone">Telefone: </label>
            <input class="input input-tel" id="telefone" name="telefone" type="tel" placeholder="Telefone">
        </div>

        <div class="input-group">
            <label for="email">E-mail: </label>
            <input class="input input-email" id="email" name="email" type="email" placeholder="E-mail">
        </div>

        <div class="cf gutter-m c-b">
            <div data-grid="s-1 m-4x3 l-4x3">
                <label for="mensagem">Mensagem: </label>
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
