<?php

namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ApiTokensCleanupCommand extends ContainerAwareCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('conectatri:clean:tokens')
            ->setDescription('Cleans all unused tokens')
            ->setHelp('Cleans all tokens last used earlier than 24h back');
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $d = $this->getContainer()->get('doctrine');
        $em = $d->getManager();
        $oldTokens = $d->getRepository("AppBundle:ApiSession")->createQueryBuilder("s")
            ->where("s.lastUsed < :past")
            ->setParameter("past", new \DateTime("-1 days"))
            ->getQuery()->getResult();
        foreach ($oldTokens as $oldToken) {
            $em->remove($oldToken);
        }
        $em->flush();
    }
}
