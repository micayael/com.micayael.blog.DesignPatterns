<?php

namespace Creational\SimpleFactory\User;

use Creational\SimpleFactory\User\GuestUser;
use Creational\SimpleFactory\User\CustomerUser;
use Creational\SimpleFactory\User\AdminUser;

/**
 * Description of UserFactory
 *
 * @author jardissone
 */
class UserFactory implements FactoryInterface
{

    const GUEST = 'guest';
    const CUSTOMER = 'customer';
    const ADMIN = 'admin';

    /**
     * Función de creación de usuarios. Recibe el tipo 
     * de usario a crear y retorna una instancia valida 
     * 
     * @access public static 
     * @param  string $type 
     * @return object 
     */
    static public function create($type)
    {
        switch($type)
        {
            case self::GUEST: return new GuestUser($type);
            case self::CUSTOMER: return new CustomerUser($type);
            case self::ADMIN: return new AdminUser($type);
            default:
                throw new \Exception('Tipo de usario desconocido');
        }
    }

}