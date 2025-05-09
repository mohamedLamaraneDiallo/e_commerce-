<?php
    include('connect_db.php');

    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $insert=mysqli_query($connect,"INSERT INTO user values('$firstname','$lastname','$email','$password')");

    header('location:connection.html');
?>