<?php

namespace Behavioral\Observer\Ecommerce\State\Pedido;

/**
 * Description of InactivoState
 *
 * @author jardissone
 */
class AprobadoState implements PedidoStateInterface
{

    public function __toString()
    {
        return 'Pedido Aprobado';
    }

    public function solicitarPedido(\Behavioral\Observer\Ecommerce\Entity\Pedido $pedido)
    {
        throw new \Exception('Este pedido ya se encuentra aprobado.');
    }

    public function aprobarPedido(\Behavioral\Observer\Ecommerce\Entity\Pedido $pedido)
    {
        throw new \Exception('Este pedido ya se encuentra aprobado');
    }

    public function anularPedido(\Behavioral\Observer\Ecommerce\Entity\Pedido $pedido)
    {
        throw new \Exception('Este pedido ya se encuentra aprobado');
    }

}

?>
