<div class="col-md-10">				
	<div class="content">
		<div class="col-md-4 add-dm">
			<h4 class="text-center">Sửa danh mục <font color="green"><?php echo $this->session->flashdata('flash_mess') ?></font></h4>
		</div>
				<div class="clearfix"></div>
				<form method="post">
					<div class="form">							
						<table class="table">
					      <tbody><tr>
					        <td><p>tiêu đề danh mục <font color="red"><?php echo form_error('title') ?></font></p>
					        </td>
					        <td><input type="text" name="title" class="form-control" 
					        value='<?php echo $row->ten_dm ?>'></td>
					      </tr>
					    					      
					  </tbody></table>							
					</div>
					<div class="col-md-3 form-group pull-right">
						 <input type="submit" name="ok" value="saves" class="btn btn-primary btn-block">
					</div>
				</form>
	</div>
</div>


