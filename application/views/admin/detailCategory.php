<div class="panel-header" style="background-image: url(<?php echo base_url('./assets/upload/'.$content['detail']->image); ?>);background-position: center;background-size: cover;height: 250px">
  <div class="page-inner py-10">
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
      <div>
        <h2 class="text-white pb-2 fw-bold">Detail Kategori <?php echo $content['detail']->category; ?></h2>
      </div>
      <div class="ml-md-auto py-2 py-md-0">
        <button type="button" class="btn btn-info btn-round" data-toggle="modal" data-target="#myModal1"><b>Tambah Paket</b></button>&nbsp;
        <button type="button" class="btn btn-info btn-round" data-toggle="modal" data-target="#myModal2"><b>Pulihkan Paket Terhapus</b></button>

      </div>
    </div>
  </div>
</div>
<div class="page-inner mt--5">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <ul class="nav nav-pills nav-warning  nav-pills-no-bd nav-pills-icons justify-content-center" id="pills-tab-with-icon" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="pills-home-tab-icon" data-toggle="pill" href="#pills-home-icon" role="tab" aria-controls="pills-home-icon" aria-selected="true">
                <i class="flaticon-home"></i>
                Informasi
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-profile-tab-icon" data-toggle="pill" href="#pills-profile-icon" role="tab" aria-controls="pills-profile-icon" aria-selected="false">
                <i class="flaticon-envelope"></i>
                Paket
              </a>
            </li>

          </ul>
          <div class="tab-content mt-2 mb-3" id="pills-with-icon-tabContent">
            <div class="tab-pane fade show active" id="pills-home-icon" role="tabpanel" aria-labelledby="pills-home-tab-icon">
              <form  method="post">

                <div class="card-body">
                  <div class="row">

                    <div class="form-group col-6 col-md-3">
                      <label>Nama Kategori</label>
                      <input type="text" class="form-control" placeholder="Masukan nama kategori" name="category" value="<?php echo $content['detail']->category; ?>">
                    </div>

                    <div class="form-group col-6 col-md-9">
                      <label>Keterangan</label>
                      <input type="text" class="form-control" placeholder="Masukan keterangan kategori" name="info" value="<?php echo $content['detail']->info; ?>">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-info"  name="updateCategory" value="updateCategory">Update Data</button>
                  <button type="button" class="btn btn-success " data-toggle="modal" data-target="#myModal">Ganti Gambar</button>
                  <button type="button" class="btn btn-danger " data-toggle="modal" data-target="#myModal3">Hapus Kategori</button>
                  <a href="<?php echo base_url('category'); ?>" class="btn btn-secondary">Kembali</a>
                </div>
              </form>

            </div>
            <div class="tab-pane fade" id="pills-profile-icon" role="tabpanel" aria-labelledby="pills-profile-tab-icon">
              <div class="row">

                <?php foreach ($content['list'] as $item):?>

                  <div class="col-md-4">

                    <div class="card" >
                      <img class="card-img-top" src="<?php echo base_url('./assets/upload/'.$item->image); ?>" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title"><?php echo $item->package; ?></h5>
                        <p><?php echo $item->description; ?></p>
                        <h5 style="color:green;"><b><?php echo 'Rp. '.$item->price; ?></b></h5>
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#detail<?php echo $item->id?>">Detail Paket</button>
                      </div>
                    </div>
                  </div>
                <?php endforeach; ?>
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
          <h4> Ubah Foto</h4>
        </center>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <form  method="post" enctype="multipart/form-data">
        <div class="modal-body">
          <img class="card-img-top" src="<?php echo base_url('./assets/upload/'.$content['detail']->image); ?>" alt="Card image cap">
          <div class="form-group  col-6 col-md-12">
            <br>
            <input type="file" name="fileUpload" class="btn btn-warning">
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-warning" name="updateImage" value="updateImage">Update Gambar</button>
          <button type="button" class="btn btn-grey" data-dismiss="modal">Kembali</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="myModal1" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <center>
          <h4> Tambah Paket</h4>
        </center>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <form  method="post" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="row">

            <div class="form-group col-6 col-md-12">
              <label>Nama Paket</label>
              <input type="text" class="form-control" placeholder="Masukan nama paket" name="package">
            </div>
            <div class="form-group col-6 col-md-12">
              <br>
            </center>
            <input type="file" name="fileUpload" class="btn btn-warning">
          </div>
          <div class="form-group col-6 col-md-6">
            <label>Harga</label>
            <input type="number" class="form-control" placeholder="Masukan harga paket" name="price">
          </div>
          <div class="form-group col-6 col-md-6">
            <label>Jumlah PIC</label>
            <input type="number" class="form-control" placeholder="Masukan jumlah PIC" name="pic_count">
          </div>
          <div class="form-group col-6 col-md-12">
            <label>Keterangan</label>
            <textarea name="description" rows="4" class="form-control" placeholder="Masukan deskripsi paket"></textarea>
          </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-warning" name="createPackage" value="createPackage">Buat Paket</button>
        <button type="button" class="btn btn-grey" data-dismiss="modal">Kembali</button>
      </div>
    </form>
  </div>
</div>
</div>

<?php foreach ($content['list'] as $item): ?>
  <div class="modal fade" id="detail<?php echo $item->id;?>" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <center>
            <h4> Detail Paket</h4>
          </center>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <form  method="post" enctype="multipart/form-data">
          <div class="modal-body">
            <div class="row">

              <div class="form-group col-6 col-md-12">
                <label>Nama Paket</label>
                <input type="text" class="form-control"  name="id" value="<?php echo $item->id; ?>" hidden>
                <input type="text" class="form-control" placeholder="Masukan nama paket" name="package" value="<?php echo $item->package; ?>">
              </div>
              <div class="form-group col-6 col-md-12">
                <br>
              </center>
              <input type="file" name="fileUpload" class="btn btn-warning">
            </div>

            <div class="form-group col-6 col-md-6">
              <label>Harga</label>
              <input type="number" class="form-control" placeholder="Masukan harga paket" name="price" value="<?php echo $item->price; ?>">
            </div>
            <div class="form-group col-6 col-md-6">
              <label>Jumlah PIC</label>
              <input type="number" class="form-control" placeholder="Masukan jumlah PIC" name="pic_count" value="<?php echo $item->pic_count; ?>">
            </div>
            <div class="form-group col-6 col-md-12">
              <label>Keterangan</label>
              <textarea name="description" rows="4" class="form-control" placeholder="Masukan deskripsi paket"><?php echo $item->description ?></textarea>
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-warning" name="updatePackage" value="updatePackage">Update Paket</button>
          <button type="submit" class="btn btn-warning" name="uploadImage" value="uploadImage">Ganti Foto</button>
          <button type="submit" class="btn btn-danger" name="deletePackage" value="deletePackage">Hapus</button>
          <button type="button" class="btn btn-grey" data-dismiss="modal">Kembali</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php endforeach; ?>

<div class="modal fade" id="myModal2" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <center>
          <h4> Pulihkan Paket Terhapus</h4>
        </center>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <form  method="post" >
        <div class="modal-body">
          <div class="form-group col-6 col-md-12">
            <label>Paket</label>
            <select class="js-example" id="mySelect2" name="id">
              <?php foreach ($content['deleted'] as $item): ?>
                <option value="<?php echo $item->id ?>"><?php echo $item->package; ?></option>
              <?php endforeach; ?>
            </select>
          </div>

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-warning" name="restorePackage" value="restorePackage">Pulihkan</button>
          <button type="button" class="btn btn-grey" data-dismiss="modal">Kembali</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="myModal3" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <center>
          <h4> Hapus Kategori</h4>
        </center>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <form  method="post">
        <div class="modal-body">
          <div class="row">


            <div class="form-group col-6 col-md-12">
              <label>Password anda</label>
              <input type="password" name="password" value="" placeholder="Tulis Password anda" class="form-control">
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-warning" name="deleteCategory" value="deleteCategory">Hapus Kategori</button>
          <button type="button" class="btn btn-grey" data-dismiss="modal">Kembali</button>
        </div>
      </form>
    </div>
  </div>
</div>
