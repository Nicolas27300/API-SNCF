<html>
    <head>
        <meta charset="UTF-8">
    </head>
    
<?php

include '../src/class/Stop_area.php';
include '../src/functions.php';

$json = curl_get('https://'. getKey().'@api.sncf.com/v1/coverage/sncf/stop_areas/'.$_GET['gare'].'/departures');
$stop_area = new Stop_Area(json_decode($json));

foreach($stop_area->getDepartures() as $departure){
    echo $departure->getCommercial_mode().' ';
    echo $departure->getHeadsign().' ';
    echo $departure->getDirection().' ';
    echo $departure->getBase_departure_date_time()->format("H:i");
    if ($departure->getBase_departure_date_time() == $departure->getDeparture_date_time()){
        echo " A l'heure ";
    } else {
        $retard = $departure->getBase_departure_date_time()->diff($departure->getDeparture_date_time());
        echo ' Retard '. $retard->format("%I"). ' minutes ';
    }
    echo '<a href="train.php?id=vehicle_journey:'.$departure->getVehicle_journey().'">Voir ce train</a>';
    //echo ' '. $departure->getVehicle_journey();
    echo '<br>';
}

?>
</html>