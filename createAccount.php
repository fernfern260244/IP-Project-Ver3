<?php 
session_start();
require_once('server.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<style>
    body {
        /* background-color: #e09129 !important; */
        background-image:url("images/back3.jpg");
        background-size: 1520px 1100px;
        backdrop-filter: blur(5px);
    }
</style>
    <div class="bg-neutral-500  ml-56 mt-8  shadow-inner rounded-md flex flex-row drop-shadow-lg" style="width: 1000px;height: 650px;">
        
        <div class="bg-amber-700 rounded-l-lg" style="width: 500px; height: 650px;">
            <h1 class="text-orange-200 flex justify-center pt-10  font-bold" style="font-size: 60px;">Welcome</h1>
            <h1 class="text-orange-200 flex justify-center   font-bold" style="font-size: 30px;">to</h1>
            <h1 class="text-orange-200 flex justify-center  pb-3 font-bold" style="font-size: 50px;">2MTrade</h1>
        
            <div class="flex justify-center mt-64">
                <button class="rounded-md bg-orange-200 hover:bg-orange-100 text-amber-700  hover:text-black" style="width: 150px;height: 50px; font-size: 20px; font-bold" onclick="window.location.href='signIn.php'">Sign in</button>
            </div>
        </div>
      <form action="createAccount_db.php" method="post">
        <div class="bg-orange-200 rounded-r-lg " style="width: 500px; height: 650px;">
            <h1 class="text-orange-900 flex justify-center pt-10 pb-10 font-bold" style="font-size: 50px;">Create Account</h1>
            <div class="flex justify-center" style="color: red;">
                <?php if (isset($_SESSION['error'])) : ?>
                    <div class="error">
                        <h4>
                            <?php 
                                echo $_SESSION['error'];
                                unset($_SESSION['error']);                            
                            ?>
                        </h4>
                    </div>
                <?php endif ?>
            </div>
            <div class=" ml-24">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                    Username
                  </label>
                  <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" style="width: 320px;" id="username" type="text" placeholder="Username" required name="username">
            </div>
            <br>
            <div class=" ml-24">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="E-mail">
                    E-mail
                  </label>
                  <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" style="width: 320px;" id="E-mail" type="text" placeholder="E-mail" required name="email">                
            </div>
            <br>
            <div class="ml-24">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password_1">
                    Password
                  </label>
                  <input class="shadow appearance-none border  border-zinc-400 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" style="width: 320px;"  id="password" type="password" placeholder="******************" required name="password"><br>
            </div>
            <div class="ml-24 mb-10">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password_2">
                    Confirm Password
                  </label>
                  <input class="shadow appearance-none border border-zinc-400 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" style="width: 320px;"  id="password" type="password" placeholder="******************" required name="c_password"><br>
            </div>
            
            
            <div class="flex justify-center ">
                <button class=" rounded-md bg-amber-900 hover:bg-amber-700 text-white hover:text-black " type="submit" name="submit" style=" width: 150px;height: 50px; font-size: 20px; font-bold" onclick="">Create Account</button>
            </div>
        </div>
      </form>
       
        
    </div>
</body>
</html>