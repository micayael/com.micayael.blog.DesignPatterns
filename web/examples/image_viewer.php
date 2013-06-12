<?php

// Ejemplo tomado de http://www.oodesign.com/proxy-pattern.html

require_once __DIR__ . '/../bootstrap.php';

use Util\Util;
use Structural\Proxy\ImageViewer\ImageProxy;
use Structural\Proxy\ImageViewer\HighResolutionImage;

// assuming that the user selects a folder that has 3 images	
//create the 3 images 	
$highResolutionImage1 = new ImageProxy("sample/veryHighResPhoto1.jpeg");
$highResolutionImage2 = new ImageProxy("sample/veryHighResPhoto2.jpeg");
$highResolutionImage3 = new ImageProxy("sample/veryHighResPhoto3.jpeg");

// assume that the user clicks on Image one item in a list
// this would cause the program to call showImage() for that image only
// note that in this case only image one was loaded into memory
$highResolutionImage1->showImage();

echo '<br /><br />' . PHP_EOL;

// consider using the high resolution image object directly
$highResolutionImageNoProxy1 = new HighResolutionImage("sample/veryHighResPhoto1.jpeg");
$highResolutionImageNoProxy2 = new HighResolutionImage("sample/veryHighResPhoto2.jpeg");
$highResolutionImageNoProxy3 = new HighResolutionImage("sample/veryHighResPhoto3.jpeg");


// assume that the user selects image two item from images list
$highResolutionImageNoProxy1->showImage();

// note that in this case all images have been loaded into memory 
// and not all have been actually displayed
// this is a waste of memory resources

Util::showImage(__FILE__);
Util::showCode(__FILE__);