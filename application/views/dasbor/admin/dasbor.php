<?php 
$this->load->view('dasbor/admin/head')
?> 

<div class="templatemo-content-wrapper">
	<div class="templatemo-content">
		<ol class="breadcrumb">
			<li><a href="index.html">Admin Panel</a></li>
			<li><a href="#">Dashboard</a></li>
			<li class="active">Overview</li>
		</ol>

		<div class="container">

			<div class="templatemo-panels"> 
				<h4 class="list-group-item-heading">Portofolio Terbaru</h4>
					<div class="panel-body">

						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
							
							<div class="news">
								<div class="img-figure">
									<img src="<?php echo base_url().$porto[0]['imageP']; ?>">
								</div>	
								<div class="title">
									<h1><?php echo $porto[0]['namaPorto'] ?></h1>
								</div>
								<p class="description">
									<?php echo $porto[0]['keterangan'] ?>
								</p>

								<p class="more">
									<a href="<?php echo site_url('index.php/Admin/crudporto'); ?>">read more</a><i class="fa fa-angle-right" aria-hidden="true"></i>
								</p>
							</div>
						</div>
						
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
							<div class="news">
								<div class="img-figure">
									<img src="http://136.243.1.253/~creolitic/bootsnipp/fashion.jpg" class="img-responsive">
								</div>	

								<div class="title">
									<h1>The start of the web and web design</h1>
								</div>
								<p class="description">
									If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden...
								</p>

								<p class="more">
									<a href="<?php echo site_url('admin/crudporto'); ?>">read more</a><i class="fa fa-angle-right" aria-hidden="true"></i>
								</p>
							</div>
						</div>

						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
							<div class="news">
								<div class="img-figure">
									<img src="http://136.243.1.253/~creolitic/bootsnipp/fashion.jpg" class="img-responsive">
								</div>	

								<div class="title">
									<h1>The start of the web and web design</h1>
								</div>
								<p class="description">
									If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden...
								</p>

								<p class="more">
									<a href="<?php echo site_url('admin/crudporto'); ?>">read more</a><i class="fa fa-angle-right" aria-hidden="true"></i>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>




		<div class="templatemo-panels">  
			<div class="col-md-6 col-sm-6 col-xs-12 margin-bottom-15 margin-top-15">
				<h4 class="list-group-item-heading">User Table</h4>
				<div class="panel panel-primary">
					<div class="panel-body">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>#</th>
									<th>idUser</th>
									<th>Username</th>
									<th>Name</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($user as $u){ ?>
								<tr>
									<td><?php echo $u['id_user']; ?></td>
									<td><?php echo $u['nama']; ?></td>
									<td><?php echo $u['user']; ?></td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
				<span class="btn btn-primary"><a href="<?php echo site_url('admin/cruduser') ?>">See Tables</a></span>
			</div>       
		</div>
	</div>

</div>
</div>

<?php 
$this->load->view('dasbor/admin/foot')
?> 
