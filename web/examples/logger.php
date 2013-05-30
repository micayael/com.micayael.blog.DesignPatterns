<?php

// Ejemplo tomado de http://www.baluart.net/articulo/introduccion-a-los-patrones-de-diseno-con-php

require_once __DIR__ . '/../bootstrap.php';

use Util\Util;
use Structural\Decorator\Logger\LoggerFactory;
use Structural\Decorator\Logger\HtmlLoggerDecorator;
use Structural\Decorator\Logger\XmlLoggerDecorator;
use Structural\Decorator\Logger\CsvLoggerDecorator;

$consoleLogger = LoggerFactory::create(LoggerFactory::TYPE_CONSOLE_LOGGER);
$fileLogger = LoggerFactory::create(LoggerFactory::TYPE_FILE_LOGGER);

$consoleLogger->log('Prueba de log');
$consoleLogger->log('Prueba de log');
$consoleLogger->log('Prueba de log');

$htmlLogger = new HtmlLoggerDecorator($consoleLogger);
$htmlLogger->log('Prueba de log');
$htmlLogger->log('Prueba de log');
$htmlLogger->log('Prueba de log');

$xmlLogger = new XmlLoggerDecorator($consoleLogger);
$xmlLogger->log('Prueba de log');
$xmlLogger->log('Prueba de log');
$xmlLogger->log('Prueba de log');

$csvLogger = new CsvLoggerDecorator($consoleLogger);
$csvLogger->log('Prueba de log');
$csvLogger->log('Prueba de log');
$csvLogger->log('Prueba de log');



$fileLogger->log('Prueba de log');
$fileLogger->log('Prueba de log');
$fileLogger->log('Prueba de log');

$htmlLogger = new HtmlLoggerDecorator($fileLogger);
$htmlLogger->log('Prueba de log');
$htmlLogger->log('Prueba de log');
$htmlLogger->log('Prueba de log');

$xmlLogger = new XmlLoggerDecorator($fileLogger);
$xmlLogger->log('Prueba de log');
$xmlLogger->log('Prueba de log');
$xmlLogger->log('Prueba de log');

$csvLogger = new CsvLoggerDecorator($fileLogger);
$csvLogger->log('Prueba de log');
$csvLogger->log('Prueba de log');
$csvLogger->log('Prueba de log');

Util::showImage(__FILE__);
Util::showCode(__FILE__);