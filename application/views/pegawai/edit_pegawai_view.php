<?php $this->load->view('pegawai/header'); ?>

<div class="container">
	<div class="row">
		<legend>Edit Data Pegawai</legend>

		<!--<?php var_dump($pegawai);?>-->
		<?php echo validation_errors(); ?>

		<?php echo form_open_multipart('pegawai/update/'.$this->uri->segment(3)); ?>

	</div>
</div>


<div class="form-group">
	<label class="control-label col-sm-2" form="nama">Nama :</label>
	<div class="col-sm-10">
		<input type="text" name="nama" class="form-control" id="nama" value="<?php echo $pegawai[0]->Nama?>" placeholder="Nama"><br>
	</div>
</div>

<div class="form-group">
	<label class="control-label col-sm-2" form="Nip">Nip :</label>
	<div class="col-sm-10">
		<input type="text" name="nip" class="form-control" id="nip" value="<?php echo $pegawai[0]->Nip?>" placeholder="Nip"><br>
	</div>
</div>

<div class="form-group">
	<label class="control-label col-sm-2" form="Nip">Tanggal :</label>
	<div class="col-sm-10">
		<input type="date" name="tanggal" class="form-control" id="tanggal" value="<?php echo $pegawai[0]->Tanggal?>"><br>
	</div>
</div>

<div class="form-group">
	<label class="control-label col-sm-2" form="Nip">Alamat :</label>
	<div class="col-sm-10">
		<input type="text" name="alamat" class="form-control" id="nip" value="<?php echo $pegawai[0]->alamat?>" placeholder="alamat"><br>
	</div>
</div>

<div class="form-group">
	<label class="control-label col-sm-2" form="Nip">foto :</label>
	<div class="col-sm-10">
		<input type="file" name="userfile" class="form-control" id="nip" value="<?php echo $pegawai[0]->foto?>" placeholder="Nip"><br>
	</div>
</div>

<div class="form-group">
	<div class="col-sm-offset-2 col-sm-10">
		<button type="submit" class="btn btn-primary">Submit</button>
		<?php echo form_close(); ?>
	</div>
</div>

<?php $this->load->view('pegawai/footer'); ?>