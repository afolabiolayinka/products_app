<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use App\Entity\Product;
use App\Entity\ProductPrice;

class ProductTest extends WebTestCase
{
    public function testPayload(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/products/');

        $this->assertResponseIsSuccessful();
    }

    public function testFilter(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/products/?category=sneakers');

        $response = $client->getResponse();        
        $data = $response->getContent();

        $this->assertStringContainsString("sneakers", $data);
    }
}
