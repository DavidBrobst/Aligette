<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * Distribution
 *
 * @ORM\Table(name="distribution")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DistributionRepository")
 */
class Distribution
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
     * @ORM\Column(name="adress", type="string", length=500)
     */
    private $adress;

    /**
     * @var string
     *
     * @ORM\Column(name="zipcode", type="string", length=15)
     */
    private $zipcode;

    /**
     * @var string
     *
     * @ORM\Column(name="County", type="string", length=255)
     */
    private $county;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255)
     */
    private $city;

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
     * @var string
     *
	 * @ORM\ManyToMany (targetEntity="Weekdays")
     */
    private $weekdays;

	/**
     * @var string
     *
	 * @ORM\ManyToOne (targetEntity="Retail", inversedBy="distribution")
     */
    private $retail;
	
 	

	public function __construct()
	{
	$this->weekdays = new	\Doctrine\Common\Collections\ArrayCollection();
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
     * Set adress
     *
     * @param string $adress
     *
     * @return Distribution
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;

        return $this;
    }

    /**
     * Get adress
     *
     * @return string
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * Set zipcode
     *
     * @param string $zipcode
     *
     * @return Distribution
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;

        return $this;
    }

    /**
     * Get zipcode
     *
     * @return string
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * Set county
     *
     * @param string $county
     *
     * @return Distribution
     */
    public function setCounty($county)
    {
        $this->county = $county;

        return $this;
    }

    /**
     * Get county
     *
     * @return string
     */
    public function getCounty()
    {
        return $this->county;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Distribution
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set hour1
     *
     * @param string $hour1
     *
     * @return Distribution
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
     * @return Distribution
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
     * @return Distribution
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
     * @return Distribution
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

    /**
     * Add weekday
     *
     * @param \AppBundle\Entity\Weekdays $weekday
     *
     * @return Distribution
     */
    public function addWeekday(\AppBundle\Entity\Weekdays $weekday)
    {
        $this->weekdays[] = $weekday;

        return $this;
    }

    /**
     * Remove weekday
     *
     * @param \AppBundle\Entity\Weekdays $weekday
     */
    public function removeWeekday(\AppBundle\Entity\Weekdays $weekday)
    {
        $this->weekdays->removeElement($weekday);
    }

    /**
     * Get weekdays
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getWeekdays()
    {
        return $this->weekdays;
    }

    /**
     * Set retail
     *
     * @param \AppBundle\Entity\Retail $retail
     *
     * @return Distribution
     */
    public function setRetail(\AppBundle\Entity\Retail $retail = null)
    {
        $this->retail = $retail;

        return $this;
    }

    /**
     * Get retail
     *
     * @return \AppBundle\Entity\Retail
     */
    public function getRetail()
    {
        return $this->retail;
    }
}
