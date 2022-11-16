<?php

namespace traits\classInfo;

/**
 *
 * @author maria
 */
trait ClassTraitInfo {

    public function __toString(): string {
        $cadena = '<div style="color:blue;">';
        $cadena = $cadena . "--------------------------------------<br/>";
           $cadena = $cadena . "Información de la clase: " . get_class($this) . "<br/>";
           $cadena = $cadena . "--------------------------------------<br/>";

        $metodos_clase = get_class_methods($this);

           $cadena = $cadena . "Métodos:  " . implode($metodos_clase, ", ") . "<br/>";

//        $reflect = new \ReflectionClass($this);
//        $props = $reflect->getProperties();
//
////        foreach ($props as $prop) {
////            echo "Prop:  $prop" . $this->__get($prop);
////        }
//
//        
//        $attributes = $reflect->getAttributes();
//
//    foreach ($attributes as $attribute) {
//       var_dump($attribute->getName());
//       var_dump($attribute->getArguments());
//       var_dump($attribute->newInstance());
//    }
//    
//        $variables = get_class_vars(__CLASS__);
//       
//        $pares = [];
//        foreach ($variables as $key => $value) {
//            $cadena_par = "$key = $value";
//            array_push($pares, $cadena_par);
//        }
        //   echo "Variables  y valores por defecto: " . implode($pares, ", ") . "<br/>";
           $cadena = $cadena . "</div>";
           return $cadena;
    }

}
