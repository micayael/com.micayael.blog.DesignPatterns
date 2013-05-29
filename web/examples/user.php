<?php

// Ejemplo tomado de http://desarrolladorsenior.blogspot.com/2009/09/patron-simple-factory-en-php5.html

require_once __DIR__ . '/../bootstrap.php';

use Util\Util;
use Creational\FactoryMethod\User\UserFactory;

echo $guest = UserFactory::create(UserFactory::GUEST);
echo $customer = UserFactory::create(UserFactory::CUSTOMER);
echo $admin = UserFactory::create(UserFactory::ADMIN);

Util::showCode(__FILE__);