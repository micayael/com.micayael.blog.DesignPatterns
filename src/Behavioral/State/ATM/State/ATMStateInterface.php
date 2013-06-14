<?php

namespace Behavioral\State\ATM\State;

/**
 *
 * @author jardissone
 */
interface ATMStateInterface
{

    /**
     * Obtiene los datos de la tarjeta y deja el cajero con estado como HasCard
     * 
     * @param \Behavioral\State\ATM\ATMMachine $atmMachine Instancia del ATMMachine
     */
    public function insertCard(\Behavioral\State\ATM\ATMMachine $atmMachine);

    /**
     * Expulsa la tarjeta y deja el cajero con estado NoCard
     * 
     * @param \Behavioral\State\ATM\ATMMachine $atmMachine Instancia del ATMMachine
     */
    public function ejectCard(\Behavioral\State\ATM\ATMMachine $atmMachine);

    /**
     * Obtiene el pin insertado y deja el cajero con el estado HasPin
     * 
     * @param \Behavioral\State\ATM\ATMMachine $atmMachine Instancia del ATMMachine
     * @param int $pin Pin de 4 dígitos
     */
    public function insertPin(\Behavioral\State\ATM\ATMMachine $atmMachine, $pin);

    /**
     * Solicita el retiro del monto deseado
     * 
     * @param \Behavioral\State\ATM\ATMMachine $atmMachine Instancia del ATMMachine
     * @param int $cashToWithdraw Monto a retirar
     */
    public function requestCash(\Behavioral\State\ATM\ATMMachine $atmMachine, $cashToWithdraw);

}

?>
