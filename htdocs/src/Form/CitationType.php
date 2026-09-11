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
use App\Enum\Genre;
class CitationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('texte', TextType::class, [
                'label' => 'Citation',
            ])
            ->add('auteur', TextType::class, [
                'label' => 'Auteur',
            ])
            ->add('source', TextType::class, [
                'label' => 'Source',
                'required' => false,
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
