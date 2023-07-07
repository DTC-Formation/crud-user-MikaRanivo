<?php

namespace App\Form;

use App\Enntity\Voiture;
use Symfony\component\Form\AbstractType;
use Symfony\component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;



class VoitureType extends AbstractType
{
    //implementation du methode BuildForm() pour le champ de formulaire
    public function BuildForm(FormBuilderInterface $builder, array $option )
    {
        $builder
            ->add('type',TextType::class,[
               "attr"=>[
                    "placeholder"=>"Type",
                    
               ],
               "label"=>"Type",
            ])
            ->add('modele',TextType::class,[
                "attr"=>[
                    "placeholder"=>"Modele",
                ],
                "label"=>"Modele",

            ])
            ->add('color', TextType::class,[
                "attr"=>[
                    "placeholder"=>"Couleur",
                ],
                "label"=>"Couleur",
            ])
            ->add('number', TextType::class, [
                "attr"=>[
                    "placeholder"=>"Imatriculation ",
                ],
                "label"=>"Immatriculation",
            ])
            ->add('marque', TextType::class,[
                "attr"=>[
                    "placeholder"=>"Marque",
                ],
            ]);
        
    }

    //implementation du methode ConfigureOption() pour les option du configuration du formulaire
    public function ConfigureOption(OptionsResolver $resolver)
    {
        $resolver->setDefault([
            'data_class' => Voiture::class,
            'required'=> false,
        ]);

    }


}