<?php include('server.php'); 
session_start();

//
$sql = mysqli_query($conn,"SELECT * FROM member WHERE member_id = '".$_SESSION['id']."'");
$row = mysqli_fetch_array($sql);


// ดึงข้อมูลจากตารางproduct
$id = $_GET['id'];
$query = "SELECT * FROM product WHERE product_id = $id";
$result = mysqli_query($conn, $query);
$row_product = mysqli_fetch_array($result); 


// ส่งคำสั่ง SQL ไปยัง MySQL
//$result = mysqli_query($conn, $sql);

// ดึงข้อมูลแถวเดียวออกมาเป็น associative array
//$row = mysqli_fetch_assoc($result);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>information Product</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css"  rel="stylesheet" />
</head>
<body>
    <?php include 'header.php'; ?>
         
    <div class="bg-white pl-20 ml-36 mt-10 pt-12 rounded-md flex flex-row" style="width: 1200px;height: 500px;">
    
        <div class="bg-slate-100  rounded-lg" style="width: 500px;height: 300px;">
            <!-- This is an example component -->
          <div class="max-w-2xl mx-auto " >

	          <div id="default-carousel" class="relative" data-carousel="static">
                <!-- Carousel wrapper -->
                <div class="overflow-hidden relative h-56 rounded-lg sm:h-64 xl:h-80 2xl:h-96" style="width: 500px;height: 400px;">
                    <!-- Item 1 -->
                    <div >
                      <span class="absolute top-1/2 left-1/2 text-2xl font-semibold text-amber-800 -translate-x-1/2 -translate-y-1/2 sm:text-3xl dark:text-gray-800"></span>
                      <img class="w-full rounded-md h-96 md:h-auto md:w-80" src="images/<?php echo $row_product['product_image']; ?>">
                    </div>
                </div>
        </div>
        
        <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
      </div>
       
    </div>

        <div class="bg-white ml-36 " style="width: 500px;height: 280px;">
            <div class="grid gap-lg">
                <div class="sc-1q2fzk2-1 ePXdbe">
                    
                    <div class="sc-1q2fzk2-3 hEYThC flex fle. mb-10 ">
                        
                        <h1 class="sc-1q2fzk2-0 eDRNWE mt-">
                            <span class="font-system text-sd75 text-body-1 text-3xl font-bold" data-testid="ad-detail-title"><?php echo $row_product['product_name'] ; ?> </span>
                        </h1>

                        <button aria-label="favorite-button" data-testid="favorite-button" scale="large" type="button" class="sc-sk8lwe-0 jAeSie sc-1q2fzk2-5 fRyLDA ml-56">
                            <div mode="square" scale="large" class="sc-sk8lwe-1 eEJzsd">
                                <span class="sc-sk8lwe-2 etCBvT">
                                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="32px" height="32px">
                                        <path d="M12 19.09a1.2 1.2 0 0 1-.77-.28c-.62-.54-1.18-1-1.73-1.48a34.936 34.936 0 0 1-3.84-3.55A6 6 0 0 1 4 9.79 5.07 5.07 0 0 1 5.25 6.4 4.45 4.45 0 0 1 8.6 4.9 4.32 4.32 0 0 1 12 6.56a4.321 4.321 0 0 1 3.4-1.66 4.45 4.45 0 0 1 3.35 1.5A5.07 5.07 0 0 1 20 9.79a6 6 0 0 1-1.66 4 34.923 34.923 0 0 1-3.8 3.52c-.59.49-1.15 1-1.75 1.49a1.2 1.2 0 0 1-.79.29ZM8.6 6.4a3 3 0 0 0-2.23 1 3.58 3.58 0 0 0-.87 2.39 4.61 4.61 0 0 0 1.3 3 34.062 34.062 0 0 0 3.63 3.34L12 17.49c.54-.47 1-.89 1.53-1.3a35.087 35.087 0 0 0 3.67-3.38 4.61 4.61 0 0 0 1.3-3 3.58 3.58 0 0 0-.87-2.39 3 3 0 0 0-2.23-1A2.92 2.92 0 0 0 13 7.75a5.728 5.728 0 0 0-.31.5.78.78 0 0 1-1.32 0 5.68 5.68 0 0 0-.31-.5A2.919 2.919 0 0 0 8.6 6.4Z"></path>
                                    </svg>
                                </span>
                            </div>
                        </button>
                        
                        
                    </div>
                        <span color="#111111" type="Title4-System-Bold" class="sc-3tpgds-0 iBWLya sc-1q2fzk2-2 ehoPiE">฿ <?php echo $row_product['product_price/piece'] ; ?></span>
                        
                        </div>
                        <div class="sc-1q2fzk2-4 bElFlV flex flex-row">
                            <div class=" ">
                                <button aria-label="สร้างห้องใหม่" class="flex flex-row ssc-16yqz13-0 eiEwND sc-1dcykbe-0 hvgFTg bg-amber-700 rounded-md mr-10 mt-5" style="height: 30px; width: 130px;" data-testid="seller-profile-chat-button" mode="contained" scale="medium" tabindex="0">
                                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="24px" height="24px">
                                    <path d="M14.19 4H9.88A6 6 0 0 0 4 9.51v2.13a6 6 0 0 0 5.18 5.45v.09a2.59 2.59 0 0 1-.69 1.45.71.71 0 0 0-.18.37 1.09 1.09 0 0 0 0 .18.6.6 0 0 0 0 .23.75.75 0 0 0 .59.5c.12.01.24.01.36 0 1.84 0 3.83-2 4.52-2.81h.35A6 6 0 0 0 20 11.03v-.92A6 6 0 0 0 14.19 4Zm0 11.56h-.71a.758.758 0 0 0-.55.28A11 11 0 0 1 10.6 18c0-.11.05-.21.07-.31.02-.1 0 0 0-.06v-.93a2.596 2.596 0 0 0-.13-.58.75.75 0 0 0-.7-.48 4.47 4.47 0 0 1-4.34-4.59v-.92a4.48 4.48 0 0 1 4.38-4.56h4.31a4.45 4.45 0 0 1 4.34 4.08V11.49a4.44 4.44 0 0 1-4.34 4.1v-.03Z"></path>
                                </svg>แชทกับผู้ขาย</button>
                            </div>
                            <div>
                                 <a aria-label="phone call" class="sc-11it86-0 lqkwv flex flex-row bg-amber-700 rounded-md  mt-5 " style="height: 30px; width: 70px;" mode="contained" scale="medium">
                                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="24px" height="24px">
                                        <path d="M15.5 19.68A11.26 11.26 0 0 1 4.31 8.74v-1a3.76 3.76 0 0 1 1.94-3.19A2.08 2.08 0 0 1 8 4.28c1.13.41 2.42 2.53 2.69 3.09a1.63 1.63 0 0 1-.12 1.81 4.68 4.68 0 0 1-.84.93 1.995 1.995 0 0 0-.3.32.93.93 0 0 0 0 .13 6.4 6.4 0 0 0 3.85 3.91c.104-.089.201-.186.29-.29.279-.3.587-.572.92-.81a1.65 1.65 0 0 1 1.81-.11c.56.26 2.68 1.55 3.09 2.69a2.1 2.1 0 0 1-.26 1.74 3.74 3.74 0 0 1-2.92 1.91l-.71.08ZM5.84 9.24a9.75 9.75 0 0 0 9 8.92h.66a2.38 2.38 0 0 0 2.35-1.21c.2-.33.16-.43.14-.48a6.76 6.76 0 0 0-2.3-1.83.907.907 0 0 0-.22-.08l-.12.07c-.248.175-.473.38-.67.61a1.872 1.872 0 0 1-1.48.77L13 16a7.79 7.79 0 0 1-4.92-4.9A1.7 1.7 0 0 1 8.71 9a3.67 3.67 0 0 0 .62-.67c.06-.09.07-.12.07-.13a.6.6 0 0 0-.07-.2 6.73 6.73 0 0 0-1.84-2.3s-.15-.06-.48.14A2.42 2.42 0 0 0 5.8 8.32v.92h.04Z"></path>
                                    </svg>โทร</a>
                            </div>
                               
                            </div>
                        </div>
                    <div class="bg-white mt-5 rounded-md " style="width: 400px;height: 170px;">

            <div class="bg-white grid">
                <div class=" bg-white">
                    <h2 class="m-0 mb-md mt-2 ml-2 block font-kaidee text-body-3 font-bold">รายละเอียดสินค้า</h2>
                    <div class="sc-1ir8548-0 kPXKAP ">
                        <span type="Body4-System-Regular" class="sc-3tpgds-0 dNQPgd sc-1ir8548-2 iErNFt">
                            <span class="sc-1ir8548-3 bTqyrB"> <?php echo $row_product['product_inf.'] ; ?></span> 
                        </span>
                    </div>
       
        
                </div> 
                  <div class=" flex justify-center "> 
                  <button aria-label="สร้างห้องใหม่" class="flex flex-row ssc-16yqz13-0 eiEwND sc-1dcykbe-0 hvgFTg bg-amber-700 rounded-md mr-10 mt-5 text-white" style="height: 30px; width: 130px;" data-testid="seller-profile-chat-button " mode="contained" scale="medium" tabindex="0">
                     <svg  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="24px" height="24px">
                        <path d="M14.19 4H9.88A6 6 0 0 0 4 9.51v2.13a6 6 0 0 0 5.18 5.45v.09a2.59 2.59 0 0 1-.69 1.45.71.71 0 0 0-.18.37 1.09 1.09 0 0 0 0 .18.6.6 0 0 0 0 .23.75.75 0 0 0 .59.5c.12.01.24.01.36 0 1.84 0 3.83-2 4.52-2.81h.35A6 6 0 0 0 20 11.03v-.92A6 6 0 0 0 14.19 4Zm0 11.56h-.71a.758.758 0 0 0-.55.28A11 11 0 0 1 10.6 18c0-.11.05-.21.07-.31.02-.1 0 0 0-.06v-.93a2.596 2.596 0 0 0-.13-.58.75.75 0 0 0-.7-.48 4.47 4.47 0 0 1-4.34-4.59v-.92a4.48 4.48 0 0 1 4.38-4.56h4.31a4.45 4.45 0 0 1 4.34 4.08V11.49a4.44 4.44 0 0 1-4.34 4.1v-.03Z"></path>
                                </svg>ซื้อ</button>
                 <button aria-label="สร้างห้องใหม่" class="flex flex-row ssc-16yqz13-0 eiEwND sc-1dcykbe-0 hvgFTg bg-amber-700 rounded-md mr-10 mt-5 text-white" style="height: 30px; width: 130px;" data-testid="seller-profile-chat-button" mode="contained" scale="medium" tabindex="0">
                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="24px" height="24px">
                            <path d="M14.19 4H9.88A6 6 0 0 0 4 9.51v2.13a6 6 0 0 0 5.18 5.45v.09a2.59 2.59 0 0 1-.69 1.45.71.71 0 0 0-.18.37 1.09 1.09 0 0 0 0 .18.6.6 0 0 0 0 .23.75.75 0 0 0 .59.5c.12.01.24.01.36 0 1.84 0 3.83-2 4.52-2.81h.35A6 6 0 0 0 20 11.03v-.92A6 6 0 0 0 14.19 4Zm0 11.56h-.71a.758.758 0 0 0-.55.28A11 11 0 0 1 10.6 18c0-.11.05-.21.07-.31.02-.1 0 0 0-.06v-.93a2.596 2.596 0 0 0-.13-.58.75.75 0 0 0-.7-.48 4.47 4.47 0 0 1-4.34-4.59v-.92a4.48 4.48 0 0 1 4.38-4.56h4.31a4.45 4.45 0 0 1 4.34 4.08V11.49a4.44 4.44 0 0 1-4.34 4.1v-.03Z"></path>
                        </svg>เพิ่มลงตะกร้า
                 </button></div>
                   
                
            
            </div>
            
        </div>
        

        </div>
       
 

        </div>
        
    </div> <center>
        
    <div class="bg-white pl-20  mt-10 mb-10 pt-12 rounded-md flex flex-row" style="width: 670px;height: 240px;">
    <?php 
                //ดึงข้อมูลในตาราง product มาแสดง
                $select1 = mysqli_query($conn, "SELECT member_id FROM `product` WHERE product_id = $id");
                $row = mysqli_fetch_array($select1);
                $member = $row['member_id'];
                
					$select = mysqli_query($conn, "SELECT `member_name`,`member_image` FROM `member` WHERE member_id = $member" ) or die('query failed');
                    //ถ้าจำนวนแถวในตารางproductมากกว่า 0 ก็ให้ดึงแถวในตารางมาแสดง
					if (mysqli_num_rows($select) > 0) {
						$row = mysqli_fetch_assoc($select); {
                            
				?>
				<tr>
        <a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700" style="width: 500px; height: 140px;" >
            <img class="object-cover w-full rounded-md h-96 md:h-auto md:w-48   ml-5" style="width: 105px;" src="images/<?php echo $row['member_image']; ?>" alt="">
            <div class="flex flex-col justify-between  leading-normal ">
                <h5 class="mb-2 text-2xl  font-bold tracking-tight text-gray-900 dark:text-white ml-5"> <?php echo $row['member_name'] ; ?></h5>
            </div>  
        </a>
    </div>
</center>
    
      <?php
      }
    }
    ?>
     
</body>
<?php include 'footer.php'; ?>

     

</html>