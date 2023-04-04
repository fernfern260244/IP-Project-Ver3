<?php include('server.php'); 
    $id = $_GET['id'];
    $query = "SELECT * FROM report WHERE report_id = $id";
    $result = mysqli_query($conn, $query) or die("Error in sql : $query".mysqli_error($query));
    $row = mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Information (รายละเอียดการรายงาน)</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php include 'header.php'; ?> 
    <div class="container my-10 ">
        <div class="flex justify-end">
        <?php 
					##$select = mysqli_query($conn, "SELECT * FROM `report`") or die('query failed');
					##if (mysqli_num_rows($select) > 0) {
						##while ($row = mysqli_fetch_assoc($select)) {
							
						
				?>
                <div class = " "  >  
                        <div class = "bg-amber-200  flex flex-row my-5" >
                             <img src="images/<?php echo $row['member_image']; ?>" width="250" height="100">
                        <p  class="m-2 text-xl font-medium  " style=" line-height: 50px">
                            รหัสสั่งซื้อ: <?php echo $row['member_name']; ?><br>
                            ซื้อ-นามสกุล : <?php echo $row['member_email']; ?><br>
                            เบอร์โทร : <?php echo $row['member_name']; ?><br>
                            วันที่โอน : <?php echo $row['member_name']; ?><br>
                            ธนาคารที่โอน : <?php echo $row['member_email']; ?>

                            <br> 
                            <!-- <div class="container m-5 "> -->
                            <div class="">
                                <?php 
                                            ##$select = mysqli_query($conn, "SELECT * FROM `report`") or die('query failed');
                                            ##if (mysqli_num_rows($select) > 0) {
                                                ##while ($row = mysqli_fetch_assoc($select)) {
                                                    
                                                
                                        ?>
                                    <img src="images/<?php echo $row['report_image']; ?>" width="500" height="500">
                                
                            </div>
                        </div>
                        </p>
                        </div>
                    
                        </div>

                        </div>
                        
                        
              

                 </div>
                     <div class="grid place-items-center m-5" >
                    <a href="CheckReport.php" class="bg-amber-300 shadow-lg shadow-amber-200/50 w-auto rounded-full p-2 " name="delete">
                        ยืนยันการรายงาน
                    </a>
                </div>
   
    <?php 
                 ##       }
                  ##  }
                        
				?>
                <?php include 'footer.php'; ?> 
</body>
</html>