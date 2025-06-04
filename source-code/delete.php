<!DOCTYPE html>
<html>
    <head>
        <title>Xóa sinh viên</title>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body style="line-height: 2;">
		<a href="index.php">Quay lại trang chủ</a>
        <h1>Xóa sinh viên</h1>
        <form action="#" method="post" style="width:50%;">
            <fieldset>
                <legend>Thông tin sinh viên cần xóa</legend>
                Mã số sinh viên: <input name="masv" type="text" /><br />
                <input type="submit" name="send" value="Gửi" />
                <input type="reset" value="Làm mới" />
            </fieldset>
        </form>
		<hr/>
        <?php
            include ('connect-db.php');
            try {
                if (isset($_POST['send']) && strlen($_POST['masv']) > 0) {
                    $stmt = $conn->prepare("delete SinhVien where MaSV={$_POST['masv']}");
                    $stmt->execute();
					echo "<div class=\"text-success\">Xóa sinh viên có mã số sinh viên là {$_POST['masv']} thành công.</div>";
                }
            } catch (PDOException $e) {
				echo "<div class=\"text-warning\">Đã có lỗi xảy ra vì các ràng buộc trong cơ sở dữ liệu.</div>";
            }
        ?>
        <?php include("include/footer.php"); ?>
    </body>
</html>