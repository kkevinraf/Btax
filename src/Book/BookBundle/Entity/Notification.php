<?php

namespace Book\BookBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notification
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Book\BookBundle\Repository\NotificationRepository")
 */
class Notification
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
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="statut", type="integer")
     */
    private $statut;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbrResult", type="integer")
     */
    private $nbrResult;

    /**
     * @ORM\ManyToOne(targetEntity="Utilisateurs\UtilisateursBundle\Entity\Utilisateurs")
     * @ORM\JoinColumn(nullable=false)
     */
    private $utilisateur;

    /**
     * @ORM\ManyToOne(targetEntity="Btax\BtaxBundle\Entity\Localisation")
     * @ORM\JoinColumn(nullable=false)
     */
    private $destination;

    /**
     * @ORM\ManyToOne(targetEntity="Btax\BtaxBundle\Entity\Localisation")
     * @ORM\JoinColumn(nullable=false)
     */
    private $depart;

    /**
     * @ORM\ManyToOne(targetEntity="Btax\BtaxBundle\Entity\Cooperative")
     * @ORM\JoinColumn(nullable=true)
     */
    private $cooperative;

    /**
     * @ORM\ManyToOne(targetEntity="Cooperative\CooperativeBundle\Entity\Place")
     * @ORM\JoinColumn(nullable=true)
     */
    private $place;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbrPlace", type="integer")
     */
    private $nbrPlace;

    /**
     * @var integer
     *
     * @ORM\Column(name="horaire", type="integer")
     */
    private $horaire;


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
     * Set date
     *
     * @param \DateTime $date
     * @return Notification
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set statut
     *
     * @param integer $statut
     * @return Notification
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
     * Set nbrResult
     *
     * @param integer $nbrResult
     * @return Notification
     */
    public function setNbrResult($nbrResult)
    {
        $this->nbrResult = $nbrResult;

        return $this;
    }

    /**
     * Get nbrResult
     *
     * @return integer 
     */
    public function getNbrResult()
    {
        return $this->nbrResult;
    }

    /**
     * Set nbrPlace
     *
     * @param integer $nbrPlace
     * @return Notification
     */
    public function setNbrPlace($nbrPlace)
    {
        $this->nbrPlace = $nbrPlace;

        return $this;
    }

    /**
     * Get nbrPlace
     *
     * @return integer 
     */
    public function getNbrPlace()
    {
        return $this->nbrPlace;
    }

    /**
     * Set horaire
     *
     * @param integer $horaire
     * @return Notification
     */
    public function setHoraire($horaire)
    {
        $this->horaire = $horaire;

        return $this;
    }

    /**
     * Get horaire
     *
     * @return integer 
     */
    public function getHoraire()
    {
        return $this->horaire;
    }

    /**
     * Set utilisateur
     *
     * @param \Utilisateurs\UtilisateursBundle\Entity\Utilisateurs $utilisateur
     * @return Notification
     */
    public function setUtilisateur(\Utilisateurs\UtilisateursBundle\Entity\Utilisateurs $utilisateur)
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    /**
     * Get utilisateur
     *
     * @return \Utilisateurs\UtilisateursBundle\Entity\Utilisateurs 
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }

    /**
     * Set destination
     *
     * @param \Btax\BtaxBundle\Entity\Localisation $destination
     * @return Notification
     */
    public function setDestination(\Btax\BtaxBundle\Entity\Localisation $destination)
    {
        $this->destination = $destination;

        return $this;
    }

    /**
     * Get destination
     *
     * @return \Btax\BtaxBundle\Entity\Localisation 
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Set depart
     *
     * @param \Btax\BtaxBundle\Entity\Localisation $depart
     * @return Notification
     */
    public function setDepart(\Btax\BtaxBundle\Entity\Localisation $depart)
    {
        $this->depart = $depart;

        return $this;
    }

    /**
     * Get depart
     *
     * @return \Btax\BtaxBundle\Entity\Localisation 
     */
    public function getDepart()
    {
        return $this->depart;
    }

    /**
     * Set cooperative
     *
     * @param \Btax\BtaxBundle\Entity\Cooperative $cooperative
     * @return Notification
     */
    public function setCooperative(\Btax\BtaxBundle\Entity\Cooperative $cooperative = null)
    {
        $this->cooperative = $cooperative;

        return $this;
    }

    /**
     * Get cooperative
     *
     * @return \Btax\BtaxBundle\Entity\Cooperative 
     */
    public function getCooperative()
    {
        return $this->cooperative;
    }

    /**
     * Set place
     *
     * @param \Cooperative\CooperativeBundle\Entity\Place $place
     * @return Notification
     */
    public function setPlace(\Cooperative\CooperativeBundle\Entity\Place $place = null)
    {
        $this->place = $place;

        return $this;
    }

    /**
     * Get place
     *
     * @return \Cooperative\CooperativeBundle\Entity\Place 
     */
    public function getPlace()
    {
        return $this->place;
    }
}
