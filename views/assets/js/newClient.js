$(document).ready(function() {
  $('#cepInput').keyup(function() {
    let cep = $('#cepInput').val();
    cep = cep.replace('-', '');
    cep.length === 8 && getEndereco(cep);
  });
});

function getEndereco(cep) {
  const link = `https://viacep.com.br/ws/${cep}/json`;
  $.ajax({
    url: link,
    type: 'GET',
    dataType: 'json'
  })
    .done(function(data) {
      console.log('success');
      const { logradouro, bairro, localidade, uf } = data;

      $('#logradouroInput').val(logradouro);
      $('#bairroInput').val(bairro);
      $('#cidadeInput').val(localidade);
      $('#ufInput').val(uf);
    })
    .fail(function() {
      console.log('error');
    })
    .always(function() {
      console.log('complete');
    });
}
