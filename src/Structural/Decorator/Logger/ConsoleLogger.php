<?php

namespace Structural\Decorator\Logger;

/**
 * Description of ConsoleLogger
 *
 * @author jardissone
 */
class ConsoleLogger implements LoggerInterface
{

    public function log($msg)
    {
        echo $msg . PHP_EOL;
    }

}

?>
