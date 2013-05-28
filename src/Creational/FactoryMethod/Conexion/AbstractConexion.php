<?php

namespace Creational\FactoryMethod\Conexion;

/**
 * Description of Conexion
 *
 * @author jardissone
 */
abstract class AbstractConexion
{

    protected $host;
    protected $driver;
    protected $user;
    protected $pass;
    protected $dbname;

    public abstract function setDriver();

    function __construct($host, $user, $pass, $dbname)
    {
        $this->host = $host;
        $this->user = $user;
        $this->pass = $pass;
        $this->dbname = $dbname;

        $this->setDriver();
    }

    public function __toString()
    {
        $pattern = 'DRIVER: [%s], HOST: [%s], USER: [%s], DBNAME: [%s]';
        return sprintf($pattern, $this->driver, $this->host, $this->user, $this->dbname);
    }

    public function getHost()
    {
        return $this->host;
    }

    public function setHost($host)
    {
        $this->host = $host;
    }

    public function getDriver()
    {
        return $this->driver;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function setUser($user)
    {
        $this->user = $user;
    }

    public function getPass()
    {
        return $this->pass;
    }

    public function setPass($pass)
    {
        $this->pass = $pass;
    }

    public function getDbname()
    {
        return $this->dbname;
    }

    public function setDbname($dbname)
    {
        $this->dbname = $dbname;
    }

}

?>
