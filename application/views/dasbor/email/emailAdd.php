<?php 
$this->load->view('dasbor/admin/head');
?>
<div class="templatemo-content-wrapper">
	<div class="templatemo-content">
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin/rumah'); ?>">Admin Panel</a></li>
			<li><a href="#">Dashboard</a></li>
			<li class="active">Email</li>
		</ol>


		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<form method="POST" action="<?php echo base_url()."index.php/admin/do_insertMail"; ?> " enctype="multipart/form-data">
						<table class="table-responsive">    
							<div class="input-group" class="templatemo-content-wrapper" >
								<span class="input-group-addon" id="basic-addon1" style="width: 70px;">
									Email
								</span>
								<input type = "text" name = "email" class="form-control" placeholder="email" aria-describedby="basic-addon1" >
							</div>
							<br>

							<div class="input-group" class="templatemo-content-wrapper" >
								<span class="input-group-addon" id="basic-addon1" style="width: 70px;">
									Nama 
								</span>
								<input type = "text" name = "namaPengirim" class="form-control" placeholder="nama" aria-describedby="basic-addon1" >
							</div>
							<br>

							<div class="input-group" class="templatemo-content-wrapper" >
								<span class="input-group-addon" id="basic-addon1" style="width: 70px;">
									Pesan
								</span>
								<input type = "text" name = "isiEmail" class="form-control" placeholder="pesan" aria-describedby="basic-addon1" >
							</div>
							<br>

							<div class="input-group" class="templatemo-content-wrapper" >
								<span class="input-group-addon" id="basic-addon1" style="width: 70px;">
									Tanggal 
								</span>
								<input type = "date" name = "waktu" class="form-control" placeholder="id" aria-describedby="basic-addon1" >
							</div>
							<br>

							<td>
								<input type = "submit" name = "btnSubmit" value="Simpan" />
							</td>

						</table>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php 
$this->load->view('dasbor/admin/foot');
?>
