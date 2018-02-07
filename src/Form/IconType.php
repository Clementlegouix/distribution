<?php
// src/Form/IconType.php
namespace App\Form;

use App\Entity\Icon;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class IconType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class, 
                array ( 'attr'=> array(
                        'class'=> 'form-control',
                        'placeholder'=> 'Nom d\'utilisateur') ))
            ->add('image', FileType::class, 
                    array ( 'label' => 'Icon de l adhérent',
                            'attr'=> array(
                                'class'=> 'form-control',
                                'placeholder'=> 'Nom d\'utilisateur')))
            ->add('Enregistrer', SubmitType::class, 
                array ( 'attr'=> array('class'=> 'btn btn-primary') ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Icon::class,
        ));
    }
}