<?php

namespace Cooperative\CooperativeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ItineraireCoopType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('prix')
            ->add('cooperative')
            ->add('place');
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cooperative\CooperativeBundle\Entity\ItineraireCoop'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'cooperative_cooperativebundle_itinerairecoop';
    }
}
