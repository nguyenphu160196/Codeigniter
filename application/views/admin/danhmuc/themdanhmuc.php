<div class="col-md-10">				
	<div class="content">
		<div class="col-md-4 add-dm">
			<h4 class="text-center">Thêm danh mục  
			<font color="green"><?php echo $this->session->flashdata('flash_mess') ?></font></h4>
		</div>
		<div class="clearfix"></div>
		<form method="post">
			<div class="form">							
				<table class="table">
			      <tbody><tr>
			        <td><p>Tiêu đề danh mục <font color="red"><?php echo form_error('title') ?></font></p>
			        </td>
			        <td><input type="text" name="title" class="form-control"></td>
			      </tr>			    					      
			  </tbody></table>	
			</div>
			<div class="col-md-3 form-group pull-right">
				 <input type="submit" name="ok" value="saves" class="btn btn-primary btn-block">
			</div>
		</form>	
		<div id="div1">
			<!-- <button type="button" class="btn btn-default" aria-label="Left Align">
				<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span>
			</button>	 -->
		</div>
	</div>
</div>
<!-- <script>
$(document).ready(function(){
    $("button").click(function(){
        $("#div2").empty();
    });
});
</script> -->	
<script>	
$(function worker(){
    // don't cache ajax or content won't be fresh
    $.ajaxSetup ({
        cache: false,
        complete: function() {
          // Schedule the next request when the current one's complete
          /*setTimeout(worker, 1000000);*/
        }
    });
    /*var ajax_load = "<img src='http://automobiles.honda.com/images/current-offers/small-loading.gif' alt='loading...' />";*/
    
    // load() functions
    var loadUrl = "<?php echo admin_url('dmbaiviet/ajaxindex')?>";
    $("#div1").load(loadUrl);/*html(ajax_load).*/
});
</script>

