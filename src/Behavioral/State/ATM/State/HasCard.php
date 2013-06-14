<?php

namespace Behavioral\State\ATM\State;

/**
 * Description of HasCard
 *
 * @author jardissone
 */
class HasCard implements ATMStateInterface
{

    public function __toString()
    {
        return 'Estado actual: HasCard' . PHP_EOL . PHP_EOL;
    }

    public function insertCard(\Behavioral\State\ATM\ATMMachine $atmMachine)
    {
        echo 'insertCard: ERROR: El cajero ya cuenta con una tarjeta' . PHP_EOL;
    }

    public function ejectCard(\Behavioral\State\ATM\ATMMachine $atmMachine)
    {
        echo 'ejectCard: Expulsando tarjeta, muchas gracias' . PHP_EOL;
        $atmMachine->setState(new NoCard());
    }

    public function insertPin(\Behavioral\State\ATM\ATMMachine $atmMachine, $pin)
    {
        echo 'insertPin: Validando PIN' . PHP_EOL;

        if($pin == 1234)
        {
            echo 'PIN ingresado correctamente' . PHP_EOL;
            $atmMachine->setState(new HasPin());
        }
        else
        {
            echo 'El PIN ingresado no es válido' . PHP_EOL;
            $this->ejectCard($atmMachine);
        }
    }

    public function requestCash(\Behavioral\State\ATM\ATMMachine $atmMachine, $cashToWithdraw)
    {
        echo 'requestCash: ERROR: No has ingresado el PIN' . PHP_EOL;
    }

}

?>
