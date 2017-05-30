<?php 
$this->load->view('dasbor/admin/head');
?>
<div class="templatemo-content-wrapper">
	<div class="templatemo-content">
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('index.php/Admin/rumah'); ?>">Admin Panel</a></li>
			<li><a href="#">Dashboard</a></li>
			<li class="active">Portofolio</li>
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
							<a href="<?php echo base_url()."index.php/Admin/add_dataP"; ?>">Tambah Data</a>
						</span>
					</div>
						<thead>
							<tr style="background: gray;">
								<th>idPorto</th>
								<th>namaPorto</th>
								<th>keterangan</th>
								<th>kategori</th>
								<th>EDIT</th>
								<th>DELETE</th>
								<th>Gambar</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($data as $d){ ?>
							<tr>
								<th><?php echo $d['idPorto']; ?></th>
								<th><?php echo $d['namaPorto']; ?></th>
								<th><?php echo $d['keterangan']; ?></th>
								<th><?php echo $d['kategori']; ?></th>
								<td align="center"><a href="<?php echo base_url()."index.php/Admin/edit_dataP/".$d['idPorto']; ?>"><button>EDIT</button></a></td>
								<td align="center"><a href="<?php echo base_url()."index.php/Admin/do_deleteP/".$d['idPorto']; ?>"><button>DELETE</button></a></td>
								<td>
									<img src="<?php echo base_url().$d['imageP']; ?>" width="400" height="300">
								</td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
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