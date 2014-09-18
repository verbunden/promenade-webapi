<?php
// src/verbunden/BlendokuBundle/Entity/Level.php

namespace verbunden\BlendokuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="level")
 */
class Level
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\OneToMany(targetEntity="Game", mappedBy="level", cascade={"ALL"})
     * @var integer
     */
    private $id;

    /**
     * @ORM\Column(type="array")
     * @var array
     */
    private $startgrid;

	/**
     * @ORM\Column(type="array")
     * @var array
     */
    private $grid;

    /**
     * @ORM\Column(type="integer")
     * @var integer
     */
    private $complexity;
	
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
     * Set startgrid
     *
     * @param array $startgrid
     * @return Level
     */
    public function setStartgrid($startgrid)
    {
        $this->startgrid = $startgrid;

        return $this;
    }

    /**
     * Get startgrid
     *
     * @return array 
     */
    public function getStartgrid()
    {
        return $this->startgrid;
    }

    /**
     * Set grid
     *
     * @param array $grid
     * @return Level
     */
    public function setGrid($grid)
    {
        $this->grid = $grid;

        return $this;
    }

    /**
     * Get grid
     *
     * @return array 
     */
    public function getGrid()
    {
        return $this->grid;
    }

    /**
     * Set complexity
     *
     * @param integer $complexity
     * @return Level
     */
    public function setComplexity($complexity)
    {
        $this->complexity = $complexity;

        return $this;
    }

    /**
     * Get complexity
     *
     * @return integer 
     */
    public function getComplexity()
    {
        return $this->complexity;
    }
}