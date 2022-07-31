<?php

namespace Cooperative\CooperativeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trajet
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Cooperative\CooperativeBundle\Repository\TrajetRepository")
 */
class Trajet
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
     * @ORM\Column(name="Date", type="date")
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="placeRestante", type="integer")
     */
    private $placeRestante;

    /**
     * @var array
     *
     * @ORM\Column(name="places", type="array")
     */
    private $places;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Heure", type="time")
     */
    private $heure;

    /**
     * @var integer
     *
     * @ORM\Column(name="Statut", type="integer")
     */
    private $statut;

    /**
     * @ORM\ManyToOne(targetEntity="Btax\BtaxBundle\Entity\Cooperative")
     * @ORM\JoinColumn(nullable=false)
     */
    private $cooperative;

    /**
     * @ORM\ManyToOne(targetEntity="Cooperative\CooperativeBundle\Entity\Voiture")
     * @ORM\JoinColumn(nullable=false)
     */
    private $voiture;


    /**
     * @ORM\ManyToOne(targetEntity="Cooperative\CooperativeBundle\Entity\ItineraireCoop")
     * @ORM\JoinColumn(nullable=false)
     */
    private $itinerairecoop;


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
     * @return Trajet
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
     * Set heure
     *
     * @param \DateTime $heure
     * @return Trajet
     */
    public function setHeure($heure)
    {
        $this->heure = $heure;

        return $this;
    }

    /**
     * Get heure
     *
     * @return \DateTime 
     */
    public function getHeure()
    {
        return $this->heure;
    }

    /**
     * Set statut
     *
     * @param integer $statut
     * @return Trajet
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
     * Set cooperative
     *
     * @param \Btax\BtaxBundle\Entity\Cooperative $cooperative
     * @return Trajet
     */
    public function setCooperative(\Btax\BtaxBundle\Entity\Cooperative $cooperative)
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
     * Set voiture
     *
     * @param \Cooperative\CooperativeBundle\Entity\Voiture $voiture
     * @return Trajet
     */
    public function setVoiture(\Cooperative\CooperativeBundle\Entity\Voiture $voiture)
    {
        $this->voiture = $voiture;

        return $this;
    }

    /**
     * Get voiture
     *
     * @return \Cooperative\CooperativeBundle\Entity\Voiture 
     */
    public function getVoiture()
    {
        return $this->voiture;
    }

    /**
     * Set itinerairecoop
     *
     * @param \Cooperative\CooperativeBundle\Entity\ItineraireCoop $itinerairecoop
     * @return Trajet
     */
    public function setItinerairecoop(\Cooperative\CooperativeBundle\Entity\ItineraireCoop $itinerairecoop)
    {
        $this->itinerairecoop = $itinerairecoop;

        return $this;
    }

    /**
     * Get itinerairecoop
     *
     * @return \Cooperative\CooperativeBundle\Entity\ItineraireCoop 
     */
    public function getItinerairecoop()
    {
        return $this->itinerairecoop;
    }

    /**
     * Set placeRestante
     *
     * @param integer $placeRestante
     * @return Trajet
     */
    public function setPlaceRestante($placeRestante)
    {
        $this->placeRestante = $placeRestante;

        return $this;
    }

    /**
     * Get placeRestante
     *
     * @return integer 
     */
    public function getPlaceRestante()
    {
        return $this->placeRestante;
    }

    /**
     * Set places
     *
     * @param array $places
     * @return Trajet
     */
    public function setPlaces($places)
    {
        $this->places = $places;

        return $this;
    }

    /**
     * Get places
     *
     * @return array 
     */
    public function getPlaces()
    {
        return $this->places;
    }

}
