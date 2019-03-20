<div class="header_top">
	<script type="text/javascript">
		function DropDown(el) {
			his.dd = el;
			this.initEvents();
		}

		DropDown.prototype = {
			initEvents : function() {
				var obj = this;
				obj.dd.on('click', function(event){
					$(this).toggleClass('active');
					event.stopPropagation();
				});	
			}
		}

		$(function() {
			var dd = new DropDown( $('#dd') );
			$(document).click(function() {
				// all dropdowns
				$('.wrapper-dropdown-2').removeClass('active');
			});
		});		
	</script>	
</div>

<div class="header_bottom">
	<div class="menu">
	    <ul>
	    	<li class="active"><a href="/PHP_ShopWeb">Trang chủ</a></li>
			<li><a href="#">Thông tin</a></li>
			<li><a href="#">###</a></li>
		    <li><a href="#">###</a></li>
		    <li><a href="#">###</a></li>
		    <div class="clear"></div>
		</ul>
	</div>

    <div class="search_box">
	   	<form>
	   		<input type="text" value="Tìm kiếm" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Tìm kiếm';}">
	   		<input type="submit" value="">
	    </form>
	</div>

	<div class="clear"></div>
</div>


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
			            	<a href="#">		                    
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
							</a>			
				        </div>	

						<div class="slide">
							<a href="#">
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
							</a>				
				        </div>    

				        <div class="slide">
				        	<a href="#">
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
							</a>			
				        </div> 
				                 
		        	</div>
					 
					<div class="clear"></div>					       
		        </div>
		    </div>

			<div class="clear"></div>
		</div>
		<div class="clear"></div>
</div>