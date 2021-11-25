<?php

include "connection.php";

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
        $department = $_POST['department'];
        $password = $_POST['password'];

        $qry = "INSERT INTO interviewers(name,address,phone,gender,department,password) 
        VALUES('$name','$address','$phone','$gender','$department','$password')";

        $run = mysqli_query($conn, $qry);

        if($run == 1){
            header("location:../registerInterviwers.php");
        }
    }
?>