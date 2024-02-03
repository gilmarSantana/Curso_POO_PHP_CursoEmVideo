<?php

/**
 * Description of Caneta
 *
 * @author gilmarr_dev
 */
class Caneta {

    var $modelo;
    var $cor;
    var $ponta;
    var $carga_percent;
    var $tampada;

    function rabiscar() {
        if ($this->tampada == true) {
            echo "Não é possível rabiscar pois a caneta está tampada.";
            return;
        }
        
        echo "Rabiscando...";
    }
    
    function tampar(){
        echo "Tampando...";
        $this->tampada = true;
    }
    
    function destampar(){
        echo "Destamapando...";
        $this->tampada = false;

    }
}
