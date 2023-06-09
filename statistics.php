<?php include('server.php'); 
session_start();
$sql = mysqli_query($conn,"SELECT * FROM member WHERE member_id = '".$_SESSION['id']."'");
$row = mysqli_fetch_array($sql);?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>หน้าสถิติ</title>
</head>
<body class="">
<?php include 'headerAdmin.php'; ?> 
    <div class="flex justify-center items-center m-5 ">
        <div class="h-3/5 w-3/5 shadow-lg  rounded-lg overflow-hidden border border-b-4 bg-white">
            <div class=" font-semibold py-3 px-5 bg-gray-50">ยอดขายรวม</div>
            <text class="p-5"> เลือกปี : </text><input type="month" value="" class="border border-b-2 m-5">
            <canvas class="p-10" id="chartLine"></canvas>
        </div>

      <!-- Required chart.js -->
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

      <!-- Chart line -->
      <script>
        const labels = ["January", "February", "March", "April", "May", "June"];
        const data = {
          labels: labels,
          datasets: [
            {
              label: "ยอดขายรวม",
              backgroundColor: "hsl(252, 82.9%, 67.8%)",
              borderColor: "hsl(252, 82.9%, 67.8%)",
              data: [0, 1000, 2000, 3000, 4000, 5000, 6000, 7000, 8000, 10000],
            },
          ],
        };

        const configLineChart = {
          type: "line",
          data,
          options: {},
        };

        var chartLine = new Chart(
          document.getElementById("chartLine"),
          configLineChart
        );
      </script>
    </div>

    <div class="w-auto h-auto  grid grid-cols-2 p-5 m-5 bg-amber-300">
        <div class="w-80 h-80 border border-b-2 grid ml-auto m-10 p-10 bg-white">
            <label class="text-center p-3">
                <text class="font-medium">ยอดขาย 12 เดือนย้อนหลัง</text> <br>
                <text class="text-red-300">2,000,000 บาท</text></label>
            <label class="text-center p-3">
                <text class="font-medium">ยอดคำสั่งซื้อ 12 เดือนย้อนหลัง</text> <br>
                <text class="text-red-300">32,421 ครั้ง</text></label>
            <label class="text-center p-3" >
                <text class="font-medium">ยอดลงขายสินค้า</text> <br>
                <text class="text-red-300">50,000 ครั้ง</text></label><label >
        </div>
        <div class="w-96 h-96  p-10">
            <div class="shadow-lg rounded-lg overflow-hidden bg-white">
                <canvas class="p-10" id="chartPie"></canvas>
              </div>

              <!-- Required chart.js -->
              <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

              <!-- Chart pie -->
              <script>
                const dataPie = {
                  labels: ["เครื่องแต้งกาย", "กระเป๋า", "รองเท้า" ,"เครื่องใช้ไฟฟ้า"],
                  datasets: [
                    {
                      label: "My First Dataset",
                      data: [170, 50, 100, 150],
                      backgroundColor: [
                        "red",
                        "blue",
                        "green",
                        "rgb(123, 144, 255)",
                      ],
                      hoverOffset: 4,
                    },
                  ],
                };

                const configPie = {
                  type: "pie",
                  data: dataPie,
                  options: {},
                };

                var chartBar = new Chart(document.getElementById("chartPie"), configPie);
              </script>
        </div>

        <div class="w-80 h-80 shadow-lg rounded-lg grid ml-auto m-10 p-10 bg-white">
                <canvas class="p-10" id="chartPie2"></canvas>


              <!-- Required chart.js -->
              <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

              <!-- Chart pie -->
              <script>
                const dataPie2 = {
                  labels: ["หญิง", "ชาย"],
                  datasets: [
                    {
                      label: "My First Dataset",
                      data: [55, 45,],
                      backgroundColor: [
                        "red",
                        "blue",
                      ],
                      hoverOffset: 2,
                    },
                  ],
                };

                const configPie2 = {
                  type: "pie",
                  data: dataPie2,
                  options: {},
                };

                var chartBar = new Chart(document.getElementById("chartPie2"), configPie2);
              </script>
        </div>

    </div>
    <?php include 'footer.php'; ?>


</body>
</html>