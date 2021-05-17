<?php include "../includes/nav.php" ?>

    <!-- CONTACT PAGE-->
    <div class="container">
        
        <div class="projeto">
            <h2 class="title">Preencha o formulário caso tenha alguma dúvida e/ou sugestão.</h2>
        </div>
    <form class="form-contato">
        <div class="form-group">
            <label for="nome">Nome completo:</label>
            <input required type="text" class="form-control" id="nome" placeholder="Nome completo">
          </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Email">
          </div>
          <div class="form-group col-md-6">
            <label for="celular">Celular</label>
            <input required type="text" class="form-control" id="celular" placeholder="Celular">
          </div>
        </div>
        <div class="form-group">
          <label for="assunto">Assunto</label>
          <input required type="text" class="form-control" id="assunto" placeholder="Assunto">
        </div>
        <div class="form-group">
            <label for="mensagem">Mensagem</label>
            <textarea required class="form-control" id="mensagem" rows="3"></textarea>
          </div>
        <div class="form-group">
        </div>
        <button type="submit" class="btn btn-primary mybutton">ENVIAR</button>
      </form>
    </div>
    <!-- CONTACT PAGE-->

    
    <?php include "../includes/rodape.php" ?>