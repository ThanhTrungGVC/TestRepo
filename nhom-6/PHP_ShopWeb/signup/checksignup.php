<?php
 session_start();
    // Nếu không phải là sự kiện đăng ký thì không xử lý
    if (!isset($_POST['txtUsername'])){
        die('');
    }
     

    $con = mysqli_connect('localhost', 'root', 'passwords') or die('Không thể kết nối CSDL: ');
    $selected = mysqli_select_db($con,"n6shop_database") or die ("Không chọn được database");
          
    //Khai báo utf-8 để hiển thị được tiếng việt
    header('Content-Type: text/html; charset=UTF-8');
          
    //Lấy dữ liệu từ file dangky.php
    $username   = $_POST['txtUsername'];
    $password   = $_POST['txtPassword'];
    $email      = $_POST['txtEmail'];
    $name       = $_POST['txtname'];

    //Kiểm tra người dùng đã nhập liệu đầy đủ chưa
    if (!$username || !$password || !$email || !$name)
    {
        echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
          
        // Mã khóa mật khẩu
        $password = md5($password);
    //Kiểm tra tên đăng nhập này đã có người dùng chưa
    if (mysqli_num_rows(mysqli_query($con, "SELECT username FROM user WHERE username='$username'")) > 0){
        echo "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
          
    //Kiểm tra email có đúng định dạng hay không
    if (!preg_match ("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+\.[A-Za-z]{2,6}$/", $email))
    {
        echo "Email này không hợp lệ. Vui lòng nhập email khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
          
    //Kiểm tra email đã có người dùng chưa
    if (mysqli_num_rows(mysqli_query($con , "SELECT Email FROM user WHERE Email='$email'")) > 0)
    {
        echo "Email này đã có người dùng. Vui lòng chọn Email khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
        
    //Lưu thông tin thành viên vào bảng
    @$addmember = mysqli_query($con ,"
        INSERT INTO user (
            username,password,Name,Email)
        VALUE (
            '{$username}',
            '{$password}',
            '{$name}',
            '{$email}')
    ");
                          
    //Thông báo quá trình lưu
    if ($addmember){
        header('Location: /PHP_ShopWeb');
        $_SESSION['us'] = $username;
    }
    else
        echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='/PHP_ShopWeb/signup'>Thử lại</a>";

    mysql_close();
?>
