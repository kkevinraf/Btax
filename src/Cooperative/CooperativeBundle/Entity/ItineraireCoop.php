<?php

namespace Cooperative\CooperativeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ItineraireCoop
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Cooperative\CooperativeBundle\Repository\ItineraireCoopRepository")
 */
class ItineraireCoop
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
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;

    /**
     * @ORM\ManyToOne(targetEntity="Btax\BtaxBundle\Entity\Cooperative")
     * @ORM\JoinColumn(nullable=false)
     */
    private $cooperative;

    /**
     * @ORM\ManyToOne(targetEntity="Cooperative\CooperativeBundle\Entity\Place")
     * @ORM\JoinColumn(nullable=true)
     */
    private $place;

    /**
     * @ORM\ManyToOne(targetEntity="Cooperative\CooperativeBundle\Entity\Itineraire")
     * @ORM\JoinColumn(nullable=true)
     */
    private $itineraire;


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
     * Set prix
     *
     * @param float $prix
     * @return ItineraireCoop
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float 
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set cooperative
     *
     * @param \Btax\BtaxBundle\Entity\Cooperative $cooperative
     * @return ItineraireCoop
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

    public function setDefault($cooperative, $place)
    {
        $this->cooperative = $cooperative;
        $this->place = $place;
        return $this;
    }

    /**
     * Set place
     *
     * @param \Cooperative\CooperativeBundle\Entity\Place $place
     * @return ItineraireCoop
     */
    public function setPlace(\Cooperative\CooperativeBundle\Entity\Place $place)
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

    

    /**
     * Set itineraire
     *
     * @param \Cooperative\CooperativeBundle\Entity\Itineraire $itineraire
     * @return ItineraireCoop
     */
    public function setItineraire(\Cooperative\CooperativeBundle\Entity\Itineraire $itineraire = null)
    {
        $this->itineraire = $itineraire;

        return $this;
    }

    /**
     * Get itineraire
     *
     * @return \Cooperative\CooperativeBundle\Entity\Itineraire 
     */
    public function getItineraire()
    {
        return $this->itineraire;
    }
}
