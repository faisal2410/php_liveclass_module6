<?php
//  Slide 11: Exception Handling: throw try catch finally

// In PHP, the try-catch-finally block is used for exception handling. Exceptions are errors or unexpected events that occur during the execution of a PHP script.

// try block:
// The try block is used to enclose the code that might throw an exception. If an exception is thrown within the try block, the script stops executing the code in the try block and jumps to the catch block.

// catch block:
// The catch block is used to handle the exception thrown by the code in the try block. It contains the code that is executed when an exception is caught. The catch block takes an exception object as a parameter that represents the exception that was thrown. Multiple catch blocks can be used to handle different types of exceptions.

// throw statement:
// The throw statement is used to throw an exception manually from within the code. It takes an exception object as a parameter that represents the exception being thrown.

// finally block:
// The finally block is used to enclose the code that is always executed regardless of whether an exception was thrown or caught. This block is optional, and if it is present, it is executed after the try block and the catch block.


try {
  // code that might throw an exception
  if ($someCondition) {
    throw new Exception('Something went wrong');
  }
} catch (Exception $e) {
  // code to handle the exception
  echo 'Caught exception: ',  $e->getMessage(), "\n";
} finally {
  // code that is always executed
  echo 'The try catch block has finished executing.';
}
// In this example, the code within the try block might throw an exception, and if it does, the script jumps to the catch block to handle the exception. If no exception is thrown, the script executes the code in the finally block.




// Example


function checkNumber($num){
    if($num>=1){
        throw new Exception("Value must be less than 1");
    }
    return true;
}
// checkNumber(5);

try{
    checkNumber(5);
    echo "if you see this text, the passed value is less than 1";
}
catch(Exception $e){
echo "Exception Message:".$e->getMessage();
}
finally{
    echo PHP_EOL."It is finally block, whic always executes.";
}

// Slide 12 : Exception Handling Example

// Example
function divide($dividend,$divisor){
    if($divisor==0){
        throw new Exception("Division by zero");
    }
    return $dividend/$divisor;
}

try{
    echo divide(5,0);
}finally{
    echo "Process Complete";
}