<?php

namespace Proxies\__CG__\App\Entity\Newsletters;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Users extends \App\Entity\Newsletters\Users implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Newsletters\\Users' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Newsletters\\Users' . "\0" . 'email', '' . "\0" . 'App\\Entity\\Newsletters\\Users' . "\0" . 'created_at', '' . "\0" . 'App\\Entity\\Newsletters\\Users' . "\0" . 'is_rgpd', '' . "\0" . 'App\\Entity\\Newsletters\\Users' . "\0" . 'validation_token', '' . "\0" . 'App\\Entity\\Newsletters\\Users' . "\0" . 'is_valid', '' . "\0" . 'App\\Entity\\Newsletters\\Users' . "\0" . 'newsletters', '' . "\0" . 'App\\Entity\\Newsletters\\Users' . "\0" . 'categories'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Newsletters\\Users' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Newsletters\\Users' . "\0" . 'email', '' . "\0" . 'App\\Entity\\Newsletters\\Users' . "\0" . 'created_at', '' . "\0" . 'App\\Entity\\Newsletters\\Users' . "\0" . 'is_rgpd', '' . "\0" . 'App\\Entity\\Newsletters\\Users' . "\0" . 'validation_token', '' . "\0" . 'App\\Entity\\Newsletters\\Users' . "\0" . 'is_valid', '' . "\0" . 'App\\Entity\\Newsletters\\Users' . "\0" . 'newsletters', '' . "\0" . 'App\\Entity\\Newsletters\\Users' . "\0" . 'categories'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Users $proxy) {
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
    public function getEmail(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail(?string $email): \App\Entity\Newsletters\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt(): ?\DateTimeImmutable
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', []);

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt(\DateTimeImmutable $created_at): \App\Entity\Newsletters\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', [$created_at]);

        return parent::setCreatedAt($created_at);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsRgpd(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsRgpd', []);

        return parent::getIsRgpd();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsRgpd(bool $is_rgpd): \App\Entity\Newsletters\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsRgpd', [$is_rgpd]);

        return parent::setIsRgpd($is_rgpd);
    }

    /**
     * {@inheritDoc}
     */
    public function getValidationToken(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getValidationToken', []);

        return parent::getValidationToken();
    }

    /**
     * {@inheritDoc}
     */
    public function setValidationToken(?string $validation_token): \App\Entity\Newsletters\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setValidationToken', [$validation_token]);

        return parent::setValidationToken($validation_token);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsValid(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsValid', []);

        return parent::getIsValid();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsValid(bool $is_valid): \App\Entity\Newsletters\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsValid', [$is_valid]);

        return parent::setIsValid($is_valid);
    }

    /**
     * {@inheritDoc}
     */
    public function getNewsletters(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNewsletters', []);

        return parent::getNewsletters();
    }

    /**
     * {@inheritDoc}
     */
    public function addNewsletter(\App\Entity\Newsletters\Newsletters $newsletter): \App\Entity\Newsletters\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addNewsletter', [$newsletter]);

        return parent::addNewsletter($newsletter);
    }

    /**
     * {@inheritDoc}
     */
    public function removeNewsletter(\App\Entity\Newsletters\Newsletters $newsletter): \App\Entity\Newsletters\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeNewsletter', [$newsletter]);

        return parent::removeNewsletter($newsletter);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategories(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategories', []);

        return parent::getCategories();
    }

    /**
     * {@inheritDoc}
     */
    public function addCategory(\App\Entity\Newsletters\Categories $category): \App\Entity\Newsletters\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCategory', [$category]);

        return parent::addCategory($category);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCategory(\App\Entity\Newsletters\Categories $category): \App\Entity\Newsletters\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCategory', [$category]);

        return parent::removeCategory($category);
    }

}
