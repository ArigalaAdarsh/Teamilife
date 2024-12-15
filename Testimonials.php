 
<html>
  <head>
  
  <style>
  .rating{
    margin-top:0px;
    font-size:18px;
    color:orange;
    margin-right:20px;

  }
 .left{
    margin-top:10px;
    padding-left:10px;
    }
 .icon{
    color: #2f016b;
 
  }
 .profile{
    margin-top: 16px;
    margin-left: 11px;
  }

  .profile-pic{
     width: 58px;
     margin-left:10px;
     border-radius: 30%;
     height:90px;
    }

  .cust-name{
     font-size: 18px;
     margin-left:20px;
 

    }

  .cust-profession{
     font-size: 10px;
     margin-left:20px;

    }
  .right{
    margin-top:-20px;
    
  }
  .group{
  margin-left:150px;
  }
  .card2:hover{
      background-color:yellow;
  }



  .carousel-control-next-icon {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='black' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E");
    width:20px;
    opacity:1px;
    margin-top:15px;
    color:black;

  }

  .carousel-control-prev-icon {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='black' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E");
    color:black;
    width:20px;
    margin-top:15px;
    }

  
  @media (max-width: 768px) {

  .card-text7{
    color:black;
    }
  .cust-name{
    margin-top:-70px;
    font-size: 18px;
     margin-left:100px;

    }
  .cust-profession{
    font-size: 14px;
    margin-left:100px;
    color:black;

  }
 
 
  
}

</style>
      
</head>
<body>
<div class="container d-none d-sm-block">
  <div class="row">
  <div class="card-group group" > 

    <div class="col-sm-3">
      <div class="card card2" style="width: 19rem;">
          <i class="fa fa-quote-left left icon "  ></i> 
          <div class="rating d-flex justify-content-end">
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-half"></i>
          </div>
        <div class="card-body">
            <h5 class="card-title card-text7">Amazing</h5>
            <p class="card-text">"Steeped in tradition, our amazing tea bursts with vibrant flavors, delivering comfort sip by sip."</p>
        </div>
 
        <div class="card-body">
          <hr class="hr">

            <div class="row">
                <div class="col-sm-2">
                        <img class="profile-pic" src="images/hari.jpeg">
                </div>

                <div class="col-sm-10">
                    <div class="profile">
                        <h4 class="cust-name">Harinath</h4>
                        <p class="cust-profession">Member</p>    
                        <i class="fa fa-quote-right right d-flex justify-content-end icon"></i>
                      </div>
                  </div>
              </div>
          </div>
        </div>
    </div>
        
  <div class="col-sm-3">
    <div class="card card2" style="width: 19rem;">
          <i class="fa fa-quote-left left icon"></i> 

         <div class="rating d-flex justify-content-end">
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-half"></i>
          </div>

       <div class="card-body">
          <h5 class="card-title">Absolutely splendid!</h5>
          <p class="card-text card-text7">"Tea Super has exceeded my expectations with its absolutely splendid flavors and quality."</p>
        </div>
        <div class="card-body">
            <hr class="hr">

            <div class="row">
              <div class="col-sm-2">
                <img class="profile-pic" src="images/Adarsh(1).jpeg"  class="">
              </div>

              <div class="col-sm-10">
                <div class="profile">
                  <h4 class="cust-name">Adarsh</h4>
                  <p class="cust-profession">Tea Lover</p>    
                  <i class="fa fa-quote-right right d-flex justify-content-end icon"></i>
                </div>
              </div>
            </div>
        </div>
      </div>
  </div>



  <div class="col-sm-3">
    <div class="card card2" style="width: 19rem;">
          <i class="fa fa-quote-left left icon"></i> 

         <div class="rating d-flex justify-content-end">
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-half"></i>
          </div>

       <div class="card-body">
          <h5 class="card-title ">Outstanding tea</h5>
          <p class="card-text card-text7">"Indulging in Super Tea has added a delightful dimension to my tea-drinking journey."</p>
        </div>

        <div class="card-body">
            <hr class="hr">

            <div class="row">
                <div class="col-sm-2">
                    <img class="profile-pic" src="images/Ashok.jpeg">
                </div>

                 <div class="col-sm-10">
                    <div class="profile">
                      <h4 class="cust-name">Ashok</h4>
                      <p class="cust-profession">Marketing</p>    
                      <i class="fa fa-quote-right right d-flex justify-content-end icon"></i>
                    </div>
                  </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>
</div>



 
<!--Mobile view View Curosul-->
<div class="container d-lg-none">
  <div id="carouselExampleIndicators" class="carousel slide"  data-ride="carousel" data-interval="2000">

  <ol class="carousel-indicators" >
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">1</li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1">1</li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="card card2 d-block w-100 " style="width: 19rem;">
          <i class="fa fa-quote-left left icon"></i> 

         <div class="rating d-flex justify-content-end">
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-half"></i>
          </div>

       <div class="card-body">
          <h5 class="card-title">Amazing</h5>
          <p class="card-text card-text7">"Steeped in tradition, our amazing tea bursts with vibrant flavors, delivering comfort sip by sip."</p>
        </div>
        <div class="card-body">
            <hr class="hr">

            <div class="row">
              <div class="col-sm-2">
                <img class="profile-pic" src="images/hari.jpeg">
              </div>

              <div class="col-sm-10">
                <div class="profile">
                  <h4 class="cust-name">Harinath</h4>
                  <p class="cust-profession">Member</p>    
                  <i class="fa fa-quote-right right d-flex justify-content-end icon"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

     <div class="carousel-item">
        <div class="card card2  d-block w-100 " style="width: 19rem;">
          <i class="fa fa-quote-left left icon"></i> 

          <div class="rating d-flex justify-content-end">
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-half"></i>
          </div>

           <div class="card-body">
              <h5 class="card-title">Absolutely splendid!</h5>
              <p class="card-text card-text7">"Tea Super has exceeded my expectations with its absolutely splendid flavors and quality." </p>
            </div>
            <div class="card-body">
              <hr class="hr">

            <div class="row">
                <div class="col-sm-2">
                  <img class="profile-pic" src="images/Adarsh(1).jpeg">
                </div>

                <div class="col-sm-10">
                    <div class="profile">
                      <h4 class="cust-name">Adarsh</h4>
                      <p class="cust-profession">Tea Lover</p>    
                      <i class="fa fa-quote-right right d-flex justify-content-end icon"></i>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>



     <div class="carousel-item">
      <div class="card card2 d-block w-100 " style="width: 19rem;">
          <i class="fa fa-quote-left left icon"></i> 

         <div class="rating d-flex justify-content-end">
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-half"></i>
          </div>

       <div class="card-body">
          <h5 class="card-title">OutStanding Tea</h5>
          <p class="card-text card-text7">"Indulging in Super Tea has added a delightful dimension to my tea-drinking journey."</p>
        </div>
        <div class="card-body">
            <hr class="hr">

          <div class="row">
            <div class="col-sm-2">
                <img class="profile-pic" src="images/Ashok.jpeg">
            </div>

            <div class="col-sm-10">
              <div class="profile">
                <h4 class="cust-name">Ashok</h4>
                <p class="cust-profession">Marketing</p>    
                <i class="fa fa-quote-right right d-flex justify-content-end icon"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
 
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"  >
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


</div>



  </body>
</html>