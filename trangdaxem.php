<!DOCTYPE html>
<?php
$cookie_name = "phongdaxem";
$cookie_value = array(
     'CARD 1'=>array('FRONT I', 'BACK I'),
     'CARD 2'=>array('FRONT 2', 'BACK 2')
 );
$json = json_encode($cookie_value);
setcookie($cookie_name, $json, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>
<body>

<?php
if(isset($_COOKIE[$cookie_name])) {
     $cookie = $_COOKIE['phongdaxem'];
     $cookie = stripslashes($cookie);
     $savedCardArray = json_decode($cookie, true);
     print_r($savedCardArray);
     // echo $_COOKIE[$cookie_name];
}
?>

<p><strong>Note:</strong> You might have to reload the page to see the value of the cookie.</p>

</body>
</html>