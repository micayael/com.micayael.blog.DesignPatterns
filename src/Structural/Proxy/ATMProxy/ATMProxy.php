<?php

namespace Structural\Proxy\ATMProxy;

use Behavioral\State\ATM\ATMMachine;

/**
 * Description of ATMProxy
 *
 * @author jardissone
 */
class ATMProxy implements ATMMachineInterface
{
    
    private $atmMachine;
    
    public function __construct()
    {
        $this->atmMachine = new ATMMachine();
    }

    public function getCashInMachine()
    {
        return $this->atmMachine->getCashInMachine();
    }

    public function getState()
    {
        return $this->atmMachine->getState();
    }

}

?>
