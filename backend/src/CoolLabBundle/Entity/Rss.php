<?php

namespace CoolLabBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rss
 *
 * @ORM\Table(name="RSS", indexes={@ORM\Index(name="idProj", columns={"idProj"})})
 * @ORM\Entity
 */
class Rss
{
    /**
     * @var string
     *
     * @ORM\Column(name="title", type="text", length=65535, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pubDate", type="date", nullable=false)
     */
    private $pubdate;

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="text", length=65535, nullable=false)
     */
    private $link;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \CoolLabBundle\Entity\Projet
     *
     * @ORM\ManyToOne(targetEntity="CoolLabBundle\Entity\Projet")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idProj", referencedColumnName="id")
     * })
     */
    private $idproj;



    /**
     * Set title
     *
     * @param string $title
     *
     * @return Rss
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Rss
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
     * Set pubdate
     *
     * @param \DateTime $pubdate
     *
     * @return Rss
     */
    public function setPubdate($pubdate)
    {
        $this->pubdate = $pubdate;

        return $this;
    }

    /**
     * Get pubdate
     *
     * @return \DateTime
     */
    public function getPubdate()
    {
        return $this->pubdate;
    }

    /**
     * Set link
     *
     * @param string $link
     *
     * @return Rss
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
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
     * Set idproj
     *
     * @param \CoolLabBundle\Entity\Projet $idproj
     *
     * @return Rss
     */
    public function setIdproj(\CoolLabBundle\Entity\Projet $idproj = null)
    {
        $this->idproj = $idproj;

        return $this;
    }

    /**
     * Get idproj
     *
     * @return \CoolLabBundle\Entity\Projet
     */
    public function getIdproj()
    {
        return $this->idproj;
    }
}
