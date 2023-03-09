<?php
// fopen(): This function is used to open a file. It takes two parameters: the filename and the mode in which to open the file (read, write, append, etc.).

// fclose(): This function is used to close a file that has been opened with fopen(). It takes one parameter, which is the file handle returned by fopen().

// fread(): This function is used to read a specified number of bytes from a file that has been opened with fopen(). It takes two parameters: the file handle and the number of bytes to read.

// fwrite(): This function is used to write data to a file that has been opened with fopen(). It takes two parameters: the file handle and the data to write.

// fgets(): This function is used to read a single line from a file that has been opened with fopen(). It takes one parameter, which is the file handle.

// file_get_contents(): This function is used to read the entire contents of a file into a string. It takes one parameter, which is the filename.

// file_put_contents(): This function is used to write data to a file. It takes two parameters: the filename and the data to write.

// feof(): This function is used to check if the end of a file has been reached. It takes one parameter, which is the file handle.

// fget(): This function is used to read a single character from a file that has been opened with fopen(). It takes one parameter, which is the file handle.


// Open a file for reading
$file = fopen("example.txt", "r");

// Read the first line of the file
echo $line = fgets($file);

// Close the file
fclose($file);

// Write to a file
// $data = "Hello, world!";
// $file = fopen("example.txt", "w");
// fwrite($file, $data);
// fclose($file);

// Read the entire contents of a file into a string
// $data = file_get_contents("example.txt");

// Write to a file using file_put_contents()
// $data = "Hello, world!";
// file_put_contents("example.txt", $data);



// Slide 17

// $myfile=fopen("myfile.txt","r");
// $contents=fread($myfile,filesize("myfile.txt"));
// echo $contents;
// fclose($myfile);

// Slide 18

// $myfile=fopen("myfile.txt","w");
// $data="Hello this is test data";
// fwrite($myfile,$data);
// fclose($myfile);

// Slide 19

// $myfile=fopen("myfile.txt","r");
// $content=fgets($myfile);
// echo $content;
// fclose($myfile);

// Slide 20

// $content=file_get_contents("myfile.txt");
// echo $content;

// Slide 21
// Write some data to file
// $data="Hello, world!";
// file_put_contents("myfile.txt",$data);

// FILE_APPEND flag to tell file_put_contents() to append contents the string "More data\n" to the end of the file instead of overwriting its contents.

// $data = "Hello, world!";
// file_put_contents( "myfile.txt", $data,FILE_APPEND);