<?php

namespace AppBundle\DataFixtures;

use App\Entity\Produit;
use App\Entity\Commande;
use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\ProduitCommande;

class Fixtures extends Fixture implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
    	$cat1=new Category();
    	$cat1->setLibelle('Livres');
    	$cat1->setTexte('aaa Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux tenonyme assembla ensemble');
    	$cat1->setImage('https://placeimg.com/200/130');
    	$manager->persist($cat1);

        $cat2=new Category();
        $cat2->setLibelle('Technologie');
        $cat2->setTexte('Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de limprime');
        $cat2->setImage('https://placeimg.com/204/154');
        $manager->persist($cat2);

        $cat3=new Category();
        $cat3->setLibelle('Montres');
        $cat3->setTexte('Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impressio');
        $cat3->setImage('https://placeimg.com/200/140');
        $manager->persist($cat3);


        $p1=new Produit();
        $p1->setLibelle('Python');
        $p1->setTexte('Python est un langage de programmation objet interprété, multi-paradigme et multiplateformes. Il favorise la programmation impérative structurée, fonctionnelle et orientée objet. Il est doté n typage dynamique for ne gestion automatique de la méexceptions ; il est ainsi similaire à Perl, Ruby, Scheme, Smalltalk et Tcl.');
        $p1->setImage('https://placeimg.com/202/156');
        $p1->setPrix('4005');
        $p1->setCategory($cat1);
        $manager->persist($p1);


        $p2=new Produuit();
        $p2->setLibelle('Android');
        $p2->setTexte('Android est le système d’exploitation mobile de Google open-source qui équipe la majorité des smartphones et tablettes du marché. Initialement, And');
        $p2->setImage('https://placeimg.com/602/653');
        $p2->setPrix('3500');
        $p2->setCategory($cat1);
        $manager->persist($p2);

        $p3=new Produit();
        $p3->setLibelle('php');
        $p3->setTexte('ljsdmfks vbsvml svlkkdnvm slvkldnv mslvdkjvn xmcvl clvk nx! ;xcml; lkjdsvsùls mùjlsdvcsùc mkmjlk blcksdmlclsù ùpkmjcmsdlcùs kjlkjmùdlsdlk kljlk');
        $p3->setImage('https://placeimg.com/202/151');
        $p3->setPrix('125');
        $p3->setCategory($cat1);
        $manager->persist($p3);

        $p4=new Produit();
        $p4->setLibelle('FESTINA');
        $p4->setTexte('Festina est certainement la marque de montres qui bénéficie de la plus belle notoriété en France. Richard Virenque y est bien sûr pour quelque chose ! Mais Festina fidélise avant tout sa clientèle grâce à des produits élégantsfiables et à des prix raisonnables. ');
        $p4->setImage('https://placeimg.com/202/159');
        $p4->setPrix('420000');
        $p4->setCategory($cat3);
        $manager->persist($p4);


        $p5=new Produit();
        $p5->setLibelle('PC');
        $p5->setTexte('Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de lmprimerie depuis les années 1500, quand u ');
        $p5->setImage('https://placeimg.com/202/150');
        $p5->setPrix('700000');
        $p5->setCategory($cat2);
        $manager->persist($p5);

        $p6=new Produit();
        $p6->setLibelle('Mobile');
        $p6->setTexte('Smart Mobile Phone, TV Mobile Phone, Business Mobile Phone, Camera Mobile Phone, Music Mobile Phone, Game Mobile Phone, Waterproof /Dust Proof Mobile Phone ');
        $p6->setImage('https://placeimg.com/202/160');
        $p6->setPrix('900');
        $p6->setCategory($cat2);
        $manager->persist($p6);



        $p7=new Produit();
        $p7->setLibelle('Montres');
        $p7->setTexte('Étonnamment, les premières montres à quartz étaient des articles ultra-luxueux et étaient beaucoup plus chères que des montres mécaniques comparables.');
        $p7->setImage('https://placeimg.com/202/140');
        $p7->setPrix('350');
        $p7->setCategory($cat3);
        $manager->persist($p7);

       

        $manager->flush();
    }
}