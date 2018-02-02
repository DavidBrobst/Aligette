<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use AppBundle\Form\ProductsType;
use AppBundle\Form\ProductCatType;
use AppBundle\Form\DistributionType;

class RetailType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('zipCode')
            ->add('adress')
            ->add('email1')
            ->add('email2')
            ->add('phoneNumber1')
            ->add('phoneNumber2')
            ->add('farmer' )
            ->add('founded' )
            ->add('city' )
            ->add('website' )
            ->add('description' )
			->add('productCats', EntityType::class, array(   'class' => 'AppBundle:ProductCat',
															'expanded'=> true,
															'multiple'=> true
															)
				)
			->add('labels', EntityType::class, array(   'class' => 'AppBundle:Labels',
															'expanded'=> true,
															'multiple'=> true
															)
				)
            ->add('distributions',  CollectionType::class, array( 'entry_type' => DistributionType::class,
															'prototype' => true,
															'allow_add' => true,
															'allow_delete' => true	
														)
				)
			->add('save', SubmitType::class)
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Retail'
        ));
    }
}
