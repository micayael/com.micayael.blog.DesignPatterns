<?php

namespace Creational\FactoryMethod\Conexion;

/**
 * Description of PostgresqlConexion
 *
 * @author jardissone
 */
class PostgresqlConexion extends AbstractConexion
{

    public function setDriver()
    {
        $this->driver = 'pgsql';
    }

}

?>
