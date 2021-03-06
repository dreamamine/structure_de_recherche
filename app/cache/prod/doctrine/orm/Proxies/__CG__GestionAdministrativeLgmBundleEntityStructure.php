<?php

namespace Proxies\__CG__\GestionAdministrative\LgmBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Structure extends \GestionAdministrative\LgmBundle\Entity\Structure implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'GestionAdministrative\\LgmBundle\\Entity\\Structure' . "\0" . 'id', '' . "\0" . 'GestionAdministrative\\LgmBundle\\Entity\\Structure' . "\0" . 'name', '' . "\0" . 'GestionAdministrative\\LgmBundle\\Entity\\Structure' . "\0" . 'nomChef', '' . "\0" . 'GestionAdministrative\\LgmBundle\\Entity\\Structure' . "\0" . 'prenomChef', '' . "\0" . 'GestionAdministrative\\LgmBundle\\Entity\\Structure' . "\0" . 'cinChef', '' . "\0" . 'GestionAdministrative\\LgmBundle\\Entity\\Structure' . "\0" . 'universite', '' . "\0" . 'GestionAdministrative\\LgmBundle\\Entity\\Structure' . "\0" . 'webSite', '' . "\0" . 'GestionAdministrative\\LgmBundle\\Entity\\Structure' . "\0" . 'Etablissement', '' . "\0" . 'GestionAdministrative\\LgmBundle\\Entity\\Structure' . "\0" . 'dateCreation', '' . "\0" . 'GestionAdministrative\\LgmBundle\\Entity\\Structure' . "\0" . 'created', '' . "\0" . 'GestionAdministrative\\LgmBundle\\Entity\\Structure' . "\0" . 'updated', '' . "\0" . 'GestionAdministrative\\LgmBundle\\Entity\\Structure' . "\0" . 'deletedAt');
        }

        return array('__isInitialized__', '' . "\0" . 'GestionAdministrative\\LgmBundle\\Entity\\Structure' . "\0" . 'id', '' . "\0" . 'GestionAdministrative\\LgmBundle\\Entity\\Structure' . "\0" . 'name', '' . "\0" . 'GestionAdministrative\\LgmBundle\\Entity\\Structure' . "\0" . 'nomChef', '' . "\0" . 'GestionAdministrative\\LgmBundle\\Entity\\Structure' . "\0" . 'prenomChef', '' . "\0" . 'GestionAdministrative\\LgmBundle\\Entity\\Structure' . "\0" . 'cinChef', '' . "\0" . 'GestionAdministrative\\LgmBundle\\Entity\\Structure' . "\0" . 'universite', '' . "\0" . 'GestionAdministrative\\LgmBundle\\Entity\\Structure' . "\0" . 'webSite', '' . "\0" . 'GestionAdministrative\\LgmBundle\\Entity\\Structure' . "\0" . 'Etablissement', '' . "\0" . 'GestionAdministrative\\LgmBundle\\Entity\\Structure' . "\0" . 'dateCreation', '' . "\0" . 'GestionAdministrative\\LgmBundle\\Entity\\Structure' . "\0" . 'created', '' . "\0" . 'GestionAdministrative\\LgmBundle\\Entity\\Structure' . "\0" . 'updated', '' . "\0" . 'GestionAdministrative\\LgmBundle\\Entity\\Structure' . "\0" . 'deletedAt');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Structure $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', array($name));

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', array());

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomChef($nomChef)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomChef', array($nomChef));

        return parent::setNomChef($nomChef);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomChef()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomChef', array());

        return parent::getNomChef();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrenomChef($prenomChef)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrenomChef', array($prenomChef));

        return parent::setPrenomChef($prenomChef);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrenomChef()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrenomChef', array());

        return parent::getPrenomChef();
    }

    /**
     * {@inheritDoc}
     */
    public function setCinChef($cinChef)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCinChef', array($cinChef));

        return parent::setCinChef($cinChef);
    }

    /**
     * {@inheritDoc}
     */
    public function getCinChef()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCinChef', array());

        return parent::getCinChef();
    }

    /**
     * {@inheritDoc}
     */
    public function setUniversite($universite)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUniversite', array($universite));

        return parent::setUniversite($universite);
    }

    /**
     * {@inheritDoc}
     */
    public function getUniversite()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUniversite', array());

        return parent::getUniversite();
    }

    /**
     * {@inheritDoc}
     */
    public function setWebSite($webSite)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWebSite', array($webSite));

        return parent::setWebSite($webSite);
    }

    /**
     * {@inheritDoc}
     */
    public function getWebSite()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWebSite', array());

        return parent::getWebSite();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateCreation($dateCreation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateCreation', array($dateCreation));

        return parent::setDateCreation($dateCreation);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateCreation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateCreation', array());

        return parent::getDateCreation();
    }

    /**
     * {@inheritDoc}
     */
    public function getCreated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreated', array());

        return parent::getCreated();
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdated', array());

        return parent::getUpdated();
    }

    /**
     * {@inheritDoc}
     */
    public function setDeletedAt($deletedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDeletedAt', array($deletedAt));

        return parent::setDeletedAt($deletedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function setUser(\GestionAdministrative\LgmBundle\Entity\User $user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', array($user));

        return parent::setUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', array());

        return parent::getUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setEtablissement(\GestionAdministrative\LgmBundle\Entity\Etablissement $etablissement)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEtablissement', array($etablissement));

        return parent::setEtablissement($etablissement);
    }

    /**
     * {@inheritDoc}
     */
    public function getEtablissement()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEtablissement', array());

        return parent::getEtablissement();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreated($created)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreated', array($created));

        return parent::setCreated($created);
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdated($updated)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdated', array($updated));

        return parent::setUpdated($updated);
    }

    /**
     * {@inheritDoc}
     */
    public function getDeletedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeletedAt', array());

        return parent::getDeletedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
    }

}
