<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 02 - PHP POO</title>
    </head>
    <body>
        <?php
            require_once './Caneta.php';
            require_once './Mouse.php';
            
            $c1 = new Caneta;
            $c1->modelo = 'Bic Cristal';
            $c1->cor = 'Azul';
//            $c1->ponta = 0.5;
//            $c1->carga_percent = 75;
//            $c1->tampada = true;
            $c1->destampar();
//            $c1->rabiscar();
            $c1->tampar();
            
            
            echo "<pre>";
            print_r($c1);
            
        ?>
    </body>
</html>
