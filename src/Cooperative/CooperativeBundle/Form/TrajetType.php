<?php

namespace Cooperative\CooperativeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Cooperative\CooperativeBundle\Repository\VoitureRepository;

class TrajetType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date')
            ->add('heure')
            ->add('statut')
            ->add('cooperative')
            ->add('voiture', 'entity',
                        array(
                           'class' => 'Cooperative\\CooperativeBundle\\Entity\\Voiture',
                           'property' => 'immatriculation',
                           'query_builder' => function(VoitureRepository $er)
                           {
                                return $er->getCooperativeVoiture();
                           }     
                        ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cooperative\CooperativeBundle\Entity\Trajet'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'cooperative_cooperativebundle_trajet';
    }
}
