<?php

namespace GestionAdministrative\LgmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo; // gedmo annotations
use Gedmo\SoftDeleteable\Traits\SoftDeleteableEntity;

use FOS\UserBundle\Model\User as BaseUser;

/**
 * Doctorant
 *
 * @ORM\Table(name="doctorant")
 * @ORM\Entity(repositoryClass="GestionAdministrative\LgmBundle\Repository\DoctorantRepository")
 * @Gedmo\SoftDeleteable(fieldName="deletedAt", timeAware=false)
 */





class Doctorant extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected  $id;

    /**
     * @var string
     *
     * @ORM\Column(name="grade", type="string", length=255)
     */
    protected  $grade;
   /**
     * @var int
     * 
     * @ORM\Column(name="cINDoctorant", type="integer", nullable=false)
     */
    protected  $cINDoctorant;

    /**
     * @ORM\Column(name="nom", type="string", nullable=false)
     */
    protected  $nom;

    /**
     * @var string
     * 
     * @ORM\Column(name="prenom", type="string", nullable=true)
     */
    protected  $prenom;

    /**
     * @var string
     * 
     * @ORM\Column(name="nomJeuneFille", type="string", nullable=true)
     */
    protected  $nomJeuneFille;

    /**
     * @var string $dateNaiss
     *
     * @ORM\Column(name="dateNaiss", type="date", nullable=true)
     */
    protected  $dateNaiss;

    /**
     * @var string
     * 
     * @ORM\Column(name="lieuNaiss", type="string", nullable=true)
     */
    protected  $lieuNaiss;

    /**
     * @var string
     * 
     * @ORM\Column(name="sexe", type="string", nullable=true)
     */
    protected  $sexe;

    /**
     * @var int
     * 
     * @ORM\Column(name="telMob", type="integer", nullable=true)
     */
    protected  $telMob;

    /**
     * @var int
     * 
     *@ORM\Column(name="telFixe", type="integer", nullable=true)
     */
    protected  $telFixe;

    /**
     * @var string
     * 
     * @ORM\Column(name="eMail", type="string", nullable=true)
     */
    protected  $eMail;

    /**
     * @var string
     * 
     * @ORM\Column(name="dernierDepObtenu", type="string", nullable=true)
     */
    protected  $dernierDepObtenu;

    /**
     * @var \DateTime
     * 
     * @ORM\Column(name="dateDepObtenu", type="date", nullable=true)
     */
    protected  $dateDepObtenu;

    /**
     * @var string
     * 
     * @ORM\Column(name="etabDepObtenu", type="string", nullable=true)
     */
    protected  $etabDepObtenu;

    /**
     * @var string
     * 
     * @ORM\Column(name="codeStructure", type="string", nullable=true)
     */
    protected  $codeStructure;

    /**
     * @var string
     * 
     * @ORM\Column(name="intituleSujet", type="string", nullable=true)
     */
    protected  $intituleSujet;

    /**
     * @var int
     * 
     * @ORM\Column(name="tauxAvancement", type="integer", nullable=true)
     */
    protected  $tauxAvancement;

    /**
     * @var \DateTime
     * 
     * @ORM\Column(name="anneePremierInscrip", type="date", nullable=true)
     */
    protected  $anneePremierInscrip;

    /**
     * @var string
     * 
     * @ORM\Column(name="etbInscrip", type="string", nullable=true)
     */
    protected  $etbInscrip;

    /**
     * @var string
     * 
     * @ORM\Column(name="etabInscrip2", type="string", nullable=true)
     */
    protected  $etabInscrip2;

    
   /**
     * @var int
     * @ORM\Column(name="cinEncad", type="integer", nullable=false)
     * 
     */
	
    private $cinEncad;
    
    /** 
      * @ORM\ManyToOne(targetEntity="Enseignant_Chercheur", inversedBy="doctorant") 
      * 
      */
    private $encadreur;
    
	
	
       
         
    
    /**
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    private $created;

    /**
     * @ORM\Column(type="datetime")
     * @Gedmo\Timestampable(on="update")
     */
    private $updated;
    
    /**
     * @ORM\Column(name="deletedAt", type="datetime", nullable=true)
     */
    private $deletedAt;
    

   
    
    
    
    
    
    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    
    /**
     * Get updated
     *
     * @return \DateTime 
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set deletedAt
     *
     * @param \DateTime $deletedAt
     * @return Doctorant
     */
    public function setDeletedAt($deletedAt)
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }
    /**
     * Set cINDoctorant
     *
     * @param integer $cINDoctorant
     * @return doctorant
     */
    public function setCINDoctorant($cINDoctorant)
    {
        $this->cINDoctorant = $cINDoctorant;

        return $this;
    }

    /**
     * Get cINDoctorant
     *
     * @return integer 
     */
    public function getCINDoctorant()
    {
        return $this->cINDoctorant;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return doctorant
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
     * @return doctorant
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
     * Set nomJeuneFille
     *
     * @param string $nomJeuneFille
     * @return doctorant
     */
    public function setNomJeuneFille($nomJeuneFille)
    {
        $this->nomJeuneFille = $nomJeuneFille;

        return $this;
    }

    /**
     * Get nomJeuneFille
     *
     * @return string 
     */
    public function getNomJeuneFille()
    {
        return $this->nomJeuneFille;
    }

    /**
     * Set dateNaiss
     *
     * @param \DateTime $dateNaiss
     * @return doctorant
     */
    public function setDateNaiss($dateNaiss)
    {
        $this->dateNaiss = $dateNaiss;

        return $this;
    }

    /**
     * Get dateNaiss
     *
     * @return \DateTime 
     */
    public function getDateNaiss()
    {
        return $this->dateNaiss;
    }

    /**
     * Set lieuNaiss
     *
     * @param string $lieuNaiss
     * @return doctorant
     */
    public function setLieuNaiss($lieuNaiss)
    {
        $this->lieuNaiss = $lieuNaiss;

        return $this;
    }

    /**
     * Get lieuNaiss
     *
     * @return string 
     */
    public function getLieuNaiss()
    {
        return $this->lieuNaiss;
    }

    /**
     * Set sexe
     *
     * @param string $sexe
     * @return doctorant
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return string 
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set telMob
     *
     * @param string $telMob
     * @return doctorant
     */
    public function setTelMob($telMob)
    {
        $this->telMob = $telMob;

        return $this;
    }

    /**
     * Get telMob
     *
     * @return string 
     */
    public function getTelMob()
    {
        return $this->telMob;
    }

    /**
     * Set telFixe
     *
     * @param string $telFixe
     * @return doctorant
     */
    public function setTelFixe($telFixe)
    {
        $this->telFixe = $telFixe;

        return $this;
    }

    /**
     * Get telFixe
     *
     * @return string 
     */
    public function getTelFixe()
    {
        return $this->telFixe;
    }

    /**
     * Set eMail
     *
     * @param string $eMail
     * @return doctorant
     */
    public function setEMail($eMail)
    {
        $this->eMail = $eMail;

        return $this;
    }

    /**
     * Get eMail
     *
     * @return string 
     */
    public function getEMail()
    {
        return $this->eMail;
    }

    /**
     * Set dernierDepObtenu
     *
     * @param string $dernierDepObtenu
     * @return doctorant
     */
    public function setDernierDepObtenu($dernierDepObtenu)
    {
        $this->dernierDepObtenu = $dernierDepObtenu;

        return $this;
    }

    /**
     * Get dernierDepObtenu
     *
     * @return string 
     */
    public function getDernierDepObtenu()
    {
        return $this->dernierDepObtenu;
    }

    /**
     * Set dateDepObtenu
     *
     * @param \DateTime $dateDepObtenu
     * @return doctorant
     */
    public function setDateDepObtenu($dateDepObtenu)
    {
        $this->dateDepObtenu = $dateDepObtenu;

        return $this;
    }

    /**
     * Get dateDepObtenu
     *
     * @return \DateTime 
     */
    public function getDateDepObtenu()
    {
        return $this->dateDepObtenu;
    }

    /**
     * Set etabDepObtenu
     *
     * @param string $etabDepObtenu
     * @return doctorant
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

    /**
     * Set codeStructure
     *
     * @param string $codeStructure
     * @return doctorant
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
     * Set intituleSujet
     *
     * @param string $intituleSujet
     * @return doctorant
     */
    public function setIntituleSujet($intituleSujet)
    {
        $this->intituleSujet = $intituleSujet;

        return $this;
    }

    /**
     * Get intituleSujet
     *
     * @return string 
     */
    public function getIntituleSujet()
    {
        return $this->intituleSujet;
    }

    /**
     * Set tauxAvancement
     *
     * @param integer $tauxAvancement
     * @return doctorant
     */
    public function setTauxAvancement($tauxAvancement)
    {
        $this->tauxAvancement = $tauxAvancement;

        return $this;
    }

    /**
     * Get tauxAvancement
     *
     * @return integer 
     */
    public function getTauxAvancement()
    {
        return $this->tauxAvancement;
    }

    /**
     * Set anneePremierInscrip
     *
     * @param \DateTime $anneePremierInscrip
     * @return doctorant
     */
    public function setAnneePremierInscrip($anneePremierInscrip)
    {
        $this->anneePremierInscrip = $anneePremierInscrip;

        return $this;
    }

    /**
     * Get anneePremierInscrip
     *
     * @return \DateTime 
     */
    public function getAnneePremierInscrip()
    {
        return $this->anneePremierInscrip;
    }

    /**
     * Set etbInscrip
     *
     * @param string $etbInscrip
     * @return doctorant
     */
    public function setEtbInscrip($etbInscrip)
    {
        $this->etbInscrip = $etbInscrip;

        return $this;
    }

    /**
     * Get etbInscrip
     *
     * @return string 
     */
    public function getEtbInscrip()
    {
        return $this->etbInscrip;
    }

    /**
     * Set etabInscrip2
     *
     * @param string $etabInscrip2
     * @return doctorant
     */
    public function setEtabInscrip2($etabInscrip2)
    {
        $this->etabInscrip2 = $etabInscrip2;

        return $this;
    }

    /**
     * Get etabInscrip2
     *
     * @return string 
     */
    public function getEtabInscrip2()
    {
        return $this->etabInscrip2;
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

    /**
     * Set grade
     *
     * @param string $grade
     * @return Doctorant
     */
    public function setGrade($grade)
    {
        $this->grade = $grade;

        return $this;
    }

    /**
     * Get grade
     *
     * @return string 
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set cinEncad
     *
     * @param integer $cinEncad
     * @return Doctorant
     */
    public function setCinEncad($cinEncad)
    {
        $this->cinEncad = $cinEncad;

        return $this;
    }

    /**
     * Get cinEncad
     *
     * @return integer 
     */
    public function getCinEncad()
    {
        return $this->cinEncad;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Doctorant
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     * @return Doctorant
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get deletedAt
     *
     * @return \DateTime 
     */
    public function getDeletedAt()
    {
        return $this->deletedAt;
    }

     
    
    public function __toString()
    {
      
        return $this->getNom();
        
    }
    
    
    

  

    /**
     * Set encadreur
     *
     * @param \GestionAdministrative\LgmBundle\Entity\Enseignant_Chercheur $encadreur
     * @return Doctorant
     */
    public function setEncadreur(\GestionAdministrative\LgmBundle\Entity\Enseignant_Chercheur $encadreur = null)
    {
        $this->encadreur = $encadreur;

        return $this;
    }

    /**
     * Get encadreur
     *
     * @return \GestionAdministrative\LgmBundle\Entity\Enseignant_Chercheur 
     */
    public function getEncadreur()
    {
        return $this->encadreur;
    }
    


}
