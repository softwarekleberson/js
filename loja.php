<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nossas Lojas - Full Stack Eletro</title>
    <link rel="stylesheet" href="./css/estilo.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</head>
<body>
   
<?php
  include('menufim.html');

?>
    

    <div class="container">
        <h2>Nossas Lojas - Full Stack Eletro</h2>
    </div>

<br>
<br>
<br>

<div class="container">
    <h1>Nossas Unidades</h1>
    <h2>Aqui você encontra a nossa localidade e as nossas categorias.</h2>
</div>

    <br>
    <br>
    <br>

<div class="container">
    <table class="table">
      <thead>
        <tr>
          <th><h3>Cidade</h3></th>
          <th><h3>Localização<h3</th>
          <th><h3>Telefone<h3</th>
          <th><h3>Categoria</h3></th>
         
        </tr>
      </thead>
      <tbody>
        <tr class="warning">
          <td><h4>Rio de Janeiro</h4></td>
          <td><h4>Avenida Presidente Varagas, 5040</h4></td>
          <td><h4>(21)2345-3030</h4></td>
          <td><h4>Limpa Estoque</h4></td>
        </tr>      
        <tr class="success">
          <td><h4>São Paulo</h4> </td>
          <td><h4>Liberdade, 3040</h4></td>
          <td><h4>(31)3045-6030</h4></td>
          <td><h4>Nova Unidade</h4></td>
        </tr>
        <tr class="info">
          <td><h4>Belo Horizonte</h4></td>
          <td><h4>Lagoa da Pampulha, 3820</h4></td>
          <td><h4>(31)3045-6030</h4></td>
          <td><h4>A mais amada</h4></td>
        </tr>
      </tbody>
    </table>
  </div>
  
  <br>
  <br>
  <br>

  <?php
       include('fotter.html');
  ?>


</body>
</html>