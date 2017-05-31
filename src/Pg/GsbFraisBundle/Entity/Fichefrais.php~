<?php

namespace Pg\GsbFraisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fichefrais
 *
 * @ORM\Table(name="fichefrais", indexes={@ORM\Index(name="idEtat", columns={"idEtat"}), @ORM\Index(name="IDX_92D5AB081D06ADE3", columns={"idVisiteur"})})
 * @ORM\Entity
 */
class Fichefrais
{
    /**
     * @var integer
     *
     * @ORM\Column(name="nbJustificatifs", type="integer", nullable=true)
     */
    private $nbjustificatifs;

    /**
     * @var string
     *
     * @ORM\Column(name="montantValide", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $montantvalide;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateModif", type="date", nullable=true)
     */
    private $datemodif;

    /**
     * @var string
     *
     * @ORM\Column(name="mois", type="string", length=6)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $mois;

    /**
     * @var \Pg\GsbFraisBundle\Entity\Visiteur
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Pg\GsbFraisBundle\Entity\Visiteur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idVisiteur", referencedColumnName="id")
     * })
     */
    private $idvisiteur;

    /**
     * @var \Pg\GsbFraisBundle\Entity\Etat
     *
     * @ORM\ManyToOne(targetEntity="Pg\GsbFraisBundle\Entity\Etat")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idEtat", referencedColumnName="id")
     * })
     */
    private $idetat;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Pg\GsbFraisBundle\Entity\Fraisforfait", mappedBy="idvisiteur")
     */
    private $idfraisforfait;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idfraisforfait = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set nbjustificatifs
     *
     * @param integer $nbjustificatifs
     * @return Fichefrais
     */
    public function setNbjustificatifs($nbjustificatifs)
    {
        $this->nbjustificatifs = $nbjustificatifs;

        return $this;
    }

    /**
     * Get nbjustificatifs
     *
     * @return integer 
     */
    public function getNbjustificatifs()
    {
        return $this->nbjustificatifs;
    }

    /**
     * Set montantvalide
     *
     * @param string $montantvalide
     * @return Fichefrais
     */
    public function setMontantvalide($montantvalide)
    {
        $this->montantvalide = $montantvalide;

        return $this;
    }

    /**
     * Get montantvalide
     *
     * @return string 
     */
    public function getMontantvalide()
    {
        return $this->montantvalide;
    }

    /**
     * Set datemodif
     *
     * @param \DateTime $datemodif
     * @return Fichefrais
     */
    public function setDatemodif($datemodif)
    {
        $this->datemodif = $datemodif;

        return $this;
    }

    /**
     * Get datemodif
     *
     * @return \DateTime 
     */
    public function getDatemodif()
    {
        return $this->datemodif;
    }

    /**
     * Set mois
     *
     * @param string $mois
     * @return Fichefrais
     */
    public function setMois($mois)
    {
        $this->mois = $mois;

        return $this;
    }

    /**
     * Get mois
     *
     * @return string 
     */
    public function getMois()
    {
        return $this->mois;
    }

    /**
     * Set idvisiteur
     *
     * @param \Pg\GsbFraisBundle\Entity\Visiteur $idvisiteur
     * @return Fichefrais
     */
    public function setIdvisiteur(\Pg\GsbFraisBundle\Entity\Visiteur $idvisiteur)
    {
        $this->idvisiteur = $idvisiteur;

        return $this;
    }

    /**
     * Get idvisiteur
     *
     * @return \Pg\GsbFraisBundle\Entity\Visiteur 
     */
    public function getIdvisiteur()
    {
        return $this->idvisiteur;
    }

    /**
     * Set idetat
     *
     * @param \Pg\GsbFraisBundle\Entity\Etat $idetat
     * @return Fichefrais
     */
    public function setIdetat(\Pg\GsbFraisBundle\Entity\Etat $idetat = null)
    {
        $this->idetat = $idetat;

        return $this;
    }

    /**
     * Get idetat
     *
     * @return \Pg\GsbFraisBundle\Entity\Etat 
     */
    public function getIdetat()
    {
        return $this->idetat;
    }

    /**
     * Add idfraisforfait
     *
     * @param \Pg\GsbFraisBundle\Entity\Fraisforfait $idfraisforfait
     * @return Fichefrais
     */
    public function addIdfraisforfait(\Pg\GsbFraisBundle\Entity\Fraisforfait $idfraisforfait)
    {
        $this->idfraisforfait[] = $idfraisforfait;

        return $this;
    }

    /**
     * Remove idfraisforfait
     *
     * @param \Pg\GsbFraisBundle\Entity\Fraisforfait $idfraisforfait
     */
    public function removeIdfraisforfait(\Pg\GsbFraisBundle\Entity\Fraisforfait $idfraisforfait)
    {
        $this->idfraisforfait->removeElement($idfraisforfait);
    }

    /**
     * Get idfraisforfait
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdfraisforfait()
    {
        return $this->idfraisforfait;
    }
}
