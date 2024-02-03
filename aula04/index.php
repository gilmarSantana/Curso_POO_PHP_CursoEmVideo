<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 02 - PHP POO</title>
    </head>
    <body>
        <?php
            require_once './Caneta.php';
           
            
            $c1 = new Caneta('Cristal', 'Red', '0.5', '', '');
//            $c1->set_modelo("Cristaliz");
//            $c1->set_cor("Purple");
//            $c1->set_ponta(0.5);
            
            echo "a cor da caneta é {$c1->get_cor()}";
            echo "<pre>";
            print_r($c1);
            
        ?>
    </body>
</html>
