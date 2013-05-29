<?php

namespace Structural\Decorator\Logger;

/**
 * Description of ConsoleLogger
 *
 * @author jardissone
 */
class FileLogger implements LoggerInterface
{
    
    private $filename = '/tmp/filelogger.log';

    public function log($msg)
    {
        $msg = $msg . PHP_EOL;
        
        $fp = fopen($this->filename, 'a');
        fwrite($fp, $msg);
        fclose($fp);
    }

}

?>
