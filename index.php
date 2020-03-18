 <!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<title>Lan-ding page</title>
</head>
<body>

<h1>Downloadable archives</h1>
<?php

$fileList = glob('archives/*');
foreach($fileList as $filename){
    //Use the is_file function to make sure that it is not a directory.
    if(is_file($filename)){
	$size = round(filesize($filename) / 8000, 2);
	echo "<a href='$filename'><button class='fileXib'><h1 class='title'>$filename</h1><h1 class='size'>$size KB</h1></button></a><br>";
    }
}
?>
<br>
<h1>Important documents</h1>
<?php

$fileList = glob('documents/*');
foreach($fileList as $filename){
    //Use the is_file function to make sure that it is not a directory.
    if(is_file($filename)){
	$size = round(filesize($filename) / 8000, 2);
	echo "<a href='$filename'><button class='fileXib'><h1 class='title'>$filename</h1><h1 class='size'>$size KB</h1></button></a><br>";
    }
}
?>


</body>
</html>
