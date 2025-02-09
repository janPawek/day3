<?php

namespace App\Form;

use App\Entity\Product;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', null, ['attr' => ['class' => 'form-control myclass', 'placeholder' => 'Product name', 'id' => 'input']])
            ->add('price', null, [
                "attr" => [
                    "class" => "form-control",
                    "placeholder" => "Product price"
                ]
            ])
            ->add('description', null, [
                "attr" => [
                    "class" => "form-control",
                    "placeholder" => "Product Description"
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}
