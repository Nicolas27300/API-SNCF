<?php
function url_exists($url) {
    $handle = curl_init($url);
    curl_setopt($handle, CURLOPT_RETURNTRANSFER, TRUE);
    /* Get the HTML or whatever is linked in $url. */
    $response = curl_exec($handle);
    /* Check for 404 (file not found). */
    $httpCode = curl_getinfo($handle,
        CURLINFO_HTTP_CODE);
    if($httpCode == 404) {
        return false;
    }
    curl_close($handle);
    return true;
}


function curl_get($url) {
    if (!url_exists($url))
        return null;
    $defaults = array(
        CURLOPT_URL => $url,
        CURLOPT_HEADER => 0,
        CURLOPT_RETURNTRANSFER => TRUE,
        CURLOPT_TIMEOUT => 4
    );
    $ch = curl_init();
    curl_setopt_array($ch, $defaults);
    curl_setopt($ch,CURLOPT_USERAGENT,’download’);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    if( ! $result = curl_exec($ch))
    {
        trigger_error(curl_error($ch));
    }
    curl_close($ch);
    return $result;
}

function getKey(){
    $key = ":D";
    return $key;
}
?>