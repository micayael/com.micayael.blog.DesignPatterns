<?php

namespace Structural\Decorator\FileReadWrite;

/**
 * Description of FileStream
 *
 * @author jardissone
 */
class FileStream extends AbstractStream
{

    public function read()
    {
        echo 'Reading...' . PHP_EOL;
    }

    public function write()
    {
        echo 'Writing...' . PHP_EOL;
    }

}

?>
