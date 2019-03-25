
<?php
session_start();

    $con = mysqli_connect('localhost', 'root', 'passwords') or die('Không thể kết nối CSDL: ');
	$selected = mysqli_select_db($con,"tên csdl") or die ("Không chọn được database");//chọn database đã tạo tên là demo
	
	$u = $p = "";
	$u = $_POST['username'];
	$p = md5($_POST['password']);

	$query = mysqli_query($con , "SELECT username, password FROM user WHERE username='$u'");

    if (mysqli_num_rows($query) == 0) {
        echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }

    $row = mysqli_fetch_array($query);
     
    //So sánh 2 mật khẩu có trùng khớp hay không
    if ($p != $row['password']) {
        echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    } else {
    	header('Location: /PHP_ShopWeb');
		$_SESSION['us'] = $row['username'];
    }

    mysql_close();
?>
