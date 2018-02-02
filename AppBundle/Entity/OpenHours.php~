<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OpenHours
 *
 * @ORM\Table(name="open_hours")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OpenHoursRepository")
 */
class OpenHours
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
     * @var string
     *
     * @ORM\Column(name="WeekDay", type="string", length=8)
     */
    private $weekDay;

    /**
     * @var string
     *
     * @ORM\Column(name="Hour1", type="string", length=5)
     */
    private $hour1;

    /**
     * @var string
     *
     * @ORM\Column(name="Hour2", type="string", length=5, nullable=true)
     */
    private $hour2;

    /**
     * @var string
     *
     * @ORM\Column(name="Hour3", type="string", length=5, nullable=true)
     */
    private $hour3;

    /**
     * @var string
     *
     * @ORM\Column(name="Hour4", type="string", length=5)
     */
    private $hour4;


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
     * Set weekDay
     *
     * @param string $weekDay
     *
     * @return OpenHours
     */
    public function setWeekDay($weekDay)
    {
        $this->weekDay = $weekDay;

        return $this;
    }

    /**
     * Get weekDay
     *
     * @return string
     */
    public function getWeekDay()
    {
        return $this->weekDay;
    }

    /**
     * Set hour1
     *
     * @param string $hour1
     *
     * @return OpenHours
     */
    public function setHour1($hour1)
    {
        $this->hour1 = $hour1;

        return $this;
    }

    /**
     * Get hour1
     *
     * @return string
     */
    public function getHour1()
    {
        return $this->hour1;
    }

    /**
     * Set hour2
     *
     * @param string $hour2
     *
     * @return OpenHours
     */
    public function setHour2($hour2)
    {
        $this->hour2 = $hour2;

        return $this;
    }

    /**
     * Get hour2
     *
     * @return string
     */
    public function getHour2()
    {
        return $this->hour2;
    }

    /**
     * Set hour3
     *
     * @param string $hour3
     *
     * @return OpenHours
     */
    public function setHour3($hour3)
    {
        $this->hour3 = $hour3;

        return $this;
    }

    /**
     * Get hour3
     *
     * @return string
     */
    public function getHour3()
    {
        return $this->hour3;
    }

    /**
     * Set hour4
     *
     * @param string $hour4
     *
     * @return OpenHours
     */
    public function setHour4($hour4)
    {
        $this->hour4 = $hour4;

        return $this;
    }

    /**
     * Get hour4
     *
     * @return string
     */
    public function getHour4()
    {
        return $this->hour4;
    }
}
