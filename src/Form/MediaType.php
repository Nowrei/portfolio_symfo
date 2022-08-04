<?php

namespace App\Form;

use App\Entity\Media;
use App\Entity\Projet;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class MediaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre', TextType::class)
            ->add('url', TextType::class)
            ->add('projet', EntityType::class, [
                // looks for choices from this entity
                'class' => Projet::class,
            
                // uses the User.username property as the visible option string
                'choice_label' => 'titre',
            
                // used to render a select box, check boxes or radios
                // 'multiple' => true,
                // 'expanded' => true,
            ])
            // ->add('agreeTerms', CheckboxType::class)
            ->add('agreeTerms', CheckboxType::class, [
                    'mapped' => false,
                    'label' => "Abandonne ici tout espoir"
                ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Media::class,
        ]);
    }
}
