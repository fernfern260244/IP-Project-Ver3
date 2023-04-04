<?php 
//เป็นการเชื่อมเข้ากับไฟล์ server.php เพื่อเข้ารหัสเชื่อมไปยังฐานข้อมูล
include ('server.php');
session_start();
$sql1 = mysqli_query($conn,"SELECT * FROM member WHERE member_id = '".$_SESSION['id']."'");
$row1 = mysqli_fetch_array($sql1);

    $id = $_GET['id'];
    $query = "SELECT * FROM product WHERE product_id = $id";
    $result = mysqli_query($conn, $query) or die("Error in sql : $query".mysqli_error($query));
    $row = mysqli_fetch_array($result);

    if (isset($_POST['update_product'])) {
        $p_id = $_POST['p_id'];
        $p_name = $_POST['p_name'];
        $p_infor = $_POST['p_infor'];
        $p_category = $_POST['p_category'];
        $p_quanity = $_POST['p_quanity'];
        $p_price = $_POST['p_price'];
        $p_imge = $_FILES['p_image']['name'];
        $p_image_temp = $_FILES['p_image']['tmp_name'];
        $p_image2 = $_FILES['p_image2']['name'];
        // $p_image2_temp = $_FILES['p_image2']['tmp_name'];
        $p_image3 = $_FILES['p_image3']['name'];
        // $p_image3_temp = $_FILES['p_image3']['tmp_name'];
        $image_folder = 'images/'.$p_imge;
        $old_image = $_POST['old_image'];
        ##UPDATE `product` SET product_id='$p_id', product_name='$p_name',product_imge ='$p_imge',product_image2 ='$p_image2,product_image3 ='$p_image3',product_inf.='$p_infor',category_id='$p_category',product_quantity='$p_quanity', product_price='$p_price' WHERE id = '$p_id' 
        
        if(!$p_imge){
          // echo "emtry1";
          $p_imge = $row['product_image'];
          //$folder_image = '';
        }
        if(!$p_image2){
          // echo "emtry2";
          $p_image2 = $row['product_image2'];
          //$folder_image2 = '';
        }
        if(!$p_image3){
          // echo "emtry3";
          $p_image3 = $row['product_image3'];
          //$folder_image3 = '';
        }else{
          // $folder_image = 'images/'.$p_image;
          // $folder_image2 =  'images/'.$p_image2;
          // $folder_image3 =  'images/'.$p_image3;

        }
        
        $update_query = mysqli_query($conn, "UPDATE `product` SET `product_id`='$p_id',`product_name`='$p_name',`product_image`='$p_imge',`product_image2`='$p_image2',
        `product_image3`='$p_image3',`product_inf.`='$p_infor',`product_quantity`='$p_quanity',`product_price/piece`='$p_price',`category_product`='$p_category' 
        WHERE product_id = '$p_id'") or die('query failed');
        
        if ($update_query) {
          move_uploaded_file($p_image_temp,$image_folder);
          unlink('images/'.$old_image);
          header('location: check.php');
        }
    }   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="output.css">
    <title>แก้ไขข้อมูลสินค้า</title>
</head>
<body >
    
<style>
    body {
        /* background-color: #e09129 !important; */
        background-image:url("images/back3.jpg");
        background-size: 1520px 1100px;
        

    }
</style>
<header id="header" class=" bg-slate-50 bg-opacity-5 shadow-lg rounded "style="background-color: white;">
  <div class="container mx-auto px-2 flex justify-between items-center ">

    <!-- logo -->
    <div class="mr-auto md:w-48 flex-shrink-0 pl-1">
      <a href="index.php">
        <img class=" w-20 h-20" src="images/logo.png" alt="">

      </a>
    </div>

    <!-- buttons -->
    <nav class=" flex justify-end">
      <ul class="ml-4 xl:w-48 flex items-center justify-end">
      <!-- icon eye -->
      <li class=" relative inline-block">
          <a class="" href="chat02.php">
          <div class="absolute -top-1 right-0 z-10 bg-yellow-400 text-xs font-bold px-1 py-0.5 rounded-sm">3</div>
          <svg class="h-9 lg:h-10 p-2 text-gray-500" aria-hidden="true" focusable="false" data-prefix="far" data-icon="heart" role="img"  xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16"> <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/> <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/> </svg>          </a>
        </li>
        <!-- alert -->
        <li class=" relative inline-block">
          <a class="" href="alert.php">
          <div class="absolute -top-1 right-0 z-10 bg-yellow-400 text-xs font-bold px-1 py-0.5 rounded-sm">3</div>
          <svg class="h-9 lg:h-10 p-2 text-gray-500" aria-hidden="true" focusable="false" data-prefix="far" data-icon="heart" role="img" xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16"> <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/> </svg>
          </a>
        </li>
        <!-- icon cart -->
        <li class=" relative inline-block ">
          <a class="" href="shoppingCart.php">
            <div class="absolute -top-1 right-0 z-10 bg-yellow-400 text-xs font-bold px-1 py-0.5 rounded-sm">12</div>
            <svg class="h-9 lg:h-10 p-2 text-gray-500" aria-hidden="true" focusable="false" data-prefix="far" data-icon="heart" role="img" xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-basket" viewBox="0 0 16 16"> <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9H2zM1 7v1h14V7H1zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5z"/> </svg>
          </a>
        </li>
       
        <!-- profile -->
        
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>

  <div x-data="{ open: false }" class="bg-white  dark:bg-white w-64  shadow flex justify-center items-center mr-6 ml-5">
      <div @click="open = !open" class="relative border-b-4 border-transparent py-3" :class="{'border-indigo-700 transform transition duration-300 ': open}" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100">
        <div class="flex justify-center items-center space-x-3 cursor-pointer">
          <div class=" w-7 h-7rounded-full overflow-hidden border-2 dark:border-white  border-white">
            <img src="images/<?php echo $row1['member_image']; ?>" alt="" class="w-full h-full object-cover">
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
              <a href="setting.php" class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-indigo-700">
                <div class="mr-3">
                  <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                </div>
                Setting
              </a>
            </li>
            <hr class="dark:border-gray-700">
            <li class="font-medium">
              <a href="logout.pop" class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-red-600">
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
    <script src="header.js">

    </script>
  
  <hr>
</header>

<!-- เนื้อหา  -->

<section class="max-w-4xl p-6 mx-auto rounded-md shadow-md bg-orange-200 mt-20 mb-20">
    <h1 class="text-xl font-bold text-white capitalize dark:text-white">แก้ไขข้อมูลสินค้า</h1>
    <form method = "post" enctype="multipart/form-data">
    
    <div class="grid grid-row-1 gap-6 mt-4 ">
    <input type="hidden" name="old_image" value="<?= $fetch_products['product_image']; ?>">
        <div>
            <label class=" text-black" >รหัสสินค้า </label>
            <input type = "hidden" name="p_id" value = "<?php echo $row['product_id'];?>"class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md  dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
        </div>
        <div>
            <label class=" text-black" >ชื่อสินค้า </label>
            <input type = "text" name="p_name" value = "<?php echo $row['product_name'];?>" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md  dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring" >
        </div>

        <div>
            <label class=" text-black" >ข้อมูลสินค้า</label>
            <textarea id="infor"  type="textarea" name="p_infor"class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md  dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring" ><?php echo $row['product_inf.'];?></textarea>
        </div>
        <div>
            
            <label class=" text-black" >หมวดหมู่</label>
            <select name="p_category" id="category" required>
            <option selected><?php echo $row['category_product'];?></option>
                <option value='เสื้อผ้า'>เสื้อผ้า</option>
                <option value='โทรศัพท์'>โทรศัพท์</option>
                <option value='บ้านและสวน'>บ้านและสวน</option>
                <option value='พระเครื่อง'>พระเครื่อง</option>
                <option value='นาฬิกา'>นาฬิกา</option>
                <option value='รองเท้า'>รองเท้า</option>
                <option value='กล้อง'>กล้อง</option>
                <option value='กระเป๋า'>กระเป๋า</option>
                <option value='ของใช้ในครัว'>ของใช้ในครัว</option>
                <option value='เครื่องใช้ไฟฟ้า'>เครื่องใช้ไฟฟ้า</option>
                <option value='หนังสือ'>หนังสือ</option>
                <option value='เครื่องสำอาง'>เครื่องสำอาง</option>
                <option value='อะไหล่รถ'>อะไหล่รถ</option>
                <option value='กีฬา'>กีฬา</option>
                <option value='อุปกรณ์สัตว์เลี้ยง'>อุปกรณ์สัตว์เลี้ยง</option>
                <option value='อุปกรณ์เครื่องเขียน'>อุปกรณ์เครื่องเขียน</option>
                <option value='ของใช้ทารก'>ของใช้ทารก</option>
                <option value='เครื่องประดับ'>เครื่องประดับ</option>
            </select>
            
        </div>
        <div>
            <label class=" text-black" >จำนวนสินค้า</label>
            <input type = "text" name="p_quanity" value = "<?php echo $row['product_quantity'];?>" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md  dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            
        </div>
        <div>
            <label class=" text-black">ราคา</label>
            <input type = "text" name="p_price" value = "<?php echo $row['product_price/piece'];?>" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md  dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            
        </div>

        
        
        <div>
            <label class="block text-sm font-medium text-black">
            รูปสินค้า  
          </label>
          <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-black border-dashed rounded-md">
            <div class="space-y-1 text-center">
              <svg class="mx-auto h-12 w-12 text-white" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
              <div class="flex text-sm text-gray-600">
                <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                  <span class="">Upload a file</span>
                  <input type="file" id="file-upload" name="p_image" values = "p_image" accept="image/png, image/jpg, image/jpeg"  class="sr-only">
                  <img src="images/<?php echo $row['product_image']?>"id="preview" alt="">
                </label>
                <p class="pl-1 text-white">แนบรูปสินค้า</p>
              </div>
              <p class="text-xs text-white">
                PNG, JPG, GIF up to 10MB
              </p>
            </div>
          </div>
        </div>

        <div>
            <label class="block text-sm font-medium text-black">
            รูปสินค้า2  
          </label>
          <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-black border-dashed rounded-md">
            <div class="space-y-1 text-center">
              <svg class="mx-auto h-12 w-12 text-white" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
              <div class="flex text-sm text-gray-600">
                <label for="file-upload2" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                  <span class="">Upload a file</span>
                  <input type="file" id="file-upload2" name="p_image2" values = "p_image2" accept="image/png, image/jpg, image/jpeg"  class="sr-only">
                  <img id="preview" alt="">
                </label>
                <p class="pl-1 text-white">แนบรูปสินค้า</p>
              </div>
              <p class="text-xs text-white">
                PNG, JPG, GIF up to 10MB
              </p>
            </div>
          </div>
        </div>

        <div>
            <label class="block text-sm font-medium text-black">
            รูปสินค้า3  
          </label>
          <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-black border-dashed rounded-md">
            <div class="space-y-1 text-center">
              <svg class="mx-auto h-12 w-12 text-white" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
              <div class="flex text-sm text-gray-600">
                <label for="file-upload3" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                  <span class="">Upload a file</span>
                  <input type="file" id="file-upload3" name="p_image3" values = "p_image3" accept="image/png, image/jpg, image/jpeg"  class="sr-only">
                  <img id="preview" alt="">
                </label>
                <p class="pl-1 text-white">แนบรูปสินค้า</p>
              </div>
              <p class="text-xs text-white">
                PNG, JPG, GIF up to 10MB
              </p>
            </div>
          </div>
        </div>
    </div>

    <div class="flex justify-end mt-6">
        <button type="submit" name ="update_product" value="edit"class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-green-500 rounded-md hover:bg-pink-700 focus:outline-none focus:bg-gray-600">แก้ไขสินค้า</button>
    </div>
</form>
</section>
<?php include 'footer.php'; ?>
</body>
</html>