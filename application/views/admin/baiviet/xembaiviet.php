<div id="div2">
	<div class="col-md-10">				
		<div class="content">
			<div class="col-md-4 add-dm">
				<h4 class="text-center">Bài Viết <font color="green"><?php echo $this->session->flashdata('flash_mess') ?></font></h4>
			</div>
			<button type="button" class="btn btn-default pull-right" id="button2">
				  	<span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
			</button>
			<div class="clearfix"></div>	
				<div style="height:500px;overflow:auto">			
					<table class="table table-bordered" style="margin-top:20px;">
						<tbody><tr class="bg-info">
							<td>id</td>
							<td>title</td>
							<td>price</td>
							<td>image</td>
							<td>edit</td>
							<td>delete</td>
						</tr>
						<tr>
						<?php foreach($list as $row) {?>
							<td><?php echo $row->id?></td>
							<td><?php echo $row->tieu_de?></td>
							<td><?php echo $row->gia_sp?></td>
							<td><img width="100px" src="<?php echo public_helper('admin/img/'.$row->hinh_anh)?>"></td>
							<td><a href="<?php echo admin_url('baiviet/suabai/' .$row->id) ?>">edit</a></td>
							<td><a href="<?php echo admin_url('baiviet/xoabai/' .$row->id) ?>">delete</a></td>
						</tr>
						<?php }?>
					</tbody></table>							
				</div>
			</div>
		</div>
	</div>
<script type="text/javascript">
	$(function() { 
  		$('#button2').on("click",function() { 
    		$('#div2').load("<?php echo admin_url('baiviet/ajaxindex2')?>",function() {
      			/*$('#div2').slideToggle();*/
    }); 
  }); 
});
</script>