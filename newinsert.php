 
 
 <?php
// lấy dữ liệu từ form
$id = $_POST["ID"];
$ma      = $_POST["Ma"];
$ten = $_POST["Ten"];
$dongia = $_POST["Dongia"];
$soluong = $_POST["Soluong"];
$trangthai = $_POST["Trangthai"];
//kết nối database
$servername = "localhost";
$serverUser="root";
$severPassword="";
$database = "product";
  //connect database
  $conn = new mysqli($servername,$serverUser,$severPassword,$database);
  //check connection
  if($conn->connect_error) {
      //dừng luồng
      die("connection failed");
  }
var_dump($_POST);
$sql = "INSERT INTO mobile (ID, Ma, Ten, Dongia, Soluong, Trangthai)
        VALUES ('$id', $ma, '$ten', '$dongia', '$soluong','$trangthai');
";
$result = $conn->query($sql);
//var_dump($sql."register compelete");
if($result){ 
    header("Location: mobile.php");
}

 