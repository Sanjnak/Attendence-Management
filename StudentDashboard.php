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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminPage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://cdn.tailwindcss.com"></script>
</head>
<style>
    .div1{
        text-align: right;
     /*   border: 3px solid white;*/
        position: absolute;
        left:1200px;
    }
    .bodydiv{
        height : 656px;
        width : 1520px;
        
    /*    border: 2px solid black;*/
    }
    .func1{
        border:2px solid black;
        height : 90px;
        text-align: center;
        padding : 30px;
        font-size: 20px;
        background-color:#212529 ;
        color:white;
    }
    .maincontent{
    /*  border:2px solid grey;*/

  /*  border-left: 2px solid grey;*/
     position: absolute;
     top:102px;
      left:330px;
      width:1275px;
      height:600px;
      display:inline-block;
      background-color: white;
      padding-left: 0;
      padding-right: 200px;
      padding-top:30px ;
      border-radius: 3px;
    }
    .imgdiv{
   /*   border:2px solid ;*/
      width : 205px;
      background-color: white;
      
    }
    .headspan{
        padding-left: 50px;
        font-size: 60px;
        font-family: 'Merriweather', serif;
        font-weight: 800;
    /*    border: 2px solid black; */
        position: absolute;
        top:50px;
        left:240px;
        color: #212529;
    }
    p{
        color: #212529;
    }
    .sidebar {
  position:absolute;
  left:0%;
  top: 102px;
  width: 263px;
  position:absolute;
  height: 650px;
  overflow: auto;
 
  border-right: 2px solid grey;
  background-color:#212529;
  
 box-shadow: 0 0 5px gray;
}
#attendbtn{
  background-color: #212529;
  padding: 0 0 0 0;
  border : 2px #212529;
  margin : -40px;
  padding-top:20px;
}

/* Sidebar links */
.sidebar a , #attendbtn {
  display: block;
  color: black;
  margin-top: 10px;
  padding-top: 10px;
  padding-left: 30px;
  padding-bottom: 10px;
  text-decoration: none;
  height: 40px;
  color: #babfbb;
  width:260px;
  font-weight: 400;
  font-size: larger;
}
.sidebar a:hover{
    background-color: white;
    color:#212529;
    border-radius: 3px;
    padding-left: 30px;
    width:230px;
}
.sidebar a {float: left;}
.navbar{
  border-bottom: 3px solid grey;
}
.footer{
  border-top:2px solid #d9d8d4;
  position:absolute;
  top:720px;
  height:37px;
  width:1520px;
  background-color: white;
  color:black;
  text-align: center;
  word-spacing: 15px;
}
#h1{
  color: white;
    font-weight: 500;
}
#h1:hover{
  color:black;
}
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  width: 200px;
  border-radius: 5px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  margin-left: 30px;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  font-size: 15px;
  text-decoration: none;
  display: block;
  margin-left: -40px;
}
.dropdown-content a:hover{
    color:white;
    background-color: #212529;
    font-size: 15px;
    width: 220px;
    margin-top : 5px;
    margin-left : -15px;
}
.dropdown:hover .dropdown-content {
     display: block;
    }
</style>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <span class="navbar-brand"  style="font-size:50px">KeepUp</span>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
              <div class="div1">
                <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="mainloginpage.html" style="font-size:25px;">Home</a>
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
      <div class="bodydiv">
            <div class="sidebar">
                <a href="StudentDashboard.php" id="h1">Home</a>
                <a href="ViewStudentAttendence.php">View Attendance</a>
              </div>
            <div class="maincontent">
              <div class="imgdiv">
                <img src="download.png" alt="" width="200" height="170" >
              </div>
              <span class="headspan">Hey!&nbsp;&nbsp;<?php echo $_SESSION["name"] ?></span><br><br>
              <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum expedita eligendi et ut ex quisquam laboriosam, reprehenderit perferendis odio maiores sequi beatae provident minima, delectus assumenda cumque, officia temporibus doloremque.
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis molestias facere aliquid inventore atque, aliquam quidem est facilis impedit nesciunt corporis quibusdam, delectus dolores blanditiis. Numquam minima dolorum deleniti expedita.
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem ad dolorum eum magni optio vel impedit, incidunt, natus quae, architecto ullam repellendus ea dolorem provident. Obcaecati numquam dolores quaerat assumenda maxime quasi esse ullam harum natus, reiciendis autem commodi eius iusto dolorum illo pariatur atque facilis quo exercitationem. Nihil sequi pariatur minima eaque soluta, officiis quia ex, eius dolorum nulla aut laboriosam est. Numquam illum enim quos animi rerum deleniti, ab consequatur possimus dicta sed ut harum debitis eveniet earum molestiae rem est nihil consequuntur dolor eius accusantium explicabo. Assumenda voluptatum, deserunt animi a ipsa natus. Perspiciatis sit totam magnam.
              </p>
            </div>
          
      </div>
      <div class="footer">
        <a href="#">FAQs</a>
        <a href="#">ContactUs</a>
        <a href="#">Terms</a>
        <a href="#">Privacy</a>
      </div>
</body>
</html>