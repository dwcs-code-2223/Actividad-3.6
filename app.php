<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */


include_once 'includes/autoload.php';

use model\Compra;
use pago\PayPalPago as PayPal;
use pago\TarjetaCreditoPago;

$fecha = new DateTime("2024/12/23");

$metodoPago = new TarjetaCreditoPago("Ana Antas López", "1234567812345678", 123, $fecha);
$compra = new Compra(120.55, $metodoPago);
$compra->comprar();
echo ($metodoPago);

echo "------------------------";
$metodoPago = new PayPal("ana@email.com", "abc123.");
$compra->setMetodoPago($metodoPago);
$compra->comprar();

echo ($metodoPago);
