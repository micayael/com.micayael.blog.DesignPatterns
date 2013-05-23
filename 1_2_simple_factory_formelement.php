<?php

require_once './bootstrap.php';

use Creational\FactoryMethod\FormElement\FormElementFactory;

$inputText = FormElementFactory::create(FormElementFactory::TYPE_INPUT_TEXT, 'Nombre:', array(
    'id' => 'input1', 
    'value' => 'Juan Ardissone'
));

echo $inputText->getHTML();
echo '<br />';

$inputText = FormElementFactory::create(FormElementFactory::TYPE_INPUT_PASSWORD, 'Clave:');

echo $inputText->getHTML();
echo '<br />';

$textarea = FormElementFactory::create(FormElementFactory::TYPE_TEXTAREA, 'Descripcion:', array(
    'id' => 'textarea1', 
    'value' => 'Ingrese una descripcion'
));
echo $textarea->getHTML();