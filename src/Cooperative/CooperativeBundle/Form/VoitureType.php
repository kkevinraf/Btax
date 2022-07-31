<?php

namespace Cooperative\CooperativeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class VoitureType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('immatriculation')
            ->add('nomProprietaire')
            ->add('nIF')
            ->add('place')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cooperative\CooperativeBundle\Entity\Voiture'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'cooperative_cooperativebundle_voiture';
    }
}
