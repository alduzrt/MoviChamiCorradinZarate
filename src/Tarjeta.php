<?php

namespace TpFinal;

class Tarjeta {
protected $saldo;
    public function saldo() {
        return 0;
    }
    public function getSaldo(){
        return $this->saldo;
    }
    
    public function cargarCincuenta($monto){
    $this->saldo+=$monto; 
    }
}