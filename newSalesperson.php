<?php
include_once("./views/includes/topnav.php");
include_once("./views/includes/leftnav.php");
?>
<div id="conteudo">
  <h1>Cadastrar Vendedor</h1>

  <div class="col-md-6 col-sm-12">
    <div class="form-group">
      <label for="nomeInput">Nome:</label>
      <input type="text" class="form-control" id="nomeInput" placeholder="Digite o nome do cliente" required>
    </div>
    <div class="form-group">
      <label for="emailInput">E-mail:</label>
      <input type="email" class="form-control" id="emailInput" placeholder="Digite o E-mail do cliente" required>
    </div>
    <button id='cadastrarButton' class="btn btn-primary right">Cadastrar</button>
  </div>

</div>

<?php
include_once("views/includes/footer.php");
?>
<script src="views/assets/js/newSalesperson.js"></script>

</body>

</html>