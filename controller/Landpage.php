<?php

namespace controller;

use template\HomeTemp;
use service\HomeService;

class Landpage
{
    public function home()
    {
        $service = new HomeService();
        $dados = $service->obterTextoHome();

        $template = new HomeTemp();
        $template->layout('public/landpage/Home', $dados);
    }
}