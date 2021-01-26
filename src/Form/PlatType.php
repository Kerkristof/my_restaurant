<?php

namespace App\Form;

use App\Entity\Plat;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class PlatType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
              'label' => 'Nom',
              'attr' => [
                'class' => 'form-control',
                'placeholder' => 'Entrez un nom'
              ]
            ])
            ->add('content', TextareaType::class, [
              'label' => 'Description',
              'row_attr' => [
                'class' => 'text-editor'
              ],
              'attr' => [
                'class' => 'form-control',
                'placeholder' => 'Entrez une description'
              ]
            ])
            ->add('save', SubmitType::class, [
              'label' => 'Save',
              'attr' => [
                'class' => 'form-control btn btn-dark'
              ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Plat::class,
        ]);
    }
}
