<?php
// Notifikasi input error
echo validation_errors('<div class="alert alert-danger"><i class="fa fa-warning"></i> ','</div>');

//Open form
echo form_open(base_url('admin/user/tambah'));
?>

<div class="col-md-6">
	<div class="form-group">
		<label>Nama</label>
			<input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" value="<?php echo 
				set_value('nama') ?>" required>
	</div>

	<div class="form-group">
		<label>Email</label>
			<input type="email" name="email" class="form-control" placeholder="Masukkan Email" value="<?php echo 
				set_value('email') ?>" required>
	</div>

	<div class="form-group">
		<label>Username</label>
			<input type="text" name="username" class="form-control" placeholder="Masukkan Username" value="<?php echo 
				set_value('username') ?>" required>
	</div>

	<div class="form-group">
		<label>Password</label>
			<input type="password" name="password" class="form-control" placeholder="Masukkan Password" value="<?php echo 
				set_value('password') ?>" required>
	</div>
</div>

<div class="col-md-6">
	<div class="form-group">
			<label>Level Hak Akses</label>
			<select name="akses_level" class="form-control">
				<option value="Admin">Admin</option>
				<option value="User">User</option>
			</select>
	</div>

	<div class="form-group">
		<label>Keterangan Lain</label>
			<textarea name="keterangan" id="" rows="3" class="form-control" placeholder="Keterangan"><?php echo set_value('keterangan') ?></textarea>	
	</div>

	<div class="form-group">
		<input type="submit" name="submit" class="btn btn-success btn-lg" value="Simpan Data">
		<input type="reset" name="reset" class="btn btn-default btn-lg" value="Reset">
	</div>
</div>

<?php
//Form close
echo form_close();
?>