<?php

namespace Structural\Decorator\Logger;

/**
 * Description of HtmlLogger
 *
 * @author jardissone
 */
class XmlLoggerDecorator extends AbstractLoggerDecorator
{

    public function log($msg)
    {
        $msg = $this->makeXML($msg);
        $this->logger->log($msg);
    }
    
    private function makeXML($text)
    {
        $ret = '<log date="%s" time="%s">%s</log>';
        $ret = sprintf($ret, date('Y-m-d'), date('h:i:s'), $text);
        
        return $ret;
    }

}

?>
