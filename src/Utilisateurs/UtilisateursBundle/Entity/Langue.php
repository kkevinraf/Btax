<?php

namespace Utilisateurs\UtilisateursBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Langue
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Utilisateurs\UtilisateursBundle\Repository\LangueRepository")
 */
class Langue
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
     * @ORM\Column(name="langue", type="string", length=255)
     */
    private $langue;

    /**
    * @ORM\OneToOne(targetEntity="Utilisateurs\UtilisateursBundle\Entity\Utilisateurs", cascade={"persist"})
    */
    private $user;


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
     * Set langue
     *
     * @param string $langue
     * @return Langue
     */
    public function setLangue($langue)
    {
        $this->langue = $langue;

        return $this;
    }

    /**
     * Get langue
     *
     * @return string 
     */
    public function getLangue()
    {
        return $this->langue;
    }

    /**
     * Set user
     *
     * @param \Utilisateurs\UtilisateursBundle\Entity\Utilisateurs $user
     * @return Langue
     */
    public function setUser(\Utilisateurs\UtilisateursBundle\Entity\Utilisateurs $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Utilisateurs\UtilisateursBundle\Entity\Utilisateurs 
     */
    public function getUser()
    {
        return $this->user;
    }
}
