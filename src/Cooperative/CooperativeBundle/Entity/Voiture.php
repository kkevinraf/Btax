<?php

namespace Cooperative\CooperativeBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * Voiture
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Cooperative\CooperativeBundle\Repository\VoitureRepository")
 */
class Voiture
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
     * @ORM\Column(name="Immatriculation", type="string", length=255)
     */
    private $immatriculation;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom_proprietaire", type="string", length=255)
     */
    private $nomProprietaire;

    /**
     * @var string
     *
     * @ORM\Column(name="NIF", type="string", length=255)
     */
    private $nIF;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbrPlace", type="integer")
     */
    private $nbrPlace;

    /**
     * @var array
     *
     * @ORM\Column(name="Place", type="array")
     */
    private $place;

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
     * Set immatriculation
     *
     * @param string $immatriculation
     * @return Voiture
     */
    public function setImmatriculation($immatriculation)
    {
        $this->immatriculation = $immatriculation;

        return $this;
    }

    /**
     * Get immatriculation
     *
     * @return string 
     */
    public function getImmatriculation()
    {
        return $this->immatriculation;
    }

    /**
     * Set nomProprietaire
     *
     * @param string $nomProprietaire
     * @return Voiture
     */
    public function setNomProprietaire($nomProprietaire)
    {
        $this->nomProprietaire = $nomProprietaire;

        return $this;
    }

    /**
     * Get nomProprietaire
     *
     * @return string 
     */
    public function getNomProprietaire()
    {
        return $this->nomProprietaire;
    }

    /**
     * Set nIF
     *
     * @param string $nIF
     * @return Voiture
     */
    public function setNIF($nIF)
    {
        $this->nIF = $nIF;

        return $this;
    }

    /**
     * Get nIF
     *
     * @return string 
     */
    public function getNIF()
    {
        return $this->nIF;
    }

    /**
     * Set place
     *
     * @param array $place
     * @return Voiture
     */
    public function setPlace($place)
    {
        $this->place = $place;

        return $this;
    }

    /**
     * Get place
     *
     * @return array 
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Set cooperative
     *
     * @param \Btax\BtaxBundle\Entity\Cooperative $cooperative
     * @return Voiture
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
     * Set nbrPlace
     *
     * @param integer $nbrPlace
     * @return Voiture
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

    public function __toString()
    {
        return $this->immatriculation;
    }
}
