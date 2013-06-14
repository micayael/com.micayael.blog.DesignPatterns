<?php

namespace Behavioral\State\ATM\State;

/**
 * Description of NoCash
 *
 * @author jardissone
 */
class NoCash implements ATMStateInterface
{

    public function __toString()
    {
        return 'Estado actual: NoCash' . PHP_EOL . PHP_EOL;
    }

    public function insertCard(\Behavioral\State\ATM\ATMMachine $atmMachine)
    {
        echo 'insertCard: ERROR: este cajero no dispone de fondos' . PHP_EOL;
        $this->ejectCard($atmMachine);
    }

    public function ejectCard(\Behavioral\State\ATM\ATMMachine $atmMachine)
    {
        echo 'ejectCard: Expulsando tarjeta, muchas gracias' . PHP_EOL;
    }

    public function insertPin(\Behavioral\State\ATM\ATMMachine $atmMachine, $pin)
    {
        echo 'insertPin: ERROR: este cajero no dispone de fondos' . PHP_EOL;
        $this->ejectCard($atmMachine);
    }

    public function requestCash(\Behavioral\State\ATM\ATMMachine $atmMachine, $cashToWithdraw)
    {
        echo 'requestCash: ERROR: este cajero no dispone de fondos' . PHP_EOL;
        $this->ejectCard($atmMachine);
    }

}

?>
