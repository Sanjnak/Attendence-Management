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
//echo "Page good";
$id = "";
$name1 = "";
$dob = "";
$phn = "";
$email = "";
$passwd = "";
$dept = "";
if(isset($id) || isset($name1) || isset($dob) || isset($phn) || isset($email) || isset($passwd) || isset($dept))
    {
        $id = $_POST['id'];
        $name1 = $_POST['name'];
        $dob = $_POST['dob'];
        $phn = $_POST['phone'];
        $email = $_POST['email'];
        $passwd = $_POST['passwd'];
        $dept = $_POST['dept'];
        $query = "INSERT INTO teacherdetail (ID , Name , DOB, Phone, Email , Password, Department) VALUES('$id','$name1','$dob','$phn','$email','$passwd', '$dept')";
        if(mysqli_query($conn,$query))
        {
            echo "<script>
            alert('Staff Added!!!')
            window.location.replace('HODdashboard.php');
         </script>";
        }
        else{
           echo "Error".mysqli_error($conn);
        }
    }
//echo "data not entered";
mysqli_close($conn);
?>