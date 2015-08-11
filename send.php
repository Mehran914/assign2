<?php
 
$me = curl_init();
 
$username=$_POST['username'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$password=$_POST['password'];
$data = array(
	'firstname' => '$firstname',
	'lastname' => '$lastname',
	'username' => '$username',
	'email' => '$email',
	'pass' => md5('$password')
);
 
$payload = json_encode($data);
 
curl_setopt($ch, CURLOPT_URL, 'http://127.0.0.1:5984/alimehran914/'.$data['username']);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT'); /* or PUT */
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
	'Content-type: application/json',
	'Accept: */*'
));
 
curl_setopt($ch, CURLOPT_USERPWD, 'alimehran914:mithu914');
 
$response = curl_exec($ch);
 
curl_close($ch);