

<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">

<?php 


require_once "con_DB.php";
$form = true;
	$select = "SELECT * FROM guitar_wars";
	$query = mysqli_query($db, $select);

			while($row=mysqli_fetch_array($query)){
				echo '<input type="checkbox" value="' . $row['id'] . '" name="delete[]"/>';
				echo "Nome: " . $row['nome'] . " " . "Score: " . $row['score'] . "<br><br><br>";

			}

	if(isset($_POST['submit'])){
		foreach ($_POST['delete'] as $delete) {
		$query_delete = "DELETE FROM guitar_wars WHERE id = '$delete'";
		$execution = mysqli_query($db,$query_delete);
		}
		$form = true;
		mysqli_close($db);


	}

if($form){

 ?>
		<input type="submit" id="submit" value="submit" name="submit">
		</form>
<?php } ?>