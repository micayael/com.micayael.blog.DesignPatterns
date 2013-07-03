<?php

namespace Behavioral\Observer\Ecommerce\State\Pedido;

/**
 * Description of InactivoState
 *
 * @author jardissone
 */
class InactivoState implements PedidoStateInterface
{

    public function __toString()
    {
        return 'Pedido Inactivo';
    }

    public function solicitarPedido(\Behavioral\Observer\Ecommerce\Entity\Pedido $pedido)
    {
        $pedido->setEstado(new SolicitadoState());
    }

    public function aprobarPedido(\Behavioral\Observer\Ecommerce\Entity\Pedido $pedido)
    {
        throw new \Exception('Este pedido aún no fue solicitado.');
    }

    public function anularPedido(\Behavioral\Observer\Ecommerce\Entity\Pedido $pedido)
    {
        $pedido->setEstado(new AnuladoState());
    }

}

?>
