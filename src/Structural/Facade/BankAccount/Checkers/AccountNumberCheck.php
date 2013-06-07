<?php

namespace Structural\Facade\BankAccount\Checkers;

/**
 * Description of AccountNumberCheck
 *
 * @author jardissone
 */
class AccountNumberCheck
{

    private $accountNumber = 12345678;

    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    public function accountActive($acctNumToCheck)
    {
        if($acctNumToCheck == $this->getAccountNumber())
        {
            return true;
        }

        return false;
    }

}

?>
