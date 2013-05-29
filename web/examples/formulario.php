<?php

require_once __DIR__ . '/../bootstrap.php';

use Util\Util;
use Creational\Builder\Form\FormDirector;
use Creational\Builder\Form\LoginForm;
use Creational\Builder\Form\ContactoForm;

$formDirector = new FormDirector();

$loginForm = $formDirector->buildForm(new LoginForm());
echo $loginForm->render();

echo '<hr />';

$contactoForm = $formDirector->buildForm(new ContactoForm());
echo $contactoForm->render();

Util::showCode(__FILE__);