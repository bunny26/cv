<?php 
  $this->load->view('dasbor/admin/head');
 ?>

<div class="templatemo-content-wrapper">
        <div class="templatemo-content">
          <ol class="breadcrumb">
            <li><a href="index.html">Admin Panel</a></li>
            <li><a href="#">Manage Users</a></li>
            <li class="active">Tables</li>
          </ol>
          <h1>Manage Users</h1>
          <p>Here goes tables and users.</p>

          <div class="row margin-bottom-30">
            <div class="col-md-12">
              <ul class="nav nav-pills">
                <li class="active"><a href="#">New Users <span class="badge">42</span></a></li>
                <li><a href="#">Active Users <span class="badge">107</span></a></li>
                <li><a href="#">Expired Users <span class="badge">3</span></a></li>
              </ul>          
            </div>
          </div> 
          <div class="row">
            <div class="col-md-12">
              <div class="btn-group pull-right" id="templatemo_sort_btn">
                <button type="button" class="btn btn-default">Sort by</button>
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                  <span class="caret"></span>
                  <span class="sr-only">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">First Name</a></li>
                  <li><a href="#">Last Name</a></li>
                  <li><a href="#">Username</a></li>
                </ul>
              </div>
              <div class="table-responsive">
                <h4 class="margin-bottom-15">New Users Table</h4>
                <table class="table table-striped table-hover table-bordered">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Username</th>
                      <th>Email</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($User as $U) { ?>
                    <tr>
                      <td><?php echo $U['id_user']; ?></td>
                      <td><?php echo $U['nama']; ?></td>
                      <td><?php echo $U['nama']; ?></td>
                      <td>@js</td>
                      <td>a@company.com</td>
                      <td><a href="<?php echo site_url('admin/edit_dataU'); ?>" class="btn btn-default">Edit</a></td>
                      <td><a href="<?php echo site_url('admin/do_deleteU') ?>" class="btn btn-default">Delete</a></td></td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
              <span class="btn btn-primary"><a href="<?php echo site_url('admin/add_dataU') ?>">Tambah User</a></span>

            </div>
          </div>
        </div>
      </div>
      






<?php 
  $this->load->view('dasbor/admin/foot');
 ?>