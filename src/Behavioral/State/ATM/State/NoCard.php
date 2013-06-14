<?php

namespace Behavioral\State\ATM\State;

/**
 * Description of NoCard
 *
 * @author jardissone
 */
class NoCard implements ATMStateInterface
{

    public function __toString()
    {
        return 'Estado actual: NoCard' . PHP_EOL . PHP_EOL;
    }

    public function insertCard(\Behavioral\State\ATM\ATMMachine $atmMachine)
    {
        echo 'insertCard: Tarjeta ingresada, favor ingrese su pin:' . PHP_EOL;
        $atmMachine->setState(new HasCard());
    }

    public function ejectCard(\Behavioral\State\ATM\ATMMachine $atmMachine)
    {
        echo 'ejectCard: ERROR: No se ha ingresado ninguna tarjeta' . PHP_EOL;
    }

    public function insertPin(\Behavioral\State\ATM\ATMMachine $atmMachine, $pin)
    {
        echo 'insertPin: ERROR: No se ha ingresado ninguna tarjeta' . PHP_EOL;
    }

    public function requestCash(\Behavioral\State\ATM\ATMMachine $atmMachine, $cashToWithdraw)
    {
        echo 'requestCash: ERROR: No se ha ingresado ninguna tarjeta' . PHP_EOL;
    }

}

?>
