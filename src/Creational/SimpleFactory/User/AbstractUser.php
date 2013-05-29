<?php

namespace Creational\SimpleFactory\User;

/**
 * Description of User
 *
 * @author jardissone
 */
abstract class AbstractUser
{

    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function __toString()
    {
        $ret = '<pre>';
        $ret .= 'getName: ' . $this->getName() . PHP_EOL;
        $ret .= 'hasReadPermission: ' . ($this->hasReadPermission() ? 'SI' : 'NO') . PHP_EOL;
        $ret .= 'hasModifyPermission: ' . ($this->hasModifyPermission() ? 'SI' : 'NO') . PHP_EOL;
        $ret .= 'hasDeletePermission: ' . ($this->hasDeletePermission() ? 'SI' : 'NO') . PHP_EOL;
        $ret .= 'wantsFlashInterface: ' . ($this->wantsFlashInterface() ? 'SI' : 'NO') . PHP_EOL;
        $ret .= '</pre>';
        return $ret;
    }

    public function getName()
    {
        return $this->name;
    }

    public function hasReadPermission()
    {
        return true;
    }

    public function hasModifyPermission()
    {
        return false;
    }

    public function hasDeletePermission()
    {
        return false;
    }

    public function wantsFlashInterface()
    {
        return true;
    }

}

