<?php
function isAdmin()
{
if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin' ) {
return true;
}else{
return false;
}
}
?>
<?php include('functions.php') ?>

<?php
echo 'HALA HI';