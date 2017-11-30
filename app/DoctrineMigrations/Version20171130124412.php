<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20171130124412 extends AbstractMigration implements ContainerAwareInterface
{
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        $em = $this->container->get('doctrine.orm.entity_manager');
        
        $orders = $em->getRepository('AppBundle:MartinsOrder')->findAll();
        foreach($orders as $order) {
            $total = 0.0;
            foreach($order->getOrderProducts() as $orderProduct) {
                $total += $orderProduct->getPrice();
                $newPrice = $orderProduct->getPrice() / $orderProduct->getQuantity();
                $orderProduct->setPrice($newPrice);
            }
            $order->setTotal($total);
        }

        $em->flush();
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
