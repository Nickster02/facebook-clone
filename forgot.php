<?php
    $con = mysqli_connect('localhost','root','','facebookdb');
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phoneoremail = $_POST['phoneoremail'];
    $gender = $_POST['gender'];
    $dob = $_POST['y'].'-'.$_POST['m'].'-'.$_POST['d'];

    $check_data = mysqli_query($con,"SELECT password FROM details WHERE phoneoremail = '$phoneoremail' and firstname='$firstname' and lastname='$lastname'and gender='$gender' and dob='$dob'");
    $check = mysqli_num_rows($check_data);

    echo("<center><h1>");
    if($check > 0){
        while($row_data=mysqli_fetch_array($check_data)){
        echo("Your Password is <u>");
        echo($row_data['password']);
        echo("</u><hr>");
        }
    }
    else{
        echo("Bad Credentials<hr>");
    }
    echo("</h1></center>");

?>