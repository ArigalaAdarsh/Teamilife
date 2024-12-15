<?php   include "Profileview.php" ?>

<?php include "Nav bar.php" ?>
<?php include "Chatty.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Raw-Juice</title>
  <!-- Include Bootstrap CSS -->
  <link rel="stylesheet" href="Matter.css">
  <script src="Matter.js"></script>

  <?php include "scripts.php" ?>

    
 </head>
<body>
  <div class="row">
  <div class="col-sm-2 d-none d-sm-block "  style="background-color:#8699f7">
 <div class="d-flex align-items-start">
  <div class="nav flex-column  me-3"   id="myTabs" role="tablist" aria-orientation="vertical">
    <button class="nav-link "   data-bs-toggle="pill" data-bs-target="#Carrot" type="button" role="tab" >Carrot</button>
    <button class="nav-link"   data-bs-toggle="pill" data-bs-target="#Beetroot" type="button" role="tab"  >Beetroot</button>
    <button class="nav-link"  data-bs-toggle="pill" data-bs-target="#Banana" type="button" role="tab"  >Banana</button>
    <button class="nav-link"   data-bs-toggle="pill" data-bs-target="#Avacoda" type="button" role="tab">Avacoda</button>
    <button class="nav-link"   data-bs-toggle="pill" data-bs-target="#Grass" type="button" role="tab" >Grass</button>
    <button class="nav-link"   data-bs-toggle="pill" data-bs-target="#Podina" type="button" role="tab" >Podina</button>
    <button class="nav-link"  data-bs-toggle="pill" data-bs-target="#Grapes" type="button" role="tab"  >Grapes</button>
    <button class="nav-link"  data-bs-toggle="pill" data-bs-target="#MuskMellon" type="button" role="tab"  >MuskMellon</button>
    <button class="nav-link"   data-bs-toggle="pill" data-bs-target="#Papaya" type="button" role="tab" >Papaya</button>
    <button class="nav-link"   data-bs-toggle="pill" data-bs-target="#Pomegranate" type="button" role="tab"  >Pomegranate</button>
    <button class="nav-link"   data-bs-toggle="pill" data-bs-target="#Pineapple" type="button" role="tab" >Pineapple</button>
    <button class="nav-link"   data-bs-toggle="pill" data-bs-target="#Aluvera" type="button" role="tab" >Aluvera</button>

    
  </div>
  </div>
    </div>
    <div class="col-sm-2 d-lg-none"  >
 <div class="d-flex align-items-start" >
  <div class="nav flex-column  me-3"   id="myTabs" role="tablist" aria-orientation="vertical" >
    <button class="nav-link rawbutton1 "   data-bs-toggle="pill" data-bs-target="#Carrot" type="button" role="tab"   >Carrot</button>
    <button class="nav-link rawbutton1"   data-bs-toggle="pill" data-bs-target="#Beetroot" type="button" role="tab"  >Beetroot</button>
    <button class="nav-link rawbutton1"  data-bs-toggle="pill" data-bs-target="#Banana" type="button" role="tab"  >Banana</button>
    <button class="nav-link rawbutton1"   data-bs-toggle="pill" data-bs-target="#Avacoda" type="button" role="tab">Avacoda</button>
    <button class="nav-link rawbutton1"   data-bs-toggle="pill" data-bs-target="#Grass" type="button" role="tab" >Grass</button>
    <button class="nav-link rawbutton1"   data-bs-toggle="pill" data-bs-target="#Podina" type="button" role="tab" >Podina</button>
    <button class="nav-link rawbutton1"  data-bs-toggle="pill" data-bs-target="#Grapes" type="button" role="tab"  >Grapes</button>
    <button class="nav-link rawbutton1"  data-bs-toggle="pill" data-bs-target="#MuskMellon" type="button" role="tab"  >Musk Mellon</button>
    <button class="nav-link rawbutton1"   data-bs-toggle="pill" data-bs-target="#Papaya" type="button" role="tab" >Papaya</button>
    <button class="nav-link rawbutton1"   data-bs-toggle="pill" data-bs-target="#Pomegranate" type="button" role="tab"  >Pomegranate</button>
    <button class="nav-link rawbutton1"   data-bs-toggle="pill" data-bs-target="#Pineapple" type="button" role="tab" >Pineapple</button>
    <button class="nav-link rawbutton1"   data-bs-toggle="pill" data-bs-target="#Aluvera" type="button" role="tab" >Aluvera</button>

    
  </div>
  <div class="vr border-2" style="height:750px;margin-left:-20px;" ></div>

  </div>

    </div>

    <div class="col-sm-10">
      <div id="tabimage">
        <h4 class="h4" align="center" style="margin-top:50px;color:#46055d;font-family: Arial, Helvetica, sans-serif;">Welcome To Raw Juice Section</h4>
        <img src="images/man.png" class="image4 d-lg-none" alt="Man" >
    </div>
 <!--Corousel For first InterFace it will hide after nav tabs clicking"-->
    <div id="tabimage1">
    <div class="container  d-none d-sm-block"  >
       <div id="myCarousel_1" class="carousel slide w-60 " data-ride="carousel" style="margin-top:70px" align="center">
        <ol class="carousel-indicators">
      <li data-target="#myCarousel_1" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel_1" data-slide-to="1"></li>
      <li data-target="#myCarousel_1" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner ">
      <div class="carousel-item active">
        <img src="images/Raw Juices/Alevera.webp" class="curimage" alt="Alevera" >
        <div class="carousel-caption">
          <h3>Alevera</h3>
         </div>
      </div>
      <div class="carousel-item">
        <img src="images/Raw Juices/Beetroot.jpg" class="curimage" alt="Beetroot">
        <div class="carousel-caption">
          <h3>Beetroot</h3>
         </div>
      </div>
      <div class="carousel-item">
        <img src="images/Raw Juices/carrot.avif" class="curimage" alt="Carrot">
        <div class="carousel-caption">
          <h3>Carrot</h3>
         </div>
      </div>
      <div class="carousel-item">
        <img src="images/Raw Juices/Grape.jpg" class="curimage" alt="Grape">
        <div class="carousel-caption">
          <h3>Grape juice</h3>
         </div>
      </div>
      <div class="carousel-item">
        <img src="images/Raw Juices/Papaya-1.jpg" class="curimage" alt="Papaya">
        <div class="carousel-caption">
          <h3>Papaya juice</h3>
         </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel_1" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel_1" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>
   <!--Coursel Ended-->
    <div class="d-flex align-items-start">

  <div class="tab-content" id="v-pills-tabContent">

    <div class="tab-pane fade show " id="Carrot" role="tabpanel"   tabindex="0"> 
    <h3 class="h3">Carrot Juice</h3>
    <img src="images/Raw Juices/carrot.avif "  class="card-img2"   alt="Carrot">
<h5 class="h5">Ingredients:</h5>
<p>
    1.Fresh carrots: 4-6 medium-sized carrots (cleaned, peeled, and trimmed)<br>
    2.Water (optional): 1/4 to 1/2 cup, for adjusting consistency<br>
    3.Lemon juice (optional): 1-2 teaspoons, for added flavor<br>
    4.Honey or sweetener (optional): to taste<br>
</p>
<h5 class="h5">Instructions:</h5>
<p>
    1.Wash, peel, and trim the carrots. Cut them into smaller pieces to make juicing easier.<br>
    2.Using a juicer or a high-speed blender, blend the carrot pieces until smooth.<br>
    3.If using a blender, you can strain the carrot puree through a fine mesh strainer or nut milk bag to extract the juice. If you prefer a thicker juice, you can skip this step.<br>
    4.If the juice is too thick, you can add a small amount of water to adjust the consistency. Start with a 1/4 cup of water and add more if needed.<br>
    5.If desired, add lemon juice for a tangy flavor or honey/sweetener to enhance the sweetness. Adjust these additions to your taste preferences.<br>
</p>
<h5 class="h5">Uses and Benefits:</h5>
<p>
    1.Nutrient-Rich: Carrot juice is an excellent source of vitamins A and C, as well as other nutrients like potassium and antioxidants.<br>

    2.Healthy Skin: The beta-carotene in carrots is converted to vitamin A in the body, which is essential for maintaining healthy skin and vision.<br>

    3.Digestive Health: Carrot juice contains dietary fiber and compounds that can support digestive health.<br>

    4.Immune Boost: The vitamin C and antioxidants in carrot juice can contribute to a stronger immune system.<br>

    5.Hydration: Carrot juice can contribute to your daily fluid intake, helping to keep you hydrated.<br>

    6.Energy: The natural sugars in carrots provide a natural energy boost, making carrot juice a great choice for a quick pick-me-up.<br>

    7.Detoxification: Carrots contain compounds that may aid in detoxifying the body and supporting liver health.<br>

    8.Bone Health: The vitamin K in carrots contributes to bone health and blood clotting.<br>

    9.Eye Health: Carrots are known for their potential to support eye health due to their high vitamin A content.<br>

    10.Vibrant Color: Carrot juice's vibrant orange color is visually appealing and can be used creatively in food and beverage presentations.<br>
</p>
    </div>

    <div class="tab-pane fade" id="Beetroot" role="tabpanel"   tabindex="0">
    <h3 class="h3">Beetroot Juice </h3>

<h5 class="h5">Ingredients:</h5>
<p>
    1.Fresh beetroot: 2-3 medium-sized (cleaned, peeled, and trimmed)<br>
    2.Water: 1/4 to 1/2 cup, for adjusting consistency<br>
    3.Lemon juice (optional): 1-2 teaspoons, for added flavor<br>
    4.Honey or sweetener (optional): to taste<br>
</p>
<h5 class="h5">Instructions:</h5>
<p>
    1.Wash, peel, and trim the beetroot. Cut them into smaller pieces to make juicing easier.<br>
    2.Using a juicer or a high-speed blender, blend the beetroot pieces until smooth.<br>
    3.If using a blender, you can strain the beetroot puree through a fine mesh strainer or nut milk bag to extract the juice. If you prefer a thicker juice, you can skip this step.<br>
    4.If the juice is too thick, you can add a small amount of water to adjust the consistency. Start with a 1/4 cup of water and add more if needed.<br>
    5.If desired, add lemon juice for a tangy flavor or honey/sweetener to enhance the sweetness. Adjust these additions to your taste preferences.<br>
    6.Stir well to combine all the ingredients.<br>
    7.Serve the beetroot juice immediately for maximum freshness and nutrition.<br>
</p>
<h5 class="h5">Uses and Benefits:</h5>
<p>
    1.Nutrient-Rich: Beetroot juice is a powerhouse of nutrients, including vitamins, minerals, antioxidants, and dietary fiber.<br>

    2.Heart Health: The nitrates in beetroot juice may help lower blood pressure and improve cardiovascular health.<br>

    3.Athletic Performance: Some studies suggest that beetroot juice's nitrate content can enhance exercise performance and endurance.<br>

    4.Digestive Health: Beetroot juice is a good source of dietary fiber, which can support healthy digestion.<br>

    5.Detoxification: The antioxidants in beetroot juice may aid in detoxifying the body and supporting liver health.<br>

    6.Anti-Inflammatory: The betalains in beetroot have potential anti-inflammatory effects.<br>

    7.Vibrant Skin: The nutrients in beetroot juice can contribute to healthy skin and a radiant complexion.<br>

    8.Immune Boost: Beetroot juice is rich in vitamin C and antioxidants that can help support the immune system.<br>

    9.Hydration: Beetroot juice contributes to your daily fluid intake, helping keep you hydrated.<br>

    10.Refreshing Drink: Beetroot juice's natural sweetness and vibrant color make it a refreshing and visually appealing beverage.<br>
</p>
    </div>
    <div class="tab-pane fade" id="Banana" role="tabpanel"   tabindex="0">
    <h3 class="h3">Banana Juice</h3>

<h5 class="h5">Ingredients:</h5>
<p>
    1.Ripe bananas: 2-3 medium-sized<br>
    2.Water or milk: 1/2 to 1 cup (adjust for desired consistency)<br>
    3.Lemon juice (optional): 1-2 teaspoons, for added flavor<br>
    4.Honey or sweetener (optional): to taste<br>
</p>
<h5 class="h5">Instructions:</h5>

   <p> 1.Peel the ripe bananas and cut them into smaller chunks.<br>
    2.Place the banana chunks in a blender.<br>
    3.Add water or milk to the blender. The amount will depend on your desired consistency. For a thicker juice, use less liquid; for a thinner juice, use more.<br>
    4.If using lemon juice, add it to the blender for a slight tangy flavor.<br>
    5.Blend the mixture until smooth and creamy.<br>
    6.If desired, add honey or a sweetener of your choice to enhance the sweetness. Start with a small amount and adjust to your taste.<br>
    7.Blend again briefly to incorporate the sweetener.<br>
    8.Pour the banana juice into glasses and serve immediately for the best taste and texture.<br>
</p>
<h5 class="h5">Uses and Benefits:</h5>
<p>
    1.Natural Sweetness: Banana juice is naturally sweet due to the ripe bananas, making it a great alternative to sugary beverages.<br>

    2.Nutrient-Rich: Bananas are rich in essential nutrients like potassium, vitamins B6 and C, and dietary fiber.<br>

    3.Energy Boost: The natural sugars in bananas provide a quick and healthy source of energy.<br>

    4.Digestive Health: Bananas contain dietary fiber that can support healthy digestion.<br>

    5.Heart Health: The potassium in bananas can help maintain healthy blood pressure and cardiovascular function.<br>

    6.Hydration: Banana juice contributes to your daily fluid intake, helping to keep you hydrated.<br>

    7.Weight Management: Banana juice can help you feel full and satisfied, making it a good option for weight management.<br>

    8.Muscle Recovery: The nutrients in bananas can aid in muscle recovery after exercise.<br>

    9.Kid-Friendly: Banana juice's mild and naturally sweet flavor makes it appealing to children.<br>

    10.Smoothies and Recipes: Banana juice can serve as a base for smoothies or be used in recipes for baked goods, pancakes, and more.<br>
</p>
    </div>
    <div class="tab-pane fade" id="Avacoda" role="tabpanel"   tabindex="0">
        <h3 class="h3">Avacoda Juice</h3>
  
<h5 class="h5">Ingredients:</h5>
<p>
1.Ripe avocado: 1 medium-sized<br>
2.Milk (dairy or plant-based): 1 cup<br>
3.Honey or sweetener (optional): to taste<br>
4.Lime or lemon juice: 1 tablespoon (for flavor and to prevent browning)<br>
5.Ice cubes: a few<br>
</p>
<h5 classs="h5">Instructions:</h5>
<p>
1.Cut the ripe avocado in half, remove the pit, and scoop out the flesh.<br>
2.Place the avocado flesh in a blender.<br>
3.Add milk, lime or lemon juice, and optional sweetener to the blender.<br>
4.Blend the mixture until smooth and creamy.<br>
5.If desired, add ice cubes and blend again to create a chilled beverage.<br>
6.Taste and adjust sweetness or acidity if needed.<br>
7.Pour the avocado-based drink into glasses and serve immediately.<br>
</p>
<h5 class="h5">Uses and Benefits:</h5>
<p>
1.Creamy and Nutrient-Rich: Avocado-based drinks are rich in healthy fats, vitamins (such as vitamin E, vitamin K, and folate), and minerals.<br>

2.Satiety and Weight Management: The healthy fats and fiber in avocados can help you feel full and satisfied, making it a good option for weight management.<br>

3.Heart Health: Avocado contains monounsaturated fats that can contribute to heart health.<br>

4.Skin Health: The vitamins and antioxidants in avocados can promote healthy skin.<br>

5.Digestive Health: Avocado's dietary fiber can support healthy digestion.<br>

6.Customizable: You can add other ingredients like spinach, kale, berries, or yogurt to create a personalized avocado-based smoothie.<br>

7.Quick Snack: An avocado-based drink can serve as a quick and nutritious snack.<br>

8.Post-Workout Recovery: The nutrients in avocados can aid in muscle recovery after exercise.<br>
    
</p>   </div>
    

    <div class="tab-pane fade" id="Grass" role="tabpanel"   tabindex="0">
   <h3 class="h3"> Grass Juice</h3>

<h5 class="h5">Ingredients:</h5>
<p>
    1.Fresh wheatgrass or barley grass: a bunch (about 2-3 ounces)<br>
    2.Water: 1/4 to 1/2 cup (for adjusting consistency)<br>
    3.Lemon juice (optional): 1 teaspoon, for added flavor<br>
</p>
<h5 class="h5">Instructions:</h5>
<p>
    1.Wash the grass blades thoroughly to remove any dirt or debris.<br>
    2.If using a juicer specifically designed for grasses, follow the manufacturer's instructions to extract the juice.<br>
    3.If using a regular juicer or blender, chop the grass blades into smaller pieces.<br>
    4.Place the chopped grass into the juicer or blender, and add a small amount of water.<br>
    5.Blend or juice the grass until you get a concentrated juice.<br>
    6.If using a blender, strain the juice through a fine mesh strainer or nut milk bag to remove fibrous pulp.<br>
    7.If desired, add a teaspoon of lemon juice for a slight tangy flavor.<br>
    8.Stir well to combine the juice and lemon juice.<br>
</p>
<h5 class="h5">Uses and Benefits:</h5>
<p>
    1.Nutrient-Rich: Grass juices like wheatgrass and barley grass are packed with vitamins, minerals, antioxidants, and chlorophyll.<br>

    2.Detoxification: Chlorophyll in grass juices is believed to aid in detoxifying the body and supporting liver health.<br>

    3.Digestive Health: Grass juices may have enzymes that can support digestion and alleviate digestive issues.<br>

    4.Immune Boost: The nutrients in grass juices can contribute to a stronger immune system.<br>

    5.Energy and Vitality: Grass juices are often consumed as "shots" for a quick energy boost and overall well-being.<br>

    6.Skin Health: The antioxidants in grass juices may promote healthy skin.<br>

    7.Alkalizing: Grass juices are considered alkaline and may help balance the body's pH levels.<br>

    8.Potential Healing Properties: Some proponents believe that grass juices can have potential healing effects on various health conditions.<br>

    8.Customizable: You can mix grass juice with other juices or blend it into smoothies for enhanced flavor and nutrients.<br>

    10.Cautions: Grass juices can be strong in taste, and some people might experience nausea or digestive discomfort. Start with small amounts and monitor your body's reaction.<br>

</p>  </div>

    <div class="tab-pane fade" id="Podina" role="tabpanel"   tabindex="0">
<h3 class="h3">Podina Juice</h3>

<h5 class="h5">Ingredients:</h5>

<p>    1.Fresh mint leaves: 1 cup (washed and stems removed)<br>
    2.Lemon juice: from 2-3 lemons<br>
    3.Water: 4 cups<br>
    4.Sugar or sweetener: to taste<br>
    5.Ice cubes: for serving<br>
    6.Optional: A pinch of black salt or chaat masala for extra flavor<br></p>

<h5 class="h5">Instructions:</h5>
<p>
    1.In a blender, add the fresh mint leaves and a little water. Blend until you get a smooth mint puree.<br>
    2.In a pitcher, combine the mint puree, lemon juice, and sugar/sweetener.<br>
    3.Add water to the pitcher and stir well to combine all the ingredients.<br>
    4.Taste and adjust the sweetness and lemon juice according to your preference.<br>
    5.If using, add a pinch of black salt or chaat masala for a tangy and savory kick.<br>
    6.Chill the podina juice in the refrigerator for at least an hour.<br>
    7.Before serving, give the juice a good stir. Fill glasses with ice cubes and pour the chilled juice over the ice.<br>
    8.Garnish with a mint sprig or lemon slice if desired.<br>
</p>
<h5 class="h5">Uses and Benefits:</h5>
<p>
    1.Refreshing and Hydrating: Podina juice is incredibly refreshing and helps keep you hydrated, making it a perfect choice for hot days.<br>

    2.Digestive Aid: Mint is known for its digestive properties and can help soothe an upset stomach.<br>

    3.Cooling Effec t: Mint has a cooling sensation that can provide relief in hot weather and aid in reducing body temperature.<br>

    4.Aromatic Flavor: The strong aroma of mint adds a delightful and aromatic flavor to the juice.<br>

    5.Vitamin C: Lemon juice in the podina juice provides a dose of vitamin C, which is good for immune support.<br>

    6.Culinary Use: You can use podina juice as a base for cocktails or mocktails by adding your favorite spirits or mixers.<br>

    7.Natural Mouth Freshener: Mint is known for its breath-freshening properties, making podina juice a natural mouth freshener.<br>

    8.Party or Gathering: Podina juice can be a popular and colorful drink option at parties, picnics, or gatherings.<br>

    9.Customizable: Adjust the sweetness, lemon, and mint levels to suit your taste.<br></p>
    </div>

    <div class="tab-pane fade" id="Grapes" role="tabpanel"   tabindex="0">  
<h3 class="h3">Grape</h3>

<h5 class="h5">Ingredients:</h5>
<p>
    1.Fresh grapes: 2 cups (washed and stems removed)<br>
    2.Water: 1/2 cup<br>
    3.Sugar or sweetener: to taste (optional)<br>
    4.Lemon juice: 1-2 tablespoons (optional, for added flavor)<br>
    5.Ice cubes: for serving<br>
</p>
<h5 class="h5">Instructions:</h5>
<p>
    1.Wash the grapes thoroughly under running water to remove any dirt or residue.<br>
    2.Place the grapes in a blender or food processor.<br>
    3.Add water to the blender to help with blending.<br>
    4.Blend the grapes until they are fully crushed and you have a smooth puree.<br>
    5.If desired, strain the grape puree through a fine mesh strainer or cheesecloth to remove any seeds or pulp.<br>
    6.If using, add sugar or sweetener to the strained juice and stir until dissolved. Adjust sweetness to your taste.<br>
    7.Add lemon juice for a tangy twist if desired.<br>
    8.Chill the grape juice in the refrigerator for at least an hour.<br>
    9.Before serving, give the juice a good stir. Fill glasses with ice cubes and pour the chilled juice over the ice.<br>
</p>
<h5 class="h5">Uses and Benefits: Juice</h5>
<p>
    1.Rich in Antioxidants: Grape juice contains antioxidants like resveratrol, which is believed to have various health benefits.<br>

    2.Natural Sweetness: Grapes are naturally sweet, making grape juice a delicious and wholesome option.<br>

    3.Hydration: Grape juice contributes to your daily fluid intake, helping keep you hydrated.<br>

    4.Digestive Health: Grapes contain dietary fiber that can support healthy digestion.<br>

    5.Cardiovascular Health: Some research suggests that certain compounds in grapes may contribute to heart health.<br>

    6.Immune Support: The vitamin C in grapes and the overall nutrition can help support the immune system.<br>

    7.Culinary Uses: Grape juice can be used as a base for cocktails, mocktails, smoothies, and even sauces or glazes for meats.<br>

    8.Variety: You can use different grape varieties (red, green, black, etc.) to create variations in color and flavor.<br>

    9.Family-Friendly: Grape juice is a popular option among all age groups, making it a great choice for family gatherings.<br>

    10.Natural Energy: The natural sugars in grape juice provide a quick source of energy.<br>
</p> </div>
    <div class="tab-pane fade" id="MuskMellon" role="tabpanel"   tabindex="0">
    <h3 class="h3">Musk Mellon</h3>

<h5 class="h5">Ingredients:</h5>
<p>
    1.Ripe muskmelon (cantaloupe): 1 medium-sized<br>
    2.Water: 1/4 to 1/2 cup (adjust for desired consistency)<br>
    3.Sugar or sweetener: to taste (optional)<br>
    4.Lemon juice: 1-2 tablespoons (optional, for added flavor)<br>
    5.Ice cubes: for serving<br>
</p>
<h5 class="h5">Instructions:</h5>
<p>
    1.Wash the muskmelon thoroughly and cut it in half. Scoop out the seeds and discard them.<br>
    2.Cut the muskmelon flesh into smaller chunks.<br>
    3.Place the muskmelon chunks in a blender.<br>
    4.Add a small amount of water to help with blending.<br>
    5.Blend the muskmelon until you get a smooth puree.<br>
    6.If desired, strain the muskmelon puree through a fine mesh strainer or cheesecloth to remove any fibers or seeds.<br>
    7.If using, add sugar or sweetener to the strained juice and stir until dissolved. Adjust sweetness to your taste.<br>
    8.Add lemon juice for a tangy twist if desired.<br>
    9.Chill the muskmelon juice in the refrigerator for at least an hour.<br>
    10.Before serving, give the juice a good stir. Fill glasses with ice cubes and pour the chilled juice over the ice.<br>
</p>
<h5 class="h5">Uses and Benefits:</h5>
<p>
    1.Refreshing and Hydrating: Muskmelon juice is incredibly hydrating and perfect for quenching thirst on hot days.<br>

    2.Natural Sweetness: Muskmelons are naturally sweet, making the juice delicious without the need for additional sugar.<br>

    3.Rich in Nutrients: Muskmelons are a good source of vitamins A and C, potassium, and other nutrients.<br>

    4.Digestive Health: Muskmelon juice contains dietary fiber that can support healthy digestion.<br>

    5.Immune Boost: The vitamin C in muskmelons can help support the immune system.<br>

    6.Cooling Effect: Muskmelon has a high water content, which can provide a cooling effect on the body.<br>

    7.Weight Management: Muskmelon juice can be a satisfying and low-calorie option for those looking to manage their weight.<br>

    8.Smoothies and Recipes: Muskmelon juice can serve as a base for smoothies or be used in recipes for desserts, sauces, and more.<br>

    9.Variety: You can experiment with adding other fruits or herbs for flavor variations.<br>
</p>
    </div>
    <div class="tab-pane fade" id="Papaya" role="tabpanel"   tabindex="0">
    <h3 class="h3">Papaya Juice</h3>

<h5 class="h5">Ingredients:</h5>
 <p>   1.Ripe papaya: 15 medium-sized<br>
    2.Water: 1/4 to 1/2 cup (adjust for desired consistency)<br>
    3.Sugar or sweetener: to taste (optional)<br>
    4.Lemon juice: 1-2 tablespoons (optional, for added flavor)<br>
    5.Ice cubes: for serving<br>
</p>
<h5 class="h5">Instructions:</h5>

  <p>  1.Wash the papaya thoroughly and cut it in half. Scoop out the seeds and discard them.<br>
    2.Cut the papaya flesh into smaller chunks.<br>
    3.Place the papaya chunks in a blender.<br>
    4.Add a small amount of water to help with blending.<br>
    5.Blend the papaya until you get a smooth puree.<br>
    6.If desired, strain the papaya puree through a fine mesh strainer or cheesecloth to remove any fibers or seeds.<br>
    7.If using, add sugar or sweetener to the strained juice and stir until dissolved. Adjust sweetness to your taste.<br>
    8.Add lemon juice for a tangy twist if desired.<br>
    9.Chill the papaya juice in the refrigerator for at least an hour.<br>
    10.Before serving, give the juice a good stir. Fill glasses with ice cubes and pour the chilled juice over the ice.<br>
</p>
<h5 class="h5">Uses and Benefits:</h5>
<p>
    1.Rich in Nutrients: Papaya juice is a good source of vitamins A and C, folate, and other nutrients.<br>

    2.Digestive Health: Papaya contains enzymes like papain that can aid in digestion.<br>

    3.Immune Support: The vitamin C and antioxidants in papaya juice can help support the immune system.<br>

    4.Natural Sweetness: Papayas are naturally sweet, making the juice delicious without the need for additional sugar.<br>

    5.Hydration: Papaya juice contributes to your daily fluid intake, helping keep you hydrated.<br>

    6.Weight Management: Papaya juice can be a satisfying and low-calorie option for those looking to manage their weight.<br>

    7.Smoothies and Recipes: Papaya juice can serve as a base for smoothies or be used in recipes for tropical-flavored dishes, sauces, and more.<br>

    8.Skin Health: The antioxidants in papayas can contribute to healthy skin.<br>

    9.Variety: You can experiment with adding other fruits or herbs for flavor variations.<br>

    10.Gut Health: Papaya juice's natural enzymes can potentially support a healthy gut.<br>
</p>
    </div>
    <div class="tab-pane fade" id="Pomegranate" role="tabpanel"   tabindex="0">
    <h3 class="h3">Pomegranate Juice</h3>

<h5 class="h5">Ingredients:</h5>
<p>
    1.Fresh pomegranates: 2-3 medium-sized<br>
    2.Water: 1/4 to 1/2 cup (adjust for desired consistency)<br>
    3.Sugar or sweetener: to taste (optional)<br>
    4.Lemon juice: 1-2 tablespoons (optional, for added flavor)<br>
    5.Ice cubes: for serving<br>
</p>
<h5 class="h5">Instructions:</h5>
<p>
    1.Cut the pomegranates in half and gently separate the arils (seeds) from the white pith. You can do this by tapping the back of the pomegranate halves with a spoon.<br>
    2.Place the pomegranate arils in a blender.<br>
    3.Blend the pomegranate arils until you get a smooth puree.<br>
    4.If desired, strain the pomegranate puree through a fine mesh strainer or cheesecloth to remove any seeds or fibers.<br>
    5.If using, add sugar or sweetener to the strained juice and stir until dissolved. Adjust sweetness to your taste.<br>
    6.Add lemon juice for a tangy twist if desired.<br>
    7.Chill the pomegranate juice in the refrigerator for at least an hour.<br>
    8.Before serving, give the juice a good stir. Fill glasses with ice cubes and pour the chilled juice over the ice.<br>
</p>
<h5 class="h5">Uses and Benefits:</h5>
<p>
    1.Rich in Antioxidants: Pomegranate juice is known for its high levels of antioxidants, particularly punicalagins and anthocyanins.<br>

    2.Heart Health: Pomegranate juice may contribute to heart health by improving cholesterol levels and supporting healthy blood pressure.<br>

    3.Immune Support: The vitamin C and antioxidants in pomegranate juice can help support the immune system.<br>

    4.Digestive Health: Pomegranate juice contains dietary fiber that can support healthy digestion.<br>

    5.Skin Health: The antioxidants in pomegranates can promote healthy skin.<br>

    6.Hydration: Pomegranate juice contributes to your daily fluid intake, helping keep you hydrated.<br>

    7.Culinary Uses: Pomegranate juice can be used as a base for cocktails, mocktails, smoothies, sauces, and marinades.<br>

    8.Variety: You can experiment with adding other fruits or herbs for flavor variations.<br>

    9.Natural Sweetness: Pomegranate juice has a naturally sweet and slightly tart flavor, making it a delicious choice.<br>

    10.Garnish: Pomegranate arils make a colorful and flavorful garnish for dishes and beverages.<br>
</p>

    </div>
    <div class="tab-pane fade" id="Pineapple" role="tabpanel"   tabindex="0">
<h3 class="h3">Pineapple Juice</h3> 

<h5 class="h5">Ingredients:</h5>
<p>
    1.Ripe pineapple: 1 medium-sized<br>
    2.Water: 1/4 to 1/2 cup (adjust for desired consistency)<br>
    3.Sugar or sweetener: to taste (optional)<br>
    4.Lemon juice: 1-2 tablespoons (optional, for added flavor)<br>
    5.Ice cubes: for serving<br>
</p>
<h5 class="h5">Instructions:</h5>
<p>
    1.Remove the outer skin of the pineapple and cut it into smaller chunks, discarding the core.<br>
    2.Place the pineapple chunks in a blender.<br>
    3.Add a small amount of water to help with blending.<br>
    4.Blend the pineapple until you get a smooth puree.<br>
    5.If desired, strain the pineapple puree through a fine mesh strainer or cheesecloth to remove any fibers or pieces.<br>
    6.If using, add sugar or sweetener to the strained juice and stir until dissolved. Adjust sweetness to your taste.<br>
    7.Add lemon juice for a tangy twist if desired.<br>
    8.Chill the pineapple juice in the refrigerator for at least an hour.<br>
    9.Before serving, give the juice a good stir. Fill glasses with ice cubes and pour the chilled juice over the ice.<br>
</p>
<h5 class="h5">Uses and Benefits:</h5>
<p>
    1.Tropical Flavor: Pineapple juice has a distinct and refreshing tropical flavor that's loved by many.<br>

    2.Vitamin C: Pineapple is a good source of vitamin C, which supports the immune system.<br>

    3.Digestive Enzymes: Pineapple contains bromelain, an enzyme that may aid digestion.<br>

    4.Hydration: Pineapple juice contributes to your daily fluid intake, helping keep you hydrated.<br>

    5.Culinary Uses: Pineapple juice can be used in cocktails, mocktails, smoothies, marinades, and sauces.<br>

    6.Natural Sweetness: Pineapple juice has natural sweetness, making it a tasty beverage option.<br>

    7.Refreshing: The combination of pineapple's sweetness and acidity makes for a refreshing drink.<br>

    8.Smoothies: Pineapple juice can serve as a base for tropical-flavored smoothies.<br>

    9.Variety: You can experiment with adding other fruits or herbs for flavor variations.<br>

    10.Cooking: Pineapple juice can be used to tenderize meats and add flavor to stir-fries.<br>
</p>
    </div>
    <div class="tab-pane fade" id="Aluvera" role="tabpanel"   tabindex="0">
    <h3 class="h3">Aluvera Juice</h3>


<h5 class="h5">Ingredients:</h5>

  <p>  1.Fresh aloe vera leaf: 1 leaf (choose a mature and healthy leaf)<br>
    2.Water: 1/4 to 1/2 cup<br>
    3.Lemon juice: 1-2 tablespoons (optional, for flavor)<br>
    4.Honey or sweetener: to taste (optional)<br>
    5.Ice cubes: for serving<br>
</p>
<h5 class="h5">Instructions:</h5>
<p>
    1.Carefully cut a mature aloe vera leaf from the plant, close to the base.<br>
    2.Wash the leaf thoroughly to remove any dirt or residue.<br>
    3.Trim off the thorny edges and cut the leaf into smaller sections to extract the gel.<br>
    4.Use a knife to carefully peel the outer green skin of each section, exposing the clear aloe vera gel inside.<br>
    5.Scoop out the gel using a spoon and place it in a blender.<br>
    6.Add water to the blender to help with blending.<br>
    7.Blend the aloe vera gel and water until you get a smooth consistency.<br>
    8.If using, add lemon juice for flavor and honey or sweetener to taste. Blend again to incorporate.<br>
    9.Chill the aloe vera juice in the refrigerator for at least an hour.<br>
    10.Before serving, give the juice a good stir. Fill glasses with ice cubes and pour the chilled juice over the ice.<br>
</p>
<h5 class="h5">Uses and Benefits:</h5>

   <p> 1.Digestive Health: Aloe vera juice may help support healthy digestion and alleviate digestive discomfort.<br>

    2.Hydration: Aloe vera juice can contribute to your daily fluid intake, helping keep you hydrated.<br>

    3.Skin Health: Aloe vera is known for its potential benefits for skin health when consumed regularly.<br>

    4.Immune Support: Aloe vera contains vitamins, minerals, and antioxidants that can support the immune system.<br>

    5,Potential Anti-Inflammatory: Aloe vera is believed to have anti-inflammatory properties.<br>

    6.Detoxification: Some people consume aloe vera juice as part of a detox regimen.<br>

    7.Culinary Uses: Aloe vera juice can be used as an ingredient in smoothies and cocktails.<br>

    8.Hair Health: Some people use aloe vera juice to promote healthy hair.<br>

    9.Oral Health: Aloe vera juice might contribute to oral health when consumed in moderation.<br>
</p>
    </div>

    </div>
  </div>
    </div>
    </div>

</div>
 
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
            <a href="Home1.php" class="text-reset">Home</a>
          </p>
          <p>
            <a href="contact_us.php" class="text-reset">About us</a>
          </p>
          <p>
            <a href="About Us.php" class="text-reset">Contact us</a>
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
  <big>©</big> 2023 Copyright all copy rights reserverd
   </div>
  <!-- Copyright -->
</footer>
<!-- Footer Ended-->

</html>
 
 
 