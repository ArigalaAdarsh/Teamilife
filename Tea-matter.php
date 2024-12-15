<?php   include "Profileview.php" ?>

<?php include "Nav bar.php" ?>
<?php include "Chatty.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tea Menu</title>
  <!-- Include Bootstrap CSS -->
  <link rel="stylesheet" href="Matter.css">
  <?php include "scripts.php" ?>

      
 </head>
<body>
  <div class="row">
  <div class="col-sm-2 d-none d-sm-block" style="background-color:#8699f7">
 <div class="d-flex align-items-start">
  <div class="nav flex-column  me-3" id="myTabs"  role="tablist" aria-orientation="vertical">
    <button class="nav-link "   data-bs-toggle="pill" data-bs-target="#LemonChai" type="button" role="tab" >Lemon Chai</button>
    <button class="nav-link"   data-bs-toggle="pill" data-bs-target="#TandooriChai" type="button" role="tab"  >Tandoori Chai</button>
    <button class="nav-link"  data-bs-toggle="pill" data-bs-target="#PaanChai" type="button" role="tab"  >Paan Chai</button>
    <button class="nav-link"   data-bs-toggle="pill" data-bs-target="#MasalaChai" type="button" role="tab">Masala Chai</button>
    <button class="nav-link"   data-bs-toggle="pill" data-bs-target="#Elachi" type="button" role="tab" >Elachi</button>
    <button class="nav-link"   data-bs-toggle="pill" data-bs-target="#LemonJaggeryChai" type="button" role="tab" >Lemon Jaggery Chai</button>
    <button class="nav-link"  data-bs-toggle="pill" data-bs-target="#GingerChai" type="button" role="tab"  >Ginger Chai</button>
    <button class="nav-link"  data-bs-toggle="pill" data-bs-target="#FilterCoffee" type="button" role="tab"  >Filter Coffee</button>
    <button class="nav-link"   data-bs-toggle="pill" data-bs-target="#OrganicBellamChai" type="button" role="tab" >Organic Bellam Chai</button>
    <button class="nav-link"   data-bs-toggle="pill" data-bs-target="#OrganicBellamCoffee" type="button" role="tab"  >Organic Bellam Coffee</button>
    <button class="nav-link"   data-bs-toggle="pill" data-bs-target="#ThatiBellamChai" type="button" role="tab" >Thati Bellam Chai</button>
    <button class="nav-link"   data-bs-toggle="pill" data-bs-target="#ThatiBellamCoffee" type="button" role="tab" >Thati Bellam Coffee</button>

    
  </div>
  </div>
  </div>
   <div class="col-sm-2 d-lg-none">
 <div class="d-flex align-items-start"   >
  <div class="nav flex-column  me-3" id="myTabs"  role="tablist" aria-orientation="vertical">
    <button class="nav-link "   data-bs-toggle="pill" data-bs-target="#LemonChai" type="button" role="tab" >Lemon Chai</button>
    <button class="nav-link"   data-bs-toggle="pill" data-bs-target="#TandooriChai" type="button" role="tab"  >Tandoori Chai</button>
    <button class="nav-link"  data-bs-toggle="pill" data-bs-target="#PaanChai" type="button" role="tab"  >Paan Chai</button>
    <button class="nav-link"   data-bs-toggle="pill" data-bs-target="#MasalaChai" type="button" role="tab">Masala Chai</button>
    <button class="nav-link"   data-bs-toggle="pill" data-bs-target="#Elachi" type="button" role="tab" >Elachi</button>
    <button class="nav-link"   data-bs-toggle="pill" data-bs-target="#LemonJaggeryChai" type="button" role="tab" >Lemon Jaggery Chai</button>
    <button class="nav-link"  data-bs-toggle="pill" data-bs-target="#GingerChai" type="button" role="tab"  >Ginger Chai</button>
    <button class="nav-link"  data-bs-toggle="pill" data-bs-target="#FilterCoffee" type="button" role="tab"  >Filter Coffee</button>
    <button class="nav-link"   data-bs-toggle="pill" data-bs-target="#OrganicBellamChai" type="button" role="tab" >Organic Bellam Chai</button>
    <button class="nav-link"   data-bs-toggle="pill" data-bs-target="#OrganicBellamCoffee" type="button" role="tab"  >Organic Bellam Coffee</button>
    <button class="nav-link"   data-bs-toggle="pill" data-bs-target="#ThatiBellamChai" type="button" role="tab" >Thati Bellam Chai</button>
    <button class="nav-link"   data-bs-toggle="pill" data-bs-target="#ThatiBellamCoffee" type="button" role="tab" >Thati Bellam Coffee</button>


  </div>
  <div class="vr border-2" style="height:750px;margin-left:-30px" ></div>

  </div>
   </div>
  <div class="col-sm-10">
  
    <div id="tabimage">
    <h4 class="heading4" align="center"  style="margin-top:50px;color:#46055d;font-family: Arial, Helvetica, sans-serif;">Welcome To Chai Section</h4>
    <img src="images/man.png" class="image4 d-lg-none" alt="Man" >
    </div>
       <!--Corousel For first InterFace it will hide after nav tabs clicking"-->
       <div id="tabimage1">
    <div class="container d-none d-sm-block ">

     <div style="margin-top:70px;" align="center">
       <div id="myCarousel_1" class="carousel slide w-60 " data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel_1" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel_1" data-slide-to="1"></li>
      <li data-target="#myCarousel_1" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner ">
      <div class="carousel-item active">
        <img src="images/Teas/Thati Bellam Chai.jpg" class="curimage" alt="Thati Bellam Chai" >
        <div class="carousel-caption">
          <h3>Thati Bellam Chai</h3>
         </div>
      </div>
      <div class="carousel-item">
        <img src="images/Teas/Ginger Tea.jpg" class="curimage" alt="Ginger Tea">
        <div class="carousel-caption">
          <h3>Ginger Tea</h3>
         </div>
      </div>
      <div class="carousel-item">
        <img src="images/Teas/jaggery-tea-1674470614.jpg" class="curimage" alt="Jaggery Tea">
        <div class="carousel-caption">
          <h3>Jaggery Tea</h3>
         </div>
      </div>
      <div class="carousel-item">
        <img src="images/Teas/Masala Chai.jpg" class="curimage" alt="Masala Chai">
        <div class="carousel-caption">
          <h3>Masala Chai</h3>
         </div>
      </div>
      <div class="carousel-item">
        <img src="images/Teas/Paan Chai.png" class="curimage" alt="Paan Chai">
        <div class="carousel-caption">
          <h3>Paan Chai</h3>
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
    <div class="tab-pane fade show activesss" id="LemonChai" role="tabpanel"   tabindex="0"> 
    <h3 class="h3">Lemon Chai</h3>

<h5 class="h5">Ingredients:</h5>
<p>
    1.Water: 1 cup<br>
    2.Black tea leaves or tea bags: 1-2 teaspoons or 1 bag<br>
    3.Fresh lemon juice: from half a lemon (adjust to taste)<br>
    4.Lemon zest: a few strips (optional)<br>
    5.Sugar or honey: to taste<br>
    6.Spices (optional): You can add  a pinch of cinnamon, cardamom, ginger, or cloves for extra flavor.<br><br>
    1.Boil water in a kettle or saucepan.<br>
    2.Once the water is boiling, add the tea leaves or tea bag and any desired spices.<br>
    3.Let the tea steep for 3-5 minutes, or as per your preference, to allow the flavors to develop.<br>
    4.Remove the tea leaves or tea bag and spices.<br>
    5.Add fresh lemon juice and lemon zest to the tea. Adjust the amount of lemon juice based on your taste preference.<br>
    6.Sweeten the tea with sugar or honey to your liking. Stir until the sweetener is dissolved.<br>
    7.Pour the lemon chai into cups and serve hot.<br></p>
<h5 class="h5">Instructions:</h5>



<h5 class="h5">Uses and Benefits:</h5>

  <p>  1.Refreshing Drink: Lemon chai is a fantastic way to refresh and rejuvenate yourself, especially on a hot day or when you need a pick-me-up.<br>

    2.Digestive Aid: Lemon has natural digestive properties, and when combined with tea, it can help soothe the stomach and aid digestion.<br>

    3.Boosts Immunity: Lemon is a good source of Vitamin C, which is known to boost the immune system. Combined with the antioxidants present in tea,  lemon chai can provide a mild immunity boost.<br>

    4.Sore Throat Relief: The warmth of the tea and the soothing properties of lemon can provide relief to a sore throat and help alleviate discomfort.<br>

    5.Aids Weight Management: Lemon chai can be a low-calorie and flavorful alternative to sugary beverages. Lemon is believed to support weight loss due to its potential role in metabolism and detoxification.<br>

    6.Antioxidant Benefits: Both tea and lemon are rich in antioxidants, which can help combat free radicals and reduce oxidative stress in the body.<br>

    7.Stress Relief: The act of preparing and sipping on a warm cup of lemon chai can have a calming and stress-relieving effect.<br>
</p>
    </div>

    <div class="tab-pane fade" id="TandooriChai" role="tabpanel"   tabindex="0">


<h3 class="h3">Tandoori Chai</h3>


<h5 class="h5">Ingredients:</h5>
<p>
    1.Water: 2 cups<br>
    2.Black tea leaves or tea bags: 2-3 teaspoons or 2-3 bags.<br>
    3.Milk: cup (adjust to taste).<br>
    4.Sugar or sweetener: to taste.<br>
    5.Spices (optional): You can add a pinch of cardamom, cinnamon, or ginger for extra flavor.<br>
    6.Tandoor: Clay oven for the smoky flavor.<br></p>

<h5 class="h5">Instructions:</h5>
  <p>1.Boil the water in a kettle or saucepan.<br>
    2.Once the water is boiling, add the tea leaves or tea bags and any desired spices.<br>
    3.Let the tea steep for 3-5 minutes, or as per your preference.<br>
    4.In a separate pot, heat the milk. You can heat it on the stove or use a microwave. Be careful not to let it boil over.<br>
    5.Mix the steeped tea and hot milk in the desired proportions. Adjust the ratio of tea to milk based on your taste preference.<br>
    6.Sweeten the chai with sugar or sweetener to your liking. Stir until the sweetener is dissolved.<br></p>
 

<h5 class="h5">Tandoor Process:</h5>
<p>
    1.Prepare the tandoor by heating it and allowing it to reach a moderate temperature. The goal is to impart a smoky flavor to the tea, so you don't want it to be too hot.<br>
    2.Place the prepared tea cups inside the tandoor.<br>
    3.Close the tandoor and let the tea cups sit inside for a few minutes, allowing the smoky aroma to infuse into the chai.<br>
    4.Carefully remove the tea cups from the tandoor using tongs or oven mitts.<br>
</p>
<h5 class="h5">Uses and Benefits:</h5>

    <p>1.Smoky Flavor: The tandoor imparts a unique smoky and earthy flavor to the chai, creating a distinct taste that's different from regular chai.<br>

    2.Experience: Tandoor chai offers a novel way of enjoying tea, making it a memorable experience for yourself and your guests.<br>

    3.Aromatic and Warming: The combination of spices, milk, and the smoky aroma makes tandoor chai a warming and aromatic beverage, perfect for colder weather.<br>

    4.Social Gathering: Tandoor chai can be a wonderful addition to social gatherings, parties, or special occasions, where the preparation process can become a conversation starter.<br>

    5.Cultural Connection: Tandoor chai connects with Indian culinary traditions, adding cultural depth to your tea-drinking experience.<br>

    6.Comfort and Relaxation: Just like regular chai, tandoor chai offers a comforting and soothing effect, making it a great beverage to enjoy while relaxing.<br>
</p>
    </div>
    <div class="tab-pane fade" id="PaanChai" role="tabpanel"   tabindex="0">

    <h3 class="h3">Paan Chai</h3>



<h5 class="h5">Ingredients:</h5>

   <p> 1.Water: 2 cups<br>
    2.Black tea leaves or tea bags: 2-3 teaspoons or 2-3 bags<br>
    3.Milk: 1 cup (adjust to taste)<br>
    4.Sugar or sweetener: to taste<br>
    5.Betel leaves (paan leaves): 2-3 leaves, washed and torn into pieces<br>
    6.Fennel seeds: 1/2 teaspoon<br>
    7.Cardamom pods: 2-3 pods, crushed<br>
    8.Optional: A pinch of slaked lime (chuna) for an authentic touch<br></p>

<h5 class="h5">Instructions:</h5>

  <p>  1.Boil the water in a kettle or saucepan.<br>
    2.Once the water is boiling, add the tea leaves or tea bags and any desired spices (cardamom pods).<br>
    3.Let the tea steep for 3-5 minutes, or as per your preference.<br>
    4.In a separate pot, heat the milk. You can heat it on the stove or use a microwave. Be careful not to let it boil over.<br>
    5.While the milk is heating, add torn betel leaves, fennel seeds, and optionally, a pinch of slaked lime (chuna) to the tea.<br>
    6.Mix the steeped tea and hot milk in the desired proportions. Adjust the ratio of tea to milk based on your taste preference.<br>
    7.Sweeten the chai with sugar or sweetener to your liking. Stir until the sweetener is dissolved.<br></p>

<h5 class="h5">Uses and Benefits:</h5>
<p>
    1.Unique Flavor: Paan chai offers a distinctive flavor profile that combines the earthy, aromatic notes of betel leaves with the richness of chai.<br>

    2.Aromatic Experience: The combination of betel leaves, fennel seeds, and cardamom pods creates a fragrant and aromatic beverage that engages your senses.<br>

    3.Digestive Benefits: Fennel seeds and cardamom are often used for their digestive properties, making paan chai potentially soothing after a meal.<br>

    4.Cultural Connection: Paan is deeply rooted in Indian culture and traditions. Paan chai allows you to experience a fusion of flavors that pay homage to this cultural element.<br>

    5.Conversation Starter: Serving paan chai at gatherings or events can be an interesting conversation starter, as it's a unique and lesser-known variation of chai.<br>

    6.Relaxation and Comfort: Like traditional chai, paan chai offers a comforting and relaxing effect, making it a great choice to unwind.<br>

    7.Herbal Infusion: Betel leaves are known for their potential health benefits, including antioxidant properties, which can complement the tea's antioxidants.<br>
</p></div>
    <div class="tab-pane fade" id="MasalaChai" role="tabpanel"   tabindex="0">
 
    <h3 class="h3">Masala Chai</h3>


<h5 class="h5"> Ingredients:</h5>

  <p>  1.Water: 1 cup<br>
    2.Milk: 1 cup<br>
    3.Black tea leaves or tea bags: 2-3 teaspoons or 2-3 bags<br>
    4.Sugar or sweetener: to taste<br>
    5.Spices: You can use a combination of the following spices to make your masala chai. Adjust the quantities based on your taste preference:<br>
        &nbsp &nbsp I.Cardamom pods: 2-3 pods, crushed<br>
        &nbsp &nbsp II.Cinnamon stick: 1 small stick<br>
        &nbsp &nbsp III.Cloves: 2-3 cloves<br>
        &nbsp &nbsp IV.Ginger: 1 small piece, grated or sliced<br>
        &nbsp &nbsp V.Black peppercorns: 3-4 peppercorns<br>
        &nbsp &nbsp VI.Star anise: 1 small piece (optional)<br></p>

  <h5 class="h5">Instructions:</h5>
<p>
    1.Crush the whole spices (cardamom pods, cloves, cinnamon stick, black peppercorns) slightly to release their flavors.<br>
    2.In a saucepan, add water and the crushed spices. Bring it to a boil.<br>
    3.Once the water is boiling, add the black tea leaves or tea bags. Let it simmer for a few minutes.<br>
    4.Add milk to the mixture and let it come to a gentle boil.<br>
    5.Reduce the heat and let the tea simmer for a few more minutes, allowing the flavors to meld together.<br>
    6.Remove the saucepan from the heat and strain the tea into cups to remove the tea leaves and spices.<br>
    7.Sweeten the chai with sugar or sweetener to your liking. Stir until the sweetener is dissolved.<br>
</p>
  <h5 class="h5">Uses and Benefits:</h5>
<p>
    1.Rich Flavor: Masala chai is known for its rich and complex flavor profile, combining the boldness of black tea with the warmth of spices.<br>

    2.Aromatic Experience: The blend of spices like cardamom, cinnamon, and cloves creates an aromatic and soothing experience as you enjoy your chai.<br>

    3.Digestive Benefits: The spices used in masala chai, such as ginger and cardamom, are believed to have digestive properties that can aid in digestion and provide comfort.<br>

    4.Energy Boost: The caffeine content from the black tea provides a gentle energy boost, making masala chai a great morning or afternoon beverage.<br>

    5.Cultural Connection: Masala chai is deeply ingrained in Indian culture and is often shared among friends and family as a gesture of hospitality and togetherness.<br>

    6.Warmth and Comfort: The combination of spices and warmth from the tea can be soothing and comforting, making masala chai a wonderful choice on chilly days.<br>

    7.Variety of Spices: You can adjust the spice blend to your liking, adding more of your favorite spices or experimenting with different combinations.<br>

    8.Customization: Masala chai is versatile; you can adjust the milk-to-water ratio, sweetness level, and spice intensity based on your preferences.<br>
    </div>
    <p>

    <div class="tab-pane fade" id="Elachi" role="tabpanel"   tabindex="0">
    <h3 class="h3">Elachi Chai</h3>

<h5 class="h5">Ingredients:</h5>

   <p> 1.Water: 1 cup<br>
    2.Milk: 1 cup<br>
    3.Loose black tea leaves or tea bags: 2-3 teaspoons or 2 bags<br>
    4.Cardamom pods: 2-3, crushed slightly to release the flavor<br>
    5.Sugar or sweetener: to taste (optional)<br>
<p>
<h5 class="h5">Instructions:</h5>

  <p>  1.Boil Water and Milk: In a saucepan, bring the water to a boil. Add the crushed cardamom pods and black tea leaves or tea bags. Let it simmer for a few minutes.<br>

    2.Add Milk: Add the milk to the saucepan and let the mixture simmer for another 2-3 minutes. Keep an eye on the mixture to prevent it from boiling over.<br>

    3.Sweeten: If desired, add sugar or sweetener to taste. Stir well to dissolve the sugar.<br>

    4.Strain and Serve: Using a strainer, pour the prepared elachi chai into cups. This will help remove the tea leaves and cardamom pods. Serve hot.<br>
</p>
<h5 class="h5">Uses and Benefits:</h5>

  <p>  1.Beverage: The primary use of elachi chai is as a soothing and flavorful beverage. It's often enjoyed in the morning or as an afternoon pick-me-up.<br>

    2.Digestive Aid: Cardamom is believed to aid digestion and reduce bloating. Drinking elachi chai after a meal may help with digestion.<br>

    3.Aromatic Experience: The addition of cardamom gives elachi chai a pleasant and aromatic fragrance, enhancing the overall sensory experience of drinking tea.<br>

    4.Culinary Ingredient: Elachi chai's unique flavor can be used as an ingredient in various desserts, such as cardamom-flavored cakes, cookies, and ice creams.<br>

    5.Cold Elachi Chai: You can also prepare a cold version of elachi chai by allowing the brewed tea to cool down and then adding ice cubes. Cold elachi chai can be a refreshing beverage during hot weather.<br>

    6.Special Occasions: Elachi chai can be served to guests during special occasions as a warm and welcoming gesture, often accompanied by snacks or sweets.<br>

    7.Health Benefits: Cardamom is believed to have potential health benefits, including antioxidant properties and potential anti-inflammatory effects. While elachi chai may not offer a highly concentrated dose of cardamom's benefits, it can be a flavorful way to incorporate this spice into your diet.<br>
</p>
    </div>

    <div class="tab-pane fade" id="LemonJaggeryChai" role="tabpanel"   tabindex="0">
    
    <h3 class="h3">Lemon Jaggery Chai</h3>

<h5 class="h5">Ingredients:</h5>

  <p>  1.Water: 1 cup<br>
    2.Milk: 1 cup<br>
    3.Black tea leaves or tea bags: 2-3 teaspoons or 2-3 bags<br>
    4.Jaggery: 1-2 tablespoons (adjust to taste)<br>
    5.Fresh lemon juice: from half a lemon (adjust to taste)<br>
    6.Lemon zest: a few strips (optional)<br>
    7.Spices (optional): You can add a pinch of cardamom, cinnamon, or ginger for extra flavor.<br></p>

<h5 class="h5">Instructions:</h5>
<p>
    1.Boil water in a kettle or saucepan.<br>
    2.Once the water is boiling, add the black tea leaves or tea bags and any desired spices.<br>
    3.Let the tea steep for 3-5 minutes, or as per your preference.<br>
    4.In a separate pot, heat the milk. You can heat it on the stove or use a microwave. Be careful not to let it boil over.<br>
    5.Remove the tea leaves or tea bags and spices from the steeped tea.<br>
    6.Add jaggery to the tea and stir until it's dissolved.<br>
    7.Mix the steeped tea and hot milk in the desired proportions. Adjust the ratio of tea to milk based on your taste preference.<br>
    8.Add fresh lemon juice and lemon zest to the tea. Adjust the amount of lemon juice based on your taste preference.<br>
    9.Stir well to combine all the flavors.<br></p>

  <h5 class="h5">Uses and Benefits:</h5>
<p>
    1.Natural Sweetness: Jaggery provides a natural and earthy sweetness to the tea without the need for refined sugar.<br>

    2.Tangy and Refreshing: The addition of lemon juice and zest adds a tangy and refreshing twist to the traditional chai flavor.<br>

    3.Digestive Properties: Lemon and jaggery are both known for their potential digestive benefits, making this combination soothing for the stomach.<br>

    4.Vitamin C Boost: Lemon is rich in Vitamin C, which can help support the immune system.<br>

    5.Warmth and Comfort: The combination of spices, warmth, and natural sweetness creates a comforting and soothing beverage.<br>

    6.Culinary Adventure: Lemon jaggery chai offers a unique flavor profile that can introduce you to new taste experiences.<br>

    7.Hydration: Lemon jaggery chai can be enjoyed as a hydrating alternative to plain water.<br>

    8.Anti-Inflammatory Properties: Jaggery is believed to possess anti-inflammatory properties due to the presence of certain minerals<br>
    </div>
</p>

    <div class="tab-pane fade" id="GingerChai" role="tabpanel"   tabindex="0">
    <h3 class="h3">Ginger Chai</h3>

  <h5 class="h5">Ingredients:</h5>
<p>
    1.Water: 1 cup<br>
    2.Milk: 1 cup<br>
    3.Black tea leaves or tea bags: 2-3 teaspoons or 2-3 bags<br>
    4.Fresh ginger: 1-inch piece, grated or sliced<br>
    5.Sugar or sweetener: to taste<br>
    6.Spices (optional): You can add a pinch of cardamom, cinnamon, or cloves for extra flavor.<br></p>

  <h5 class="h5">Instructions:</h5>
<p>
    1.In a saucepan, add water and grated or sliced ginger.<br>
    2.Bring the water to a boil and let the ginger simmer for about 5 minutes to infuse its flavor.<br>
    3.Add the black tea leaves or tea bags to the ginger-infused water.<br>
    4.Let the tea steep for 3-5 minutes, or as per your preference.<br>
    5.In a separate pot, heat the milk. You can heat it on the stove or use a microwave. Be careful not to let it boil over.<br>
    6.Remove the tea leaves or tea bags from the steeped tea.<br>
    7.Mix the steeped tea and hot milk in the desired proportions. Adjust the ratio of tea to milk based on your taste preference.<br>
    8.Sweeten the chai with sugar or sweetener to your liking. Stir until the sweetener is dissolved.<br></p>

  <h5 class="h5">Uses and Benefits:</h5>

  <p>  1.Digestive Aid: Ginger is well-known for its digestive properties. Ginger chai can help soothe the stomach and alleviate discomfort.<br>

    2.Anti-Inflammatory: Ginger contains compounds with potential anti-inflammatory effects, which can be beneficial for overall health.<br>

    3.Warm and Comforting: Ginger chai's warmth can provide comfort and relaxation, making it an ideal choice during colder weather or when you're feeling under the weather.<br>

    4.Immune Support: Ginger is believed to have immune-boosting properties, which can contribute to overall well-being.<br>

    5.Flavorful Twist: Ginger adds a spicy and zesty flavor to the chai, enhancing its taste profile.<br>

    6.Energy Boost: The caffeine in black tea provides a gentle energy boost, making ginger chai a good choice for mornings or afternoons.<br>

    7.Customizable: You can adjust the amount of ginger to achieve your preferred level of spiciness.<br>

    8.Hydration: Ginger chai can be a hydrating alternative to plain water.<br><p>
    </div>
    <div class="tab-pane fade" id="FilterCoffee" role="tabpanel"   tabindex="0">
    <h3 class="h3">Filter Coffee</h3>

<h5 class="h5"> Ingredients:</h5>

   <p> 1.Freshly roasted coffee beans (medium to coarse grind)<br>
    2.Coffee filter or "drip" filter apparatus<br>
    3.Coffee decoction (concentrated coffee extract)<br>
    4.Milk (optional)<br>
    5.Sugar (optional)<br></p>

<h5 class="h5">Instructions:</h5>

   <p> 1,Grind the Coffee: Grind your coffee beans to a medium to coarse consistency. The grind should be coarser than what you would use for espresso.<br>

    2.Prepare the Filter: Place the coffee filter on top of the bottom container of the drip filter apparatus. Add the ground coffee into the upper container of the filter.<br>

    3.Assemble the Filter: Gently press down on the coffee grounds to level them. Attach the top container of the filter, ensuring that the coffee grounds are evenly distributed.<br>

    4.Boil Water: Boil water separately in a kettle or water heater. The water should be at the right temperature, which is usually just off the boil (around 195-205°F or 90-96°C).<br>

    5.Pour Water: Slowly pour the hot water over the coffee grounds in the upper container of the filter. The water will pass through the coffee and drip down into the bottom container.<br>

    6.Collect Decoction: Allow the water to drip through the coffee grounds and collect in the bottom container. This collected liquid is the coffee decoction, which is a concentrated coffee extract.<br>

    7.Serve: In a cup, mix the desired amount of coffee decoction with hot milk and sugar to taste. Traditionally, the decoction is mixed with milk and frothed vigorously to create a creamy top layer.<br>
</p>
<h5 class="h5">Uses and Benefits:</h5>
<p>
    1.Beverage: The primary use of filter coffee is as a beverage. It's enjoyed for its rich flavor, aroma, and smoothness. The coffee decoction can be mixed with milk and sugar according to personal preference.<br>

    2.Culinary Ingredient: Filter coffee can be used as a flavoring ingredient in various desserts, baked goods, and even savory dishes. It can add depth and complexity to dishes like coffee-flavored ice cream, cakes, and sauces.<br>

    3.Cultural Tradition: In South India, especially Tamil Nadu and Karnataka, filter coffee is an integral part of daily life and cultural gatherings. It's often served to guests as a gesture of hospitality.<br>

    4.Gifts and Souvenirs: Filter coffee has gained popularity as a souvenir for tourists visiting South India. It's often packaged in airtight containers to maintain its freshness.<br>

    5.Alternative Brewing: The coffee decoction produced by this method can also be used as a base for other coffee beverages like iced coffee or coffee cocktails.<br>
</p> </div>
    <div class="tab-pane fade" id="OrganicBellamChai" role="tabpanel"   tabindex="0">
    <h3 class="h3">Organic Bellam Chai</h3>

  <h5 class="h5">Ingredients:</h5>
<p>
    1.Water: 1 cup<br>
    2.Milk: 1 cup<br>
    3.Black tea leaves or tea bags: 2-3 teaspoons or 2-3 bags<br>
    4.Organic bellam (jaggery): 1-2 tablespoons (adjust to taste)<br>
    5.Spices: You can use a pinch of cardamom, cinnamon, or cloves for extra flavor.<br></p>

  <h5 class="h5">Instructions:</h5>
<p>
    1.In a saucepan, add water and bring it to a boil.<br>
    2.Once the water is boiling, add the black tea leaves or tea bags and any desired spices.<br>
    3.Let the tea steep for 3-5 minutes, or as per your preference.<br>
    4.In a separate pot, heat the milk. You can heat it on the stove or use a microwave. Be careful not to let it boil over.<br>
    5.Remove the tea leaves or tea bags and spices from the steeped tea.<br>
    6.Add the organic bellam (jaggery) to the tea. Stir until it's dissolved.<br>
    7.Mix the steeped tea and hot milk in the desired proportions. Adjust the ratio of tea to milk based on your taste preference.<br>
</p>
  <h5 class="h5">Uses and Benefits:</h5>
<p>
    1.Natural Sweetness: Organic bellam chai gets its sweetness from jaggery, which is a natural and unrefined sweetener.<br>

    2.Wholesome Choice: Using organic ingredients and jaggery adds a healthful aspect to the chai, making it a good choice for those who prefer natural alternatives to refined sugar.<br>

    3.Warm and Comforting: The combination of milk, tea, and the mild sweetness of jaggery creates a comforting and soothing beverage.<br>

    4.Digestive Benefits: Jaggery is known to aid digestion and is often used as a traditional remedy for digestive issues.<br>

    5.Customizable: You can adjust the sweetness level by adding more or less jaggery, and you can also play around with the spices to suit your taste.<br>

    6.Energizing: The caffeine content in black tea provides a gentle energy boost, making organic bellam chai suitable for mornings or when you need a pick-me-up.<br>

    7.Cultural and Traditional: Incorporating jaggery into tea aligns with many cultural and traditional practices in various regions.<br>

    8.Hydration: Organic bellam chai can be a hydrating and flavorful alternative to plain water.<br>

</p>
    </div>
    <div class="tab-pane fade" id="OrganicBellamCoffee" role="tabpanel"   tabindex="0">

<h3 class="h3">Organic Bellam Coffee</h3>
<h5 class="h5">Ingredients:</h5>
<p>
    1.Ground coffee: 2 tablespoons (adjust based on your preferred strength)<br>
    2.Water: 1 cup<br>
    3.Organic bellam (jaggery): 1-2 tablespoons (adjust to taste)<br>
    4.Milk or non-dairy milk: 1/2 cup (adjust to taste)<br>
    5.Optional: Spices like cinnamon or cardamom for flavor<br>
</p>
<h5 class="h5">Instructions:</h5>

   <p> 1.Brew the Coffee:<br>
        I.Brew your coffee using your preferred method. You can use a French press, drip coffee maker, or any other method you like.<br>
        II.Adjust the amount of ground coffee and water based on your desired strength.<br>

    2.Prepare Sweetened Coffee:<br>
    &nbsp &nbsp I.While the coffee is brewing, heat the milk or non-dairy milk in a separate pot on the stove or using a microwave.<br>
    &nbsp &nbsp II.Once the coffee is brewed, pour it into your cup.<br>

    3.Add Organic Bellam (Jaggery):<br>
    &nbsp &nbsp I.Add the organic bellam (jaggery) to the coffee while it's still hot.<br>
    &nbsp &nbsp II.Stir the coffee to help the jaggery dissolve.<br>

    4.Combine Milk:<br>
    &nbsp &nbsp I.Pour the heated milk or non-dairy milk into the coffee. Stir to combine.<br>

    5.Spice It Up (Optional):<br>
    &nbsp &nbsp I.If you like, you can add a pinch of cinnamon or cardamom to enhance the flavor of the coffee.<br>

    6.Serve and Enjoy:<br>
    &nbsp &nbsp I.Give the coffee a final stir and serve it hot.<br>
</p>
  <h5 class="h5">Uses and Benefits:</h5>

   <p> 1.Natural Sweetness: Organic bellam coffee gets its sweetness from jaggery, providing a natural and unrefined sweetener.<br>

    2.Wholesome Choice: Using organic ingredients and jaggery adds a healthful aspect to the coffee, making it a good option for those who prefer natural sweeteners.<br>

    3.Warm and Comforting: The combination of coffee, milk, and the mild sweetness of jaggery creates a comforting and soothing beverage.<br>

    4.Digestive Benefits: Jaggery is known for its potential digestive benefits and is used traditionally to aid digestion.<br>

    5.Energy Boost: The caffeine in coffee provides an energy boost, making organic bellam coffee suitable for mornings or when you need a pick-me-up.<br>

    6.Customizable: You can adjust the sweetness by adding more or less jaggery, and you can experiment with adding different spices for flavor variety.<br>

    7.Hydration: While coffee is caffeinated and can have a diuretic effect, you can still enjoy it as a flavorful and hydrating alternative to plain water.<br>
</p>

    </div>
    <div class="tab-pane fade" id="ThatiBellamChai" role="tabpanel"   tabindex="0">
    
<h3 class="h3">Thati Bellam Chai</h3>
<h5 class="h5">Ingredients:</h5>
<p>
    1.Water: 1 cup<br>
    2.Milk: 1 cup<br>
    3.Black tea leaves or tea bags: 2-3 teaspoons or 2-3 bags<br>
    4.Thati bellam (palm jaggery): 1-2 tablespoons (adjust to taste)<br>
    5.Spices: You can use a pinch of cardamom, cinnamon, or cloves for extra flavor.<br>
    
</p>
<h5 class="h5">Instructions:</h5>
<p>
  1.In a saucepan, add water and bring it to a boil.<br>
    2.Once the water is boiling, add the black tea leaves or tea bags and any desired spices.<br>
    3.Let the tea steep for 3-5 minutes, or as per your preference.<br>
    4.In a separate pot, heat the milk. You can heat it on the stove or use a microwave. Be careful not to let it boil over.<br>
    5.Remove the tea leaves or tea bags and spices from the steeped tea.<br>
    6.Add the thati bellam (palm jaggery) to the tea. Stir until it's dissolved.<br>
    7.Mix the steeped tea and hot milk in the desired proportions. Adjust the ratio of tea to milk based on your taste preference.<br>
</p>
<h5 class="h5">Uses and Benefits:</h5>
<p>
    1.Unique Flavor: Thati bellam chai has a distinct flavor profile due to the addition of palm jaggery, providing a taste that's different from regular sweetened chai.<br>

    2.Traditional and Local: Thati bellam is a traditional ingredient in South Indian cooking, and incorporating it into chai connects with regional culinary practices.<br>

    3.Natural Sweetness: Thati bellam adds a natural and earthy sweetness to the chai without the need for refined sugar.<br>

    4.Warm and Comforting: The combination of milk, tea, and the mild sweetness of palm jaggery creates a comforting and soothing beverage.<br>

    5.Digestive Benefits: Jaggery is often used for its potential digestive benefits, making thati bellam chai potentially soothing for the stomach.<br>

    6.Cultural and Traditional: Thati bellam chai can be a way to celebrate and appreciate South Indian culinary traditions.<br>

    7.Customizable: You can adjust the sweetness level by adding more or less jaggery, and you can experiment with different spices.<br>

    8.Hydration: Thati bellam chai can be enjoyed as a flavorful and hydrating alternative to plain water.<br>
</p>
    </div>
    <div class="tab-pane fade" id="ThatiBellamCoffee" role="tabpanel"   tabindex="0">

<h3 class="h3">Thati Bellam Coffee</h3>

<h5 class="h5">Ingredients:</h5>

   <p> 1.Ground coffee: 2 tablespoons (adjust based on your preferred strength)<br>
    2.Water: 1 cup<br>
    3.Thati bellam (palm jaggery): 1-2 tablespoons (adjust to taste)<br>
    4.Milk or non-dairy milk: 1/2 cup (adjust to taste)<br>
</p>
<h5 class="h5">Instructions:</h5>

  <p>  1.Brew the Coffee:<br>
    &nbsp &nbsp I.Brew your coffee using your preferred method. You can use a filter coffee maker, espresso machine, or any other method you like.<br>
    &nbsp &nbsp II.Adjust the amount of ground coffee and water based on your desired strength.<br>

    2.Prepare Sweetened Coffee:<br>
    &nbsp &nbsp I.While the coffee is brewing, heat the milk or non-dairy milk in a separate pot on the stove or using a microwave.<br>
    &nbsp &nbsp II.Once the coffee is brewed, pour it into your cup.<br>

    3.Add Thati Bellam (Palm Jaggery):<br>
    &nbsp &nbsp I.Add the thati bellam (palm jaggery) to the coffee while it's still hot.<br>
    &nbsp &nbsp II.Stir the coffee to help the jaggery dissolve.<br>

    4.Combine Milk:<br>
    &nbsp &nbsp I.Pour the heated milk or non-dairy milk into the coffee. Stir to combine.<br>

    5.Spice It Up (Optional):<br>
    &nbsp &nbsp I.For extra flavor, you can add a pinch of cardamom or cinnamon to the coffee.<br>

    6.Serve and Enjoy:<br>
    &nbsp &nbsp I.Give the coffee a final stir and serve it hot.<br></p>

<h5 class="h5">Uses and Benefits:</h5>

  <p>  1.Distinct Flavor: Thati bellam coffee has a unique and regional flavor profile due to the addition of palm jaggery.<br>

    2.Cultural Connection: Using thati bellam connects with South Indian culinary traditions and flavors.<br>

    3.Natural Sweetness: Thati bellam adds natural sweetness to the coffee without the need for refined sugar.<br>

    4.Warm and Comforting: The combination of coffee, milk, and the mild sweetness of palm jaggery creates a comforting and soothing beverage.<br>

    5.Customizable: You can adjust the jaggery quantity and the spices based on your taste preferences.<br>

    6.Energy Boost: The caffeine in coffee provides an energy boost, making thati bellam coffee suitable for mornings or when you need a pick-me-up.<br>

    7.Hydration: While coffee is caffeinated and can have a diuretic effect, you can still enjoy it as a flavorful and hydrating alternative to plain water.<br>
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
