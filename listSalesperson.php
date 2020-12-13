<?php
  include_once("views/includes/topnav.php");
  include_once("views/includes/leftnav.php");

  include_once("./controllers/salesperson.controller.php");
  $arr = returnData();
?>
<div id="conteudo">
  <h1>Meus Vendedores</h1>
  <div class='row'>
    <div id='boxTable' class='col-md-12'>
      <table id='myTable'>
        <thead>
          <tr>
            <th>Name</th>
            <th>Email</th>
          </tr>
        </thead>
        <tbody>
        <?php
          foreach ($arr as $value) {
            echo '
              <tr>
                <td>'.$value['name'].'</td>
                <td>'.$value['email'].'</td>
              </tr>
            ';
          }
        ?>
          <tr>
            <td>name</td>
            <td>email</td>
          </tr>
        </tbody>
      </table>

    </div>
  </div>
</div>

<?php
include_once("views/includes/footer.php");
?>
<script src="views/assets/js/listSalesperson.js"></script>

</body>

</html>