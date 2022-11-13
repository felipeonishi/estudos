<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Superglobal - $_SERVER PHP</title>
</head>
<body>
<pre>
<h1>PHP Superglobal - $_SERVER</h1>
<hr>

Super global variables are built-in variables that are always available in all scopes.

<hr>

<h2>PHP $_SERVER</h2>
$_SERVER is a PHP super global variable which holds information about headers, paths, and script locations.

The example below shows how to use some of the elements in $_SERVER:

Example

<iframe height="250px" src="Superglobals_$_SERVER.txt"></iframe>

RESULT:

<?php
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
?>

The following table lists the most important elements that can go inside $_SERVER:

<table>
    <tr>
        <th>Element/Code</th>
        <th>Description</th>
    </tr>
    <tr>
        <td>$_SERVER['PHP_SELF']</td>
        <td>Returns the filename of the currently executing script</td>
    </tr>
    <tr>
        <td>$_SERVER['GATEWAY_INTERFACE']	</td>
        <td>Returns the version of the Common Gateway Interface (CGI) the server is using</td>
    </tr>
    <tr>
        <td>$_SERVER['SERVER_ADDR']</td>
        <td>Returns the IP address of the host server</td>
    </tr>
    <tr>
        <td>$_SERVER['SERVER_NAME']</td>
        <td>Returns the name of the host server (such as www.w3schools.com)</td>
    </tr>
    <tr>
        <td>$_SERVER['SERVER_SOFTWARE']</td>
        <td>Returns the server identification string (such as Apache/2.2.24)</td>
    </tr>
    <tr>
        <td>$_SERVER['SERVER_PROTOCOL']</td>
        <td>Returns the name and revision of the information protocol (such as HTTP/1.1)</td>
    </tr>
    <tr>
        <td>$_SERVER['REQUEST_METHOD']	</td>
        <td>Returns the request method used to access the page (such as POST)</td>
    </tr>
    <tr>
        <td>$_SERVER['REQUEST_TIME']</td>
        <td>Returns the timestamp of the start of the request (such as 1377687496)</td>
    </tr>
    <tr>
        <td>$_SERVER['QUERY_STRING']</td>
        <td>Returns the query string if the page is accessed via a query string</td>
    </tr>
    <tr>
        <td>$_SERVER['HTTP_ACCEPT']</td>
        <td>Returns the Accept header from the current request</td>
    </tr>
    <tr>
        <td>$_SERVER['HTTP_ACCEPT_CHARSET']</td>
        <td>Returns the Accept_Charset header from the current request (such as utf-8,ISO-8859-1)</td>
    </tr>
    <tr>
        <td>$_SERVER['HTTP_HOST']</td>
        <td>Returns the Host header from the current request</td>
    </tr>
    <tr>
        <td>$_SERVER['HTTP_REFERER']</td>
        <td>Returns the complete URL of the current page (not reliable because not all user-agents support it)</td>
    </tr>
    <tr>
        <td>$_SERVER['HTTPS']</td>
        <td>Is the script queried through a secure HTTP protocol</td>
    </tr>
    <tr>
        <td>$_SERVER['REMOTE_ADDR']</td>
        <td>Returns the IP address from where the user is viewing the current page</td>
    </tr>
    <tr>
        <td>$_SERVER['REMOTE_HOST']</td>
        <td>Returns the Host name from where the user is viewing the current page</td>
    </tr>
    <tr>
        <td>$_SERVER['REMOTE_PORT']</td>
        <td>Returns the port being used on the user's machine to communicate with the web server</td>
    </tr>
    <tr>
        <td>$_SERVER['SCRIPT_FILENAME']</td>
        <td>Returns the absolute pathname of the currently executing script</td>
    </tr>
    <tr>
        <td>$_SERVER['SERVER_ADMIN']</td>
        <td>Returns the value given to the SERVER_ADMIN directive in the web server configuration file <br>(if your script runs on a virtual host, it will be the value defined for that virtual host) <br>(such as someone@w3schools.com)</td>
    </tr>
    <tr>
        <td>$_SERVER['SERVER_PORT']</td>
        <td>Returns the port on the server machine being used by the web server for communication (such as 80)</td>
    </tr>
    <tr>
        <td>$_SERVER['SERVER_SIGNATURE']</td>
        <td>Returns the server version and virtual host name which are added to server-generated pages</td>
    </tr>
    <tr>
        <td>$_SERVER['PATH_TRANSLATED']</td>
        <td>Returns the file system based path to the current script</td>
    </tr>
    <tr>
        <td>$_SERVER['SCRIPT_NAME']</td>
        <td>Returns the path of the current script</td>
    </tr>
    <tr>
        <td>$_SERVER['SCRIPT_URI']</td>
        <td>Returns the URI of the current page</td>
    </tr>
</table>

<hr color="tomato">
</pre>    
</body>
</html>
