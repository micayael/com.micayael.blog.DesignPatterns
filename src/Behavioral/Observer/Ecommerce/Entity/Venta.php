<?php

namespace Behavioral\Observer\Ecommerce\Entity;

use Behavioral\Observer\Ecommerce\State\Venta\EsperandoPagoState;
use Behavioral\Observer\Ecommerce\Observer\BaseSubject;
use Behavioral\Observer\Ecommerce\Observer\BundleEvent;
use Behavioral\Observer\Ecommerce\Observer\HistorialObserver;

/**
 * Description of Compra
 *
 * @author jardissone
 */
class Venta extends BaseSubject
{

    private $id;
    private $estado;
    private $usuario_auditoria;
    private $fecha_auditoria;

    public function __construct()
    {
        parent::__construct();

        $this->setEstado(new EsperandoPagoState());

        $this->addObserver(new HistorialObserver());
    }

    public function save()
    {
        echo '  Venta grabada' . PHP_EOL;

        $this->setFechaAuditoria(date('Y-m-d h:i:s'));

        $this->notifyObservers();
    }

    public function enviarVenta()
    {
        $this->getEstado()->enviarVenta($this);

        $this->save();
    }

    public function recepcionarVenta()
    {
        $this->getEstado()->recepcionarVenta($this);

        $this->save();
    }

    public function notifyObserver(\Behavioral\Observer\Ecommerce\Observer\ObserverInterface $observer)
    {
        $data = array(
            'date' => $this->getFechaAuditoria(),
            'user' => $this->getUsuarioAuditoria(),
            'state' => $this->getEstado(),
            'msg' => 'Cambio de estado para la venta ' . $this->getId(),
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

    public function getEstado()
    {
        return $this->estado;
    }

    public function setEstado(\Behavioral\Observer\Ecommerce\State\Venta\VentaStateInterface $estado)
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
