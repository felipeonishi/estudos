<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Sessions PHP</title>
</head>
<body>
<h1>PHP Sessions</h1>
<pre>
<hr>
A session is a way to store information (in variables) to be used across multiple pages.

Unlike a cookie, the information is not stored on the users computer.
<hr>
<h2>What is a PHP Session?</h2>
When you work with an application, you open it, do some changes, and then you close it. This is 
much like a Session. The computer knows who you are. It knows when you start the application and 
when you end. But on the internet there is one problem: the web server does not know who you are 
or what you do, because the HTTP address doesn't maintain state.

Session variables solve this problem by storing user information to be used across multiple pages
(e.g. username, favorite color, etc). By default, session variables last until the user closes the 
browser.

So; Session variables hold information about one single user, and are available to all pages in
one application.

<main class="note">
    <strong>Tip:</strong> If you need a permanent storage, you may want to store the data in a <a target="_blank" href="https://www.w3schools.com/php/php_mysql_intro.asp">database</a>.
</main>
<hr>
<h2>Start a PHP Session</h2>
A session is started with the <r>session_start()</r> function.

Session variables are set with the PHP global variable: $_SESSION.

Now, let's create a new page called "demo_session1.php". In this page, we start a new PHP session 
and set some session variables:

<main>
 Example

<article>
<ar>&lt;?php
// Start the session
</ar>
session_start();
<ar>?&gt;</ar>
&lt;<az>!DOCTYPE </az><av>html</av>&gt;
&lt;<ax>hmtl</ax>&gt;
&lt;<ax>body</ax>&gt;

&lt;<ar>?php
// Set session variables</ar> 
$_SESSION[<s>"favcolor"</s>] = <s>"green"</s>;
$_SESSION[<s>"favanimal"</s>] = <s>"cat"</s>;
<ax>echo</ax> <s>"Session variables are set."</s>;
<ar>?&gt;</ar>

&lt;<ax>/body</ax>&gt;
&lt;<ax>/html</ax>&gt;
</article>
<form action="Session_Start_PHP_Example.php" target="_blank">
<button class="button button1">Test Code!</button>
</form>
</main>

<main class="note">
<strong>Note:</strong> The <az> session_start() </az> function must be the very first thing in your document. Before any HTML tags.
</main>

<hr>
<h2>Get PHP Session Variable Values</h2>
Next, we create another page called "demo_session2.php". From this page, we will access the 
session information we set on the first page ("demo_session1.php").

Notice that session variables are not passed individually to each new page, instead they are 
retrieved from the session we open at the beginning of each page (<az>session_start()</az>).

Also notice that all session variable values are stored in the global $_SESSION variable:

<main>
 Example

<article>
<ar>&lt;?php</ar>
session_start();
<ar>&gt;</ar>
&lt;<ax>!DOCTYPE</ax> <av>hmtl</av>&gt;
&lt;<ax>html</ax>&gt;
&lt;<ax>body</ax>&gt;

<ar>&lt;?php
// Echo session variables that were set on previus page
<ax>echo</ax> <s>"Favorite color is "</s> . $_SESSION["favcolor"] . ".<br>";
<ax>echo</ax> <s>"Favorite animal is "</s> . $_SESSION["favanimal"] . ".<br>";
</ar>

&lt;<ax>body</ax>&gt;
&lt;<ax>html</ax>&gt;
</article>
<form action="Session_GET_Session_Variable_Values_Example.php" target="_blank">
<button class="button button1">CODE TEST!</button>
</form>
</main>

Another way to show all the session variable values for a user session is to run the following code:

<main>
  Example
<article>
&lt;?php
session_start();
?&gt;

&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;body&gt;

&lt;?php
print_r($_SESSION);
?&gt;

&lt;/body&gt;
&lt;/html&gt;
</article>  
<form action="Session_All_Variables_Value_Example.php" target="_blank">
<button class="button button1">CODE TEST!</button>
</form>
</main>

<main class="note">
<strong>How does it work? How does it know it's me?</strong>  
Most sessions set a user-key on the user's computer that looks something like this: 
765487cf34ert8dede5a562e4f3a7e12. Then, when a session is opened on another page, it scans the computer for a 
user-key. If there is a match, it accesses that session, if not, it starts a new session.
</main>
<hr>
<h2>Modify a PHP Session Variable</h2>
To change a session variable, just overwrite it:

<main>
  Example
<article>
&lt;?php session_start();
?&gt;  

&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;body&gt;

&lt;?php $_SESSION["favcolor"] = "yellow" ?&gt;

&lt;/body&gt;
&lt;/html&gt;
</article>
<form action="Session_Modify_Value_Variable.php" target="_blank">
<button class="button button1">CODE TEST!</button>
</form>
</main>
<hr>
<h2>Destroy a PHP Session</h2>
To remove all global session variables and destroy the session, use <r>session_unset()</r> and <r> session_destroy()</r>:
<main>
<article>
&lt;?php
session_start();
?&gt;  

&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;body&gt;

&lt;?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();
?&gt;

&lt;/html&gt;
&lt;/body&gt;
</article>
<form action="Session_Unset_Destroy.php" target="_blank">
<button class="button button1"></button>
</form>
</main>

</pre>
</body>
</html>