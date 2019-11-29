<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <title></title>

        <style>
            .dest{font-weight: bold;}
            p { text-align: justify; }
            .center{text-align: center; }
            #imgViva{width: 100%; height: 100%;}
        </style>
    </head>
    <body>

        <?php
        require_once '../model/menu.php';
        ?>


        <div class="jumbotron text-center">
            <h1>Viva e Deixe Viver Porto Alegre</h1>
            <p class="center">Bem Vindos!</p> 
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h3 class="center" >Quem Somos</h3>
                    <h4 class="center" >O Viva Porto Alegre é o pedacinho gaúcho da ONG Viva e Deixe Viver! </h4>

                    <p class="center" >O Viva e Deixe Viver tem as seguintes missão, causa, visão e principios:<p>

                    <p class="dest">Missão<p>

                    <p> meio da arte de contar histórias, formamos cidadãos conscientes da importância do acolhimento e que produzem bem-estar a partir de valores humanos como empatia, ética e afeto.<p>

                    <p class="dest">Causa<p>

                    <p>Uma sociedade construída com base em relações humanizadas.<p>

                    <p class="dest">Visão<p>

                    <p>Ser reconhecida como uma Organização da Sociedade Civil que desenvolve cidadãos para o cumprimento do trabalho voluntário de maneira consciente, comprometida e constante. Ser referência em educação e cultura por meio da promoção de atividades de ensino continuado.<p>

                    <p class="dest">Princípios<p>

                    <p>Atuamos com ética. Trabalhamos em equipes integradas e com respeito à individualidade. Não discriminamos raça, cor, credo, religião, partidos políticos, orientação sexual e poder aquisitivo. Não permitimos a utilização institucional político-partidária da nossa Associação. Acreditamos e incentivamos a capacitação constante de cada indivíduo.<p>




                </div>
                <div class="col-sm-4">
                    <img class="center" id="imgViva" src="download.png" alt="Imagem responsiva">
                </div>
                <div class="col-sm-4">
                    <h3>Aonde Estamos</h3>        
                    <p>Em Porto Alegre e região metropolitana, temos um grupo formado por mais de 100 voluntários e atuanos nos seguintes locais:</p>
                    <li> 
                        <ul> Hospital da Criança Sãnto Antônio</ul>
                        <ul>  Kinder Centro Integração da Criança Especial</ul>
                        <ul>    AACD/RS - Associação de Assistência à Criança Deficiente</ul>
                        <ul>  APAE de Trinfo</ul>

                    </li> 

                </div>
            </div>
        </div>


    </body>
</html>
