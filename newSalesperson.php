<?php
include_once("./views/includes/topnav.php");
include_once("./views/includes/leftnav.php");

include_once("./controllers/salesperson.controller.php");

if(isset($_POST['submit'])){
  insertData($_POST['nameInput'], $_POST['emailInput']) ;
}
?>

<div id="conteudo">
  <h1>Cadastrar Vendedor</h1>
  <form action="" method="POST">
    <div class="col-md-6 col-sm-12">
      <div class="form-group">
        <label for="nameInput">Nome:</label>
        <input type="text" class="form-control" name="nameInput" placeholder="Digite o nome do cliente" required>
      </div>
      <div class="form-group">
        <label for="emailInput">E-mail:</label>
        <input type="email" class="form-control" name="emailInput" placeholder="Digite o E-mail do cliente" required>
      </div>
      <button type='submit' name='submit' class="btn btn-primary right">Cadastrar</button>
    </div>
  </form>

</div>

<?php
include_once("views/includes/footer.php");
?>

</body>
</html>