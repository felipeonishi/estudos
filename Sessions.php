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
    
</pre>
</body>
</html>