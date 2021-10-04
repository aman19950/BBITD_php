<?php
echo $_FILES;
if(isset($_POST['submit'])){
	$size=$_FILES['file']['size']/1024;
	if($size<200){
		move_uploaded_file($_FILES['file']['tmp_name'],$_FILES['file']['name']);
	}else{
		echo "Only 200KB";
	}
	
}
?>
<form method="post" enctype="multipart/form-data">
<input type="file" name="file"/>
	<input type="submit" name="submit" value="Upload"/>
</form>