<?php
include_once("views/includes/topnav.php");
include_once("views/includes/leftnav.php");

include_once("./controllers/client.controller.php");

if(isset($_POST['submit'])){
  insertData(
    $_POST['nameInput'],
    $_POST['emailInput'],
    $_POST['cpfInput'],
    $_POST['cepInput'],
    $_POST['logradouroInput'],
    $_POST['bairroInput'],
    $_POST['cidadeInput'],
    $_POST['ufInput'],
    $_POST['numeroInput']
  );
}
?>

<div id="conteudo">
  <h1>Cadastrar Cliente</h1>
  <form action="" method="POST">
  <div class="col-md-6 col-sm-12">
    <div class="form-group">
      <label for="nomeInput">Nome:</label>
      <input type="text" class="form-control" name="nameInput" placeholder="Digite o nome do cliente" required>
    </div>
    <div class="form-group">
      <label for="emailInput">E-mail:</label>
      <input type="email" class="form-control" name="emailInput" placeholder="Digite o E-mail do cliente" required>
    </div>
    <div class="form-group">
      <label for="cpfInput">CPF:</label>
      <input type="text" class="form-control" name="cpfInput" placeholder="Digite o CPF do cliente" required>
    </div>

    <div class="form-group">
      <label for="cepInput">CEP:</label>
      <input type="text" class="form-control" name="cepInput" id="cepInput" placeholder="Digite o CEP do cliente" maxlength='9' required>
    </div>
  </div>

  <div class="col-md-6 col-sm-12">
    <div class="form-group">
      <label for="logradouroInput">Logradouro:</label>
      <input type="text" class="form-control" name="logradouroInput" id="logradouroInput" required>
    </div>
    <div class="form-group">
      <label for="bairroInput">Bairro:</label>
      <input type="text" class="form-control" name="bairroInput" id="bairroInput" required>
    </div>
    <div class="row">
      <div class="form-group col-md-6">
        <label for="cidadeInput">Cidade:</label>
        <input type="text" class="form-control" name="cidadeInput" id="cidadeInput" required>
      </div>
      <div class="form-group col-md-3">
        <label for="ufInput">UF:</label>
        <input type="text" class="form-control" name="ufInput" id="ufInput" required>
      </div>
      <div class="form-group col-md-3">
        <label for="numeroInput">Número:</label>
        <input type="number" class="form-control" name="numeroInput" required>
      </div>
    </div>
      <button type='submit' name='submit' class="btn btn-primary right">Cadastrar</button>
  </div>

  </form>


</div>

<?php
include_once("views/includes/footer.php");
?>
<script src="views/assets/js/newClient.js"></script>

</body>

</html>