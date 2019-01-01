<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Category ;
use AppBundle\Entity\Produit ;
class SecurityController extends Controller
{
    /**
     * @Route("/login", name="login")
     */
   
     public  function loginAction(Request $request)
    {
        return $this->render('admin/login.html.twig');
    }
    
}