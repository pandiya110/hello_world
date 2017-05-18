<?php
$address = "3428 Simpson Ave Ocean City NJ";
$formattedAddr = str_replace(' ','+',$address);
$geocodeFromAddr = file_get_contents('http://maps.googleapis.com/maps/api/geocode/json?address='.$formattedAddr.'&sensor=false'); 
$output = json_decode($geocodeFromAddr);
$data['latitude']  = $output->results[0]->geometry->location->lat; 
$data['longitude'] = $output->results[0]->geometry->location->lng;

print_r($data);
?>