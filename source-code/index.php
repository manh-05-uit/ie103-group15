<!DOCTYPE html>
<html>
    <head>
        <title>Trang chủ</title>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body style="line-height: 2;">
        <h1 align="center">Website của Nhóm ... - Môn Quản lý thông tin</h1>
        <h3 align="center">Tương tác với cơ sở dữ liệu IBM DB2</h3>
        <h4 align="center">Tên cơ sở dữ liệu: DKHP - Đăng kí học phần</h4>
        <div>
            Hãy chọn một trong các tính năng sau đây:<br />
			<a href="student-list.php"><button>Danh sách sinh viên</button><a><br />
            <a href="add.php"><button>Thêm sinh viên</button><a><br />
            <a href="select.php"><button>Xem thông tin sinh viên</button></a><br />
            <a href="update.php"><button>Sửa thông tin sinh viên</button></a><br />
            <a href="delete.php"><button>Xóa sinh viên</button></a><br />
        </div>
        <?php include("include/footer.php"); ?>
		<a href="about-us.php">Về chúng tôi</a>
    </body>
</html>