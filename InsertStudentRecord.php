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
$deptname ="";
if(isset($id) || isset($name1) || isset($dob) || isset($phn) || isset($email) || isset($passwd) || isset($dept) || isset($deptname))
    {
        $id = $_POST['id'];
        $name1 = $_POST['name'];
        $dob = $_POST['dob'];
        $phn = $_POST['phone'];
        $email = $_POST['email'];
        $passwd = $_POST['passwd'];
        $dept = $_POST['dept'];
      //  switch($dept)
      //  {
      //     case 0:
      //       $deptname = "batable";
      //       break;
      //     case 1:
      //       $deptname = "bbabfitable";
      //       break;
      //     case 2:
      //       $deptname = "bbafhmtable";
      //       break;
      //     case 3:
      //       $deptname = "bscmlttable";
      //       break;
      //     case 4:
      //       $deptname = "bcatable";
      //       break;
      //     case 5:
      //       $deptname = "dcetable";
      //       break;
      //     case 6:
      //       $deptname = "dptable";
      //       break;
      //  }
        $query = "INSERT INTO studenttable (ID , Name , DOB, Phone, Email , Password , Department) VALUES('$id' ,'$name1','$dob','$phn','$email','$passwd' , '$dept')";
        $query2 = "INSERT INTO attendencetable (ID , Name) VALUES('$id' ,'$name1')";
        if(mysqli_query($conn,$query) && mysqli_query($conn,$query2))
        {
          echo "<script>
          alert('Student Added!!!')
          window.location.replace('AddStudent.php');
       </script>";
        }
        else{
           echo "Error".mysqli_error($conn);
        }
    }

//echo "data not entered";
mysqli_close($conn);
?>