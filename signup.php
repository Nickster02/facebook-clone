<?php
    $con = mysqli_connect('localhost','root','','facebookdb');
    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phoneoremail = $_POST['phoneoremail'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $dob = $_POST['y'].'-'.$_POST['m'].'-'.$_POST['d'];
    
    $check_data = mysqli_query($con,"SELECT * FROM details WHERE phoneoremail = '$phoneoremail'");
    $check = mysqli_num_rows($check_data);

    if($check > 0){
        header("Location:http://localhost/facebook-clone");
    }else{
        $input = mysqli_query($con,"INSERT INTO details (id,firstname,lastname,phoneoremail,gender,dob,password)VALUES('$id','$firstname','$lastname','$phoneoremail','$gender','$dob','$password')");
        if($input){
            header("Location:http://localhost/facebook-clone/mainpage.html");
        }
    }

?>