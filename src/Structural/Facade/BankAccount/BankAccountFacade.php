<?php

namespace Structural\Facade\BankAccount;

use Structural\Facade\BankAccount\WelcomeToBank;
use Structural\Facade\BankAccount\Checkers\AccountNumberCheck;
use Structural\Facade\BankAccount\Checkers\SecurityCodeCheck;
use Structural\Facade\BankAccount\Checkers\FundsCheck;

/**
 * Description of BankAccountFacade
 *
 * @author jardissone
 */
class BankAccountFacade
{

    private $accountNumber;
    private $securityCode;
    private $acctChecker;
    private $codeChecker;
    private $fundChecker;
    private $bankWelcome;

    public function __construct($newAcctNum, $newSecCode)
    {

        $this->accountNumber = $newAcctNum;
        $this->securityCode = $newSecCode;

        $this->bankWelcome = new WelcomeToBank();

        $this->acctChecker = new AccountNumberCheck();
        $this->codeChecker = new SecurityCodeCheck();
        $this->fundChecker = new FundsCheck();
    }
    
    public function getCashInAccount()
    {
        return $this->fundChecker->getCashInAccount();
    }

    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    public function getSecurityCode()
    {
        return $this->securityCode;
    }

    public function withdrawCash($cashToGet)
    {

        if($this->acctChecker->accountActive($this->getAccountNumber()) &&
                $this->codeChecker->isCodeCorrect($this->getSecurityCode()) &&
                $this->fundChecker->haveEnoughMoney($cashToGet))
        {

            echo 'Transaction Complete' . PHP_EOL;
        }
        else
        {

            echo 'Transaction Failed' . PHP_EOL;
        }
    }

    public function depositCash($cashToDeposit)
    {

        if($this->acctChecker->accountActive($this->getAccountNumber()) &&
                $this->codeChecker->isCodeCorrect($this->getSecurityCode()))
        {

            $this->fundChecker->makeDeposit($cashToDeposit);

            echo 'Transaction Complete' . PHP_EOL;
        }
        else
        {

            echo 'Transaction Failed' . PHP_EOL;
        }
    }

}

?>
