<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DitteType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('idUtente')
            ->add('idCategoria')
            ->add('ragioneSoc')
            ->add('indirizzo')
            ->add('cap')
            ->add('citta')
            ->add('telefono')
            ->add('email')
            ->add('piva')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Ditte'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'appbundle_ditte';
    }
}
