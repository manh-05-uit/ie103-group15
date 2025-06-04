<!DOCTYPE html>
<html>
    <head>
        <title>Thêm sinh viên</title>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body style="line-height: 2;">
		<a href="index.php">Quay lại trang chủ</a>
        <h1>Thêm sinh viên</h1>
        <?php
            include ('connect-db.php');
            $stmt=$conn->prepare("select MaKhoa from Khoa");
            $stmt->execute();
            $result=$stmt->fetchAll();
            foreach ($result as $row) {
                $arr_khoa[]=$row['MAKHOA'];
            }
            $i = 0;
            foreach ($arr_khoa as $value) {
                $stmt=$conn->prepare("select MaNganh from Nganh where MaKhoa=:makhoa");
                $stmt->bindParam(':makhoa',$makhoa);
                $makhoa=$value;
                $stmt->execute();
                $result=$stmt->fetchAll();
                $text[$i]='<p id="khoa'.trim($value).'" style="display:none;">';
                foreach ($result as $row) {
                    $text[$i] .= '<option value="' . $row['MANGANH'] . '">' . $row['MANGANH'] . '</option>';
                }
                $text[$i] .= '</b>';
                echo $text[$i];
                $i++;
            }
        ?>
        <form action="#" method="post" style="width:50%;">
            <fieldset>
                <legend>Thông tin sinh viên cần thêm</legend>
                Mã sinh viên: <input name="masv" type="text" /></br />
                Tên sinh viên: <input name="tensv" type="text" /><br />
                Năm sinh: <input type="number" name="namsinh" min="2000" max="2025" /><br />
                Khóa đào tạo:
                <select name="khoadt">
                    <option value="K16">K16</option>
                    <option value="K17">K17</option>
                    <option value="K18">K18</option>
                </select><br />
                Mã khoa: <select name="khoa" id="ma-khoa" onchange="chuyenkhoa();">
                    <option value="CE">CE</option>
                    <option value="CS">CS</option>
                    <option value="IS">IS</option>
                    <option value="ISE" selected>ISE</option>
                    <option value="NC">NC</option>
                    <option value="SE">SE</option>
                </select><br />
                Mã ngành: <select name="nganh" id="ma-nganh">         
                    </select><br />
                <input type="submit" name="send" value="Gửi" />
                <input type="reset" value="Làm mới" />
            </fieldset>
        </form>
    <hr />
    <?php 
        if (isset($_POST['send'])) {
            try {
                $stmt = $conn->prepare("insert into SinhVien values (:masv, :tensv, :namsinh, :khoadt, :khoa, :nganh)");
                $stmt->bindParam(':masv', $masv);
                $stmt->bindParam(':tensv', $tensv);
                $stmt->bindParam(':namsinh', $namsinh);
                $stmt->bindParam(':khoadt', $khoadt);
                $stmt->bindParam(':khoa', $khoa);
                $stmt->bindParam(':nganh', $nganh);
                $masv=$_POST['masv'];
                $tensv=$_POST['tensv'];
                $namsinh=$_POST['namsinh'];
                $khoadt=$_POST['khoadt'];
                $khoa=$_POST['khoa'];
                $nganh=$_POST['nganh'];
                $stmt->execute();
                echo "<div class=\"text-success\">Thêm sinh viên thành công.</div>";
            } catch (PDOException $e) {
                echo "<div class=\"text-warning\">Đã có lỗi xảy ra về các ràng buộc trong cơ sở dữ liệu.</div>";
            }
        }
    ?>
    <?php include("include/footer.php"); ?>
        <script>
            var makhoa=document.getElementById('ma-khoa').value;
            makhoa='khoa'+makhoa;
            document.getElementById('ma-nganh').innerHTML=document.getElementById(makhoa).innerHTML;
            function chuyenkhoa(){
                var makhoa=document.getElementById('ma-khoa').value;
                makhoa="khoa"+makhoa;
                document.getElementById('ma-nganh').innerHTML=document.getElementById(makhoa).innerHTML;
            }
        </script>
    </body>
</html>