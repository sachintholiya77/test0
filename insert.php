<?php
$conn = mysqli_connect('localhost','root','','test_1',3306);

if($_POST['email']&&$_POST['name']){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age= $_POST['age'];
    $query = "INSERT INTO student (name,email,age) values ('$name','$email',$age)";
    if($result= mysqli_query($conn,$query)){
        echo "Success";
    }
    else{
        echo "Fail";
    }
}
?>