<!DOCTYPE html>
<html lang="vi">
<head>
    <title>Quên mật khẩu</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="/PHP_ShopWeb/login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/PHP_ShopWeb/login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/PHP_ShopWeb/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/PHP_ShopWeb/login/vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="/PHP_ShopWeb/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/PHP_ShopWeb/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/PHP_ShopWeb/login/css/util.css">
    <link rel="stylesheet" type="text/css" href="/PHP_ShopWeb/login/css/main.css">
<!--===============================================================================================-->
</head>

<body>
    
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <a href="/PHP_ShopWeb">
                        <img src="/PHP_ShopWeb/public/login/images/img-02.png" alt="IMG">
                    </a>
                </div>

                <form class="login100-form validate-form" action="sendemail.php" method="post">
                    <span class="login100-form-title">
                        Quên mật khẩu
                    </span>
                    
                    <div class="wrap-input100 validate-input" data-validate = "">
                        <td>Tên đăng nhập: </td>
                        <input class="input100" type="text" name="txtUsername" placeholder="Tên đăng nhập">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Email không hợp lệ!">
                        <td>Email: </td>
                        <input class="input100" type="text" name="txtEmail" placeholder="Email">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                        </span>
                    </div>
                    
                    <div class="container-login100-form-btn">
                        <button id="repass" class="login100-form-btn" type="submit">
                            LẤY LẠI MẬT KHẨU
                        </button>
                    </div>

                     <?php
                        if (!isset($_POST['txtEmail']) || !isset($_POST['txtUsername'])){
                            die('');
                        }

                        $con = mysqli_connect('localhost', 'root', '24021999') or die('Không thể kết nối CSDL: ');
                        $selected = mysqli_select_db($con,"n6shop_database") or die ("Không chọn được database");

                        $email = $_POST['txtEmail'];
                        $username = $_POST['txtUsername'];

                        if (!$username || !$email)
                        {
                            echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
                            exit;
                        }

                        $query = mysqli_query($con ,
                            "SELECT username, Email, password FROM user WHERE username='$username' AND Email='$email'");

                        if (mysqli_num_rows($query) > 0)
                        {
                            $row = mysqli_fetch_array($query);

                            $to      = $email;
                            $subject = "Khôi phục mật khẩu!";
                            $message = "Mật khẩu đăng nhập N6Shop của bạn là: "  . $row['password'] 
                                        . ". Hãy bảo mật thông tin này!";
                            $header  =  "From:tuoidoimexanh@gmail.com";

                            $success = mail ($to,$subject,$message,$header);

                            if( $success == true )
                            {
                                echo "Mật khẩu đã gửi đến Email của bạn.<br /> Xin vui lòng kiểm tra lại!";
                                exit();
                            }
                            else
                            {
                                  echo "Không gửi đi được...";
                            }
                        } else
                        {
                            echo "Thông tin email hoặc tên đăng nhập không chính xác!";
                        }           
                    ?>

                    <div class="text-center p-t-12">
                        <a class="txt2" href="/PHP_ShopWeb/login">
                            Đăng nhập   |
                        </a>

                        <a class="txt2" href="/PHP_ShopWeb/signup">
                            Đăng ký
                        </a>
                    </div>
                    
                </form>

            </div>
        </div>
    </div>
    
    

    
<!--===============================================================================================-->  
    <script src="/PHP_ShopWeb/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="/PHP_ShopWeb/login/vendor/bootstrap/js/popper.js"></script>
    <script src="/PHP_ShopWeb/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="/PHP_ShopWeb/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="/PHP_ShopWeb/login/vendor/tilt/tilt.jquery.min.js"></script>
    <script >
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
<!--===============================================================================================-->
    <script src="/PHP_ShopWeb/login/js/main.js"></script>

</body>
</html>