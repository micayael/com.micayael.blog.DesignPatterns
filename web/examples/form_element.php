<?php

require_once __DIR__ . '/../bootstrap.php';

use Util\Util;
use Creational\FactoryMethod\FormElement\InputFormElementFactory;
use Creational\FactoryMethod\FormElement\SelectionFormElementFactory;

$inputText = InputFormElementFactory::create(InputFormElementFactory::TYPE_INPUT_TEXT, 'Nombre:', array(
            'id' => 'input1',
            'value' => 'Juan Ardissone'
        ));

echo $inputText->getHTML();
echo '<br />';

$inputText = InputFormElementFactory::create(InputFormElementFactory::TYPE_INPUT_PASSWORD, 'Clave:');

echo $inputText->getHTML();
echo '<br />';

$textarea = InputFormElementFactory::create(InputFormElementFactory::TYPE_TEXTAREA, 'Descripcion:', array(
            'id' => 'textarea1',
            'value' => 'Ingrese una descripcion'
        ));
echo $textarea->getHTML();
echo '<br />';

$select = SelectionFormElementFactory::create(SelectionFormElementFactory::TYPE_SELECT, 'Pais:', array(
            'id' => 'paises',
            'value' => '',
            'name' => 'paises',
                ), array('US' => 'EE.UU.', 'BR' => 'Brasil'));
echo $select->getHTML();


Util::showImage(__FILE__);
Util::showCode(__FILE__);