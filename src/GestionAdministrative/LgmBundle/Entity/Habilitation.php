<?php

namespace GestionAdministrative\LgmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo; // gedmo annotations
use Gedmo\SoftDeleteable\Traits\SoftDeleteableEntity;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Habilitation
 *
 * @ORM\Table(name="habilitation")
 * @ORM\Entity(repositoryClass="GestionAdministrative\LgmBundle\Repository\HabilitationRepository")
 * @Gedmo\SoftDeleteable(fieldName="deletedAt", timeAware=false)
 */
class Habilitation
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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="first_date_registered", type="date", nullable=true)
     */
    private $firstDateRegistered;
    
     /**
     * @var string
     *
     * @ORM\Column(name="directeur", type="string", length=255)
     */
    private $directeur;
    
    /**
     * @ORM\ManyToOne(targetEntity="GestionAdministrative\LgmBundle\Entity\Etablissement")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Etablissement;
    
    
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
     * Get id
     *
     * @return integer 
     */
    
        
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Habilitation
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set firstDateRegistered
     *
     * @param \DateTime $firstDateRegistered
     * @return Habilitation
     */
    public function setFirstDateRegistered($firstDateRegistered)
    {
        $this->firstDateRegistered = $firstDateRegistered;

        return $this;
    }

    /**
     * Get firstDateRegistered
     *
     * @return \DateTime 
     */
    public function getFirstDateRegistered()
    {
        return $this->firstDateRegistered;
    }

    /**
     * Set directeur
     *
     * @param string $directeur
     * @return Habilitation
     */
    public function setDirecteur($directeur)
    {
        $this->directeur = $directeur;

        return $this;
    }

    /**
     * Get directeur
     *
     * @return string 
     */
    public function getDirecteur()
    {
        return $this->directeur;
    }

    
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
     * @return Habilitation
     */
    public function setDeletedAt($deletedAt)
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }

    
    /**
     * Set Etablissement
     *
     * @param \GestionAdministrative\LgmBundle\Entity\Etablissement $etablissement
     * @return Habilitation
     */
    public function setEtablissement(\GestionAdministrative\LgmBundle\Entity\Etablissement $etablissement)
    {
        $this->Etablissement = $etablissement;

        return $this;
    }

    /**
     * Get Etablissement
     *
     * @return \GestionAdministrative\LgmBundle\Entity\Etablissement 
     */
    public function getEtablissement()
    {
        return $this->Etablissement;
    }
    

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Habilitation
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
     * @return Habilitation
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
    
     /**
     * toString
     * @return string
     */
     public function __toString()
    {
       return $this->getTitle();
    }
    
    /**
     * @var \DateTime
     */
    private $deletedat;

    /**
     * @var \GestionAdministrative\LgmBundle\Entity\Etablissement
     */
    private $etablissement;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $user;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->user = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add user
     *
     * @param \GestionAdministrative\LgmBundle\Entity\User $user
     * @return Habilitation
     */
    public function addUser(\GestionAdministrative\LgmBundle\Entity\User $user)
    {
        $this->user[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \GestionAdministrative\LgmBundle\Entity\User $user
     */
    public function removeUser(\GestionAdministrative\LgmBundle\Entity\User $user)
    {
        $this->user->removeElement($user);
    }

    /**
     * Get user
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUser()
    {
        return $this->user;
    }
}
