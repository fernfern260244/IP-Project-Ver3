<?php include('server.php'); 
  session_start();  
  $sql = mysqli_query($conn,"SELECT * FROM member WHERE member_id = '".$_SESSION['id']."'");
  $row = mysqli_fetch_array($sql);


// ดึงข้อมูลแถวเดียวออกมาเป็น associative array

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
<?php include 'header.php'; ?>

       <div class="bg-orange-200 ml-36 mt-10 mb-20 rounded-md flex flex-col shadow-md shadow-inner" style="width: 1200px;height: 600px;">
            <div class="bg-slate-100 mt-9 ml-12 flex flex-col" style="width: 1100px;height: 150px;">
                <div class="bg-amber-600 flex flex-row" style="width: 1100px;height: 50px;">
                    <input type="checkbox" checked="checked" class="checkbox  ml-10 w-5 " />
                    <span><p class="ml-10 mt-2 text-2xl">ชื่อร้าน</p></span>
                </div>

                <div class="bg-orange-300 flex flex-row shadow-lg" style="width: 1100px;height: 100px;">
                    <input type="checkbox" checked="checked" class="checkbox  ml-10 w-5 " />
                    <a href=""><img style="width: 90px;" class="mt-1 ml-10 rounded-md" src="images/Celine-Mini-Ava-in-Tromphe-Canvas-and-Calfskin-Tan-Shoulder-Bag.jpg" alt=""></a>
                    <span><p class="mt-8 ml-20 text-3xl">ชื่อสินค้า</p></span>
                    <span><p class="mt-8 ml-24 text-3xl">0</p></span>
                    <button class="ml-96 bg-red-600 w-20 h-10 rounded-lg mt-8">ลบสินค้า</button>
                </div>

                


            </div>

            <div class="bg-orange-300 mt-80 rounded-b-lg flex flex-row shadow-inner" style="width: 1200px;height: 93px;">
                <input type="checkbox" checked="checked" class="checkbox  ml-20 w-5 " />
                <span><p class="mt-6 ml-20 text-4xl">ทั้งหมด</p></span>
                <span><p class="mt-6 ml-80 text-4xl">ยอดทั้งหมด</p></span>
                <span><p class="mt-6 ml-20 text-4xl">0</p></span>
                <a href=""><button class="bg-amber-600 mt-8 ml-36 text-2xl w-32 h-10 rounded-md">ชำระเงิน</button></a>
            
            </div>
       </div>


       <?php include 'footer.php'; ?>
</body>
</html>