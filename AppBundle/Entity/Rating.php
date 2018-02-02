<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rating
 *
 * @ORM\Table(name="rating")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RatingRepository")
 */
class Rating
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
     * @ORM\Column(name="rating", type="smallint")
     */
    private $rating;

	/**
     * @var string
     *
	 * @ORM\ManyToOne (targetEntity="Retail", inversedBy="ratings" )
     */
    private $retail;
	
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
     * Set rating
     *
     * @param integer $rating
     *
     * @return Rating
     */
    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Get rating
     *
     * @return int
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Set retail
     *
     * @param \AppBundle\Entity\Retail $retail
     *
     * @return Rating
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
