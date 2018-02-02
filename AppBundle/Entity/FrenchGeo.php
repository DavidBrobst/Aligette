<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FrenchGeo
 *
 * @ORM\Table(name="french_geo")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FrenchGeoRepository")
 */
class FrenchGeo
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
     * @ORM\Column(name="commune", type="string", length=255)
     */
    private $commune;

   /**
     * @var string
     *
     * @ORM\Column(name="codepostal", type="string", length=255)
     */
    private $codepostal;

    /**
     * @var string
     *
     * @ORM\Column(name="region", type="string", length=255)
     */
    private $region;

    /**
     * @var string
     *
     * @ORM\Column(name="dept", type="string", length=255)
     */
    private $dept;

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=255)
     */
    private $statut;

    /**
     * @var string
     *
     * @ORM\Column(name="superficie", type="string", length=255)
     */
    private $superficie;

    /**
     * @var string
     *
     * @ORM\Column(name="geopoint", type="string", length=255)
     */
    private $geopoint;

    /**
     * @var string
     *
     * @ORM\Column(name="population", type="string", length=255)
     */
    private $population;


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
     * Set commune
     *
     * @param string $commune
     *
     * @return FrenchGeo
     */
    public function setCommune($commune)
    {
        $this->commune = $commune;

        return $this;
    }

    /**
     * Get commune
     *
     * @return string
     */
    public function getCommune()
    {
        return $this->commune;
    }

    /**
     * Set region
     *
     * @param string $region
     *
     * @return FrenchGeo
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set dept
     *
     * @param string $dept
     *
     * @return FrenchGeo
     */
    public function setDept($dept)
    {
        $this->dept = $dept;

        return $this;
    }

    /**
     * Get dept
     *
     * @return string
     */
    public function getDept()
    {
        return $this->dept;
    }

    /**
     * Set statut
     *
     * @param string $statut
     *
     * @return FrenchGeo
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return string
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set geopoint
     *
     * @param string $geopoint
     *
     * @return FrenchGeo
     */
    public function setGeopoint($geopoint)
    {
        $this->geopoint = $geopoint;

        return $this;
    }

    /**
     * Get geopoint
     *
     * @return string
     */
    public function getGeopoint()
    {
        return $this->geopoint;
    }

    /**
     * Set codepostal
     *
     * @param string $codepostal
     *
     * @return FrenchGeo
     */
    public function setCodepostal($codepostal)
    {
        $this->codepostal = $codepostal;

        return $this;
    }

    /**
     * Get codepostal
     *
     * @return string
     */
    public function getCodepostal()
    {
        return $this->codepostal;
    }

    /**
     * Set superficie
     *
     * @param string $superficie
     *
     * @return FrenchGeo
     */
    public function setSuperficie($superficie)
    {
        $this->superficie = $superficie;

        return $this;
    }

    /**
     * Get superficie
     *
     * @return string
     */
    public function getSuperficie()
    {
        return $this->superficie;
    }

    /**
     * Set population
     *
     * @param string $population
     *
     * @return FrenchGeo
     */
    public function setPopulation($population)
    {
        $this->population = $population;

        return $this;
    }

    /**
     * Get population
     *
     * @return string
     */
    public function getPopulation()
    {
        return $this->population;
    }
}
