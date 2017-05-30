<?php 
$this->load->view('dasbor/admin/head');
?>

<div class="templatemo-content-wrapper">
  <div class="templatemo-content">
    <ol class="breadcrumb">
      <li><a href="index.html">Admin Panel</a></li>
      <li><a href="#">Dashboard</a></li>
      <li class="active">Berita</li>
    </ol>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h4 class="margin-bottom-15">Edit Berita</h4>

          <form class="templatemo-content-wrapper" method="POST" action="<?php echo base_url()."index.php/Admin/do_updateB"; ?>">
           <table class="table-responsive">
            <div class="input-group" class="templatemo-content-wrapper">
              <span class="input-group-addon" id="sizing-addon2">Id</span>
              <input type="text" name="idPost" value="<?php echo $idPost; ?>" readonly />
            </div>
            <br>

            <div class="input-group" class="templatemo-content-wrapper" >
                          <span class="input-group-addon" id="basic-addon1" style="width: 70px;">Judul</span>
              <input type = "text" class="form-control" placeholder="id" aria-describedby="basic-addon1"   name="judul" value="<?php echo $judul; ?>" />
            </div>
              <br>

             <div class="input-group" class="templatemo-content-wrapper" >
                          <span class="input-group-addon" id="basic-addon1" style="width: 70px;">Judul</span>
                          <input type = "text" class="form-control" placeholder="id" aria-describedby="basic-addon1" name="isiBerita" value="<?php echo $isiBerita; ?>" />
                                      </div>
                                      <br>
              <input type="submit" name="btnSubmit" value="Simpan" />
            </td>
          </tr>
        </table>
      </form>
    </div>
  </div>
</div>
</div>

<?php 
$this->load->view('dasbor/admin/foot');
?>

