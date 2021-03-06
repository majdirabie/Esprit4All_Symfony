<?php

namespace EspritForAll\BackEndBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
class User extends BaseUser
{

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    public $id;
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     */
    public $nom;
    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255, nullable=true)
     */
    public $prenom;
    /**
     * @var Date
     *
     * @ORM\Column(name="date_naissance", type="date", nullable=true)
     */
    public $dateNaissance;

    /**
     * @var String
     *
     * @ORM\Column(name="cin", type="string", nullable=true)
     */
    public $cin;

    /**
     * @var String
     *
     * @ORM\Column(name="adress", type="string", nullable=true)
     */
    public $adress;



    public function __construct()
    {
        parent::__construct();
    }
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }


    /**
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return array
     */



    /**
     * @return Date
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * @param Date $dateNaissance
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;
    }

    /**
     * @return String
     */
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * @param String $cin
     */
    public function setCin($cin)
    {
        $this->cin = $cin;
    }

    /**
     * @return String
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * @param String $adress
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;
    }



    /**
     * @param string $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function getUserNP(){
        return $this->prenom." ".$this->nom;
    }
}

