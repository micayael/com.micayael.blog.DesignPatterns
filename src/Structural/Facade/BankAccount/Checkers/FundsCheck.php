<?php

namespace Structural\Facade\BankAccount\Checkers;

/**
 * Description of FundsCheck
 *
 * @author jardissone
 */
class FundsCheck
{

    private $cashInAccount = 1000;

    public function getCashInAccount()
    {
        return $this->cashInAccount;
    }

    public function decreaseCashInAccount($cashWithdrawn)
    {
        $this->cashInAccount -= $cashWithdrawn;
    }

    public function increaseCashInAccount($cashDeposited)
    {
        $this->cashInAccount += $cashDeposited;
    }

    public function haveEnoughMoney($cashToWithdrawal)
    {

        if($cashToWithdrawal > $this->getCashInAccount())
        {

            echo 'Error: You don\'t have enough money' . PHP_EOL;
            echo 'Current Balance: ' . $this->getCashInAccount() . PHP_EOL;

            return false;
        }
        else
        {

            $this->decreaseCashInAccount($cashToWithdrawal);

            echo 'Withdrawal Complete: Current Balance is ' . $this->getCashInAccount() . PHP_EOL;

            return true;
        }
    }

    public function makeDeposit($cashToDeposit)
    {

        $this->increaseCashInAccount($cashToDeposit);

        echo 'Deposit Complete: Current Balance is ' . $this->getCashInAccount() . PHP_EOL;
    }

}

?>
