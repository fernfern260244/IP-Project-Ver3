<?php 
    session_start();    
    include('server.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
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
    <div class="bg-neutral-500  ml-56  mt-12  shadow-inner rounded-md flex flex-row drop-shadow-lg" style="width: 1000px;height: 600px;">
       <form action="signIn_db.php" method="post">
        <div class="bg-orange-200 rounded-l-lg " style="width: 500px; height: 600px;">
            <h1 class="text-orange-900 flex justify-center pt-10 pb-10 font-bold mb-4 " style="font-size: 50px;">Sign in</h1>
            <div class="mb-2 ml-24">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                    Username
                  </label>
                  <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" style="width: 320px;" id="username" type="text" placeholder="username" required name="username">   
            </div>
            <br>
            <div class=" mb-2 ml-24">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Password
                  </label>
                  <input class="shadow appearance-none border  border-stone-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" style="width: 320px;"  id="password" type="password" placeholder="******************" required name="password">                <br>
            </div>
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
                <?php if (isset($_SESSION['success'])) : ?>
                    <div class="success">
                        <h4 style="color: #7bae6A"> 
                            <?php 
                                echo $_SESSION['success'];
                                unset($_SESSION['success']);                            
                            ?>
                        </h4>
                    </div>
                <?php endif ?>
            </div>
            <a href="#" class="flex justify-center text-slate-600 mt-10 mb-5">Forget your Password?</a>
            
            <div class="flex justify-center relative mt-20">
                <div class="inset-x-0 bottom-64">
                    <button class=" rounded-md bg-amber-900 hover:bg-amber-700 text-white hover:text-black " type="submit" name="signin" style=" width: 150px;height: 50px; font-size: 20px; font-bold">Sign in</button>

                </div>
            </div>
        </div>
       </form>
       
        <div class="bg-amber-700 rounded-r-lg" style="width: 500px; height: 600px;">
            <h1 class="text-orange-200 flex justify-center pt-10  font-bold" style="font-size: 60px;">Welcome</h1>
            <h1 class="text-orange-200 flex justify-center   font-bold" style="font-size: 30px;">to</h1>
            <h1 class="text-orange-200 flex justify-center   font-bold" style="font-size: 50px;">2MTrade</h1>
        
            <div class="flex justify-center mt-64">
                <button class="rounded-md bg-orange-200 hover:bg-orange-100 text-amber-700  hover:text-black" style="width: 150px;height: 50px; font-size: 20px; font-bold" onclick="window.location.href='createAccount.php'">Create Account</button></button>
            </div>
        </div>
    </div>
</body>
</html>