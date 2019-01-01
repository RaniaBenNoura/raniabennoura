<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Category ;
use AppBundle\Entity\Produit ;
use AppBundle\Repository\ProduitRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CartController extends Controller
{
    /**
     * @Route("/panier/ajouter/{id_produit}", name="panier_ajouter")
     */
    public function panierAjouter(Request $request, $id_produit)
    {
        $s=new Session();
        $p=$s->get('panier');
         @$p[$id_produit]++;
         $s->set('panier',$p);
        return $this->redirectToRoute('panier_details');
    }
    
    /**
     * @Route("/panier/supprimer/{id}", name="panier_supprimer")
     */
    public function supprimerPanier($id)
    {
        $s=new session();
       $p = $s->get('panier');
       $repo=$this->getDoctrine()->getManager()->getRepository(Produit::class);
       if( array_key_exists( $id , $p)){
           unset($p[$id]);
           $s-> set('panier',$p );
        }
        return $this->redirectToRoute('panier_details');



    }
    /**
     * @Route("/panier/vider", name="vider_panier")
     */
    public function viderPanier()
    {
    //     $s=new session();
       
    //    $s->remove('panier');
    //    die();
    //   if(!$s -> has('panier')) $s->set ('panier', array());
    //  var_dump($s->get('panier'));
    // //  die();
         return $this->redirectToRoute('panier_details');



    }


   
    /**
     * @Route("/panier/details", name="panier_details")
     */
    public function panierDetails()
    {
        //recuperer le panier depuis le session 
        $s=new session();
        $p=$s->get('panier');
        $produits = array();
        $repo=$this->getDoctrine()->getManager()->getRepository(Produit::class);
       foreach($p as $id=>$qte){
            $produits[]=$repo->find($id);
        }
       // $produits=$repo->finById(array_keys($p));

        return $this->render('front/panier.html.twig',['produits'=>$produits, 'panier'=>$p]);
        
    }
    public function nbrProduitsAction()
    {
       
        $s=new Session();
        $p=$s->get('panier');
        if(isset($p)){
            $n=0 + count($p);
        }else { $n=0 ;}
        
        return new Response($n);


    }

   /**
     * @Route("panier/show", name="panier_show")
     */
    // public function panierShow(ProduitRepository $prd)
    // {
    //     $s=new Session();
    //     $p=$s->get('panier');
    //     $produits = array();
    //     foreach($p as $id => $qte){

    //     }
       
        
    //     return new Response($array);

    // }



}
