<?php

namespace Structural\Proxy\Cache;

/**
 * Description of NumberMultiplier
 *
 * @author jardissone
 */
class RealSubject implements SubjectBaseInterface
{

    public function performAction()
    {
        sleep(1);
        return '(' . date('H:i:s') . ')' . 'Proceso ejecutado despues de 1 segundo de procesamiento' . PHP_EOL;
    }

}

?>
