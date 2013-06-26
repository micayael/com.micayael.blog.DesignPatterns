<?php

namespace Behavioral\Observer\PostOffice;

/**
 *
 * @author jardissone
 */
interface ObservableInterface
{

    /**
     * Suscribe a un observador a la lista de objetos a quienes se tienen que 
     * notificar los cambios
     * @param \Behavioral\Observer\PostOffice\ObserverInterface $observer
     */
    public function addObserver(ObserverInterface $observer);
    
    /**
     * Desuscribe a un observador de la lista
     * @param \Behavioral\Observer\PostOffice\ObserverInterface $observer
     */
    public function removeObserver(ObserverInterface $observer);
    
    /**
     * Realiza las notificaciones a los observadores suscritos a los cambios
     */
    public function notifyObservers();

}

?>
