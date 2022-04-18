<?php
include('functions.php');
if (isset($_GET['logout'])) {
session_destroy();
unset($_SESSION['user']);

}
elseif (isset($_GET['join'])) {

    header('location: Login_page.php');
}
?>

<?php


function getData(){
try{
@ $db= new mysqli('localhost','root','','food_database');
@ $sql = "SELECT * FROM producttb";

@$result = $db->query($sql);

if(mysqli_num_rows($result) > 0){
return $result;
}}


catch (Exception $e){

}}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="Main_style.css">


    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
        .hero{
            height: 100vh;
            background-image: url("imgs/mm.jpeg");
            background-position: center;
            background-size: cover;
            position: relative;

        }
        @font-face {
            font-family: myFirstFont;
            src: url(imgs/Antonio-VariableFont_wght.ttf);
        }
        @font-face {
            font-family: myf;
            src: url("font/AlexBrush.ttf");
        }
        @font-face {
            font-family: myfontt;
            src: url(" font/ShadowsIntoLight-Regular.ttf");
        }

    </style>

    <script>
        function goLogin(){
            window.location.href = "Login_page.php";
        }
        function goRec(){
            window.location.href = "Rec.php";
        }
        function goShop(){
            window.location.href = "shop.php";
        }
        function goAbout(){
            window.location.href = "AboutUs.php";
        }
    </script>
</head>
<body >
<div class="hero">
    <?php

    require_once ('header.php');
    ?>
    <h1 style="font-size: 50px; color: #834d40; font-family: myFirstFont " class="qtext">ONE STEP TO MAKE A GOOD START</h1>

    <h4 style="margin-left:410px; color: #1b4332; font-family:'Fira Code Light';font-size: 20px">
        "Food is not just fuel. Food is about family, food is about community,<br>
        food is about identity. And we nourish all those things when we eat well."
        <br>

    </h4 >
    <form action="" method="get">
    <?php
    if (isLoggedIn()) {

    ?>
    <button style="margin-left: 410px"  onclick="goLogin()" class=" btn-change" name="logout">
       Log out
    </button>
    <?php

        }
    else{
    ?>
    <button style="margin-left: 410px"  onclick="goLogin()" class=" btn-change" name="join">
        Join Us
    </button>
    <?php
    }
    ?>
    </form>
</div>
<section class="about" id="about">


                <div class="column">
                    <img src="imgs/hala.jpg" alt="Forest" style="width:250px; height: 350px " class="imgc">
                </div>

                <div class="column">
                    <img src="imgs/Cook.jpg" alt="Snow" style="width:250px; height: 350px; margin-right: 130px" class="imgc">
                </div>

                    <div >
                        <h1 style="color: #834d40; font-family: myFirstFont"> Welcome Friends ! </h1>
                        <p style="font-size: large; font-family: myfontt">Our mission is to make healthy life style accessible to everyone . <br>
                            We make recipes are practical because they’re from home cooks—not gourmet chefs—and feature familiar
                            everyday ingredients; clear, beautiful photos; and easy-to-follow, step-by-step instructions
                            And because each is individually tested by culinary experts in our Test Kitchen.<br>
                            The recipes are reliable; we guarantee that you can count on success each time you prepare one.
                            and we make nutrition articles <br> to make you feel excited and supported
                            in introducing more healthy foods  into your meals , snacks , desserts and everything in-between !</p>

                    </div>
<!--    <a href="AboutUs.php" style="margin-left: 690px; margin-top:-20px;color: #834d40"> LEARN MORE</a>-->
    <button style="color: #834d40" type="button" class="btn btn-link" onclick="goAbout()">LEARN MORE</button>






</section>

<section class="recipes" id="recipes">
    <div class="title">
        <h2 class="titleText" style="color: #834d40;"><b>Latest Recipes</b></h2></p>
    </div>
    <div class="content">
        <a class="box" href="#" onclick="toggle()">
            <div class="imgBx">
                <img src="imgs/pestoPasta.jpg">
            </div>
            <div class="text">
                <h3>Grilled Red Pepper Pesto Pasta</h3>
            </div>
        </a>

        <a class="box" href="#" onclick="toggle1()">
            <div class="imgBx">
                <img src="imgs/tacosalad.jpg">
            </div>
            <div class="text">
                <h3>Chorizo Taco Salad Bowl</h3>
            </div>
        </a>

        <a class="box" href="#" onclick="toggle2()">
            <div class="imgBx">
                <img src="imgs/quinoaSalad.jpg">
            </div>
            <div class="text">
                <h3>Quinoa Salad with Roasted Garlic Dressing</h3>
            </div>
        </a>

        <a class="box" href="#" onclick="toggle3()">
            <div class="imgBx">
                <img src="imgs/pudding.jpg">
            </div>
            <div class="text">
                <h3 >Raspberry Chocolate Pudding</h3>
            </div>
        </a>


    </div>
</section>
<button style="color: #834d40;font-weight: 200; margin-left: 1300px" type="button" onclick="goRec()" class="btn btn-link">SEE MORE</button>
<br>

<section class="shop" id="shop" style=" background-color: #Fed95f">
    <div class="title">
        <h2 class="titleText" style="color: #834d40;margin-top: -90px"><b>The Best Seller</b>
            <button style="color: #834d40; "  type="button" class="btn btn-link" onclick="goShop()"><h6>Go TO SHOP</h6></button>
        </h2>
    </div>

    <div class="content">
        <div class="box">
            <div class="imgBx">
                <img src="imgs/chiaSeeds.jpg">
            </div>
<!--            <div class="text">-->
<!--                <h3>Chia seeds</h3>-->
<!--            </div>-->
        </div>

        <div class="box">
            <div class="imgBx">
                <img src="imgs/howNotToDie.jpg">
            </div>
<!--            <div class="text">-->
<!--                <h3>How not to die cookbook</h3>-->
<!--            </div>-->
        </div>

        <div class="box">
            <div class="imgBx">
                <img src="imgs/coconut.jpg">
            </div>
<!--            <div class="text">-->
<!--                <h3>Coconut oil</h3>-->
<!--            </div>-->
        </div>

        <div class="box">
            <div class="imgBx">
                <img src="imgs/coffeemachine.jpg">
            </div>
<!--            <div class="text">-->
<!--                <h3 style="font-weight: 500">Coffee spice grinder</h3>-->
<!--            </div>-->
        </div>
        <div class="box">
            <div class="imgBx">
                <img src="imgs/pumpkin.jpg">
            </div>
<!--            <div class="text">-->
<!--                <h3 style="font-weight: 500">Coffee spice grinder</h3>-->
<!--            </div>-->
        </div>

    </div>
</section>






<!---->
<!--<div class="container2">-->



    <div class="container mt-5">


        <!--Section: Content-->
        <section class="dark-grey-text">
<!--            <h1 class="title" style="color: #834d40;"><b>Articles<br></b></h1>-->
            <h1 class="text-center font-weight-bold mb-4 pb-2" style="color: #834d40;">Articles</h1>

<!--        </section>-->



            <!--Section: Content-->
<!--            <section class="dark-grey-text">-->


                <!-- Grid row -->
                <div class="row align-items-center">

                    <!-- Grid column -->
                    <div class="col-lg-5 col-xl-4">

                        <!-- Featured image -->
                        <div class="view overlay rounded z-depth-1-half mb-lg-0 mb-4">
                            <img class="img-fluid" src="imgs/coffee1.jpg" style="height: 300px; margin-left: 40px" alt="Sample image">
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg-7 col-xl-8">

                        <!-- Post title -->
                        <h4 class="font-weight-bold mb-3"><strong>What Is Caffeine, and Is It Good or Bad for Health?</strong></h4>
                        <!-- Excerpt -->
                        <p class="dark-grey-text">Caffeine is a natural stimulant most commonly found in tea, coffee, and cacao plant t works by stimulating the brain and central nervous system.</p>
                        <!-- Post data -->
                        <p>by <a class="font-weight-bold">Jessica Clark</a>, 19/04/2018</p>
                        <!-- Read more button -->
                        <a class="btn btn-warning btn-md mx-0 btn-rounded" href="article2.html">Read more</a>

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

                <hr class="my-5">
            <div class="row align-items-center">

                <!-- Grid column -->
                <div class="col-lg-5 col-xl-4">

                    <!-- Featured image -->
                    <div class="view overlay rounded z-depth-1-half mb-lg-0 mb-4">
                        <img class="img-fluid" src="imgs/RR.jpg" style="height: 300px; margin-left: 40px" alt="Sample image">
                        <a>
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-7 col-xl-8">

                    <!-- Post title -->
                    <h4 class="font-weight-bold mb-3"><strong>The Top 20 Biggest Nutrition Myths</strong></h4>
                    <!-- Excerpt -->
                    <p class="dark-grey-text">Scrolling through social media, reading your favorite magazine, or visiting popular websites
                        exposes you to endless information about nutrition and health — most of which is incorrect.</p>
                    <!-- Post data -->
                    <p>by <a class="font-weight-bold">Jessica Clark</a>, 19/04/2018</p>
                    <!-- Read more button -->
                    <a class="btn btn-warning btn-md mx-0 btn-rounded" href="article3.html">Read more</a>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

            <hr class="my-5">

            <div class="row align-items-center">

                <!-- Grid column -->
                <div class="col-lg-5 col-xl-4">

                    <!-- Featured image -->
                    <div class="view overlay rounded z-depth-1-half mb-lg-0 mb-4">
                        <img class="img-fluid" src="imgs/teen.jpg" style="height: 300px; margin-left: 70px" alt="Sample image">
                        <a>
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-7 col-xl-8">

                    <!-- Post title -->
                    <h3 class="font-weight-bold mb-3"><strong><b>Healthy Snacks for Hungry Teens</b></strong></h3>
                    <!-- Excerpt -->
                    <p class="dark-grey-text">  Teens need consistent nutrient-dense meals and snacks to fuel their growing bodies.
                        Adolescents undergo a period of rapid growth and development that requires optimal intake of</p>
                    <p>by <a class="font-weight-bold">Jessica Clark</a>, 19/04/2018</p>
                    <!-- Read more button -->
                    <a class="btn btn-warning btn-md mx-0 btn-rounded" href="article1.html">Read more</a>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

            <hr class="my-5">
            </section>
            <!--Section: Content-->


        </div>


</div>

<footer>
    <div class="main-content">
        <div class="left box">
            <h2 style="font-family: myf">BonAppetit</h2>
            <div class="content">
                <p style="font-family: myfontt">BonAppetit is a website that interest in healthy food<br>
                    It contains a healthy recipes and buy a material that help you in cooking. </p>
                <div class="social">
                    <a href="#"><span ><img src="https://img.icons8.com/doodle/48/000000/facebook-new.png"/></span></a>
                    <a href="#"><span ><img src="https://img.icons8.com/doodle/48/000000/twitter--v1.png"/></span></a>
                    <a href="#"><span> <img src="https://img.icons8.com/doodle/48/000000/instagram-new.png"/></span></a>
                </div>
            </div>
        </div>

        <div class="center box" style="margin-left: 150px">
            <h2 style="font-family: myf">Address</h2>
            <div class="content">
                <div class="place">
                    <span  ><img src="https://img.icons8.com/android/24/000000/worldwide-location.png"/></span>
                    <span class="text" style="font-family: myfontt">Palestine</span>
                </div>
                <div class="phone">
                    <span ><img src="https://img.icons8.com/android/24/000000/phone.png"/></span>
                    <span class="text" style="font-family: myfontt">+970-764342986</span>
                </div>
                <div class="email">
                    <span><img src="https://img.icons8.com/ios/40/000000/email-open.png"/></span>
                    <span class="text" style="font-family: myfontt">BonAppetit@gmail.com</span>
                </div>
            </div>
        </div>
        <div class="right box">

            <div class="content">
                <img src="https://img.icons8.com/color/96/000000/waiter.png"/> <br>
                <span class="text" style="font-family: myfontt ; font-size: 18px">When you eat food with your family and friends, it always tastes better!</span>
            </div>
        </div>
    </div>
</footer>
</div>

<div id="popup" class="popup">
    <div class="title" align="center"><b>Grilled Red Pepper Pesto Pasta</b></div>
    <div class="content">
        <div class="imgBx"><img src="imgs/pestoPasta.jpg" width="190" height="250" ></div>
        <div  class="ing">
            <h1>Ingredients</h1>
            1 Tbsp (15 mL) olive oil, divided over several steps<br>
            2 red bell peppers, quartered<br>
            1 orange bell pepper, quartered<br>
            ¼ tsp salt, divided over several steps<br>
            ⅛ tsp ground black pepper, divided over several steps<br>
            4 cloves garlic, minced<br>
            1 zucchini, thinly sliced<br>
            14.1 oz (400 g) dry spaghetti noodles<br>
            ¼ cup (38 g) sun-dried tomato in oil, drained<br>
            ¼ cup (29 g) roasted walnuts<br>
            1½ cups (201 g) frozen green peas<br>
        </div>
        <div class="ing">
            <h1>Directions</h1>
            <p>
            <ol>
                <li>Add half the oil to a large pan on high heat. When hot, add the bell peppers, and sprinkle a bit of salt and pepper overtop.<br></li>
                <li>Cook until the skin begins to blister, and then flip to cook on the other side. To speed up this recipe, you could alternatively skip this step and use roasted bell pepper from a jar.<br></li>
                <li>When the bell peppers are cooked through and blistered on both sides, push them to the side of the pan, add a small bit more oil, and cook the garlic until lightly golden, about 2 - 3 minutes. Transfer both the bell pepper and garlic to a food processor or blender.<br></li>
                <li>Return the same pan to the heat, and add more oil. When hot, cook the zucchini. Sprinkle over some salt and pepper, and try not to disturb the zucchini as it cooks, and give a flip only when golden.<br></li>
                <li>To a large pot of salted boiling water, add the pasta.<br></li>
                <li>Returning to the food processor, add in the sun-dried tomato, and walnuts. Blend until smooth, but some small chunks can remain, if desired.<br></li>
            </ol>
            </p>
        </div>
        <a href="#" onclick="toggle()" class="btn">close</a>
    </div>
</div>

<div id="popup1" class="popup">
    <div class="title" align="center"><b>Chorizo Taco Salad Bowl</b></div>
    <div class="content">
        <div class="imgBx"><img src="imgs/tacosalad.jpg" width="190" height="250" ></div>
        <div  class="ing">
            <h1>Ingredients</h1>
            4 cups (228 g) iceberg lettuce, sliced<br>
            ½ cup (86 g) cooked black beans<br>
            ½ cup (113 g) vegan chorizo<br>
            6 cherry tomatoes, quartered<br>
            ½ avocado, sliced<br>
            ½ cup (83 g) salsa<br>
            ¼ cup (36 g) roasted sunflower seeds<br>
            ¼ cup (4 g) fresh cilantro (optional)<br>
            1 stalk green onion, sliced (optional)<br>
            2 Tbsp (19 g) pickled jalapeño slices<br>
        </div>
        <div class="ing">
            <h1>Directions</h1>
            <p>
            <ol>
                <li>Divide all of the salad ingredients between bowls.<br></li>
                <li>Add the cajun cashew dressing ingredients to a small food processor and blend on high until smooth. Add more water if needed to reach your desired consistency.<br></li>
                <li>Top the salad with the dressing, and enjoy!</li>
            </ol>
            </p>
        </div>
        <a href="#" onclick="toggle1()" class="btn">close</a>
    </div>
</div>

<div id="popup2" class="popup">
    <div class="title" align="center"><b>Quinoa Salad with Roasted Garlic Dressing</b></div>
    <div class="content">
        <div class="imgBx"><img src="imgs/quinoaSalad.jpg" width="190" height="250" ></div>
        <div  class="ing">
            <h1>Ingredients</h1>
            <b>Salad</b><br>
            2 cups (370 g) cooked quinoa<br>
            1 cup (185 g) cooked chickpeas<br>
            1 red bell pepper, chopped<br>
            1 yellow bell pepper, chopped<br>
            1 tomato, chopped<br>
            1 stalk green onion, thinly sliced<br>
            ⅓ cucumber, diced<br>
            ¼ cup (40 g) dried cranberries, chopped<br>
            ¼ cup (38 g) kalamata olives, pits removed, chopped<br>
        </div>
        <div class="ing">
            <h1>Directions</h1>
            <p>
            <ol>
                <li>Preheat the oven to 390°F (200°C).</li>
                <li>Cut the top ½ cm off the head of garlic to expose the cloves, and place it on a baking tray. Drizzle with a bit of olive oil and roast on the centre rack for 20 minutes, or until golden and fragrant.</li>
                <li>While the garlic roasts, prep the veggies.</li>
                <li>To a large bowl, add the cooked quinoa, chickpeas, cut veggies, cranberries, and olives. Toss to combine.</li>
                <li>When the roasted garlic is removed from the oven and cooled enough to handle, remove the cloves of garlic from the skin and place in a medium bowl.</li>
                <li>Mash the garlic with a fork, and then add the remaining of the dressing ingredients. Stir to combine.</li>
                <li>Pour dressing over the salad and toss. Top with the roasted almonds, and enjoy!</li>
            </ol>
            </p>
        </div>
        <a href="#" onclick="toggle2()" class="btn">close</a>
    </div>
</div>

<div id="popup3" class="popup">
    <div class="title" align="center"><b>Raspberry Chocolate Pudding</b></div>
    <div class="content">
        <div class="imgBx"><img src="imgs/pudding.jpg" width="190" height="250" ></div>
        <div  class="ing">
            <h1>Ingredients</h1>
            1 cup (150 g) frozen raspberries<br>
            ¼ cup (60 mL) water<br>
            2 avocados<br>
            6 Tbsp (30 g) cocoa powder<br>
            ¼ cup (60 mL) agave syrup<br>
            1½ Tbsp (22 mL) fresh lemon juice<br>
            2 tsp (10 mL) pure vanilla extract<br>
        </div>
        <div class="ing">
            <h1>Directions</h1>
            <p>
            <ol>
                <li>Add the raspberries and water to a food processor and blend until a sorbet-consistency is reached, stopping to scrape down as needed.</li>
                <li>Add the remaining ingredients and blend until smooth. Serve immediately. Enjoy!</li>
            </ol>
            </p>
        </div>
        <a href="#" onclick="toggle3()" class="btn">close</a>
    </div>
</div>

<div id="popup4" class="popup">
    <div class="title" align="center"><b>Mango Spinach Smoothie</b></div>
    <div class="content">
        <div class="imgBx"><img src="imgs/spanish.jpg" width="190" height="250" ></div>
        <div  class="ing">
            <h1>Ingredients</h1>
            2 cups (300 g) frozen mango chunks<br>
            2 cups (50 g) fresh spinach<br>
            1 cup (240 mL) unsweetened soy yogurt*<br>
            ½ cup (120 mL) unsweetened soy milk*<br>
            2 Tbsp (14 g) ground flaxseeds<br>
        </div>
        <div class="ing">
            <h1>Directions</h1>
            <p>
            <ol>
                <li>Add all of the ingredients to a high-speed blender and blend on high until smooth.</li>
                <li>Pour into tall glasses, or into bowls to sprinkle overtop your favourite toppings.</li>
            </ol>
            </p>
        </div>
        <a href="#" onclick="toggle4()" class="btn">close</a>
    </div>
</div>

<div id="popup5" class="popup">
    <div class="title" align="center"><b>Mango Spinach Smoothie</b></div>
    <div class="content">
        <div class="imgBx"><img src="imgs/goldenmilk.jpg" width="190" height="250" ></div>
        <div  class="ing">
            <h1>Ingredients</h1>
            1 cup (240 mL) unsweetened soy milk*<br>
            1 cup (240 mL) canned full-fat coconut milk<br>
            1 tsp (3 g) ground turmeric<br>
            1 tsp (3 g) ground cinnamon<br>
            1 tsp (5 mL) pure vanilla extract<br>
            2 soft Medjool dates, pits removed<br>
            1 pinch ground black pepper<br>
            2 Tbsp (30 mL) brewed espresso (optional)<br>
            1 Tbsp (15 mL) maple syrup (optional)<br>

        </div>
        <div class="ing">
            <h1>Directions</h1>
            <p>
            <ol>
                <li>Add all ingredients, except for the maple syrup, to a high-speed blender** and blend on high until smooth and creamy.<br></li>
                <li>Pour this mixture straight into a saucepan. If your blender isn't very powerful, or if you don't like small fibres to remain in your drink, strain the mixture first when pouring it into the saucepan.<br></li>
                <li>Place on the stove on medium-high heat until warmed through, whisking throughout the prevent burning.<br></li>
                <li>Taste test, and if you like it sweeter, add up to 1 Tbsp maple syrup. To turn it into a turmeric latte, add in some brewed espresso if desired.<br></li>
                <li>When warm, pour into mugs, sprinkle on a bit of cinnamon, and enjoy!
            </ol>
            </p>
        </div>
        <a href="#" onclick="toggle5()" class="btn">close</a>
    </div>
</div>
<script>
    function toggle(){
        var blur=document.getElementById('blur');
        blur.classList.toggle('active');
        var popup=document.getElementById('popup');
        popup.classList.toggle('active');
    }
    function toggle1(){
        var blur=document.getElementById('blur');
        blur.classList.toggle('active');
        var popup=document.getElementById('popup1');
        popup.classList.toggle('active');
    }
    function toggle2(){
        var blur=document.getElementById('blur');
        blur.classList.toggle('active');
        var popup=document.getElementById('popup2');
        popup.classList.toggle('active');
    }
    function toggle3(){
        var blur=document.getElementById('blur');
        blur.classList.toggle('active');
        var popup=document.getElementById('popup3');
        popup.classList.toggle('active');
    }
    function toggle4(){
        var blur=document.getElementById('blur');
        blur.classList.toggle('active');
        var popup=document.getElementById('popup4');
        popup.classList.toggle('active');
    }
    function toggle5(){
        var blur=document.getElementById('blur');
        blur.classList.toggle('active');
        var popup=document.getElementById('popup5');
        popup.classList.toggle('active');
    }
</script>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>