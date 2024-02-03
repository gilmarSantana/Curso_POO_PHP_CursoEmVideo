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
