<?php

namespace Structural\Decorator\Logger;

/**
 * Description of LoggerFactory
 *
 * @author jardissone
 */
class LoggerFactory
{

    const TYPE_CONSOLE_LOGGER = 0;
    const TYPE_FILE_LOGGER = 1;

    public static function create($type)
    {
        switch($type)
        {
            case self::TYPE_CONSOLE_LOGGER: return new ConsoleLogger();
            case self::TYPE_FILE_LOGGER: return new FileLogger();
            default:
                throw new \Exception('Tipo de logger desconocido');
        }
    }

}

?>
