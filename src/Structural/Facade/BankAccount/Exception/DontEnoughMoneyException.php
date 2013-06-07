<?php

namespace Structural\Facade\BankAccount\Exception;

/**
 * Description of DontEnoughMoneyException
 *
 * @author jardissone
 */
class DontEnoughMoneyException extends \Exception
{

    public function __construct()
    {
        parent::__construct('Error: You don\'t have enough money', 1);
    }

}

?>
