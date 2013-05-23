<?php

namespace Structural\Adapter\FileManager;

/**
 *
 * @author jardissone
 */
interface FileManagerInterface
{

    public function open($filename);
    public function read();
    public function close();

}