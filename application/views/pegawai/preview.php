<?php $this->load->view('pegawai/header');?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Laporan</title>
	<style>
		table {
			border-collapse: collapse;
			width: 70%;
			margin: 0 auto;
		}

		table th {
			border: 1px solid #000;
			padding: 3px;
			font-weight: bold;
			text-align: center;
		}

		table td {
			border: 1px solid #000;
			padding: 3px;
			vertical-align: top;
		}

	</style>
</head>

<body>
	<p style="text-align: center">Tabel Pegawai</p>
	<table>
		<tr>
			<th>Nama</th>
            <th>Nip</th>
            <th>Tanggal</th>
            <th>Alamat</th>
		</tr>
        <?php $no=0; foreach ($pegawai as $key) {
          $no++;
          ?> 
        <tr>
            <td><?php echo $key->Nama ?></td>
            <td><?php echo $key->Nip ?></td>
            <td><?php echo $key->Tanggal ?></td>
            <td><?php echo $key->alamat ?></td>
        </tr> 
        <?php } ?>
	</table>
    <p><a href="<?=site_url();?>/cetak/cetakpdf">Cetak PDF</a></p>
</body>

</html>
<?php $this->load->view('pegawai/footer');
?>