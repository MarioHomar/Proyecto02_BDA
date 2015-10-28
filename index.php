<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Genome Database</title>
    </head>
    <body>
        <?php
            $xml= simplexml_load_file("Proyecto02.xml") or die ("Error, no se pudo crear el objeto.");
            echo $xml -> table_structure[0] -> name . "<br>";
            echo $xml -> table_structure[1] -> name;
        ?>
    </body>
</html>
