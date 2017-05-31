<?php

namespace Pg\GsbFraisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tablettes
 *
 * @ORM\Table(name="tablettes")
 * @ORM\Entity
 */
class Tablettes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="capacité", type="integer", nullable=false)
     */
    private $capacité;

    /**
     * @var string
     *
     * @ORM\Column(name="marque", type="string", length=255, nullable=false)
     */
    private $marque;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set capacité
     *
     * @param integer $capacité
     * @return Tablettes
     */
    public function setCapacité($capacité)
    {
        $this->capacité = $capacité;

        return $this;
    }

    /**
     * Get capacité
     *
     * @return integer 
     */
    public function getCapacité()
    {
        return $this->capacité;
    }

    /**
     * Set marque
     *
     * @param string $marque
     * @return Tablettes
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get marque
     *
     * @return string 
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
