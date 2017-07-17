<?php

namespace AppBundle\Controller\Retailer;

use AppBundle\Entity\Product;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ProductsController extends Controller
{
    /**
     * @Route("/varejista/produtos", name="produtos")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $products = $user->getProducts();

        return $this->render('Retailer/products/index.html.twig', [
            'products' => $products,
        ]);
    }

    /**
     * @Route("/varejista/listas/produto/novo", name="novoproduto")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function addProductAction(Request $request)
    {

        if($request->getMethod() == "POST"){
            $user = $this->get('security.token_storage')->getToken()->getUser();

            $em = $this->getDoctrine()->getManager();

            $product = new Product();
            $product->setEan('');
            if($request->get('name') != "") $product->setName($request->get('name'));
            if($request->get('brand') != "") $product->setBrand($request->get('brand'));
            if($request->get('quantity') != "") $product->setQuantity($request->get('quantity'));
            if($request->get('unit') != "") $product->setUnit($request->get('unit'));
            if($request->get('type') != "") $product->setType($request->get('type'));
            if($request->get('full-description') != "") $product->setFullDescription($request->get('full-description'));
            $product->setRetailer($user);

            $em->persist($product);

            $em->flush();

            $this->addFlash(
                'success',
                'Produto adicionado!'
            );

            return $this->redirectToRoute('produtos');
        }

        return $this->render('Retailer/products/addProducts.html.twig', [
        ]);
    }

    /**
     * @Route("/varejista/listas/produto/editar/{id}", name="editar_produto")
     * @param Request $request
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function editProductAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $product = $em->getRepository('AppBundle:Product')->findOneBy(['id' => $id]);

        if($request->getMethod() == "POST"){
            $user = $this->get('security.token_storage')->getToken()->getUser();

            $product->setEan('');
            $product->setName($request->get('name'));
            $product->setBrand($request->get('brand'));
            $product->setQuantity($request->get('quantity'));
            $product->setUnit($request->get('unit'));
            $product->setType($request->get('type'));
            $product->setFullDescription($request->get('full-description'));
            $product->setRetailer($user);

            $em->flush();

            $this->addFlash(
                'success',
                'Produto editado!'
            );

            return $this->redirectToRoute('produtos');
        }

        return $this->render('Retailer/products/addProducts.html.twig', [
            'product' => $product,
        ]);
    }
}
