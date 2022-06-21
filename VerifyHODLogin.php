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
session_start();
$user = "";
$passwd = "";
$_SESSION["hodname"] = "";
if(isset($email) || isset($passwd))
    {
        $user = $_POST['username'];
        $passwd = $_POST['passwd'];
        $query = "SELECT * FROM sigindetail WHERE Email = '$user' AND Password = '$passwd' ";
        $result = mysqli_query($conn , $query);
        if($result && mysqli_num_rows($result) >0)
        {
           $result1 = mysqli_fetch_assoc($result);
           $_SESSION["hodname"] = $result1['Name'];
           header("Location: HODdashboard.php");
        }
        else{
            header("Location: loginpage.html");
        }
    }
//echo "data not entered";
mysqli_close($conn);
?>