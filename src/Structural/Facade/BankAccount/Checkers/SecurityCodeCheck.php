<?php

namespace Structural\Facade\BankAccount\Checkers;

/**
 * Description of SecurityCodeCheck
 *
 * @author jardissone
 */
class SecurityCodeCheck
{

    private $securityCode = 1234;

    public function getSecurityCode()
    {
        return $this->securityCode;
    }

    public function isCodeCorrect($secCodeToCheck)
    {
        if($secCodeToCheck == $this->getSecurityCode())
        {
            return true;
        }

        return false;
    }

}

?>
