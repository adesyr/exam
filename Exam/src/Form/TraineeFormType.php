<?php

namespace App\Form;

use App\Entity\Trainee;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TraineeFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('name', TextType::class, ['label' =>'Nom:'])
            ->add('phone', TextType::class, ['label' =>'Téléphone:'])
            ->add('birthday', DateType::class, ['label' => 'Date d\'anniversaire'])

            ->add('skills', CollectionType::class, [
                'entry_type' => SkillType::class,
                'prototype' => true,
                'allow_add' => true,
                'label' => false,
                'by_reference' => false
            ])


        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Trainee::class,
        ]);
    }
}
