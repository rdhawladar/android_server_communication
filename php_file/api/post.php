<?php

//open connection to mysql db
$mtitle = $_POST['mytitle'];
$mdate = $_POST['mydate'];
$mnews = $_POST['mynews'];


echo "Response: ".$mtitle." ";
echo "Response: ".$mdate." ";
echo "Response: ".$mnews." ";
$connection = mysqli_connect("localhost","sbkmart_ed","Atomix@1234","sbkmart_ecm")
or die("Error " . mysqli_error($connection));




// recieved from app
$mtitle = $_POST['mytitle'];
$mdate = $_POST['mydate'];
$mnews = $_POST['mynews'];


echo "Response: ".$mtitle." ";


$sql_query = "INSERT INTO mytab (title,news,time) VALUES ('$mtitle','$mnews','$mdate')";


if (mysqli_query($connection, $sql_query)) {
    echo "We just posted a vua news from cool app!";
} else {
    echo "Error: " . $sql_query . "<br>" . mysqli_error($connection);
}

mysqli_close($conn);


?>