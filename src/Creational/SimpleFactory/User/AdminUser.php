<?php

namespace Creational\SimpleFactory\User;

/**
 * Description of AdminUser
 *
 * @author jardissone
 */
class AdminUser extends AbstractUser
{

    public function hasModifyPermission()
    {
        return true;
    }

    public function hasDeletePermission()
    {
        return true;
    }

    public function wantsFlashInterface()
    {
        return false;
    }

}

