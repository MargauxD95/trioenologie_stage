<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Profile extends \App\Entity\Profile implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Profile' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Profile' . "\0" . 'lastName', '' . "\0" . 'App\\Entity\\Profile' . "\0" . 'firstName', '' . "\0" . 'App\\Entity\\Profile' . "\0" . 'phoneNumber', '' . "\0" . 'App\\Entity\\Profile' . "\0" . 'address', '' . "\0" . 'App\\Entity\\Profile' . "\0" . 'address2', '' . "\0" . 'App\\Entity\\Profile' . "\0" . 'zipcode', '' . "\0" . 'App\\Entity\\Profile' . "\0" . 'city', '' . "\0" . 'App\\Entity\\Profile' . "\0" . 'updatedAt', '' . "\0" . 'App\\Entity\\Profile' . "\0" . 'user', '' . "\0" . 'App\\Entity\\Profile' . "\0" . 'status'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Profile' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Profile' . "\0" . 'lastName', '' . "\0" . 'App\\Entity\\Profile' . "\0" . 'firstName', '' . "\0" . 'App\\Entity\\Profile' . "\0" . 'phoneNumber', '' . "\0" . 'App\\Entity\\Profile' . "\0" . 'address', '' . "\0" . 'App\\Entity\\Profile' . "\0" . 'address2', '' . "\0" . 'App\\Entity\\Profile' . "\0" . 'zipcode', '' . "\0" . 'App\\Entity\\Profile' . "\0" . 'city', '' . "\0" . 'App\\Entity\\Profile' . "\0" . 'updatedAt', '' . "\0" . 'App\\Entity\\Profile' . "\0" . 'user', '' . "\0" . 'App\\Entity\\Profile' . "\0" . 'status'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Profile $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getLastName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastName', []);

        return parent::getLastName();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastName(?string $lastName): \App\Entity\Profile
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastName', [$lastName]);

        return parent::setLastName($lastName);
    }

    /**
     * {@inheritDoc}
     */
    public function getFirstName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFirstName', []);

        return parent::getFirstName();
    }

    /**
     * {@inheritDoc}
     */
    public function setFirstName(?string $firstName): \App\Entity\Profile
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFirstName', [$firstName]);

        return parent::setFirstName($firstName);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhoneNumber(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhoneNumber', []);

        return parent::getPhoneNumber();
    }

    /**
     * {@inheritDoc}
     */
    public function setPhoneNumber(?string $phoneNumber): \App\Entity\Profile
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhoneNumber', [$phoneNumber]);

        return parent::setPhoneNumber($phoneNumber);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddress(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddress', []);

        return parent::getAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddress(?string $address): \App\Entity\Profile
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddress', [$address]);

        return parent::setAddress($address);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddress2(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddress2', []);

        return parent::getAddress2();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddress2(?string $address2): \App\Entity\Profile
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddress2', [$address2]);

        return parent::setAddress2($address2);
    }

    /**
     * {@inheritDoc}
     */
    public function getZipcode(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getZipcode', []);

        return parent::getZipcode();
    }

    /**
     * {@inheritDoc}
     */
    public function setZipcode(?string $zipcode): \App\Entity\Profile
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setZipcode', [$zipcode]);

        return parent::setZipcode($zipcode);
    }

    /**
     * {@inheritDoc}
     */
    public function getCity(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCity', []);

        return parent::getCity();
    }

    /**
     * {@inheritDoc}
     */
    public function setCity(?string $city): \App\Entity\Profile
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCity', [$city]);

        return parent::setCity($city);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt(): ?\DateTimeImmutable
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', []);

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt(?\DateTimeImmutable $updatedAt): \App\Entity\Profile
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', [$updatedAt]);

        return parent::setUpdatedAt($updatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser(): ?\App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', []);

        return parent::getUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser(?\App\Entity\User $user): \App\Entity\Profile
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', [$user]);

        return parent::setUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatus(): ?\App\Entity\Status
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatus', []);

        return parent::getStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatus(?\App\Entity\Status $status): \App\Entity\Profile
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatus', [$status]);

        return parent::setStatus($status);
    }

}
