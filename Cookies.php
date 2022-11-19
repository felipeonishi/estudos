<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Cookies PHP</title>
</head>
<body>
    <h1>PHP Cookies</h1>
<hr>
<pre>
<h2>What is a Cookie?</h2>
A cookie is often used to identify a user. A cookie is a small file that the server 
embeds on the user's computer. Each time the same computer requests a page with a 
browser, it will send the cookie too. With PHP, you can both create and retrieve 
cookie values.
<hr>
<h2>Create Cookies With PHP</h2>
A cookie is created with the setcookie() function.

<strong> Syntax </strong>

<div>
set cookie(name, value, expire, path, domain, secure, httponly);
</div>

Only the name parameter is required. All other parameters are optional.
<hr>
<h2>PHP Create/Retrieve a Cookie</h2>

The following example creates a cookie named "user" with the value "John Doe". The cookie will expire 
after 30 days (86400 * 30). The "/" means that the cookie is available in entire website (otherwise, 
select the directory you prefer).

We then retrieve the value of the cookie "user" (using the global variable $_COOKIE). We also use the 
isset() function to find out if the cookie is set:

<main>
 Example

<article>
&lt;?php
$cookie_name = <s>"user"</s>;
$cookie_value = <s>"John Doe"</s>;
setcookie($cookie_namem,$cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?&gt;

&lt;<az>hmtl</az>&gt;
&lt;<az>body</az>&gt;

&lt;?php  
<az>if</az>(!<az>isset</az>($COOKIE[$cookie_name])) {
    <az>echo</az> <s>"Cookie named '"</s> . $cookie_name . <s>"' is not set!"</s>;
} <az>else</az> {
    <az>echo</az> <s>"Cookie '"</s> . $_COOKIE[$cookie_name . <s>"' is set!&lt;br&gt;"</s>];
    <az>echo</az> <s>"Value is: "</s> . $_COOKIE[$cookie_name] ;
}
?&gt;

&lt;<az>/body</az>&gt;
&lt;<az>/html</az>&gt;
</article>
<form action="Cookie_Creat_Retrieve_Example.php" target="_blank">
<button class="button button1">Run Example</button>
</form>
</main>
<main class="note">
   <strong>Note:</strong> The setcookie() function must appear BEFORE the &lt;html&gt; tag.
</main>

<strong>Note:</strong> The value of the cookie is automatically URLencoded when sending the cookie, and automatically 
decoded when received (to prevent URLencoding, use <r> setrawcookie() </r> instead).
<hr>
<h2>Modify a Cookie Value</h2>
To modify a cookie, just set (again) the cookie using the setcookie() function:

<main>
 Example

<article>
&lt;?php
$cookie_name = <s>"user"</s>;
$cookie_value = <s>"Alex Porter"</s>;
setcookie($cookie_name, $cookie_value, time() + (<s>86400 * 30</s>), "/");
?&gt;

&lt;<az>html</az>&gt;
&lt;<az>body</az>&gt;


&lt;?php
<s>if</s>(!<s>isset</s>($_COOKIE[$cookie_name])) {
 <az>   echo</az> "Cookie named '" . $cookie_name . "' is not set!";
}<az> else</az> {
 <az>   echo</az> <s>"Cookie '"</s> . $cookie_name . <s>"' is set!&lt;br&gt;"</s>;
 <az>   echo</az> <s>"Value is: "</s> . $_COOKIES[$cookie_name];
}
?&gt;

&lt;<az>/html</az>&gt;
&lt;<az>/body</az>&gt;

</article>
<form action="Modify_Cookie_Value_Example.php" target="_blank">
    <button class="button button1"> Test Code! </button>
</form>
</main>

<hr>
<h2>Delete a Cookie</h2>
 To delete a cookie, use the <r> setcookie() </r> function with an expiration date in the past:

<main>
 Example
<article>
<ar>&lt;?php
// set the expiration date to one hour ago</ar>
setcookies(<s>"user"</s>, <s>""</s>, time() - <s>3600</s>)
<ar>?&gt;</ar>
&lt;<az>html</az>&gt;
&lt;<az>body</az>&gt;

&lt;?php
<az>echo</az> <s>"Cookie 'user' is deleted."</s>;
?&gt;

&lt;<az>/body</az>&gt;
&lt;<az>/html</az>&gt;
</article>
<form action="Delete_Cookie_Example.php" target="_blank">
<button class="button button1"> Test Code! </button>
</form>
</main>

<hr>

<h2>Check if Cookies are Enabled</h2>
The following example creates a small script that checks whether cookies are enabled. First, try 
to create a test cookie with the <r> setcookie() </r> function, then count the $_COOKIE array variable:

<main>
 Example

<article>
<ar>&lt;?php</ar>
setcookie(<s>"test_cookie"</s>, <s>"test"</s>, time() + <s>3600</s>, <s>'/'</s>);
<ar>?&gt;</ar>
&lt;<az>html</az>&gt;
&lt;<az>body</az>&gt;

<ar>&lt;?php</ar>
    <az>if</az>(count($COOKIE) > <s>0</s>){
        <az>echo</az> <s>"Cookies are enabled."</s>;
    } <az>else</az> {
        <az>echo</az> <s>"Cookies are disabled."</s>;
    }
<ar>?&gt;</ar>

&lt;<az>/body</az>&gt;
&lt;<az>/hmtl</az>&gt;
</article>
<form action="Check_if_Cookies_are_Enabled_Example.php" target="_blank">
<button class="button button1">Test Code!</button>
</form>
</main>

<hr>
<h2>Complete PHP Network Reference</h2>
For a complete reference of Network functions, go to our complete <a href="https://www.w3schools.com/php/php_ref_network.asp">PHP Network Reference</a>.

<hr color="tomato">
</pre>    
</body>
</html>