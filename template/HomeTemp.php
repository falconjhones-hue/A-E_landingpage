<?php

namespace template;



class HomeTemp implements ITemplate
{
    public function cabecalho()
    {
        include __DIR__ . '/../public/partials/header.php';
    }
    public function rodape()
    {
        include __DIR__ . '/../public/partials/footer.php';
    }
    public function layout($caminho, $parametro = null)
    {
        if ($parametro) {
            extract($parametro);
        }

        $this->cabecalho();
        include __DIR__ . '/../' . $caminho . '.php';
        $this->rodape();
    }
}
