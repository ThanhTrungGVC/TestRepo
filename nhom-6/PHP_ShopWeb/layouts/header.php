
<div class="headertop_desc">
	<div class="logo">
		<a href="/PHP_ShopWeb"><img src="/PHP_ShopWeb/public/images/img-03.png" alt="" /></a>
	</div>
	<!--TODO sửa logo!!!!!-->
	
	<?php
		if(isset($_SESSION['us']) && $_SESSION['us'] != NULL)
		{?>
			<div class="account_desc">	
				Xin chào:<a class="username" href="#"> <?php echo $_SESSION['us']; ?> </a> | <a href="/PHP_ShopWeb/login/logout.php">Đăng xuất</a>	
			</div>
		<?php } 
		 else{
			?>
			<div class="account_desc">
				<!--<ul>
					<li><a href="/PHP_ShopWeb/login">Đăng nhập</a></li>|
					<li><a href="/PHP_ShopWeb/signup">Đăng ký</a></li>
				</ul>-->
				<a href="/PHP_ShopWeb/login">Đăng nhập</a> | <a href="/PHP_ShopWeb/signup">Đăng ký</a>
			</div>
		<?php } ?>
	<div class="clear"></div>
</div>