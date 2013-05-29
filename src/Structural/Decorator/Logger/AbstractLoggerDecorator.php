<?php

namespace Structural\Decorator\Logger;

/**
 * Description of LoggerDecorator
 *
 * @author jardissone
 */
abstract class AbstractLoggerDecorator implements LoggerInterface
{
    
    protected $logger;
    
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

}

?>
