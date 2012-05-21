<html>
<head>
	<title>Uploding picture</title>
</head>
 <body>
	
	<form action="image.php" method="POST" enctype="multipart/form-data">
		File:
		<input type="file" name="image"> <input type="submit" value="Upload">
	</form>
	
<?php
//connect to database 
mysql_connect("localhost","root","") or die ("Query Error ".mysql_error());
mysql_select_db("project") or die ("Query Error ".mysql_error());

//file properties 
$file = $_FILES['image']['tmp_name'];

	if (!isset($file)){
		echo "Please select an image.";
	}
	else
	{

		$image = addslashes (file_get_contents($_FILES['image']['tmp_name']));
		$image_name = addslashes ($_FILES['image']['name']);
		$image_size = getimagesize($_FILES['image']['tmp_name']);
		
		if ($image_size==FALSE)
			echo "That's not an image";
		else
		{
		if	(!$isset = mysql_query("INSERT INTO store VALUES ('','$image_name','$image')"))
			echo "Problem uploading image.";
			{
				$lastid = mysql_insert_id();
				echo "Image uploded.<p />Your image:<p /><img src=get.php?id=$lastid>";
			}
		}
	}
	

?>	
		
	</body>
</html>