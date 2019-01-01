<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Category ;
use AppBundle\Entity\Produit ;
class AdminController extends Controller

{   
    /**
     * @Route("/admin/index", name="index")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $produits = $em->getRepository(Produit::class)->findAll();
        $categories = $em->getRepository(Category::class)->findAll();

        

        return $this->render('admin/index.html.twig',[]);
    }
    /**
     * @Route("/admin/login", name="login")
     */
    public function loginAction()
    {
       

        return $this->render('admin/login.html.twig');
    }

    /**
     * @Route("/admin/listeproduits", name="listeproduits")
     */
    public function listeProduit()
    {
        
        $em = $this->getDoctrine()->getManager();

        $produits = $em->getRepository('AppBundle:Produit')->findAll();

        return $this->render('admin/produits.html.twig', array(
            'produits' => $produits,
        ));

       
    }
  
    /**
     * @Route("/admin/listecategories", name="listecategories")
     */ 
    public function listeCategories()
    {
        $em = $this->getDoctrine()->getManager();

        $categories = $em->getRepository('AppBundle:Category')->findAll();

     return $this->render('admin/categories.html.twig', array(
        'categories' => $categories,
       ));


    }
    

     /**
     * @Route("/admin/commande", name="commande")
     */ 
    public function listecommande()
    {

     //$em=$this->getDoctrine()->getManager()->getRepository(Produit::class)->find($id_prd);
   
     return $this->render('admin/commande.html.twig');


    }
     /**
     * @Route("/admin/detailcommande", name="detailscommande")
     */ 
    public function facture()
    {

      //$em=$this->getDoctrine()->getManager()->getRepository(Produit::class)->find($id_prd);
   
     return $this->render('admin/detailscommande.html.twig');


    }
  

}
    

