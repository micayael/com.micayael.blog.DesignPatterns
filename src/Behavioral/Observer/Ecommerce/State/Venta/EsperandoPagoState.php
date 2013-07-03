<?php

namespace Behavioral\Observer\Ecommerce\State\Venta;

/**
 * Description of InactivoState
 *
 * @author jardissone
 */
class EsperandoPagoState implements VentaStateInterface
{

    public function __toString()
    {
        return 'Venta en espera de pago';
    }

    public function enviarVenta(\Behavioral\Observer\Ecommerce\Entity\Venta $venta)
    {
        $venta->setEstado(new EnviadoState());
    }

    public function recepcionarVenta(\Behavioral\Observer\Ecommerce\Entity\Venta $venta)
    {
        throw new \Exception('Esta venta todavía no ha sido pagada');
    }

}

?>
