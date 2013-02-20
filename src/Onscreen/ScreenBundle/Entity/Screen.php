<?php

namespace Onscreen\ScreenBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Screen
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Screen
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
     * @ORM\Column(name="title", type="string", length=128)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="mashine_name", type="string", length=128)
     */
    private $mashine_name;

    /**
     * @var string
     *
     * @ORM\Column(name="matrix", type="string", length=12)
     */
    private $matrix;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_active", type="boolean")
     */
    private $is_active;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $created_at;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime")
     */
    private $updated_at;


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
     * Set title
     *
     * @param string $title
     * @return Screen
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
     * Set mashine_name
     *
     * @param string $mashineName
     * @return Screen
     */
    public function setMashineName($mashineName)
    {
        $this->mashine_name = $mashineName;

        return $this;
    }

    /**
     * Get mashine_name
     *
     * @return string
     */
    public function getMashineName()
    {
        return $this->mashine_name;
    }

    /**
     * Set matrix
     *
     * @param string $matrix
     * @return Screen
     */
    public function setMatrix($matrix)
    {
        $this->matrix = $matrix;

        return $this;
    }

    /**
     * Get matrix
     *
     * @return string
     */
    public function getMatrix()
    {
        return $this->matrix;
    }

    /**
     * Set is_active
     *
     * @param boolean $isActive
     * @return Screen
     */
    public function setIsActive($isActive)
    {
        $this->is_active = $isActive;

        return $this;
    }

    /**
     * Get is_active
     *
     * @return boolean
     */
    public function getIsActive()
    {
        return $this->is_active;
    }

    /**
     * Set created_at
     *
     * @param \DateTime $createdAt
     * @return Screen
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;

        return $this;
    }

    /**
     * Get created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set updated_at
     *
     * @param \DateTime $updatedAt
     * @return Screen
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updated_at = $updatedAt;

        return $this;
    }

    /**
     * Get updated_at
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }
}