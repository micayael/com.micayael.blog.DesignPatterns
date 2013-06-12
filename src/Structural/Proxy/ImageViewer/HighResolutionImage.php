<?php

namespace Structural\Proxy\ImageViewer;

/**
 * Description of HighResolutionImage
 *
 * @author jardissone
 */
class HighResolutionImage implements ImageInterface
{
    
    private $image;            
    
    public function __construct($imageFilePath)
    {
        $this->loadImage($imageFilePath);
    }
    
    private function loadImage($imageFilePath)
    {
        $this->image = $imageFilePath;
        echo 'Loading image: ' . $imageFilePath . PHP_EOL;
    }

    public function showImage()
    {
        echo 'Showing image: ' . $this->image . PHP_EOL;
    }

}

?>
