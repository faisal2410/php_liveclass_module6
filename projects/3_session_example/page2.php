<?php
// page2.php

session_start();

echo 'Welcome to page #2<br />';

echo $_SESSION['favcolor']; // green
echo "<br/>";
echo $_SESSION['animal']; // cat
echo "<br/>";
echo date( 'Y m d H:i:s', $_SESSION['time'] );

// You may want to use SID here, like we did in page1.php
echo '<br /><a href="index.php">Home</a>';
echo '<br/>';
echo $_GET['id'];