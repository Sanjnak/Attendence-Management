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
$date = $_POST['date'];
$query2 = "ALTER TABLE attendencetable ADD `".$date."` text DEFAULT 'Absent'";
if(mysqli_query($conn , $query2))
  {
  }  
else
  {
    echo "error". mysqli_error($conn);
  } 
foreach($_POST['attend'] as $userID)
{
    $query = "UPDATE attendencetable SET `".$date."` = 'Present' WHERE ID = $userID";
        if(mysqli_query($conn , $query))
        {
           echo "<script>
           alert('Attendence Submitted!!!')
           window.location.replace('attendance.php');
        </script>";
        }
        else{
            echo "error". mysqli_error($conn);
        }
}

mysqli_close($conn);
?>
</script>