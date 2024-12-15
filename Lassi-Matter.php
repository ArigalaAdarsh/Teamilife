<?php   include "Profileview.php" ?>

<?php include "Nav bar.php" ?>
<?php include "Chatty.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lassi Menu</title>
  <!-- Include Bootstrap CSS -->
  <link rel="stylesheet" href="Matter.css">
  <?php include "scripts.php" ?>

  <script src="Matter.js"></script>

    
 </head>
<body>
  <div class="row">
  <div class="col-sm-2 d-none d-sm-block" style="background-color:#8699f7">
 <div class="d-flex align-items-start">
  <div class="nav flex-column  me-3"  id="myTabs" role="tablist" aria-orientation="vertical">
    <button class="nav-link "   data-bs-toggle="pill" data-bs-target="#Dry-FruitLassi" type="button" role="tab" >Dry-Fruit</button>
    <button class="nav-link"   data-bs-toggle="pill" data-bs-target="#MangoLassi" type="button" role="tab"  > Mango Lassi</button>
    <button class="nav-link"  data-bs-toggle="pill" data-bs-target="#StrawberryLassi" type="button" role="tab"  >Strawberry</button>
    <button class="nav-link"   data-bs-toggle="pill" data-bs-target="#SweetLassi" type="button" role="tab">Sweet Lassi</button>
    <button class="nav-link"   data-bs-toggle="pill" data-bs-target="#GreenAppleLassi" type="button" role="tab" >Green Apple Lassi</button>
    <button class="nav-link"   data-bs-toggle="pill" data-bs-target="#JeeraLassi" type="button" role="tab" >Jeera Lassi</button>
    <button class="nav-link"  data-bs-toggle="pill" data-bs-target="#KiwiLassi" type="button" role="tab"  >Kiwi Lassi</button>
    <button class="nav-link"  data-bs-toggle="pill" data-bs-target="#PineAppleLassi" type="button" role="tab"  >Pine Apple Lassi</button>
    <button class="nav-link"   data-bs-toggle="pill" data-bs-target="#PistaLassi" type="button" role="tab" >Pista Lassi</button>
    <button class="nav-link"   data-bs-toggle="pill" data-bs-target="#SaffronLassi" type="button" role="tab"  >Saffron Lassi</button>
    <button class="nav-link"   data-bs-toggle="pill" data-bs-target="#CoconutLassi" type="button" role="tab" >Coconut Lassi</button>
    <button class="nav-link"   data-bs-toggle="pill" data-bs-target="#ChocolateLassi" type="button" role="tab" >Chocolate Lassi</button>

    
  </div>
  </div>
    </div>
    <div class="col-sm-2 d-lg-none">
 <div class="d-flex align-items-start">
  <div class="nav flex-column  me-3"  id="myTabs" role="tablist" aria-orientation="vertical">
    <button class="nav-link "   data-bs-toggle="pill" data-bs-target="#Dry-FruitLassi" type="button" role="tab" >Dry-Fruit</button>
    <button class="nav-link"   data-bs-toggle="pill" data-bs-target="#MangoLassi" type="button" role="tab"  > Mango Lassi</button>
    <button class="nav-link"  data-bs-toggle="pill" data-bs-target="#StrawberryLassi" type="button" role="tab"  >Strawberry</button>
    <button class="nav-link"   data-bs-toggle="pill" data-bs-target="#SweetLassi" type="button" role="tab">Sweet Lassi</button>
    <button class="nav-link"   data-bs-toggle="pill" data-bs-target="#GreenAppleLassi" type="button" role="tab" >Green Apple Lassi</button>
    <button class="nav-link"   data-bs-toggle="pill" data-bs-target="#JeeraLassi" type="button" role="tab" >Jeera Lassi</button>
    <button class="nav-link"  data-bs-toggle="pill" data-bs-target="#KiwiLassi" type="button" role="tab"  >Kiwi Lassi</button>
    <button class="nav-link"  data-bs-toggle="pill" data-bs-target="#PineAppleLassi" type="button" role="tab"  >Pine Apple Lassi</button>
    <button class="nav-link"   data-bs-toggle="pill" data-bs-target="#PistaLassi" type="button" role="tab" >Pista Lassi</button>
    <button class="nav-link"   data-bs-toggle="pill" data-bs-target="#SaffronLassi" type="button" role="tab"  >Saffron Lassi</button>
    <button class="nav-link"   data-bs-toggle="pill" data-bs-target="#CoconutLassi" type="button" role="tab" >Coconut Lassi</button>
    <button class="nav-link"   data-bs-toggle="pill" data-bs-target="#ChocolateLassi" type="button" role="tab" >Chocolate Lassi</button>

    
  </div>
  <div class="vr border-2" style="height:750px;margin-left:-20px" ></div>

  </div>
    </div>
    <div class="col-sm-10">
    <div id="tabimage">
    <h4 class="h4" align="center" style="margin-top:50px;color:#46055d;font-family: Arial, Helvetica, sans-serif;">Welcome To Lassi Section</h4>
    <img src="images/man.png" class="image4 d-lg-none" alt="Man" >
    </div>
      <!--Corousel For first InterFace it will hide after nav tabs clicking"-->
      <div id="tabimage1">
      <div class="container d-none d-sm-block"  >
  <div style="margin-top:70px" align="center">
  <div id="myCarousel_1" class="carousel slide w-60 " data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel_1" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel_1" data-slide-to="1"></li>
      <li data-target="#myCarousel_1" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner ">
      <div class="carousel-item active">
        <img src="images/lassi/Saffron Lassi.jpeg" class="curimage" alt="Saffron Lassi" >
        <div class="carousel-caption">
          <h3>Saffron Lassi</h3>
         </div>
      </div>
      <div class="carousel-item">
        <img src="images/lassi/Dry-Fruit-Lassi.webp" class="curimage" alt="Dry-Fruit-Lassi">
        <div class="carousel-caption">
          <h3>Dry Fruit Lassi</h3>
         </div>
      </div>
      <div class="carousel-item">
        <img src="images/lassi/Mango-Lassi.webp" class="curimage" alt="Mango">
        <div class="carousel-caption">
          <h3>Mango Lassi</h3>
         </div>
      </div>
      <div class="carousel-item">
        <img src="images/lassi/sweet-lassi.webp" class="curimage" alt="Sweet Lassi">
        <div class="carousel-caption">
          <h3>Sweet Lassi</h3>
         </div>
      </div>
      <div class="carousel-item">
        <img src="images/lassi/Strawberry-Lassi.jpg" class="curimage" alt="Strawberry ">
        <div class="carousel-caption">
          <h3>Strawberry Lassi</h3>
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
</div>
   <!--Coursel Ended-->
    <div class="d-flex align-items-start">

  <div class="tab-content" id="v-pills-tabContent">
    <div class="tab-pane fade show " id="Dry-FruitLassi" role="tabpanel"   tabindex="0"> 
    <h3 class="h3">Dry-Fruit Lassi</h3>

    <h5 class="h5">Ingredients:</h5>
<p>
1.1 cup plain yogurt<br>
2.1/4 cup mixed dry fruits (almonds, cashews, pistachios, raisins, etc.)<br>
3.1-2 tablespoons sugar or honey (adjust to taste)<br>
4.1/4 teaspoon cardamom powder<br>
5.A pinch of saffron strands (optional)<br>
6.A pinch of nutmeg powder (optional)<br>
7.1/2 cup milk<br>
8.Ice cubes (optional)<br></p>

<h5 class="h5">Instructions:</h5>
<p>
1.Soak the mixed dry fruits in water for about 1-2 hours to soften them. Drain the water and chop the dry fruits into small pieces.<br>

2.In a blender, combine the yogurt, soaked and chopped dry fruits, sugar or honey, cardamom powder, saffron strands, and nutmeg powder.<br>

3.Blend the mixture until smooth. If the mixture is too thick, you can add milk to achieve the desired consistency.<br>

4.Taste and adjust the sweetness according to your preference by adding more sugar or honey if needed.<br>

5.Add ice cubes if you want a chilled lassi and blend briefly again.<br>

6.Pour the dry fruit lassi into glasses and garnish with a few chopped dry fruits and a sprinkle of cardamom powder.<br>

<h5 class="h5">Uses and Benefits:</h5>

1.Healthy Beverage: Dry fruit lassi is a nutritious and energy-packed drink, making it a great option for breakfast or a midday snack. It's rich in proteins, healthy fats, vitamins, and minerals.<br>

2.Weight Gain: If you're looking to gain weight in a healthy way, dry fruit lassi can be an excellent addition to your diet due to its calorie-dense nature from the yogurt and dry fruits.<br>

3.Post-Workout Recovery: The combination of protein from yogurt and energy from dry fruits can help with muscle recovery and replenishing energy stores after a workout.<br>

4.Digestive Health: Yogurt contains probiotics that are beneficial for gut health, and the addition of cardamom can aid digestion.<br>

5.Bone Health: Dry fruits like almonds provide calcium, which is essential for maintaining strong bones.<br>

6.Antioxidant Boost: Dry fruits are rich in antioxidants, which can help protect cells from damage caused by harmful molecules called free radicals.<br>

7.Festive Treat: Dry fruit lassi can be served as a special treat during festivals and celebrations, adding a touch of richness to the occasion.<br>

8.Variations: You can customize dry fruit lassi by adding other ingredients like dates, figs, or even a scoop of protein powder for an extra protein boost.<br>
</p>
    </div>
    <div class="tab-pane fade show " id="MangoLassi" role="tabpanel"   tabindex="0">
<h3 class="h3"> Mango Lassi </h3>
<h5 class="h5">Ingredients:</h5>
<p>
1.2 ripe mangoes, peeled and pitted (or 1 to 1.5 cups of mango pulp)<br>
2.1 cup plain yogurt<br>
3.1/2 cup milk<br>
4.2-3 tablespoons sugar or honey (adjust to taste)<br>
5.A pinch of cardamom powder<br>
6.Ice cubes (optional)<br>
7.Fresh mint leaves or chopped pistachios for garnish (optional)<br>
</p>
<h5 class="h5">Instructions:</h5>
<p>
1.Cut the peeled and pitted mangoes into chunks.<br>

2.In a blender, combine the mango chunks, plain yogurt, milk, sugar or honey, and cardamom powder.<br>

3.Blend the mixture until smooth and creamy. If the lassi is too thick, you can add a bit more milk to reach the desired consistency.<br>

4.Taste and adjust the sweetness by adding more sugar or honey if needed.<br>

5,If you prefer a chilled lassi, add a few ice cubes to the blender and blend briefly.<br>

6.Pour the mango lassi into glasses and garnish with fresh mint leaves or chopped pistachios, if desired.<br>
</p>
<h5 class="h5">Uses:</h5>
<p>
1.Refreshing Beverage: Mango lassi is a fantastic way to cool down on a hot day. The natural sweetness of mangoes combined with the tanginess of yogurt makes for a refreshing and satisfying drink.<br>

2.Quick Breakfast: Mango lassi can be a great option for a quick and nutritious breakfast. It provides a good balance of carbohydrates, protein, and healthy fats.<br>

3.Post-Workout Snack: The combination of carbohydrates from mangoes and protein from yogurt makes mango lassi a suitable option for refueling after a workout.<br>

4.Kids' Favorite: Children often love the sweet and fruity taste of mango lassi, making it a healthier alternative to sugary soft drinks.<br>

5.Dessert Alternative: Mango lassi can serve as a healthier dessert option compared to calorie-laden sweets. It satisfies sweet cravings without being overly indulgent.<br>

6.Entertaining Guests: Mango lassi can be a delightful addition to your menu when hosting guests or parties. Its vibrant color and rich flavor make it an impressive choice.<br>

7.Cultural Experience: Enjoying mango lassi can provide a taste of Indian cuisine and culture, as it's a traditional beverage commonly enjoyed in India.<br>

8.Variations: You can customize mango lassi by adding a touch of saffron, a sprinkle of ground nuts, or a dash of rose water for extra flavor complexity.<br>
</p>
</div>

<div class="tab-pane fade show " id="StrawberryLassi" role="tabpanel"   tabindex="0">
<h3 class="h3"> Strawberry Lassi</h3>

<h5 class="h5">Ingredients:</h5>
<p>
1.1 cup fresh strawberries, hulled and halved<br>
2.1 cup plain yogurt<br>
3.1/2 cup milk<br>
4.2-3 tablespoons sugar or honey (adjust to taste)<br>
5.A pinch of cardamom powder<br>
6.Ice cubes (optional)<br>
7.Fresh mint leaves or sliced strawberries for garnish (optional)<br>
</p>
<h5 class="h5">Instructions:</h5>
<p>
1.Wash and hull the strawberries, then halve them.<br>

2.In a blender, combine the halved strawberries, plain yogurt, milk, sugar or honey, and a pinch of cardamom powder.<br>

3.Blend the mixture until smooth and creamy. If the lassi is too thick, add a bit more milk to achieve the desired consistency.<br>

4.Taste the strawberry lassi and adjust the sweetness by adding more sugar or honey if needed.<br>

5.If you want a chilled lassi, add a few ice cubes to the blender and blend briefly.<br>

6.Pour the strawberry lassi into glasses and garnish with fresh mint leaves or sliced strawberries, if desired.<br>
</p>
<h5 class="h5">Uses:</h5>
<p>
1.Fruity Refreshment: Strawberry lassi offers a refreshing and tangy flavor, perfect for quenching your thirst on a hot day.<br>

2.Healthy Snack: This drink is a nutritious snack option, combining the health benefits of yogurt and fresh strawberries.<br>

3.Breakfast Variation: Strawberry lassi can be a delicious and nutritious alternative to your regular breakfast routine. It provides a boost of energy to start your day.<br>

4.Afternoon Pick-Me-Up: Enjoy strawberry lassi as an afternoon refreshment to beat the midday slump and reenergize.<br>

5.Light Dessert: If you're looking for a light and guilt-free dessert option, strawberry lassi is a great choice. Its natural sweetness satisfies your sweet tooth without excessive calories.<br>

6.Kids' Favorite: Children often enjoy the vibrant color and sweet taste of strawberry lassi, making it a kid-friendly beverage.<br>

7.Brunch Addition: Serve strawberry lassi as part of a brunch spread for a touch of elegance and flavor variation.<br>

8.Get-Togethers and Parties: Strawberry lassi can be a unique and delightful addition to your party menu, impressing your guests with its vibrant color and taste.<br>

9.Customization: Feel free to experiment with additional ingredients such as a dash of vanilla extract, a pinch of cinnamon, or even a small amount of nut butter for added flavor complexity.<br>
</p>

</div>
<div class="tab-pane fade show " id="SweetLassi" role="tabpanel"   tabindex="0">
<h3 class="h3"> Sweet Lassi </h3>
<h5 class="h5">Ingredients:</h5>
<p>
1.1 cup plain yogurt<br>
2.1/2 cup milk<br>
3.2-3 tablespoons sugar (adjust to taste)<br>
4.A pinch of cardamom powder<br>
5.A pinch of saffron strands (optional)<br>
6.Crushed ice<br>
7.Chopped nuts (almonds, pistachios) for garnish (optional)<br>
8.Rose water or kewra water (optional)<br>
</p>
<h5 class="h5">Instructions:</h5>
<p>
1.In a blender, combine plain yogurt, milk, sugar, cardamom powder, and saffron strands (if using).<br>
2.Blend the mixture until it's smooth and well combined.<br>
3.Taste the sweet lassi and adjust the sweetness and thickness by adding more sugar or milk as needed.<br>
4.Add a few ice cubes to the blender and blend briefly to chill and froth the lassi.<br>
5.Pour the sweet lassi into glasses and garnish with chopped nuts.<br>
6.Optionally, you can add a few drops of rose water or kewra water to enhance the flavor of the lassi.<br>
</p>
<h5 class="h5">Uses:</h5>
<p>
1.Refreshing Beverage: Sweet lassi is a perfect drink to cool down on a hot day. The combination of yogurt and sugar provides a refreshing and satisfying experience.<br>
2.Dessert Alternative: Enjoy sweet lassi as a lighter and healthier alternative to calorie-rich desserts. It satisfies your sweet cravings without the guilt.<br>
3.Digestive Aid: The probiotics in yogurt can aid digestion, and the cardamom used in sweet lassi may have digestive benefits as well.<br>
4.Post-Meal Drink: Sweet lassi is often consumed after a meal to refresh the palate and aid in digestion.<br>
5.Special Occasions: Serve sweet lassi during festive occasions or gatherings as a special treat that reflects the cultural richness of Indian cuisine.<br>
6.Kids' Delight: Children often enjoy the sweet and creamy taste of sweet lassi. It's a great way to introduce them to the flavors of Indian cuisine.<br>
7.Energy Boost: The combination of carbohydrates from sugar and the protein in yogurt can provide a quick energy boost, making it a great option for a midday pick-me-up.<br>
8.Flavor Variations: You can experiment with flavor variations by adding fruits like mango, strawberry, or banana to create fruity sweet lassi options.<br>
</p>
</div>

<div class="tab-pane fade show " id="GreenAppleLassi" role="tabpanel"   tabindex="0">
    <h3 class="h3"> Green Apple Lassi</h3>

<h5 class="h5">Ingredients:</h5>
<p>
1.1 medium-sized green apple, peeled, cored, and chopped<br>
2.1 cup plain yogurt<br>
3.1/2 cup milk<br>
4.2-3 tablespoons honey or sugar (adjust to taste)<br>
5.A pinch of cardamom powder<br>
6.Ice cubes<br>
7.Chopped mint leaves or crushed nuts for garnish (optional)<br>
</p>
<h5 class="h5">Instructions:</h5>
<p>
Peel, core, and chop the green apple into small pieces.

1.In a blender, combine the chopped green apple, plain yogurt, milk, honey or sugar, and a pinch of cardamom powder.<br>
2.Blend the mixture until smooth and creamy. Adjust the consistency by adding more milk if needed.<br>
3.Taste the green apple lassi and adjust the sweetness by adding more honey or sugar as desired.<br>
4.Add ice cubes to the blender and blend briefly to chill the lassi.<br>
5.Pour the green apple lassi into glasses and garnish with chopped mint leaves or crushed nuts, if desired.<br>
</p>
<h5 class="h5">Uses:</h5>
<p>
1.Tart Refreshment: Green apple lassi offers a unique combination of tartness and creaminess, making it a refreshing and tangy drink.<br>
2.Nutrient Boost: Green apples are rich in vitamins and dietary fiber, adding a nutritious element to your drink.<br>
3.Digestive Aid: Both green apples and yogurt contain components that can aid digestion, making this lassi a potential choice after meals.<br>
4.Weight Management: Green apples are known for their low calorie and high fiber content, which can be helpful for those looking to manage their weight.<br>
5.Snack Replacement: Green apple lassi can serve as a satisfying and healthier alternative to calorie-dense snacks.<br>
6.Flavor Exploration: Introduce a different flavor profile to your lassi repertoire by experimenting with green apples.<br>
7.Kids' Option: Children might enjoy the slightly tangy and sweet taste of green apple lassi, making it an interesting choice for kids.<br>
8.Refreshing Break: Enjoy green apple lassi as a refreshing midday or post-workout beverage.<br>
9.Customization: Feel free to add a pinch of cinnamon, a drop of vanilla extract, or even a touch of lemon juice for extra flavor dimensions.<br>
</p></div>

<div class="tab-pane fade show " id="JeeraLassi" role="tabpanel"   tabindex="0">
<h3 class="h3"> Jeera Lassi</h3>

<h5 class="h5">Ingredients:</h3>
<p>
1.1 cup plain yogurt<br>
2.1/2 cup water<br>
3.1 teaspoon roasted cumin seeds (jeera)<br>
4.A pinch of black salt (kala namak), to taste<br>
5.A pinch of regular salt, to taste<br>
6.A pinch of black pepper, to taste<br>
7.Fresh coriander leaves for garnish (optional)<br>
7.Ice cubes<br>
</p>
<h5 class="h5">Instructions:</h5>
<p>
1.Crush the roasted cumin seeds using a mortar and pestle to release their flavor.<br>
2.In a blender, combine plain yogurt, water, crushed cumin seeds, black salt, regular salt, and black pepper.<br>
3.Blend the mixture until it's well combined and slightly frothy.<br>
4.Taste the jeera lassi and adjust the seasoning, adding more salt or spices if needed.<br>
5.Add ice cubes to the blender and blend briefly to chill the lassi.<br>
6.Pour the jeera lassi into glasses and garnish with fresh coriander leaves, if desired.<br>
</p>
<h5 class="h5">Uses:</h5>
<p>
1.Cooling Beverage: Jeera lassi is a cooling and soothing drink, making it ideal for hot weather or after spicy meals.<br>
2.Digestive Aid: Cumin seeds are known for their digestive properties. Jeera lassi can be consumed to aid digestion and alleviate digestive discomfort.<br>
3.Appetizer: Sip on jeera lassi before a meal to stimulate your appetite and prepare your digestive system for eating.<br>
4.Refreshing Break: Enjoy jeera lassi as a refreshing and hydrating drink during a midday break.<br>
5.Savory Option: If you prefer savory flavors over sweet ones, jeera lassi offers a unique taste experience.<br>
6.Cultural Experience: Embrace the flavors of Indian cuisine by trying this traditional beverage.<br>
7.Post-Workout Rehydration: The combination of yogurt and cumin can help with post-workout recovery and rehydration.<br>
8.Cumin's Health Benefits: Cumin seeds contain antioxidants and nutrients that can contribute to overall health, making jeera lassi a flavorful way to incorporate them into your diet.<br>
9.Satisfying Snack: When you're looking for a light and savory snack, jeera lassi can provide a satisfying option.<br>
</p>
</div>
<div class="tab-pane fade show " id="KiwiLassi" role="tabpanel"   tabindex="0">
<h3 class="h3"> Kiwi Lassi </h3>

<h5 class="h5">Ingredients:</h5>
<p>
1.2 ripe kiwi fruits, peeled and diced<br>
2.1 cup plain yogurt<br>
3.1/2 cup milk<br>
4.2-3 tablespoons sugar or honey (adjust to taste)<br>
5.A pinch of cardamom powder<br>
6.Ice cubes<br>
7.Fresh mint leaves or sliced kiwi for garnish (optional)<br>
</p>
<h5 class="h5">Instructions:</h5>
<p>
1.Peel the kiwi fruits and dice them into small pieces.<br>
2.In a blender, combine the diced kiwi, plain yogurt, milk, sugar or honey, and a pinch of cardamom powder.<br>
3.Blend the mixture until smooth and creamy. Adjust the consistency by adding more milk if needed.<br>
4.Taste the kiwi lassi and adjust the sweetness by adding more sugar or honey as desired.<br>
5.Add ice cubes to the blender and blend briefly to chill and froth the lassi.<br>
6.Pour the kiwi lassi into glasses and garnish with fresh mint leaves or sliced kiwi, if desired.<br>
</p>
<h5 class="h5">Uses:</h5>
<p>
1.Tropical Refreshment: Kiwi lassi offers a refreshing and exotic flavor with the goodness of yogurt and kiwi.<br>
2.Vitamin C Boost: Kiwi is a rich source of vitamin C, making kiwi lassi a nutritious way to increase your intake of this essential vitamin.<br>
3.Breakfast Variation: Swap your regular breakfast with kiwi lassi for a change of taste and a nutritious start to your day.<br>
4.Fruity Snack: Kiwi lassi can be enjoyed as a midday snack, satisfying your sweet cravings while providing essential nutrients.<br>
5.Post-Workout Replenishment: The combination of carbohydrates from kiwi and the protein in yogurt can help with muscle recovery after exercise.<br>
6.Dessert Alternative: Kiwi lassi can serve as a lighter and healthier dessert option, especially if you're looking to cut down on high-calorie sweets.<br>
7.Special Occasions: Serve kiwi lassi during gatherings or parties to impress your guests with its vibrant color and unique taste.<br>
8.Kids' Favorite: Children may enjoy the sweet and tangy taste of kiwi lassi. It's a creative way to introduce them to new flavors.<br>
9.Variation: Feel free to experiment with additional ingredients such as a touch of lime juice, a hint of vanilla extract, or a sprinkle of chia seeds for added texture and nutrients.<br>
</p>
</div>

<div class="tab-pane fade show " id="PineAppleLassi" role="tabpanel"   tabindex="0">
<h3 class="h3">Pine Apple Lassi</h3>

<h5 class="h5">Ingredients:</h5>
<p>
1.1 cup fresh pineapple chunks<br>
2.1 cup plain yogurtv
3.1/2 cup milk<br>
4.2-3 tablespoons sugar or honey (adjust to taste)<br>
5.A pinch of cardamom powder<br>
6.Ice cubes<br>
7.Fresh mint leaves or pineapple slices for garnish (optional)<br>
</p>
<h5 class="h5">Instructions:</h5>
<p>
1.Cut the fresh pineapple into small chunks.<br>
2.In a blender, combine the pineapple chunks, plain yogurt, milk, sugar or honey, and a pinch of cardamom powder.<br>
3.Blend the mixture until it's smooth and creamy. Adjust the consistency by adding more milk if needed.<br>
4.Taste the pineapple lassi and adjust the sweetness by adding more sugar or honey as desired.<br>
5.Add ice cubes to the blender and blend briefly to chill and froth the lassi.<br>
6.Pour the pineapple lassi into glasses and garnish with fresh mint leaves or pineapple slices, if desired.<br>
</p>
<h5 class="h5">Uses:</h5>
<p>
1.Tropical Refreshment: Pineapple lassi offers a taste of the tropics, perfect for hot weather or whenever you're craving something fruity and refreshing.<br>
2.Vitamin C Boost: Pineapple is rich in vitamin C, which supports immune health. Enjoying pineapple lassi can contribute to your daily vitamin C intake.<br>
3.Breakfast Variation: Incorporate pineapple lassi into your breakfast routine for a change of flavor and a burst of energy to start your day.<br>
4.Fruity Snack: Pineapple lassi makes a great midday snack that's both delicious and nutritious.<br>
5.Post-Workout Rehydration: Pineapple lassi can be enjoyed after exercise to rehydrate and replenish energy stores.<br>
6.Dessert Alternative: Opt for pineapple lassi as a lighter and healthier dessert option, satisfying your sweet tooth without excess calories.<br>
7.Special Occasions: Serve pineapple lassi during special occasions or gatherings to bring a tropical flair to your menu.<br>
8.Kids' Treat: Children might enjoy the sweet and tangy taste of pineapple lassi, making it a fun way to introduce them to new flavors.<br>
9.Customization: Feel free to add a hint of coconut milk, a dash of lime juice, or a sprinkle of toasted coconut flakes for extra tropical flavor.<br>
</p>
</div>
<div class="tab-pane fade show " id="PistaLassi" role="tabpanel"   tabindex="0">
<h3 class="h3"> Pista Lassi</h3>
<h5 class="h5">Ingredients:</h5>
<p>
1.1/4 cup shelled pistachios, unsalted and unsweetened<br>
2.1 cup plain yogurt<br>
3.1/2 cup milk<br>
4.2-3 tablespoons sugar or honey (adjust to taste)<br>
5.A pinch of cardamom powder<br>
6.A few saffron strands (optional)<br>
7.Crushed pistachios for garnish<br>
8.Ice cubes<br>
</p>
<h5 class="h5">Instructions:</h5>
<p>
1.Soak the shelled pistachios in warm water for about 30 minutes. This will help in easier blending and grinding.<br>
2.Drain the soaked pistachios and add them to a blender.<br>
3.Add plain yogurt, milk, sugar or honey, cardamom powder, and saffron strands (if using) to the blender.<br>
4.Blend the mixture until smooth and creamy. Adjust the consistency with more milk if needed.<br>
5.Taste the pista lassi and adjust the sweetness with more sugar or honey as desired.<br>
6.Add ice cubes to the blender and blend briefly to chill and froth the lassi.<br>
7.Pour the pista lassi into glasses and garnish with crushed pistachios on top.<br>
</p>
<h5 class="h5">Uses:</h5>
<p>
1.Nutty Indulgence: Pista lassi provides a unique nutty flavor from pistachios, making it a delicious treat for pistachio lovers.<br>
2.Protein Boost: Pistachios are a good source of protein, adding to the overall nutritional value of pista lassi.<br>
3.Post-Workout Recovery: Enjoy pista lassi after a workout to replenish energy and provide your body with essential nutrients.<br>
4.Special Occasions: Serve pista lassi during festive occasions or gatherings to impress guests with its distinct flavor and appearance.<br>
5.Guilt-Free Dessert: Sip on pista lassi as a healthier dessert option compared to calorie-dense sweets.<br>
6.Texture Variation: The crushed pistachios on top of the lassi add a delightful crunch and extra pistachio flavor.<br>
7.Saffron Infusion: The optional saffron strands not only enhance the color but also add a touch of luxury to the lassi.<br>
8.Customization: You can experiment with adding a hint of rose water or a pinch of ground cardamom for extra flavor complexity.<br>
</p>
</div>

<div class="tab-pane fade show " id="SaffronLassi" role="tabpanel"   tabindex="0">
<h3 class="h3"> Saffron Lassi </h3>
<h5 class="h5">Ingredients:</h5>
<p>
1.1 cup plain yogurt<br>
2.A pinch of saffron strands<br>
3.2-3 tablespoons warm milk<br>
4.2-3 tablespoons sugar (adjust to taste)<br>
5.1/4 teaspoon cardamom powder<br>
6.Chopped nuts for garnishing (like almonds, pistachios)<br>
7.Crushed ice (optional)<br>
</p>
<h5 class="h5">Instructions:</h5>
<p>
1.In a small bowl, soak the saffron strands in warm milk. This helps to release the color and flavor of saffron.<br>
2.In a blender, combine the yogurt, soaked saffron with milk, sugar, and cardamom powder.<br>
3.Blend the mixture until it becomes smooth and well combined.<br>
4.If you prefer a thinner consistency, you can add some chilled water or milk and blend again.<br>
5.Taste and adjust the sweetness according to your preference by adding more sugar if needed.<br>
6.Once the lassi is ready, pour it into serving glasses.<br>
7.If using, add crushed ice on top for an extra chill.<br>
8.Garnish with chopped nuts like almonds and pistachios.<br>
</p>
<h5 class="h5">Uses:</h5>
<p>
1.Refreshing Drink: Saffron lassi is a cooling and refreshing drink, perfect for hot summer days. The creamy and soothing texture of yogurt combined with the aromatic saffron makes it a great thirst quencher.<br>
2.Festive Occasions: Saffron lassi is often served during festive occasions and celebrations due to its rich and indulgent nature. It adds a touch of luxury to special gatherings.<br>
3.Digestive Aid: Yogurt-based drinks like lassi are known for their probiotic content, which can be beneficial for digestion and gut health. Saffron lassi can be enjoyed after a meal to aid digestion.<br>
4.Nutrient Boost: Yogurt is a good source of protein, calcium, and other essential nutrients. Adding saffron to the lassi provides additional antioxidants and potential health benefits.<br>
5.Mood Enhancer: Saffron is known for its potential mood-enhancing properties. It contains compounds that may positively influence mood and reduce stress. Enjoying saffron lassi could provide a soothing and comforting experience.<br>
6.Culinary Delight: Saffron lassi can be considered a culinary delight due to its unique combination of flavors and ingredients. It's a way to explore the blend of saffron, cardamom, and nuts in a delicious drink.<br>
</p>
</div>
<div class="tab-pane fade show " id="CoconutLassi" role="tabpanel"   tabindex="0">
<h3 class="h3"> Coconut Lassi</h3>
<h5 class="h5">Ingredients:</h5>
<p>
1.1 cup coconut milk<br>
2.1/2 cup plain yogurt<br>
3.2-3 tablespoons sugar (adjust to taste)<br>
4.A pinch of cardamom powder<br>
5.Crushed ice (optional)<br>
6.Chopped fresh coconut or toasted coconut flakes for garnishing<br>
</p>
<h5 class="h5">Instructions:</h5>
<p>
1.In a blender, combine the coconut milk, plain yogurt, sugar, and cardamom powder.<br>
2.Blend the mixture until it becomes smooth and well combined.<br>
3.Taste and adjust the sweetness as needed by adding more sugar.<br>
4.If you prefer a thinner consistency, you can add a little water or more coconut milk.<br>
5.Once the lassi is ready, pour it into serving glasses.<br>
6.If desired, add crushed ice on top for an extra cooling effect.<br>
7.Garnish with chopped fresh coconut or toasted coconut flakes.<br>
</p>
<h5 class="h5">Uses:</h5>
<p>
1.Tropical Refreshment: Coconut lassi is a fantastic choice for a refreshing drink, especially on warm days. The natural sweetness and creamy texture of coconut milk combined with yogurt make it a tropical treat.<br>
2.Dairy-Free Option: Coconut lassi can be an excellent option for individuals who are lactose intolerant or prefer dairy-free beverages. Coconut milk provides creaminess without the need for regular dairy yogurt.<br>
3.Post-Workout Drink: Coconut milk is a good source of electrolytes like potassium and magnesium, making coconut lassi a potential post-workout rehydration option. The combination of coconut and yogurt can aid in recovery and provide essential nutrients.<br>
4.Healthy Fats: Coconut milk contains healthy fats, including medium-chain triglycerides (MCTs), which can have various health benefits. Enjoying coconut lassi occasionally can be a way to incorporate these beneficial fats into your diet.<br>
5.Dessert Alternative: Coconut lassi's natural sweetness can satisfy your sweet cravings in a healthier way compared to sugary desserts. It's a lighter option that still feels indulgent.<br>
6.Culinary Experimentation: Just like traditional lassi, coconut lassi can be customized by adding flavors like saffron, mango, or even a pinch of turmeric for a vibrant and nutritious twist.<br>
7.Special Occasions: Coconut lassi can be served at special gatherings, brunches, or themed parties to provide a unique and memorable drink option.<br>
</p>
</div>

<div class="tab-pane fade show " id="ChocolateLassi" role="tabpanel"   tabindex="0">
<h3 class="h3"> Chocolate Lassi </h3>
<h5 class="h5">Ingredients:</h5>
<p>
1.1 cup plain yogurt<br>
2.2-3 tablespoons cocoa powder<br>
3.2-3 tablespoons sugar (adjust to taste)<br>
4.1/2 teaspoon vanilla extract<br>
5.A pinch of salt<br>
6.Crushed ice (optional)<br>
7.Whipped cream and chocolate shavings for garnishing<br>
</p>
<h5 class="h5">Instructions:</h5>
<p>
1.In a blender, combine the plain yogurt, cocoa powder, sugar, vanilla extract, and a pinch of salt.<br>
2.Blend the mixture until the cocoa powder is fully incorporated and the lassi becomes smooth and creamy.<br>
3.Taste and adjust the sweetness as desired by adding more sugar.<br>
4.If you prefer a thinner consistency, you can add a little milk or water and blend again.<br>
5.Once the chocolate lassi is ready, pour it into serving glasses.<br>
6.If desired, add crushed ice on top for an extra chill.<br>
7.Garnish with a dollop of whipped cream and some chocolate shavings.<br>
</p>
<h5 class="h5">Uses:</h5>
<p>
1.Dessert Beverage: Chocolate lassi can be enjoyed as a dessert in a glass. Its rich and chocolaty flavor makes it a satisfying alternative to traditional desserts.<br>
2.Treat for Chocolate Lovers: If you're a fan of chocolate, this lassi provides a unique way to indulge your chocolate cravings while still benefiting from the probiotics in yogurt.<br>
3.Special Occasions: Chocolate lassi can be served at parties, celebrations, or special occasions as a luxurious and memorable drink option.<br>
4.Post-Exercise Recovery: While it's indulgent, chocolate lassi can be enjoyed occasionally as a post-exercise treat, providing a combination of carbohydrates and protein for recovery.<br>
5.Kids' Delight: Children often love chocolate-flavored treats. Chocolate lassi can be a fun and relatively nutritious option for kids' snacks or meals.<br>
6.Variation on Classics: Just as with traditional lassi, you can experiment with chocolate lassi by adding spices like cinnamon or a hint of nutmeg to enhance the flavor even further.<br>
7.Creative Toppings: Garnish your chocolate lassi with various toppings like crushed nuts, chocolate chips, or a drizzle of chocolate sauce for extra texture and visual appeal.<br>
8.Date Nights: Surprise your loved ones with a homemade chocolate lassi as a special treat for date nights or cozy evenings at home.<br>
</p>
</div>
    </div>
  </div>
</div>
    </div>
    <script src="Matter.js">
       
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
            <a href="Home1.php" class="text-reset">Home</a>
          </p>
          <p>
            <a href="About Us.php" class="text-reset">About us</a>
          </p>
          <p>
            <a href="contact_us.php" class="text-reset">Contact us</a>
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
 