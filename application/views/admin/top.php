<nav class="navbar navbar-default site-top">
			  <div class="container-fluid">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <a class="navbar-brand" href="<?php echo admin_url('home/index')?>" style="color: #ff9708;">Quản Lý trang bán hàng online</a>
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      <ul class="nav navbar-nav navbar-right">
			        <li><p class="text-center" style="padding-top: 15px;">Xin chào <span style="color: red">
			        <?php echo $this->session->userdata('login')?></span></p></li>
			        <li><a href="<?php echo admin_url('home/logout')?>"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
			      </ul>
			    </div><!-- /.navbar-collapse -->	
			  </div><!-- /.container-fluid -->
			</nav>