<div class="panel-header bg-warning-gradient">
  <div class="page-inner py-5">
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
      <div>
        <h2 class="text-white pb-2 fw-bold">Konfigurasi Website</h2>
      </div>

    </div>
  </div>
</div>
<div class="page-inner mt--5">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header ">
          <h4 class="card-title">Form Konfigurasi Website</h4>
        </div>
        <div class="card-body">
          <ul class="nav nav-pills nav-warning  nav-pills-no-bd nav-pills-icons justify-content-center" id="pills-tab-with-icon" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="pills-home-tab-icon" data-toggle="pill" href="#pills-home-icon" role="tab" aria-controls="pills-home-icon" aria-selected="true">
                <i class="flaticon-home"></i>
                Umum
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-profile-tab-icon" data-toggle="pill" href="#pills-profile-icon" role="tab" aria-controls="pills-profile-icon" aria-selected="false">
                <i class="flaticon-envelope"></i>
                Email
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-contact-tab-icon" data-toggle="pill" href="#pills-contact-icon" role="tab" aria-controls="pills-contact-icon" aria-selected="false">
                <i class="flaticon-chat-8"></i>
                Sosial Media
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-logo2" data-toggle="pill" href="#pills-logo" role="tab" aria-controls="pills-contact-icon" aria-selected="false">
                <i class="flaticon-picture"></i>
                Logo dan Icon
              </a>
            </li>

          </ul>
          <div class="tab-content mt-2 mb-3" id="pills-with-icon-tabContent">
            <div class="tab-pane fade show active" id="pills-home-icon" role="tabpanel" aria-labelledby="pills-home-tab-icon">
              <form  method="post">

              <div class="card-body">
                <div class="row">

                  <div class="form-group col-6 col-md-6">
                    <label>Nama Situs Web</label>
                    <input type="text" class="form-control" placeholder="Masukan nama web anda" name="website_name" value="<?php echo $content['webconf']->website_name; ?>">
                  </div>

                  <div class="form-group col-6 col-md-6">
                    <label>Nomor Telepon</label>
                    <input type="text" class="form-control" placeholder="Masukan telepon anda" name="office_number" value="<?php echo $content['webconf']->office_number; ?>">
                  </div>

                  <div class="form-group col-6 col-md-12">
                    <label>Alamat Kantor</label>
                    <input type="text" class="form-control" placeholder="Masukan alamat" name="address" value="<?php echo $content['webconf']->address; ?>">
                  </div>

                </div>
              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-info"  name="updateGeneral" value="updateGeneral">Update Data</button>
              </div>
            </form>

            </div>
            <div class="tab-pane fade" id="pills-profile-icon" role="tabpanel" aria-labelledby="pills-profile-tab-icon">
              <form method="post">
              <div class="card-body">
                <div class="row">
                  <div class="form-group col-6 col-md-3">
                    <label>Host</label>
                    <input type="text" class="form-control" placeholder="Masukan host email anda" name="host" value="<?php echo $content['webconf']->host; ?>">
                  </div>

                  <div class="form-group col-6 col-md-3">
                    <label>Email</label>
                    <input type="text" class="form-control" placeholder="Masukan email anda" name="email" value="<?php echo $content['webconf']->email; ?>">
                  </div>

                  <div class="form-group col-6 col-md-3">
                    <label>Password</label>
                    <input type="password" class="form-control" placeholder="Masukan password anda" name="password" value="<?php echo $content['webconf']->password; ?>">
                  </div>

                  <div class="form-group col-6 col-md-1">
                    <label>Port</label>
                    <input type="text" class="form-control" placeholder="Masukan port email anda" name="port" value="<?php echo $content['webconf']->port; ?>">
                  </div>

                  <div class="form-group col-6 col-md-2">
                    <label>Crypto</label>
                    <input type="text" class="form-control" placeholder="Masukan crypto anda" name="crypto" value="<?php echo $content['webconf']->crypto; ?>">
                  </div>

                </div>
              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-info"  name="updateEmail" value="updateEmail">Update Data</button>
              </div>
            </form>
            </div>
            <div class="tab-pane fade" id="pills-contact-icon" role="tabpanel" aria-labelledby="pills-contact-tab-icon">
              <form  method="post">
              <div class="card-body">
                <div class="row">
                  <div class="form-group col-6 col-md-4">
                    <label>Facebook</label>
                    <input type="text" class="form-control" placeholder="Username facebook perusahaan" name="facebook" value="<?php echo $content['webconf']->facebook; ?>">
                  </div>

                  <div class="form-group col-6 col-md-4">
                    <label>Instagram</label>
                    <input type="text" class="form-control" placeholder="IG perusahaan" name="instagram" value="<?php echo $content['webconf']->instagram; ?>">
                  </div>

                  <div class="form-group col-6 col-md-4">
                    <label>Youtube</label>
                    <input type="text" class="form-control" placeholder="Youtube perusahaan" name="youtube" value="<?php echo $content['webconf']->youtube; ?>">
                  </div>

                </div>
              </div>
              <div class="card-footer">
              </div>
              <button type="submit" class="btn btn-info"  name="updateSocmed" value="updateSocmed">Update Data</button>
            </form>

            </div>
            <div class="tab-pane fade" id="pills-logo" role="tabpanel" aria-labelledby="pills-contact-tab-icon">
              <div class="card-body">
                <div class="row">
                  <img src="<?php echo base_url('./assets/upload/'.$content['webconf']->logo); ?>" alt="">
                </div>
              </div>
              <div class="card-footer">
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Ganti Logo</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <center>
          <h4> Ganti Logo</h4>
        </center>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <form role="form" enctype="multipart/form-data" method="post">
        <div class="modal-body">
          <div class="form-group">
            <br>
          </center>
          <input type="file" name="fileUpload" class="btn btn-warning">
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-warning" name="upload" value="upload">Upload Foto</button>
        <button type="button" class="btn btn-grey" data-dismiss="modal">Kembali</button>
      </div>
    </form>
  </div>
</div>
</div>
