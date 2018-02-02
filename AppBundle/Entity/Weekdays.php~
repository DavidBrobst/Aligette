<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Weekdays
 *
 * @ORM\Table(name="weekdays")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\WeekdaysRepository")
 */
class Weekdays
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="internationnalId", type="integer")
     */
    private $internationnalId;

    /**
     * @var string
     *
     * @ORM\Column(name="days", type="string", length=20)
     */
    private $days;


    public function __toString() {
    return $this->days;
	}
    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set days
     *
     * @param string $days
     *
     * @return Weekdays
     */
    public function setDays($days)
    {
        $this->days = $days;

        return $this;
    }

    /**
     * Get days
     *
     * @return string
     */
    public function getDays()
    {
        return $this->days;
    }


    /**
     * Set internationnalId
     *
     * @param integer $internationnalId
     *
     * @return Weekdays
     */
    public function setInternationnalId($internationnalId)
    {
        $this->internationnalId = $internationnalId;

        return $this;
    }

    /**
     * Get internationnalId
     *
     * @return integer
     */
    public function getInternationnalId()
    {
        return $this->internationnalId;
    }
}
