<?php

namespace Structural\Proxy\ImageViewer;

/**
 * Description of ImageProxy
 *
 * @author jardissone
 */
class ImageProxy implements ImageInterface
{
    
    private $imageFilePath;
    
    private $proxifiedImage;
    
    public function __construct($imageFilePath)
    {
        $this->imageFilePath = $imageFilePath;
    }

    public function showImage()
    {
        $this->proxifiedImage = new HighResolutionImage($this->imageFilePath);
        $this->proxifiedImage->showImage();
    }

}

?>
