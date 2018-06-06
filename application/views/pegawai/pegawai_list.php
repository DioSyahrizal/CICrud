<?php $this->load->view('pegawai/header'); ?>

<div class="container">
  <div class="panel panel-default">
    <div class="panel-heading">Daftar Pegawai</div>

    <div class="panel-body">
    	<div class="table-responsive">
			<table class="table table-hover" id="example">
				<thead>
					<tr>
						<th>ID</th>
						<th>NIP</th>
						<th>Nama</th>
						<th>Tanggal</th>
						<th>Alamat</th>
						<th>Foto</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
				</thead>
					<tbody>
					<?php foreach ($pegawai_object as $key) { ?>
						<tr>
							<td><?php echo $key->id?></td>
							<td><?php echo $key->Nip?></td>
							<td><?php echo $key->Nama?></td>
							<td><?php echo $key->Tanggal?></td>
							<td><?php echo $key->alamat?></td>
							<td><img src=<?=base_url("assets/image")."/".$key->foto?> width="100"></td>

							<td>
								<a href="<?=site_url()?>/pegawai/Update/<?php echo $key->id?>">
									<p data-placement="top" data-toggle="tooltip" title="Edit">
										<button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit">
											<span class="glyphicon glyphicon-pencil"></span>
										</button>
									</p>
							</td>
							<td>
								<a href="<?=site_url()?>/pegawai/delete/<?php echo $key->id?>">
									<p data-placement="top" data-toggle="tooltip" title="Delete">
										<button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete">
											<span class="glyphicon glyphicon-trash"></span>
										</button>
									</p>
							</td>
						</tr>

					<?php } ?>
				</tbody>
			</table>
		</div>

    </div>
  </div>
</div>

<?php $this->load->view('pegawai/footer');?>