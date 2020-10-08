$(document).ready(function() {
  addProduct();
});
const products = [];
const product = `
    <div class="row">
      <div class="form-group col-md-2">
        <label for="nomeProdutoInput">Nome do Produto:</label>
        <input type="text" class="form-control" name="nomeProdutoInput" required>
      </div>
      <div class="form-group col-md-2">
        <label for="valorProdutoInput">Valor da Unidade:</label>
        <input type="number" class="form-control" name="valorProdutoInput" required>
      </div>
      <div class="form-group col-md-2">
        <label for="quantidadeProdutoInput">Quantidade:</label>
        <input type="number" class="form-control" name="quantidadeProdutoInput" required>
      </div>
      <div class="form-group col-md-2">
        <label for="descontoProdutoInput">% de Desconto:</label>
        <input type="number" class="form-control" name="descontoProdutoInput" required>
      </div>
      <div class="form-group col-md-2">
        <label for="valorDescontoProdutoInput">Valor com Desconto:</label>
        <input type="number" class="form-control" name="valorDescontoProdutoInput" disabled>
      </div>
      <div class="form-group col-md-2">
        <label for="subtotalProdutoInput">Subtotal:</label>
        <input type="number" class="form-control" name="subtotalProdutoInput" disabled>
      </div>
    </div>`;

const addProduct = () => {
  products.push(product);

  renderProducts();
};

const renderProducts = () => {
  $('#produtos').html('');
  products.map(item => {
    const productsHtml = $('#produtos').html();
    $('#produtos').html(productsHtml + item);

    $('input[name=nomeProdutoInput]').keyup(function() {
      $('input[name=quantidadeProdutoInput]').val(55);
    });
  });
};
