<?php

namespace app\controller;

class Home extends Base
{
    public function home($request, $response)
    {
        $dadosTemplate = [
            'titulo' => 'Página Inicial'
        ];
        return $this->gteTwig()
            ->render($response, 'home.html', $dadosTemplate)
            ->withHeader('Content-Type', 'text/html')
            ->withStatus(200);
    }
}
