<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class DistributionType extends AbstractType
{
    

	/**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('adress', TextType::class, array(	'attr' => array('class' => 'form-control'),
													'label_attr' => array('class' => 'col'),
													)
			)
            ->add('zipcode')
            ->add('county')
            ->add('city')
            ->add('weekdays', EntityType::class, array(   'class' => 'AppBundle:Weekdays',
															'expanded'=> true,
															'multiple'=> true
															)
				)
            ->add('hour1',ChoiceType::class,
				array('choices' => array(
						'6.00' => '1',
						'6.30' => '2',
						'7.00' => '3',
						'7.30' => '4',
						'8.00' => '5',
						'8.30' => '6',
						'9.00' => '7',
						'9.30' => '8',
						'10.00' => '9',
						'10.30' => '10',
						'11.00' => '11',
						'11.30' => '12',
						'12.00' => '13',
						'12.30' => '14',
						'13.00' => '15',
						'13.30' => '16',
						'14.00' => '17',
						'14.30' => '18',
						'15.00' => '19',
						'15.30' => '20',
						'16.00' => '21',
						'16.30' => '22',
						'17.00' => '23',
						'17.30' => '24',
						'18.00' => '25',
						'18.30' => '26',
						'19.00' => '27',
						'19.30' => '28',
						'20.00' => '29',
						'20.30' => '30',
						'21.00' => '31',
						'21.30' => '32',
						'22.00' => '33',
						'22.30' => '34',
						'23.00' => '35',
						'23.30' => '36'),						
						'choices_as_values' => true,
						'multiple'=>false,
						'expanded'=>false,
						'attr' => array('class' => 'form-control'),
						'label_attr' => array('class' => 'col')
						)
				)
           ->add('hour2',ChoiceType::class,
				array('choices' => array(
						'6.00' => '1',
						'6.30' => '2',
						'7.00' => '3',
						'7.30' => '4',
						'8.00' => '5',
						'8.30' => '6',
						'9.00' => '7',
						'9.30' => '8',
						'10.00' => '9',
						'10.30' => '10',
						'11.00' => '11',
						'11.30' => '12',
						'12.00' => '13',
						'12.30' => '14',
						'13.00' => '15',
						'13.30' => '16',
						'14.00' => '17',
						'14.30' => '18',
						'15.00' => '19',
						'15.30' => '20',
						'16.00' => '21',
						'16.30' => '22',
						'17.00' => '23',
						'17.30' => '24',
						'18.00' => '25',
						'18.30' => '26',
						'19.00' => '27',
						'19.30' => '28',
						'20.00' => '29',
						'20.30' => '30',
						'21.00' => '31',
						'21.30' => '32',
						'22.00' => '33',
						'22.30' => '34',
						'23.00' => '35',
						'23.30' => '36'),						
						'choices_as_values' => true,
						'multiple'=>false,
						'expanded'=>false,
						'attr' => array('class' => 'form-control'),
						'label_attr' => array('class' => 'col')
						)
				)
           ->add('hour3',ChoiceType::class,
				array('choices' => array(
						'6.00' => '1',
						'6.30' => '2',
						'7.00' => '3',
						'7.30' => '4',
						'8.00' => '5',
						'8.30' => '6',
						'9.00' => '7',
						'9.30' => '8',
						'10.00' => '9',
						'10.30' => '10',
						'11.00' => '11',
						'11.30' => '12',
						'12.00' => '13',
						'12.30' => '14',
						'13.00' => '15',
						'13.30' => '16',
						'14.00' => '17',
						'14.30' => '18',
						'15.00' => '19',
						'15.30' => '20',
						'16.00' => '21',
						'16.30' => '22',
						'17.00' => '23',
						'17.30' => '24',
						'18.00' => '25',
						'18.30' => '26',
						'19.00' => '27',
						'19.30' => '28',
						'20.00' => '29',
						'20.30' => '30',
						'21.00' => '31',
						'21.30' => '32',
						'22.00' => '33',
						'22.30' => '34',
						'23.00' => '35',
						'23.30' => '36'),						
						'choices_as_values' => true,
						'multiple'=>false,
						'expanded'=>false,
						'attr' => array('class' => 'form-control'),
						'label_attr' => array('class' => 'col')
						)
				)
           ->add('hour4',ChoiceType::class,
				array('choices' => array(
						'6.00' => '1',
						'6.30' => '2',
						'7.00' => '3',
						'7.30' => '4',
						'8.00' => '5',
						'8.30' => '6',
						'9.00' => '7',
						'9.30' => '8',
						'10.00' => '9',
						'10.30' => '10',
						'11.00' => '11',
						'11.30' => '12',
						'12.00' => '13',
						'12.30' => '14',
						'13.00' => '15',
						'13.30' => '16',
						'14.00' => '17',
						'14.30' => '18',
						'15.00' => '19',
						'15.30' => '20',
						'16.00' => '21',
						'16.30' => '22',
						'17.00' => '23',
						'17.30' => '24',
						'18.00' => '25',
						'18.30' => '26',
						'19.00' => '27',
						'19.30' => '28',
						'20.00' => '29',
						'20.30' => '30',
						'21.00' => '31',
						'21.30' => '32',
						'22.00' => '33',
						'22.30' => '34',
						'23.00' => '35',
						'23.30' => '36'),						
						'choices_as_values' => true,
						'multiple'=>false,
						'expanded'=>false,
						'attr' => array('class' => 'form-control'),
						'label_attr' => array('class' => 'col')
						)
				)
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Distribution'
        ));
    }
}
