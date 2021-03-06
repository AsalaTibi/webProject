<?php
require_once ("insert.php");
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
require_once ("component.php");


if (isset($_POST['remove'])){
    if ($_GET['action'] == 'remove'){
        foreach ($_SESSION['cart'] as $key => $value){
            if($value["product_id"] == $_GET['id']){
                unset($_SESSION['cart'][$key]);
                echo "<script>alert('Product has been Removed...!')</script>";
                echo "<script>window.location = 'cart.php'</script>";
            }
        }
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />

    <link rel="stylesheet" href="shop_s.css">
</head>
<body class="bg-light"  >


<?php
require_once ('header.php');
?>
<div class="container-fluid">
    <div class="row px-5">
        <div class="col-md-7">
            <div class="shopping-cart">
                <h6>My Cart</h6>
                <hr>

                <?php

                $total = 0;
                if (isset($_SESSION['cart'])){
                    $product_id = array_column($_SESSION['cart'], 'product_id');

                    $result = getData();
                    while ($row =$result->fetch_assoc()){
                        foreach ($product_id as $id){
                            if ($row['id'] == $id){
                                cartElement($row['product_image'], $row['product_name'],$row['product_price'], $row['id']);
                                $total = $total + (int)$row['product_price'];
                            }
                        }
                    }
                }else{
                    echo "<h5>Cart is Empty</h5>";
                }

                ?>

            </div>
        </div>
        <div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25">

            <div class="pt-4">
                <h6>PRICE DETAILS</h6>
                <hr>
                <div class="row price-details">
                    <div class="col-md-6">
                        <?php
                        if (isset($_SESSION['cart'])){
                            $count  = count($_SESSION['cart']);
                            echo "<h6>Price ($count items)</h6>";
                        }else{
                            echo "<h6>Price (0 items)</h6>";
                        }
                        ?>
                        <h6>Delivery Charges</h6>
                        <hr>
                        <h6>Amount Payable</h6>
                        <button type="submit" class="btn btn-warning my-3" name="add" class="buy" onclick="togglePopup()">Buy it</button>
                    </div>
                    <div class="col-md-6">
                        <h6>$<?php echo $total; ?></h6>
                        <h6 class="text-success">FREE</h6>
                        <hr>
                        <h6>$<?php
                            echo $total;
                            ?></h6>
                    </div>
                </div>
            </div>

        </div>

        <div class="popup" id="popup-1">
            <div class="overlay"></div>
            <div class="content">
                <div class="close-btn" onclick="togglePopup()">&times;</div>
                <h2 style="font-family: Cambria">Fill Your Information:</h2>
                <br>

                <form action="buy.php" method="post">
                    <input class="form-control" type="hidden"  name="product_Name" value="<?php
                    $names='';
                    if (isset($_SESSION['cart'])){
                        $product_id = array_column($_SESSION['cart'], 'product_id');
                        $result = getData();
                        while ($row =$result->fetch_assoc()){
                            foreach ($product_id as $id){
                                if ($row['id'] == $id){
                                    $names=$row['product_name'].",".$names;
                                }
                            }
                        }
                    }else{
                        echo "<h5>Cart is Empty</h5>";
                    }?>">

                    <input class="form-control" type="hidden"  name="price" value="<?php echo $total?>">

                    <input class="form-control" type="hidden"  name="product" value="<?php echo $names?>">

                    <input class="form-control" type="text" placeholder="Name" name="clientName">

                    <input class="form-control" type="text" placeholder="Phone number" style="margin-top: 10px; margin-bottom: 10px" name="phone">

                    <input class="form-control" type="text" placeholder="Home Address" name="home">
                    <br>

                    <button type="submit" class="btn btn-outline-warning" name="act" >Confirm</button>
                </form>
            </div>
        </div>

    </div>
</div>
</div>
<script>function togglePopup(){
        document.getElementById("popup-1").classList.toggle("active");
    }
</script>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
