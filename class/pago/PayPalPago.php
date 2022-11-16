<?php

namespace pago;

use \traits\log\Logger;
use \traits\classInfo\ClassTraitInfo;

/**
 * Description of PayPalPago
 *
 * @author maria
 */
class PayPalPago implements IPago {

    use Logger;
    use ClassTraitInfo;

    private $usuario;
    private $password;

    public function __construct($usuario, $password) {
        $this->usuario = $usuario;
        $this->password = $password;
    }

    public function getUsuario() {
        return $this->usuario;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setUsuario($usuario): void {
        $this->usuario = $usuario;
    }

    public function setPassword($password): void {
        $this->password = $password;
    }

    public function pagar(float $importe): bool {
        $this->log("Pagando $importe con PayPal para el usuario $this->usuario");      
        return true;
    }

//    public function __toString(): void {
//        echo "Pay Pal toString";
//    }
    
    
   

}
