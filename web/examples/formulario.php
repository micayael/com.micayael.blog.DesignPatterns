<?php

require_once __DIR__ . '/../bootstrap.php';

use Util\Util;
use Creational\Builder\Formulario\FormDirector;
use Creational\Builder\Formulario\LoginForm;
use Creational\Builder\Formulario\ContactoForm;

$formDirector = new FormDirector(new LoginForm());
$loginForm = $formDirector->buildForm();
echo $loginForm->render();

echo '<hr />';

$formDirector = new FormDirector(new ContactoForm());
$contactoForm = $formDirector->buildForm();
echo $contactoForm->render();

Util::showImage(__FILE__);
Util::showCode(__FILE__);