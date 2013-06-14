<?php

namespace Behavioral\State\ATM\State;

/**
 * Description of HasPin
 *
 * @author jardissone
 */
class HasPin implements ATMStateInterface
{

    public function __toString()
    {
        return 'Estado actual: HasPin' . PHP_EOL . PHP_EOL;
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
        echo 'insertPin: ERROR: Ya se ha ingresado un PIN' . PHP_EOL;
    }

    public function requestCash(\Behavioral\State\ATM\ATMMachine $atmMachine, $cashToWithdraw)
    {
        echo 'requestCash: Verificando fondos para cubrir el monto solicitado: ' . $cashToWithdraw . PHP_EOL;

        if($cashToWithdraw <= $atmMachine->getCashInMachine())
        {
            $saldo = $atmMachine->getCashInMachine() - $cashToWithdraw;

            $pattern = 'Fondos: %s, Retiro: %s, Saldo: %s' . PHP_EOL;
            echo sprintf($pattern, $atmMachine->getCashInMachine(), $cashToWithdraw, $saldo);

            $atmMachine->setCashInMachine($saldo);
            $this->ejectCard($atmMachine);

            if($atmMachine->getCashInMachine() == 0)
            {
                $atmMachine->setState(new NoCash());
            }
        }
        else
        {
            echo 'Sin fondos suficientes, Fondos: ' . $atmMachine->getCashInMachine() . PHP_EOL;
        }
    }

}

?>
