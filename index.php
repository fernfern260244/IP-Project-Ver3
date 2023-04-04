<?php include('server.php'); 
session_start();  


 $sql = "SELECT * FROM member ,product ";
 $result = mysqli_query($conn, $sql);

// ดึงข้อมูลแถวเดียวออกมาเป็น associative array
$row = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2MTrade </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="output.css">
    <style>
      .block {
          position: relative;
          width: 990px;
          left: 200px;
          top: -300px;
          z-index: 0;

      }
      .block1 {
        left: float;
        width: 300px;
        height: 350px;
        margin-left: 220px;
        margin-top: 30px;
        box-shadow: 10px 15px 10px #333;
        
      }
      .img {
          width: 300px;
          height: 300px; 
          overflow: hidden;
	        text-align: center;
      }
      .img1 {
          width: 100%;
          height: 100%; 
      }
      .icon1 {
        margin-left: 80px;
      }
    </style>
</head>
<body>
<style>
    body {
        background-color: #e09129 !important;
    }
</style>

  
<header id="header" class=" bg-white bg-opacity-5 shadow-lg rounded" style="background-color: white;z-index: 1;">
  <div class="container m px-2 flex justify-between items-center ">

    <!-- logo -->
    <div class=" md:w-48 flex-shrink-0 pl-3 mr-auto">
      <a href="">
        <img class=" w-20 h-20" src="./images/logo.png" alt="">

      </a>
    </div>

    <!-- search -->
    <div class=" mr-20">
      <div class="lg:flex  items-center space-x-2 bg-amber-500 py-1 px-1 rounded-full  ">
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5  text-amber-600 cursor-pointer" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
          </span>
          <input class="outline-none bg-amber-500 placeholder-orange-900"  type="text" placeholder="ค้นหา" />
        </div> 
    </div>
    

    <!-- buttons -->
    <nav class="contents">
      <ul class="ml-4 xl:w-48 flex items-center justify-end">
      
      <!-- icon see -->
      <li class="  relative inline-block">
          <a class="" href="chat02.php">
          <div class="absolute -top-1 right-0 z-10 bg-yellow-400 text-xs font-bold px-1 py-0.5 rounded-sm">3</div>
          <svg class="h-9 lg:h-10 p-2 text-gray-500" aria-hidden="true" focusable="false" data-prefix="far" data-icon="heart" role="img"  xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16"> <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/> <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/> </svg>          </a>
        </li>
        <!-- alert -->
        <li class="  relative inline-block">
          <a class="" href="alert.php">
          <div class="absolute -top-1 right-0 z-10 bg-yellow-400 text-xs font-bold px-1 py-0.5 rounded-sm">3</div>
          <svg class="h-9 lg:h-10 p-2 text-gray-500" aria-hidden="true" focusable="false" data-prefix="far" data-icon="heart" role="img" xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16"> <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/> </svg>
          </a>
        </li>
       <!-- cart -->
        <li class="relative inline-block">
          <a class="" href="shoppingCart.php">
            <div class="absolute -top-1 right-0 z-10 bg-yellow-400 text-xs font-bold px-1 py-0.5 rounded-sm">12</div>
            <svg class="h-9 lg:h-10 p-2 text-gray-500" aria-hidden="true" focusable="false" data-prefix="far" data-icon="heart" role="img" xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-basket" viewBox="0 0 16 16"> <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9H2zM1 7v1h14V7H1zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5z"/> </svg>
          </a>
        </li>

        <!-- profile -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>

<div x-data="{ open: false }" class="bg-white  dark:bg-white w-64  shadow flex justify-center items-center mr-6 ml-5">
    <div @click="open = !open" class=" border-b-4 border-transparent py-3" :class="{'border-indigo-700 transform transition duration-300 ': open}" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100">
      <div class="flex justify-center items-center space-x-3 cursor-pointer">
        <div class=" w-7 h-7 rounded-full overflow-hidden border-2 dark:border-white  border-white">
          <img src="images/<?php echo $_SESSION['img']; ?>" alt="" class="w-full h-full object-cover">
        </div>
        <div class="font-semibold  dark:text-black text-gray-900 text-base">
          <div class="cursor-pointer"><?php echo $_SESSION['username'] ; ?></div>
        </div>
      </div>
      <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute w-40 px-5 py-3 dark:bg-amber-400  bg-white rounded-lg shadow border dark:border-transparent mt-5">
        <ul class="space-y-3 dark:text-white">
          <li class="font-medium">
            <a href="profileCustomer.php" class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-indigo-700">
              <div class=" mr-3">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
              </div>
              Account
            </a>
          </li>
          <li class="font-medium">
            <a href="createAccount.php" class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-indigo-700">
              <div class=" mr-2">
              <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/> <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/> </svg>                </div>
              CreateAccount
            </a>
          </li>
          <li class="font-medium">
            <a href="signIn.php" class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-indigo-700">
              <div class=" mr-3">
              <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16"> <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/> <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/> </svg>                </div>
              Sign in
            </a>
          </li>
          <li class="font-medium">
            <a href="#" class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-indigo-700">
              <div class="mr-3">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
              </div>
              Setting
            </a>
          </li>
          <hr class="dark:border-gray-700">
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
  
  <script sytle="z-index: 3;" src="header.js"></script>
  
<div class="grid grid-rows-2 grid-flow-col gap-4" sytle="z-index: 1;">
  <div class="row-span-3 gap-4" sytle="z-index: 1;">
    <div class=" ">
        <div  class=" bg-orange-100 bg-blur-sm  w-64 justify-center flex-col mt-5 mr-5 ml-5 mb-5 rounded-md drop-shadow-lg shadow-inner">
              <script language="JavaScript">
              <!--
              function MM_jumpMenu(targ,selObj,restore){ //v3.0
               // eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
               window.open(selObj.options[selObj.selectedIndex].value);
                if (restore) selObj.selectedIndex=0;
              }
              //-->
             </script>
              <select name="menu1" onchange="MM_jumpMenu('parent',this,0)" class="select select-success w-40 h-9 mt-8 ml-12 rounded-md">
                  <option disabled selected>หมวดหมู่</option>
                  <option value="phone.html">โทรศัพท์</option>
                  <option value="">บ้านและสวน</option>
                  <option value="">พระเครื่อง</option>
                  <option value="">นาฬิกา</option>
                  <option value="">รองเท้า</option>
                  <option value="">กล้อง</option>
                  <option value="">กระเป๋า</option>
                  <option value="">ของใช้ในครัว</option> 
                  <option value="">เครื่องใช้ไฟฟ้า</option>
                  <option value="">หนังสือ</option>
                  <option value="">เครื่องสำอาง</option>
                  <option value="">อะไหล่รถ</option>
                  <option value="">กีฬา</option>
                  <option value="">อุปกรณ์สัตว์เลี้ยง</option>
                  <option value="">อุปกรณ์เครื่องเขียน</option>
                  <option value="">ของใช้ทารก</option>
                  <option value="">เครื่องประดับ</option>
                  <option value="">เสื้อผ้า</option>
                </select>
          
                <div class="flex flex-col-reverse  w-40 ml-16 mt-20 ">
                  <button  class="rounded-md bg-amber-900 hover:bg-amber-800 shadow-inner h-10 w-28 text-white  " onclick="window.location.href='help.php'">ช่วยเหลือ</button>
                </div>
                <div>
                  <div class="ml-24 mt-5 mb-5">
                      <a href="setting.php">
                      <svg class="h-9 lg:h-10 p-2 text-black" aria-hidden="true" focusable="false" data-prefix="far" data-icon="heart" role="img" xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16"> <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/> <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/> </svg>
                      </a>
                  </div>
                </div>
             </div>
    </div>

    <div class="block grid grid-cols-3">
    <?php 
                //ดึงข้อมูลในตาราง product มาแสดง
					$select = mysqli_query($conn, "SELECT * FROM `product`") or die('query failed');
          
                    //ถ้าจำนวนแถวในตารางproductมากกว่า 0 ก็ให้ดึงแถวในตารางมาแสดง
					if (mysqli_num_rows($select) > 0) {
						while ($row = mysqli_fetch_assoc($select)) {
							
				?>
    
    <div class="block1">
        <div class="block2 bg-amber-200 rounded-lg shadow-inner flex-col">
          <div class="img bg-slate-300 rounded-lg ">
            <a href="seeProduct.php?id=<?php echo $row['product_id']; ?>">
              <img class="img1 rounded-t-lg" src="images/<?php echo $row['product_image']; ?>" alt="">
            </a>
          </div>
          <div class="bg-slate-800 h-14 rounded-b-lg flex flex-row ">
            <button class="bg-gray-200 h-14 w-full rounded-bl-lg"><img style="width: 30px;height: 30px;" class="icon1" src="images/chat2.png" alt=""></button>
            <button class="bg-gray-200 h-14 w-full rounded-br-lg"><img style="width: 30px;height: 30px;" class="ml-10" src="images/shop.png" alt=""></button>
          </div>
        </div>
          
          
         </div>
    <?php
      }
    }
    ?>
      </div>
         
      
    </div>

  </div>
</div>
<?php include 'footer.php'; ?>


</body>
</html>