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
$id = "";
$user = "";
$passwd = "";
$_SESSION["name"] = "";
$_SESSION["id"] = "";
if(isset($id) || isset($email) || isset($passwd))
    {
        $id = $_POST['id'];
        $user = $_POST['username'];
        $passwd = $_POST['passwd'];
        $query = "SELECT * FROM bcatable WHERE ID = '$id' AND Email = '$user' AND Password = '$passwd' ";
        $result = mysqli_query($conn , $query);
        if($result && mysqli_num_rows($result) >0)
        {
           $result1 = mysqli_fetch_assoc($result);
           $_SESSION["name"] = $result1['Name'];
           $_SESSION["id"] = $result1['ID'];
           header("Location: StudentDashboard.php");
        }
        else{
            header("Location: LoginStudentPage.html");
        }
    }
//echo "data not entered";
mysqli_close($conn);
?>

