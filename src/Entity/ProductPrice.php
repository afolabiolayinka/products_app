<?php

namespace App\Entity;

use App\Repository\ProductPriceRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProductPriceRepository::class)
 */
class ProductPrice
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $original;

    /**
     * @ORM\Column(type="integer")
     */
    private $final;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $discount_percentage;

    /**
     * @ORM\Column(type="string", length=4)
     */
    private $currency;

    /**
     * @ORM\OneToOne(targetEntity=Product::class, inversedBy="price", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $product;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOriginal(): ?int
    {
        return $this->original;
    }

    public function setOriginal(int $original): self
    {
        $this->original = $original;

        return $this;
    }

    public function getFinal(): ?int
    {
        return $this->final;
    }

    public function setFinal(int $final): self
    {
        $this->final = $final;

        return $this;
    }

    public function getDiscountPercentage(): ?string
    {
        return $this->discount_percentage;
    }

    public function setDiscountPercentage(?string $discount_percentage): self
    {
        $this->discount_percentage = $discount_percentage;

        return $this;
    }

    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    public function setCurrency(string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    public function getProduct(): ?Product
    {
        return $this->product;
    }

    public function setProduct(Product $product): self
    {
        $this->product = $product;

        return $this;
    }
}
