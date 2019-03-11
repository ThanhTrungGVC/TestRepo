<!DOCTYPE html>

<html lang="vi">

<head>
	<title>Laptop N6Shop</title>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link href="/PHP_ShopWeb/public/home/css/style.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="/PHP_ShopWeb/public/home/css/slider.css" rel="stylesheet" type="text/css" media="all"/>

	<script type="text/javascript" src="/PHP_ShopWeb/public/home/js/jquery-1.7.2.min.js"></script> 
	<script type="text/javascript" src="/PHP_ShopWeb/public/home/js/move-top.js"></script>
	<script type="text/javascript" src="/PHP_ShopWeb/public/home/js/easing.js"></script>
	<script type="text/javascript" src="/PHP_ShopWeb/public/home/js/startstop-slider.js"></script>
</head>

<body>
  <div class="wrap">
	<div class="header">
	
	<?php require_once __DIR__. "/layouts/header.php"; ?>

	<div class="header_slide">
		<div class="header_bottom_left">				
			<div class="categories">
				<ul>
				  	<h3>DANH MỤC LAPTOP</h3>
				    <li><a href="#">Dell</a></li>
				    <li><a href="#">Asus</a></li>
				  	<li><a href="#">Acer</a></li>
				   	<li><a href="#">HP</a></li>
				   	<li><a href="#">Lenovo</a></li>
				   	<li><a href="#">MSI</a></li>
				   	<li><a href="#">Macbook</a></li>
			    	<li><a href="#">Alienware</a></li>
				</ul>
			</div>					
	  	</div>
					 
		<div class="header_bottom_right">					 
			<div class="slider">					     
				<div id="slider">
			        <div id="mover">
			            <div id="slide-1" class="slide">			                    
						    <div class="slider-text">
		                        <h2>Chương trình<br><span>KHUYẾN MẠI</span></h2>
		                        <h3>giảm 20% giá</h3>
								<div class="features_list">
									<h4>Chọn để biết thêm thông tin khuyến mại!</h4>	 
							    </div>
							    <a href="#" class="button">Mua ngay</a>
					        </div>

					        <div class="slider-img">
								<a href="#">
									<img src="#" alt="Xem thêm" />
								</a>									    
							</div>

							<div class="clear"></div>				
				        </div>	

						<div class="slide">
						    <div class="slider-text">
		                        <h2>Chương trình<br><span>KHUYẾN MẠI</span></h2>
		                        <h3>giảm 40% giá</h4>
								<div class="features_list">
							   		<h4>Chọn để biết thêm thông tin khuyến mại!</h4>						               
					        	</div>
					        	<a href="preview.html" class="button">Mua ngay</a>
			            	</div>
						    
						    <div class="slider-img">
							    <a href="#"><img src="#" alt="Xem thêm" /></a>
							</div>

							<div class="clear"></div>				
				        </div>    

				        <div class="slide">
						    <div class="slider-text">
		                        <h2>Chương trình<br><span>KHUYẾN MẠI</span></h2>
		                        <h3>giảm 10% giá</h4>
								<div class="features_list">
							   		<h4>Chọn để biết thêm thông tin khuyến mại!</h4>						               
					        	</div>
					        	<a href="preview.html" class="button">Mua ngay</a>
			            	</div>
						    
						    <div class="slider-img">
							    <a href="#"><img src="#" alt="Xem thêm" /></a>
							</div>

							<div class="clear"></div>				
				        </div>          
		        	</div>
					 
					<div class="clear"></div>					       
		        </div>
		    </div>

			<div class="clear"></div>
		</div>
		<div class="clear"></div>
   </div>

 <div class="main">
    <div class="content">
    	<div class="content_top">
    		<div class="heading">
    			<h3>SẢN PHẨM MỚI</h3>
    		</div>
    		<div class="see">
    			<p><a href="#">Xem tất cả</a></p>
    		</div>
    		<div class="clear"></div>
    	</div>

	    <div class="section group">
			<div class="grid_1_of_4 images_1_of_4">
				<a href="#"><img src="#" alt="" /></a>
				<h2>Dell G3-3579 </h2>
				<div class="price-details">
				    <div class="price-number">
						<p><span class="rupees">$620.87</span></p>
					</div>

					<div class="add-cart">								
						<h4><a href="#">Xem thêm</a></h4>
					</div>

					<div class="clear"></div>
				</div>
			</div>
		</div>

		<!--============================================================-->
		<div class="content_bottom">
    		<div class="heading">
    			<h3>MUA NHIỀU NHẤT</h3>
    		</div>

    		<div class="see">
    			<p><a href="#">Xem tất cả</a></p>
    		</div>

    		<div class="clear"></div>
    	</div>

		<div class="section group">
			<div class="grid_1_of_4 images_1_of_4">
				<a href="#"><img src="#" alt="" /></a>					
					<h2>Macbook pro 2018 </h2>
				<div class="price-details">

					<div class="price-number">
						<p><span class="rupees">$849.99</span></p>
					</div>
			
					<div class="add-cart">								
						<h4><a href="#">Xem thêm</a></h4>
					</div>
			
					<div class="clear"></div>
				</div>
			</div>
		</div>
    </div>
</div>
</div>

<?php require_once __DIR__. "/layouts/footer.php"; ?>

<a href="#" id="toTop"><span id="toTopHover"> </span></a>

</body>
</html>

