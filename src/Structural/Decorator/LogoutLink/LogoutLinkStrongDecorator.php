<?php

namespace Structural\Decorator\LogoutLink;

/**
 * Description of LogoutLinkH2Decorator
 *
 * @author jardissone
 */
class LogoutLinkStrongDecorator  extends AbstractHtmlLink
{

    protected $_logoutLink;
    
    public function __construct($logoutLink)
    {
        $this->_logoutLink = $logoutLink;
    }
    
    public function getHTML()
    {
        $html = $this->_logoutLink->getHTML();
        
        return '<strong>' . $html . '</strong>';
    }
}

?>
