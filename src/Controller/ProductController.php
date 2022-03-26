<?php

namespace App\Controller;

use App\Entity\Product;
use App\Form\ProductType;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/products")
 */
class ProductController extends AbstractController
{
    /**
     * @Route("/", name="app_product_index", methods={"GET"})
     */
    public function index(Request $request, ProductRepository $productRepository): Response
    {

        $filterCategory = $request->query->get('category','');
        $filterPrice = $request->query->get('priceLessThan',0);

        $products = $productRepository->findAllEx($filterCategory,$filterPrice);

        $data = [];

        foreach ($products as $product) {
            $data[] = [
                'sku' => $product->getSku(),
                'name' => $product->getName(),                
                'category' => $product->getCategory(),
                'price' => [
                    'final' => $product->getPrice()->getFinal(),
                    'original' => $product->getPrice()->getOriginal(),
                    'discount_percentage' => $product->getPrice()->getDiscountPercentage(),
                    'currency' => $product->getPrice()->getCurrency(),
                ],
            ];
        }

        return $this->json($data);
    }
}
