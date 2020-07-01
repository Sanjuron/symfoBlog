<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController
{
    //remplace le fichier yaml
    /**
     * @Route("/lucky/number")
     */


    public function number(): Response //controller function
    {
        $number = random_int(0, 100); // génération d'un numéro aléatoire

        return new Response( // print
            '<html><body>Lucky Number : '.$number.'</body></html>'
        );
    }
}