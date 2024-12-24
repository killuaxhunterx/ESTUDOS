<?php 

if (isset($_POST['Submit'])) {
	if(!empty($_FILES['upload']['name'])){
		$allowed_end = array('png','jpg','gif','php');
		print_r($_FILES);
		$file_name = $_FILES['upload']['name'];
		$file_size = $_FILES['upload']['size'];
		$file_tmp = $_FILES['upload']['tmp_name'];
		$target_dir = "../uploads/${file_name}";

		$file_ext = explode('.',$file_name);
		$file_ext = strtolower(end($file_ext));
		echo $file_ext;

			if(in_array($file_ext, $allowed_end)){
				if($file_size <= 1000000){
					move_uploaded_file($file_tmp, $target_dir);

				}else{
					$message = '<p style="color:green;">The type file is to large </p>';				
				}


			}else{
				$message = '<p style="color:green;">The type file is not allowed </p>';

			}


	}else{
		$message = '<p style="color:green;">Please, choose a file </p>';
	}
}
 ?>

<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" enctype="multipart/form-data">
 	
 	<?php echo $message ?? null;?>
	<label for="upload">Select image for upload</label>
	<br>
	<br>
	<input type="file" name="upload">
	<br>
	<br>
	<input type="submit" name="Submit">

 </form>