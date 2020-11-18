<?php

$con = mysqli_connect("localhost","root","");
mysqli_select_db($con, "eletro");

if(isset($_POST['nome']) && isset($_POST['msg'])){
    $nome = $_POST['nome'];
    $msg = $_POST['msg'];

    $sql = "insert into comentarios (nome, msg) values ('$nome', '$msg')";
    $result = $con ->query($sql);
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - Full Stack Eletro</title>
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


    <!--carrosseu animado-->
    <div class="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            
            <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            
                <div class="carousel-inner">
                <div class="item active">
                    <img src="./imagens/fimfim.png" alt="Email">
                </div>
            
                <div class="item">
                    <img src="./imagens/fimfim.png" alt="watsap">
                </div>
            
    </div>
            
        
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <br>
   
    <div class= "container">
        <h3 class = "text-info">Onde nós encontrar</h3>
    </div>


    <?php

        $sql = "select * from comentarios";
        $result = $con -> query($sql);
        
        if($result -> num_rows > 0){
            while($rows = $result -> fetch_assoc()){
                echo "Data: ", $rows['data'], "<br>";
                echo "Nome: ", $rows['nome'], "<br>";
                echo "Mensagem: ", $rows['msg'], "<br>";
                echo "<br>";

            } 
        }
            else {
                echo "nenhum comentario feito";
            }


    ?>

    <br>
    <br>

    <div class="container">
        <div class="form-group">
            <form method = "post" action="">
                <h3 class=" text-info ">Deixe um comentario sobre a loja<h3>
                <br>
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome" style = "width:500px"><br>
                <label for="mensagem">Mensagem</label>
                <input type="text" class="form-control" name="msg" style="width:500px"><br>
                <input type="submit" class="btn btn-info btn-lg" name="submit" value="Enviar">
                <input type="reset" class="btn btn-danger btn-lg" name="reset" value="reset">

            </form>
        </div>
    </div>
    
    <br>
    <br>
    <br>

    <?php
        include('fotter.html');
    ?>
    
</body>
</html>