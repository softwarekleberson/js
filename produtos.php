<?php

$con = mysqli_connect("localhost","root","");
mysqli_select_db($con, "eletro");

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos - Full Stack</title>
    <link rel="stylesheet" href="./css/estilo.css">
    <script src="js/funcoes.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <meta name="viewport" content = "width=device-width, initial-scale=1">

</head>

<body>

    <?php

        include('menufim.html');

    ?>


    <div class="container"> 
        <section class="categoria">
            <h3>Categoria</h3>

            <ul>
                
                <li onclick="exibir_todos()">Todos (16)</li> 
                <li onclick="exibir_categoria('geladeira')">Geladeira (3)</li>
                <li onclick="exibir_categoria('fogao')">Fogões (3)</li>
                <li onclick="exibir_categoria('microondas')">Microondas (5)</li>
                <li onclick="exibir_categoria('lavaroupas')">Lava - roupas (3)</li>
                <li onclick="exibir_categoria('lava')">Lava - louças (3)</li>

            </ul>
        </section>
    </div>  

    <?php

        $sql = "select * from produtos";
        $result = $con -> query($sql);
        
        if($result -> num_rows > 0){
            while($rows = $result -> fetch_assoc()){
    ?>
        
            <div class = "box_produto" id = "<?php echo $rows ["categoria"]; ?>" style="display: inline-block;">
                <img class="img-responsive" src="<?php echo $rows["imagem"]; ?>" width = "120px" onclick="exibir_detalhes_produtos(this)">
                <div class="descricao"><?php echo $rows["descricao"]; ?></div>
                <br>
                <div class="descricao"><strike>R$ <?php echo $rows["preco"]; ?></strike></div>
                <div class="preco">R$ <?php echo $rows["venda"]; ?></div>
            </div>
        
    

        <?php

            } 
        }
            else {
                echo "nenhum produto cadastrado";
            }

        ?>

        <br>
        <br>
        <br>
        <br>
        <br>

    <?php
            include('fotter.html');
    ?>

</body>
</html>