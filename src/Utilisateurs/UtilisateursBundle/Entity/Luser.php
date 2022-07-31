<?php

namespace Utilisateurs\UtilisateursBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * luser
 *
 * @ORM\Table(name="luser")
 * @ORM\Entity(repositoryClass="Utilisateurs\UtilisateursBundle\Repository\LuserRepository")
 */
class Luser
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
    * @ORM\OneToOne(targetEntity="Utilisateurs\UtilisateursBundle\Entity\Utilisateurs", cascade={"persist"})
    */
    private $user;

    /**
    * @ORM\ManyToOne(targetEntity="Btax\BtaxBundle\Entity\Cooperative", cascade={"persist"})
    */
    private $owner;

    /**
     * Set user
     *
     * @param \Utilisateurs\UtilisateursBundle\Entity\Utilisateurs $user
     * @return Luser
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

   

    /**
     * Set owner
     *
     * @param \Btax\BtaxBundle\Entity\Cooperative $owner
     * @return Luser
     */
    public function setOwner(\Btax\BtaxBundle\Entity\Cooperative $owner = null)
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * Get owner
     *
     * @return \Btax\BtaxBundle\Entity\Cooperative 
     */
    public function getOwner()
    {
        return $this->owner;
    }
}
