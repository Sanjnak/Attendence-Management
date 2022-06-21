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
$query = "SELECT * FROM teacherdetail";
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
    <title>AdminPage</title>
    <link rel="stylesheet" href="css/main.css">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
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

<main class="w-screen sm:w-2/3 md:w-screen pt-1 px-2 bg-gray-300">
            <!-- content area -->
            <div class="flex items-center justify-between">
            
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
<table class="w-full text-sm text-left">
<thead class="text-xs text-black uppercase bg-gray-500">
<tr>
<th scope="col" class="px-16 py-5">
ID
</th>
<th scope="col" class="px-16 py-3">
Name
</th>
<th scope="col" class="px-16 py-3">
DOB
</th>
<th scope="col" class="px-16 py-3">
Phone
</th>
<th scope="col" class="px-16 py-3">
Email
</th>
<th scope="col" class="px-16 py-3">
Password
</th>
<th scope="col" class="px-16 py-3">
Department
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
<th scope="row" class="px-16 py-4 font-medium text-black whitespace-nowrap">
<?php echo $row['ID'] ?>
</th>
<td class="px-16 py-4">
<?php echo $row['Name'] ?>
</td>
<td class="px-16 py-4">
<?php echo $row['DOB'] ?>
</td>
<td class="px-16 py-4">
<?php echo $row['Phone'] ?>
</td>
<td class="px-16 py-4">
<?php echo $row['Email'] ?>
</td>
<td class="px-16 py-4">
<?php echo $row['Password'] ?>
</td>
<td class="px-16 py-4">
<?php echo $row['Department'] ?>
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
</body>
</html>