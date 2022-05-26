<?php

$name = $_POST['name'];
$email = $_POST['email'];
$DOB = $_POST['DOB'];
$gender = $_POST['gender'];
$country = $_POST['country'];

$userInput = [$name, $email, $DOB, $gender, $country];

$handle = fopen('./userdata.csv', 'w');

fputcsv($handle, $userInput);


fclose($handle);

print_r($name);
print_r($email);
print_r($DOB);
print_r($gender);
print_r($country);
