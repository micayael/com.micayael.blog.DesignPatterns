<?php

namespace Structural\Decorator\Logger;

/**
 * Description of HtmlLogger
 *
 * @author jardissone
 */
class HtmlLoggerDecorator extends AbstractLoggerDecorator
{

    public function log($msg)
    {
        $msg = $this->makeHTML($msg);
        $this->logger->log($msg);
    }

    private function makeHTML($text)
    {
        $ret = '<table border="1" width="100%"><tr><td>' . date('Y-m-d') . '</td><td>' . date('h:i:s') . '</td><td>' . $text . '</td></tr></table>';

        return $ret;
    }

}

?>
