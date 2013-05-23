<?php

namespace Creational\FactoryMethod\Conexion;

/**
 * Description of MysqlConexion
 *
 * @author jardissone
 */
class MysqlConexion extends AbstractConexion
{

    public function setDriver()
    {
        $this->driver = 'mysql';
    }

}

?>
