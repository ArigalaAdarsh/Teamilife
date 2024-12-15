<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username= $_POST["useremail"];
    $password = $_POST["userpassword"];

    // Create a MySQL connection
     $conn=mysqli_connect("localhost","root"," ","wt_project");  # Add your Details

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Query database for user
    $query = "SELECT * FROM registration WHERE email = '$username'";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user["password"])) {
            // Passwords match, create session and redirect to home page
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION["user_name"] = $user["name"];
            $_SESSION["user_email"] = $user["email"];
  


            header("Location:Home1.php");
        } else {
            // Passwords don't match
            session_start();

            $_SESSION['user_error'] = "User Name /Password Invalid";
            header("Location:login.php");
            exit();
            }
         
    } else {
        // No user found
        session_start();

        $_SESSION['user_error'] = "User Name /Password Invalid";
        header("Location:login.php");
        exit();
        }
    $conn->close();
}
?>
