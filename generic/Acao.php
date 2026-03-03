<?php

namespace generic;

class Acao
{
    private $classe;
    private $metodo;

    public function __construct($classe, $metodo)
    {
        $this->classe = "controller\\" . $classe;
        $this->metodo = $metodo;
    }
    public function executar()
    {
        if (!class_exists($this->classe)) {
            die("Controller não encontrado");
        }
        $obj = new $this->classe();
        if (!method_exists($obj, $this->metodo)) {
            die("Método não encontrado");
        }
        $obj->{$this->metodo}();
    }
}
