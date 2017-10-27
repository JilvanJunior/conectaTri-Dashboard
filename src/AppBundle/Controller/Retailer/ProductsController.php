<?php

namespace AppBundle\Controller\Retailer;

use AppBundle\Entity\Product;
use AppBundle\Entity\Representative;
use AppBundle\Entity\Retailer;
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
        /** @var Retailer $user */
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $products = $this->getDoctrine()->getRepository('AppBundle:Product')->findBy(['retailer' => $user, 'deleted' => false]);

        return $this->render('Retailer/products/index.html.twig', [
            'products' => $products,
            'username' => $user->getFantasyName(),
            'userIsRCA' => $user->isRCAVirtual(),
        ]);
    }

    /**
     * @Route("/varejista/produtos/ajax", name="ajax_produtos")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getProductsAjaxAction(Request $request)
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $term = $request->query->get('term');

        $repo = $this->getDoctrine()->getRepository('AppBundle:Product');
        $products = $repo->createQueryBuilder('p')
            ->where('p.name LIKE :name')
            ->setParameter('name', "%$term%")
            ->distinct()
            ->getQuery()->getResult();

        $productsNames = [];
        /** @var Product $product */
        foreach($products as $i => $product) {
            $productsNames[] = [
                'id' => $i,
                'label' => $product->getName(),
                'value' => $product->getName(),
                'ean' => $product->getEan(),
                'brand' => $product->getBrand(),
                'type' => $product->getType(),
                'unit' => $product->getUnit(),
                'quantity' => $product->getQuantity(),
                'full_description' => $product->getFullDescription()
            ];
        }

        return $this->json($productsNames);
    }

    /**
     * @Route("/varejista/produtos/novo", name="novoproduto")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function addProductAction(Request $request)
    {
        /** @var Retailer $user */
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $products = $em->getRepository('AppBundle:Product')->findBy(['deleted' => false]);

        if($request->getMethod() == "POST"){
            $product = new Product();
            $product->setEan('');
            if($request->get('name') != "") $product->setName($request->get('name'));
            if($request->get('ean') != "") $product->setEan($request->get('ean'));
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
            'products' => $products,
            'username' => $user->getFantasyName(),
            'userIsRCA' => $user->isRCAVirtual(),
        ]);
    }

    /**
     * @Route("/varejista/produto/editar/{id}", name="editar_produto")
     * @param Request $request
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function editProductAction(Request $request, $id)
    {
        /** @var Retailer $user */
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();

        $product = $em->getRepository('AppBundle:Product')->findOneBy(['id' => $id]);

        if($request->getMethod() == "POST"){
            $product->setEan('');
            $product->setName($request->get('name'));
            $product->setEan($request->get('ean'));
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
            'username' => $user->getFantasyName(),
            'userIsRCA' => $user->isRCAVirtual(),
        ]);
    }

    /**
     * @Route("/varejista/produtos/data", name="get_produtos")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getProductsAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $products = $em->getRepository('AppBundle:Product')->findProductsName();

        echo json_encode($products);
        exit();
    }

    /**
     * @Route("/varejista/produtos/{id}/deletar", name="deletar_produto")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function deleteProductAction(Request $request, $id)
    {
        $d = $this->getDoctrine();
        $em = $d->getManager();

        /** @var Representative $dbRepresentative */
        $dbProduct = $d->getRepository("AppBundle:Product")->find($id);
        if (is_null($dbProduct)) {
            $this->addFlash(
                'warning',
                'Produto inválido!'
            );

            return $this->redirectToRoute('produtos');
        }
        $dbProduct->setDeleted(true)
            ->setUpdatedAt(new \DateTime());
        $em->flush();

        $this->addFlash(
            'success',
            'Produto deletado!'
        );

        return $this->redirectToRoute('produtos');
    }
}
