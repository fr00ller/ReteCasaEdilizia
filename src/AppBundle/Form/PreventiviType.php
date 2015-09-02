<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PreventiviType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('oggetto')
            ->add('descrizione')
            ->add('dataInserimento')
            ->add('dataLavorazione')
            ->add('idUser')
            ->add('idDitta')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Preventivi'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'appbundle_preventivi';
    }
}
