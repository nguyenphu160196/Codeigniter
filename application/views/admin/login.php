<!DOCTYPE html>
<html lang="en">
	<head>
		<?php $this->load->view('admin/head')?>	
	</head>
	<style>
	.col-xs-4{
		margin-top: 8%;
	}
	.btn{
		width:100%;
		margin-top: 15px;
	}
	</style>
	<body>
		<div class="container">
		<div class="row">
			<div class="col-xs-4 col-xs-offset-4">
				<h3 align="center" style="margin-bottom: 20px;">Đăng nhập quản trị </h3>
				<form method="post">
					<div class="form-group">
						<label for="">Tên đăng nhập</label>
						<input name="user" type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="">Mật khẩu</label>
						<input name="pass" type="password" class="form-control" required>
					</div>
					<input type="submit" value="Đăng nhập" class="btn btn-primary">
				</form>
			</div>
		</div>
	</div>
	</body>
<html>