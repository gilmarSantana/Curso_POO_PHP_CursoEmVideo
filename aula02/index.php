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
            $c1->ponta = 0.5;
            $c1->carga_percent = 75;
            $c1->tampada = true;
            
            if ($c1->tampada) {
                $c1->destampar();
            }
            $c1->rabiscar();
            echo "<pre>";
            print_r($c1);
            echo "</pre>";
            
            echo "===================================== <br>";
            
            $m1 = new Mouse;
            $m1->brand = "Intelbras";
            $m1->model = "RTM 019";
            $m1->color = "black";
            $m1->cable_width = 1;
            $m1->state = "off";
            
            if ($m1->state == 'off') {
                $m1->turn_on();
            }
            
            $accepted_brands = ['Microsoft', 'Sony', 'Red Dragon', 'Intelbras'];
            
            if (!in_array($m1->brand, $accepted_brands)) {
                echo "The system does not support this brand: $m1->brand.";
                echo " The system only support the following brands:". implode(', ', $accepted_brands);
            }
            
            
            
            
            echo "<pre>";
            print_r($m1);
            echo "</pre>";
            
        ?>
    </body>
</html>
