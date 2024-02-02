<?php

class Mouse {

    var $right_button_clicked;
    var $left_button_clicked;
    var $center_button_clicked;
    var $brand;
    var $model;
    var $color;
    var $cable_width;
    var $state;
    
    
    function turn_on() {
        $this->state = "on";
    }
    
    function turn_off() {
        $this->state = "off";
    }

    function single_right_click() {
        if (!$this->right_button_clicked == true) {
            $this->right_button_clicked = true;
            echo "single click";
        }
        return;
    }

    function double_right_click() {
        if (!$this->right_button_clicked == true) {
            for ($i = 0; $i <= 2; $i++) {
                $this->right_button_clicked = true;
            }
            echo "double click";
        }
        return;
    }
}
