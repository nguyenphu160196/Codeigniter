<div class="left-menu">
				<div class="panel-group">
				    <div class="panel panel-default">				     
				      <div class="panel-heading">
				        <h4 class="panel-title">
				          <a href="<?php echo admin_url('home/index')?>"><i class="fa fa-tachometer" aria-hidden="true"></i>  Dashboard</a>
				        </h4>
				      </div>
				    </div>
				    <div class="panel panel-default">				     
				      <div class="panel-heading">
				        <h4 class="panel-title">
				          <a href="<?php echo admin_url('dmbaiviet/themdm')?>"> <i class="fa fa-table" aria-hidden="true"></i>  Quản lý danh mục</a>
				        </h4>
				      </div>
				      <div id="danhmuc" class="panel-collapse collapse">
				        <ul id="home" class="danhmuc">
							<!-- <li><a href="<?php echo admin_url('dmbaiviet/themdm')?>"><i class="fa fa-angle-right" aria-hidden="true"></i>  Thêm danh mục</a></li> -->
							<!-- <li><a href="<?php echo admin_url('dmbaiviet/xemdm')?>"><i class="fa fa-angle-right" aria-hidden="true"></i>  Xem danh mục</a></li> -->
						</ul>
				      </div>
				    </div>
				    <div class="panel panel-default">
				      <div class="panel-heading">
				        <h4 class="panel-title">
				          <a data-toggle="collapse" href="#baiviet"> <i class="fa fa-newspaper-o" aria-hidden="true"></i>   Quản lý sản phẩm</a>
				        </h4>
				      </div>
				      <div id="baiviet" class="panel-collapse collapse">
				        <ul id="home" class="baiviet">
							<li><a href="<?php echo admin_url('baiviet/thembai')?>"><i class="fa fa-angle-right" aria-hidden="true"></i>  Thêm sản phẩm</a></li>
							<li><a href="<?php echo admin_url('baiviet/xembai')?>"><i class="fa fa-angle-right" aria-hidden="true"></i>  Xem bài viết</a></li>
						</ul>
				      </div>
				    </div>
					<div class="panel panel-default">
				      <div class="panel-heading">
				        <h4 class="panel-title">
				          <a data-toggle="collapse" href="#thanhvien"><i class="fa fa-user" aria-hidden="true"></i>   Quản lý Thành viên</a>
				        </h4>
				      </div>
				      <div id="thanhvien" class="panel-collapse collapse">
				        <ul id="home" class="baiviet">
							<li><a href="<?php echo admin_url('thanhvien/themtv')?>"><i class="fa fa-angle-right" aria-hidden="true"></i>  Thêm Thành viên</a></li>
							<li><a href="<?php echo admin_url('thanhvien/xemtv')?>"><i class="fa fa-angle-right" aria-hidden="true"></i>  Xem thành viên</a></li>
						</ul>
				      </div>
				    </div>
				</div>
			</div>
			<div class="clearfix"></div>