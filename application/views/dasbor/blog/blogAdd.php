<?php 
$this->load->view('dasbor/admin/head');
?>
<div class="templatemo-content-wrapper">
    <div class="templatemo-content">
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('admin/rumah'); ?>">Admin Panel</a></li>
            <li><a href="#">Dashboard</a></li>
            <li class="active">Portofolio</li>
        </ol>

        <form method="POST" action="<?php echo base_url()."index.php/admin/do_insertB"; ?> " enctype="multipart/form-data">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="btn-group pull-left" id="templatemo_sort_btn">  
                            <h4 class="margin-bottom-15">Tambah Data</h4> 
                            <td>Gambar</td>

                            <table class="table-responsive">
                                <tr>
                                    <input type="hidden" name="size" value="100000">
                                    <div>
                                        <input type="file" name="imageB">
                                    </div>
                                </tr>
                                <br>
                            </table>
                            <div class="input-group" class="templatemo-content-wrapper" >
                              <span class="input-group-addon" id="basic-addon1" style="width: 70px;">Id</span>
                              <input type = "text" name = "idPost" class="form-control" placeholder="id" aria-describedby="basic-addon1" >
                          </div>
                          <br>
                      <div class="input-group" class="templatemo-content-wrapper" >
                          <span class="input-group-addon" id="basic-addon1" style="width: 70px;">Judul</span>
                          <input type = "text" name = "judul" class="form-control" placeholder="id" aria-describedby="basic-addon1" >
                      </div>
                      <br>
                        <div class="input-group" class="templatemo-content-wrapper" >
                          <span class="input-group-addon" id="basic-addon1" style="width: 70px;">Nama</span>
                          <input type = "text" name = "isiBerita" class="form-control" placeholder="id" aria-describedby="basic-addon1" >
                      </div>
                      <br>
                           
                        <td>
                            <input type = "submit" name = "btnSubmit" value="Simpan" />
                        </td>
        </div>
    </div>
</div>
</div>
</form>
</div>
</div>

    <?php 
$this->load->view('dasbor/admin/foot');
?>

