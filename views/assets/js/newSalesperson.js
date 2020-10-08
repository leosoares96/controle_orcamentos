$(document).ready(function() {
  // evento do clique do botao de cadastrar
  $('#cadastrarButton').click(() => {
    const nome = $('#nomeInput').val();
    const email = $('#emailInput').val();
    // validação dos campos
    nome === '' || email === ''
      ? alert('Preencha todos os campos')
      : insertData(nome, email);
  });
});

// function que insere o dado
const insertData = (nome, email) => {
  $.ajax({
    type: 'POST',
    url: './controllers/salespersonController.php',
    data: { nome, email },
    dataType: 'json',
    async: true,
    success: function(data) {a
      /*
      $('#nomeInput').val('');
      $('#emailInput').val('');
      console.log(data);
    */
    }
  });
};
