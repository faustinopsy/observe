<?php

namespace Estoque\App;

interface Observer
{
    public function atualizado(string $codigo);
}