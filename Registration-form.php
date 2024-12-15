<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
 
<title>Registration</title>

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
<?php include "scripts.php" ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
  <script src="Registration.js" defer></script>
     <style>
         
    .error {
		color: red;
		font-size: 14px;
	}
	  #datepicker{width:180px;}
  
  .custom-icon {
	  width:30px;
	  font-size: 16px;
	  color:#e71602;

  }
   
  .bt2:hover{
	transform: scale(1.1);

  }
.breadcrumb{
    background-color:#1e016e;
    font-size:18px;

 
   }
   .breadcrumb .breadcrumb-item{
    color:white;
 
   }
   .breadcrumb .breadcrumb-item a{
    color:red;
    }
    .reg{
      margin-top:30px;font-family:Arial;color:white;margin-bottom:5px
    }
  
   @media (max-width: 768px) {
	#form1{
		padding-left:20px;
	}
  .reg{
    margin-top:35px; 
  }

   }
  .error-message{
    color:red;
    padding-left:140px;
    

    }
    .breadcrumb-item + .breadcrumb-item::before {
            content: '/';
            color: white; 
            padding: 0 0.3rem;
        }

    </style>
       

</head>
<body>
<div class="container-fluid">
<h3 ><img src="images/Logo-1.png" alt="logo" width="240px" height="50px" style="border-radius:10px;"></h3>

<div class="row d-none d-sm-block" style="background-color:#1e016e">
 <div class="col-sm-4">
 <h1 align="center"class="reg"  >Registration</h1><br/>


 </div>
<div class="col-sm-8">
<nav   style="margin-top:30px;width:280px;margin-left:500px;margin-bottom:5px;" >
<ol class="breadcrumb">
  <li class="breadcrumb-item  "><a href="Home1.php">Home</a></li>
  <li class="breadcrumb-item active" >Login</li>
</ol>
</nav>


</div>

</div>
<div class="row  d-lg-none" style="background-color:#1e016e">
 <div class="col">
<header>

<h4 align="center" class="reg" >Registration</h4><br/>

</header>
</div>
<div class="col">
<nav   style="margin-top:30px;width:280px;margin-bottom:5px" >
<ol class="breadcrumb" style="margin-left:90px">
  <li class="breadcrumb-item  "><a href="Home1.php">Home</a></li>
  <li class="breadcrumb-item active" >Login</li>
</ol>
</nav>
</div>

</div>
  
        <div class="row">
         <div class="col-sm-1"></div> 
        <div class="col-sm-5">
          <img src="images/Register.jpg"   class="img-fluid"  title="register"  > 
        </div>
          <div class="col-sm-4">
         <h1 align="center" style="font-family:Cursive;" >Registration Form</h1><br/>
             <?php  
              if (isset($_SESSION['duplicate_error'])) {
                    echo '<h4 class="error-message">' . $_SESSION['duplicate_error'] . '</h4>';
                    unset($_SESSION['duplicate_error']); // Clear the error message
                } 
            
              
                
                
                ?>
          <form method="post" id="form1" onsubmit="return validateForm()" action="Registration_database.php">
        <div class="form-group">
          <label for="name">Name:</label>
          <div class="input-group ">
            <div class="input-group-prepend">
            <span class="input-group-text " ><img src="images/profile.png"  width="25px;" alt="search"></span>

            <input type="text" class="form-control  " name="name1" id="name" placeholder="Enter your name" >
           </div>
           <div class="error" id="nameError"></div>

      </div>
    </div>

  
 
 

        <div class="form-group">
          <label for="user-email">Email:</label>
            <div class="input-group ">
            <div class="input-group-append">

          <input type="email" class="form-control " name="email" id="user-email" placeholder="Enter your mail" >
          <span class="input-group-text "   ><i class="bi bi-envelope custom-icon"></i></span>
      </div>
      </div>
          <div class="error" id="emailError"></div>

         </div>
         


         <div class="form-group">
          <label for="user-password">Password:</label>
          <div class="input-group ">
       <div class="input-group-append">
        <input type="password" class="form-control" name="password" id="user-password" placeholder="Enter your password" >

      <span class="input-group-text " >
      <i class="far fa-eye custom-icon" id="togglePassword1" style=" cursor: pointer;"></i></span>
   </div>
 
          <div class="error" id="passwordError"></div>
        </div>
        <div class="form-group">
          <label for="Confirmation-password">Confirmation:</label>
          <input type="Confirmation-password" class="form-control" name="Confirmation-password" id="Confirmation-password" placeholder="Enter your password" >
          <div class="error" id="confirmPasswordError"></div>

        </div>

            <div class="form-group" >
                <label>Gender:</label>
                <div class="form-check form-check-inline" >
                    <input type="radio" class="form-check-input" id="male" name="gender" value="male">
                    <label class="form-check-label" for="male">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" id="female" name="gender" value="female">
                    <label class="form-check-label" for="female">Female</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" id="Other" name="gender" value="Other">
                    <label class="form-check-label" for="Other">Other</label>
                </div>

                <div class="error" id="genderError"></div>
            </div>
     
            <div class="form-group">

             <label> Date of Birth: </label>
		        <div id="datepicker" class="input-group date" data-date-format="dd-mm-yyyy" >
            <input type="text" class="form-control  " name="dateofbirth" id="date1" placeholder="Enter your dob" >

 			             <div class="input-group-addon"><i class="bi bi-calendar custom-icon" ></i></div>
		        </div>
            </div>
   


            <div class="form-group">
                <label for="phoneNumber">Phone Number:</label>
                <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" >
                <div class="error" id="phoneError"></div>
            </div>
            <div class="form-group">
            <div class="checkbox ">
              <label><input type="checkbox"  value="Terms" name="check[]"  id="check" checked><a href=" ">I agree with the all Terms and Condtions</a></label>
              </div>
        </div>
        <div class="btn-group">
            <button type="submit" class="btn btn-primary bt2" style="margin-bottom:10px;">Register</button> 
      </div>
        </form>
    </div>
    </div>
    </div>
      </div>
    <script >
     /*For Password Viewer*/
 
  		
		const togglePassword = document.querySelector('#togglePassword1');
  const password = document.querySelector('#user-password');

  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});
 </script>
 </body>
</html>
<?php include "formfotter.php" ?>


 