<?php include ('server.php'); 
session_start();
$sql = mysqli_query($conn,"SELECT `member_name`,`member_id`,`member_image` FROM member ");
$row = mysqli_fetch_array($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>alert</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="output.css">

</head>
<body>
<?php include 'header.php'; ?>

<div class="  mt-10 ml-36 mb-10" >
    <!-- แจ้งเตือนการจัดส่งสินค้าสำเร็จ -->
    <!-- แจ้งเตือนช่องนี้ของคนขายสินค้าว่าสินค้าที่เราส่งไปจัดส่งสำเร็จแล้ว :) -->
    <div class="p-4 bg-white border border-blue-200 rounded-md" style="height: 145px; width:1200px;">
    <div class="flex justify-between flex-wrap">
        <div class="w-0 flex-1 flex">
            <div class="mr-3 pt-1">
                <img class=" w-28 rounded-md" src="../images/658e3b88-a285-4139-a4da-40dc3009d163_39ea28b0.avif" alt="">                    
            </div>
            <div class=" ml-10 mt-8">
                <h4 class="text-md leading-6 font-medium">ชื่อสินค้า</h4>
                <p class="text-sm">สถานะการจัดส่งสินค้าสำเร็จ</p>
                <p class="text-sm">วันที่จัดส่งสำเร็จ</p>
   
            </div>
        </div>
       
    </div>
</div>

<!-- <p class="text-sm">แจ้งเตือนช่องนี้ของคนขายสินค้าว่าสินค้าที่ลงไปได้รับอนุยาดให้ลงขายหรือไม่  คอมเม้นไม่ได้ ทำเสร็จเอาบรรทัดนี้ออกด้วย :)</p> -->
<!-- แจ้งเตือนผลการตรวจสอบสินค้า -->
<div class="p-4  bg-white border border-blue-200 rounded-md" style="height: 145px; width:1200px;">
    <div class="flex justify-between flex-wrap">
        <div class="w-0 flex-1 flex">
            <div class="mr-3 pt-1">
                <img class=" w-28 rounded-md" src="../images/658e3b88-a285-4139-a4da-40dc3009d163_39ea28b0.avif" alt="">                    
            </div>
            <div class=" ml-10 mt-3">
                <h4 class="text-md leading-6 font-medium">ชื่อสินค้า</h4>
                <p class="text-sm">รายละเอียด</p>
                <p class="text-sm">ราคา</p>
                <p class="text-sm">ผลการตรวจสอบ</p>
               
               
            </div>
        </div>
       
    </div>
</div>

<!-- แบบฟอร์มยืนยันการชำระเงินผิดพลาด --> 
<!-- <p class="text-sm">แจ้งเตือนการยืนยันการชำระเงินผิดพลาด คอมเม้นไม่ได้ ทำเสร็จเอาบรรทัดนี้ออกด้วย :)</p>-->
<div class="p-4  bg-white border border-blue-200 rounded-md" style="height: 145px; width:1200px;">
    <div class="flex justify-between flex-wrap">
        <div class="w-0 flex-1 flex">
            <div class="mr-3 pt-2">
                <img class=" w-28 rounded-md" src="../images/ชำระเงิน.png" alt="">                 
            </div>
            <div class=" ml-10 mt-8">
                <h4 class="text-md leading-6 font-medium">เลขการสั่งซื้อ</h4>
                <p class="text-sm">วันที่ชำระเงิน</p>
                <p class="text-sm">การชำระเงินผิดพลาด หลักฐานแม่งผิดพลาด

                </p>
                
               
            </div>
        </div>
        <div class="flex mt-3">
                    <button type="button" class=" bg-orange-300 rounded-md  mt-3"style="height: 60px; width:120px;" >
                        ดูข้อมูล
                    </button>
                    
        </div>
       
    </div>
</div>



</div>



<?php include 'footer.php'; ?>
</body>
</html>