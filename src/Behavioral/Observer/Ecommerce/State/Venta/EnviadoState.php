<?php

namespace Behavioral\Observer\Ecommerce\State\Venta;

/**
 * Description of InactivoState
 *
 * @author jardissone
 */
class EnviadoState implements VentaStateInterface
{

    public function __toString()
    {
        return 'Venta enviada';
    }

    public function enviarVenta(\Behavioral\Observer\Ecommerce\Entity\Venta $venta)
    {
        throw new \Exception('Esta venta ya ha sido enviada');
    }

    public function recepcionarVenta(\Behavioral\Observer\Ecommerce\Entity\Venta $venta)
    {
        $venta->setEstado(new RecibidoState());
    }

}

?>
