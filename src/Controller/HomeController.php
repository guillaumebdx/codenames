<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        $blues   = ['blue'];
        $reds    = [];
        $yellows = [];
        $spy     = ['spy'];
        for ($i=0; $i<8; $i++) {
            $blues[] = 'blue';
            $reds[]  = 'red';
            if ($i > 0) {
                $yellows[] = 'yellow';
            }
        }
        $cases = array_merge($blues, $reds, $spy, $yellows);
        shuffle($cases);
        return $this->render('home/index.html.twig', [
            'cases' => $cases,
        ]);
    }
}
