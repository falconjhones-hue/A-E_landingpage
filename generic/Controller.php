<?php

namespace generic;



class Controller
{
    private $arrayChamadas = [];
    public function __construct()
    {
        $this->arrayChamadas = [
            "landpage/home" => new Acao("Landpage", "home")
        ];
    }

    public function verificarChamadas($rota)
    {
        if (isset($this->arrayChamadas[$rota])) {
            $acao = $this->arrayChamadas[$rota];
            $acao->executar();
        } else {
            echo "Rota não encontrada: " . $rota;
        }
    }
}