<?php

namespace Structural\Decorator\FileReadWrite;

/**
 * Description of CompressedFileStreamDecorator
 *
 * @author jardissone
 */
class EncryptedFileStreamDecorator extends AbstractStream
{
    
    protected $_fileStream;
    
    public function __construct(AbstractStream $fileStream)
    {
        $this->_fileStream = $fileStream;
    }

    public function read()
    {
        echo $this->_fileStream->read();
        echo 'Decrypting...' . PHP_EOL;
    }

    public function write()
    {
        echo 'Encrypting...' . PHP_EOL;
        echo $this->_fileStream->write();
    }

}

?>
