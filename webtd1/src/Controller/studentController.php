<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class studentController extends AbstractController
{
    /**
     * @Route("/student" , name="app_student")
     */
    function index(): Response
    {
        $message="Bonjour mes étudiants";
        return $this->render('service/index.html.twig', [
            'message' => $message,
        ]);

    }
    
 
    
    
}
?>