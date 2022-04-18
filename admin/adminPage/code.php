<?php

$conn = new mysqli('localhost', 'root', '', 'food_database');

if(isset($_POST['savebtn'])){

    $id=$_POST['id'];
    $productName=$_POST['productName'];
    $productType=$_POST['productType'];
    $productPrice=$_POST['productPrice'];
    $productImage=addslashes(file_get_contents($_FILES["productImage"]["tmp_name"]));

    $conn->query("INSERT INTO producttb (id, product_name, product_type, product_price, product_image)
     VALUES ('$id', '$productName', '$productType','$productPrice','$productImage')");
    echo '<script type="text/javascript"> alert("success")</script>';
        header('Location:products.php');
}
if(isset($_POST['updatebtn'])){
  $id=$_POST['edit_id'];
  $productName=$_POST['edit_Name'];
  $productType=$_POST['edit_Type'];
  $productPrice=$_POST['edit_Price'];
  $productImage=$_POST['edit_image'];

  $res=$conn->query("UPDATE producttb SET product_name='$productName',product_type='$productType'
  ,product_price='$productPrice',product_image='$productImage' where id='$id'");

    if ($res){
        echo '<script type="text/javascript"> alert("success")</script>';
       header('Location:products.php');
    }
}
if(isset($_POST['delete_btn'])){
    $id=$_POST['delete_id'];

    $res=$conn->query("DELETE FROM producttb where id='$id'");

    if ($res){
        header('Location:products.php');
    }
}

if(isset($_POST['updateSales'])){
    $transNum=$_POST['edit_transNum'];
    $ClientName=$_POST['edit_Name'];
    $phone=$_POST['edit_phone'];
    $address=$_POST['edit_address'];
    $productName=$_POST['edit_productName'];
    $total=$_POST['edit_total'];

    $res=$conn->query("UPDATE table_buy SET clientName='$ClientName',phonenumber='$phone'
      ,homeaddress='$address',productsname='$productName',total='$total' where trans_Num='$transNum'");

    if ($res){
        header('Location:TheSales.php');
    }
}
if(isset($_POST['delete_btn'])){
    $id=$_POST['delete_id'];

    $res=$conn->query("DELETE FROM producttb where id='$id'");

    if ($res){
        header('Location:products.php');
    }
}
if(isset($_POST['saveSales'])){

    $transNum=$_POST['transNum'];
    $clientName=$_POST['clientName'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $productName=$_POST['productName'];
    $total=$_POST['total'];

    $conn->query("INSERT INTO table_buy (trans_Num, clientName,phonenumber,homeaddress,productsName,total)
     VALUES ('$transNum', '$clientName', '$phone','$address','$productName','$total')");
    header('Location:TheSales.php');
}
if(isset($_POST['delete_trans'])){
    $transNum=$_POST['delete_transNum'];
    $res=$conn->query("DELETE FROM table_buy where trans_Num='$transNum'");

    if ($res){
        header('Location:TheSales.php');
    }
}

if(isset($_POST['updateRecipe'])){
    $recipeNum=$_POST['edit_recipeNum'];
    $recipeName=$_POST['edit_recipeName'];
    $recipeImage=$_POST['edit_recipeImage'];
    $category=$_POST['edit_category'];

    $res=$conn->query("UPDATE recipes SET recipeName='$recipeName',recipeImage='$recipeImage'
    ,category='$category' where recipeNum='$recipeNum'");

    if ($res){
        header('Location:recipes.php');
    }
}
if(isset($_POST['saveRecipe'])){

    $recipeNum=$_POST['RecipeNum'];
    $recipeName=$_POST['recipeName'];
    $image=$_POST['recipeImage'];
    $category=$_POST['category'];

    $conn->query("INSERT INTO recipes (recipeNum, recipeName,recipeImage,category)
     VALUES ('$recipeNum', '$recipeName', '$image','$category')");
    header('Location:recipes.php');
}

if(isset($_POST['delete_recipe'])){
    $recipeNum=$_POST['delete_recipeNum'];
    $res=$conn->query("DELETE FROM recipes where recipeNum='$recipeNum'");

    if ($res){
        header('Location:recipes.php');
    }
}

if(isset($_POST['save_admin'])){

    $email=$_POST['email'];
    $userType='admin';
    $password=$_POST['password'];
    $password = md5($password);

    $conn->query("INSERT INTO users (email,user_type,password)
     VALUES ('$email', '$userType', '$password')");
    header('Location:admins.php');
}
if(isset($_POST['update_admin'])){
    $email=$_POST['update_email'];
    $pass=$_POST['update_pass'];

    $res=$conn->query("UPDATE users SET password='$pass'
    where email='$email'");

    if ($res){
        header('Location:admins.php');
    }
}
if(isset($_POST['delete_admin'])){
    $email=$_POST['delete_email'];
    $res=$conn->query("DELETE FROM users where email='$email'");

    if ($res){
        header('Location:admins.php');
    }
}
?>





