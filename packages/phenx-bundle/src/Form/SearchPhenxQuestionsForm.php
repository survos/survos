<?php

namespace PhenxBundle\Form;

use Petkopara\MultiSearchBundle\Form\Type\MultiSearchType;
use PhenxBundle\Entity\Variable;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SearchPhenxQuestionsForm extends AbstractType

{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->setMethod('GET')
            ->add('q', MultiSearchType::class, array(
                    'class' => Variable::class, //required
                    'label' => "Search term(s)",
                    'search_fields' => array( //optional, if it's empty it will search in the all entity columns
                        'questionText',
                        'varname',
                    ),
                    'search_comparison_type' => 'wildcard' //optional, what type of comparison to applied ('wildcard','starts_with', 'ends_with', 'equals')
            ))
            ->add('searchBtn', SubmitType::class, [
                'label' => 'Search'
            ]);
    ;
}

    public function getBlockPrefix(){
        return '';
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'csrf_protection' => false,
        ));
    }

}

