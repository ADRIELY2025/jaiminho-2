<?php

namespace app\trait;

use Slim\Views\Twig;

trait Template
{

    public function getTwig()
    {
        try {
            $twig = Twig::create(DIR_VIEW);
            #Adicionamos uma variavel de template global acessivel de qualquer template. 
            $twig->getEnvironment()->addGlobal('EMPRESA', 'BitLab');
            return $twig;
        } catch (\Exception $e) {
            throw new \Exception("Restrição: " . $e->getMessage());
        }
    }
    public function setView($name)
    {
        return $name . EXT_VIEW;
    }
}
