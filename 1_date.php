<?php
// Slide 1 : PHP Date-> date()
/*
The date() function in PHP is used to format a date and/or time according to a specified format string.

Some common format specifiers used with the date() function include:

Y: Four-digit year
m: Two-digit month (with leading zeros)
d: Two-digit day of the month (with leading zeros)
H: Two-digit hour (24-hour format, with leading zeros)
i: Two-digit minute (with leading zeros)
s: Two-digit second (with leading zeros)

*/ 
// echo date("Y/m/d").PHP_EOL;
// echo date("Y.m.d").PHP_EOL;
// echo date("Y-m-d").PHP_EOL;
// echo date("l").PHP_EOL;

// Slide 2: PHP Time

// echo date("h:i:sa").PHP_EOL;

// Slide 3 Time Zone

/*
The date_default_timezone_set() function in PHP is used to set the default timezone used by all date/time functions in a PHP script.
*/ 

// date_default_timezone_set("Asia/Dhaka");
// echo date("h:i:sa");

// Slide 4 Date Functions -> date_add() date_create() date_sub() date_diff() date_interval_create_from_date_string()
/*
The date_create() function is used to create a new DateTime object in PHP. It takes an optional parameter of a date/time string or a DateTimeZone object to set the initial date/time or timezone of the object. If no parameter is provided, the current date/time is used by default.

The date_add() function is used to add a specified interval to a DateTime object. It takes two parameters - the first parameter is the DateTime object to which the interval should be added, and the second parameter is a DateInterval object representing the interval to be added.

he date_sub() function is used to subtract a specified interval from a DateTime object. It takes two parameters - the first parameter is the DateTime object from which the interval should be subtracted, and the second parameter is a DateInterval object representing the interval to be subtracted.

The date_diff() function is used to calculate the difference between two DateTime objects. It takes two parameters - the first parameter is the DateTime object representing the first date/time, and the second parameter is the DateTime object representing the second date/time. It returns a DateInterval object representing the difference between the two dates/times.

The date_interval_create_from_date_string() function in PHP is used to create a DateInterval object from a string that represents a duration. 

*/ 

// date_add()- Add days, months, years, hours, minutes and seconds to a date

// $date=date_create("2013-03-15");
// date_add($date,date_interval_create_from_date_string("40 years"));

// Slide 5 Date Functions:date_sub()
// date_sub()-Subtract days, months, years, hours, minutes and seconds to a date

// $date=date_create("2013-03-15");
// date_sub($date,date_interval_create_from_date_string("40 days"));
// echo date_format($date,"Y-m-d");

// Slide 6 Date Functions : date_diff()

// $date1=date_create("2013-03-15");
// $date2=date_create("2013-12-12");
// $diff=date_diff($date1,$date2);
// echo $diff->format("%R%a days");

// Slide 7 Date Functions: date_format()

// $date=date_create("2013-03-15");
// echo date_format($date,"Y/m/d H:i:s");

// Slide 8 Date Functions: date_sunrise() date_sunset()

// echo(date_sunrise(time(),SUNFUNCS_RET_STRING,38.4,-9.90,1));
// echo(date_sunset(time(),SUNFUNCS_RET_STRING,38.4,-9.90,1));
// print_r(date_sun_info(time(),38.4,-9.90));

// Slide 9 Date Functions date_timestamp_get()

$date=date_create();
echo date_timestamp_get($date);