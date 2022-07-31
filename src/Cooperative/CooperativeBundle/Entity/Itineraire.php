<?php

namespace Cooperative\CooperativeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Itineraire
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Cooperative\CooperativeBundle\Repository\ItineraireRepository")
 */
class Itineraire
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
     * @ORM\ManyToOne(targetEntity="Btax\BtaxBundle\Entity\Localisation")
     * @ORM\JoinColumn(nullable=true)
     */
    private $depart;

    /**
     * @ORM\ManyToOne(targetEntity="Btax\BtaxBundle\Entity\Localisation")
     * @ORM\JoinColumn(nullable=true)
     */
    private $destination;


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
     * Set depart
     *
     * @param \Btax\BtaxBundle\Entity\Localisation $depart
     * @return Itineraire
     */
    public function setDepart(\Btax\BtaxBundle\Entity\Localisation $depart = null)
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
     * Set destination
     *
     * @param \Btax\BtaxBundle\Entity\Localisation $destination
     * @return Itineraire
     */
    public function setDestination(\Btax\BtaxBundle\Entity\Localisation $destination = null)
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
}
