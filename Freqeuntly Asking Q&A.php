<?php   include "Profileview.php" ?>

<html>
    <head>
    <?php include "scripts.php" ?>
    <link href="Nav.css" rel="stylesheet"> 

<style>
 footer{
  background-color: green;
  color:white;
}
.white-color{
  color:white;
}
.accordion-button1{
   color:#190c52;
   font-weight:800px;
   font-family: Cursive;
   border:1px solid;
   }

 #accordionExample1{
    width:50%;
 }
 
  .acordian-headering {
   font-family:Arial ;
   color:#460d35;
   margin-top:50px;
   margin-bottom:10px;
 }
 @media (max-width: 768px) {
    #accordionExample1{
    width:100%;
 }
  .accordion-body p{
    color:black;
 }
 }
    </style>
</head>
<body>
<div class="gradient-divider"></div>
 <nav class="navbar navbar-expand-lg ">
 <div class="container">
 <h3 class="navbar-brand"><img src="images/Log.png" alt="logo" width="240px" height="80px"></h3>
 
 
<button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#mynav">
<span class="navbar-toggler-icon"></span>
</button>
<div class="navbar-collapse collapse" id="mynav" >
<ul class="navbar-nav">
<li class="nav-item">
<a href="Home1.php" class="nav-link">Home</a>
</li>
 
 <li class="nav-item">

<a href="About Us.php" class="nav-link">About Us</a>
</li>
<li>
   <div class="dropdown d-none d-sm-block">
    <a role="button" class="dropdown-toggle nav-link " data-bs-toggle="dropdown" >
      Menu</a>
    <ul class="dropdown-menu"> 
      <li><a class="dropdown-item" href="Tea-matter.php">Tea</a></li>
      <li><a class="dropdown-item" href="Raw_juice-Matter.php">Raw Juices</a></li>
      <li><a class="dropdown-item" href="Lassi-Matter.php">Lassies</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="#">Benchmates Biryani Bowl</a></li>
    </ul>
</div>  
<div class="dropstart d-lg-none">
    <a role="button" class="dropdown-toggle nav-link " data-bs-toggle="dropdown" >
      Menu</a>
    <ul class="dropdown-menu"> 
      <li><a class="dropdown-item" href="Tea-matter.php">Tea</a></li>
      <li><a class="dropdown-item" href="Raw_juice-Matter.php">Raw Juices</a></li>
      <li><a class="dropdown-item" href="Lassi-Matter.php">Lassies</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="#">Benchmates <br>Biryani Bowl</a></li>
    </ul>
</div>  
 </li>
 <li class="nav-item">

<a href="" class="nav-link">Franchise</a>
</li>
<li class="nav-item">

<a href="" class="nav-link">Contact Us</a>
</li>
<a role="button" class="btn  btn-light rounded-pill  btn-outline-primary "   href="" class="nav-link">Login/SignUp</a>


</ul> 
 </div>
</div>
</nav>


  
 
  
</nav>


      <div class="container " align="center">

      
          <h3 class="acordian-headering">Frequently Asking Questions</h3>
          <div class="col-lg-6">
          <div class="input-group mb-3">
              <div class="input-group-prepend">
                    <span class="input-group-text"><label for="search-input"><img src="images/search.png"  width="25px;" alt="search"></label>
                        </span>
              </div>
              <input type="text" class="form-control form-control-lg " id="search-input" >
          <div class="input-group-append">
               <span class="input-group-text"><a id="clear-button" > <i class="bi bi-backspace-fill" style="color:red"></i></span>
            </div>
        </div>
        </div>
        
          <ul class="list-group autocomplete-list" id="autocomplete-list"></ul>
</div>
</div>

     

 
 <!--Accordian for Q&A-->
  <div class="Accordian" align="center">
      
<div class="accordion" id="accordionExample1" >
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button accordion-button1" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
      What is Tea-Milife?
    </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <strong>Tea Mi-Life is a Chai StartUp.</strong> </div>

    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button accordion-button1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
      How to Change my Password easily?
    </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <strong>Open in Mobile view click Profile icon in home page you can change your details.</strong>  </div>

    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button accordion-button1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
  Is it Tea-Milife Franchise is good?   </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <strong>This is a Good Franchise for all Customers</strong>  

    </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFour">
      <button class="accordion-button  accordion-button1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
      What are the health benefits of drinking tea?
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <p>
Antioxidants combat cell damage.
Green tea supports heart health.
Moderate caffeine boosts alertness.
Herbal teas aid relaxation and sleep.
</p>
      </div>
    </div>
  </div>

<div class="accordion-item">
    <h2 class="accordion-header" id="headingFive">
      <button class="accordion-button  accordion-button1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapsefive">
      Does tea contain caffeine? How much?
      </button>
    </h2>
    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>
        Yes, tea contains caffeine.
Amount varies:
Black tea: 40-70 mg per 8 oz cup.
Green tea: 20-45 mg per 8 oz cup.
Herbal teas: Generally caffeine-free.
White tea: Lower caffeine than black or green.
Moderation helps manage caffeine intake.
        </p>
      </div>
    </div>
  </div>

<div class="accordion-item">
    <h2 class="accordion-header" id="headingsix">
      <button class="accordion-button  accordion-button1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
      What's the difference between loose-leaf tea and tea bags? </button>
    </h2>
    <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="headingsix" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p> Loose-leaf tea: Whole, large leaves for richer flavor and aroma. Requires infuser or filter.
Tea bags: Pre-packaged, smaller leaves for convenience. May have milder taste.
Loose-leaf offers customization, better quality. Tea bags are quick, portable options.</p>
      </div>
    </div>
  </div>

<div class="accordion-item">
    <h2 class="accordion-header" id="headingseven">
      <button class="accordion-button  accordion-button1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseseven" aria-expanded="false" aria-controls="collapseSeven">
      Are there any herbal teas that don't contain tea leaves? </button>
    </h2>
    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingseven" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Yes, herbal teas without tea leaves include chamomile, peppermint, hibiscus, and rooibos. 
These are made from various plant parts like flowers, leaves, and roots, offering diverse flavors and potential health benefits. 
They are caffeine-free and suitable for those seeking alternatives to traditional tea.
</p>
      </div>
    </div>
  </div>
 <div class="accordion-item">
    <h2 class="accordion-header" id="headingEight">
      <button class="accordion-button  accordion-button1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
      What's the history and cultural significance of tea?</button>
    </h2>
    <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Tea's history dates back to ancient China, with legends of Emperor Shen Nong discovering it around 2737 BC. 
It later became a vital part of Chinese culture, trade, and social gatherings. 
The Silk Road spread tea to neighboring regions and, eventually, the world. 
Today, tea holds cultural importance globally, from Japanese tea ceremonies to British afternoon tea, symbolizing hospitality, tradition, and connection.</p>
      </div>
    </div>
  </div>


 
<div class="accordion-item">
    <h2 class="accordion-header" id="headingNine">
      <button class="accordion-button  accordion-button1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
      Are there any special tea ceremonies or rituals?</button>
    </h2>
    <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Yes, various cultures have distinct tea ceremonies. 
The Japanese "chanoyu" involves precise preparation and presentation of matcha tea, emphasizing harmony and respect.
China's Gongfu Cha highlights skillful brewing and multiple infusions. Moroccan mint tea signifies hospitality, served sweet and poured from a height.
Each ceremony embodies cultural values and connections. </p>
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTen">
      <button class="accordion-button  accordion-button1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
      Can I reuse tea leaves for multiple infusions?</button>
    </h2>
    <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Yes, many tea leaves can be reused for multiple infusions.
This is particularly common with high-quality loose-leaf teas, like oolong and pu-erh.
However, the number of infusions and resulting flavor can vary based on the type of tea and personal preference.
Experiment to find the balance between flavor and reusability that suits you best.
</p>
      </div>
    </div>
  </div>


  <div class="accordion-item">
    <h2 class="accordion-header" id="headingEleven">
      <button class="accordion-button  accordion-button1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
      What are the best storage methods for preserving tea freshness?</button>
    </h2>
    <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Store in airtight containers to prevent air exposure.
Keep away from light, moisture, and strong odors.
Use opaque or dark containers to shield from light.
Consider using separate containers for different tea types to prevent flavor mixing.
By following these steps, you can extend the shelf life and maintain the flavor of your tea.</p>
      </div>
    </div>
  </div>


  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwelve">
      <button class="accordion-button  accordion-button1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
      Are there any potential side effects of excessive tea consumption?</button>
    </h2>
    <div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="headingTwelve" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Caffeine-related issues: Insomnia, restlessness, increased heart rate.
Digestive problems: Upset stomach, acid reflux due to tannins.
Iron absorption: Tea's tannins might hinder iron absorption.
Fluoride intake: Excessive tea can contribute to high fluoride levels.
Moderation is key to enjoying tea's benefits without adverse effects.
</p>
      </div>
    </div>
  </div>


  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThirteen">
      <button class="accordion-button  accordion-button1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
      Are there any teas specifically designed to aid in relaxation or sleep?</button>
    </h2>
    <div id="collapseThirteen" class="accordion-collapse collapse" aria-labelledby="headingThirteen" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Yes,
Chamomile: Known for its calming properties and promoting sleep.
Valerian Root: Often used as a natural sleep aid.
Lavender: Its aroma and compounds can help induce relaxation.
Lemon Balm: Known for soothing nerves and promoting tranquility.
These herbal teas can be beneficial in creating a peaceful bedtime routine.
</p>
      </div>
    </div>
  </div>


  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFourteen">
      <button class="accordion-button  accordion-button1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
      What are tisanes, and how do they differ from traditional tea?</button>
    </h2>
    <div id="collapseFourteen" class="accordion-collapse collapse" aria-labelledby="headingFourteen" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Tisanes are herbal infusions made from various plant parts like flowers, leaves, roots, and fruits, excluding traditional tea leaves (Camellia sinensis).
They differ from traditional tea in their source and lack of tea plant leaves.
Tisanes offer a wide range of flavors, aromas, and potential health benefits, and they're often caffeine-free.
Examples include chamomile, mint, and hibiscus infusions.</p>
      </div>
    </div>
  </div>




  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFifteen">
      <button class="accordion-button  accordion-button1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen">
      How does the flavor of tea vary based on the region it's grown in?</button>
    </h2>
    <div id="collapseFifteen" class="accordion-collapse collapse" aria-labelledby="headingFifteen" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Climate: Hotter regions yield bolder, brisker teas; cooler climates offer milder flavors.
Altitude: Higher altitudes often produce more delicate, nuanced teas.
Soil: Soil minerals influence tea taste and aroma, creating unique profiles.
Processing: Different regions employ various processing methods, affecting flavor.
For instance, Darjeeling tea from India is known for its muscatel notes, while Chinese teas can range from floral to smoky based on their origin.</p>
      </div>
    </div>
  </div>


  <div class="accordion-item">
    <h2 class="accordion-header" id="headingSixteen">
      <button class="accordion-button  accordion-button1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSixteen" aria-expanded="false" aria-controls="collapseSixteen">
      What's the connection between tea and meditation or mindfulness?</button>
    </h2>
    <div id="collapseSixteen" class="accordion-collapse collapse" aria-labelledby="headingSixteen" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Ritual: Preparing and savoring tea can be a meditative ritual.
Present Moment: Tea encourages focusing on each step of brewing and sipping.
Sensory Experience: Engaging senses in tea appreciation promotes mindfulness.
Calmness: Tea's warmth and aroma help create a peaceful atmosphere.
Tea ceremonies and mindful tea drinking can enhance self-awareness and presence, making tea a conduit to a meditative state.
</p>
      </div>
    </div>
  </div>


  <div class="accordion-item">
    <h2 class="accordion-header" id="headingSeventeen">
      <button class="accordion-button  accordion-button1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeventeen" aria-expanded="false" aria-controls="collapseSeventeen">
      Can children and pregnant women drink tea safely?</button>
    </h2>
    <div id="collapseSeventeen" class="accordion-collapse collapse" aria-labelledby="headingSeventeen" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Children: Limit caffeine intake; opt for herbal, caffeine-free blends.
Pregnant Women: Avoid high caffeine content; opt for caffeine-free herbal teas.
Certain herbs and caffeine levels might affect developing systems, so moderation and consultation with a healthcare professional are advised for both groups.</p>
      </div>
    </div>
  </div>


  <div class="accordion-item">
    <h2 class="accordion-header" id="headingEighteen">
      <button class="accordion-button  accordion-button1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEighteen" aria-expanded="false" aria-controls="collapseEighteen">
      How does the flavor of tea vary based on the region it's grown in?</button>
    </h2>
    <div id="collapseEighteen" class="accordion-collapse collapse" aria-labelledby="headingEighteen" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Climate: Hotter regions yield bolder, brisker teas; cooler climates offer milder flavors.
Altitude: Higher altitudes often produce more delicate, nuanced teas.
Soil: Soil minerals influence tea taste and aroma, creating unique profiles.
Processing: Different regions employ various processing methods, affecting flavor.
For instance, Darjeeling tea from India is known for its muscatel notes, while Chinese teas can range from floral to smoky based on their origin.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingNineteen">
      <button class="accordion-button  accordion-button1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNineteen" aria-expanded="false" aria-controls="collapseNineteen">
      How does the flavor of tea vary based on the region it's grown in?</button>
    </h2>
    <div id="collapseNineteen" class="accordion-collapse collapse" aria-labelledby="headingNineteen" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Climate: Hotter regions yield bolder, brisker teas; cooler climates offer milder flavors.
Altitude: Higher altitudes often produce more delicate, nuanced teas.
Soil: Soil minerals influence tea taste and aroma, creating unique profiles.
Processing: Different regions employ various processing methods, affecting flavor.
For instance, Darjeeling tea from India is known for its muscatel notes, while Chinese teas can range from floral to smoky based on their origin.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwenty">
      <button class="accordion-button  accordion-button1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwenty" aria-expanded="false" aria-controls="collapseTwenty">
      How do I brew the perfect cup of tea?</button>
    </h2>
    <div id="collapseTwenty" class="accordion-collapse collapse" aria-labelledby="headingTwenty" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>
Boil fresh water and let it cool slightly.
Pour water over tea leaves (1 teaspoon per cup) in a teapot or cup.
Steep as per type: black (3-5 min), green (1-3 min), herbal (5-7 min).
Strain and savor; adjust time for desired strength.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwentyOne">
      <button class="accordion-button  accordion-button1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwentyOne" aria-expanded="false" aria-controls="collapseTwentyOne">
      What's the proper water temperature for different types of tea?</button>
    </h2>
    <div id="collapseTwentyOne" class="accordion-collapse collapse" aria-labelledby="headingTwentyOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>
Black Tea: Use boiling water (212°F or 100°C) for 3-5 minutes.
Green Tea: Use water around 160-175°F (70-80°C) for 1-3 minutes.
White Tea: Use water around 175-185°F (80-85°C) for 2-4 minutes.
Oolong Tea: Use water around 185-205°F (85-95°C) for 3-5 minutes.
Herbal Tea: Use boiling water (212°F or 100°C) for 5-7 minutes.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwentyTwo">
      <button class="accordion-button  accordion-button1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwentyTwo" aria-expanded="false" aria-controls="collapseTwentyTwo">
      What is matcha tea, and how is it different from regular green tea?</button>
    </h2>
    <div id="collapseTwentyTwo" class="accordion-collapse collapse" aria-labelledby="headingTwentyTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Matcha tea is a vibrant green powdered tea made from shade-grown tea leaves. 
It's unique as the entire leaf is consumed, providing concentrated flavor and nutrients. 
Unlike regular green tea, where leaves are steeped and discarded, matcha is whisked into water or milk, offering a potent taste, more antioxidants, 
and a calming amino acid called L-theanine. 
Its preparation and flavor distinguish matcha from traditional green tea</p>
      </div>
    </div>
  </div>


<div class="accordion-item">
    <h2 class="accordion-header" id="headingNine">
      <button class="accordion-button  accordion-button1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
      Are there any teas that are known for boosting metabolism or aiding weight loss?</button>
    </h2>
    <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Yes,
Green Tea: Contains catechins that may enhance fat oxidation and metabolism.
Oolong Tea: May aid in weight management by increasing energy expenditure.
Pu-erh Tea: Linked to reducing fat absorption and promoting digestion.
Herbal Teas: Peppermint and ginger teas can aid digestion and appetite control.
Remember, while these teas may offer some benefits, a balanced diet and exercise remain essential for effective weight management. </p>
      </div>
    </div>
  </div>
</div>
</div>
 
<script>
      const searchInput = document.getElementById('search-input');
const autocompleteList = document.getElementById('autocomplete-list');

const sampleData = ['What is Tea-Milife?', 
"How to Change my Password easily?", 
"Is it Tea-Milife Franchise is good?", 
"What are the health benefits of drinking tea?", 
"Does tea contain caffeine? How much?", 
"Whats the difference between loose-leaf tea and tea bags?", 
"Are there any herbal teas that don't contain tea leaves?", 
"What's the history and cultural significance of tea?", 
"Are there any special tea ceremonies or rituals?", 
"Can I reuse tea leaves for multiple infusions?",
"What are the best storage methods for preserving tea freshness?",
"Are there any potential side effects of excessive tea consumption?",
" What are tisanes, and how do they differ from traditional tea?",
"How does the flavor of tea vary based on the region it's grown in?",
"What's the connection between tea and meditation or mindfulness?",
"Can children and pregnant women drink tea safely?",
"How does the flavor of tea vary based on the region it's grown in?",
"How do I brew the perfect cup of tea?",
"What's the proper water temperature for different types of tea?",
"What is matcha tea, and how is it different from regular green tea?",
"Are there any teas that are known for boosting metabolism or aiding weight loss?",];

searchInput.addEventListener('input', function () {
    const query = searchInput.value.toLowerCase();
    const filteredData = sampleData.filter(item => item.toLowerCase().includes(query));

    autocompleteList.innerHTML = '';
    filteredData.forEach(item => {
        const li = document.createElement('li');
        li.textContent = item;
        li.classList.add('list-group-item', 'list-group-item-action');
        li.addEventListener('click', function () {
            searchInput.value = item;
            autocompleteList.innerHTML = '';
        });
        autocompleteList.appendChild(li);
    });
});
document.addEventListener("DOMContentLoaded", function () {
  const searchInput = document.getElementById("search-input");
  const clearButton = document.getElementById("clear-button");

  clearButton.addEventListener("click", function () {
    searchInput.value = ""; // Clear the search input
    autocompleteList.innerHTML = '';

   });
});

</script>
    
 

</body>
<!-- Footer -->
       
<footer class="text-active" >
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
       <span class="d-none b-sm-block">Get connected with uson social networks:</span>
       <span class="b-lg-none" >Get connected with us <br/>on social networks:</span>

     <!-- Left -->

    <!-- Right -->
 
    <div class="icons" style="padding-left:40px">
      <a href="" class="me-3 text-reset">
        <i class="bi bi-facebook fs-2 white-color"></i>
      </a>
      <a href="" class="me-3 text-reset">
        <i class="bi bi-twitter fs-2 white-color"></i>
      </a>
      
      <a href="" class="me-3 text-reset">
        <i class="bi bi-instagram fs-2 white-color"></i>
      </a>
      <a href="" class="me-3 text-reset">
        <i class="bi bi-linkedin fs-2 white-color"></i>
      </a>
       
     </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section >
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            Tea-Milife
          </h6>
          <p>
          As a nation, we consume the largest quantity of tea with inside the international. In truth, tea is the second one biggest fed-on drink in the world after water. The amusing reality is that we’re the second one-largest tea manufacturer in the international. 
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 ">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
           Quick Links
          </h6>
          <p>
            <a href="#!" class="text-reset">Home</a>
          </p>
          <p>
            <a href="#!" class="text-reset">About us</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Contact us</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Franchise</a>
          </p>
        </div>
         
 
        <!-- Grid column -->
        <div class="col-md-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="bi bi-cursor"></i> Banglore, KR Puram</p>
          <p>
            <i class="bi bi-envelope"></i>
            adarsh@gmail.com
          </p>
          <p><i class="bi bi-telephone-outbound"></i> 8801466582</p>
          <p><i class="bi bi-telephone-outbound"></i> 9550158150</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
  <big>©</big> 2021 Copyright all copy rights reserverd
   </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
 </html>



 
 
 