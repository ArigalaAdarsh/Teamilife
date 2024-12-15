<!DOCTYPE html>
<html>
<head>
  
    <style>
      .chatty{
        width:60px; height:60px;
         position:relative; right:20px;
        margin-left:20px;
        padding-left:10px;
        z-index:300; 
        margin-bottom:80px; 


       }
       .chatty:hover{
        transform: scale(1.1);

       }
       .main1{
        width:50px; height:50px;
        position:fixed;
         right:50px; 
        bottom:10px;
        z-index:300;  

 
        }
       
        @media (max-width: 768px) {
          .chatty{
            margin-bottom:10px;
            right:20px;
            z-index:300;  

 
          }
          .main1{
          right:10px;
          z-index:300;  
        }

        }
       </style>
</head>
<body>
  <div class="d-none d-sm-block" >
  <a data-toggle="collapse" href="#chattycollapse1"  target="_blank" ><img src="images/home/comment.png"  class="main1"  ></a>
  <div class="collapse " id="chattycollapse1"   style="position:fixed; right:-10px; bottom:80px;z-index:250;margin-bottom:-90px;">
 
      <a href=" https://wa.me/916309639490" target="_blank"><img src="images/home/whatsapp.png"  class="chatty" ></a>
  
  
      <a href="tel:+916309639490" target="_blank"><img src="images/home/phone-call.png" class="chatty" ></a>
    </div>
      </div>

      <div class="d-lg-none">
  <a data-toggle="collapse" href="#chattycollapse1"  ><img src="images/home/comment.png"  class="main1"  ></a>
  <div class="collapse " id="chattycollapse1"   style="position:fixed; right:-10px; bottom:60px;z-index:300 ">
  <a href="tel:+916309639490" target="_blank"><img src="images/home/phone-call.png" class="chatty"  ></a>

        <br/>
        <a href=" https://wa.me/916309639490" target="_blank"><img src="images/home/whatsapp.png"  class="chatty"  ></a>

    </div>
      </div>




 
 </body> 
 </html>
