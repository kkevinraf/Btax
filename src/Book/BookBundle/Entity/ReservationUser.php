<?php

namespace Book\BookBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReservationUser
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Book\BookBundle\Repository\ReservationUserRepository")
 */
class ReservationUser
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
     * @ORM\ManyToOne(targetEntity="Book\BookBundle\Entity\Reservation")
     * @ORM\JoinColumn(nullable=false)
     */
    private $reservation;

    /**
     * @ORM\ManyToOne(targetEntity="Utilisateurs\UtilisateursBundle\Entity\Utilisateurs")
     * @ORM\JoinColumn(nullable=false)
     */
    private $utilisateurs;


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
     * Set reservation
     *
     * @param \Book\BookBundle\Entity\Reservation $reservation
     * @return ReservationUser
     */
    public function setReservation(\Book\BookBundle\Entity\Reservation $reservation)
    {
        $this->reservation = $reservation;

        return $this;
    }

    /**
     * Get reservation
     *
     * @return \Book\BookBundle\Entity\Reservation 
     */
    public function getReservation()
    {
        return $this->reservation;
    }

    /**
     * Set utilisateurs
     *
     * @param \Utilisateurs\UtilisateursBundle\Entity\Utilisateurs $utilisateurs
     * @return ReservationUser
     */
    public function setUtilisateurs(\Utilisateurs\UtilisateursBundle\Entity\Utilisateurs $utilisateurs)
    {
        $this->utilisateurs = $utilisateurs;

        return $this;
    }

    /**
     * Get utilisateurs
     *
     * @return \Utilisateurs\UtilisateursBundle\Entity\Utilisateurs 
     */
    public function getUtilisateurs()
    {
        return $this->utilisateurs;
    }
}
