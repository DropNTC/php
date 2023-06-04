<?php

	include ("ex4.php");

	$conta1 = new conta(1);
	$conta1->depositar(100);
	$conta1->imprimir_saldo();
	$conta1->sacar(200);
	$conta1->extrato();
	$conta1->aplicar(50);
	$conta1->imprimir_aplicado();
	$conta1->extrato();
	$conta1->resgatetotal();
	$conta1->extrato();
	$conta1->sacar(100);
	$conta1->extrato();

	
	$contaespecial = new contaespecial(2);
	$contaespecial->depositar(100);
	$contaespecial->bonus();
	$contaespecial->extrato();

?>