<?php

namespace GestionAdministrative\LgmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cadre_equivalant
 *
 * @ORM\Table(name="cadre_equivalant")
 * @ORM\Entity(repositoryClass="GestionAdministrative\LgmBundle\Repository\Cadre_equivalantRepository")
 */
class Cadre_equivalant
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
     * @ORM\Column(name="qualite", type="string", length=255)
     */
    private $qualite;

    /**
     * @var int
     *
     * @ORM\Column(name="CIN_CEquivalant", type="integer")
     */
    private $cINCEquivalant;

   /**
     * @var string
     * 
     * @ORM\Column(name="nom", type="string", nullable=true)
     */
    private $nom;

    /**
     * @var string
     * 
     * @ORM\Column(name="prenom", type="string", nullable=true)
     */
    private $prenom;
   
    /**
     * @var string
     * 
     * @ORM\Column(name="codeStructure", type="string", nullable=true)
     */
    private $codeStructure;

     /**
     * @var string
     * 
     * @ORM\Column(name="etab", type="string", nullable=true)
     */
    private $etab;
   
    /**
     * @var string $dateNaiss
     *
     * @ORM\Column(name="date_naissance", type="date", nullable=true)
     */
    private $date_naissance;

    /**
     * @var string
     * 
     * @ORM\Column(name="lieu_naissance", type="string", nullable=true)
     */
    private $lieu_naissance;

    /**
     * @var int
     * 
     * @ORM\Column(name="tel_mob", type="integer", nullable=true)
     */
    private $tel_mob;

    /**
     * @var int
     * 
     *@ORM\Column(name="tel_fixe", type="integer", nullable=true)
     */
    private $tel_fixe;

    /**
     * @var string
     * 
     * @ORM\Column(name="e_mail", type="string", nullable=true)
     */
    private $e_mail;

    /**
     * @var string
     * 
     * @ORM\Column(name="dernier_diplome_obtenu", type="string", nullable=true)
     */
    private $dernier_diplome_obtenu;

    /**
     * @var \DateTime
     * 
     * @ORM\Column(name="date_dernier_dip_obtenu", type="date", nullable=true)
     */
    private $date_dernier_dip_obtenu;

    /**
     * @var string
     * 
     * @ORM\Column(name="etabDepObtenu", type="string", nullable=true)
     */
    private $etabDepObtenu;

  
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set qualit�
     *
     * @param string $qualit�
     * @return Cadre_equivalant
     */
    public function setQualite($qualite)
    {
        $this->qualite = $qualite;

        return $this;
    }

    /**
     * Get qualit�
     *
     * @return string 
     */
    public function getQualite()
    {
        return $this->qualite;
    }

    /**
     * Set cINCEquivalant
     *
     * @param integer $cINCEquivalant
     * @return Cadre_equivalant
     */
    public function setCINCEquivalant($cINCEquivalant)
    {
        $this->cINCEquivalant = $cINCEquivalant;

        return $this;
    }

    /**
     * Get cINCEquivalant
     *
     * @return integer 
     */
    public function getCINCEquivalant()
    {
        return $this->cINCEquivalant;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Cadre_equivalant
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Cadre_equivalant
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set codeStructure
     *
     * @param string $codeStructure
     * @return Cadre_equivalant
     */
    public function setCodeStructure($codeStructure)
    {
        $this->codeStructure = $codeStructure;

        return $this;
    }

    /**
     * Get codeStructure
     *
     * @return string 
     */
    public function getCodeStructure()
    {
        return $this->codeStructure;
    }

    /**
     * Set etab
     *
     * @param string $etab
     * @return Cadre_equivalant
     */
    public function setEtab($etab)
    {
        $this->etab = $etab;

        return $this;
    }

    /**
     * Get etab
     *
     * @return string 
     */
    public function getEtab()
    {
        return $this->etab;
    }

    /**
     * Set date_naissance
     *
     * @param \DateTime $dateNaissance
     * @return Cadre_equivalant
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->date_naissance = $dateNaissance;

        return $this;
    }

    /**
     * Get date_naissance
     *
     * @return \DateTime 
     */
    public function getDateNaissance()
    {
        return $this->date_naissance;
    }

    /**
     * Set lieu_naissance
     *
     * @param string $lieuNaissance
     * @return Cadre_equivalant
     */
    public function setLieuNaissance($lieuNaissance)
    {
        $this->lieu_naissance = $lieuNaissance;

        return $this;
    }

    /**
     * Get lieu_naissance
     *
     * @return string 
     */
    public function getLieuNaissance()
    {
        return $this->lieu_naissance;
    }

    /**
     * Set tel_mob
     *
     * @param integer $telMob
     * @return Cadre_equivalant
     */
    public function setTelMob($telMob)
    {
        $this->tel_mob = $telMob;

        return $this;
    }

    /**
     * Get tel_mob
     *
     * @return integer 
     */
    public function getTelMob()
    {
        return $this->tel_mob;
    }

    /**
     * Set tel_fixe
     *
     * @param integer $telFixe
     * @return Cadre_equivalant
     */
    public function setTelFixe($telFixe)
    {
        $this->tel_fixe = $telFixe;

        return $this;
    }

    /**
     * Get tel_fixe
     *
     * @return integer 
     */
    public function getTelFixe()
    {
        return $this->tel_fixe;
    }

    /**
     * Set e_mail
     *
     * @param string $eMail
     * @return Cadre_equivalant
     */
    public function setEMail($eMail)
    {
        $this->e_mail = $eMail;

        return $this;
    }

    /**
     * Get e_mail
     *
     * @return string 
     */
    public function getEMail()
    {
        return $this->e_mail;
    }

    /**
     * Set dernier_diplome_obtenu
     *
     * @param string $dernierDiplomeObtenu
     * @return Cadre_equivalant
     */
    public function setDernierDiplomeObtenu($dernierDiplomeObtenu)
    {
        $this->dernier_diplome_obtenu = $dernierDiplomeObtenu;

        return $this;
    }

    /**
     * Get dernier_diplome_obtenu
     *
     * @return string 
     */
    public function getDernierDiplomeObtenu()
    {
        return $this->dernier_diplome_obtenu;
    }

    /**
     * Set date_dernier_dip_obtenu
     *
     * @param \DateTime $dateDernierDipObtenu
     * @return Cadre_equivalant
     */
    public function setDateDernierDipObtenu($dateDernierDipObtenu)
    {
        $this->date_dernier_dip_obtenu = $dateDernierDipObtenu;

        return $this;
    }

    /**
     * Get date_dernier_dip_obtenu
     *
     * @return \DateTime 
     */
    public function getDateDernierDipObtenu()
    {
        return $this->date_dernier_dip_obtenu;
    }

    /**
     * Set etabDepObtenu
     *
     * @param string $etabDepObtenu
     * @return Cadre_equivalant
     */
    public function setEtabDepObtenu($etabDepObtenu)
    {
        $this->etabDepObtenu = $etabDepObtenu;

        return $this;
    }

    /**
     * Get etabDepObtenu
     *
     * @return string 
     */
    public function getEtabDepObtenu()
    {
        return $this->etabDepObtenu;
    }
}
