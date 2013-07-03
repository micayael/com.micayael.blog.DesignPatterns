<?php

namespace Behavioral\Observer\Ecommerce\State\Venta;

/**
 *
 * @author jardissone
 */
interface VentaStateInterface
{

    public function __toString();

    public function enviarVenta(\Behavioral\Observer\Ecommerce\Entity\Venta $venta);

    public function recepcionarVenta(\Behavioral\Observer\Ecommerce\Entity\Venta $venta);

}

?>
