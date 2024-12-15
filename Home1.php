<?php include "Profileview.php" ?>
<?php include "confetti.php" ?>

<?php   include "Nav bar.php" ?>
<?php include "Chatty.php" ?>


<html>
 <head>
     <title>Home</title>
     <!-- Add this in the head section of your HTML -->
      <link href="home.css" rel="stylesheet"> 
 
 </head>
 <body>

 <div class="card cader  border-0 " >
  <img src="images/home.jpg"  class="card-img card_image" alt="Healthy" height="700px">

     <div class="card-img-overlay " align="center">
         <div class="row">
           <div class="col-sm-1"></div>
           <div class="col-sm-5">
             <h2 class="card-title " style="color:  orangered;font-weight:bold;">Come Together-Grow Together</h2>
 
             <p class="card-text c1"> Tea-Milife is the Best Franchise in India</p>
             <p class="quote">~Happiness Starts with a Cup of Chai</p>
           </div>
           <div class="col-sm-5" style="z-index:900">
             <a role="button" class="btn btn-lg rounded-pill  btn-success "   href="https://drive.google.com/file/d/1CDBQJtNoie9s2keBtOV5v_nV1fgS7f4T/view?usp=drive_link" target="_blank">View More</a>
 
           </div>
           <div class="col-sm-1"></div>
         </div>
       </div>
 </div>
 
 <div class="card" style="z-index:400;">

 <div class="container  border-0"  >
     <div class="row"  >
       <div class="col-sm-6" style="z-index:400px;"  >
         <div class="card card-body border-0" >
           <div class="card-title"> 
             <h3 class="content  ">What we Offers ?</h3>
           </div>
           <p class="matter card-text" >
           We offers Tasty Chai.We believes Quality with Quantity required to satisfy users.<br>
           We provides best quality to the Users.We measures the Health Conditions,serves <br>healthy food the audience.Early morning with a cup of Tea-Milife chai will gives <br>refresh minds of people.
           </p>
         </div>
       </div>
       <div class="col-sm-6" style="z-index:400px;">
         <div class="image" align="center" >
           <img src="images/About Us.png" alt="logo" width="280px" height="280px"   > 
           
          </div>

       </div>
     </div>
</div>
 
     <ul class="nav tabs" id="myTab1" role="tablist" style="margin-bottom:-30px">
       <li class="nav-item" role="presentation">
       <button class="nav-link active " id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab"  >Tea</button>
       </li>
       <li class="nav-item" role="presentation">
       <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab">Raw Juices</button>
       </li>
       <li class="nav-item" role="presentation">
       <button class="nav-link position-relative" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab"  >Lassies<span class="position-absolute top-2 start-100 translate-middle rounded-circle badge  bg-info" >
       12+</span></button>
       </li>
     </ul>
      <hr class="hrule" /> 
   <div class="tab-content " id="myTabContent">
       <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">  <?php include "Tea.php" ?></div>
       <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"><?php include "Raw Juices.php" ?></div>
       <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab"><?php include "Lassi.php" ?></div>
 </div>
 </div>
   <div class="row">
     <div class="col-sm-2"></div>
     <div class="col-sm-8">
       <div class="card-group" >
         <div class="card border-0 cards">
     
           <img src="images/home/crowd-of-users.png"  class="card-img1"   alt="People">
           <div class="card-body">
             <h3 class="caption" style="">500+ Customer</h3>
           </div>
         </div>
         <div class="card border-0 cards" style="padding-left:100px;">
           <img src="images/home/eco-home.png"  class="card-img1"   alt="Eco-Friendly">
           <div class="card-body ">
               <h3 class="caption" >Eco Friendly</h3>
 
           </div>
         </div>
           <div class="card border-0 cards" style="padding-left:100px;">
  
             <img src="images/home/handshake.png"  class="card-img1"   alt="Healthy">
             <div class="card-body">
                 <h3 class="caption">Healthy</h3>
 
             </div>
           </div>
         </div>
  
  
       </div>
       <div class="col-sm-2"></div>
 
     </div>
   </div>
 </div>
   <!--Testimonials-->
   <div class="container">
 <h3   style="color:#32046e" align="center">Testimonials</h3>
 <?php include "Testimonials.php" ?>
    
 </div>
 <div class="container">
  
   <div class="Accordian" align="center" style="z-index:900">
       <h3 class="h3 " style="font-family:Arial ;color:#460d35;margin-top:50px;margin-bottom:10px;">Frequently Asking Questions</h3>
 
     <div class="accordion" id="accordionExample1" >
       <div class="accordion-item">
         <h2 class="accordion-header" id="headingOne">
         <button class="accordion-button accordion-button2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
           What is Tea-Milife ?
           </button>
         </h2>
        <div id="collapseOne" class="accordion-content collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
           <div class="accordion-body">
             <strong>Tea Mi-Life is a Chai StartUp.</strong> </div>
         </div>
       </div>
       <div class="accordion-item">
         <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button accordion-button2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          How to Change my Password easily?
         </button>
          </h2>
       <div id="collapseTwo" class="accordion-content collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>Visit Teamilife Change your paasword</strong>
       </div>
     </div>
   <div class="accordion-item">
       <h2 class="accordion-header" id="headingThree">
       <button class="accordion-button  accordion-button2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
         Is it Tea-Milife Franchise is good?   </button>
        </h2>
     <div id="collapseThree" class="accordion-content collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
         <div class="accordion-body">
         <strong>This is a Good Franchise for all Customers</strong>  
         </div>
     </div>
   </div>
   <div class="accordion-item">
     <h2 class="accordion-header" id="headingFour">
       <button class="accordion-button  accordion-button2   collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
       Where is Tea-Milife located ?</button>
     </h2>
     <div id="collapseFour" class="accordion-content collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
       <div class="accordion-body">
         <strong>Tea MiLife is a Banglore based Comapany.</strong>         </div>
     </div>
   </div>
 </div>
 </div>
</div>
 </div>



 <div class="container">
 <a role="button" class="btn btn-light btn-outline-info d-none d-sm-block w-50" style="margin-left:350px;margin-bottom:20px;margin-top:20px;"  href="Freqeuntly Asking Q&A.php"  >View More Questions</a>
 <a role="button" class="btn btn-light btn-outline-info d-lg-none w-50"style="margin-bottom:20px;margin-top:20px;margin-left:90px" href="Freqeuntly Asking Q&A.php"  >View More Questions</a>

  <br/>
</div>

 <!-- Repeat for other items -->
 
 
 <script src="home.js">
 
   </script>
 
 </body>
 
 </html>
 <?php include "Fotter.php" ?>
 