<?php

namespace Creational\FactoryMethod\Conexion;

use Creational\FactoryMethod\Conexion\MysqlConexion;
use Creational\FactoryMethod\Conexion\PostgresqlConexion;

/**
 * Description of ConexionFactory
 *
 * @author jardissone
 */
abstract class ConexionFactory
{

    const MYSQL = 'mysql';
    const POSTGRESQL = 'pgsql';

    public static function create($driver, $host, $user, $pass, $dbname)
    {
        switch($driver)
        {
            case self::MYSQL: return new MysqlConexion($host, $user, $pass, $dbname);
            case self::POSTGRESQL: return new PostgresqlConexion($host, $user, $pass, $dbname);
            default:
                throw new \Exception('El objeto solicitado no existe');
        }
    }

}

?>
