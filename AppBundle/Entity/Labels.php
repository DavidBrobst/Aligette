<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Labels
 *
 * @ORM\Table(name="labels")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\LabelsRepository")
 */
class Labels
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
     * @ORM\Column(name="labelName", type="string", length=255)
     */
    private $labelName;

    /**
     * @var string
     *
     * @ORM\Column(name="webSite", type="string", length=255, nullable=true)
     */
    private $webSite;

    public function __toString() {
    return $this->labelName;
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
     * Set labelName
     *
     * @param string $labelName
     *
     * @return Labels
     */
    public function setLabelName($labelName)
    {
        $this->labelName = $labelName;

        return $this;
    }

    /**
     * Get labelName
     *
     * @return string
     */
    public function getLabelName()
    {
        return $this->labelName;
    }

    /**
     * Set webSite
     *
     * @param string $webSite
     *
     * @return Labels
     */
    public function setWebSite($webSite)
    {
        $this->webSite = $webSite;

        return $this;
    }

    /**
     * Get webSite
     *
     * @return string
     */
    public function getWebSite()
    {
        return $this->webSite;
    }
}
