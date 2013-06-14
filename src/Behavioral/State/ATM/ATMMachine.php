<?php

namespace Behavioral\State\ATM;

use Structural\Proxy\ATMProxy\ATMMachineInterface;

/**
 * Description of ATMMachine
 *
 * @author jardissone
 */
class ATMMachine implements ATMMachineInterface
{

    private $state;
    private $cashInMachine = 2000;
    
    public function __construct()
    {
        $this->setState(new State\NoCard());
    }

    public function getState()
    {
        return $this->state;
    }

    public function setState(State\ATMStateInterface $state)
    {
        $this->state = $state;
    }

    public function getCashInMachine()
    {
        return $this->cashInMachine;
    }

    public function setCashInMachine($cashInMachine)
    {
        $this->cashInMachine = $cashInMachine;
    }
    
    /**
     * Obtiene los datos de la tarjeta y deja el cajero con estado como HasCard
     * 
     * @param \Behavioral\State\ATM\ATMMachine $atmMachine Instancia del ATMMachine
     */
    public function insertCard()
    {
        $this->state->insertCard($this);
    }

    /**
     * Expulsa la tarjeta y deja el cajero con estado NoCard
     * 
     * @param \Behavioral\State\ATM\ATMMachine $atmMachine Instancia del ATMMachine
     */
    public function ejectCard()
    {
        $this->state->ejectCard($this);
    }

    /**
     * Obtiene el pin insertado y deja el cajero con el estado HasPin
     * 
     * @param \Behavioral\State\ATM\ATMMachine $atmMachine Instancia del ATMMachine
     * @param int $pin Pin de 4 dígitos
     */
    public function insertPin($pin)
    {
        $this->state->insertPin($this, $pin);
    }

    /**
     * Solicita el retiro del monto deseado
     * 
     * @param \Behavioral\State\ATM\ATMMachine $atmMachine Instancia del ATMMachine
     * @param int $cashToWithdraw Monto a retirar
     */
    public function requestCash($cashToWithdraw)
    {
        $this->state->requestCash($this, $cashToWithdraw);
    }

}

?>
