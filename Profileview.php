
     <?php  
 ini_set('session.gc_maxlifetime',1800); // 30 minutes in seconds
 ini_set('session.cookie_lifetime', 0); 
 session_start();
// If the user is not logged in redirect to the login page...
 
if (!isset($_SESSION['loggedin'])) {
	header('Location:login.php');
	exit;
}
$conn=mysqli_connect("localhost","root"," ","wt_project");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 

$stmt = $conn->prepare('SELECT Name, password, Gender, DoB,phone_number,email FROM registration WHERE email = ?');
// In this case we can use the account ID to get the account info.
$stmt->bind_param('s', $_SESSION['user_email']);
$stmt->execute();
$stmt->bind_result($Name,$password,$Gender,$DoB,$phone_number,$email );
$stmt->fetch();
$stmt->close();

      
?>
<html>

<head>
<style>
    .container {
  position: relative;
 }
 .cart-icon {
  cursor: pointer;
  font-size: 24px;
  z-index:2000;

  
}


.sidenav {
  width: 0;
  position: fixed;
  top: 0;
  right: 0;
  height: 100%;
  background-color: #f1f1f1;
  overflow-x: hidden;
  padding-top: 60px;
  z-index:1000;

}

.error-message{
		color: red;
		font-size: 14px;
	}

 

.closebtn {
  position: absolute;
  top: 10px;
  right: 15px;
  font-size: 36px;
  color:red;
}
.profilepic{
  border-radius:10px 10px 10px 10px;
  width:100px;
  position:relative;
  z-index:1000;
  margin-left:1290px;
  top:10px;

  margin-bottom:-100px;
 }
 .profileimage{
        width:100px;
        border-radius: 50%;
        border:1px solid;
    }


@media (max-width: 768px) {
  .profilepic{
    margin-bottom:-110px;
    margin-left:-30px;
    top:0px;


  }
 
}

    </style>
</head>
<body>

<div class="container">
  <div class="cart-icon cart-icon1 "  onclick="toggleNav()" >

  &nbsp;

  <div class="profilepic" >
  <div align="center">
   <?php 
$query = "SELECT * FROM image WHERE email='$email'";
$res = mysqli_query($conn, $query);
?>

<!-- Opening the loop structure -->
<div>
    <?php
    if (mysqli_num_rows($res) > 0) {
        while ($data = mysqli_fetch_assoc($res)) {

    ?>

                 <label for="editimage1">
                    <img src="uploads/<?=$data['image_img']?>" class="profileimage" alt="upload.img"  style="width:60px;">
                </label>
            
    <?php
        }
    } else {
    ?>
                 <label for="editimage1">
                    <img src="uploads/profile.png" class="profileimage" alt="default" style="width:60px;">
                </label>
            
    <?php
    }
    ?>
     </div>
</div>
  </div>
</div>
  <div id="mySidenav" class="sidenav">
    <!-- Your navigation content goes here -->
     <a href="javascript:void(0)" class="closebtn" ><i class="bi bi-x" onclick="closeNav()"></i></a>
    <div style="margin-left:20px;font-family:cursive">
    <h2 align="center" style="font-family:arial">Profile </h2>

        
 				<h6>Your account details are below:</h6>
				<table>
        <?php if(isset($_SESSION['nofile'])) {
                    echo '<h4 class="error-message">' . $_SESSION['nofile'] . '</h4>';
                    unset($_SESSION['nofile']); 
            } 
            else if(isset($_SESSION['Large_image'])) {
              echo '<h4 class="error-message">' . $_SESSION['Large_image'] . '</h4>';
              unset($_SESSION['Large_image']); 
        } ?>
            

        <tr>
              <td colspan="2" align="center">
 
<?php 
$query = "SELECT * FROM image WHERE email='$email'";
$res = mysqli_query($conn, $query);
?>

<!-- Opening the loop structure -->
<div>
    <?php
    if (mysqli_num_rows($res) > 0) {
        while ($data = mysqli_fetch_assoc($res)) {

    ?>

            <a href="#images1">
                <label for="editimage">
                    <img src="uploads/<?=$data['image_img']?>" class="profileimage" alt="upload.img">
                </label>
            </a>
    <?php
        }
    } else {
    ?>
            <a href="#images1">
                <label for="editimage">
                    <img src="uploads/profile.png" class="profileimage" alt="default">
                </label>
            </a>
    <?php
    }
    ?>

    <form action="uploadimage.php" method="post" enctype="multipart/form-data" id="images1">
        <div class="form-group">
            <input type="file" name="my_image" class="form-control form-control-sm" id="editimage" >
            <input type="submit" name="submit" value="Upload" class="btn btn-primary">
        </div>
    </form>
</div>
 
            </td>

                    </tr>
					<tr>
						<td>Username:</td>
						<td><?=$Name?></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><?=$Gender?></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><?=$email?></td>
					</tr>
                    <tr>
						<td>Date of Birth:</td>
						<td><?=$DoB?></td>
					</tr>
                    <tr>
						<td>Phone Number:</td>
						<td><?=$phone_number?></td>
					</tr>
          <tr>
          <td colspan="2"><a role="button" class="btn btn-primary" href="logout.php">Logout</a></td>
          <tr>
				</table>
</div>
  </div>
</div>

<script>
function toggleNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
// timeout.js

const inactivityTimeout = 180000; // 1 minutes in milliseconds
let lastActivityTimestamp = Date.now();

function checkInactivity() {
    const currentTime = Date.now();
    if (currentTime - lastActivityTimestamp > inactivityTimeout) {
        // Perform actions for inactivity, such as sign out or showing a message
        alert("Your session has expired due to inactivity.");
        window.location.href = "./login.php"; // Redirect to logout page
    } else {
        // Update the last activity timestamp
        lastActivityTimestamp = currentTime;
    }
}

// Attach event listeners for user activity (e.g., mousemove, keydown)
document.addEventListener("mousemove", checkInactivity);
document.addEventListener("keydown", checkInactivity);

    </script>
</body>
</html>