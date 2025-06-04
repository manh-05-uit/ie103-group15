<!DOCTYPE html>
<html>
    <head>
        <title>Xem thông tin sinh viên</title>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body style="line-height: 2;">
		<a href="index.php">Quay lại trang chủ</a>
        <h1>Danh sách sinh viên</h1>
		<div style="overflow-x: auto">
			<table width="1000px" align="center">
				<tr class="table-header">
					<td>MSSV</td>
					<td>Họ và tên</td>
					<td>Năm sinh</td>
					<td>Khóa đào tạo</td>
					<td>Mã khoa</td>
					<td>Mã ngành</td>
				</tr>
				<?php
					include ('connect-db.php');
					$stmt = $conn->prepare("select * from SinhVien");
					$stmt->execute();
					$result = $stmt->fetchAll();
					if (!empty($result)){
						foreach($result as $row) { 
				?>
				<tr>
					<td><?php echo $row['MASV'] ?></td>
					<td><?php echo $row['TENSV'] ?></td>
					<td><?php echo $row['NAMSINH'] ?></td>
					<td><?php echo $row['KHOADT'] ?></td>
					<td><?php echo $row['MAKHOA'] ?></td>
					<td><?php echo $row['MANGANH'] ?></td>
				</tr>
				<?php
						}
				?>
			</table>
		</div>
			<?php
                } else {
			?>
        <div>Bảng SinhVien trong cơ sở dữ liệu đang trống</div>
            <?php    
				} 
			?>
		<br/>
		<?php include("include/footer.php"); ?>
    </body>
</html>