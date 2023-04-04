<?php include('server.php'); 
session_start();
    ##echo $_SESSION;
    $sql = mysqli_query($conn,"SELECT `member_name`,`member_image`,`member_email` FROM member WHERE member_name = '".$_SESSION['username']."'");
    $row = mysqli_fetch_array($sql);
    ##echo $results['member_name'];
    ##echo $results;
    ######isset( $_POST['a'] ) ? $a = $_POST['a'] : $a = "";
    if(isset($_POST['submit'])){
        $message = $_POST['comment'];
        $member_image = $row['member_image'];
        $member_email = $row['member_email'];
        $report_image = $_FILES['report_image']['name'];
        $image_temp_name = $_FILES['report_image']['tmp_name'];
        $folder_image = 'images/'.$report_image;

        $result = mysqli_query($conn,"INSERT INTO `report`(message, member_name,member_image, report_image,member_email) 
        VALUES ('$message', '".$_SESSION['username']."','$member_image','$report_image','$member_email')");
        if($result){
            move_uploaded_file($image_temp_name, $folder_image);
        }
        if($result){
            header('location: index.php');
        }
        
            }
        ##$member_name = $_POST['member_name'];
        ##$image = $_FILES['member_img']['name'];
        ##$image_temp_name = $_FILES['member_img']['tmp_name'];
        ##$folder_image = 'images/'.$image;
        ##$check = "SELECT FROM member WHERE member_name=$_SESSION" or die("Error:". mysqli_connect_error());
        ##if($mysql){
        ##    move_uploaded_file($image_temp_name, $folder_image);
        ##}mysql
        ####$query = mysqli_query($conn,"INSERT INTO `report`(`member_name`, `member_image`) 
        ####SELECT  `member_name`,`member_image` FROM member WHERE member_name = '$_SESSION'");

        ####$mysql = mysqli_query($conn,"UPDATE `report` SET `message`='$message' WHERE member_name = '$_SESSION' ");



    
// if(isset($_POST['submit'])){
//     $submit_id = $_POST['submit'];
//     $massage = $_POST['comment'];
//     $image = "INSERT INTO `report` (`member_image`)
//     SELECT member_image FROM member
//     WHERE member_name = $_SESSION;";
//     $result = mysqli_query($conn,$image);

//     $mysql = "INSERT INTO `report`( `message`, `member_name`,`member_image`) 
//     VALUES ('$massage','$_SESSION','$image');";
//     $result1 = mysqli_query($conn,$mysql);
//     if($result1){
//         header('location: index.php');
//     }
    
// }
?>
<!DOctyPE html>
<html lang="en">

<head>
    <title>helping</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<?php include 'header.php'; ?>

    <div class="bg-amber-900 m-8 rounded-md ">
               
                    <div class=" flex justify-center  py-8">
                        <div class ="bg-white  rounded-md " style="height: 600px;width: 450px;" >
                            <div class="flex flex-col gap-y-5" style="display: flex; justify-content: center; align-items: center;">
                                <div class="text-black font-bold text-3xl mt-8 ">Mtrade | ช่วยเหลือ</div>  
                                    <form method="POST" enctype="multipart/form-data"><br><br>
                                        <!--<div>
                                            <label class=" text-black" >ชื่อสมาชิก </label>
                                               <input type = "text" name="member_name" placeholder = "<?php echo $row['member_name'];?>"class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md  dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                                        </div>
                                        <div>
                                            <label class=" text-black" >รูปสมาชิก </label>
                                                <img type = "file"  name="member_img" class="object-scale-down h-30 w-20" src="images/<?php ##echo $row['member_image']; ?>" >
                                        </div>-->
                                       
                                       <div class="flex flex-col gap-y-3" >
                                                Message : <br> <textarea name="comment" style="width:300px; border: 2px solid; border-radius: 10px; height:150px;"></textarea ><br>
                                        </div>
                                        <div>
                                                <label class="block text-sm font-medium text-black">
                                                รูปปัญหา  
                                            </label>
                                            <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-black border-dashed rounded-md">
                                                <div class="space-y-1 text-center">
                                                <svg class="mx-auto h-12 w-12 text-blank" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                <div class="flex text-sm text-gray-600">
                                                    <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                                    <span class="">Upload a file</span>
                                                    <input id="file-upload" name="report_image" type="file" accept="image/png, image/jpg, image/jpeg" required class="sr-only">
                                                    <img id="preview" alt="">
                                                    </label>
                                                    <p class="pl-1 text-black">แนบรูปปัญหา</p>
                                                </div>
                                                <p class="text-xs text-black">
                                                    PNG, JPG, GIF up to 10MB
                                                </p>
                                                </div>
                                            </div>
                                            </div><br>
                                        <div class="flex justify-center">
                                                <button class="rounded-md bg-amber-900 hover:bg-amber-700 text-white hover:text-black" type="submit" name="submit" 
                                                style="width: 150px;height: 50px; font-size: 20px; font-bold" onclick="">Submit
                                                </button>
                                        </div>
                                    </form>
                            </div> 
                        </div>
                    </div>
    </div>
    <?php include 'footer.php'; ?>

</body>
</html>