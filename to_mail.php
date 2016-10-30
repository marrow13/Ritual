<?php


$username = $_POST['user'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$user_text_imput = $_POST['text'];
$newURL = '/#contactwrap';



echo $username;
echo 'Привет ' . htmlspecialchars($username) . '!';
echo 'Привет ' . htmlspecialchars($_POST["name"]) . '!';
//mail('arturlukashenko@gmail.com', 'test', $username);
//header('Location: '.$newURL);

?>