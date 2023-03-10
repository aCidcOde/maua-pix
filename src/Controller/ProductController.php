<?php

namespace App\Controller;

Use App\Entity\Bundle;
use App\Entity\Product;
use App\Form\ProductFormType;
use Doctrine\ORM\EntityManagerInterface;

use App\Repository\ProductRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{

    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
        
    }

    /**
     * @Route("/product/index", name="app_product")
     */
    public function index(): Response
    {
        return $this->render('product/index.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }

    #[Route('/list', name: 'lists')]
    public function list(): Void 
    {
        $repository = $this->em->getRepository(Product::class);
        $products = $repository->getClassName();

        dd($products);




    }

    /**
     * @Route("/product", name="create_product")
     */
    public function createProduct(ManagerRegistry $doctrine): Response
    {

        $entityManager = $doctrine->getManager();

        $product = new Product();
        $product->setName("Teclado");
        $product->setPrice(10000);
        $product->setDescription("Mac book pro");

        $entityManager->persist($product);

        $entityManager->flush();

        return new Response("Inserido com sucesso: " . $product->getId());

    }

    /**
     * @Route("/product/{id}", name="product_show")
     */
    public function show(int $id, ProductRepository $productRepository): Response
    {

        $product = $productRepository->find($id);

        if(!$product) {
            throw $this->createNotFoundException(
                "No product with id ". $id
            );
        }

        return new Response("Produto: " . $product->getName());

    }

}
