<?php

namespace Estoque\App;

class ControleEstoqueSubject implements Subject{
    private array $observers;

    public function atualizaEstoqueProduto(string $codigoProduto, int $novaQuantidade){
        if ($novaQuantidade == 0) {
            $this->notificarObservers($codigoProduto);
        }
    }

    public function adicionarObserver(Observer $observer){
        $this->observers[] = $observer;
    }

    public function removerObserver(Observer $observerRemover){
        foreach ($this->observers as $index => $observer) {
            if ($observer === $observerRemover) {
                unset($this->observers[$index]);
                return true;
            }
        }

        return false;
    }
    public function notificarObservers(string $codigoProduto){
        foreach ($this->observers as $observer) {
            $observer->atualizado($codigoProduto);
        }
    }
}