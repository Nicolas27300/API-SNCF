<?php

class Impacted_stop {
    
    private $departure_status;
    private $amended_departure_time;
    private $cause;
    
    public function __construct($departure_status, $amended_departure_time, $cause) {
        $this->departure_status = $departure_status;
        $this->amended_departure_time = $amended_departure_time;
        $this->cause = $cause;
    }
    
    function getDeparture_status() {
        return $this->departure_status;
    }

    function getAmended_departure_time() {
        return $this->amended_departure_time;
    }

    function getCause() {
        return $this->cause;
    }

    function setDeparture_status($departure_status) {
        $this->departure_status = $departure_status;
    }

    function setAmended_departure_time($amended_departure_time) {
        $this->amended_departure_time = $amended_departure_time;
    }

    function setCause($cause) {
        $this->cause = $cause;
    }
 
}
