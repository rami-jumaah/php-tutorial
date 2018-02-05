<?php

$firstName = $_POST["firstname"];
$lastName = $_POST["lastname"];
$email = $_POST["email"];
$subject = $_POST["subject"];

echo "Hello There, <br/> You have an email from : <br/> First Name : $firstName <br/> Last Name : $lastName <br/> Their email address is : $email <br/>  and They says: <br/> ' $subject ' ";