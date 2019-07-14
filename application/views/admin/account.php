<div class="panel-header bg-primary-gradient">
  <div class="page-inner py-5">
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
      <div>
        <h2 class="text-white pb-2 fw-bold">Konfigurasi Akun</h2>
      </div>
      <div class="ml-md-auto py-2 py-md-0">
        <div class="row">

        <button type="button" class="btn btn-info btn-border btn-round" data-toggle="modal" data-target="#myModal">Tambah Staff</button>
      </div>
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
                <i class="flaticon-user"></i>
                Akun Staff
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-profile-tab-icon" data-toggle="pill" href="#pills-profile-icon" role="tab" aria-controls="pills-profile-icon" aria-selected="false">
                <i class="flaticon-users"></i>
                Akun Pelanggan
              </a>
            </li>
          </ul>
          <div class="tab-content mt-2 mb-3" id="pills-with-icon-tabContent">
            <div class="tab-pane fade show active" id="pills-home-icon" role="tabpanel" aria-labelledby="pills-home-tab-icon">
              <form  method="post">
              <div class="input-group col-md-12">
                <input type="text" placeholder="Cari Akun Staf..." class="form-control btn-primary btn-border" name="keyword">
                <div class="input-group-prepend">
                  <button type="submit" class="btn btn-search btn-primary" name="find" value="find">
                    <i class="fa fa-search search-icon"></i>&nbsp;Cari Akun
                  </button>
                </div>
              </div>
            </form>


              <br><br>
              <div class="row">
                <?php foreach ($content['account'] as $item): if($item->role!='staff'){continue;} ?>
                  <div class="col-md-4">
                    <div class="card" >
                      <img class="card-img-top" src="<?php echo base_url('./assets/upload/'.$item->display_picture); ?>" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title"><?php echo $item->fullname; ?></h5>
                        <p class="card-text"><?php echo '@'.$item->username ?></p>
                        <a href="<?php echo base_url('detailAccount/'.$item->id); ?>" class="btn btn-primary">Detail Akun</a>
                      </div>
                    </div>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-profile-icon" role="tabpanel" aria-labelledby="pills-profile-tab-icon">
              <form method="post">
                <div class="card-body">
                  <div class="bd-example">
                    <div class="table-responsive">
                      <table id="multi-filter-select" class="display table table-striped table-hover" cellspacing="0" width="100%">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Nama Pengguna</th>
                            <th>Email</th>
                            <th>Opsi</th>
                          </tr>
                        </thead>
                        <tfoot>
                          <tr>
                            <th>No</th>
                            <th>Nama Pengguna</th>
                            <th>Email</th>
                            <th>Opsi</th>
                          </tr>
                        </tfoot>
                        <tbody>
                          <?php $i=1;foreach ($content['account'] as $item): if($item->role!='user'){continue;} ?>

                            <tr>
                              <td><?php echo $i; ?></td>
                              <td><?php if($item->fullname==''){echo '@'.$item->username.'(Belum Dilengkapi)';} else {echo $item->fullname;}  ?></td>
                              <td><?php echo $item->email ?></td>
                              <td> <a href="<?php echo base_url('detailAccount/'.$item->id); ?>" class="btn btn-info"> Detail </a> </td>
                            </tr>
                          <?php endforeach; ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>

              </form>
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
          <h4>Tambah Staf</h4>
        </center>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <form role="form" method="post">
        <div class="modal-body">
          <div class="form-group col-6 col-md-12">
            <label>Username</label>
            <input type="text" class="form-control" placeholder="Masukan nama username pengguna" name="username">
          </div>
          <div class="form-group col-6 col-md-12">
            <label>Email</label>
            <input type="email" class="form-control" placeholder="Masukan email pengguna" name="email">
          </div>

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" name="createAccount" value="createAccount">Buat Akun</button>
          <button type="button" class="btn btn-grey" data-dismiss="modal">Kembali</button>
        </div>
      </form>
    </div>
  </div>
</div>
