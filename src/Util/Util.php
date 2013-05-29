<?php

namespace Util;

class Util
{

    public static function showCode($filename)
    {
        $source = file_get_contents($filename);
        $geshi = new \GeSHi($source, 'php');
        $geshi->enable_line_numbers(GESHI_NORMAL_LINE_NUMBERS);

        echo '<hr /><div style="border: solid 1px red">' . $geshi->parse_code() . '</div>';
    }

}
