<?php

namespace Behavioral\Observer\Ecommerce\State\Pedido;

/**
 *
 * @author jardissone
 */
interface PedidoStateInterface
{

    public function __toString();

    public function solicitarPedido(\Behavioral\Observer\Ecommerce\Entity\Pedido $pedido);

    public function aprobarPedido(\Behavioral\Observer\Ecommerce\Entity\Pedido $pedido);

    public function anularPedido(\Behavioral\Observer\Ecommerce\Entity\Pedido $pedido);

}

?>
