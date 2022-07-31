<?php

namespace Cooperative\CooperativeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ItineraireType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('depart')
            ->add('destination')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cooperative\CooperativeBundle\Entity\Itineraire'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'cooperative_cooperativebundle_itineraire';
    }
}
