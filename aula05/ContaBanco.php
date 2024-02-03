<?php

class ContaBanco {

    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    public function __construct() {
        $this->setSaldo(0);
        $this->setStatus(false);
    }

    public function getNumConta() {
        return $this->numConta;
    }

    public function setNumConta($newNumConta) {
        $this->numConta = $newNumConta;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($newTipo) {
        $this->tipo = $newTipo;
    }

    public function getDono() {
        return $this->dono;
    }

    public function setDono($newDono) {
        $this->dono = $newDono;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function setSaldo($newSaldo) {
        $this->saldo = $newSaldo;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($newStatus) {
        $this->status = $newStatus;
    }

    public function abrirConta($newTipo) {
        $this->setTipo($newTipo);
        $this->setStatus(true);

        if ($this->getTipo() == "ContaCorrente") {
            $this->setSaldo(50);
        } elseif ($this->getTipo() == "ContaPoupanca") {
            $this->setSaldo(150);
        }
    }

    public function fecharCotna() {
        if ($this->getSaldo() > 0) {
            echo json_encode([
                "type" => "error",
                "msg" => "Conta com saldo positivo não pode ser fechada."
            ]);
        } elseif ($this->getSaldo() < 0) {
            echo json_encode([
                "type" => "error",
                "msg" => "Conta com saldo negativo não pode ser fechada."
            ]);
        } else {
            $this->setStatus(false);
        }
    }

    public function depositar($newSaldo) {
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() + $newSaldo);
            echo 'Depósito realizado. Saldo atual:' . $this->getSaldo() . "<br>";
        } else {
            echo json_encode([
                "type" => "error",
                "msg" => "Conta fechada, não é possível depositar."
            ]);
        }
    }

    public function sacar($valorSaque) {
        if ($this->getStatus()) {
            if ($this->getSaldo() >= $valorSaque) {
                $this->setSaldo($this->getSaldo() - $valorSaque);
                echo "Saque de R$ {$valorSaque} realizado. Saldo atual:" . $this->getSaldo(). "<br>";
            } else {
                echo json_encode([
                    "type" => "error",
                    "msg" => "Saldo insuficiente para um saque nesse valor R$ {$valorSaque}.<br>"
                ]);
            }
        } else {
           echo json_encode([
                "type" => "error",
                "msg" => "Conta fechada, não é possível sacar."
            ]);
        }
    }

    public function pagarMensalidade() {
        if ($this->getTipo() == "ContaCorrente") {
            $valorMensalidade = 12;
        } elseif ($this->getTipo() == "ContaPoupanca") {
            $valorMensalidade = 20;
        }

        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() - $valorMensalidade);
        } else {
            echo json_encode([
                "type" => "error",
                "msg" => "Conta fechada, não é possível pagar mensalidade."
            ]);
        }
    }
}
