<?php

namespace Structural\Decorator\Logger;

/**
 * Description of HtmlLogger
 *
 * @author jardissone
 */
class CsvLoggerDecorator extends AbstractLoggerDecorator
{

    public function log($msg)
    {
        $msg = $this->makeCsv($msg);
        $this->logger->log($msg);
    }
    
    private function makeCsv($text)
    {
        $ret = date('Y-m-d') . ';' . date('h:i:s') . ';' . $text;
        
        return $ret;
    }

}

?>
