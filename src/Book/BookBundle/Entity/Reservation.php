<?php

namespace Book\BookBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Book\BookBundle\Repository\ReservationRepository")
 */
class Reservation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_heure", type="datetime")
     */
    private $dateHeure;

    /**
     * @var float
     *
     * @ORM\Column(name="Montant", type="float")
     */
    private $montant;

    /**
     * @var string
     *
     * @ORM\Column(name="Transaction", type="string", length=255)
     */
    private $transaction;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var integer
     *
     * @ORM\Column(name="Num_place", type="integer")
     */
    private $numPlace;

    /**
     * @var integer
     *
     * @ORM\Column(name="Statut", type="integer")
     */
    private $statut;

    /**
     * @ORM\ManyToOne(targetEntity="Cooperative\CooperativeBundle\Entity\Trajet")
     * @ORM\JoinColumn(nullable=false)
     */
    private $trajet;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dateHeure
     *
     * @param \DateTime $dateHeure
     * @return Reservation
     */
    public function setDateHeure($dateHeure)
    {
        $this->dateHeure = $dateHeure;

        return $this;
    }

    /**
     * Get dateHeure
     *
     * @return \DateTime 
     */
    public function getDateHeure()
    {
        return $this->dateHeure;
    }

    /**
     * Set montant
     *
     * @param float $montant
     * @return Reservation
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return float 
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set transaction
     *
     * @param string $transaction
     * @return Reservation
     */
    public function setTransaction($transaction)
    {
        $this->transaction = $transaction;

        return $this;
    }

    /**
     * Get transaction
     *
     * @return string 
     */
    public function getTransaction()
    {
        return $this->transaction;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Reservation
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set numPlace
     *
     * @param integer $numPlace
     * @return Reservation
     */
    public function setNumPlace($numPlace)
    {
        $this->numPlace = $numPlace;

        return $this;
    }

    /**
     * Get numPlace
     *
     * @return integer 
     */
    public function getNumPlace()
    {
        return $this->numPlace;
    }

    /**
     * Set statut
     *
     * @param integer $statut
     * @return Reservation
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return integer 
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set trajet
     *
     * @param \Cooperative\CooperativeBundle\Entity\Trajet $trajet
     * @return Reservation
     */
    public function setTrajet(\Cooperative\CooperativeBundle\Entity\Trajet $trajet)
    {
        $this->trajet = $trajet;

        return $this;
    }

    /**
     * Get trajet
     *
     * @return \Cooperative\CooperativeBundle\Entity\Trajet 
     */
    public function getTrajet()
    {
        return $this->trajet;
    }
}
