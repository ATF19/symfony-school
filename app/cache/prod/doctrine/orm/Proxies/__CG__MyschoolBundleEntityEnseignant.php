<?php

namespace Proxies\__CG__\My\schoolBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Enseignant extends \My\schoolBundle\Entity\Enseignant implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'My\\schoolBundle\\Entity\\Enseignant' . "\0" . 'id', '' . "\0" . 'My\\schoolBundle\\Entity\\Enseignant' . "\0" . 'nom', '' . "\0" . 'My\\schoolBundle\\Entity\\Enseignant' . "\0" . 'prenom', '' . "\0" . 'My\\schoolBundle\\Entity\\Enseignant' . "\0" . 'date', '' . "\0" . 'My\\schoolBundle\\Entity\\Enseignant' . "\0" . 'lieu', '' . "\0" . 'My\\schoolBundle\\Entity\\Enseignant' . "\0" . 'adresse', '' . "\0" . 'My\\schoolBundle\\Entity\\Enseignant' . "\0" . 'tel', '' . "\0" . 'My\\schoolBundle\\Entity\\Enseignant' . "\0" . 'email', '' . "\0" . 'My\\schoolBundle\\Entity\\Enseignant' . "\0" . 'cin', '' . "\0" . 'My\\schoolBundle\\Entity\\Enseignant' . "\0" . 'datecin', '' . "\0" . 'My\\schoolBundle\\Entity\\Enseignant' . "\0" . 'obs', '' . "\0" . 'My\\schoolBundle\\Entity\\Enseignant' . "\0" . 'genre', '' . "\0" . 'My\\schoolBundle\\Entity\\Enseignant' . "\0" . 'Specialite');
        }

        return array('__isInitialized__', '' . "\0" . 'My\\schoolBundle\\Entity\\Enseignant' . "\0" . 'id', '' . "\0" . 'My\\schoolBundle\\Entity\\Enseignant' . "\0" . 'nom', '' . "\0" . 'My\\schoolBundle\\Entity\\Enseignant' . "\0" . 'prenom', '' . "\0" . 'My\\schoolBundle\\Entity\\Enseignant' . "\0" . 'date', '' . "\0" . 'My\\schoolBundle\\Entity\\Enseignant' . "\0" . 'lieu', '' . "\0" . 'My\\schoolBundle\\Entity\\Enseignant' . "\0" . 'adresse', '' . "\0" . 'My\\schoolBundle\\Entity\\Enseignant' . "\0" . 'tel', '' . "\0" . 'My\\schoolBundle\\Entity\\Enseignant' . "\0" . 'email', '' . "\0" . 'My\\schoolBundle\\Entity\\Enseignant' . "\0" . 'cin', '' . "\0" . 'My\\schoolBundle\\Entity\\Enseignant' . "\0" . 'datecin', '' . "\0" . 'My\\schoolBundle\\Entity\\Enseignant' . "\0" . 'obs', '' . "\0" . 'My\\schoolBundle\\Entity\\Enseignant' . "\0" . 'genre', '' . "\0" . 'My\\schoolBundle\\Entity\\Enseignant' . "\0" . 'Specialite');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Enseignant $proxy) {
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
    public function getGenre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGenre', array());

        return parent::getGenre();
    }

    /**
     * {@inheritDoc}
     */
    public function setGenre($genre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGenre', array($genre));

        return parent::setGenre($genre);
    }

    /**
     * {@inheritDoc}
     */
    public function getSpecialite()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSpecialite', array());

        return parent::getSpecialite();
    }

    /**
     * {@inheritDoc}
     */
    public function setSpecialite($Specialite)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSpecialite', array($Specialite));

        return parent::setSpecialite($Specialite);
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
    public function setNom($nom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', array($nom));

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getNom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', array());

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrenom($prenom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrenom', array($prenom));

        return parent::setPrenom($prenom);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrenom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrenom', array());

        return parent::getPrenom();
    }

    /**
     * {@inheritDoc}
     */
    public function setDate($date)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDate', array($date));

        return parent::setDate($date);
    }

    /**
     * {@inheritDoc}
     */
    public function getDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDate', array());

        return parent::getDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setLieu($lieu)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLieu', array($lieu));

        return parent::setLieu($lieu);
    }

    /**
     * {@inheritDoc}
     */
    public function getLieu()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLieu', array());

        return parent::getLieu();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdresse($adresse)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdresse', array($adresse));

        return parent::setAdresse($adresse);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdresse()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdresse', array());

        return parent::getAdresse();
    }

    /**
     * {@inheritDoc}
     */
    public function setTel($tel)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTel', array($tel));

        return parent::setTel($tel);
    }

    /**
     * {@inheritDoc}
     */
    public function getTel()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTel', array());

        return parent::getTel();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', array($email));

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', array());

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setCin($cin)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCin', array($cin));

        return parent::setCin($cin);
    }

    /**
     * {@inheritDoc}
     */
    public function getCin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCin', array());

        return parent::getCin();
    }

    /**
     * {@inheritDoc}
     */
    public function setDatecin($datecin)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDatecin', array($datecin));

        return parent::setDatecin($datecin);
    }

    /**
     * {@inheritDoc}
     */
    public function getDatecin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDatecin', array());

        return parent::getDatecin();
    }

    /**
     * {@inheritDoc}
     */
    public function setObs($obs)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setObs', array($obs));

        return parent::setObs($obs);
    }

    /**
     * {@inheritDoc}
     */
    public function getObs()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getObs', array());

        return parent::getObs();
    }

}