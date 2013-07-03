<?php

namespace Behavioral\Observer\Ecommerce\Observer;

/**
 * Description of Observer
 *
 * @author jardissone
 */
class HistorialObserver implements ObserverInterface
{

    public function onMessage(EventInterface $event)
    {
        $data = $event->getData();

        $pattern = '%s;%s;%s;%s' . PHP_EOL;

        $this->log(sprintf($pattern, $data['date'], $data['user'], $data['state'], $data['msg']));
    }

    private function log($msg)
    {
        $filename = '/tmp/historial.log';
        $fp = fopen($filename, 'a');
        fwrite($fp, $msg);
        fclose($fp);
    }

}

?>
