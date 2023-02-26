<?php

$conn=mysqli_connect("localhost","root","","expense");

if(!$conn)
{
    die("connection failed".mysqli_connect_error());
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $expense_type=mysqli_real_escape_string($conn,$_POST["expense_type"]);
    $amount=mysqli_real_escape_string($conn,$_POST["amount"]);
    $sql = "INSERT INTO data(expense_type,amount)
    VALUES ('$expense_type', '$amount')";

    if (mysqli_query($conn, $sql)) {
        echo "Record added successfully.";
    } else {
        echo "ERROR: Could not execute $sql. " . mysqli_error($conn);
    }
}

?>