<?php

require 'vendor/autoload.php';
 use Estoque\App\ControleEstoqueSubject;
 use Estoque\App\ControleRequisicoesCompraObserver;
 use Estoque\App\EmailObserver;

$controleEstoqueSubject = new ControleEstoqueSubject();
 
$controleRequisicaoCompraObserver = new ControleRequisicoesCompraObserver();
$emailObserver = new EmailObserver();

$controleEstoqueSubject->adicionarObserver($controleRequisicaoCompraObserver);
//$controleEstoqueSubject->adicionarObserver($emailObserver);

$controleEstoqueSubject->notificarObservers(13);