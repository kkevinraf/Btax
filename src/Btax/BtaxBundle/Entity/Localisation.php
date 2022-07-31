<?php

namespace Btax\BtaxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Localisation
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Btax\BtaxBundle\Repository\LocalisationRepository")
 */
class Localisation
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
     * @ORM\Column(name="Localisation", type="string", length=255)
     */
    private $localisation;

    /**
     * @var string
     *
     * @ORM\Column(name="Photo", type="string", length=255)
     */
    private $photo;


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
     * Set localisation
     *
     * @param string $localisation
     * @return Localisation
     */
    public function setLocalisation($localisation)
    {
        $this->localisation = $localisation;

        return $this;
    }

    /**
     * Get localisation
     *
     * @return string 
     */
    public function getLocalisation()
    {
        return $this->localisation;
    }

    /**
     * Set photo
     *
     * @param string $photo
     * @return Localisation
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string 
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    public function __toString()
    {
        return $this->localisation;
    }


    private $file;

    public function upload($file, $nom)
    {
        $this->file = $file;
        // Si jamais il n'y a pas de fichier (champ facultatif)
        if (null === $this->file) {
            $this->photo = '';
            return $this->photo;
        }

        $nom = str_replace(' ', '', $nom);
        // On garde le nom original du fichier de l'internaute
        $name = $nom.'_'.sha1(uniqid(mt_rand(),true)).'.'.$this->file->guessExtension();
        // On déplace le fichier envoyé dans le répertoire de notre choix
        $this->file->move($this->getUploadRootDir(), $name);
        // On sauvegarde le nom de fichier dans notre attribut $url
        return $this->photo = $name;
    }

    public function getUploadDir()
    {
        // On retourne le chemin relatif vers l'image pour un navigateur
        return 'uploads/localisation';
    }
    protected function getUploadRootDir()
    {
        // On retourne le chemin relatif vers l'image pour notre code PHP
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }
}
