<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Product;
use App\Entity\ProductPrice;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {        
         $product = new Product();         
         $product->setName('BV Lean leather ankle boots');
         $product->setSku('000001');
         $product->setCategory('boots');     
         $manager->persist($product);

         $productPrice = new ProductPrice();
         $productPrice->setProduct($product);
         $productPrice->setFinal(62300);
         $productPrice->setDiscountPercentage("30%");
         $productPrice->setOriginal(89000);
         $productPrice->setCurrency("EUR");
         $manager->persist($productPrice);

         $product = new Product();         
         $product->setName('BV Lean leather ankle boots');
         $product->setSku('000002');
         $product->setCategory('boots');     
         $manager->persist($product);

         $productPrice = new ProductPrice();
         $productPrice->setProduct($product);
         $productPrice->setFinal(69300);
         $productPrice->setDiscountPercentage("30%");
         $productPrice->setOriginal(99000);
         $productPrice->setCurrency("EUR");
         $manager->persist($productPrice);

         $product = new Product();         
         $product->setName('Ashlington leather ankle boots');
         $product->setSku('000003');
         $product->setCategory('boots');     
         $manager->persist($product);

         $productPrice = new ProductPrice();
         $productPrice->setProduct($product);
         $productPrice->setFinal(49700);
         $productPrice->setDiscountPercentage("30%");
         $productPrice->setOriginal(71000);
         $productPrice->setCurrency("EUR");
         $manager->persist($productPrice);

         $product = new Product();         
         $product->setName('Naima embellished suede sandals');
         $product->setSku('000004');
         $product->setCategory('sandals');     
         $manager->persist($product);

         $productPrice = new ProductPrice();
         $productPrice->setProduct($product);
         $productPrice->setFinal(79500);
         $productPrice->setOriginal(79500);
         $productPrice->setCurrency("EUR");
         $manager->persist($productPrice);

         $product = new Product();         
         $product->setName('Nathane leather sneakers');
         $product->setSku('000005');
         $product->setCategory('sneakers');     
         $manager->persist($product);

         $productPrice = new ProductPrice();
         $productPrice->setProduct($product);
         $productPrice->setFinal(59000);
         $productPrice->setOriginal(59000);
         $productPrice->setCurrency("EUR");
         $manager->persist($productPrice);

        $manager->flush();
    }
}
