<!DOCTYPE html>

<!--

Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license

Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template

-->

<html>

    <head>

        <meta charset="UTF-8">

        <title>Boletim</title>

    </head>

    <body>

        <h1 style="color: #2a15cf">Boletim</h1>

        <form method="get">

            <label>Informe a nota: </label>

            <br/>

            <input type="text" name="nota"/>

            <br/>

            <label>Informe a frequência: </label>

            <br/>

            <input type="text" name="freq"/>

            <br/>

            <input type="submit" value="Resultado"/>

        </form>

        <?php

        if ($_GET) {

            $media = $_GET['nota'];

            $freq = $_GET['freq'];

            if ($media >= 7.0) {

                if ($freq >= 75.0) {

                    echo("Aprovado");

                } else {

                    echo("Reprovado");

                }//fim Se Freq

            } else {

                echo("Reprovado");

            }//Fim Se media  

        }

        ?>

    </body>

</html>

