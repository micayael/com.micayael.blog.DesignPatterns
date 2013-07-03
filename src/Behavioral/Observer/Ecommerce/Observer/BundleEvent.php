<?php

namespace Behavioral\Observer\Ecommerce\Observer;

/**
 * Description of MessageEvent
 *
 * @author jardissone
 */
class BundleEvent implements EventInterface
{

    private $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }

}

?>
