<div class="panel-header bg-primary-gradient">
  <div class="page-inner py-5">
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
      <div>
        <h2 class="text-white pb-2 fw-bold">Detail Kategori <?php echo $content['detail']->category; ?></h2>
      </div>
      <div class="ml-md-auto py-2 py-md-0">
        <button type="button" class="btn btn-info btn-border btn-round" data-toggle="modal" data-target="#myModal">Tambah Kategori</button>

      </div>
    </div>
  </div>
</div>
<div class="page-inner mt--5">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <ul class="nav nav-pills nav-primary  nav-pills-no-bd nav-pills-icons justify-content-center" id="pills-tab-with-icon" role="tablist">
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

                </div>
              </form>

            </div>
            <div class="tab-pane fade" id="pills-profile-icon" role="tabpanel" aria-labelledby="pills-profile-tab-icon">
                  <div class="bd-example">
                    <div class="table-responsive">
                      <table id="multi-filter-select" class="display table table-striped table-hover" cellspacing="0" width="100%">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Nama Paket</th>
                            <th>Harga</th>
                            <th>Jumlah PIC</th>
                            <th>Opsi</th>
                          </tr>
                        </thead>
                        <tfoot>
                          <tr>
                            <th>No</th>
                            <th>Nama Paket</th>
                            <th>Harga</th>
                            <th>Jumlah PIC</th>
                            <th>Opsi</th>
                          </tr>
                        </tfoot>
                        <tbody>
                          <?php $i=1;foreach ($content['list'] as $item): ?>
                          <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $item->package ?></td>
                            <td><?php echo $item->price ?></td>
                            <td><?php echo $item->pic_count; ?></td>
                            <td> <a href="<?php echo base_url('detailPackage/'.$item->id); ?>" class="btn btn-info"> Detail </a> </td>
                          </tr>
                        <?php endforeach; ?>
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
          <input type="file" name="fileUpload" class="btn btn-primary">
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" name="updateImage" value="updateImage">Update Gambar</button>
        <button type="button" class="btn btn-grey" data-dismiss="modal">Kembali</button>
      </div>
    </form>
  </div>
</div>
</div>
