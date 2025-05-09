<?php

    include('connect_db.php');

    $email=$_POST['email'];
    $password=$_POST['password'];

    $select=mysqli_query($connect,"SELECT * FROM user");

    while($a=mysqli_fetch_array($select)){
        if($email==$a['email'] and $password==$a['password']){
            header('location:menu.html');
        }
    }

?>