<?php include('server.php'); 

  $sql = mysqli_query($conn,"SELECT * FROM member WHERE member_id = '".$_SESSION['id']."'");
  $row = mysqli_fetch_array($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="output.css">
</head>
<body>
<style>
    body {
        /* background-color: #e09129 !important; */
        background-image:url("images/back3.jpg");
        background-size: 1520px 1100px;
        

    }
</style>

  
<header id="header" class=" bg-white bg-opacity-5 shadow-lg rounded" style="background-color: white;">
  <div class="container m px-2 flex justify-between items-center ">

  <!-- logo -->
  <div class=" md:w-48 flex-shrink-0 pl-3 mr-auto">
      <a href="AdminHomepage.php">
        <img class=" w-20 h-20" src="images/logo.png" alt="">

      </a>
    </div>

        <!-- profile -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>

<div x-data="{ open: false }" class="bg-white  dark:bg-white w-64  shadow flex justify-center items-center mr-6 ml-5 ">
    <div @click="open = !open" class=" border-b-4 border-transparent py-3" :class="{'border-indigo-700 transform transition duration-300 ': open}" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100">
      <div class="flex justify-center items-center space-x-3 cursor-pointer">
      <div class=" w-7 h-7rounded-full overflow-hidden border-2 dark:border-white  border-white">
            <img src="images/<?php echo $row['member_image']; ?>" alt="" class="w-full h-full object-cover">
          </div>
        <div class="font-semibold  dark:text-black text-gray-900 text-base">
          <div class="cursor-pointer"><?php echo $_SESSION['username'] ; ?></div>
        </div>
      </div>
      <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute w-40 px-5 py-3 dark:bg-amber-400  bg-white rounded-lg shadow border dark:border-transparent mt-5 ">
        <ul class="space-y-3 dark:text-white ">
          <li class="font-medium">
            <a href="logout.php" class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-red-600">
              <div class="mr-3 text-red-600">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
              </div>
              Logout
            </a>
          </li>
        </ul>
      </div>
    </div>
</div>
       
      
      </ul>
    </nav>
  
  <hr>
</header>  
  <script src="header.js">

  </script>
    
</body>
</html>