<?php
// Slide 14
// Start the session

// Example 1
// session_start();

// // Store data in the session

// $_SESSION['username']="Jhone Doe";
// $_SESSION['loggedIn']=true;

// // Retrieve data from the session

// $username=$_SESSION['username'];
// $loggedIn=$_SESSION['loggedIn'];

// // Output the retrieved data
// echo "Username:".$username.PHP_EOL;
// echo "Logged In:".($loggedIn?'Yes':'No');


// Example 2

// session_start();
// $_SESSION['counter']=$_SESSION['counter']?? 0;
// $_SESSION['counter']++;
// echo $_SESSION['counter'];

// Example 3

session_name('my_app');
session_start([
'cookie_lifetime' =>60,
]);
$_SESSION['name']="Ruby";
echo $_SESSION['name'];