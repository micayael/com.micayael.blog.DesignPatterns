<?php

// Ejemplo tomado de http://www.youtube.com/watch?v=0y9Ws31aC3o

require_once __DIR__ . '/../bootstrap.php';

use Util\Util;
use Behavioral\Observer\Hospital\Patient;
use Behavioral\Observer\Hospital\Doctor;
use Behavioral\Observer\Hospital\Nurse;

$patient1 = new Patient();
$patient2 = new Patient();
$doctor1 = new Doctor();
$nurse1 = new Nurse();
$nurse2 = new Nurse();

$patient1->setName('Patient 1');
$patient2->setName('Patient 2');
$doctor1->setName('Doctor 1');
$nurse1->setName('Nurse 1');
$nurse2->setName('Nurse 2');

$patient1->addObserver($doctor1);
$patient1->addObserver($nurse1);

$patient2->addObserver($doctor1);
$patient2->addObserver($nurse2);

$patient1->emergency();
$patient2->emergency();

Util::showImage(__FILE__);
Util::showCode(__FILE__);