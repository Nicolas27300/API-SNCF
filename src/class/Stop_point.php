<?php

class Stop_point {
    
    private $name;
    private $departure_time;
    private $arrival_time;
    
    public function __construct($name, $departure_time, $arrival_time) {
        $this->name = $name;
        $this->departure_time = $departure_time;
        $this->arrival_time = $arrival_time;
    }
    
    function getName() {
        return $this->name;
    }

    function getDeparture_time() {
        return $this->departure_time;
    }

    function getArrival_time() {
        return $this->arrival_time;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setDeparture_time($departure_time) {
        $this->departure_time = $departure_time;
    }

    function setArrival_time($arrival_time) {
        $this->arrival_time = $arrival_time;
    }

}
