<?php

namespace Structural\Decorator\LogoutLink;

/**
 * Description of LogoutLink
 *
 * @author jardissone
 */
class LogoutLink extends AbstractHtmlLink
{

    public function getHTML()
    {
        return '<a href="' . $this->_url . '">' . $this->_text . '</a>';
    }

}

?>
