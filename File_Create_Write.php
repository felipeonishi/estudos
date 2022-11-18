<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>File Create/Write PHP</title>
</head>
<body>
<h1>PHP File Create/Write</h1>
<pre>
<hr>
In this chapter we will teach you how to create and write to a file on the server.
<hr>

<h2>PHP Create File - fopen()</h2>
The fopen() function is also used to create a file. Maybe a little confusing, but in PHP, a file is 
created using the same function used to open files.

If you use fopen() on a file that does not exist, it will create it, given that the file is opened 
for writing (w) or appending (a).

The example below creates a new file called "testfile.txt". The file will be created in the same 
directory where the PHP code resides:

<main>
<article>
$myfile = fopen("testfile.txt", "w")
</article>
</main>

<hr>
If you are having errors when trying to get this code to run, check that you have granted your PHP file 
access to write information to the hard drive.
<hr>

<h2>PHP Write to File - fwrite()</h2>
The <s>fwrite()</s> function is used to write to a file.

The first parameter of <s>fwrite()</s> contains the name of the file to write to and the second parameter 
is the string to be written.

The example below writes a couple of names into a new file called "newfile.txt":

<main>
 Example

<article>
&lt;?php
$myfile = fopen("newfile.txt", "w") or dir("Unable to open file!");
$txt = "Jhon Doe\n";
fwrite($myfile, $txt);
$txt = "Jane Doe\n";
fwrite($myfile, $txt);
fclose($myfile);
?&gt;
</article>
</main>

Notice that we wrote to the file "newfile.txt" twice. Each time we wrote to the file we sent the string $txt 
that first contained "John Doe" and second contained "Jane Doe". After we finished writing, we closed the 
file using the <s>fclose()</s> function.

If we open the "newfile.txt" file it would look like this:

<main>
John Doe

Jane Doe
</main>
<hr>

<h2>PHP Overwriting</h2>

Now that "newfile.txt" contains some data we can show what happens when we open an existing file for writing. 
All the existing data will be ERASED and we start with an empty file.

In the example below we open our existing file "newfile.txt", and write some new data into it:

<main>
 Example
<article>
&lt;?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "Mickey Mouse\n"
fwrite($myfile, $txt);
fclose($myfile);
?&gt;
</article>
</main>
<hr>

PARADA PARA ENTENDIMENTO DOS EXEMPLOS E SUAS APLICAÇÕES

Abertura do arquivo, <s>testfile.txt</s>, para leitura:
<!-- Mostrar o conteudo do arquivo -->
       <ax>
       <?php
        $myfile = fopen("testfile.txt", "r") or die("Unable to open file!");
            while(!feof($myfile)) {
                echo fgetc($myfile);
            }
            fclose($myfile);
        ?>
       </ax>

<!-- Criar  novo arquivo chamado newfile.txt contendo 2 nomes -->
Criar arquivo, newfile.txt, contendo 2 nomes:

<?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "Jhon Doe\n";
fwrite($myfile, $txt);
$txt = "Jane Doe\n";
fwrite($myfile, $txt);
echo "<s>   Transação efetuada com sucesso!</s>";
fclose($myfile)
?>

<!-- Mostrar conteudo do arquivo <s>newfile.txt</>  -->
Mostrar conteudo do arquivo <s>newfile.txt</s>:
<ax>
<?php
$myfile = fopen("newfile.txt", "r") or die("Unable to open file!");
    while(!feof($myfile)) {
        echo fgetc($myfile);
    }
    fclose($myfile);
    ?>
</ax>

<!-- Sobreescrever dados do arquivo no arquivo newfile.txt -->
Sobre-escrever dados do arquivo <s>newfile.txt</s>:

<?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "Mickey Mouse\n";
fwrite($myfile, $txt);
echo "<s>    Transação efetuada com sucesso!</s><br>";
$txt = "Minnie Mouse\n";
fwrite($myfile, $txt);
echo "<s>    Transação efetuada com sucesso!</s>";
fclose($myfile);
?>

<!-- Mostrar arquivo após a ediçao -->
Mostrar arquivo após a ediçao:
<ax>
<?php
$myfile = fopen("newfile.txt", "r") or die("Unable to open file!");
    while(!feof($myfile)) {
        echo fgetc($myfile);
    }
    fclose($myfile);
?>
</ax>

<hr>

<h2>PHP Append Text</h2>

You can append data to a file by using the "a" mode. The "a" mode appends text to the end 
of the file, while the "w" mode overrides (and erases) the old content of the file.

In the example below we open our existing file "newfile.txt", and append some text to it:

<main>
<article>
&lt;?php 
$myfile = fopen("newfile.txt", "a") or die("Unable to open file");
$txt = "Donald Duck\n";
fwrite($myfile, $txt);
$txt = "Goofy Goof\n"
fwrite($myfile, $txt);
fclose($myfile);
?&gt;
</article>
</main>

If we now open the "newfile.txt" file, we will see that Donald Duck and Goofy Goof is appended 
to the end of the file:

<main>
Mickey Mouse
Minnie Mouse
Donald Duck
Goofy Goof
</main>


<hr>

RESULTADO DAS APLICAÇÕES:
<!-- Re-sobre-escrever arquivo newfile.txt -->
 Adicionar mais 2 nomes ao arquivo newfile.txt:
<?php
$myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
$txt = "Donald Duck\n";
fwrite($myfile, $txt);
$txt = "Goofy Goof\n";
fwrite($myfile, $txt);
fclose($myfile);
?>

<!-- Mostrar o arquivo editado -->
Mostrar conteudo do arquivo <s>newfile.txt</s>:

<?php
$myfile = fopen("newfile.txt", "r") or die("Unable to open file!");
    while(!feof($myfile)){
        echo fgetc($myfile);
    }
    fclose($myfile);
?>

<hr>

<h2>Complete PHP Filesystem Reference</h2>
For a complete reference of filesystem functions, go to our complete <a href="https://www.w3schools.com/php/php_ref_filesystem.asp">PHP Filesystem Reference</a>.

<hr color="tomato">
</pre>
</body>
</html>