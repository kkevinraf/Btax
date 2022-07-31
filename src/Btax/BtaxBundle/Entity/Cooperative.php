<?php

namespace Btax\BtaxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cooperative
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Btax\BtaxBundle\Repository\CooperativeRepository")
 */
class Cooperative
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
     * @ORM\Column(name="Nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="Adresse", type="string", length=255)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="Contact", type="string", length=255)
     */
    private $contact;

    /**
     * @var string
     *
     * @ORM\Column(name="Mail", type="string", length=255)
     */
    private $mail;

    /**
     * @var date
     *
     * @ORM\Column(name="Date_inscription", type="date")
     */
    private $dateInscription;

    /**
     * @var string
     *
     * @ORM\Column(name="Logo", type="string", length=255)
     */
    private $logo;

    /**
     * @ORM\OneToOne(targetEntity="Utilisateurs\UtilisateursBundle\Entity\Utilisateurs")
     * @ORM\JoinColumn(nullable=true)
     */
    private $login;

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
     * Set nom
     *
     * @param string $nom
     * @return Cooperative
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
     * Set adresse
     *
     * @param string $adresse
     * @return Cooperative
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set contact
     *
     * @param string $contact
     * @return Cooperative
     */
    public function setContact($contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get contact
     *
     * @return string 
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set mail
     *
     * @param string $mail
     * @return Cooperative
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }


    /**
     * Set logo
     *
     * @param string $logo
     * @return Cooperative
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string 
     */
    public function getLogo()
    {
        return $this->logo;
    }


    public function __toString()
    {
        return $this->nom;
    }


    private $file;

    public function upload($file, $nom)
    {
        $this->file = $file;
        // Si jamais il n'y a pas de fichier (champ facultatif)
        if (null === $this->file) {
            $this->logoCooperative = '';
            return $this->logoCooperative;
        }

        $nom = str_replace(' ', '', $nom);
        // On garde le nom original du fichier de l'internaute
        $name = $nom.'_'.sha1(uniqid(mt_rand(),true)).'.'.$this->file->guessExtension();
        // On déplace le fichier envoyé dans le répertoire de notre choix
        $this->file->move($this->getUploadRootDir(), $name);
        // On sauvegarde le nom de fichier dans notre attribut $url
        return $this->logoCooperative = $name;
    }

    public function getUploadDir()
    {
        // On retourne le chemin relatif vers l'image pour un navigateur
        return 'uploads/logo';
    }
    protected function getUploadRootDir()
    {
        // On retourne le chemin relatif vers l'image pour notre code PHP
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    /**
     * Set dateInscription
     *
     * @param \DateTime $dateInscription
     * @return Cooperative
     */
    public function setDateInscription($dateInscription)
    {
        $this->dateInscription = $dateInscription;

        return $this;
    }

    /**
     * Get dateInscription
     *
     * @return \DateTime 
     */
    public function getDateInscription()
    {
        return $this->dateInscription;
    }

    /**
     * Set login
     *
     * @param \Utilisateurs\UtilisateursBundle\Entity\Utilisateurs $login
     * @return Cooperative
     */
    public function setLogin(\Utilisateurs\UtilisateursBundle\Entity\Utilisateurs $login = null)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return \Utilisateurs\UtilisateursBundle\Entity\Utilisateurs 
     */
    public function getLogin()
    {
        return $this->login;
    }
}
