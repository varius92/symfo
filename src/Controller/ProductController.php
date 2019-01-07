<?php
/**
 * Created by PhpStorm.
 * User: aseifert
 * Date: 18.10.18
 * Time: 19:56
 */

namespace App\Controller;


use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{

    /**
     * @Route("/product", name="product")
     */
    public function index()
    {
        $entityManager = $this->getDoctrine()->getManager();

        $product = new Product();
        $product->setName('Keyboard');
        $product->setPrice(1999);
        $product->setDescription('Lorem Ipsum bla bla');

        $entityManager->persist($product);

        $entityManager->flush();

        return new Response('Saved new product with id '.$product->getId());

    }


    /**
     * @Route("product/{id}", name="product_show")
     *
     */

    public function show(Product $product)
    {
//        $product = $this->getDoctrine()
//            ->getRepository(Product::class)
//            ->find($id)
//        ;
//
//        if (!$product) {
//            throw $this->createNotFoundException(
//                'No product found for id '.$id
//            );
//        }
//
        return new Response('Check out this great product: '.$product->getName());
    }

}