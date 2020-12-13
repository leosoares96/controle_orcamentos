<?php
include_once("views/includes/topnav.php");
include_once("views/includes/leftnav.php");

include_once("./controllers/client.controller.php");
$arr = returnData();
?>
<div id="conteudo">
  <h1>Meus Clientes</h1>
  <div class='row'>
    <div id='boxTable' class='col-md-12'>
    <table id='myTable'>
        <thead>
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>CPF</th>
            <th>CEP</th>
            <th>Logradouro</th>
            <th>Bairro</th>
            <th>Cidade</th>
            <th>UF</th>
            <th>Número</th>
          </tr>
        </thead>
        <tbody>
        <?php
          foreach ($arr as $value) {
            echo '
              <tr>
                <td>'.$value['name'].'</td>
                <td>'.$value['email'].'</td>
                <td>'.$value['cpf'].'</td>
                <td>'.$value['cep'].'</td>
                <td>'.$value['logradouro'].'</td>
                <td>'.$value['bairro'].'</td>
                <td>'.$value['cidade'].'</td>
                <td>'.$value['uf'].'</td>
                <td>'.$value['numero'].'</td>
              </tr>
            ';
          }
        ?>
        </tbody>
      </table>

    </div>
  </div>
</div>

<?php
include_once("views/includes/footer.php");
?>
<script src="views/assets/js/listClient.js"></script>

</body>

</html>