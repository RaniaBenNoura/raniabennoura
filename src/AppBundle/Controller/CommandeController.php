<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Category ;
use AppBundle\Entity\Produit ;
use AppBundle\Entity\Commande ;
class CommandeController extends Controller
{
    /**
     * @Route("/commande/valider", name="commande_valider")
     */
   
    public function commandeValider()
    {
        $commande=new commande();
        $form=$this->createFormBuilder($commande)
                 ->add('nom')
                 ->add('prenom')
                 ->add('adresse')
                 ->getForm();
           return $this->render('front/commande.html.twig',['form'=>$form->createView()]);

    }

    /**
     * @Route("/payement", name="payer")
     */
   
    public function payer()
    {
           return $this->render('front/payment.html.twig');



    }
    /**
     * @Route("/facture", name="facture")
     */
   
    public function facture()
    {
           return $this->render('front/facture.html.twig');
    }
    /**
     * @Route("/facturePDF", name="facturepdf")
     */
   
    public function facturepdf()
    {
           return $this->render('front/facturepdf.html.twig');



    }
    
}
