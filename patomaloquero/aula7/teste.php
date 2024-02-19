<?php

include("poo.php");

class PF extends Banco{

    public function verSaldo(){
        echo "o valor de saldo é";
        echo $saldo;
    }
}

$pf = new PF();
$pf->nome = 'Pato';
$pf->email = 'pato3000@gmail.com';
$pf->saldo = 10000000000;

echo "Nome: ".$pf->nome."<hr>";
echo "Email: ".$pf->email."<hr>";
echo "Saldo: ".$pf->verSaldo()."<hr>";
