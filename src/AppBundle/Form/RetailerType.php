<?php

namespace AppBundle\Form;

use AppBundle\Entity\Retailer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class RetailerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cnpj', TextType::class, array('label' => false, 'attr' => array('placeholder' => 'CNPJ')))
            ->add('companyName', TextType::class, array('label' => false, 'attr' => array('placeholder' => 'Razão Social')))
            ->add('fantasyName', TextType::class, array('label' => false, 'attr' => array('placeholder' => 'Nome de Usuário')))
            ->add('plainPassword', RepeatedType::class, array(
                'type' => PasswordType::class,
                'first_options'  => array('label' => false, 'attr' => array('placeholder' => 'Senha')),
                'second_options' => array('label' => false, 'attr' => array('placeholder' => 'Confirme a Senha')),
            ))
            ->add('email', EmailType::class, array('label' => false, 'attr' => array('placeholder' => 'E-mail')))
            ->add('cep', TextType::class, array('label' => false, 'attr' => array('placeholder' => 'CEP')))
            ->add('address', TextType::class, array('label' => false, 'attr' => array('placeholder' => 'Endereço')))
            ->add('number', TextType::class, array('label' => false, 'attr' => array('placeholder' => 'Número')))
            ->add('complement', TextType::class, array('label' => false, 'attr' => array('placeholder' => 'Complemento')))
            ->add('district', TextType::class, array('label' => false, 'attr' => array('placeholder' => 'Bairro')))
            ->add('city', TextType::class, array('label' => false, 'attr' => array('placeholder' => 'Cidade')))
            ->add('state', EntityType::class, array(
                'class' => 'AppBundle:State',
                'choice_label' => 'name',
                'label' => false,
                'placeholder' => 'Estado'
            ))
            ->add('phone', TextType::class, array('label' => false, 'attr' => array('placeholder' => 'Telefone')))
            ->add('cellphone', TextType::class, array('label' => false, 'attr' => array('placeholder' => 'Telefone Celular')))
        ;

        $builder->get('cnpj')
            ->addModelTransformer(new CallbackTransformer(
                function ($cleanCNPJ) {
                    $mask = '##.###.###/####-##';
                    $maskared = '';
                    $k = 0;
                    for($i = 0; $i <= strlen($mask) - 1; $i++)
                    {
                        if($mask[$i] == '#')
                        {
                            if(isset($cleanCNPJ[$k]))
                                $maskared .= $cleanCNPJ[$k++];
                        }
                        else
                        {
                            if(isset($mask[$i]))
                                $maskared .= $mask[$i];
                        }
                    }
                    return $maskared;
                },
                function ($maskedCNPJ) {
                    return str_replace(array('.','/','-'), '', $maskedCNPJ);
                }
            ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Retailer::class,
            'invalid_message' => 'Este valor não é válido.',
        ));
    }
}
