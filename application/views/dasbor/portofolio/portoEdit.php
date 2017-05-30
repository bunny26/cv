<?php 
$this->load->view('dasbor/admin/head')
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
         <div class="col-md-12">
          <h4 class="margin-bottom-15">Edit Portofolio</h4>

          <form method="POST" action="<?php echo base_url()."index.php/Admin/do_updateP"; ?>">
            
             <table class="table-responsive">
              <div class="input-group" class="templatemo-content-wrapper" >
                          <span class="input-group-addon" id="basic-addon1" style="width: 70px;">Id</span>
                          <input type = "text" name = "idPorto" class="form-control" placeholder="id" aria-describedby="basic-addon1"  value="<?php echo $idPorto; ?>">
                      </div>
                      <br>
               <div class="input-group" class="templatemo-content-wrapper" >
                          <span class="input-group-addon" id="basic-addon1" style="width: 70px;">Nama</span>
                          <input type = "text" name = "namaPorto" class="form-control" placeholder="id" aria-describedby="basic-addon1" value="<?php echo $namaPorto; ?>" >
                        </div>
                        <br>
                      
                 <div class="input-group" class="templatemo-content-wrapper" >
                          <span class="input-group-addon" id="basic-addon1" style="width: 70px;">Keterangan</span>
                          <input type = "text" name = "keterangan" class="form-control" placeholder="id" aria-describedby="basic-addon1" value="<?php echo $keterangan; ?>" > 
                      </div>
                      <br>
                 <td style="padding-right: 20px;">
                  Kategori
                </td>
                <br>
                <td>
                  <select type="text" name="kategori" value="<?php echo $kategori; ?>"/>
                    <option value="kontruksi">Kontruksi</option>
                    <option value="desainInterior">Desain Interior</option>
                    <option value="arsitektur">Arsitektur</option>
                  </select>
                  <br>
                <td>
                  <input type="submit" name="btnSubmit" value="Simpan" />
                </td>
            </table>
          </form>
        </body>
      </head>
      </html>
