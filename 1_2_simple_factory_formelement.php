<?php

require_once './bootstrap.php';

use Creational\SimpleFactory\FormElement\FormElementFactory;

$inputText = FormElementFactory::create(FormElementFactory::TYPE_INPUT_TEXT);
$inputText->setId('input1');
$inputText->setLabel('Nombre:');
$inputText->setValue('Juan Ardissone');
echo $inputText->getHTML();

$textarea = FormElementFactory::create(FormElementFactory::TYPE_TEXTAREA);
$textarea->setId('textarea1');
$textarea->setLabel('Descripcion:');
$textarea->setValue('Ingrese una descripcion');
echo $textarea->getHTML();