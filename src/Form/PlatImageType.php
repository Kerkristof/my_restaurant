<?php

namespace App\Form;

use App\Entity\PlatImage;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PlatImageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('imageFile', FileType::class, [
              'label' => 'Image',
              'required' => true,
              'attr' => [
                'class' => 'form-control'
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
            'data_class' => PlatImage::class,
        ]);
    }
}
