<div id="div1">
	<div class="col-md-10">				
		<div class="content">
			<div class="col-md-4 add-dm">
				<h4 class="text-center">Thêm sản phẩm
				<font color="green"><?php echo $this->session->flashdata('flash_mess') ?></font></h4>
			</div>
			<button type="button" class="btn btn-default pull-right" id="button1">
				  	<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
			</button>
			<div class="clearfix"></div>
			<form method="post">
				<div class="form">
					<table class="table">
				      <tbody><tr>
				        <td><p>Tên sản phẩm <font color="red"><?php echo form_error('title') ?></font></p></td>
				        <td><input type="text" name="title" class="form-control"></td>
				      </tr>
				      <tr>
				        <td><p>Giá sản phẩm<font color="red"><?php echo form_error('price') ?></font></p></td>
				        <td><input type="text" name="price" class="form-control" value=""></td>
				      </tr>
				      <tr>
				        <td><p>Chi tiết sản phẩm <font color="red"><?php echo form_error('content') ?></font></p></td>
				        <td><textarea name="content" class="form-control" id="" cols="30" rows="10"></textarea></td>
				      </tr>
				      <tr>
				        <td><p>Hình ảnh sản phẩm <font color="red"><?php echo form_error('img') ?></font></p></td>
				        <td><input type="file" name="img" class="form-control"></td>
				      </tr>
				      <tr>
				        <td><p>Lựa chọn danh mục <font color="red"><?php echo form_error('cat') ?></font></p></td>
				        <td><select name="cat" class="form-control">
							<!-- <option value="0"></option> -->
							<?php foreach($listdm as $row) {?>
							<option value='<?php echo $row->id ?>'><?php echo $row->ten_dm ?></option>
							<?php } ?>
						</select>
						</td>
				      </tr>							      
				  </tbody></table>	
				</div>
				<div class="col-md-3 form-group pull-right">
					 <input type="submit" name="ok" value="saves" class="btn btn-primary btn-block">
				</div>
			</form>
		</div>
	</div>
</div>
<script type="text/javascript">
$(function() {				    				    
if(CKEDITOR.instances['content']) {						
CKEDITOR.remove(CKEDITOR.instances['content']);
}
CKEDITOR.config.width = 600;
CKEDITOR.config.height = 150;
CKEDITOR.replace('content',{});
})

$(function() { 
  $('#button1').on("click",function() { 
    $('#div1').load("<?php echo admin_url('baiviet/ajaxindex')?>",function() {
    	/*$('#div1').slideToggle("slow");*/
    }); 
  }); 
});
</script>
