<?php $this->load->view('pegawai/header'); ?>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">


<div class="container">
  	<div class="panel panel-default">
    	<div class="panel-heading">Tambah Pegawai</div>
    		<div class="panel-body">

	    		<?php echo form_open_multipart('pegawai/create');?>
	    		<?php echo validation_errors(); ?>


				<div class="form-group">
					<label for="" >Nama : </label>
					<input type="text" name="nama" class="form-control" id="nama" placeholder="field">
				</div>

				<div class="form-group">
					<label for="" >Nip : </label>
					<input type="text" name="nip" class="form-control" id="nip" placeholder="field">
				</div>

				<div class="form-group">
					<label for="">Tanggal : </label>
					<input type="date" name="tanggal" class="form-control" id="tanggal">					
				</div>

				<div class="form-group">
					<label for="" >Alamat : </label>
					<input type="text" name="alamat" class="form-control" id="alamat" placeholder="field">
				</div>

				<div class="form-group">
					<label for="" >Foto : </label>
					<input type="file" name="userfile" size="20" class="form-control">
				</div>				

				<button type="submit" class="btn btn-primary">Submit</button>
				<?php echo form_close(); ?>
				
			</div>
    	</div>
  	</div>
</div>

<?php $this->load->view('pegawai/footer');?>