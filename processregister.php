<?php

//collecting the data

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$designation = $_POST['designation'];
$department = $_POST['department'];

$errorarray = [];

//verifying the data, validation

if($first_name == "") {
    $errorarray = "first_name cannot be blank";
}

print_r($errorarray);

if($last_name == "") {
    $errorarray = "last_name cannot be blank";
}

print_r($errorarray);



//saving the data into the database (folder)

//return back to the page, with a status message


