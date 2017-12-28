<?php
namespace AppBundle\Command;

use AppBundle\Service\MartinsConnector;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Output\OutputInterface;
use AppBundle\Entity\Retailer;

class ExportClientsCommand extends ContainerAwareCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('conectatri:retailers:export')
            ->setDescription('Exports RCA Retailers to Martins')
            ->setHelp('Exports every new Retailer marked as RCA Virtual to the Martins API')
            ->addArgument('retailerId', InputArgument::REQUIRED, 'The ID of the Retailer.');
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $em = $this->getContainer()->get('doctrine')->getManager();
        /** @var Retailer $retailer */
        $retailer = $em->getRepository("AppBundle:Retailer")->find($input->getArgument('retailerId'));

        $logger = $this->getContainer()->get('logger');

        $output->writeln('Exportando '.$retailer->getCompanyName());
        $logger->info('Exportando '.$retailer->getCompanyName());

        if(!$retailer->isRCAVirtual()) {
            $output->writeln('Este Retailer não está marcado como RCA Virtual!');
            $logger->info('Este Retailer não está marcado como RCA Virtual!');
            return;
        }

        if(!$retailer->isRegisteredOnMartins()) {
            $output->writeln('Conectando com a API Martins');
            $logger->info('Conectando com a API Martins');
            $response = $this->registerOnMartins($retailer, $this->getContainer()->getParameter('chave_martins'));
            $mc = new MartinsConnector($this->getContainer()->getParameter('chave_martins'),
                $this->getContainer()->getParameter('url_martins'), $retailer);

            if($response->Status == 0 || $response->Status == 6) {
                $retailer->setRegisteredOnMartins(true);

                $acesso = $mc->login();
                if($acesso->Status != 0){
                    $output->writeln($acesso->Mensagem);
                    $logger->info($acesso->Mensagem);
                }
            } else {
                $retailer->setRegisteredOnMartins(false);
                $output->writeln($response->Status.' - '.$response->Mensagem);
                $logger->info($response->Status.' - '.$response->Mensagem);

                $em->flush();
                return;
            }
        } else {
            $output->writeln('Este Retailer já está cadastrado na API Martins!');
            $logger->info('Este Retailer já está cadastrado na API Martins!');
            return;
        }

        $em->flush();
        $output->writeln('Retailer exportado com sucesso');
        $logger->info('Retailer exportado com sucesso');
    }

    protected function registerOnMartins(Retailer $retailer, $chave)
    {
        $soap = new \SoapClient(($this->getContainer()->getParameter('url_martins').'?WSDL'));

        $params = [
            'chpac' => $chave,
            'cnpj' => $retailer->getCnpj(),
            'email' => $retailer->getEmail(),
            'nome' => substr($retailer->getCompanyName(), 0, 35),
            'cep' => $retailer->getCep(),
            'logradouro' => $retailer->getAddress(),
            'numero' => $retailer->getNumber(),
            'complemento' => $retailer->getComplement()??'',
            'bairro' => substr($retailer->getDistrict(), 0, 15),
            'cidade' => $retailer->getCity(),
            'estado' => $retailer->getState()->getUf(),
            'telefone' => $retailer->getPhone(),
            'token' => ''
        ];

        return $soap->cadastrarCliente($params)->cadastrarClienteResult;
    }
}

