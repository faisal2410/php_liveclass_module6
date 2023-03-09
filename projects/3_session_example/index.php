<?php
// page1.php

session_start();

echo 'Welcome to page #1';

$_SESSION['favcolor'] = 'green';
$_SESSION['animal']   = 'cat';
$_SESSION['time']     = time();
// Works if session cookie was accepted
echo '<br /><a href="page2.php">page 2</a>';
// Or maybe pass along the session id, if needed
?>
<p>
<a href="page2.php?id=<?php echo session_id(); ?>">page 2</a>
</p>
