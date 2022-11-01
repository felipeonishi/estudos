<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="Stylesheet" href="Styles.css">
    <title>Operators</title>
</head>

<body>
    <pre>
<h2>PHP Operators</h2>
-
<h3>PHP Operators</h3>
Operators are used to perform operations on variables and values.

PHP divides the operators in the following groups:

 • Arithmetic operators
 • Assignment operators
 • Comparison operators
 • Increment/Decrement operators
 • Logical operators
 • String operators
 • Array operators
 • Conditional assignment operators

 -
 <h3>PHP Arithmetic Operators</h3>

The PHP arithmetic operators are used with numeric values to perform common arithmetical 
operations, such as addition, subtraction, multiplication etc.

 <table>
  <tr>
    <th>Operator</th>
    <th>Name</th>
    <th>Example</th>
    <th>Result</th>
    <th>Show it</th>
  </tr>
  <tr>
  <td>+</td>
  <td>Addition</td>
  <td>$x + $y</td>
  <td>Sum of $x and $y</td>
  <td><a href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_addition"> Try it>> </a></td>
  </tr>
  <tr>
  <td>-</td>
  <td>Subtraction</td>
  <td>$x - $y</td>
  <td>Difference of $x and $y</td>
  <td><a  href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_subtraction"> Try it>> </a></td>
  </tr>
  <tr>
  <td>*</td>
  <td>Multiplication</td>
  <td>$x * $y</td>
  <td>Product of $x and $y</td>
  <td><a href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_multiplication"> Try it>> </a></td>
  </tr>
  <tr>
  <td>/	</td>
  <td>Division</td>
  <td>$x / $y</td>
  <td>Quotient of $x and $y</td>
  <td><a href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_division"> Try it>> </a></td>
  </tr>
  <tr>
  <td>%</td>
  <td>Modulus</td>
  <td>$x % $y</td>
  <td>Remainder of $x divided by $y	</td>
  <td><a href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_modulus"> Try it>> </a></td>
  </tr>
  <tr>
  <td>**</td>
  <td>Exponentiation</td>
  <td>$x ** $y</td>
  <td>Result of raising $x to the $y'th power</td>
  <td><a href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_modulus"> Try it>> </a></td>
  </tr>
</table>

-

<h3>PHP Comparison Operators</h3>
The PHP comparison operators are used to compare two values (number or string):

<table>
  <tr>
    <th> Operator </th>
    <th> Name </th>
    <th> Example </th>
    <th> Result </th>
    <th> Show it </th>
  </tr>
  <tr>
    <th> == </th>
    <th> Equal </th>
    <th> $x == $y </th>
    <th> Returns true if $x is equal to $y </th>
    <th><a target=_blank href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_equal"> Try it>> </a></th>
  </tr>
  <tr>
    <th> ===	</th>
    <th> Identical </th>
    <th> $x === $y </th>
    <th> Returns true if $x is equal to $y, and they are of the same type </th>
    <th><a target=_blank href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_identical"> Try it>> </a></th>
  </tr>
  <tr>
    <th> !=	</th>
    <th> Not equal </th>
    <th> $x != $y </th>
    <th> Returns true if $x is not equal to $y </th>
    <th> <a target=_blank href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_not_equal"> Try it>> </a></th>
  </tr>
  <tr>
    <th> <> </th>
    <th> Not equal </th>
    <th> $x <> $y </th>
    <th> Returns true if $x is not equal to $y </th>
    <th><a target=_blank href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_not_equal2"> Try it>> </a></th>
  </tr>
  <tr>
    <th> !== </th>
    <th> Not identical </th>
    <th> $x !== $y </th>
    <th> Returns true if $x is not equal to $y, or they are not of the same type </th>
    <th><a target=_blank href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_not_identical"> Try it>> </a></th>
  </tr>
  <tr>
    <th> > </th>
    <th> Greater than </th>
    <th> $x > $y </th>
    <th> Returns true if $x is greater than $y </th>
    <th><a target=_blank href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_greater_than"> Try it>> </a></th>
  </tr>
  <tr>
    <th> < </th>
    <th> Less than </th>
    <th> $x < $y </th>
    <th> Returns true if $x is less than $y </th>
    <th><a target=_blank href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_less_than"> Try it>> </a></th>
  </tr>
  <tr>
    <th> >= </th>
    <th> Greater than or equal to </th>
    <th> $x >= $y </th>
    <th> Returns true if $x is greater than or equal to $y </th>
    <th><a target=_blank href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_greater_than2"> Try it>> </a></th>
  </tr>
  <tr>
    <th> <= </th>
    <th> Less than or equal to </th>
    <th> $x <= $y </th>
    <th> Returns true if $x is less than or equal to $y </th>
    <th><a target=_blank href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_less_than2"> Try it>> </a></th>
  </tr>
  <tr>
    <th> <=> </th>
    <th> Spaceship </th>
    <th> $x <=> $y </th>
    <th> Returns an integer less than, equal to, or greater than zero, depending 
 on if $x is less than, equal to, or greater than $y. Introduced in PHP 7 </th>
    <th><a target=_blank href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_spaceship"> Try it>> </a></th>
  </tr>
</table>

-
<h3>PHP Increment / Decrement Operators</h3>
The PHP increment operators are used to increment a variable's value.
The PHP decrement operators are used to decrement a variable's value.

<table>
<tr>
    <th> Operator </th>
    <th> Name </th>
    <th> Description </th>
    <th> Show it </th>
  </tr>
<tr>
    <th> ++$x </th>
    <th> Pre-increment </th>
    <th> Increments $x by one, then returns $x </th>
    <th><a target=_blank href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_pre_incr"> Try it>> </a></th>
  </tr>
  <tr>
    <th> $x++ </th>
    <th> Post-increment </th>
    <th> Returns $x, then increments $x by one </th>
    <th><a target=_blank href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_post_incr"> Try it>> </a></th>
  </tr> 
  <tr>
    <th> --$x </th>
    <th> Pre-decrement </th>
    <th> Decrements $x by one, then returns $x </th>
    <th><a target=_blank href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_pre_decr"> Try it>> </a></th>
  </tr>
  <tr>
    <th> $x-- </th>
    <th> Post-decrement </th>
    <th> Returns $x, then decrements $x by one </th>
    <th><a target=_blank href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_post_decr"> Try it>> </a></th>
  </tr>
</table>

-

<h3>PHP Logical Operators</h3>
The PHP logical operators are used to combine conditional statements.
<table>
    <tr>
        <th> Operator </th>
        <th> Name </th>
        <th> Description </th>
        <th> Result </th>
        <th> Show it </th>
    </tr>
    <tr>
        <th> and </th>
        <th> And </th>
        <th> $x and $y </th>
        <th> True if both $x and $y are true </th>
        <th><a target=_blank href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_and"> Try it>> </a></th>
    </tr>
    <tr>
        <th> or </th>
        <th> Or </th>
        <th> $x or $y </th>
        <th> True if either $x or $y is true </th>
        <th><a target=_blank href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_or"> Try it>> </a></th>
    </tr>
    <tr>
        <th> xor </th>
        <th> Xor </th>
        <th> $x xor $y </th>
        <th> True if either $x or $y is true, but not both </th>
        <th><a target=_blank href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_xor"> Try it>> </a></th>
    </tr>
    <tr>
        <th> && </th>
        <th> And </th>
        <th> $x && $y </th>
        <th> True if both $x and $y are true </th>
        <th><a target=_blank href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_and2"> Try it>> </a></th>
    </tr>
    <tr>
        <th> || </th>
        <th> Or </th>
        <th> $x || $y </th>
        <th> True if either $x or $y is true </th>
        <th><a target=_blank href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_or2"> Try it>> </a></th>
    </tr>
    <tr>
        <th> ! </th>
        <th> Not </th>
        <th> !$x </th>
        <th> True if $x is not true </th>
        <th><a target=_blank href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_not"> Try it>> </a></th>
    </tr>
</table>

-

<h3>PHP String Operators</h3>
PHP has two operators that are specially designed for strings.

<table>
    <tr>
        <th> Operator </th>
        <th> Name </th>
        <th> Example </th>
        <th> Result </th>
        <th> Show it </th>
    </tr>
    <tr>
        <th> . </th>
        <th> Concatenation </th>
        <th> $txt1 . $txt2 </th>
        <th> Concatenation of $txt1 and $txt2 </th>
        <th><a target=_blank href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_string1"> Try it>> </a></th>
    </tr>
    <tr>
        <th> .= </th>
        <th> Concatenation assignment </th>
        <th> $txt1 .= $txt2 </th>
        <th> Appends $txt2 to $txt1 </th>
        <th><a target=_blank href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_string2"> Try it>> </a></th>
    </tr>
</table>

-

<h3>PHP Array Operators</h3>
The PHP array operators are used to compare arrays.

<table>
    <tr>
        <th> Operator </th>
        <th> Name </th>
        <th> Example </th>
        <th> Result </th>
        <th> Show it</th>
    </tr>
    <tr>
        <th> + </th>
        <th> Union </th>
        <th> $x + $y </th>
        <th> Union of $x and $y </th>
        <th><a target=_blank href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_arr_union"> Try it>> </a></th>
    </tr>
    <tr>
        <th> == </th>
        <th> Equality </th>
        <th> $x == $y </th>
        <th> Returns true if $x and $y have the same key/value pairs </th>
        <th><a target=_blank href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_arr_equality"> Try it>> </a></th>
    </tr>
    <tr>
        <th> === </th>
        <th> Identity </th>
        <th> $x === $y </th>
        <th> Returns true if $x and $y have the same key/value pairs in the same order 
        and of the same types </th>
        <th><a target=_blank href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_arr_identity"> Try it>> </a></th>
    </tr>
    <tr>
        <th> != </th>
        <th> Inequality </th>
        <th> $x != $y </th>
        <th> Returns true if $x is not equal to $y </th>
        <th><a target=_blank href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_arr_inequality"> Try it>> </a></th>
    </tr>
    <tr>
        <th> <> </th>
        <th> Inequality </th>
        <th> $x <> $y </th>
        <th> Returns true if $x is not equal to $y </th>
        <th><a target=_blank href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_arr_inequality2"> Try it>> </a></th>
    </tr>
    <tr>
        <th> !== </th>
        <th> Non-identity </th>
        <th> $x !== $y </th>
        <th> Returns true if $x is not identical to $y </th>
        <th><a target=_blank href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_arr_non_identity"> Try it>> </a></th>
    </tr>
</table>

-

<h3>PHP Conditional Assignment Operators</h3>
The PHP conditional assignment operators are used to set a value depending on conditions:

<table>
    <tr>
        <th> Operator </th>
        <th> Name </th>
        <th> Example </th>
        <th> Result </th>
        <th> Show it </th>
    </tr>
    <tr>
        <th> ?: </th>
        <th> Ternary </th>
        <th> $x = expr1 ? expr2 : expr3 </th>
        <th> 	Returns the value of $x.
The value of $x is expr2 if expr1 = TRUE.
The value of $x is expr3 if expr1 = FALSE </th>
        <th><a target=_blank href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_ternary"> Try it>> </a></th>
    </tr>
    <tr>
        <th> ?? </th>
        <th> Null coalescing </th>
        <th> $x = expr1 ?? expr2 </th>
        <th> Returns the value of $x.
The value of $x is expr1 if expr1 exists, and is not NULL.
If expr1 does not exist, or is NULL, the value of $x is expr2.
Introduced in PHP 7 </th>
        <th><a target=_blank href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_null_coalescing"> Try it>> </a></th>
    </tr>
</table>

end.
</pre>
</body>

</html>