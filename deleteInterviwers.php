<?php

$id = $_GET['id'];

include 'includes/connection.php';
$sql = "DELETE FROM interviewers WHERE id = '$id'";
$run = mysqli_query($conn, $sql);

if($run == 1){
    header("location:viewInterviwers.php");
}
?>