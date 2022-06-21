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
    $query = "DELETE FROM teacherdetail WHERE ID = '$id' ";
    if(mysqli_query($conn , $query))
    {
        echo "<script>
            alert('Record Deleted!!!')
            window.location.replace('ManageStaff.php');
         </script>";
    }
}
mysqli_close($conn);
?>