<?php
$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);

$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);

$message = filter_var(trim($_POST['message']), FILTER_SANITIZE_STRING);

    if(mb_strlen($name) < 5 || mb_strlen($name) > 90) {
   echo 'Длина не допустима';
   exit();
}

else if(mb_strlen($email) < 4 || mb_strlen($email) > 75 ) {
   echo 'Длина строк не допустима';
   exit();

}

else if(mb_strlen($message) < 8 || mb_strlen($message) > 125 ) {
   echo 'Длина не допустима';
   exit();
}


$user = 'root';
$password = 'root';
$db = 'for_test';
$host = 'localhost';
$port = 3307;

$link = mysqli_init();
$success = mysqli_real_connect(
 $link,
 $host,
 $user,
 $password,
 $db,
 $port
);
 

   $link->query("INSERT INTO `g` (`name`, `email`, `message`) values(`$name`, `$email`, `$message`)");

   $link->close();

 header('Location: news.php');

