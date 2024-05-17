<?php

namespace Estoque\App;

interface Subject{
    public function adicionarObserver(Observer $observer);
    public function removerObserver(Observer $observer);
    public function notificarObservers(string $codigoProduto);
}