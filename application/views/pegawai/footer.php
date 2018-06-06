<footer>
        <center>
        	&copy;Muhammad Dio Syahrizal
        </center>
    </footer>

<script src="<?=base_url()?>assets/js/jquery.js"></script>
<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>

<script src="<?=base_url()?>assets/DataTables/datatables.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#example').DataTable({
			"processing":true,
			"serverSide":true,
			"lengthMenu":[[3,6,10,-1],[3,6,10,"All"]],
			"ajax":{
				url : "<?php echo site_url('pegawai/data_server') ?>",
				type : "POST"
			},
			"columnDefs":
			[
				

				
				{
					"targets":0,
					"data":"Nama",
				},
				{
					"targets":1,
					"data":"Nip",
				},
				{
					"targets":2,
					"data":"Tanggal",
				},
				{
					"targets":3,
					"data":"alamat",
				},
				{
					"targets":4,
					"data":"foto",
					"render":function(data,type,full,meta){
						return '<img src="<?=base_url()?>assets/image/'+data+'" width="100">';
					}
				},
				{
					"targets":5,
					"data":null,
					"searchable":false,
					"render":function(data,type,full,meta){
						return '<a href="<?=site_url()?>/pegawai/Update/'+data["id"]+'">Edit</a>';
					}
				},
				{
					"targets":6,
					"data":null,
					"searchable":false,
					"render":function(data,type,full,meta){
						return '<a href="<?=site_url()?>/pegawai/delete/'+data["id"]+'">Delete</a>';
					}
				},
			]
		});
	});
</script>

</body>
</html>