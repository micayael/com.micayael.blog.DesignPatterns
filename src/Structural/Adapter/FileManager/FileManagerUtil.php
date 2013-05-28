<?php

namespace Structural\Adapter\FileManager;

/**
 * Description of FileManagerUtil
 *
 * @author jardissone
 */
class FileManagerUtil
{

    private $filename;

    public function openFile($filename)
    {
        return true;
    }

    public function readFile()
    {
        return 'contenido de ejemplo...';
    }

    public function closeFile()
    {
        return true;
    }

}