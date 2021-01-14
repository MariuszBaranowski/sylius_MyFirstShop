<?php

declare(strict_types=1);

namespace App\Form\Extension;

use Sylius\Bundle\AddressingBundle\Form\Type\CountryType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;

final class CountryTypeColorExtension extends AbstractTypeExtension
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // Adding new fields works just like in the parent form type.
            ->add('color', ChoiceType::class, [
                'required' => false,
                'label' => 'app.form.country.color',
                'choices' => [
                    'app.form.country.color.red' => 'app.form.country.color.red',
                    'app.form.country.color.blue' => 'app.form.country.color.blue',
                    'app.form.country.color.green' => 'app.form.country.color.green'
                ]
            ]);
    }

    public static function getExtendedTypes(): iterable
    {
        return [CountryType::class];
    }
}