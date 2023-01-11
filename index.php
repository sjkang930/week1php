<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo "hello world"; ?></h1>
</body>
</html>


<?php
# single line comment


//echo outputs to the page - we can include HTML elements 
// note: echo is not a function
echo "Hello World<br>";   //Hello
echo "\"Hello World\"";  //"Hello" -to output literal quotes, you much ' escape' characters with a back slash

// more syntax:
// most of php is case-insensitive
// variables in php:
//  - name must start with a $
//  - names can include number, letters, _(but cannot start with a number) 
//  - data type of a variable can be changed

// $week5 - valid
// $_week5 - valid
// $5week - invalid
echo "<br>";
$today = 'Tuesday';
echo 'Today is ' .$today; // .is used to concatenate (join) strings together

$course = 'COMP4515';
echo "<br>and the course is $course<br>"; //double quotes allow for variables to be used within the string
//NOTE: php treats single and double quotes, double quotes  

// data types in php
// integer 5
// float 5.0
// string "", ''
// boolean true/false

var_dump($course); //automatically echos
echo "<br>";
print_r($course); //automatically echos
echo "<br>";
echo gettype($course); //prints the data types
echo "<br>";
echo is_string($course); //returns 1 (true) 
echo "<br>";
echo is_int($course); //returns nothing (false)

//to create a constant, use define() with two args: the name of the constant, and the value
define('PI', 3.14); //define a constant
echo "<br>";
echo PI; //3.14
?>



//php.net/manual
