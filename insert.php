<?php

session_start();

// connect to database
$db = mysqli_connect('localhost', 'root', '', 'Food_database');

// variable declaration

$email = "";
$errors = array();
$eb="";
// call the register() function if register_btn is clicked
if (isset($_POST['act'])) {
    register();
}
function register(){
    // call these variables with the global keyword to make them available in function
    global $db, $errors,  $email;

    // receive all input values from the form. Call the e() function
    // defined below to escape form values

    $email       =  e($_POST['email']);
    $phone  =  e($_POST['phone']);
    $home  =  e($_POST['home']);

    // form validation: ensure that the form is correctly filled

    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (empty($home)) {
        array_push($errors, "Home is required");
    }
    if (empty($phone)) {
        array_push($errors, "Phone_Number is required");
    }


    // register user if there are no errors in the form
    if (count($errors) == 0) {

        $total = 0;
        if (isset($_SESSION['cart'])) {
            $product_id = array_column($_SESSION['cart'], 'product_id');
            $eb = " ";

            $result = getData();
            while ($row = $result->fetch_assoc()) {
                foreach ($product_id as $id) {
                    if ($row['id'] == $id) {
                        $eb .= $row['product_name'];
                        $total = $total + (int)$row['product_price'];
                    }
                }
            }
        }
        $query = "INSERT INTO table_buy( Name, phonenumber, homeaddress,productsname ,total) 
					  VALUES( 'hala', 0599982415, 'tulkarem','Chia',30)";
        mysqli_query($db, $query);
        $db->commit();
        $db->close();


    }
}




