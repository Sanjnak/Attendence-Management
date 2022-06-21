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
        $query = "UPDATE teacherdetail SET Name = '$name1', DOB='$dob' , Phone= '$phn' , Email = '$email' , Password = '$passwd' ,
        Department = '$dept' WHERE ID = '$id' ";
        if(mysqli_query($conn,$query))
        {
            echo "<script>
            alert('Record Updated!!!')
            window.location.replace('ManageStaff.php');
         </script>";
        }
        else{
           echo "Error".mysqli_error($conn);
        }
    }
mysqli_close($conn);
?>