<?php

namespace Cooperative\CooperativeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Type_place
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Cooperative\CooperativeBundle\Repository\PlaceRepository")
 */
class Place
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
     * @var string
     *
     * @ORM\Column(name="Type_place", type="string", length=255)
     */
    private $typePlace;

    /**
     * @var string
     *
     * @ORM\Column(name="Couleur", type="string", length=255)
     */
    private $couleur;

    /**
     * @ORM\ManyToOne(targetEntity="Btax\BtaxBundle\Entity\Cooperative")
     * @ORM\JoinColumn(nullable=false)
     */
    private $cooperative;


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
     * Set typePlace
     *
     * @param string $typePlace
     * @return Type_place
     */
    public function setTypePlace($typePlace)
    {
        $this->typePlace = $typePlace;

        return $this;
    }

    /**
     * Get typePlace
     *
     * @return string 
     */
    public function getTypePlace()
    {
        return $this->typePlace;
    }

    /**
     * Set couleur
     *
     * @param string $couleur
     * @return Type_place
     */
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;

        return $this;
    }

    /**
     * Get couleur
     *
     * @return string 
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * Set cooperative
     *
     * @param \Btax\BtaxBundle\Entity\Cooperative $cooperative
     * @return Type_place
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


    public function __toString()
    {
        return $this->typePlace;
    }
}
