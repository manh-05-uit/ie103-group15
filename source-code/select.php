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
        <h1>Xem thông tin sinh viên</h1>
        <form action="#" method="post" style="width:50%;">
            <fieldset>
                <legend>Thông tin sinh viên cần xem</legend>
                Mã số sinh viên: <input type="text" name="masv" /><br />
                <input type="submit" name='send' value="Gửi" />
                <input type="reset" value="Làm mới" />
            </fieldset>
        </form>
        <hr />
        <?php
            if (isset($_POST['send']) && strlen($_POST['masv']) > 0) {
                include ('connect-db.php');
                $stmt = $conn->prepare("select * from SinhVien where MaSV={$_POST['masv']}");
                $stmt->execute();
                $result = $stmt->fetchAll();
                if (!empty($result)){
                    foreach($result as $row) {
						echo "<div class=\"text-success\">Truy vấn thành công</div>";
                        echo "Các thông tin về sinh viên có mã số sinh viên {$_POST['masv']} là:<br />";
                        echo "Họ và tên: " . $row['TENSV'] . "<br />";
                        echo "Năm sinh: " . $row['NAMSINH'] . "<br />";
                        echo "Khóa đào tạo: " . $row['KHOADT'] .  "<br />";
                        echo "Mã khoa: " .$row['MAKHOA'] . "<br />";
                        echo "Mã ngành: " .$row['MANGANH'];
                    }
                } else {
					echo "<div class=\"text-warning\">Sinh viên có mã số sinh viên {$_POST['masv']} không được lưu trong cơ sở dữ liệu.</div>";
                }
            }
        ?>
        <?php include("include/footer.php"); ?>
    </body>
</html>