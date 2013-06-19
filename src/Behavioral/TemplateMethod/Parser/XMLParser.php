<?php

namespace Behavioral\TemplateMethod\Parser;

/**
 * Description of CSVParser
 *
 * @author jardissone
 */
class XMLParser extends BaseParser
{

    public function readData()
    {
        $this->data = simplexml_load_file($this->filename);
    }

    public function processData()
    {
        foreach($this->data->transaccion as $transaccion)
        {
            $i = count($this->processedData);

            $this->processedData[$i]['fecha'] = $transaccion->{'fecha'};
            $this->processedData[$i]['descripcion'] = $transaccion->descripcion;
            $this->processedData[$i]['debe'] = $transaccion->debe;
            $this->processedData[$i]['haber'] = $transaccion->haber;
        }
    }

}

?>
