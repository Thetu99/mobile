<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                $lt = [];
                if($result->num_rows >0){
                    while($row = $result->fetch_assoc()){
                        //echo $row["id"].$row['user_name'].$row["email"];
                        $lt [] = $row;
                    }
                }else{
                    echo"No result";
                }
            ?>
            <?php foreach($lt as $a):?>    
                    <tr>
                        <td><?php echo $a['ID']; ?></td>
                        <td><?php echo $a['Ma']; ?></td>
                        <td><?php echo $a['Ten']; ?></td>
                        <td><?php echo $a['Dongia']; ?></td>
                        <td><?php echo $a['Soluong']; ?></td>
                        <td><?php echo $a['Trangthai']; ?></td>
                          <td align="center" style ="background-color:#003399;"><a href="update.php?ID=<?php echo $row_ht['ID']; ?>" style="color:#FFFFFF"> Sửa </td> 
                    <td align="center"style ="background-color:#FF0000;"><a href="delete.php?ID=<?php echo $row_ht['ID']; ?>" onclick="if(confirm('Bạn có muốn xóa'))"style ="color:#FFFFFF "> Xóa</td>  
                    </tr>
                    </tr>
            <?php endforeach;?>
            </tbody>
        </table>
    </div>
</body>
</html>