<?php

namespace Util;

class Util
{

    public static function showCode($filename)
    {
        $salida = ob_get_contents();
        $geshi = new \GeSHi($salida, 'php');
        $geshi->enable_line_numbers(GESHI_NORMAL_LINE_NUMBERS);

        echo '<hr /><h6>Codigo HTML</h6>';
        echo '<div style="border: solid 1px red">' . $geshi->parse_code() . '</div>';
        ob_end_flush();
        $source = file_get_contents($filename);
        $geshi = new \GeSHi($source, 'php');
        $geshi->enable_line_numbers(GESHI_NORMAL_LINE_NUMBERS);

        echo '<hr /><h6>Codigo PHP</h6>';
        echo '<div style="border: solid 1px red">' . $geshi->parse_code() . '</div>';
    }

    public static function showImage($filename)
    {
        $data = explode('/', $filename);
        $data = explode('.', $data[count($data) - 1]);
        $filename = $data[0] . '.jpg';
        echo PHP_EOL . PHP_EOL . '<!--Hasta aqui el codigo generado-->' . PHP_EOL . '<hr /><img src="../images/' . $filename . '" />';
    }

}
