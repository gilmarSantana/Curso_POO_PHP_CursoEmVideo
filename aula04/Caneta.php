<?php

/**
 * Description of Caneta
 *
 * @author gilmarr_dev
 */
class Caneta {

    public $modelo;
    public $cor;
    private $ponta;
    protected $carga_percent;
    protected $tampada;
    
    public function __construct($modelo, $cor, $ponta) {
        $this->set_modelo($modelo);
        $this->set_cor($cor);
        $this->set_ponta($ponta);
        $this->set_carga_percent(100);
        $this->set_tampada(true);
    }
    
    public function get_modelo() {
        return $this->modelo;
    }

    public function get_cor() {
        return $this->cor;
    }

    public function get_ponta() {
        return $this->ponta;
    }

    public function get_carga_percent() {
        return $this->carga_percent;
    }

    public function get_tampada() {
        return $this->tampada;
    }
    public function set_modelo($modelo) {
        $this->modelo = $modelo;
        return $this;
    }

    public function set_cor($cor) {
        $this->cor = $cor;
        return $this;
    }

    public function set_ponta($ponta) {
        $this->ponta = $ponta;
        return $this;
    }

    public function set_carga_percent($carga_percent) {
        $this->carga_percent = $carga_percent;
        return $this;
    }

    public function set_tampada($tampada) {
        $this->tampada = $tampada;
        return $this;
    }

    private function rabiscar() {
        if ($this->tampada == true) {
            echo "Não é possível rabiscar pois a caneta está tampada.";
            return;
        }        
        echo "Rabiscando...";
    }
    
    public function tampar(){
        echo "Tampando...";
        $this->tampada = true;
    }
    
    public function destampar(){
        echo "Destamapando...";
        $this->tampada = false;

    }
}
