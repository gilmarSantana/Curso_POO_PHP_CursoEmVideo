<html>
    <head>
        <title>Conta de Banco</title>
        <meta charset="utf-8">
        <style>
            #contas {
                display: flex;
                font-family: 'Verdana';
            }
            #conta1 {
                width: 50%;
                height: 500px;
                border: 1px solid blue;
                padding: 30px;
                display: flex;

            }

            #conta2 {
                width: 50%;
                height: 500px;
                border: 1px solid pink;
                padding: 30px;
                display: flex;

            }


        </style>
    </head>
    <body>
        <?php
        require_once './ContaBanco.php';
        $contaJubiley = new ContaBanco();
        $contaJubiley->abrirConta("ContaCorrente");
        $contaJubiley->setDono("Jubiley");
        $contaJubiley->setNumConta(rand(100003, 188238));

        $contaJucicreyde = new ContaBanco();
        $contaJucicreyde->abrirConta("ContaPoupanca");
        $contaJucicreyde->setDono("Jucicreyde");
        $contaJucicreyde->setNumConta(rand(100003, 188238));
        ?>


        <div id="contas">
            <div id="conta1">
                <h1>Conta Jubiley <?= $contaJubiley->getNumConta(); ?></h1>
                <hr>
                <pre>
                    <?php
                    $contaJubiley->depositar(300);
                    $contaJubiley->depositar(9800);
                    $contaJubiley->sacar(560);
                    $contaJubiley->pagarMensalidade();
                    print_r($contaJubiley);
                    ?>
                </pre>
            </div>


            <div id="conta2">
                <h1>Conta Jucicreyde  <?= $contaJucicreyde->getNumConta(); ?></h1>
                <hr>
                <pre>
                    <?php
                    $contaJucicreyde->depositar(500);
                    $contaJucicreyde->sacar(200);
                    $contaJucicreyde->pagarMensalidade();
                    $contaJucicreyde->sacar(430);
                    $contaJucicreyde->fecharCotna();
                    $contaJucicreyde->sacar(430);
                    print_r($contaJucicreyde);
                    ?>
                </pre>
            </div>
        </div>
    </body>
</html>



