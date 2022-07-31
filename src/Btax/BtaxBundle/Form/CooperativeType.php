<?php

namespace Btax\BtaxBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CooperativeType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('adresse')
            ->add('contact')
            ->add('mail')
            ->add('dateInscription')
            ->add('logo', 'file', array('required'=>false))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Btax\BtaxBundle\Entity\Cooperative'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'btax_btaxbundle_cooperative';
    }
}
