<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<?php 
	$data["name"] = "Trần Thị Hiền";
	$data["age"] = 20;
	$data["country"] = "Hà Nội";
	
	print_r($data);
	
	extract($data)
?>

<hr/>
My name is <?=$name; ?>
<br/>
This year, I am  <?=$age; ?> years old.
<br/>
I live in <?=$country; ?>.

</body>
</html>