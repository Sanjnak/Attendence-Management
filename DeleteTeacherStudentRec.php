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
    $query = "DELETE FROM studenttable WHERE ID = '$id' ";
    $query2 ="DELETE FROM  attendencetable WHERE ID = '$id'";
    if(mysqli_query($conn,$query) && mysqli_query($conn , $query2))
    {
        echo "<script>
            alert('Record Deleted!!!')
            window.location.replace('ManageTeacherStudent.php');
         </script>";
    }
}
mysqli_close($conn);
?>