<?php

namespace App\Controller;

use App\Entity\Author;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AuthbaseController extends AbstractController
{
    #[Route('/authbase', name: 'app_authbase')]
    public function index(): Response
    {
        return $this->render('authbase/index.html.twig', [
            'controller_name' => 'AuthbaseController',
        ]);
    }

    #[Route('/auth/add', name: 'app_auth_add')]

    function Add(ManagerRegistry $doctrine):Response
    {
        //1-creation d'une objt de clase author apartir de l'instansation 

        $Author=new Author();
        $Author->setUsername("saif");
        $Author->setEmail("saif.laameri@esprit.tn");
        $Author->setNbBooks(5);
        //2-get doctrine dans version 4 dans version 5 juste on import ecomme variable dans fonction et on utilise $doctrine mais les deux de meme principe
        
        $em=$doctrine->getManager();
        //3-    persisit hya thadher requete khaw 
        $em->persist($Author);
        //4- hya eli bech texecuti el requete   
        $em->flush();

        return new Response("sucess");

       
    }




}
