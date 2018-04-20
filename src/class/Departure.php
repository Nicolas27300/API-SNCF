<?php

class Departure {
    
    private $commercial_mode;
    private $headsign;
    private $direction;
    private $base_departure_date_time;
    private $departure_date_time;
    private $base_arrival_date_time;
    private $arrival_date_time;
    private $vehicle_journey;
    
    public function __construct($commercial_mode, $headsign, $direction, $base_departure_date_time, $departure_date_time, $base_arival_date_time, $arrival_date_time, $vehicle_journey) {
        $this->commercial_mode = $commercial_mode;
        $this->headsign = $headsign;
        $this->direction = $direction;
        $this->base_departure_date_time = $base_departure_date_time;
        $this->departure_date_time = $departure_date_time;
        $this->base_arrival_date_time = $base_arival_date_time;
        $this->arrival_date_time = $arrival_date_time;
        $this->vehicle_journey = $vehicle_journey;
    }
    
    function getCommercial_mode() {
        return $this->commercial_mode;
    }

    function getHeadsign() {
        return $this->headsign;
    }

    function getDirection() {
        return $this->direction;
    }

    function getBase_departure_date_time() {
        return $this->base_departure_date_time;
    }

    function getDeparture_date_time() {
        return $this->departure_date_time;
    }

    function setCommercial_mode($commercial_mode) {
        $this->commercial_mode = $commercial_mode;
    }

    function setHeadsign($headsign) {
        $this->headsign = $headsign;
    }

    function setDirection($direction) {
        $this->direction = $direction;
    }

    function setBase_departure_date_time($base_departure_date_time) {
        $this->base_departure_date_time = $base_departure_date_time;
    }

    function setDeparture_date_time($departure_date_time) {
        $this->departure_date_time = $departure_date_time;
    }
    
    function getBase_arrival_date_time() {
        return $this->base_arrival_date_time;
    }

    function getArrival_date_time() {
        return $this->arrival_date_time;
    }

    function getVehicle_journey() {
        return $this->vehicle_journey;
    }

    function setBase_arrival_date_time($base_arrival_date_time) {
        $this->base_arrival_date_time = $base_arrival_date_time;
    }

    function setArrival_date_time($arrival_date_time) {
        $this->arrival_date_time = $arrival_date_time;
    }

    function setVehicle_journey($vehicle_journey) {
        $this->vehicle_journey = $vehicle_journey;
    }

}
