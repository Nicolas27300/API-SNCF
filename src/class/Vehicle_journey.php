<?php

include 'Stop_point.php';
include 'Impacted_stop.php';

class Vehicle_journey {

    private $name;
    private $stop_times = array();
    private $impacted_stops;

    public function __construct($json) {
        $this->name = $json->vehicle_journeys[0]->name;
        $this->impacted_stops = $json->disruptions;
        if (isset($this->impacted_stops[0])) {
            $this->impacted_stops = array();
            $i = 0;
            if (isset($json->disruptions[0]->impacted_objects[0]->impacted_stops)) {
                foreach ($json->disruptions[0]->impacted_objects[0]->impacted_stops as $impacted_stop) {
                    $this->impacted_stops[$i] = new Impacted_stop($impacted_stop->departure_status, $impacted_stop->amended_departure_time, $impacted_stop->cause);
                    $i++;
                }
            }
        } else {
            $this->disruptions = null;
        }
        $i = 0;
        foreach ($json->vehicle_journeys[0]->stop_times as $stop_point) {
            $this->stop_times[$i] = new Stop_point($stop_point->stop_point->name, $stop_point->departure_time, $stop_point->arrival_time);
            $i++;
        }
    }

    function getName() {
        return $this->name;
    }

    function getStop_times() {
        return $this->stop_times;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setStop_times($stop_times) {
        $this->stop_times = $stop_times;
    }

    function getImpacted_stops() {
        return $this->impacted_stops;
    }

    function setImpacted_stops($impacted_stops) {
        $this->impacted_stops = $impacted_stops;
    }

}
