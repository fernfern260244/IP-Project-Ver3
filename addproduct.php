<?php include ('server.php'); 
session_start();
$sql = mysqli_query($conn,"SELECT * FROM member WHERE member_id = '".$_SESSION['id']."'");
$row = mysqli_fetch_array($sql);

//เป็นการเชื่อมเข้ากับไฟล์ server.php เพื่อเข้ารหัสเชื่อมไปยังฐานข้อมูล

//เป็นการเช็คค่าตัวแปรว่าค่านั้นๆว่างหรือไม่
if(isset($_POST['add_product'])){
    $name = $_POST['p_name'];
    $infor = $_POST['p_infor'];
    $category = $_POST['p_category'];
    $quanity = $_POST['p_quanity'];
    $price = $_POST['p_price'];
    $m_id = $_SESSION['id'];
    $image = $_FILES['p_image']['name'];
    $image_temp_name = $_FILES['p_image']['tmp_name'];
    $folder_image = 'images/'.$image;
    $image2 = $_FILES['p_image2']['name'];
    $image_temp_name2 = $_FILES['p_image2']['tmp_name'];
    $folder_image2 = 'images/'.$image2;
    $image3 = $_FILES['p_image3']['name'];
    $image_temp_name3 = $_FILES['p_image3']['tmp_name'];
    $folder_image3 = 'images/'.$image3;
//เป็นการเพิ่มข้อมูลเข้าในฐานข้อมูลที่ตาราง product 

$mysql = "INSERT INTO `check_product` (`check_product_name`, `check_product_image`, `check_product_image2`, `check_product_image3`,
 `check_product_inf.`, `check_product_quantity`, `check_product_price/piece`, `check_category_product`, `check_member_id`) 
VALUES ('$name', '$image', '$image2', '$image3', '$infor', '$quanity', '$price', '$category', '".$_SESSION['id']."')";
    
//เก็บรูปภาพที่เพิ่มเข้าไปในฐานข้อมูล ให้แอดเพิ่มเข้าในโฟลเดอร์ทางเว็บโดยอัตโนมัติ
    $result2= mysqli_query($conn,$mysql);
    if($result2){
        move_uploaded_file($image_temp_name, $folder_image);
    }
    if($result2){
        move_uploaded_file($image_temp_name2, $folder_image2);
    }
    if($result2){
        move_uploaded_file($image_temp_name3, $folder_image3);
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
    <title>เพิ่มสินค้า</title>
</head>
<body >
<?php include 'header.php'; ?>
   
<section class="max-w-4xl p-6 mx-auto rounded-md shadow-md bg-orange-200 mt-10 mb-10">
    <h1 class="text-xl font-bold text-white capitalize dark:text-white">เพิ่มสินค้า</h1>
    <form method="post" enctype="multipart/form-data">
        <div class="grid grid-row-1 gap-6 mt-4 ">
            <div>
                <label class=" text-black" >ชื่อสินค้า </label>
                <input id="name" type="text" name="p_name" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md  dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class=" text-black" >ข้อมูลสินค้า</label>
                <textarea id="infor" type="textarea" name="p_infor" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md  dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"></textarea>
            </div>
            <div>
                
                <label class=" text-black" >หมวดหมู่</label>
                <select name="p_category" id="category" required>
                    <option value="">-Choose-</option>
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
                <input id="quanity" type="number" name ="p_quanity" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md  dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>
            <div>
                <label class=" text-black">ราคา</label>
                <input id="price" type="number" name ="p_price" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md  dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
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
                      <input id="file-upload" name="p_image" type="file" accept="image/png, image/jpg, image/jpeg" required class="sr-only">
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
                      <input id="file-upload2" name="p_image2" type="file" accept="image/png, image/jpg, image/jpeg" required class="sr-only">
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
                      <input id="file-upload3" name="p_image3" type="file" accept="image/png, image/jpg, image/jpeg"  class="sr-only">
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
            <button type="submit" name ="add_product" value="add product"class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-green-500 rounded-md hover:bg-pink-700 focus:outline-none focus:bg-gray-600">เพิ่มสินค้า</button>
        </div>
    </form>
</section>

<?php include 'footer.php'; ?>
</body>
</html>
<?php mysqli_close($conn);?>