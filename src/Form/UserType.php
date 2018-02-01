<?php
// src/Form/UserType.php
namespace App\Form;

use App\Entity\User;
use App\Entity\Role;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class, 
                array ( 'attr'=> array(
                        'class'=> 'form-control',
                        'placeholder'=> 'Email') ))
            ->add('username', TextType::class, 
                array ( 'attr'=> array(
                        'class'=> 'form-control',
                        'placeholder'=> 'Nom d\'utilisateur') ))
            ->add('plainPassword', RepeatedType::class, array(
                'type' => PasswordType::class,
                'first_options'  => array('label' => 'Password',
                                            'attr' => array(
                                                        'class'=> 'form-control',
                                                        'placeholder'=> 'Mot de passe')),
                'second_options' => array('label' => 'Repeat Password',
                                            'attr' => array(
                                                        'class'=> 'form-control',
                                                        'placeholder'=> 'retaper le mot de passe')),
            ))
            ->add('role', EntityType::class, array(
                'class' => Role::class,
                'choice_label' => 'nom',
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => User::class,
        ));
    }
}