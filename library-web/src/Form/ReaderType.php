<?php

namespace App\Form;

use App\Entity\Reader;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class ReaderType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('fullName', null, [
                'label' => 'ФИО читателя'
            ])
            ->add('ticketNumber', null, [
                'label' => 'Номер читательского билета'
            ])
            ->add('contacts', null, [
                'label' => 'Контактная информация'
            ])
            ->add('email', EmailType::class, [
                'required' => false,
                'label' => 'Email'
            ])
            ->add('plainPassword', PasswordType::class, [
                'label' => 'Пароль',
                'required' => false,
                'mapped' => false,
                'help' => 'Оставьте пустым, чтобы не менять пароль'
            ])
            ->add('roles', ChoiceType::class, [
                'label' => 'Роли',
                'multiple' => true,
                'choices' => [
                    'Читатель' => 'ROLE_READER',
                    'Библиотекарь' => 'ROLE_LIBRARIAN',
                    'Администратор' => 'ROLE_ADMIN',
                ],
                'required' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reader::class,
        ]);
    }
}
