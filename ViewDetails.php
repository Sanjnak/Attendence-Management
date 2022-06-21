<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpasswd = "";
$dbname = "detailsdb";
$conn = mysqli_connect($dbhost , $dbuser , $dbpasswd , $dbname);
if(!$conn)
{
    die ("Failed to connect!");
}
if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $query = "SELECT * FROM teacherdetail WHERE ID = '$id' ";
    $result = mysqli_query($conn , $query);
    if($result && mysqli_num_rows($result) >0)
    {
        $result1 = mysqli_fetch_assoc($result);
    }
}
mysqli_close($conn);
?>