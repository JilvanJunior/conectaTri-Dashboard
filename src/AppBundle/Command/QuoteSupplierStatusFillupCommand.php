<?php

namespace AppBundle\Command;

use AppBundle\Entity\QuoteSupplier;
use AppBundle\Entity\QuoteSupplierStatus;
use Doctrine\ORM\Query\Lexer;
use Doctrine\ORM\QueryBuilder;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class QuoteSupplierStatusFillupCommand extends ContainerAwareCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('conectatri:quote_supplier_status:fillup')
            ->setDescription('Generate QuoteSupplierStatus objects for every QuoteSupplier that doesn\'t have one in every Quote');
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $d = $this->getContainer()->get('doctrine');
        $em = $d->getManager();
        /** @var QueryBuilder $qb */
        /** @var QueryBuilder $qbS */
        $qbS = $d->getRepository("AppBundle:QuoteSupplierStatus")->createQueryBuilder("ss");
        $qb = $d->getRepository("AppBundle:QuoteSupplier")->createQueryBuilder("s");
        $qb->join("s.quoteProduct", "p")
            ->where(
                $qb->expr()->notIn(
                    "IDENTITY(s.representative)",
                    $qbS->select("IDENTITY(ss.representative)")
                        ->where("ss.quote = p.quote")
                        ->getDQL()
                )
            )->groupBy("s.representative, p.quote");
        $quoteSuppliers = $qb->getQuery()->getResult();
        if (empty($quoteSuppliers)) {
            $output->writeln("All QuoteSuppliers have a QuoteSupplierStatus, nothing to do.");
            return;
        }
        $output->writeln(count($quoteSuppliers)." QuoteSuppliers don't have a QuoteSupplierStatus. Fixing this.");
        $qb = $d->getRepository("AppBundle:QuoteSupplier")->createQueryBuilder("s");
        $qb->select("IDENTITY(s.representative), IDENTITY(p.quote), SUM(s.price)")
            ->join("s.quoteProduct", "p")
            ->groupBy("s.representative, p.quote");
        $rawQSP = $qb->getQuery()->getResult();
        $quoteSupplierPrices = [];
        foreach ($rawQSP as $qsp) {
            $quoteSupplierPrices[$qsp[1]][$qsp[2]] = $qsp[3];
        }
        /** @var QuoteSupplier $quoteSupplier */
        foreach ($quoteSuppliers as $quoteSupplier) {
            $qSS = new QuoteSupplierStatus();
            $qSS->setQuote($quoteSupplier->getQuoteProduct()->getQuote())
                ->setRepresentative($quoteSupplier->getRepresentative());
            if ($quoteSupplierPrices
                [$quoteSupplier->getRepresentative()->getId()]
                [$quoteSupplier->getQuoteProduct()->getQuote()->getId()]
                > 0) {
                $qSS->setStatus(2);
            }
            $em->persist($qSS);
        }
        $em->flush();
        $output->writeln("All done, now all QuoteSuppliers should have a QuoteSupplierStatus.");
    }
}
