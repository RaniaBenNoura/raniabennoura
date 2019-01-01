<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProduitCommande
 *
 * @ORM\Table(name="produit_commande")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProduitCommandeRepository")
 */
class ProduitCommande
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="qte", type="integer")
     */
    private $qte;

    /**
     * @var string
     *
     * @ORM\Column(name="prix", type="decimal", precision=10, scale=0)
     */
    private $prix;

    /*
     * @ORM\ManyToOne(targetEntity=Commande)
     */
    private $commande;

    /*
     * @ORM\ManyToOne(targetEntity=Produit)
     */
    private $produit;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set qte
     *
     * @param integer $qte
     *
     * @return ProduitCommande
     */
    public function setQte($qte)
    {
        $this->qte = $qte;

        return $this;
    }

    /**
     * Get qte
     *
     * @return int
     */
    public function getQte()
    {
        return $this->qte;
    }

    /**
     * Set prix
     *
     * @param string $prix
     *
     * @return ProduitCommande
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return string
     */
    public function getPrix()
    {
        return $this->prix;
    }
}
