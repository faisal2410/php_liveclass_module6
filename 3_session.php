<?php
// Slide 14
// Start the session

session_start();

// Store data in the session

$_SESSION['username']="Jhone Doe";
$_SESSION['loggedIn']=true;

// Retrieve data from the session

$username=$_SESSION['username'];
$loggedIn=$_SESSION['loggedIn'];

// Output the retrieved data
echo "Username:".$username.PHP_EOL;
echo "Logged In:".($loggedIn?'Yes':'No');