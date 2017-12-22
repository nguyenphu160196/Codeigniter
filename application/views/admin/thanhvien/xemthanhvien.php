<div id="div2">
	<div class="col-md-10">				
		<div class="content">
			<div class="col-md-4 add-dm">
				<h4 class="text-center">Thành viên 
				<font color="green"><?php echo $this->session->flashdata('flash_tt') ?></font>
				<font color="green"></font></h4>
			</div>
			<button type="button" class="btn btn-default pull-right" id="button2">
					  	<span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
			</button>
			<div class="clearfix"></div>
				<div style="height:500px;overflow:auto">				
					<table class="table table-bordered" style="margin-top:20px;">
						<tbody><tr class="bg-info">
							<td>id</td>
							<td>email</td>
							<td>ten tai khoan</td>
							<td>mat khau</td>
							<td>trang thai</td>
							<td>edit</td>
							<td>delete</td>
						</tr>
						<?php foreach($list as $row) {?>
						<tr>
							<td><?php echo $row->id ?></td>
							<td><?php echo $row->email ?></td>
							<td><?php echo $row->tai_khoan ?></td>
							<td><?php echo $row->mat_khau ?></td>
							<td>
							<a href="<?php echo admin_url('thanhvien/trangthai/' .$row->id)?>"><?php echo $row->trang_thai?></a>
							</td>
							<td><a href="<?php echo admin_url('thanhvien/suatv/' .$row->id)?>">edit</a></td>
							<td><a href="<?php echo admin_url('thanhvien/xoatv/' .$row->id)?>">delete</a></td>
						</tr>
						<?php }?>
					</tbody></table>							
				</div>
		</div><!--end .content-->
	</div>
</div>
<script type="text/javascript">
	$(function() { 
  		$('#button2').on("click",function() { 
    		$('#div2').load("<?php echo admin_url('thanhvien/ajaxindex2')?>",function() {
      			/*$('#div2').slideToggle();*/
    }); 
  }); 
});
</script>