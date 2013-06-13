<?php

namespace Structural\Proxy\Cache;

/**
 * Description of Proxy
 *
 * @author jardissone
 */
class Proxy implements SubjectBaseInterface
{

    private $_realSubject;
    private $_result;

    public function __construct()
    {
        $this->_realSubject = new RealSubject();
    }

    public function performAction()
    {
        if($this->_result == null)
        {
            $this->_result = $this->_realSubject->performAction();
        }

        return $this->_result;
    }

}

?>
