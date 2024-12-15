<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  
	 
<title>login</title>
 
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <script src="Login.js" defer></script>

 
 
  
<style>
	.error {
		color: red;
		font-size: 14px;
	}
   
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
    .log{
    margin-top:30px;font-family:Arial;color:white;margin-bottom:5px;margin-left:10px;font-size:22px;
  }
  .breadcrumb-item + .breadcrumb-item::before {
            content: '/';
            color: white; 
            padding: 0 0.3rem;
        }

  .error-message{
    color:red;
    padding-left:140px;
    

    }
   @media (max-width: 768px) {
	    #form{
		    padding-left:20px;
	      }
      .log{
        margin-top:35px; 
      }
   }
   .success-message{
      color:green;
    padding-left:140px;
    }
  
  
   </style>
</head>
 <body>
<div class="container-fluid">
<h3 ><img src="images/Logo-1.png" alt="logo" width="240px" height="80px" style="border-radius:10px;"></h3>

  <div class="row d-none d-sm-block" style="background-color:#1e016e">
   <div class="col-sm-4">
   <h1 align="center"  class="log" >Login</h1><br/>


   </div>
  <div class="col-sm-8">
  <nav   style="margin-top:30px;width:280px;margin-left:500px;margin-bottom:5px" >
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

  <h1 align="center" class="log" >Login</h1><br/>

  </header>
  </div>
  <div class="col">
  <nav   style="margin-top:30px;width:280px;;margin-bottom:5px" >
  <ol class="breadcrumb" style="margin-left:90px">
    <li class="breadcrumb-item  "><a href="Home1.php">Home</a></li>
    <li class="breadcrumb-item active" >Login</li>
  </ol>
</nav>
  </div>

  </div>
  
        <div class="row ">
         <div class="col-sm-1">
        
         </div> 
        <div class="col-sm-5 ">
          <img src="images/Login.png"   class="img-fluid"  title="register" width="600px" height="800px"  > 
        </div>
          <div class="col-sm-4"  >
          <?php if(isset($_SESSION['Success_error'])) {
                    echo '<h4 class="success-message">' . $_SESSION['Success_error'] . '</h4>';
                    unset($_SESSION['Success_error']); 
            } 
            else if(isset($_SESSION['user_error'])) {
              echo '<h4 class="error-message">' . $_SESSION['user_error'] . '</h4>';
              unset($_SESSION['user_error']); 
      }
            
            
            
            
            ?>
         <form  method="post" id="form" onsubmit="return validateForm1()" style="margin-top:40px" action="login_database.php">
             
        <div class="form-group">
          <label for="name1">Name:</label>
          <div class="input-group ">
            <div class="input-group-prepend">
            <span class="input-group-text " ><img src="images/profile.png"  width="25px;" alt="search"></span>
            <input type="text" class="form-control  " name="username" id="name1" placeholder="Enter your name" >
             </div>
          <div class="error" id="nameError1"></div>

    </div>
    

         
        <div class="form-group">
          <label for="user-email1">Email:</label>
          <div class="input-group ">
            <div class="input-group-append">
          <input type="email" class="form-control " name="useremail" id="user-email1" placeholder="Enter your mail" autocomplete="off">
          <span class="input-group-text "   ><i class="bi bi-envelope custom-icon"></i></span>

                </div>
          <div class="error" id="emailError1"></div>

         </div>				
         <div class="form-group">
        
          <label for="user-password1">Password:</label>
          <div class="input-group ">
 				<div class="input-group-append">
					<input type="password" class="form-control" name="userpassword" id="user-password1" placeholder="Enter your password" autocomplete="off">

				<span class="input-group-text " >
				<i class="far fa-eye custom-icon" id="togglePassword" style=" cursor: pointer;"></i></span>
			</div>

				</div>

				</div>
          <div class="error" id="passwordError1"></div>
        </div>


            <div class="form-group">
                <label for="phoneNumber1">Phone Number:</label>
                <input type="tel" class="form-control" id="phoneNumber1" name="userphoneNumber" autocomplete="off">
                <div class="error" id="phoneError1"></div>
            </div>
            <div class="form-group">
            <div class="checkbox ">
              <label><input type="checkbox"  value="Terms" name="check[]"  id="check1" checked><a href=" ">I agree with the all Terms and Condtions</a></label>
              </div>
            </div>
            <div class="button-group " >
            <button type="submit" class="btn btn-success bt2 "  style="width:150px;font-size:18px;">login</button> &nbsp;
            <a href="Registration-form.php"> <button type="button" class="btn btn-primary bt2" style="width:150px;font-size:18px;">Register</button></a>
    </div>
        </form>
    </div>
    </div>
    </div>
  <div class="row">
    </div>
</div>
		
	<script>

        /*For Password Viewer*/
 		
		const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#user-password1');

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
