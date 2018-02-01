<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Adherent;
use App\Entity\User;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PassageRepository")
 */
class Passage
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime", length=100)
     */
    private $datepassage;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Adherent", inversedBy="passages")
     * @ORM\JoinColumn(nullable=true)
     */
    private $adherent;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="users")
     * @ORM\JoinColumn(nullable=true)
     */
    private $user;

    public function getId()
    {
        return $this->id;
    }

    public function getDatepassage()
    {
        return $this->datepassage;
    }

    public function setDatepassage($datepassage)
    {
        $this->datepassage = $datepassage;
    }

    public function getAdherent(): Adherent
    {
        return $this->adherent;
    }

    public function setAdherent(Adherent $adherent)
    {
        $this->adherent = $adherent;
    }

    public function getUser(): User
    {
        return $this->user;
    }

    public function setUser(User $user)
    {
        $this->user = $user;
    }
}
