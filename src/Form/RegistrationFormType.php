<?php

namespace App\Form;

use App\Entity\Users;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class, [
              'label' => 'Email',
              'attr' => [
                'class' => 'form-control',
              ],
            ])
            ->add('plainPassword', RepeatedType::class, [
              'type' => PasswordType::class,
              'mapped' => false,
              'invalid_message' => 'Les mots de passe doivent être indentiques',
              'options' => [
                'attr' => [
                  'class' => 'form-control',
                ],
              ],
              'first_options' => [
                'label' => 'Choisissez un mot de passe',
                'constraints' => [
                  new NotBlank([
                    'message' => 'Veuillez saisir un mot de passe',
                  ]),
                  new Length([
                    'min' => 6,
                    'minMessage' => 'Votre mot de passe doit contenir au moins {{ limit }} characteres',
                    // max length allowed by Symfony for security reasons
                    'max' => 4096,
                  ]),
                ],
              ],
              'second_options' => [
                  'label' => 'Confirmez le mot de passe',
              ],
            ])
            ->add('agreeTerms', CheckboxType::class, [
                'mapped' => false,
                'label' => 'Acceptez les conditons générales',
                'constraints' => [
                    new IsTrue([
                        'message' => 'You should agree to our terms.',
                    ]),
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Users::class,
        ]);
    }
}
