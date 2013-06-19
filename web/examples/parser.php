<?php

require_once __DIR__ . '/../bootstrap.php';

use Util\Util;
use Behavioral\TemplateMethod\Parser\CSVParser;
use Behavioral\TemplateMethod\Parser\XMLParser;

$csvParser = new CSVParser('example.csv');
$csvParser->render();

$xmlParser = new XMLParser('example.xml');
$xmlParser->render();

Util::showImage(__FILE__);
Util::showCode(__FILE__);