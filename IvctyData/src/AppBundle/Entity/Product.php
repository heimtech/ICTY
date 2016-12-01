<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;



/**
 * Product
 *
 * @ORM\Table(name="product")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProductRepository")
 */
class Product
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
     * @ORM\Column(name="name", type="string", length=100, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", nullable=true)
     */
    private $price;

    /**
     * @var int
     *
     * @ORM\Column(name="owner", type="integer", nullable=true)
     */
    private $owner;

    /**
     * @var int
     *
     * @ORM\Column(name="deliveryTime", type="integer", nullable=true)
     */
    private $deliveryTime;

    /**
     * @var string
     *
     * @ORM\Column(name="deliveryTimeType", type="string", length=100, nullable=true)
     */
    private $deliveryTimeType;
    
    /**
     * @var string
     *
     * @ORM\Column(name="shortDescription", type="string", length=512, nullable=true)
     */
    private $shortDescription;
    
    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=5000, nullable=true)
     */
    private $description;
    
    /**
     * @var string
     *
     * @ORM\Column(name="quantity", type="integer", length=10, nullable=true)
     */
    private $quantity;
    
    /**
     * @var string
     *
     * @ORM\Column(name="quantityCategory", type="string", length=128, nullable=true)
     */
    private $quantityCategory;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="lieferArtAbholung", type="boolean", nullable=true)
     */
    private $lieferArtAbholung;


    /**
     * @var boolean
     *
     * @ORM\Column(name="lieferArtVersand", type="boolean", nullable=true)
     */
    private $lieferArtVersand;

    /**
     * @var boolean
     *
     * @ORM\Column(name="anbauKonventionell", type="boolean", nullable=true)
     */
    private $anbauKonventionell;

    /**
     * @var boolean
     *
     * @ORM\Column(name="anbauBio", type="boolean", nullable=true)
     */
    private $anbauBio;

    /**
     * @var boolean
     *
     * @ORM\Column(name="anbauFrei", type="boolean", nullable=true)
     */
    private $anbauFrei;


    /**
     * @var boolean
     *
     * @ORM\Column(name="anbauDemeter", type="boolean", nullable=true)
     */
    private $anbauDemeter;



    /**
     * @var string
     *
     * @ORM\Column(name="packaging", type="string", length=100, nullable=true)
     */
    private $packaging;
    
    /**
     * @ORM\OneToMany(targetEntity="ProductImage", mappedBy="refproduct", fetch="EAGER")
     */
    private $productImages;
    
    // ...
    /**
     * @ORM\OneToMany(targetEntity="Message", mappedBy="product")
     */
    private $messages;
    
    // ...

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Product
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set price
     *
     * @param string $price
     *
     * @return Product
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set owner
     *
     * @param integer $owner
     *
     * @return Product
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * Get owner
     *
     * @return int
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Set deliveryTime
     *
     * @param integer $deliveryTime
     *
     * @return Product
     */
    public function setDeliveryTime($deliveryTime)
    {
        $this->deliveryTime = $deliveryTime;

        return $this;
    }

    /**
     * Get deliveryTime
     *
     * @return int
     */
    public function getDeliveryTime()
    {
        return $this->deliveryTime;
    }

    /**
     * Set deliveryTimeType
     *
     * @param string $deliveryTimeType
     *
     * @return Product
     */
    public function setDeliveryTimeType($deliveryTimeType)
    {
        $this->deliveryTimeType = $deliveryTimeType;

        return $this;
    }

    /**
     * Get deliveryTimeType
     *
     * @return string
     */
    public function getDeliveryTimeType()
    {
        return $this->deliveryTimeType;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return Product
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set deliveryType
     *
     * @param string $deliveryType
     *
     * @return Product
     */
    public function setDeliveryType($deliveryType)
    {
        $this->deliveryType = $deliveryType;

        return $this;
    }

    /**
     * Get deliveryType
     *
     * @return string
     */
    public function getDeliveryType()
    {
        return $this->deliveryType;
    }

    /**
     * Set packaging
     *
     * @param string $packaging
     *
     * @return Product
     */
    public function setPackaging($packaging)
    {
        $this->packaging = $packaging;

        return $this;
    }

    /**
     * Get packaging
     *
     * @return string
     */
    public function getPackaging()
    {
        return $this->packaging;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->productImages = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add productImage
     *
     * @param \AppBundle\Entity\ProductImage $productImage
     *
     * @return Product
     */
    public function addProductImage(\AppBundle\Entity\ProductImage $productImage)
    {
        $this->productImages[] = $productImage;

        return $this;
    }

    /**
     * Remove productImage
     *
     * @param \AppBundle\Entity\ProductImage $productImage
     */
    public function removeProductImage(\AppBundle\Entity\ProductImage $productImage)
    {
        $this->productImages->removeElement($productImage);
    }

    /**
     * Get productImages
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProductImages()
    {
        return $this->productImages;
    }

    /**
     * Add message
     *
     * @param \AppBundle\Entity\Message $message
     *
     * @return Product
     */
    public function addMessage(\AppBundle\Entity\Message $message)
    {
        $this->messages[] = $message;

        return $this;
    }

    /**
     * Remove message
     *
     * @param \AppBundle\Entity\Message $message
     */
    public function removeMessage(\AppBundle\Entity\Message $message)
    {
        $this->messages->removeElement($message);
    }

    /**
     * Get messages
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * Set shortDescription
     *
     * @param string $shortDescription
     *
     * @return Product
     */
    public function setShortDescription($shortDescription)
    {
        $this->shortDescription = $shortDescription;

        return $this;
    }

    /**
     * Get shortDescription
     *
     * @return string
     */
    public function getShortDescription()
    {
        return $this->shortDescription;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Product
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set quantityCategory
     *
     * @param string $quantityCategory
     *
     * @return Product
     */
    public function setQuantityCategory($quantityCategory)
    {
        $this->quantityCategory = $quantityCategory;

        return $this;
    }

    /**
     * Get quantityCategory
     *
     * @return string
     */
    public function getQuantityCategory()
    {
        return $this->quantityCategory;
    }

    /**
     * Set lieferArtAbholung
     *
     * @param boolean $lieferArtAbholung
     *
     * @return Product
     */
    public function setLieferArtAbholung($lieferArtAbholung)
    {
        $this->lieferArtAbholung = $lieferArtAbholung;
    
        return $this;
    }

    /**
     * Get lieferArtAbholung
     *
     * @return boolean
     */
    public function getLieferArtAbholung()
    {
        return $this->lieferArtAbholung;
    }

    /**
     * Set lieferArtVersand
     *
     * @param boolean $lieferArtVersand
     *
     * @return Product
     */
    public function setLieferArtVersand($lieferArtVersand)
    {
        $this->lieferArtVersand = $lieferArtVersand;
    
        return $this;
    }

    /**
     * Get lieferArtVersand
     *
     * @return boolean
     */
    public function getLieferArtVersand()
    {
        return $this->lieferArtVersand;
    }

    /**
     * Set anbauKonventionell
     *
     * @param boolean $anbauKonventionell
     *
     * @return Product
     */
    public function setAnbauKonventionell($anbauKonventionell)
    {
        $this->anbauKonventionell = $anbauKonventionell;
    
        return $this;
    }

    /**
     * Get anbauKonventionell
     *
     * @return boolean
     */
    public function getAnbauKonventionell()
    {
        return $this->anbauKonventionell;
    }

    /**
     * Set anbauBio
     *
     * @param boolean $anbauBio
     *
     * @return Product
     */
    public function setAnbauBio($anbauBio)
    {
        $this->anbauBio = $anbauBio;
    
        return $this;
    }

    /**
     * Get anbauBio
     *
     * @return boolean
     */
    public function getAnbauBio()
    {
        return $this->anbauBio;
    }

    /**
     * Set anbauFrei
     *
     * @param boolean $anbauFrei
     *
     * @return Product
     */
    public function setAnbauFrei($anbauFrei)
    {
        $this->anbauFrei = $anbauFrei;
    
        return $this;
    }

    /**
     * Get anbauFrei
     *
     * @return boolean
     */
    public function getAnbauFrei()
    {
        return $this->anbauFrei;
    }

    /**
     * Set anbauDemeter
     *
     * @param boolean $anbauDemeter
     *
     * @return Product
     */
    public function setAnbauDemeter($anbauDemeter)
    {
        $this->anbauDemeter = $anbauDemeter;
    
        return $this;
    }

    /**
     * Get anbauDemeter
     *
     * @return boolean
     */
    public function getAnbauDemeter()
    {
        return $this->anbauDemeter;
    }
}
