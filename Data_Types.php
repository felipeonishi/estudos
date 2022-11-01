<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Data Type - PHP</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='styles.css'>
</head>

<body>
    <h3>PHP Data Types</h3>
    <div>
        <h4>PHP Data Types</h4>
        Variables can store data of different types, and different data types can do different things.<br>
        <br>
        PHP supports the following data types:<br>
        <br>
        - String<br>
        - Integer<br>
        - Float (floating point numbers - also called double)<br>
        - Boolean<br>
        - Array<br>
        - Object<br>
        - NULL<br>
        - Resource<br>
    </div>
    <br>
    <div>
        <h4>PHP String</h4>
        A string is a sequence of characters, like "Hello world!".<br>
        A string can be any text inside quotes. You can use single or double quotes:<br>
        <br>
        Example:<br>
    </div>
    <br>
    <iframe height=150px src="Data_Types_Strings.txt"></iframe>
    <br><br>
    <p>Result: </p>
    <div>
        <?php
            $x = "Hello world!";
            $y = 'Hello world!';

            echo $x;
            echo "<br>";
            echo $y;
        ?>
    </div>
    <br>-<br>
    <div>
        <h4>PHP Integer</h4>
        An integer data type is a non-decimal number between -2,147,483,648 and 2,147,483,647.<br>
        <br>
        Rules for integers:<br>
        <br>
        - An integer must have at least one digit<br>
        - An integer must not have a decimal point<br>
        - An integer can be either positive or negative<br>
        - Integers ca7n be specified in: decimal (base 10), hexadecimal (base 16), octal (base 8), or binary (base 2)
        notation<br>
        - In the following example $x is an integer. The PHP var_dump() function returns the data type and value:<br>
        <br>
        Example<br>
    </div>
    <iframe height=90px src="Data_Types_Integer.txt"></iframe>
    <div>
        <p>Result:</p>

        <?php
                $x = 5985;
                var_dump($x);
            ?>
    </div>
    <br>-<br>
    <div>
        <h4>PHP Float</h4>
        A float (floating point number) is a number with a decimal point or a number in exponential form.<br>
        <br>
        In the following example $x is a float. The PHP var_dump() function returns the data type and value:<br>
        <br>
        Example<br>
        <br>
        <iframe height=90px src="Data_Types_Float.txt"></iframe>
        <br><br>
        <p>Result:</p>
        <?php
            $x = 10.365;
            var_dump($x);
        ?>
        <br>
    </div>
    <br>-<br>
    <div>
        <pre>
<h4>PHP Boolean </h4>
A Boolean represents two possible states: TRUE or FALSE.

<iframe height=60px src="Data_Types_Boolean.txt"></iframe>
<p>Result:</p>

<?php
    $x = 10.365;
    var_dump($x);
?>

Booleans are often used in conditional testing. You will learn more about conditional testing in a 
later chapter of this tutorial.
    </pre>
    </div>
    -<br>
    <div>
        <pre>
<h4>PHP Array</h4>
An array stores multiple values in one single variable.

In the following example $cars is an array. The PHP var_dump() function returns the data type and value:

Example

<iframe height=100px src="Data_Types_Array.txt" ></iframe>

You will learn a lot more about arrays in later chapters of this tutorial.
    </pre>
    </div>
    <br>-<br>
    <div>
        <pre>
PHP Object
Classes and objects are the two main aspects of object-oriented programming.

A class is a template for objects, and an object is an instance of a class.

When the individual objects are created, they inherit all the properties and behaviors from the class, 
but each object will have different values for the properties.

Let's assume we have a class named Car. A Car can have properties like model, color, etc. We can define 
variables like $model, $color, and so on, to hold the values of these properties.

When the individual objects (Volvo, BMW, Toyota, etc.) are created, they inherit all the properties and 
behaviors from the class, but each object will have different values for the properties.

If you create a __construct() function, PHP will automatically call this function when you create an 
object from a class.

Example

<iframe height=350px src="Data_Types_Object.txt"></iframe>
<p>Result:</p>
<?php
class Car {
	public $color;
	public $model;
	public function __construct($color, $model) {
		$this->color = $color;
		$this->model = $model;
	}
	public function message() {
		return "My car is a " . $this->color . " " . $this->model . "!";
	}
}
$myCar = new Car("black", "Volvo");
echo $myCar -> message();
echo "<br>";
$myCar = new Car("red", "Toyota");
echo $myCar -> message();
?>

</pre>
    </div>
    <br>-<br>
    <div>
        <pre>
<h4>PHP NULL Value</h4>

Null is a special data type which can have only one value: NULL.

A variable of data type NULL is a variable that has no value assigned to it.

Tip: If a variable is created without a value, it is automatically assigned a value of NULL.

Variables can also be emptied by setting the value to NULL:

Example

<iframe src="Data_Types_NULL_Value.txt"></iframe>

<p>Result:</p>
<?php
$x = "Hello World!";
$x = null;
var_dump($x);
?>
</pre>
    </div>
    <br>-<br>
    <div>
        <pre>
The special resource type is not an actual data type. It is the storing of a reference to functions 
and resources external to PHP.

A common example of using the resource data type is a database call.

We will not talk about the resource type here, since it is an advanced topic.
</pre>
    </div>
    <br>
    <br>
    <br>
</body>

</html>