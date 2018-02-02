<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OpenHoursType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
			->add('weekDay',ChoiceType::class,
				array('choices' => array(
						'Monday' => 'Monday',
						'Tuesday' => 'Tuesday',
						'Wednesday' => 'Wednesday',
						'Thursday' => 'Thursday',
						'Friday' => 'Friday',
						'Saturday' => 'Saturday',
						'Sunday' => 'Sunday'),
						'choices_as_values' => true,
						'multiple'=>true,
						'expanded'=>true),
				array(	'attr' => array('class' => 'form-control'),
										'label_attr' => array('class' => ''),
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
						'expanded'=>false)
				)
            ->add('hour2')
            ->add('hour3')
            ->add('hour4')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\OpenHours'
        ));
    }
}
