<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Student
 *
 * @ORM\Table(name="student")
 * @ORM\Entity
 */
class Student
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prenomStudent", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $prenomstudent = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="nomStudent", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $nomstudent = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="emailStudent", type="string", length=255, nullable=false)
     */
    private $emailstudent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="promoStudent", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $promostudent = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     */
    private $uid;

    /**
     * @var int
     *
     * @ORM\Column(name="anneeAcademiqueStudent", type="integer", nullable=false)
     */
    private $anneeacademiquestudent;

    /**
     * @var string
     *
     * @ORM\Column(name="genderStudent", type="string", length=255, nullable=false)
     */
    private $genderstudent;

    /**
     * @var string
     *
     * @ORM\Column(name="campusStudent", type="string", length=255, nullable=false)
     */
    private $campusstudent;

    /**
     * @var string
     *
     * @ORM\Column(name="etatDossierStudent", type="string", length=255, nullable=false)
     */
    private $etatdossierstudent;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrenomstudent(): ?string
    {
        return $this->prenomstudent;
    }

    public function setPrenomstudent(?string $prenomstudent): self
    {
        $this->prenomstudent = $prenomstudent;

        return $this;
    }

    public function getNomstudent(): ?string
    {
        return $this->nomstudent;
    }

    public function setNomstudent(?string $nomstudent): self
    {
        $this->nomstudent = $nomstudent;

        return $this;
    }

    public function getEmailstudent(): ?string
    {
        return $this->emailstudent;
    }

    public function setEmailstudent(string $emailstudent): self
    {
        $this->emailstudent = $emailstudent;

        return $this;
    }

    public function getPromostudent(): ?string
    {
        return $this->promostudent;
    }

    public function setPromostudent(?string $promostudent): self
    {
        $this->promostudent = $promostudent;

        return $this;
    }

    public function getUid(): ?int
    {
        return $this->uid;
    }

    public function setUid(int $uid): self
    {
        $this->uid = $uid;

        return $this;
    }

    public function getAnneeacademiquestudent(): ?int
    {
        return $this->anneeacademiquestudent;
    }

    public function setAnneeacademiquestudent(int $anneeacademiquestudent): self
    {
        $this->anneeacademiquestudent = $anneeacademiquestudent;

        return $this;
    }

    public function getGenderstudent(): ?string
    {
        return $this->genderstudent;
    }

    public function setGenderstudent(string $genderstudent): self
    {
        $this->genderstudent = $genderstudent;

        return $this;
    }

    public function getCampusstudent(): ?string
    {
        return $this->campusstudent;
    }

    public function setCampusstudent(string $campusstudent): self
    {
        $this->campusstudent = $campusstudent;

        return $this;
    }

    public function getEtatdossierstudent(): ?string
    {
        return $this->etatdossierstudent;
    }

    public function setEtatdossierstudent(string $etatdossierstudent): self
    {
        $this->etatdossierstudent = $etatdossierstudent;

        return $this;
    }


}
