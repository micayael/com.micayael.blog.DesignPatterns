<?php

namespace Structural\Decorator\LogoutLink;

/**
 * Description of HtmlLink
 *
 * @author jardissone
 */
abstract class AbstractHtmlLink
{

    protected $_text;
    protected $_url;
    
    public function __construct($text, $url)
    {
        $this->_text = $text;
        $this->_url = $url;
    }
    
    public abstract function getHTML();

}

?>
