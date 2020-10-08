<?php
include_once("views/includes/topnav.php");
include_once("views/includes/leftnav.php");
?>
<div id="conteudo">
  <h1>Novo Orçamento</h1>

  <form>
    <div class="col-md-12 col-sm-12">
      <div class="form-group">
        <label for="dataInput">Data do Orçamento:</label>
        <input type="date" class="form-control" id="dataInput" required>
      </div>
      <div class="form-group">
        <label for="vendedorInput">Selecione o Vendedor:</label>
        <select class="form-control" id="vendedorInput" required>
          <option value="0">0</option>
        </select>
      </div>
      <div class="form-group">
        <label for="clienteInput">Selecione o Cliente:</label>
        <select class="form-control" id="clienteInput" required>
          <option value="0">0</option>
        </select>
      </div>
      <label>Produtos:</label>
      <div id='produtos'>

      </div>
      <a href='#' onclick="addProduct()">+ Adicionar produto</a>
      <button id='cadastrarButton' class="btn btn-primary right">Cadastrar</button>
  </form>


</div>

<?php
include_once("views/includes/footer.php");
?>
<script src="views/assets/js/newBudget.js"></script>

</body>

</html>