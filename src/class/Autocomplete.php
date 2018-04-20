<?php

class Autocomplete {

    private $gares;

    public function __construct($json) {
        $i = 0;
        if (isset($json->places)) {
            foreach ($json->places as $place) {
                if ($place->embedded_type == "stop_area") {
                    echo '<a href="gare.php?gare=' . $place->id . '">' . $place->stop_area->name . '</a><br>';
                }
            }
        }
    }

}
