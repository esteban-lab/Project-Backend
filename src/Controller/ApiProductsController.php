<?php

namespace App\Controller;

use App\Repository\ProductsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

    /**
     * @Route("/api/products", name="api_products_")     
     */

class ApiProductsController extends AbstractController
{
     /**
     * @Route(
     *      "", 
     *      name="cget",
     *      methods={"GET"})
     */

    public function index( ProductsRepository $productsRepository): Response
    {

       $result = $productsRepository->findAll();

        $data = [];

        foreach ($result as $products) {
            $data[]= $products;
        }

        return $this->json($data);
    }
}
