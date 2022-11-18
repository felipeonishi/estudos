<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>File Upload PHP</title>
</head>
<body>
<h1>PHP File Upload</h1>    
<pre>
<hr>
With PHP, it is easy to upload files to the server.

However, with ease comes danger, so always be careful when allowing file uploads!
<hr>
<h2>Configure The "php.ini" File</h2>
First, ensure that PHP is configured to allow file uploads.

In your "php.ini" file, search for the file_uploads directive, and set it to On:

<main>
<article>
file_uploads = On
</article>
</main>
<hr>
<h2>Create The HTML Form</h2>
Next, create an HTML form that allow users to choose the image file they want to upload:

<main>
<iframe height="210px" src="File_Upload_HTML_Form.txt" frameborder="0"></iframe>
</main>

Some rules to follow for the HTML form above:

Make sure that the form uses method="post"
The form also needs the following attribute: enctype="multipart/form-data". It specifies which 
content-type to use when submitting the form
Without the requirements above, the file upload will not work.

Other things to notice:

The type="file" attribute of the <input> tag shows the input field as a file-select control, with 
a "Browse" button next to the input control

The form above sends data to a file called "upload.php", which we will create next.

<hr>
<h2>Create The Upload File PHP Script</h2>
The "upload.php" file contains the code for uploading a file:

<main>
<iframe height="220px" src="File_Upload_PHP_Script.txt" frameborder="0"></iframe>
</main>

PHP script explained:

 • $target_dir = "uploads/" - specifies the directory where the file is going to be placed
 • $target_file specifies the path of the file to be uploaded
 • $uploadOk=1 is not used yet (will be used later)
 • $imageFileType holds the file extension of the file (in lower case)
 • Next, check if the image file is an actual image or a fake image

<div>
<strong>Note:</strong> You will need to create a new directory called "uploads" in the 
directory where "upload.php" file resides. The uploaded files will be saved there.
</div>

<hr>

<h2>Check if File Already Exists</h2>

Now we can add some restrictions.

First, we will check if the file already exists in the "uploads" folder. If it does, an error message 
is displayed, and $uploadOk is set to 0:

<main>
<article>
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
</article>
</main>

<hr>

<h2>Limit File Size</h2>

The file input field in our HTML form above is named "fileToUpload".

Now, we want to check the size of the file. If the file is larger than 500KB, an error message is 
displayed, and $uploadOk is set to 0:

<main>
<article>
//Check file size
if ($_FILES["fileToUpload"]["size"] > 500000){
    echo ("Sorry, your file is too large.");
    $uploadOk = 0;
}
</article>
</main>

<hr>

<h2>Limit File Type</h2>
The code below only allows users to upload JPG, JPEG, PNG, and GIF files. All other file types gives an 
error message before setting $uploadOk to 0:

<main>
<article>
// Allow certain file formats
if($imageFileType != "jpg" 
    && $imageFileType != "png" 
    && $imageFileType != "jpeg" 
    && $imageFileType != "gif") {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
</article>
</main>

<hr>

<h2>Complete Upload File PHP Script</h2>

The complete "upload.php" file now looks like this:

<main>
<iframe height="850px" src="" frameborder="0"></iframe>
</main>



<hr color="tomato"> 
</pre>
</body>
</html>