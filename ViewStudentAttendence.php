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
    $query = "SELECT * FROM attendencetable WHERE ID = '$id' ";
    $result = mysqli_query($conn , $query);
    if($result && mysqli_num_rows($result) >0)
    {
        $result1 = mysqli_fetch_assoc($result);
    }
}
$entry = mysqli_query($conn, "SHOW COLUMNS FROM wtattendence");
//$row = mysqli_fetch_object($entry);
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminPage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<style>
    .div1{
        text-align: right;
     /*   border: 3px solid white;*/
        position: absolute;
        left:1200px;
    }
    .table{
        margin-top: 80px;
        margin-left: 150px;
       /* margin-right: 30px;*/
        border : 3px solid white;
        width:900px;
    }
    .heading , .attenddiv{
    position: absolute;
    left:150px;
    top:110px;
    font-size: 35px;
    font-weight: 600;
}
.attenddiv{
  top:550px;
}
.spandate{
  font-size: 20px;
  margin-left: 450px;
}
</style>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#" style="font-size:50px">KeepUp</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
              <div class="div1">
                <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#" style="font-size:25px;">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="http://localhost/phpd/loginpage.html"style="font-size:25px;">LogIn</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#"style="font-size:25px;">More</a>
                    </li>
                  </ul>
              </div>
          </div>
        </div>
      </nav>
<table class="table table-dark table-striped">
    <div class="heading">Student Attendence Report</div>
          <?php
              $i = 0 ;
              while($row = mysqli_fetch_object($entry))
              {
          ?>
                <tr>
                  <td><?php echo $row->Field; ?></td>
                  <td><?php echo $result1[$i]; ?></td>
                </tr>
          <?php
              $i++;
              }
          ?>
</table>
<div class= "attenddiv">
  <h5>Total Days :
    <?php $i = (sizeof($result1)/2) - 2;
      echo $i; ?>
   </h5>
  <h5>Present  : 
    <?php
    $cnt = 0;
    $abs = 0;
    foreach($result1 as $e)
    {
      if($e == "Present")
      {
        $cnt++;
      }
      if($e == "Absent"){
        $abs++;
      }
    }
    echo $cnt/2;
    ?>
  </h5>
  <h5>Absent : 
    <?php
    echo $abs/2;
    ?>
  </h5>
</div>
</body>
</html>