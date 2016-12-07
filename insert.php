<?php

    $con = mysqli_connect('localhost', 'root',' ');

if(!$con)
{
    echo 'Not Connected to Server';
}

if(!mysqli_select_db($con, 'smallworld'))
{
    echo 'Database Not Selected';
}

$Name = $_POST['username'];
$Email = $_POST['email'];

$sql = "INSERT INTO person (Name, Email) VALUES ('$Name', '$Email')";

if (!mysqli_query($con,$sql))
{
    echo 'Not inserted';
}

else
{
    echo 'Inserted';
}

?>