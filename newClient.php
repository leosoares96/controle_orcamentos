<?php
include_once("views/includes/topnav.php");
include_once("views/includes/leftnav.php");
?>
<div id="conteudo">
  <h1>Cadastrar Cliente</h1>
  <div class="col-md-6 col-sm-12">
    <form>
      <div class="form-group">
        <label for="nomeInput">Nome:</label>
        <input type="text" class="form-control" id="nomeInput" placeholder="Digite o nome do cliente" required>
      </div>
      <div class="form-group">
        <label for="emailInput">E-mail:</label>
        <input type="email" class="form-control" id="emailInput" placeholder="Digite o E-mail do cliente" required>
      </div>
      <div class="form-group">
        <label for="cpfInput">CPF:</label>
        <input type="text" class="form-control" id="cpfInput" placeholder="Digite o CPF do cliente" required>
      </div>

      <div class="form-group">
        <label for="cepInput">CEP:</label>
        <input type="text" class="form-control" id="cepInput" placeholder="Digite o CEP do cliente" maxlength='9' required>
      </div>
  </div>

  <div class="col-md-6 col-sm-12">
    <div class="form-group">
      <label for="logradouroInput">Logradouro:</label>
      <input type="text" class="form-control" id="logradouroInput" disabled>
    </div>
    <div class="form-group">
      <label for="bairroInput">Bairro:</label>
      <input type="text" class="form-control" id="bairroInput" disabled>
    </div>
    <div class="row">
      <div class="form-group col-md-6">
        <label for="cidadeInput">Cidade:</label>
        <input type="text" class="form-control" id="cidadeInput" disabled>
      </div>
      <div class="form-group col-md-3">
        <label for="ufInput">UF:</label>
        <input type="text" class="form-control" id="ufInput" disabled>
      </div>
      <div class="form-group col-md-3">
        <label for="numeroInput">Número:</label>
        <input type="number" class="form-control" id="numeroInput" required>
      </div>
    </div>
    <button id='cadastrarButton' class="btn btn-primary right">Cadastrar</button>
    </form>
  </div>



</div>

<?php
include_once("views/includes/footer.php");
?>
<script src="views/assets/js/newClient.js"></script>

</body>

</html>