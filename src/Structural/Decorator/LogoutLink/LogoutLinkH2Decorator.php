<?php

namespace Structural\Decorator\LogoutLink;

/**
 * Description of LogoutLinkH2Decorator
 *
 * @author jardissone
 */
class LogoutLinkH2Decorator  extends AbstractHtmlLink
{

    protected $_logoutLink;
    
    public function __construct($logoutLink)
    {
        $this->_logoutLink = $logoutLink;
    }
    
    public function getHTML()
    {
        $html = $this->_logoutLink->getHTML();
        
        return '<h2>' . $html . '</h2>';
    }
}

?>
