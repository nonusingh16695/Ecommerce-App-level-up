<?php

if(isset($_GET["btn"])){

//we can add connection.php file in insert.php file
    include('connection.php');


    $username = $_GET['username'];
    $useremail= $_GET['useremail'];
    $usersubject = $_GET['usersubject'];
    $usermessage = $_GET['usermessage'];
    
    $insert = "INSERT INTO  contactpage (Name, Email, Subject, Textarea) VALUES ('$username', '$useremail', '$usersubject', '$usermessage')";

    $send = mysqli_query($conn , $insert);
    
    if($send){
        header("location:http://localhost/php/levelup/contact.php?success");
    }else{
        echo "don't sent";
    }



}
?>