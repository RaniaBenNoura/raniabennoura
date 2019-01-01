<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Category ;
use AppBundle\Entity\Produit ;
class FrontController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $category=$em->getRepository(Category:: class)->findAll();

        return $this->render('front/index.html.twig', [
            'category' => $category
        ]);
    }

    /**
     * @Route("/{id}", name="produits")
     */
    public function showProduit(Category $id)
    {
        $em=$this->getDoctrine()->getManager();
        $produits=$em->getRepository(Produit::class)->findByCategory($id);

        return $this->render('front/produit.html.twig', [
            'categorie' => $id,
            'produits' => $produits,
        ]);
    }
  
    /**
     * @Route("/details/{id_prd}", name="details")
     */ 
    public function produitDetails(Produit $id_prd)
    {

      $em=$this->getDoctrine()->getManager()->getRepository(Produit::class)->find($id_prd);
   
     return $this->render('front/detailsProduit.html.twig',array( 'produit' => $id_prd));


    }
  

}
    

