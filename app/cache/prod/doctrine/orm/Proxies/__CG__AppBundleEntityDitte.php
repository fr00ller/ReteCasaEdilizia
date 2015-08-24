<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Ditte extends \AppBundle\Entity\Ditte implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', 'categoria', '' . "\0" . 'AppBundle\\Entity\\Ditte' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Ditte' . "\0" . 'idUtente', '' . "\0" . 'AppBundle\\Entity\\Ditte' . "\0" . 'idCategoria', '' . "\0" . 'AppBundle\\Entity\\Ditte' . "\0" . 'ragioneSoc', '' . "\0" . 'AppBundle\\Entity\\Ditte' . "\0" . 'indirizzo', '' . "\0" . 'AppBundle\\Entity\\Ditte' . "\0" . 'cap', '' . "\0" . 'AppBundle\\Entity\\Ditte' . "\0" . 'citta', '' . "\0" . 'AppBundle\\Entity\\Ditte' . "\0" . 'telefono', '' . "\0" . 'AppBundle\\Entity\\Ditte' . "\0" . 'email', '' . "\0" . 'AppBundle\\Entity\\Ditte' . "\0" . 'piva');
        }

        return array('__isInitialized__', 'categoria', '' . "\0" . 'AppBundle\\Entity\\Ditte' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Ditte' . "\0" . 'idUtente', '' . "\0" . 'AppBundle\\Entity\\Ditte' . "\0" . 'idCategoria', '' . "\0" . 'AppBundle\\Entity\\Ditte' . "\0" . 'ragioneSoc', '' . "\0" . 'AppBundle\\Entity\\Ditte' . "\0" . 'indirizzo', '' . "\0" . 'AppBundle\\Entity\\Ditte' . "\0" . 'cap', '' . "\0" . 'AppBundle\\Entity\\Ditte' . "\0" . 'citta', '' . "\0" . 'AppBundle\\Entity\\Ditte' . "\0" . 'telefono', '' . "\0" . 'AppBundle\\Entity\\Ditte' . "\0" . 'email', '' . "\0" . 'AppBundle\\Entity\\Ditte' . "\0" . 'piva');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Ditte $proxy) {
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
    public function setIdUtente($idUtente)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdUtente', array($idUtente));

        return parent::setIdUtente($idUtente);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdUtente()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdUtente', array());

        return parent::getIdUtente();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdCategoria($idCategoria)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdCategoria', array($idCategoria));

        return parent::setIdCategoria($idCategoria);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdCategoria()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdCategoria', array());

        return parent::getIdCategoria();
    }

    /**
     * {@inheritDoc}
     */
    public function setRagioneSoc($ragioneSoc)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRagioneSoc', array($ragioneSoc));

        return parent::setRagioneSoc($ragioneSoc);
    }

    /**
     * {@inheritDoc}
     */
    public function getRagioneSoc()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRagioneSoc', array());

        return parent::getRagioneSoc();
    }

    /**
     * {@inheritDoc}
     */
    public function setIndirizzo($indirizzo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIndirizzo', array($indirizzo));

        return parent::setIndirizzo($indirizzo);
    }

    /**
     * {@inheritDoc}
     */
    public function getIndirizzo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIndirizzo', array());

        return parent::getIndirizzo();
    }

    /**
     * {@inheritDoc}
     */
    public function setCap($cap)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCap', array($cap));

        return parent::setCap($cap);
    }

    /**
     * {@inheritDoc}
     */
    public function getCap()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCap', array());

        return parent::getCap();
    }

    /**
     * {@inheritDoc}
     */
    public function setCitta($citta)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCitta', array($citta));

        return parent::setCitta($citta);
    }

    /**
     * {@inheritDoc}
     */
    public function getCitta()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCitta', array());

        return parent::getCitta();
    }

    /**
     * {@inheritDoc}
     */
    public function setTelefono($telefono)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTelefono', array($telefono));

        return parent::setTelefono($telefono);
    }

    /**
     * {@inheritDoc}
     */
    public function getTelefono()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTelefono', array());

        return parent::getTelefono();
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
    public function setPiva($piva)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPiva', array($piva));

        return parent::setPiva($piva);
    }

    /**
     * {@inheritDoc}
     */
    public function getPiva()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPiva', array());

        return parent::getPiva();
    }

}