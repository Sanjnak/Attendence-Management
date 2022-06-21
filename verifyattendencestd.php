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
$name = "";
$dept = "";
$_SESSION["stdid"] = "";
if(isset($id) || isset($name) || isset($dept))
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $dept = $_POST['dept'];
        $query = "SELECT * FROM attendencetable WHERE ID = '$id'";
        $result = mysqli_query($conn , $query);
        if($result && mysqli_num_rows($result) >0)
        {
           $result1 = mysqli_fetch_assoc($result);
           $_SESSION["stdid"] = $result1['ID'];
           header("Location: FullStudentAttendRep.php");
        }
        else{
            header("Location: studentattendencereportForm.html");
        }
    }
//echo "data not entered";
mysqli_close($conn);
?>

