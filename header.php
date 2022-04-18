
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>shop</title>
    <link rel="stylesheet" href="shop_s.css">


    <style>

    </style>
</head>
<body>
<header>
    <div class="container">
        <h1 class="logo" style="font-family: myf ; " >    Bon Appetit
        </h1>

        <nav>
            <ul>


                <li><a href="Main.php">Home</a></li>
                <li><a href="AboutUs.php">About</a></li>
                <li><a href="recipe.html">Recipe</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="cart.php">Cart</a>



                    <?php
                     $count=array();
                    if (isset($_SESSION['cart'])){
                        $count = count($_SESSION['cart']);
                        echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                    }else{
                        echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                    }

                    ?>

                </li>

            </ul>
        </nav>
    </div>
</header>

</body>
</html>