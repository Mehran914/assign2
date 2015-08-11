<?php
 
$ch = curl_init();
 
$documentID = '85275275ab7b02bc9902756a560013bd';
 
curl_setopt($ch, CURLOPT_URL, 'http://127.0.0.1:5984/customers/'.$documentID);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
	'Content-type: application/json',
	'Accept: */*'
));
 
curl_setopt($ch, CURLOPT_USERPWD, 'myDBusername:myDBpass');
 
$response = curl_exec($ch);
 
curl_close($ch);