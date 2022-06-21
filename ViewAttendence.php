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
//$date = $_POST['date'];
$query2 = "SELECT * FROM attendencetable ";
if(mysqli_query($conn , $query2))
  {
    $result = mysqli_query($conn , $query2);
  }  
else
  {
    echo "error". mysqli_error($conn);
  }
$query3 = "SELECT count(*) as No_of_col FROM information_schema.columns WHERE table_name = 'attendencetable'";
if(mysqli_query($conn , $query3))
{
  $cnt = mysqli_query($conn , $query3);
$cntstd = mysqli_fetch_array($cnt);

}
else{
  echo mysqli_error($conn);
}
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudentPage</title>
    <link rel="stylesheet" href="css/main.css">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.4/dist/flowbite.min.css" />
<script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <!-- NavBar -->
  <nav class="relative mx-4 p-6">
    <div class="flex items-center justify-between">
        <div class="pt-2 z-10">
            <img src="Screenshot 2022-05-02 182055.png" alt="" height="80%" width="50%">
        </div>
        <div class="hidden md:flex space-x-8 pt-3 mr-10 ">
          <a href="index.html" class=" text-cyan-600 text-lg hover:text-cyan-800 font-bold">Home</a>
          <a href="#"class="text-cyan-600 text-lg hover:text-cyan-800 font-bold">About Us</a>
          <a href="#"class="text-cyan-600 text-lg hover:text-cyan-800 font-bold">Contact</a>
          <div>
              <button class="text-cyan-600 text-lg hover:text-cyan-800 font-bold focus:outline-none" id="menu-btn">LogIn</button>
              
              <div class="absolute shadow-xl  bg-gray-200 hidden flex-col rounded-lg mt-1 p-2 text-base w-32 right-0 z-10" id="dropdown">
                  <a href="LoginPage.html" class="px-4 py-2 hover:bg-cyan-600 hover:text-white rounded">HOD</a>
                  <a href="LoginTeacherPage.html" class="px-4 py-2 hover:bg-cyan-600 hover:text-white rounded">Teachers</a>
                  <!-- <a href="LoginStudentPage.html" class="px-4 py-2 hover:bg-cyan-600 hover:text-white rounded">Students</a> -->
              </div>
          </div>
      
          <script>
              window.addEventListener('DOMContentLoaded', ()=> {
                  const menuBtn = document.querySelector('#menu-btn')
                  const dropdown = document.querySelector('#dropdown')
                  
                  menuBtn.addEventListener('click', () => {
                      dropdown.classList.toggle('hidden')
                      dropdown.classList.toggle('flex')
                  })
              })
          </script>
      </div>
</nav>

<div class=" mx-4">
  <div class="flex flex-row flex-wrap py-4">
  <aside class="w-64" aria-label="Sidebar">
<div class="overflow-y-auto py-4 px-3 rounded bg-cyan-700 shadow-xl">
<ul class="space-y-2">
<li>
<a href="TeacherDashboard.php" class="flex items-center p-2 text-base font-normal text-white rounded-lg hover:bg-gray-100 hover:text-gray-900">
<svg class="w-6 h-6 transition duration-75 group-hover:text-gray-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
<span class="ml-3">Dashboard</span>
</a>
</li>
<hr>
<li>
<div class="flex items-center p-2 text-base font-normal text-gray-400 ">Student</div>
<a href="AddStudent.php" class="flex items-center p-2 text-base font-normal text-white rounded-lg hover:bg-gray-100 hover:text-gray-900">
<svg class="flex-shrink-0 w-6 h-6 transition duration-75 group-hover:text-gray-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
<span class="flex-1 ml-3 whitespace-nowrap">Add Student</span>
</a>
</li>
<li>
<a href="ManageTeacherStudent.php" class="flex items-center p-2 text-base font-normal text-white rounded-lg hover:bg-gray-100 hover:text-gray-900">
<svg class="flex-shrink-0 w-6 h-6 transition duration-75 group-hover:text-gray-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"></path><path d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"></path></svg>
<span class="flex-1 ml-3 whitespace-nowrap">Manage Student</span>
</a>
</li>
<hr>
<li>
<div class="flex items-center p-2 pt-3 text-base font-normal text-gray-400 ">Attendence</div>
<a href="attendance.php" class="flex items-center p-2 text-base font-normal text-white rounded-lg hover:bg-gray-100 hover:text-gray-900">
<svg class="flex-shrink-0 w-6 h-6 transition duration-75 group-hover:text-gray-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
<span class="flex-1 ml-3 whitespace-nowrap">Take Attendence</span>
</a>
</li>
<li>
            <button type="button" class="flex items-center p-2 w-full text-base font-normal text-white rounded-lg transition duration-75 group hover:bg-white hover:text-black focus:outline-none" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example" >
                  <svg class="flex-shrink-0 w-6 h-6 text-white transition duration-75 group-hover:text-black " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path></svg>
                  <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Attendence Report</span>
                  <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
            <ul id="dropdown-example" class="hidden py-2 space-y-2">
                  <li>
                     <a href="studentattendencereportForm.html" class="flex items-center p-2 pl-5 w-full text-base font-normal text-white rounded-lg transition duration-75 group hover:bg-white hover:text-black">Student Attendence Report</a>
                  </li>
                  <li>
                     <a href="ClassAttendencereport.html" class="flex items-center p-2 pl-5 w-full text-base font-normal text-white rounded-lg transition duration-75 group hover:bg-white hover:text-black">Class Attendence Report</a>
                  </li>
            </ul>
         </li>

<li>
  <br><br><br><br><br><br><br><br><br><br>
</li>
</ul>
</div>
</aside>
<div id="main" class="w-screen sm:w-2/3 md:w-4/5 pt-1 px-2 bg-gray-300">
            <!-- content area -->
            <div class="flex items-center justify-between">        
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
  <div class="flex items-right justify-between text-2xl font-bold text-cyan-700 uppercase mt-3 pb-3 font-family: 'Open Sans', sans-serif;">
    <div >
    BCA Attendence Report
    </div>
  </div>
<table class="w-full text-sm text-left px-2">
<thead class="text-xs text-black uppercase bg-gray-500">
<tr>
<th scope="col" class="px-24 py-5">
Student ID
</th>
<th scope="col" class="px-48 py-3">
Student Name
</th>
<th scope="col" class="px-40 py-3">
Attendence Percentage
</th>
</tr>
</thead>
<tbody>
<?php
      if(mysqli_num_rows($result))
      {
          while($row = mysqli_fetch_assoc($result))
          {
      ?>
<tr class="border-b  odd:bg-gray-100 even:bg-gray-300">
<th scope="row" class="px-24 py-4 font-medium text-black whitespace-nowrap">
<?php echo $row['ID'] ?>
</th>
<td class="px-48 py-4">
<?php echo $row['Name'] ?>
</td>
<td class="px-40 py-4">
<?php
    $i = $cntstd['No_of_col'];
    while($i)
    {
      $cntpresent = 0;
      foreach($row as $e)
      {
        if($e == "Present")
        {
          $cntpresent++;
        }
      }
      $i--;
    }
    $prsntcnt =  ($cntpresent/2);
    $att = ($prsntcnt / ($cntstd['No_of_col']-2));
    $attper = $att * 100;
    echo round($attper) . " %";
?>
</td>
<?php
          }
      }
      ?>
</tr>
</tbody>
</table>
</div>
</div>
<div class="flex items-center justify-between">
<button onClick="printPageArea('main')" class="bg-cyan-600 hover:bg-cyan-700 text-white font-bold py-2 px-6 ml-3 mt-8 rounded focus:outline-none focus:shadow-outline">Print the report</button>
    </div>
    </div>
</div>
</div>

</body>
<script src="https://unpkg.com/flowbite@1.4.4/dist/flowbite.js"></script>
<script>
  function printPageArea(areaID){
    var printContent = document.getElementById(areaID);
    var WinPrint = window.open('', '', 'width=900,height=650');
    WinPrint.document.write(printContent.innerHTML);
    WinPrint.document.close();
    WinPrint.focus();
    WinPrint.print();
    WinPrint.close();
}
  </script>
</html>

