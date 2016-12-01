<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Message
 *
 * @ORM\Table(name="message")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MessageRepository")
 */
class Message
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
     * @var int
     *
     * @ORM\Column(name="sender", type="integer", nullable=true)
     */
    private $sender;

   /**
     * @ORM\ManyToOne(targetEntity="Product")
     * @ORM\JoinColumn(name="product", referencedColumnName="id")
     */
    private $product;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="string", length=4096)
     */
    private $message;

    /**
     * @var bool
     *
     * @ORM\Column(name="new", type="boolean")
     */
    private $new;

    /**
     * @var string
     *
     * @ORM\Column(name="lieferArt", type="string", length=255)
     */
    private $lieferArt;

    /**
     * @var string
     *
     * @ORM\Column(name="stueckzahl", type="integer", length=64)
     */
    private $stueckzahl;




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
     * Set sender
     *
     * @param integer $sender
     *
     * @return Message
     */
    public function setSender($sender)
    {
        $this->sender = $sender;

        return $this;
    }

    /**
     * Get sender
     *
     * @return int
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * Set message
     *
     * @param string $message
     *
     * @return Message
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set new
     *
     * @param boolean $new
     *
     * @return Message
     */
    public function setNew($new)
    {
        $this->new = $new;

        return $this;
    }

    /**
     * Get new
     *
     * @return bool
     */
    public function getNew()
    {
        return $this->new;
    }

    /**
     * Set product
     *
     * @param \AppBundle\Entity\Product $product
     *
     * @return Message
     */
    public function setProduct(\AppBundle\Entity\Product $product = null)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return \AppBundle\Entity\Product
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set lieferArt
     *
     * @param string $lieferArt
     *
     * @return Message
     */
    public function setLieferArt($lieferArt)
    {
        $this->lieferArt = $lieferArt;
    
        return $this;
    }

    /**
     * Get lieferArt
     *
     * @return string
     */
    public function getLieferArt()
    {
        return $this->lieferArt;
    }

    /**
     * Set stueckzahl
     *
     * @param integer $stueckzahl
     *
     * @return Message
     */
    public function setStueckzahl($stueckzahl)
    {
        $this->stueckzahl = $stueckzahl;
    
        return $this;
    }

    /**
     * Get stueckzahl
     *
     * @return integer
     */
    public function getStueckzahl()
    {
        return $this->stueckzahl;
    }
}
