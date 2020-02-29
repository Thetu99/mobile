<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="col-md-12 text-center" style="padding:2%">
        <h1>Danh sách điện thoại</h1>
    </div>
    <div class="">
        <table class="table">
            <td>ID</td>
            <td>Mã</td>
            <td>Tên</td>
            <td>Đơn giá</td>
            <td>Số lượng</td>
            <td>Trạng thái</td>
            <td colspan="2">
                <div class="col-md-6">
                    <form  Action="insert.php">
                        <button type="submit" class="btn btn-danger">Thêm</button>
                    </form>
                </div>
            </td>
            <tbody>

            
            <?php
                // kết nối database
                //sever info 
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
                //echo "Connect successfully";
                //truy van sql
                $sql ="SELECT * FROM mobile";
                $result = $conn->query($sql);
                //var_dump($result);
                //die("stop");
               
            ?>
            
                <?php
                include('connect.php');
                $sql_ht="select*from mobile";
                $query_ht=mysqli_query($conn,$sql_ht);
                while($row_ht=mysqli_fetch_array($query_ht))
                {                   
            ?>       
                    <tr>
                    <td><?php echo $row_ht['ID']; ?></td>
                    <td><?php echo $row_ht['Ma']; ?></td>
                    <td><?php echo $row_ht['Ten']; ?></td>
                    <td><?php echo $row_ht['Dongia']; ?></td>
                    <td><?php echo $row_ht['Soluong']; ?></td> 
                    <td><?php echo $row_ht['Trangthai']; ?></td>
                    <td align="center" style ="background-color:#003399;"><a href="update.php?ID=<?php echo $row_ht['ID']; ?>" style="color:#FFFFFF"> Sửa </td> 
                    <td align="center"style ="background-color:#FF0000;"><a href="delete.php?ID=<?php echo $row_ht['ID']; ?>" onclick="if(confirm('Bạn có muốn xóa'))"style ="color:#FFFFFF "> Xóa</td>              
                </tr>
            <?php }?> 
            </tbody>
        </table>
    </div>
</body>
</html>