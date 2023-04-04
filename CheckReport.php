<?php include('server.php'); 
session_start();

    //delete product
    if(isset($_GET['delete'])){
        $delete_id = $_GET['delete'];
        $delete_query = "DELETE FROM report WHERE report_id=$delete_id" or die("Error:". mysqli_connect_error());
        $result_delete = mysqli_query($conn,$delete_query);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Report (ตรวจสอบการรายงาน)</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'headerAdmin.php'; ?>

    <div class=" ml-20 ">
        <div class="grid grid-cols-2 mx-5 my-3 p-5 " >
        <?php 
					$select = mysqli_query($conn, "SELECT * FROM `report`") or die('query failed');
					if (mysqli_num_rows($select) > 0) {
						while ($row = mysqli_fetch_assoc($select)) {
							
						
				?>
            <div class="flex shadow-lg p-2 bg-white">
                <img src="images/<?php echo $row['member_image']; ?>" width="85" height="85">
                <p  class="m-2">
                    ชื่อผู้ใช้ : <?php echo $row['member_name']; ?>
                    <br> email address : <?php echo $row['member_email']; ?>
                </p>

                <div class="bg-amber-300 shadow-lg shadow-amber-200/50 flex-none rounded-full p-2 my-auto mx-3 justify-items-end" >
                    <a href="ReportInformation.php?id=<?php echo $row['report_id']; ?>">
                        รายละเอียด
                    </a>
                </div>
                <div class="bg-red-500  flex-none rounded-full p-2 my-auto mx-3 justify-items-end" >
                    <a  href="?delete=<?php echo $row['report_id']; ?>" >
                        ลบการรายงาน
                    </a>
                </div>

            </div>

            <?php 
                        }
                    }
                        
				?>
        </div>
    </div>
</body>
</html>