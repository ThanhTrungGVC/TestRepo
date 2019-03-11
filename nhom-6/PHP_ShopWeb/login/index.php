<!DOCTYPE html>
<html lang="vi">
<head>
	<title>N6Shop Đăng nhập</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="/PHP_ShopWeb/public/login/images/icons/favicon.ico"/>
	<a href="/PHP_ShopWeb/">
		<link rel="icon" type="image/png" href="/PHP_ShopWeb/public/login/images/icons/img-03.png"/>
	</a>
<!--=====Footer========================================================================================-->
	<link href="/PHP_ShopWeb/public/home/css/style.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="/PHP_ShopWeb/public/home/css/slider.css" rel="stylesheet" type="text/css" media="all"/>

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/PHP_ShopWeb/public/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="/PHP_ShopWeb/public/login/css/main.css">
<!--===============================================================================================-->
	<link href="/PHP_ShopWeb/public/admin/css/sb-admin.css" rel="stylesheet">
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

				<form class="login100-form validate-form">
					<span class="login100-form-title">
						Đăng nhập hệ thống
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Email hợp lý có dạng: ex@abc.xyz">
						<input class="input100" type="text" name="username" placeholder="Email hoặc điện thoại">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Mật khẩu không hợp lệ">
						<input class="input100" type="password" name="password" placeholder="Mật khẩu">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button id="login" class="login100-form-btn">
							ĐĂNG NHẬP
						</button>
					</div>

					<div class="text-center p-t-12">
						<a class="txt2" href="#">
							Quên mật khẩu?
							<br />
						</a>
						<a class="txt2" href="#">
							Tạo tài khoản mới
						</a>
					</div>

					<div class="text-center p-t-12">
						<a href="/PHP_ShopWeb">Quay về trang chủ</a>
					</div>
					
				</form>

			</div>

		</div>
		<?php require_once __DIR__. "/../layouts/footer.php"; ?>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="/PHP_ShopWeb/public/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="/PHP_ShopWeb/public/login/vendor/bootstrap/js/popper.js"></script>
	<script src="/PHP_ShopWeb/public/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="/PHP_ShopWeb/public/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="/PHP_ShopWeb/public/login/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="/PHP_ShopWeb/public/login/js/main.js"></script>

</body>
</html>