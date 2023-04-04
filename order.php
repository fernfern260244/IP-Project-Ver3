<?php include('server.php'); ?>
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
        

       <div class="bg-orange-200 ml-36 mt-10 mb-5 rounded-md flex flex-col shadow-md shadow-inner" style="width: 1200px;height: 820px;">
            <div class="bg-orange-300 mt-10 ml-12 rounded-md" style="width: 1100px;height: 150px;">
                    <span><p class="mt-3 text-2xl ml-3">ที่อยู่ในการจัดส่ง</p></span>
                    <textarea class="resize rounded-md ml-20 w-96 h-24"></textarea>            
            </div>
        
            <div class="bg-slate-100 mt-2 ml-12 flex flex-col" style="width: 1100px;height: 150px;">
                
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

            <div class="bg-orange-300 mt-5 ml-12 flex flex-col  shadow-inner" style="width: 1100px;height: 310px;">
                <div class="bg-amber-600 flex flex-row" style="width: 1100px;height: 50px;">
                    <span><p class="ml-20 mt-2 text-2xl">วิธีการชำระเงิน</p></span>
                </div>
                <div class="bg-white rounded-bl-lg flex flex-col" style="width: 300px;height: 500px;">
                        <p class="ml-20 mt-5">ตัวเลือกการชำระเงิน</p>
                        <button class="bg-orange-400 w-36 h-10 ml-20 mt-12 shadow-inner rounded-md">บัตรเคดิต</button>
                        <button class="bg-orange-400 w-36 h-10 ml-20 mt-5 shadow-inner rounded-md">พร้อมเพย์</button>

                    </div>
               
            
            </div>
             <div class="bg-orange-400 mt-16 flex flex-col"style="width: 1200px; height: 90px;" >
                <div class="flex flex-row">
                    <p class="ml-96 text-2xl mt-2">ค่าจัดส่ง</p>
                    <span><p class="mt-2 text-2xl ml-40">จำนวนเงิน</p></span>

                </div>
                <div class="flex flex-row">
                    <p class="ml-96 text-2xl mt-2">ยอดรวมสินค้า</p>
                    <span><p class="mt-2 text-2xl ml-40">ค่าจัดส่ง</p></span>
                    <button class="bg-orange-300  text-2xl ml-40 w-40 h-10 rounded-md">สั่งสินค้า</button>
                </div>
                

            </div>
       </div>


       <?php include 'footer.php'; ?>
</body>
</html>