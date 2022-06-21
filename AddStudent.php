<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/main.css">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<script>
  function validationform()
  {
      let x = document.forms["form1"]["username"].value;
      let i = x.indexOf("@");
      let j = x.lastIndexOf(".");
      let y = i - j;
      if(x == "" || (x[0] >= "0" && x[0] <= "9")||i <= 0 || y <= 1)
      {
          alert("Username Invalid");
          return false;
      }
  }
</script>
<body>
  <!-- NavBar -->
  <nav class="relative container mx-4 p-6">
    <div class="flex items-center justify-between">
        <div class="pt-2">
            <img src="Screenshot 2022-05-02 182055.png" alt="" height="80%" width="50%">
        </div>
        <div class="hidden md:flex space-x-8 pt-3">
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
<!-- Dashboard -->
<div class="relative p-8  bg-cyan-600">
  <div class="flex items-center justify-between">
    <div class=" text-3xl px-16 text-white font-bold">
      Add Student
    </div>
</div>
</div>
<!-- Form -->
<div class="max-w-8xl">
  <form class="w-full bg-white shadow-md rounded px-24 pt-12 pb-8 mb-4 " action="InsertStudentRecord.php" method="post">
    <div class="flex flex-wrap  mb-6">
      <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
          ID
        </label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="00150102020" name="id" autocomplete="off" required>
      </div>
      <div class="w-full md:w-1/2 px-3">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
          Full Name
        </label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Jane" name="name" autocomplete="off" required>
      </div>
    </div>
    <div class="flex flex-wrap  mb-6">
      <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
          DOB
        </label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="date"  name="dob" autocomplete="off" required>
      </div>
      <div class="w-full md:w-1/2 px-3">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
          Phone
        </label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="999-999-9999" name="phone" autocomplete="off" required>
      </div>
    </div>
    <div class="flex flex-wrap  mb-6">
      <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
          Email
        </label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="email" placeholder="Doe@gmail.com" name="email" autocomplete="off" required>
      </div>
      <div class="w-full md:w-1/2 px-3">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
          Password
        </label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="password" placeholder="**********" name="passwd" autocomplete="off" required>
      </div>
      
    </div>
    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
        Department
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="BCA" name="dept" autocomplete="off" required>
      </div>
    <div class="flex items-center justify-between">
      <input type="submit" value="Submit" class="bg-cyan-600 hover:bg-cyan-700 text-white font-bold py-2 px-6 ml-3 mt-8 rounded focus:outline-none focus:shadow-outline" >
    </div>
    </div>
  </form>
</div>
</body>

</html>