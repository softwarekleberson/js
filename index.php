<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full Stack Eletro</title>
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
    

    <br>


    <div class="container">
        <h2 class="text-primary">Ofertas do dia</h2>
        <h4 class="text-success">Tempo Limitado</h4>
    </div>

    <div class="container">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                
                <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                
                    <div class="carousel-inner">
                    <div class="item active">
                        <img src="./imagens/carro3.jpg" alt="Full Stack Eletro">
                    </div>
                
                    <div class="item">
                        <img src="./imagens/carro1.jpg" alt="maquina de lavar">
                    </div>
                
                    <div class="item">
                        <img src="./imagens/carro2.jpg" alt="">
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
    <br>

    <div class="container">

        <h4 class="text-primary">Os mais visitados</h4>
        <h4 class="text-primary">Confira a popularidade</h4>

    </div>

    <div class="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            
            <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            
                <div class="carousel-inner">
                <div class="item active">
                    <img src="./imagens/1_substituto_microondas.jpg" alt="lava lousa">
                </div>
            
                <div class="item">
                    <img src="./imagens/lava_louca__3_substituto.jpg" alt="fogao">
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
    <br>

    <div class="container">
        <h4> Seja bem vindo(a)! </h4>
        <h4 class="text-warning" id="primeiro">Aqui em nossa loja,<strong><em>programadores possuem desconto</em> nós 
            produtos para casa</strong></h4>
    </div>
    
    <br>
    <br> 

    <?php
        include('fotter.html');
    ?>

</body>
</html>