<?php


namespace CalendrierMedecinsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class RecherchePatientForm extends AbstractType {

public function buildForm(FormBuilderInterface $builder,array $options){

    $builder
        ->add('nom',TextType::class,
        [
            'label'=>'Nom de patient:  ',
            'attr'=>['placeholder'=>'Taper le nom de patient']
        ])
        
        ->add('prenom',TextType::class,
        [
            'label'=>'Prenom de patient:  ',
            'attr'=>['placeholder'=>'Taper le prenom de patient']
            
        ]);
    }

        
    
}


