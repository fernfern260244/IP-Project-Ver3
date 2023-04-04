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
    <div class="grid ">
            <div class="page-leftbar content bg-amber-600">
                <h3 class="content3 bg-amber-800">ลูกค้า1</h3>
                <h3 class="content3 bg-amber-800">ลูกค้า2</h3>
            </div>
      <div class="page-main content2 bg-orange-200">

      <div class="name-mid ">
        <h3 class="bg-amber-600">Name</h3>
      </div>
      <div class="chat-container bg-orange-200">
        <div class="chat-bubble left">
          <p>สวัสดีค่ะ</p>
          <p class="chat-time">10:00 AM</p>
	@@ -50,4 +52,4 @@ <h3>Name</h3>

        </div>
</body>
</html>