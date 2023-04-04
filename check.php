<?php include('server.php'); 
session_start();

$sql = mysqli_query($conn,"SELECT * FROM member WHERE member_id = '".$_SESSION['id']."'");
$row = mysqli_fetch_array($sql);

    //delete product
    if(isset($_GET['delete'])){
        $delete_id = $_GET['delete'];
        $delete_query = "DELETE FROM product WHERE product_id=$delete_id" or die("Error:". mysqli_connect_error());
        $result_delete = mysqli_query($conn,$delete_query);
    }

    
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ตรวจสอบสินค้า</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="output.css">
</head>
<body>

<?php include 'header.php'; ?>

    <div class="flex items-center justify-center pt-6 ">
        <table class="border-separate border border-slate-500 bg-white">
            <thead>
                <th class="border border-slate-600 px-4 py-4">Product image</th>
                <th class="border border-slate-600 px-4 py-4">Product ID</th>
                <th class="border border-slate-600 px-4 py-4">Product name</th>
                <th class="border border-slate-600 px-4 py-4">information</th>
                <th class="border border-slate-600 px-2 py-4">category</th>
                <th class="border border-slate-600 px-2 py-4">quanity</th>
                <th class="border border-slate-600 px-2 py-4">price</th>
                <th class="border border-slate-600 px-4 py-4">action</th>

            </thead>
            <tbody>
            <?php 
                //ดึงข้อมูลในตาราง product มาแสดง
					$select = mysqli_query($conn, "SELECT * FROM `product`WHERE member_id = '".$_SESSION['id']."'"); 
                    //ถ้าจำนวนแถวในตารางproductมากกว่า 0 ก็ให้ดึงแถวในตารางมาแสดง
					if (mysqli_num_rows($select) > 0) {
						while ($row = mysqli_fetch_assoc($select)) {
							
				?>
				<tr>
					<td class="border border-slate-600 px-4 py-4"> <img class="object-scale-down h-30 w-20" src="images/<?php echo $row['product_image']; ?>"></td>
					<td class="border border-slate-600 px-4"><?php echo $row['product_id']; ?></td>
                    <td class="border border-slate-600 px-4"><?php echo $row['product_name']; ?></td>
                    <td class="border border-slate-600 px-4 "><?php echo $row['product_inf.']; ?></td>
                    <td class="border border-slate-600 px-4"><?php echo $row['category_product']; ?></td>
                    <td class="border border-slate-600 px-4"><?php echo $row['product_quantity']; ?></td>
					<td class="border border-slate-600 px-4">$<?php echo $row['product_price/piece']; ?>/-</td>
                    <td class="border border-slate-600 p-4  flex justify-between mt-5">
                    <a href="editproduct.php?id=<?php echo $row['product_id']; ?>"class="px-2 py-2 leading-5 text-white bg-green-500 rounded-md hover:bg-pink-700 focus:outline-none  ">Edit</a>
					<a href="?delete=<?php echo $row['product_id']; ?>"class="px-2 py-2 leading-5 text-white bg-red-500 rounded-md hover:bg-pink-700 focus:outline-none">delete</a>
					</td>
				</tr>
				<?php 
						}
					}
				?>
            </tbody>
        </table>
    </div>   


</body>

</html>