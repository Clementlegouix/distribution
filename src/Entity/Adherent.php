<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Passage;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints\Date;
/**
 * @ORM\Entity(repositoryClass="App\Repository\AdherentRepository")
 */
class Adherent
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $idcarte;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $iddistri;

    /**
     * @ORM\Column(type="date", length=100)
     */
    private $datecreation;

    /**
     * @ORM\Column(type="integer")
     */
    private $ordrePassage;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Passage", mappedBy="adherent")
     */
    private $passages;


    public function __construct()
    {
        $this->passages = new ArrayCollection();
    }

    /**
     * @return Collection|Passage[]
     */
    public function getPassages()
    {
        return $this->passages;
    }

    public function setPassages($passages)
    {
        $this->passages = $passages;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

	public function getIdcarte()
    {
        return $this->idcarte;
    }

    public function setIdcarte($idcarte)
    {
        $this->idcarte = $idcarte;
    }

    public function getIddistri()
    {
        return $this->iddistri;
    }

    public function setIddistri($iddistri)
    {
        $this->iddistri = $iddistri;
    }

    public function getDatecreation()
    {
        return $this->datecreation;
    }

    public function setDatecreation($datecreation)
    {
        $this->datecreation = $datecreation;
    }

    public function getNbPassage()
    {
        return count($this->passages);
    }

    public function setordrePassage($ordrePassage)
    {
        $this->ordrePassage = $ordrePassage;
    }

    public function getValueOrdrePassage()
    {
        return $this->ordrePassage;
    }

    public function getordrePassage()
    {
        //return $this->ordrePassage;
        switch ($this->ordrePassage) {
            case 0:
                return "aperture";
                break;
            case 1:
                return "trash";
                break;
            case 2:
                return "trash-2";
                break;
            default:
                return "circle";
                break;
        }
    }

    public function isCheckPassage()
    {
        $return = true;
        $date = new \Datetime();
        foreach ($this->getPassages() as $pass) 
        {
            if ($pass->getdatepassage()->format('Y-m-d') >= $date->format('Y-m-d') )
            {
                $return = false;
                break;
            }
        }
        return $return;
    }
}
