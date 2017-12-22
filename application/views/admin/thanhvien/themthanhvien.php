<div id="div1">
	<div class="col-md-10">				
		<div class="content">
			<div class="col-md-4 add-dm">
				<h4 class="text-center">Thêm thành viên 
				<font color="green"><?php echo $this->session->flashdata('flash_mess') ?></font>
				<font color="green"></font></h4>
			</div>
			<button type="button" class="btn btn-default pull-right" id="button1">
					  	<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
			</button>
			<div class="clearfix"></div>
			<form method="post">
				<div class="form">							
					<table class="table">
				      <tbody>
				      <tr>
				        <td><p>Email <font color="red"><?php echo form_error('email') ?></font></p></td>
				        <td><input type="email" name="email" class="form-control"></td>
				      </tr>
				      <tr>
				        <td><p>Tên tài khoản <font color="red"><?php echo form_error('username') ?></font></p></td>
				        <td><input type="username" name="username" class="form-control"></td>
				      </tr>
				      <tr>
				        <td><p>Mật khẩu <font color="red"><?php echo form_error('password') ?></font></p></td>
				        <td><input type="password" name="password" class="form-control"></td>
				      </tr>
				      <tr>
				        <td><p>Xác nhận mật khẩu <font color="red"><?php echo form_error('confirmpassword') ?>
				        	<?php echo $this->session->flashdata('flash_cp') ?></font>
				        </font>
				        </p></td>
				        <td><input type="password" name="confirmpassword" class="form-control"></td>
				      </tr>						      
				  </tbody></table>							
				</div>
				<div class="col-md-3 form-group pull-right">
					 <input type="submit" name="ok" value="saves" class="btn btn-primary btn-block">
				</div>
			</form>
		</div><!--end .content-->
	</div>
</div>
<!-- <script type="text/javascript">
$(function() {				    				    
if(CKEDITOR.instances['content']) {						
CKEDITOR.remove(CKEDITOR.instances['content']);
}
CKEDITOR.config.width = 600;
CKEDITOR.config.height = 150;
CKEDITOR.replace('content',{});
})
</script> -->
<script type="text/javascript">
	$(function() { 
  $('#button1').on("click",function() { 
    $('#div1').load("<?php echo admin_url('thanhvien/ajaxindex')?>",function() {
      /*$('#div1').slideToggle();*/
    }); 
  }); 
});
</script>
