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
$query = "SELECT * FROM studenttable";
if(mysqli_query($conn , $query))
{
    $result = mysqli_query($conn , $query);
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
<main class="w-screen sm:w-2/3 md:w-4/5 pt-1 px-2 bg-gray-300">
            <!-- content area -->
            <div class="flex items-center justify-between">
            
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
<table class="w-full text-sm text-left">
<thead class="text-xs text-black uppercase bg-gray-500">
<tr>
<th scope="col" class="px-8 py-5">
ID
</th>
<th scope="col" class="px-8 py-3">
Name
</th>
<th scope="col" class="px-8 py-3">
DOB
</th>
<th scope="col" class="px-8 py-3">
Phone
</th>
<th scope="col" class="px-8 py-3">
Email
</th>
<th scope="col" class="px-8 py-3">
Password
</th>
<th scope="col" class="px-8 py-3">
Department
</th>
<th scope="col" colspan="2" class="px-8 py-3 text-center">
  Action
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
<th scope="row" class="px-6 py-4 font-medium text-black whitespace-nowrap">
<?php echo $row['ID'] ?>
</th>
<td class="px-8 py-4">
<?php echo $row['Name'] ?>
</td>
<td class="px-8 py-4">
<?php echo $row['DOB'] ?>
</td>
<td class="px-8 py-4">
<?php echo $row['Phone'] ?>
</td>
<td class="px-8 py-4">
<?php echo $row['Email'] ?>
</td>
<td class="px-8 py-4">
<?php echo $row['Password'] ?>
</td>
<td class="px-8 py-4">
<?php echo $row['Department'] ?>
</td>
<td class="px-4 py-4 text-right">
<a href="EditTeacherStudentForm.php?id=<?php echo $row['ID'] ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
</td>
<td class="px-4 py-4 text-right">
<a href="DeleteTeacherStudentRec.php?id=<?php echo $row['ID'] ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</a>
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
        </main>
  </div>
</div>

</body>
<script src="https://unpkg.com/flowbite@1.4.4/dist/flowbite.js"></script>
</html>