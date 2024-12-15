<?php session_start();
		 

if (isset($_POST['submit']) && isset($_FILES['my_image'])) {
	$conn=mysqli_connect("localhost","root"," ","wt_project");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

	echo "<pre>";
	print_r($_FILES['my_image']);
	echo "</pre>";

	$img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];

	if ($error === 0) {
		if ($img_size > 125000) {
			$em = "Sorry, your file is too large.";
			$_SESSION['Large_image']=$em;
		    header("Location: Home1.php");
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = 'uploads/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);
				$mail=$_SESSION['user_email'];
				$query = "SELECT * FROM image WHERE email='$mail'";
				$res1 = mysqli_query($conn,  $query);
				
				// Insert into Database
				if(!(mysqli_num_rows($res1)>0)){
				$sql = "INSERT INTO image VALUES('$mail','$new_img_name')";
				mysqli_query($conn, $sql);
				header("Location: Home1.php");
				}
				else{
					$record=mysqli_fetch_assoc($res1);
					unlink('uploads/'.$record['image_img']);  

					$update="update image set image_img='$new_img_name' where email='$mail'";
 
					mysqli_query($conn, $update);
					header("Location: Home1.php");

				}

			
			}else {
				$em = "You can't upload files of this type";
				$_SESSION['nofile']=$em;

		        header("Location: Home1.php");
			}
		}
	}else {
		$em = "unknown error occurred!";
		header("Location:  Home1.php");
	}

}else {
	header("Location:  Home1.php");
}
?>
  