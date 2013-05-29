<?php

namespace Util;

class Util
{

    public static function showCode($filename)
    {
        $source = file_get_contents($filename);
        $geshi = new \GeSHi($source, 'php');
        $geshi->enable_line_numbers(GESHI_NORMAL_LINE_NUMBERS);

        echo $geshi->parse_code();
    }

}
