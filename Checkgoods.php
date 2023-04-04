<?php include('server.php'); 
session_start();
$sql = mysqli_query($conn,"SELECT * FROM member WHERE member_id = '".$_SESSION['id']."'");
$row = mysqli_fetch_array($sql);


    //delete product
    if(isset($_GET['delete'])){
        $delete_id = $_GET['delete'];
        $delete_query = "DELETE FROM check_product WHERE product_id_check=$delete_id" or die("Error:". mysqli_connect_error());
        $result_delete = mysqli_query($conn,$delete_query);
    }
    if(isset($_GET['insert'])){
        $insert_id = $_GET['insert'];
        $check = "SELECT FROM check_product WHERE product_id_check=$insert_id" or die("Error:". mysqli_connect_error());
        $insert_query = "INSERT INTO product (`product_name`, `product_image`, `product_image2`, 
        `product_image3`, `product_inf.`, `product_quantity`, `category_product` ,`product_price/piece`,`member_id`)
        SELECT `check_product_name`, `check_product_image`, `check_product_image2`, `check_product_image3`
        , `check_product_inf.`, `check_product_quantity`, `check_category_product` ,`check_product_price/piece`,`check_member_id`
        FROM check_product  WHERE product_id_check =  $insert_id"  ;
        $result_insert = mysqli_query($conn,$insert_query); 

        $deletein_query = "DELETE FROM check_product WHERE product_id_check=$insert_id" or die("Error:". mysqli_connect_error()); 
        $result_delete = mysqli_query($conn,$deletein_query);
    }

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Store</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include 'headerAdmin.php'; ?>
<div class="flex items-center justify-center pt-6 ">
        <table class="border-separate border border-slate-500 bg-white">
            <thead>
                <th class="border border-slate-600 px-4 py-4">ID</th>
                <th class="border border-slate-600 px-4 py-4">member id</th>
                <th class="border border-slate-600 px-4 py-4">Product image</th>
                <th class="border border-slate-600 px-4 py-4">Product name</th>
                <th class="border border-slate-600 px-4 py-4">information</th>
                <th class="border border-slate-600 px-2 py-4">category</th>
                <th class="border border-slate-600 px-2 py-4">quanity</th>
                <th class="border border-slate-600 px-2 py-4">price</th>
                <th class="border border-slate-600 px-4 py-4">action</th>

            </thead>
            <tbody>
            <?php 
					$select = mysqli_query($conn, "SELECT * FROM `check_product`") or die('query failed');
					if (mysqli_num_rows($select) > 0) {
						while ($row = mysqli_fetch_assoc($select)) {
							
						
				?>
				<tr>
                    <td class="border border-slate-600 px-4"><?php echo $row['product_id_check']; ?></td>
                    <td class="border border-slate-600 px-4"><?php echo $row['check_member_id']; ?></td>
					<td class="border border-slate-600 px-6 py-4"><img class="object-scale-down h-30 w-20" src="images/<?php echo $row['check_product_image']; ?>"></td>
					<td class="border border-slate-600 px-4"><?php echo $row['check_product_name']; ?></td>
                    <td class="border border-slate-600 px-4"><?php echo $row['check_product_inf.']; ?></td>
                    <td class="border border-slate-600 px-4"><?php echo $row['check_category_product']; ?></td>
                    <td class="border border-slate-600 px-4"><?php echo $row['check_product_quantity']; ?></td>
					<td class="border border-slate-600 px-4">$<?php echo $row['check_product_price/piece']; ?>/-</td>
                    <td class="border border-slate-600 px-4">
                        <div class="bg-white flex flex-row">
                            <a href="?insert=<?php echo $row['product_id_check']; ?>"class="px-2 py-2 leading-5 text-white bg-green-500 rounded-md hover:bg-pink-700 focus:outline-none ">Confirm</a>
					        <a href="?delete=<?php echo $row['product_id_check']; ?>"class="px-2 py-2 leading-5 text-white bg-red-500 rounded-md hover:bg-pink-700 focus:outline-none">Cancle</a>

                        </div>
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