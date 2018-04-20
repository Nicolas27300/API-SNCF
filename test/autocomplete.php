<?php

include '../src/class/Autocomplete.php';
include '../src/functions.php';

$json = curl_get('https://' . getKey() . '@api.sncf.com/v1/coverage/sncf/places?q='.$_GET['recherche']);
$autocomplete = new Autocomplete(json_decode($json));

