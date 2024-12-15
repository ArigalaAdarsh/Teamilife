 <html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>
<body>

<?php
session_start();
try {
    // Your database connection and insertion code here

 
$conn=mysqli_connect("localhost","root ");   # Add Your Details
/*if($conn){
    echo "connected"."<br/>";
}
else
    echo "not connected"."<br/>";*/

$create="create database if not exists WT_Project";
$createdata=mysqli_query($conn,$create);
/*if($createdata)
    echo "created database"."<br/>";
else
    echo "not created database"."<br/>";*/

   
$use="use wt_project ";
$usage=mysqli_query($conn,$use);
/*if($usage)
    echo "Database ready to use"."<br/>";
else
    echo "Database not selected";*/

   

    $table="create table if not exists registration(Name varchar(50) not null,password varchar(255) not null,email varchar(100) primary key,phone_number varchar(30) not null,Gender varchar(20) not null,DoB varchar(20) not null)";
    $tablecreated=mysqli_query($conn,$table);
    /*if($tablecreated)
        echo "table created";
    else
        echo "table not created";*/

        $name=$_POST['name1'];
        $password=$_POST['password'];
        $email=$_POST['email'];
        $gender=$_POST['gender'];
        $phone=$_POST['phoneNumber'];
        $Dob=$_POST['dateofbirth'];

        $password = password_hash($password, PASSWORD_DEFAULT);

        $insert="insert into registration values('$name','$password','$email','$phone','$gender','$Dob')";
        $insert_data=mysqli_query($conn,$insert);
        $insertionSuccess = true;

        if ($insertionSuccess) {
            session_start();

        $_SESSION['Success_error'] = "Successfull Registraion";
        header("Location:login.php");
        exit();
        }

    } catch (mysqli_sql_exception $e) {
        session_start();

            if ($e->getCode() == 1062) {
                $_SESSION['duplicate_error'] = "This entry already exists.";
                header("Location: registration-form.php"); // Redirect back to the registration form
                exit();
 
 
            } 
 
             
        
    }

    ?>
 
</body>
</html>