<div class="headertop_desc">
	<div class="account_desc">
		<ul>
			<li><a href="/PHP_ShopWeb/login">Đăng nhập</a></li>
		</ul>
	</div>
	
	<div class="clear"></div>
</div>

<div class="header_top">
	<div class="logo">
		<a href="index.html"><img src="/PHP_ShopWeb/public/images/img-03.pngl" alt="" /></a>
	</div>

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