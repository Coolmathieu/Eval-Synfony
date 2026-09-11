<?php

namespace App\Form;

use App\Entity\Citation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EnumType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

use App\Enum\Genre;
class CitationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('texte', TextareaType::class, [
                'label' => 'Citation',
                'attr' => ['maxlength' => 2000],
            ])
            ->add('auteur', TextType::class, [
                'label' => 'Auteur',
                'attr' => ['maxlength' => 255],
            ])
            ->add('source', TextType::class, [
                'label' => 'Source',
                'required' => false,
                'attr' => ['maxlength' => 255],

            ])
            ->add('dateCitation', DateType::class, [
                'label' => 'Date de la citation',
                'required' => false,
            ])
            ->add('genre', EnumType::class, [
                'class' => Genre::class,
                'label' => 'Genre',
            ])
            ->add('type', TextType::class, [
                'label' => 'Type',
                'required' => false,
                'attr' => ['maxlength' => 255],
            ])
            ->add('langue', ChoiceType::class, [
                'label' => 'Langue',
                'choices' => [
                    'Français' => 'fr',
                    'Anglais' => 'en',
                    'Latin' => 'la',
                    'Espagnol' => 'es',
                    'Allemand' => 'de',
                ],
            ])
            ->add('tags', ChoiceType::class, [
                'label' => 'Tags / Mots-clés',
                'choices' => [
                    'Philosophie' => 'Philosophie',
                    'Humour' => 'Humour',
                    'Amour' => 'Amour',
                    'Motivation' => 'Motivation',
                    'Cinema' => 'Cinema',
                    'Littérature' => 'Littérature',
                ],
                'multiple' => true,
                'expanded' => true, // Case à cocher (passe à false pour un menu déroulant multi-sélection)
                'required' => false,
            ])
        ;

    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Citation::class,
        ]);
    }

}
