<?php

namespace App\Grid;

use Sylius\Component\Grid\Event\GridDefinitionConverterEvent;
use Sylius\Component\Grid\Definition\Field;

final class AdminCountryGridListener
{
    public function editFields(GridDefinitionConverterEvent $event): void
    {
        $grid = $event->getGrid();

        // Add
        $codeField = Field::fromNameAndType('color', 'string');
        $codeField->setLabel('app.form.country.color');
        // ...
        $grid->addField($codeField);
    }
}