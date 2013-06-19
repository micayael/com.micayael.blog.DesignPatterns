<?php

namespace Behavioral\TemplateMethod\Parser;

/**
 * Description of CSVParser
 *
 * @author jardissone
 */
class CSVParser extends BaseParser
{

    public function readData()
    {
        $fp = fopen($this->filename, 'r');

        while(($this->data[] = fgetcsv($fp)) !== false)
        {
            
        }
        
        unset($this->data[count($this->data)-1]);

        fclose($fp);
    }

    public function processData()
    {
        for($i=0; $i<count($this->data); $i++)
        {
            $this->processedData[$i]['fecha'] = $this->data[$i][0];
            $this->processedData[$i]['descripcion'] = $this->data[$i][1];
            $this->processedData[$i]['debe'] = $this->data[$i][2];
            $this->processedData[$i]['haber'] = $this->data[$i][3];
        }
    }

}