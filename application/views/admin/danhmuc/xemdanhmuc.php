<!-- <div id="div2">
<button type="button" class="btn btn-default" aria-label="Left Align">
	<span class="glyphicon glyphicon-menu-up" aria-hidden="true"></span>
</button>-->
<div class="col-md-4 add-dm">
	<!-- <h4 class="text-center">Danh mục <font color="green"><?php echo $this->session->flashdata('flash_mess') ?></font></h4> -->
</div>
<div class="clearfix"></div>
	<div style="height:300px;overflow:auto">
		<table class="table table-bordered" style="margin-top:20px;">
			<tbody>
			<tr class="bg-info">
				<td>id</td>
				<td>title</td>
				<td>edit</td>
				<td>delete</td>
			</tr>		
			<?php foreach($list as $row) {?>
			<tr>
				<td><?php echo $row->id ?></td>
				<td><?php echo $row->ten_dm ?></td>
				<td><a href="<?php echo admin_url('dmbaiviet/suadm/' .$row->id)?>">edit</a></td>
				<td><a href="<?php echo admin_url('dmbaiviet/xoadm/' .$row->id)?>">delete</a></d>
			</tr>
			<?php }?>
		</tbody></table>
	</div>
<!-- </div>		
<script>
$(document).ready(function(){
    $("button").click(function(){
        $("#div2").empty();
    });
});
</script> -->	
		
