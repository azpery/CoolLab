<?php

namespace CoolLabBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Developpeur
 *
 * @ORM\Table(name="developpeur")
 * @ORM\Entity
 */
class Developpeur
{
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="text", length=65535, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="text", length=65535, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="text", length=65535, nullable=false)
     */
    private $photo;

    /**
     * @var string
     *
     * @ORM\Column(name="mdp", type="text", length=65535, nullable=false)
     */
    private $mdp;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="CoolLabBundle\Entity\Projet", inversedBy="iddev")
     * @ORM\JoinTable(name="travaille",
     *   joinColumns={
     *     @ORM\JoinColumn(name="idDev", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="idProj", referencedColumnName="id")
     *   }
     * )
     */
    private $idproj;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="CoolLabBundle\Entity\Discussion", inversedBy="iddev")
     * @ORM\JoinTable(name="repond",
     *   joinColumns={
     *     @ORM\JoinColumn(name="idDev", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="idDisc", referencedColumnName="id")
     *   }
     * )
     */
    private $iddisc;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="CoolLabBundle\Entity\Ticket", inversedBy="iddev")
     * @ORM\JoinTable(name="affecte",
     *   joinColumns={
     *     @ORM\JoinColumn(name="idDev", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="idTick", referencedColumnName="id")
     *   }
     * )
     */
    private $idtick;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idproj = new \Doctrine\Common\Collections\ArrayCollection();
        $this->iddisc = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idtick = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Developpeur
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
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Developpeur
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return Developpeur
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

    /**
     * Set mdp
     *
     * @param string $mdp
     *
     * @return Developpeur
     */
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;

        return $this;
    }

    /**
     * Get mdp
     *
     * @return string
     */
    public function getMdp()
    {
        return $this->mdp;
    }

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
     * Add idproj
     *
     * @param \CoolLabBundle\Entity\Projet $idproj
     *
     * @return Developpeur
     */
    public function addIdproj(\CoolLabBundle\Entity\Projet $idproj)
    {
        $this->idproj[] = $idproj;

        return $this;
    }

    /**
     * Remove idproj
     *
     * @param \CoolLabBundle\Entity\Projet $idproj
     */
    public function removeIdproj(\CoolLabBundle\Entity\Projet $idproj)
    {
        $this->idproj->removeElement($idproj);
    }

    /**
     * Get idproj
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdproj()
    {
        return $this->idproj;
    }

    /**
     * Add iddisc
     *
     * @param \CoolLabBundle\Entity\Discussion $iddisc
     *
     * @return Developpeur
     */
    public function addIddisc(\CoolLabBundle\Entity\Discussion $iddisc)
    {
        $this->iddisc[] = $iddisc;

        return $this;
    }

    /**
     * Remove iddisc
     *
     * @param \CoolLabBundle\Entity\Discussion $iddisc
     */
    public function removeIddisc(\CoolLabBundle\Entity\Discussion $iddisc)
    {
        $this->iddisc->removeElement($iddisc);
    }

    /**
     * Get iddisc
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIddisc()
    {
        return $this->iddisc;
    }

    /**
     * Add idtick
     *
     * @param \CoolLabBundle\Entity\Ticket $idtick
     *
     * @return Developpeur
     */
    public function addIdtick(\CoolLabBundle\Entity\Ticket $idtick)
    {
        $this->idtick[] = $idtick;

        return $this;
    }

    /**
     * Remove idtick
     *
     * @param \CoolLabBundle\Entity\Ticket $idtick
     */
    public function removeIdtick(\CoolLabBundle\Entity\Ticket $idtick)
    {
        $this->idtick->removeElement($idtick);
    }

    /**
     * Get idtick
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdtick()
    {
        return $this->idtick;
    }
}
