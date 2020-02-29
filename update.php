<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Update mobile</title>
</head>
<body>
	<form method="post" enctype="multipart/form-data">
    <?php
	require_once 'connect.php';	
	$ID=$_GET['ID'];
	$sql_select="SELECT * FROM mobile WHERE ID='$ID'";
	$query=mysqli_query($conn,$sql_select);
	$row=mysqli_fetch_array($query);
	?>
    <div style="background:#FFFFFF; width:650px; margin:auto;" >
   	   <table style="margin:auto" border="1" >
            <tr>
                <td colspan="2" style="background:#CCFF33; " align="center">Thông tin điện thoại</td>
            </tr>
            <tr>
                <td style="color:#F00; width:200px">Mã điện thoại:</td>
                <td><input type="text" style="width:300px" name="Ma" value="<?php echo $row['Ma'];?>"/><font color="#FF0000"></font></td>
            </tr>
            <tr>
                <td style="color:#F00; width:200px"> Tên: </td>
                <td><input type="text"  style="width:300px" name="Ten" value="<?php echo $row['Ten'];?>"/><font color="#FF0000">(ít nhất 6 ký tự)</font></td>
            </tr>
            <tr>
                <td style="color:#F00; width:200px">Đơn giá:</td>
                <td><input type="text" style="width:300px" name="Dongia"  value="<?php echo $row['Dongia'];?>" /></td>
            </tr>
            <tr>
                <td style="color:#F00; width:200px">Số lượng</td>
                <td><input type="text" style="width:300px" name="Soluong"  value="<?php echo $row['Soluong'];?>" /></td>
            </tr>
             <tr>
                <td style="color:#F00; width:200px">Trạng thái</td>
                <td><input type="text" style="width:300px" name="Trangthai"  value="<?php echo $row['Trangthai'];?>" /></td>
            </tr>
           
            <tr>
                <td colspan="2"  align="center"><input type="submit" name="ok" value="Cập nhật" /></td>
            </tr>
        </table>
    </form>
    </div>
    <?php
		if(isset ($_POST['ok']))
			{
                $ma=$_POST['Ma'];
                $Ten=$_POST['Ten'];
                $dongia=$_POST['Dongia'];
                $sl=$_POST['Soluong'];
                $tt=$_POST['Trangthai'];
                
                    
                $sql_select="SELECT * FROM mobile WHERE Ma='$ma'";           
                $sql_insert="UPDATE mobile SET Ma='$ma', Ten='$Ten', Dongia='$dongia',Soluong='$sl', Trangthai='$tt' WHERE ID='$ID'";
                $query_select=mysqli_query($conn,$sql_select);
                $query_insert=mysqli_query($conn,$sql_insert);
                header('location:mobile.php');                              
            			
			}
	?>			       
</body>
</html>