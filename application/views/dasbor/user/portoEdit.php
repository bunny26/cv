<?php 
$this->load->view('dasbor/admin/head');
?>
<div class="templatemo-content-wrapper">
  <div class="templatemo-content">
    <ol class="breadcrumb">
      <li><a href="index.html">Admin Panel</a></li>
      <li><a href="#">Testimoni</a></li>
      <li class="active">Edit</li>
    </ol>

    <div class="container">
      <div class="row">
        <div style="padding-left: 30px;">
          <div class="col-md-12">
            <h4 class="margin-bottom-15"> Edit User</h4>

            <form method="POST" action="<?php echo base_url()."index.php/admin/do_update"; ?>">
             <table class="table-responsive">
              <div class="input-group" class="templatemo-content-wrapper" >
                <span class="input-group-addon" id="basic-addon1" style="width: 70px;">Id</span>
                <input type = "text" name = "idTest" class="form-control" placeholder="id" aria-describedby="basic-addon1"  value="<?php echo $idTest; ?>" readonly>
              </div>
              <br>
              <div class="input-group" class="templatemo-content-wrapper" >
                <span class="input-group-addon" id="basic-addon1" style="width: 70px;">Nama</span>
                <input type = "text" name = "namaTest" class="form-control" placeholder="id" aria-describedby="basic-addon1" value="<?php echo $namaTest; ?>" >
              </div>
              <br>
              <div class="input-group" class="templatemo-content-wrapper" >
                <span class="input-group-addon" id="basic-addon1" style="width: 70px;">
                  Tanggal 
                </span>
                <input type = "date" name = "tanggal" class="form-control" placeholder="id" aria-describedby="basic-addon1" value="<?php echo $tanggal; ?>">
              </div>
              <br>

              <div class="input-group" class="templatemo-content-wrapper" >
                <label for="notes">Testimoni</label>
                  <textarea class="form-control" rows="3" id="notes" type = "text" name = "testimoni" class="form-control" placeholder="testimoni" aria-describedby="basic-addon1" value="<?php echo $testimoni; ?>" ></textarea>
              </div>
              <br>

              <td>
                <input   type="submit" name="btnSubmit" value="Simpan" />
                
              </td>
              
            </table>
          </form>
        </div>
      </div>
    </div>
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
