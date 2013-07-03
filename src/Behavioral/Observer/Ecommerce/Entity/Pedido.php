<?php

namespace Behavioral\Observer\Ecommerce\Entity;

use Behavioral\Observer\Ecommerce\State\Pedido\InactivoState;
use Behavioral\Observer\Ecommerce\Observer\BaseSubject;
use Behavioral\Observer\Ecommerce\Observer\BundleEvent;
use Behavioral\Observer\Ecommerce\Observer\HistorialObserver;

/**
 * Description of Pedido
 *
 * @author jardissone
 */
class Pedido extends BaseSubject
{

    private $id;
    private $numero;
    private $monto;
    private $estado;
    private $usuario_auditoria;
    private $fecha_auditoria;

    public function __construct()
    {
        parent::__construct();

        $this->setEstado(new InactivoState());

        $this->addObserver(new HistorialObserver());
    }

    public function save()
    {
        echo '  Pedido grabado' . PHP_EOL;

        $this->setFechaAuditoria(date('Y-m-d h:i:s'));

        $this->notifyObservers();
    }

    public function solicitarPedido()
    {
        echo '  Email enviado' . PHP_EOL;

        $this->getEstado()->solicitarPedido($this);

        $this->save();
    }

    public function aprobarPedido()
    {
        $this->getEstado()->aprobarPedido($this);

        $this->save();
    }

    public function anularPedido()
    {
        $this->getEstado()->anularPedido($this);

        $this->save();
    }

    public function notifyObserver(\Behavioral\Observer\Ecommerce\Observer\ObserverInterface $observer)
    {
        $data = array(
            'date' => $this->getFechaAuditoria(),
            'user' => $this->getUsuarioAuditoria(),
            'state' => $this->getEstado(),
            'msg' => 'Cambio de estado para el pedido ' . $this->getId(),
        );
        $bundle = new BundleEvent($data);
        $observer->onMessage($bundle);
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    public function getMonto()
    {
        return $this->monto;
    }

    public function setMonto($monto)
    {
        $this->monto = $monto;
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function setEstado(\Behavioral\Observer\Ecommerce\State\Pedido\PedidoStateInterface $estado)
    {
        $this->estado = $estado;
    }

    public function getUsuarioAuditoria()
    {
        return $this->usuario_auditoria;
    }

    public function setUsuarioAuditoria($usuario_alta)
    {
        $this->usuario_auditoria = $usuario_alta;
    }

    public function getFechaAuditoria()
    {
        return $this->fecha_auditoria;
    }

    public function setFechaAuditoria($fecha_alta)
    {
        $this->fecha_auditoria = $fecha_alta;
    }

}

?>
