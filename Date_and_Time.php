<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Date and Time PHP</title>
</head>
<body>
<pre>
<h1>PHP Date and Time</h1>
<hr>
    The PHP date() function is used to format a date and/or a time.
<hr>

<h2>The PHP Date() Function</h2>
The PHP date() function formats a timestamp to a more readable date and time.

Syntax

<div>
date(format,timestamp)
</div>

<table class="ws-table-all notranslate">
    <tr>
        <th style="width:20%">Parameter</th>
        <th style="width:80%">Description</th>
  </tr>  
  <tr>
    <td>format</td>
    <td>Required. Specifies the format of the timestamp</td>
  </tr>
  <tr>
    <td>timestamp</td>
    <td>Optional. Specifies a timestamp. Default is the current date and time</td>
  </tr>
</table>

<main>
A timestamp is a sequence of characters, denoting the date and/or time at which a certain event occurred.
</main>
<hr>
<h2>Get a Date</h2>
The required format parameter of the date() function specifies how to format the date (or time).

Here are some characters that are commonly used for dates:

 • d - Represents the day of the month (01 to 31)
 • m - Represents a month (01 to 12)
 • Y - Represents a year (in four digits)
 • l (lowercase 'L') - Represents the day of the week

Other characters, like"/", ".", or "-" can also be inserted between the characters to add additional formatting.

The example below formats today's date in three different ways:

<main>
   <b>Example</b>

<article>
&lt;?php
echo "Today is " . date("Y/m/d") . "&lt;br&gt;";
echo "Today is " . date("Y.m.d") . "&lt;br&gt;";
echo "Today is " . date("Y-m-d") . "&lt;br&gt;";
echo "Today is " . date("l");
?&gt;
</article>
</main>
RESULT:

<ax><?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");
?></ax>
<hr>
<h2>PHP Tip - Automatic Copyright Year</h2>
Use the <b>date()</b> function to automatically update the copyright year on your website:

<main>
   Example

<article>
&copy; 2010-&lt;?php echo date("Y");?&gt;
</article>
</main>

<b>RESULT:</b>

<ax>&copy; 2010-<?php echo date("Y");?></ax>
<hr>
<h2>Get a Time</h2>
Get a Time
Here are some characters that are commonly used for times:

 • H - 24-hour format of an hour (00 to 23)
 • h - 12-hour format of an hour with leading zeros (01 to 12)
 • i - Minutes with leading zeros (00 to 59)
 • s - Seconds with leading zeros (00 to 59)
 • a - Lowercase Ante meridiem and Post meridiem (am or pm)

The example below outputs the current time in the specified format:

<main>
   Example

<article>
&lt;?php
echo "The time is " . date("h:i:sa");
?&gt;
</article>
</main>

<div>
    Note that the PHP date() function will return the current date/time of the server!
</div>
<hr>

<h2>Get Your Time Zone</h2>
If the time you got back from the code is not correct, it's probably because your server is 
in another country or set up for a different timezone.

So, if you need the time to be correct according to a specific location, you can set the timezone
you want to use.

The example below sets the timezone to "America/New_York", then outputs the current time in the 
specified format:

<main>
   Example

<article>
&lt;?php
date_default_timezone_set("America/New_York");
echo "The time is " . date("h:i:sa");
</article>
</main>
<b> RESULT:</b>
<ax>
    <?php
    date_default_timezone_set("America/New_York");
    echo "The time is " . date("h:i:sa");
    ?>
</ax>
<hr>
<h2>Create a Date With mktime()</h2>
The optional timestamp parameter in the date() function specifies a timestamp. If omitted, the 
current date and time will be used (as in the examples above).

The PHP mktime() function returns the Unix timestamp for a date. The Unix timestamp contains the 
number of seconds between the Unix Epoch (January 1 1970 00:00:00 GMT) and the time specified.
<h2> Syntax </h2>
<main> mktime(hour, minute, second, month, day, year)</main>

The example below creates a date and time with the date() function from a number of parameters in the 
mktime() function:

<main>
   Example:

<article>
&lt;?php
$d=mktime(11, 14, 54, 8, 12, 2014);
echo "Created date is " . date("Y-m-d h:i:sa", $d);
?&gt;
</article>
</main>
<b>RESULT:</b>
<ax>
    <?php
    $d=mktime(11,4,54,8,12,2014);
    echo "Created date is " . date("Y-m-d h:i:sa", $d)
    ?>
</ax>
<hr>
<h2>Create a Date From a String With strtotime()</h2>
The PHP strtotime() function is used to convert a human readable date string into a Unix timestamp 
(the number of seconds since January 1 1970 00:00:00 GMT).

<b>Syntax</b>

<main>strtotime(time, now)</main>
The example below creates a date and time from the strtotime() function:

<main>
   Example

<article>
&lt?php
$d=strtotime("10:30pm April 15 2014")
echo "Created date is " . date("Y-m-d h:i:sa", $d);
?&gt;
</article>
</main>
<b>RESULT:</b>
<ax>
    <?php
    $d=strtotime("10:30pm April 15 2014");
    echo "Created date is " . date("Y-m-d h:i:sa", $d);
    ?>

</ax>

- PHP is quite clever about converting a string to a date, so you can put in various values:


<main>
   Example

<article>
&lt;?php
$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";
?&gt;
</article>
</main>

<b>RESULT:</b>
<ax>
<?php
    $d=strtotime("Tomorrow");
    echo date("Y-m-d h:i:sa", $d) . "<br>";

    $d=strtotime("next Saturday");
    echo date("Y-m-d h:i:sa", $d) . "<br>";

    $d=strtotime("+3 Months");
    echo date("Y-m-d h:i:sa", $d) . "<br>";
?>
</ax>

However, <b>strtotime()</b> is not perfect, so remember to check the strings you put in there.

<hr>

<h2>More Date Examples</h2>
The example below outputs the dates for the next six Saturdays:

<main>
   Example

<article>
&lt;?php
$startdate = strtotime("Saturday");
$enddate = strtotime("+6 weeks", $startdate);

while ($stardate < $enddate) {
    echo date("M d", $strtotime) . "<br>";
    $stardate = strtotime("+1 week", $startdate);
}
?&gt;
</article>
</main>
<?php
$startdate = strtotime("Saturday");
$enddate = strtotime("+6 weeks", $startdate);

while ($startdate < $enddate) {
    echo date("M d", $startdate) . "<br>";
    $startdate = strtotime("+1 week", $startdate);
}
?>

The example below outputs the number of days until 4th of July:

<main>
   Example

<article>
&lt;?php
$d1=strtotime("July 04");
$d2=ceil(($d1-time())/60/60/24);
echo "There are " . $d2 ."days until 4th of july.";
?&gt;
</article>
</main>

<b>RESULT:</b>

<ax>
    <?php
    $d1=strtotime("July 04");
    $d2=ceil(($d1-time())/60/60/24);
    echo "There are " . $d2 . " days until 4th of July.";
    ?> 
</ax>

<hr>

<h2>Complete PHP Date Reference</h2>
For a complete reference of all date functions, go to our complete <a href="https://www.w3schools.com/php/php_ref_date.asp">PHP Date Reference</a>.

The reference contains a brief description, and examples of use, for each function!

<hr color="tomato">
</pre>
</body>
</html>