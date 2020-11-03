<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Produtos - Full Stack Eletro</title>
    <link rel="icon" href="./public/img/logotitle.svg">

    <link rel="stylesheet" href="./public/css/estilo.css">
    <link rel="stylesheet" href="./public/css/global.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>

    <!-- Menu -->
    <?php 
        include_once('menu.html');
    ?>
    
    <div class="container-fluid">
        <br> <br>

        <!-- Aba de categorias -->
        <aside class="categorias">
            <p class="paragrafoCateg"> Categorias </p>
            <br>
            <ul class="lista">
                <li onclick="exibirTodos()"> Todos (12) </li>
                <li onclick="exibir('geladeira')"> Geladeiras (3) </li>
                <li onclick="exibir('fogao')"> Fogões (2) </li>
                <li onclick="exibir('microondas')"> Microondas (3) </li>
                <li onclick="exibir('lavaRoupa')"> Lavadoura de roupa (2) </li>
                <li onclick="exibir('lavaLouca')"> Lava-louças (2) </li>
            </ul>
        </aside>
        <div class="produtos">
            <div class="prod" id="geladeira">
                <img class="tamanhoprod" src="./public/img/geladeira.jpg" width="120px" onmouseover="destaque(this)"
                    onmouseout="redimensiona(this)" />
                <br>
                <p>Geladeira/Refrigerador Side By Side <br> Frost Free Inox Electrolux - 127V (504L)</p>
                <br>
                <p class="strike"> R$7.789,05 </p>
                <br>
                <p class="preco"> R$ 4.599,07 </p>
                <hr />
            </div>
            <div class="prod" id="geladeira">
                <img class="tamanhoprod" src="./public/img/geladeira1.jpg" width="120px" onmouseover="destaque(this)"
                    onmouseout="redimensiona(this)" />
                <br>
                <p> Refrigerador Electrolux Duplex DC35A - 127V (260L) </p>
                <br>
                <p class="strike"> R$1.759,32 </p>
                <br>
                <p class="preco"> R$1.449,90 </p>
                <hr>
            </div>
            <div class="prod" id="geladeira">
                <img class="tamanhoprod" src="./public/img/geladeira2.jpg" width="120px" onmouseover="destaque(this)"
                    onmouseout="redimensiona(this)" />
                <br>
                <p> Refrigerador Consul Biplex - 127V (334L) </p>
                <br>
                <p class="strike"> R$1.849,01 </p>
                <br>
                <p class="preco"> R$1.689,00 </p>
                <hr />
            </div>
            <!-- Começo dos Fogões -->
            <div class="prod" id="fogao">
                <img class="tamanhoprod" class="fogao" src="./public/img/fogao.jpg" width="120px"
                    onmouseover="destaque(this)" onmouseout="redimensiona(this)" />
                <br>
                <p> Fogão 05 Bocas Mesa de Vidro - Electrolux - 127V </p>
                <br>
                <p class="strike"> R$2.157,38 </p>
                <br>
                <p class="preco"> R$1.753,84</p>
                <hr />
            </div>
            <div>
                <!-- Segundo Fogão -->
                <div class="prod" id="fogao">
                    <img class="tamanhoprod" src="./public/img/fogao1.jpg" width="120px" onmouseover="destaque(this)"
                        onmouseout="redimensiona(this)" />
                    <br>
                    <p> Fogão 4 Bocas Electrolux - Automático com Forno (70L) </p>
                    <br>
                    <p class="strike"> R$1.659,39 </p>
                    <br>
                    <p class="preco"> R$ 1.357,67 </p>
                    <hr>
                </div>
                <!-- Fim dos Fogões e começo dos microondas -->
                <div class="prod" id="microondas">
                    <img class="tamanhoprod" src="./public/img/microondas.jpg" width="120px"
                        onmouseover="destaque(this)" onmouseout="redimensiona(this)" />
                    <br>
                    <p> Forno de Micro-ondas - Prata - 127V (27 L) </p>
                    <br>
                    <p class="strike"> R$579,67 </p>
                    <br>
                    <p class="preco">R$493,28</p>
                    <hr>
                </div>
                <!-- Segundo microondas -->
                <div class="prod" id="microondas">
                    <img class="tamanhoprod" src="./public/img/microondas1.jpg" width="120px"
                        onmouseover="destaque(this)" onmouseout="redimensiona(this)" />
                    <br>
                    <p> Micro-ondas Philco - 127V (30L) </p>
                    <br>
                    <p class="strike"> R$563,67 </p>
                    <br>
                    <p class="preco"> R$498,20 </p>
                    <hr />
                </div>
                <!-- Terceiro Microondas -->
                <div class="prod" id="microondas">
                    <img class="tamanhoprod" src="./public/img/microondas2.jpg" width="120px"
                        onmouseover="destaque(this)" onmouseout="redimensiona(this)" />
                    <br>
                    <p> Micro-ondas Brastemp Inox - 127V (20L) </p>
                    <br>
                    <p class="strike"> R$554,67 </p>
                    <br>
                    <p class="preco">R$489,27</p>
                    <hr />
                </div>
            </div>
            <!-- Fim dos microondas e inicio das Lavadouras de roupas -->
            <div class="prod" id="lavaRoupa">
                <img class="tamanhoprod" src="./public/img/lavroupa.jpg" width="120px" onmouseover="destaque(this)"
                    onmouseout="redimensiona(this)" />
                <br>
                <p> Lavadora Electrolux - Branca - 220V (13 Kg) </p>
                <br>
                <p class="strike"> R$ 2.084,62 </p>
                <br>
                <p class="preco">R$ 1.489,99</p>
                <hr />
            </div>
            <!-- Segunda Lavadoura de roupa -->
            <div class="prod" id="lavaRoupa">
                <img class="tamanhoprod" src="./public/img/lavroupa1.jpg" width="120px" onmouseover="destaque(this)"
                    onmouseout="redimensiona(this)" />
                <br>
                <p> Lavadora de Roupas Brastemp com Turbo<br> Agitação - 220V (11kg) </p>

                <br>
                <p class="strike"> R$ 2.056,97 </p>
                <br>
                <p class="preco"> R$ 1.719,99 </p>
                <hr>
            </div>
            <!-- Fim das Lavadouras de roupas e começo das de Louças -->
            <div class="prod" id="lavaLouca">
                <img class="tamanhoprod" src="./public/img/lavlouça.jpg" width="120px" onmouseover="destaque(this)"
                    onmouseout="redimensiona(this)" />
                <br>
                <p> Lava-Louças Inox 14 Serviços - 220V </p>
                <br>
                <p class="strike"> R$3.548,79 </p>
                <br>
                <p class="preco"> R$ 2.233,25 </p>
                <hr />
            </div>
            <!-- Segunda Lava-louça -->
            <div class="prod" id="lavaLouca">
                <img class="tamanhoprod" src="./public/img/lavlouça1.jpg" width="120px" onmouseover="destaque(this)"
                    onmouseout="redimensiona(this)" />
                <br>
                <p> Lava-louças 8 Serviços Brastemp Ative! - 220V </p>
                <br>
                <p class="strike"> R$2.368,79 </p>
                <br>
                <p class="preco"> R$ 1.804,85 </p>
                <hr />
            </div>

        </div>

        <br> <br> <br> <br>
        <hr>

        <br> <br> <br> <br>
        <!-- Rodapé-->
        <?php
            include_once('rodape.html');    
         ?>

    </div>




    <script async src="./public/js/script.js"></script>
    <script defer src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>

</body>

</html>