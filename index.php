<html>
    <head>
        <title>PHP_M8 Pr&aacute;ctica</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Fonts Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <title>PHP_M8</title>
        <style> 
            table, th, tr, td {
                border: 1px solid black;
                padding: 0px;
                border-spacing: 0px;
            }
            .numero {
                text-align: center;
            }
            .moneda {
                textg-align: right;        
            }
            .texto {
                text-align: left;
            }
        </style>
    </head>
    <body>    
<?php
    include "db.php";
    include "taula.php";
    $taula = new Taula();
    // ToDo: Descomentar código para insertar los datos.
    //$compra1 = $taula->insertar("compras","'Alberto', 10.23, 1");
    //$compra2 = $taula->insertar("compras","'Antonio', 8.15, 3");
    $taula->mostrarCompras("compras","1=1");
    $taula->close()
?>
    </body>
</html>