<?php

namespace Behavioral\TemplateMethod\Parser;

/**
 * Description of BaseParser
 *
 * @author jardissone
 */
abstract class BaseParser
{
    protected $data;
    protected $filename;
    protected $processedData;

    public abstract function readData();

    public abstract function processData();

    public function __construct($filename)
    {
        $this->data = array();
        $this->processedData = array();
        $this->filename = $filename;
    }
    
    //-- Template Method
    public function render()
    {
        $saldo = 0;
        
        $this->readData();
        $this->processData();
        
        echo '<table border="1">' . PHP_EOL;
        echo '<tr><th>Fecha</th><th>Descripcion</th><th>Debe</th><th>Haber</th><th>Saldo</th></tr>' . PHP_EOL;
        
        foreach($this->processedData as $data)
        {
            $saldo += $data['debe'];
            $saldo -= $data['haber'];
            
            $pattern = '<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>' . PHP_EOL;
            echo sprintf($pattern, $data['fecha'], $data['descripcion'], $data['debe'], $data['haber'], $saldo);
        }       
        
        echo '</table>' . PHP_EOL;
    }

}

?>
