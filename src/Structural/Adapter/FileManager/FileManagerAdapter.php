<?php

namespace Structural\Adapter\FileManager;

/**
 * Description of FileManagerImpl
 *
 * @author jardissone
 */
class FileManagerAdapter extends FileManagerUtil implements FileManagerInterface
{

    public function close()
    {
        return $this->closeFile();
    }

    public function open($filename)
    {
        return $this->openFile($filename);
    }

    public function read()
    {
        return $this->readFile();
    }

}

?>
