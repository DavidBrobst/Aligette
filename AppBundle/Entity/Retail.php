<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Retail
 *
 * @ORM\Table(name="retail")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RetailRepository")
 */
class Retail
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
     * @ORM\Column(name="adress", type="string", length=255)
     */
    private $adress;
	
   /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255)
     */
    private $city;
	
    /**
     * @var string
     *
     * @ORM\Column(name="zipCode", type="string", length=15)
     */
    private $zipCode;

    /**
     * @var string
     *
     * @ORM\Column(name="email1", type="string", length=255)
     */
    private $email1;
	
    /**
     * @var string
     *
     * @ORM\Column(name="email2", type="string", length=255)
     */
    private $email2;

    /**
     * @var string
     *
     * @ORM\Column( name = "PhoneNumber1", type="string", length=255)
     */
    private $phoneNumber1;
   
    /**
     * @var string
     *
     * @ORM\Column( name = "PhoneNumber2", type="string", length=255)
     */
    private $phoneNumber2;

	/**
     * @var string
     *
     * @ORM\Column( name = "website", type="string", length=255)
     */
    private $website;
	
    /**
     * @var string
     *
     * @ORM\Column(name="farmer", type="string", length=255)
     */
    private $farmer;

    /**
     * @var string
     *
     * @ORM\Column(name="founded", type="string", length=255)
     */
    private $founded;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

	/**
     * @var string
     *
     * * @ORM\ManyToMany (targetEntity="ProductCat")
     */
    private $productCats;
	
	/**
     * @var string
     *
     * @ORM\ManyToMany (targetEntity="Labels", cascade={"persist"})
     */
    private $labels;
	
    
	/**
     * @var string
     *
	 * @ORM\OneToMany (targetEntity="Distribution", mappedBy="retail", cascade={"persist"} )
     */
    private $distributions;
	
	/**
     * @ORM\OneToMany(targetEntity="Rating", mappedBy="retail")
     */
    private $ratings;
 	

	public function __construct()
	{
	$this->distributions = new	\Doctrine\Common\Collections\ArrayCollection();
	$this->ratings = new	\Doctrine\Common\Collections\ArrayCollection();
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
     * @return Retail
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
     * Set openHours
     *
     * @param string $openHours
     *
     * @return Retail
     */
    public function setOpenHours($openHours)
    {
        $this->openHours = $openHours;

        return $this;
    }

    /**
     * Get openHours
     *
     * @return string
     */
    public function getOpenHours()
    {
        return $this->openHours;
    }


    /**
     * Set farmer
     *
     * @param string $farmer
     *
     * @return Retail
     */
    public function setFarmer($farmer)
    {
        $this->farmer = $farmer;

        return $this;
    }

    /**
     * Get farmer
     *
     * @return string
     */
    public function getFarmer()
    {
        return $this->farmer;
    }

    /**
     * Add openHour
     *
     * @param \AppBundle\Entity\OpenHours $openHour
     *
     * @return Retail
     */
    public function addOpenHour(\AppBundle\Entity\OpenHours $openHour)
    {
        $this->openHours[] = $openHour;

        return $this;
    }

    /**
     * Remove openHour
     *
     * @param \AppBundle\Entity\OpenHours $openHour
     */
    public function removeOpenHour(\AppBundle\Entity\OpenHours $openHour)
    {
        $this->openHours->removeElement($openHour);
    }

    /**
     * Set zipCode
     *
     * @param string $zipCode
     *
     * @return Retail
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    /**
     * Get zipCode
     *
     * @return string
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }



    /**
     * Add label
     *
     * @param \AppBundle\Entity\Labels $label
     *
     * @return Retail
     */
    public function addLabel(\AppBundle\Entity\Labels $label)
    {
        $this->labels[] = $label;

        return $this;
    }

    /**
     * Remove label
     *
     * @param \AppBundle\Entity\Labels $label
     */
    public function removeLabel(\AppBundle\Entity\Labels $label)
    {
        $this->labels->removeElement($label);
    }

    /**
     * Get labels
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLabels()
    {
        return $this->labels;
    }


    /**
     * Set email1
     *
     * @param string $email1
     *
     * @return Retail
     */
    public function setEmail1($email1)
    {
        $this->email1 = $email1;

        return $this;
    }

    /**
     * Get email1
     *
     * @return string
     */
    public function getEmail1()
    {
        return $this->email1;
    }

    /**
     * Set email2
     *
     * @param string $email2
     *
     * @return Retail
     */
    public function setEmail2($email2)
    {
        $this->email2 = $email2;

        return $this;
    }

    /**
     * Get email2
     *
     * @return string
     */
    public function getEmail2()
    {
        return $this->email2;
    }

    /**
     * Get phoneNumber1
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPhoneNumber1()
    {
        return $this->phoneNumber1;
    }

    /**
     * Get phoneNumber2
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPhoneNumber2()
    {
        return $this->phoneNumber2;
    }

    /**
     * Set phoneNumber1
     *
     * @param string $phoneNumber1
     *
     * @return Retail
     */
    public function setPhoneNumber1($phoneNumber1)
    {
        $this->phoneNumber1 = $phoneNumber1;

        return $this;
    }

    /**
     * Set phoneNumber2
     *
     * @param string $phoneNumber2
     *
     * @return Retail
     */
    public function setPhoneNumber2($phoneNumber2)
    {
        $this->phoneNumber2 = $phoneNumber2;

        return $this;
    }


    /**
     * Add productCat
     *
     * @param \AppBundle\Entity\ProductCat $productCat
     *
     * @return Retail
     */
    public function addProductCat(\AppBundle\Entity\ProductCat $productCat)
    {
        $this->productCats[] = $productCat;

        return $this;
    }

    /**
     * Remove productCat
     *
     * @param \AppBundle\Entity\ProductCat $productCat
     */
    public function removeProductCat(\AppBundle\Entity\ProductCat $productCat)
    {
        $this->productCats->removeElement($productCat);
    }

    /**
     * Get productCats
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProductCats()
    {
        return $this->productCats;
    }

    /**
     * Add distribution
     *
     * @param \AppBundle\Entity\Distribution $distribution
     *
     * @return Retail
     */
    public function addDistribution(\AppBundle\Entity\Distribution $distribution)
    {
        $this->distributions[] = $distribution;

        return $this;
    }

    /**
     * Remove distribution
     *
     * @param \AppBundle\Entity\Distribution $distribution
     */
    public function removeDistribution(\AppBundle\Entity\Distribution $distribution)
    {
        $this->distributions->removeElement($distribution);
    }

    /**
     * Get distributions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDistributions()
    {
        return $this->distributions;
    }

    /**
     * Set founded
     *
     * @param string $founded
     *
     * @return Retail
     */
    public function setFounded($founded)
    {
        $this->founded = $founded;

        return $this;
    }

    /**
     * Get founded
     *
     * @return string
     */
    public function getFounded()
    {
        return $this->founded;
    }

    /**
     * Set website
     *
     * @param string $website
     *
     * @return Retail
     */
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get website
     *
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Retail
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
     * Add rating
     *
     * @param \AppBundle\Entity\Rating $rating
     *
     * @return Retail
     */
    public function addRating(\AppBundle\Entity\Rating $rating)
    {
        $this->ratings[] = $rating;

        return $this;
    }

    /**
     * Remove rating
     *
     * @param \AppBundle\Entity\Rating $rating
     */
    public function removeRating(\AppBundle\Entity\Rating $rating)
    {
        $this->ratings->removeElement($rating);
    }

    /**
     * Get ratings
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRatings()
    {
        return $this->ratings;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Retail
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
}
