<?php

namespace Behavioral\Observer\Ecommerce\State\Pedido;

/**
 * Description of InactivoState
 *
 * @author jardissone
 */
class AnuladoState implements PedidoStateInterface
{

    public function __toString()
    {
        return 'Pedido Anulado';
    }

    public function solicitarPedido(\Behavioral\Observer\Ecommerce\Entity\Pedido $pedido)
    {
        throw new \Exception('Este pedido ya se encuentra anulado');
    }

    public function aprobarPedido(\Behavioral\Observer\Ecommerce\Entity\Pedido $pedido)
    {
        throw new \Exception('Este pedido ya se encuentra anulado');
    }

    public function anularPedido(\Behavioral\Observer\Ecommerce\Entity\Pedido $pedido)
    {
        throw new \Exception('Este pedido ya se encuentra anulado');
    }

}

?>
