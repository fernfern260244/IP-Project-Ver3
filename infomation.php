<?php
  session_start();
  include('./server.php');

  if (!isset($_SESSION['createAccount'])) {
    $_SESSION['error'] = 'กรุณาสมัครสมาชิก';
    header("location: createAccount.php");
  }
  unset($_SESSION['createAccount']);

  $username = $_SESSION['username'];
  $email = $_SESSION['email'];
  $password = $_SESSION['password'];
  $urole = $_SESSION['urole'];

  if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $birthday = $_POST['birthday'];
    $address = $_POST['address'];
    $picture = $_FILES['picture']['name'];
    $image_temp_name = $_FILES['picture']['tmp_name'];
    $folder_image = 'images/'.$picture;

    $sql = "INSERT INTO member (member_name, member_firstname, member_lastname, member_email, member_password, member_mobile, member_address1, member_gender, member_birthday, member_image, urole) 
            VALUES ('$username', '$firstname', '$lastname', '$email', '$password', '$phone', '$address', '$gender', '$birthday', '$picture', '$urole')";
    $result = mysqli_query($conn,$sql);
    if($result){
        move_uploaded_file($image_temp_name, $folder_image);
    }

    $_SESSION['success'] = "สมัครสมาชิกเรียบร้อย กรุณาเข้าสู้ระบบ";
    unset($_SESSION['error']);
    header('location: signIn.php');
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CreateAccount</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body {
        background-color: #e09129 !important;
    }
</style>
  
</head>
<body>
<style>
    body {
        /* background-color: #e09129 !important; */
        background-image:url("images/back3.jpg");
        background-size: 1520px 1100px;
        backdrop-filter: blur(5px);
    }
</style>

<div class=" max-w-4xl p-6 mx-auto rounded-md shadow-md bg-orange-200 mt-6 mb-6">
<form class="w-full max-w-lg ml-10 mt-10" method="post" enctype="multipart/form-data">
  <div class=" flex flex-col ">
    <div class=" flex flex-row ml-28  ">
      <!-- first name -->
      <div class=" w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
        ชื่อ:
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="ชื่อ" required name="firstname">
      <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
    </div>
    <!-- last name -->
    <div class="w-1/2 px-3 ">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
        นามสกุล:
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="นามสกุล" name="lastname"required>
    </div>
  </div>
    <!-- phone number -->
    <div class=" w-2/5 px-3 ml-28 ">
    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
        เบอร์โทรศัพท์:
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="tel"  placeholder="xxxxxxxxxx" name="phone"required>
    </div>
  </div>

  <!-- gender -->
  <div class=" flex flex-row ml-28  ">
  <div class=" w-1/3 px-3 ">
       <label class=" block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="pet-select">เพศ:</label>

      <select id="pet-select" class="text-center appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="gender"required>
        <option value="">--กำหนด--</option>
        <option value="ชาย">ชาย</option>
        <option value="หญิง">หญิง</option>
        <option value="other">อื่นๆ</option>
       
      </select>
  </div>

  <!-- D/M/Y -->
  <div class=" w-1/3 px-3  ml-5 ">
      <label class=" block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"   for="start">วัน/เดือน/ปี:</label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"  type="date" id="start" name="birthday" value="วัน/เดือน/ปี" min="1900-01-01" max="2300-01-01"required>
  </div>
  </div>

  <!-- address -->
  <div class="  px-3 ml-28 w-3/5">
  <label class=" block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"   for="start">ที่อยู่:</label>
  <textarea class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"  name="address"required ></textarea>
  </div>

  <!-- picture -->
  <div class=" ml-40 mt-5">

      <input id="dropzone-file" type="file"  name="picture" accept="image/png, image/jpg, image/jpeg" onchange="loadFile(event)" required>
    </div>
<div class=" ml-40 flex flex-col items-center justify-center w-full mt-4 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-500 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-200 dark:hover:bg-gray-600" style="width: 400px; height:250px">
    
<img style="width: 400px; height:250px" id="output"/>
<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
</script>
  </div>

    <!-- button submit -->
   
    <div class=" mt-5 ml-80"> 
          <button  name="submit" type="submit" class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium bg-green-500 rounded">ยืนยัน</button>
    </div>


  </div>
</form>

</div>


  
</body>
</html>

