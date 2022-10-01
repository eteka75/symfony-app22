<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{
    /**
     * @Route("hello")
     * Summary of hello
     * @param Request $request
     * @return Response
     */
    function hello(Request $request)
    {
        dd($request);
        return $this->render('hello.html.twig', ['Bonjour']);
        //return new Response("Bonjour");
    }
    /**
     * @Route("hello/{entier}", requirements={"entier"="\d+"})
     * Summary of hello
     * @param Request $request
     * @return Response
     */
    function helloEntier(Request $request)
    {
        dd($request);
        return $this->render('hello.html.twig', ['Bonjour']);
        //return new Response("Bonjour");
    }
}
