<?php

include 'Departure.php';

class Stop_Area {
    
    private $stop_area;
    private $departures = array();
    
    public function __construct($json) {
        $this->stop_area = $json->departures[0]->stop_point->id;
        $i = 0;
        foreach ($json->departures as $departure){
            $datedepart = new DateTime($departure->stop_date_time->base_departure_date_time);
            $datereeldepart = new DateTime($departure->stop_date_time->departure_date_time);
            $datearrivee = new DateTime($departure->stop_date_time->base_arrival_date_time);
            $datereelarrivee = new DateTime($departure->stop_date_time->arrival_date_time);
            $array = explode(":", $departure->links[1]->id);
            if ($array[0] == "vehicle_journey"){
                $vehicle_journey = $array[1].':'.$array[2];
            } else {
                $vehicle_journey = $array[0].':'.$array[1];
            }
            $this->departures[$i] = new Departure($departure->display_informations->commercial_mode, $departure->display_informations->headsign, explode(" ", $departure->display_informations->direction)[0], $datedepart, $datereeldepart, $datearrivee, $datereelarrivee, $vehicle_journey);
            $i++;
        }
    }
    
    function getStop_area() {
        return $this->stop_area;
    }

    function getDepartures() {
        return $this->departures;
    }

    function setStop_area($stop_area) {
        $this->stop_area = $stop_area;
    }

    function setDepartures($departures) {
        $this->departures = $departures;
    }
 
}
