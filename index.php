<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Prova</title>
    </head>
    <body>
        <p>Holaaaaaa</p>
        <?php
        function setHeight($minheight = 50) {
            echo "The height is : $minheight <br>";
        }

        setHeight(350);
        setHeight(); // will use the default value of 50
        setHeight(135);
        setHeight(80);
        ?>
    </body>
</html>
