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
    <title>2MTrade </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="output.css">
</head>
<body>
<style>
    body {
        background-color: #e09129 !important;
    }
</style>

  
    <?php include "header.php" ?>
    <script src="header.js"></script>
  

<div class="flex flex-row  ml-5 mt-10">
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
                  <button class="rounded-md bg-amber-900 hover:bg-amber-800 shadow-inner h-10 w-28 text-white  " onclick="window.location.href='help.php'">ช่วยเหลือ</button>
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
    <?php 
                //ดึงข้อมูลในตาราง product มาแสดง
					$select = mysqli_query($conn, "SELECT * FROM `product`") or die('query failed');
                    //ถ้าจำนวนแถวในตารางproductมากกว่า 0 ก็ให้ดึงแถวในตารางมาแสดง
					if (mysqli_num_rows($select) > 0) {
						while ($row = mysqli_fetch_assoc($select)) {
							
				?>
    
    <div class=" grid grid-cols-5 gap-4  bg-amber-700">
          <div class="bg-amber-200 mt-5 w-56 h-60 rounded-t-lg shadow-inner ml-12 mb-10">
          <div class="bg-slate-300 rounded-t-lg ">
            <a href="seeProduct.php?id=<?php echo $row['product_id']; ?>"><img class="w-56 h-52 rounded-t-lg" src="images/<?php echo $row['product_image']; ?>" alt=""></a>
          </div>
          <div class="bg-slate-800 h-14 rounded-b-lg flex flex-row ">
            <button class="bg-gray-200 h-14 w-28 rounded-bl-lg"><img style="width: 30px;height: 30px;" class="ml-10" src="images/chat2.png" alt=""></button>
            <button class="bg-gray-200 h-14 w-28 rounded-br-lg"><img style="width: 30px;height: 30px;" class="ml-10" src="images/shop.png" alt=""></button>
          </div>
         </div>
          <?php
            }
          }
          ?>
         </div>
         
      
    </div>

</div>

<?php //include 'footer.php'; ?>


</body>
</html>