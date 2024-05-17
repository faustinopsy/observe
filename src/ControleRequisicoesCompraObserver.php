<?php

namespace Estoque\App;

class ControleRequisicoesCompraObserver implements Observer{
 
    public function atualizado(string $codigo){
        $this->adicionaListaRequisicaoCompra($codigo);
    }

    public function adicionaListaRequisicaoCompra(string $codigoProduto){
        echo 'Produto adicionado a lista de requisições de compra ';
    }
}