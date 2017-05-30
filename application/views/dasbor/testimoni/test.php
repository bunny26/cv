<?php 
$this->load->view('dasbor/admin/head');
?>
<div class="templatemo-content-wrapper">
	<div class="templatemo-content">
		<ol class="breadcrumb">
			<li><a href="index.html">Admin Panel</a></li>
			<li><a href="#">Testimoni</a></li>
			<li class="active">Tambah Data</li>
		</ol>

		<div class="container">
			<div class="row">


				<div class="container">
					<div class="row">
						<div class="table-responsive">
							<h4 class="margin-bottom-15">Tambah Data</h4>
							<table class="table table-striped table-hover table-bordered">
								<div>
									<span class="btn btn-primary">
										<a href="<?php echo base_url()."index.php/Admin/add_dataT"; ?>">Tambah Data</a>
									</span>
								</div>
								<thead>
									<tr style="background: gray;">
										<th>idTest</th>
										<th>nama</th>
										<th>tanggal</th>
										<th>testimoni</th>
										<th>EDIT</th>
										<th>DELETE</th>
										<th>Gambar</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach($data as $d){ ?>
									<tr>
										<th><?php echo $d['idTest']; ?></th>
										<th><?php echo $d['namaTest']; ?></th>
										<th><?php echo $d['tanggal']; ?></th>
										<th><?php echo $d['testimoni']; ?></th>
										<td align="center"><a href="<?php echo base_url()."index.php/Admin/edit_dataT/".$d['idTest']; ?>"><button>EDIT</button></a></td>
										<td align="center"><a href="<?php echo base_url()."index.php/Admin/do_deleteT/".$d['idTest']; ?>"><button>DELETE</button></a></td>
										<td>
											<img src="<?php echo base_url().$d['imageT']; ?>" width="400" height="300">
										</td>
									</tr>
									<?php } ?>
								</table>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>

<?php 
$this->load->view('dasbor/admin/foot');
?>
