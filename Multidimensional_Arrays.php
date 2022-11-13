<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Multidimensional Arrays PHP</title>
</head>
<body>
<pre>
<h1>PHP Multidimensional Arrays</h1>
<hr>
In the previous pages, we have described arrays that are a single list of key/value pairs.

However, sometimes you want to store values with more than one key. For this, we have multidimensional arrays.
<hr>

<h2>PHP - Multidimensional Arrays</h2>
A multidimensional array is an array containing one or more arrays.

PHP supports multidimensional arrays that are two, three, four, five, or more levels deep. However, arrays 
more than three levels deep are hard to manage for most people.

<main>
<article class="browser">
<h2>The dimension of an array indicates the number of indices you need to select an element.</h2>
<p>  • For a two-dimensional array you need two indices to select an element
  • For a three-dimensional array you need three indices to select an element</p>
</article>
</main>

<hr>

<h2>PHP - Two-dimensional Arrays</h2>
A two-dimensional array is an array of arrays (a three-dimensional array is an array of arrays of arrays).

First, take a look at the following table:

<table>
<tr>
<th>Name</th>
<th>Stock</th>
<th>Sold</th>
</tr>
<tr>
<td>Volvo</td>
<td>22</td>
<td>18</td>
</tr>
<tr>
<td>BMW</td>
<td>15</td>
<td>13</td>
</tr>
<tr>
<td>Saab</td>
<td>5</td>
<td>2</td>
</tr>
<tr>
<td>Land Rover</td>
<td>17</td>
<td>15</td>
</tr>
</table>
We can store the data from the table above in a two-dimensional array, like this:

<main>
<article class="browser">
<p>$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);
</p>
</article>
</main>

Now the two-dimensional $cars array contains four arrays, and it has two indices: row and column.

To get access to the elements of the $cars array we must point to the two indices (row and column):

Example

<iframe height="230px" src="Arrays_Two_Dimensional.txt"></iframe>
<p>Result:</p>
<?php
$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);

echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";
?>

We can also put a for loop inside another for loop to get the elements of the $cars array (we still 
have to point to the two indices):

Example

<iframe height="290px" src="Arrays_Two_Dimensional_2.txt"></iframe>
<b>Result:</b>

<?php
$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );

for ($row = 0; $row < 4; $row++) {
    echo "Row number $row";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++){
        echo "<li>".$cars[$row][$col]."</li>";
    }
    echo "</ul>";
}
?>

<hr>

<h2>Complete PHP Array Reference</h2>

For a complete reference of all array functions, go to our complete <a href="https://www.w3schools.com/php/php_ref_array.asp">PHP Array Reference</a>.

The reference contains a brief description, and examples of use, for each function!
</hr>
<hr color="Tomato">
</pre>
</body>
</html>