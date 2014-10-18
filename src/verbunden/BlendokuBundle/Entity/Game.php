<?php

namespace verbunden\BlendokuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use verbunden\BlendokuBundle\Model\GameInterface;
use verbunden\BlendokuBundle\Model\LevelInterface;
use verbunden\BlendokuBundle\Model\UserInterface;

/**
 * Gamedatabase
 *
 * @ORM\Entity
 * @ORM\Table(name="`game`")
 * @author Benjamin Brandt
 * @version 1.0
 */
class Game implements GameInterface {

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="User", inversedBy="id", cascade={"persist"})
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=false)
     * @author Benjamin Brandt
     * @version 1.0
     * @var User who played the game
     * */
    private $user;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Level", inversedBy="id", cascade={"persist"})
     * @ORM\JoinColumn(name="level_id", referencedColumnName="id", nullable=false)
     * @author Benjamin Brandt
     * @version 1.0
     * @var Level that the gamer has played
     * */
    private $level;

    /**
     * @ORM\Column(type="string", nullable=true)
     * @author Benjamin Brandt
     * @version 1.0
     * @var start DateTime time of the game
     */
    private $starttime;

    /**
     * @ORM\Column(type="string", nullable=true)
     * @author Benjamin Brandt
     * @version 1.0
     * @var end DateTime time of the game
     */
    private $endtime;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @author Benjamin Brandt
     * @version 1.0
     * @var integer
     */
    private $score;
    
    /**
     * get property $id
     *
     * @author Benjamin Brandt 2014
     * @version 1.0
     * @return int 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * get property $user
     *
     * @author Benjamin Brandt 2014
     * @version 1.0
     * @return User 
     */
    public function getUser() {
        return $this->user;
    }

    /**
     * Set starttime
     *
     * @author Benjamin Brandt 2014
     * @version 1.0
     * @param string unixtime $timestamp
     * @return Game
     */
    public function setStarttime($timestamp) {
        $this->starttime = $timestamp;
        return $this;
    }

    /**
     * Get starttime
     *
     * @author Benjamin Brandt 2014
     * @version 1.0
     * @return string unixtime   
     */
    public function getStarttime() {
        return $this->starttime;
    }

    /**
     * Set endtime
     *
     * @author Benjamin Brandt 2014
     * @version 1.0
     * @param string unixtime $timestamp
     * @return Game
     */
    public function setEndtime($timestamp) {
        $this->endtime = $timestamp;

        return $this;
    }

    /**
     * Get endtime
     *
     * @author Benjamin Brandt 2014
     * @version 1.0
     * @return string unixtime 
     */
    public function getEndtime() {
        return $this->endtime;
    }

    /**
     * Set user
     *
     * @author Benjamin Brandt 2014
     * @version 1.0
     * @param \verbunden\BlendokuBundle\Entity\User $user
     * @return Game
     */
    public function setUser($user) {
        $this->user = $user;

        return $this;
    }

    /**
     * Set level
     *
     * @author Benjamin Brandt 2014
     * @version 1.0
     * @param \verbunden\BlendokuBundle\Entity\Level $level
     * @return Game
     */
    public function setLevel($level) {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @author Benjamin Brandt 2014
     * @version 1.0
     * @return \verbunden\BlendokuBundle\Entity\Level 
     */
    public function getLevel() {
        return $this->level;
    }

    /**
     * Set score
     *
     * @author Benjamin Brandt 2014
     * @version 1.0
     * @param integer $score
     * @return Score
     */
    public function setScore($score) {
        $this->score = $score;

        return $this;
    }

    /**
     * Generate score
     *
     * @author Benjamin Brandt 2014
     * @version 1.0
     * @param integer $complexity
     * @return Level
     */
    public function setGenScore($starttime, $endtime) {
        $score = 1;
        $this->score = $score;

        return $this;
    }

    /**
     * Get score
     *
     * @author Benjamin Brandt 2014
     * @version 1.0
     * @return integer 
     */
    public function getScore() {
        return $this->score;
    }

}
