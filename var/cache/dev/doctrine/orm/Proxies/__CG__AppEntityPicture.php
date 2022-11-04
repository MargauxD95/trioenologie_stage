<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Picture extends \App\Entity\Picture implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Picture' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Picture' . "\0" . 'title', '' . "\0" . 'App\\Entity\\Picture' . "\0" . 'altText', '' . "\0" . 'App\\Entity\\Picture' . "\0" . 'pictureFile', '' . "\0" . 'App\\Entity\\Picture' . "\0" . 'width', '' . "\0" . 'App\\Entity\\Picture' . "\0" . 'height', '' . "\0" . 'App\\Entity\\Picture' . "\0" . 'legend', '' . "\0" . 'App\\Entity\\Picture' . "\0" . 'articles', '' . "\0" . 'App\\Entity\\Picture' . "\0" . 'occasions', '' . "\0" . 'App\\Entity\\Picture' . "\0" . 'galleries', '' . "\0" . 'App\\Entity\\Picture' . "\0" . 'carouselPictures', '' . "\0" . 'App\\Entity\\Picture' . "\0" . 'name', '' . "\0" . 'App\\Entity\\Picture' . "\0" . 'pictureFileH200', '' . "\0" . 'App\\Entity\\Picture' . "\0" . 'pictureFileH400'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Picture' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Picture' . "\0" . 'title', '' . "\0" . 'App\\Entity\\Picture' . "\0" . 'altText', '' . "\0" . 'App\\Entity\\Picture' . "\0" . 'pictureFile', '' . "\0" . 'App\\Entity\\Picture' . "\0" . 'width', '' . "\0" . 'App\\Entity\\Picture' . "\0" . 'height', '' . "\0" . 'App\\Entity\\Picture' . "\0" . 'legend', '' . "\0" . 'App\\Entity\\Picture' . "\0" . 'articles', '' . "\0" . 'App\\Entity\\Picture' . "\0" . 'occasions', '' . "\0" . 'App\\Entity\\Picture' . "\0" . 'galleries', '' . "\0" . 'App\\Entity\\Picture' . "\0" . 'carouselPictures', '' . "\0" . 'App\\Entity\\Picture' . "\0" . 'name', '' . "\0" . 'App\\Entity\\Picture' . "\0" . 'pictureFileH200', '' . "\0" . 'App\\Entity\\Picture' . "\0" . 'pictureFileH400'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Picture $proxy) {
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
    public function getTitle(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitle', []);

        return parent::getTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitle(?string $title): \App\Entity\Picture
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitle', [$title]);

        return parent::setTitle($title);
    }

    /**
     * {@inheritDoc}
     */
    public function getAltText(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAltText', []);

        return parent::getAltText();
    }

    /**
     * {@inheritDoc}
     */
    public function setAltText(?string $altText): \App\Entity\Picture
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAltText', [$altText]);

        return parent::setAltText($altText);
    }

    /**
     * {@inheritDoc}
     */
    public function getPictureFile(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPictureFile', []);

        return parent::getPictureFile();
    }

    /**
     * {@inheritDoc}
     */
    public function setPictureFile(string $pictureFile): \App\Entity\Picture
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPictureFile', [$pictureFile]);

        return parent::setPictureFile($pictureFile);
    }

    /**
     * {@inheritDoc}
     */
    public function getWidth(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWidth', []);

        return parent::getWidth();
    }

    /**
     * {@inheritDoc}
     */
    public function setWidth(?string $width): \App\Entity\Picture
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWidth', [$width]);

        return parent::setWidth($width);
    }

    /**
     * {@inheritDoc}
     */
    public function getHeight(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHeight', []);

        return parent::getHeight();
    }

    /**
     * {@inheritDoc}
     */
    public function setHeight(?string $height): \App\Entity\Picture
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHeight', [$height]);

        return parent::setHeight($height);
    }

    /**
     * {@inheritDoc}
     */
    public function getLegend(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLegend', []);

        return parent::getLegend();
    }

    /**
     * {@inheritDoc}
     */
    public function setLegend(?string $legend): \App\Entity\Picture
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLegend', [$legend]);

        return parent::setLegend($legend);
    }

    /**
     * {@inheritDoc}
     */
    public function getArticles(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getArticles', []);

        return parent::getArticles();
    }

    /**
     * {@inheritDoc}
     */
    public function addArticle(\App\Entity\Article $article): \App\Entity\Picture
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addArticle', [$article]);

        return parent::addArticle($article);
    }

    /**
     * {@inheritDoc}
     */
    public function removeArticle(\App\Entity\Article $article): \App\Entity\Picture
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeArticle', [$article]);

        return parent::removeArticle($article);
    }

    /**
     * {@inheritDoc}
     */
    public function getOccasions(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOccasions', []);

        return parent::getOccasions();
    }

    /**
     * {@inheritDoc}
     */
    public function addOccasion(\App\Entity\Occasion $occasion): \App\Entity\Picture
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addOccasion', [$occasion]);

        return parent::addOccasion($occasion);
    }

    /**
     * {@inheritDoc}
     */
    public function removeOccasion(\App\Entity\Occasion $occasion): \App\Entity\Picture
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeOccasion', [$occasion]);

        return parent::removeOccasion($occasion);
    }

    /**
     * {@inheritDoc}
     */
    public function getGalleries(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGalleries', []);

        return parent::getGalleries();
    }

    /**
     * {@inheritDoc}
     */
    public function addGallery(\App\Entity\Gallery $gallery): \App\Entity\Picture
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addGallery', [$gallery]);

        return parent::addGallery($gallery);
    }

    /**
     * {@inheritDoc}
     */
    public function removeGallery(\App\Entity\Gallery $gallery): \App\Entity\Picture
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeGallery', [$gallery]);

        return parent::removeGallery($gallery);
    }

    /**
     * {@inheritDoc}
     */
    public function getCarouselPictures(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCarouselPictures', []);

        return parent::getCarouselPictures();
    }

    /**
     * {@inheritDoc}
     */
    public function addCarouselPicture(\App\Entity\CarouselPicture $carouselPicture): \App\Entity\Picture
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCarouselPicture', [$carouselPicture]);

        return parent::addCarouselPicture($carouselPicture);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCarouselPicture(\App\Entity\CarouselPicture $carouselPicture): \App\Entity\Picture
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCarouselPicture', [$carouselPicture]);

        return parent::removeCarouselPicture($carouselPicture);
    }

    /**
     * {@inheritDoc}
     */
    public function getName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setName(?string $name): \App\Entity\Picture
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getPictureFileH200(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPictureFileH200', []);

        return parent::getPictureFileH200();
    }

    /**
     * {@inheritDoc}
     */
    public function setPictureFileH200(?string $pictureFileH200): \App\Entity\Picture
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPictureFileH200', [$pictureFileH200]);

        return parent::setPictureFileH200($pictureFileH200);
    }

    /**
     * {@inheritDoc}
     */
    public function getPictureFileH400(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPictureFileH400', []);

        return parent::getPictureFileH400();
    }

    /**
     * {@inheritDoc}
     */
    public function setPictureFileH400(?string $pictureFileH400): \App\Entity\Picture
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPictureFileH400', [$pictureFileH400]);

        return parent::setPictureFileH400($pictureFileH400);
    }

}
