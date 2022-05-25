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

echo $name . '<br>';
echo $email . '<br>';
echo $DOB . '<br>';
echo $gender . '<br>';
echo $country . '<br>';
