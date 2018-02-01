<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RoleRepository")
 */
class Role
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
}
