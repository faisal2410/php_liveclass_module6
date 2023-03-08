<?php
session_name('my_app');
session_start();
echo $_SESSION['name'];