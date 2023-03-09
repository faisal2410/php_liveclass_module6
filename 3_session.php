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

// session_name('my_app');
// session_start([
// 'cookie_lifetime' =>60,
// ]);
// $_SESSION['name']="Ruby";
// echo $_SESSION['name'];







/*
For your details study:

In PHP, the session_start() function is used to start a new session or resume an existing session. It creates a unique identifier for the session and sends it to the browser in a cookie or as a parameter in the URL. The session_start() function can take several options as parameters, which are used to configure the behavior of the session.

Here are some of the most commonly used options for session_start() in PHP:

session_name: This option is used to set the name of the session. By default, the name of the session is "PHPSESSID". You can change it to any other name by passing it as a parameter to session_name().

session_save_path: This option is used to set the path where session data is stored. By default, session data is stored in the server's temporary directory. You can change it to any other directory by passing the path as a parameter to session_save_path().

session_cookie_lifetime: This option is used to set the lifetime of the session cookie. By default, the session cookie is valid until the browser is closed. You can set a specific lifetime for the cookie by passing the number of seconds as a parameter to session_cookie_lifetime().

session_gc_maxlifetime: This option is used to set the maximum lifetime of the session data. By default, session data is stored on the server until the browser is closed. You can set a specific maximum lifetime for the session data by passing the number of seconds as a parameter to session_gc_maxlifetime().

session_cache_limiter: This option is used to set the cache limiter for the session. The cache limiter determines how the session data is cached by the browser. The default cache limiter is "nocache", which means that the browser will not cache any session data. You can change the cache limiter to "public" or "private" by passing it as a parameter to session_cache_limiter().





// Start a new session or resume an existing one
session_start();

// Set the name of the session to "my_session"
session_name("my_session");

// Set the path where session data is stored
session_save_path("/tmp/my_sessions");

// Set the lifetime of the session cookie to 1 hour
session_set_cookie_params(3600);

// Set the maximum lifetime of the session data to 24 hours
ini_set("session.gc_maxlifetime", 86400);

// Set the cache limiter to "private"
session_cache_limiter("private");

// Add some data to the session
$_SESSION["username"] = "JohnDoe";

// Display the session data
echo "Username: " . $_SESSION["username"];

In this example, we first call session_start() to start or resume the session. Then, we set the name of the session to "my_session" using the session_name() function. Next, we set the path where session data is stored to "/tmp/my_sessions" using the session_save_path() function. We also set the lifetime of the session cookie to 1 hour using the session_set_cookie_params() function.

We then set the maximum lifetime of the session data to 24 hours using the ini_set() function, which is a general-purpose function for setting configuration options in PHP. Finally, we set the cache limiter to "private" using the session_cache_limiter() function.

After configuring the session options, we add some data to the session using the $_SESSION superglobal array. We then display the data using the echo statement.

Note that the specific options and values used in this example are just for demonstration purposes and may not be appropriate for all scenarios. It's important to carefully consider the requirements of your application and choose the appropriate session options accordingly.
*/ 