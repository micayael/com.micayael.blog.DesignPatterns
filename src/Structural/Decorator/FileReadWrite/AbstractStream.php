<?php

namespace Structural\Decorator\FileReadWrite;

/**
 * Description of AbstractStream
 *
 * @author jardissone
 */
abstract class AbstractStream
{

    public abstract function read();
    public abstract function write();

}

?>
