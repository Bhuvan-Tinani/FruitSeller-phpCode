<?php
error_reporting(0);
?>
<?php
$msg = "";

echo $path = $_SERVER['HTTP_REFERER'];
echo "<p> <font color=blue>$path . path</font> </p></br>";

// If upload button is clicked ...
if (isset($_POST['upload'])) {

	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "Images/" . $filename;
		
// 		$servername = "localhost";
// $username = "id16721629_hrd";
// $password = "Internship@2021";
// $database_name = "id16721629_fruit_seller";
		
	$db = mysqli_connect("localhost", "id16721629_hrd", "Internship@2021", "id16721629_fruit_seller");

// 		// Get all the submitted data from the form
// 		$sql = "INSERT INTO image (filename) VALUES ('$filename')";

// 		// Execute query
// 		mysqli_query($db, $sql);
        echo "<p>$filename</p>";
		echo "<p> <font color=blue>$folder folder name</font> </p></br>";
		// Now let's move the uploaded image into the folder: image
		if (move_uploaded_file($tempname, $folder)) {
		  //  echo $path = $_SERVER[‘DOCUMENT_ROOT’];
		    // Get all the submitted data from the form $filename
		    $url = "https://prolonged-lake.000webhostapp.com/".$folder; 
		    echo "<p><font color=blue>$url</font></p>";
		    $sql = "INSERT INTO image (filename) VALUES ('$url')";

		    // Execute query
	    	mysqli_query($db, $sql);
			echo "Image uploaded successfully";
		}else{
			echo "Failed to upload image";
	}
}
$result = mysqli_query($db, "SELECT * FROM image");
while($data = mysqli_fetch_array($result))
{

	?>
<img src="<?php echo $data['Filename']; ?>">

<?php
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
<link rel="stylesheet" type= "text/css" href ="style.css"/>
<div id="content">

<form method="POST" action="demo.php" enctype="multipart/form-data">
	<input type="file" name="uploadfile" value=""/>
	
	<div>
		<button type="submit" name="upload">UPLOAD</button>
		</div>
</form>
</div>
</body>
</html>
