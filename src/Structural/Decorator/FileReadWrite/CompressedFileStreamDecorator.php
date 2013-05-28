<?php

namespace Structural\Decorator\FileReadWrite;

/**
 * Description of CompressedFileStreamDecorator
 *
 * @author jardissone
 */
class CompressedFileStreamDecorator extends AbstractStream
{
    
    protected $_fileStream;
    
    public function __construct(AbstractStream $fileStream)
    {
        $this->_fileStream = $fileStream;
    }

    public function read()
    {
        echo $this->_fileStream->read();
        echo 'Decompressing...' . PHP_EOL;
    }

    public function write()
    {
        echo 'Compressing...' . PHP_EOL;
        echo $this->_fileStream->write();
    }

}

?>
