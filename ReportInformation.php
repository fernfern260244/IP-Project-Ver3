<?php include('server.php'); 
session_start();


$query1 = "SELECT * FROM member ";
$result1 = mysqli_query($conn, $query1);


    $id = $_GET['id'];
    $query = "SELECT * FROM report WHERE report_id = $id";
    $result = mysqli_query($conn, $query);
    $row1 = mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Information (รายละเอียดการรายงาน)</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'headerAdmin.php'; ?>

<div class="max-w-4xl p-6 mx-auto rounded-md shadow-md bg-orange-200 mt-10 mb-10 ">
    <div class=" m-5 rounded-md">
        <div class="flex justify-center">
        <?php 
					##$select = mysqli_query($conn, "SELECT * FROM `report`") or die('query failed');
					##if (mysqli_num_rows($select) > 0) {
						##while ($row = mysqli_fetch_assoc($select)) {
							
						
				?>
            <img class="rounded-md" src="images/<?php echo $row['member_image']; ?>" width="100" height="100">
            <p  class="m-2">
                ชื่อผู้ใช้ : <?php echo $row1['member_name']; ?><br>
                Email : <?php echo $row1['member_email']; ?>
                <br> 
            </p>
        </div>

    </div>
    <div><p class="mx-5">รายละเอียดการรายงาน :</p></div>
    <div class="container mx-auto p-5 border-2 grid place-items-center ">
        <div class=""> 
            <p>
            <?php echo $row1['message']; ?>
            </p>
        </div>
    </div>
    <div class="container m-5 ">
        <div class="flex justify-center">
        <?php 
					##$select = mysqli_query($conn, "SELECT * FROM `report`") or die('query failed');
					##if (mysqli_num_rows($select) > 0) {
						##while ($row = mysqli_fetch_assoc($select)) {
							
						
				?>
            <img src="images/<?php echo $row1['report_image']; ?>" width="500" height="500">
          
        </div>

    </div>
    <div class="grid place-items-center m-5" >
                    <a href="CheckReport.php" class="bg-amber-300 shadow-lg shadow-amber-200/50 w-auto rounded-full p-2 " name="delete">
                        ยืนยันการรายงาน
                    </a>
                </div>

</div>
    
   
    <?php 
                 ##       }
                  ##  }
                        
				?>
                <?php include 'footer.php'; ?>

</body>
</html>