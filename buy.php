<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'food_database');

if(isset($_POST['act'])){
    $clientName=$_POST['clientName'];
    $productName=$_POST['product'];
    $price=$_POST['price'];
    $address=$_POST['home'];
    $phone=$_POST['phone'];

    $res=$conn->query("INSERT INTO table_buy (trans_Num,clientName, phonenumber,homeaddress, productsname,total)
     VALUES ('6', '$clientName', '$phone','$address','$productName','$price')");

           if ($res)  header('Location:cart.php');
           else  "no result";
    }

