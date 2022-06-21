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
if(isset($id) || isset($email) || isset($passwd))
    {
        $id = $_POST['id'];
        $user = $_POST['username'];
        $passwd = $_POST['passwd'];
        $query = "SELECT * FROM teacherdetail WHERE ID = '$id' AND Email = '$user' AND Password = '$passwd' ";
        $result = mysqli_query($conn , $query);
        if($result && mysqli_num_rows($result) >0)
        {
           $result1 = mysqli_fetch_assoc($result);
           $_SESSION["name"] = $result1['Name'];
           header("Location: TeacherDashboard.php");
        }
        else{
            echo "<script>
            alert('Invalid login details!!!')
            window.location.replace('LoginTeacherPage.html');
         </script>";
        }
    }
//echo "data not entered";
mysqli_close($conn);
?>

