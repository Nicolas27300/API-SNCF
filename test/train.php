<html>
    <head>
        <meta charset="UTF-8">
    </head>
</html>
<?php
include '../src/functions.php';
include '../src/class/Vehicle_journey.php';

$id = $_GET['id'];
$json = curl_get('https://' . getKey() . '@api.sncf.com/v1/coverage/sncf/vehicle_journeys/' . $id);
$vehicle_journey = new Vehicle_journey(json_decode($json));
echo 'Train : ' . $vehicle_journey->getName() . '<br>';
if ($vehicle_journey->getImpacted_stops() != null) {
    echo 'INCIDENT SUR CE TRAIN<br>';
}
$i = 0;
foreach ($vehicle_journey->getStop_times() as $stop_point) {
    $date = new DateTime($stop_point->getDeparture_time());
    echo $stop_point->getName() . ' ' . $date->format("H\hi");
    if ($vehicle_journey->getImpacted_stops() != null) {
        if ($vehicle_journey->getImpacted_stops()[$i]->getDeparture_status() == "delayed") {
            $retard = $date->diff(new DateTime($vehicle_journey->getImpacted_stops()[$i]->getAmended_departure_time()));
            echo ' Retard '.$retard->format("%I").' minutes : '.$vehicle_journey->getImpacted_stops()[$i]->getCause().'';
        }
    }
    echo '<br>';
    $i++;
}
