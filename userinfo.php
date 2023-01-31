<?php
$con = mysqli_connect('localhost','root');

if($con){
    echo "Connecting successfull";
}
else {
    echo "no connection";

}

mysqli_select_db($con,'final');

$email = $_POST['email'];
$password = $_POST['password'];

$query ="INSERT INTO `userinfodata`(`id`, `email`, `password`) VALUES ('value-1','$email','$password')";

mysqli_query($con,$query);

header('location:index.html');
?>