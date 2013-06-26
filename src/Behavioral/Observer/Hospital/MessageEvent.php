<?php

namespace Behavioral\Observer\Hospital;

/**
 * Description of MessageEvent
 *
 * @author jardissone
 */
class MessageEvent implements EventInterface
{

    private $msg;

    public function __construct($msg)
    {
        $this->msg = $msg;
    }

    public function getMsg()
    {
        return $this->msg;
    }

    public function setMsg($msg)
    {
        $this->msg = $msg;
    }

}

?>
