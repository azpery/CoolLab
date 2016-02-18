<?php

namespace CoolLabBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Discussion
 *
 * @ORM\Table(name="discussion")
 * @ORM\Entity
 */
class Discussion
{
    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreation", type="date", nullable=false)
     */
    private $datecreation;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Etat", type="boolean", nullable=false)
     */
    private $etat = '0';

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
     * @ORM\ManyToMany(targetEntity="CoolLabBundle\Entity\Developpeur", mappedBy="iddisc")
     */
    private $iddev;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->iddev = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set description
     *
     * @param string $description
     *
     * @return Discussion
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set datecreation
     *
     * @param \DateTime $datecreation
     *
     * @return Discussion
     */
    public function setDatecreation($datecreation)
    {
        $this->datecreation = $datecreation;

        return $this;
    }

    /**
     * Get datecreation
     *
     * @return \DateTime
     */
    public function getDatecreation()
    {
        return $this->datecreation;
    }

    /**
     * Set etat
     *
     * @param boolean $etat
     *
     * @return Discussion
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return boolean
     */
    public function getEtat()
    {
        return $this->etat;
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
     * Add iddev
     *
     * @param \CoolLabBundle\Entity\Developpeur $iddev
     *
     * @return Discussion
     */
    public function addIddev(\CoolLabBundle\Entity\Developpeur $iddev)
    {
        $this->iddev[] = $iddev;

        return $this;
    }

    /**
     * Remove iddev
     *
     * @param \CoolLabBundle\Entity\Developpeur $iddev
     */
    public function removeIddev(\CoolLabBundle\Entity\Developpeur $iddev)
    {
        $this->iddev->removeElement($iddev);
    }

    /**
     * Get iddev
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIddev()
    {
        return $this->iddev;
    }
}
