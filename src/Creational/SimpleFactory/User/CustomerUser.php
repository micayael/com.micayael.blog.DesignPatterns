<?php

namespace Creational\SimpleFactory\User;

/**
 * Description of CustomerUser
 *
 * @author jardissone
 */
class CustomerUser extends AbstractUser
{

    function hasModifyPermission()
    {
        return true;
    }

}

