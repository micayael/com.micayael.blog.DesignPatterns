<?php

namespace Behavioral\Observer\Ecommerce\State\Pedido;

/**
 * Description of InactivoState
 *
 * @author jardissone
 */
class SolicitadoState implements PedidoStateInterface
{

    public function __toString()
    {
        return 'Pedido Solicitado';
    }

    public function solicitarPedido(\Behavioral\Observer\Ecommerce\Entity\Pedido $pedido)
    {
        throw new \Exception('Este pedido ya se encuentra solicitado');
    }

    public function aprobarPedido(\Behavioral\Observer\Ecommerce\Entity\Pedido $pedido)
    {
        $pedido->setEstado(new AprobadoState());
    }

    public function anularPedido(\Behavioral\Observer\Ecommerce\Entity\Pedido $pedido)
    {
        $pedido->setEstado(new AnuladoState());
    }

}

?>
