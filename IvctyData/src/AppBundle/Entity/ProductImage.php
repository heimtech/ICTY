<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductImage
 *
 * @ORM\Table(name="product_image")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProductImageRepository")
 */
class ProductImage
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
     * @ORM\Column(name="filepath", type="string", length=255, nullable=true)
     */
    private $filepath;

    /**
     * @ORM\ManyToOne(targetEntity="Product", inversedBy="productImages")
     * @ORM\JoinColumn(name="refproduct", referencedColumnName="id")     */
    private $refproduct;


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
     * Set filepath
     *
     * @param string $filepath
     *
     * @return ProductImage
     */
    public function setFilepath($filepath)
    {
        $this->filepath = $filepath;

        return $this;
    }

    /**
     * Get filepath
     *
     * @return string
     */
    public function getFilepath()
    {
        return $this->filepath;
    }

    /**
     * Set refproduct
     *
     * @param integer $refproduct
     *
     * @return ProductImage
     */
    public function setRefproduct($refproduct)
    {
        $this->refproduct = $refproduct;

        return $this;
    }

    /**
     * Get refproduct
     *
     * @return int
     */
    public function getRefproduct()
    {
        return $this->refproduct;
    }
}
