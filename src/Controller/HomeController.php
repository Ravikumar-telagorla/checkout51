<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function homepage()
    {
        $offers = json_decode(file_get_contents('http://server.zmotpro.com/ravikumar/c51.json'));
        return $this->render('home/home.html.twig', [
            'title' => 'Welcome to Checkout51',
            'offers' => $offers->offers
        ]);
    }
}
