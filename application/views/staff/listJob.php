<div class="panel-header bg-primary-gradient">
  <div class="page-inner py-5">
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
      <div>
        <h2 class="text-white pb-2 fw-bold">Order Layanan</h2>
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
              <a class="nav-link active" id="pills-home-tab-icon" data-toggle="pill" href="#unconfirmed" role="tab" aria-controls="information" aria-selected="true">
                <i class="flaticon-box-3"></i>
                Belum Dieksekusi
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-profile-tab-icon" data-toggle="pill" href="#process" role="tab" aria-controls="order" aria-selected="false">
                <i class="flaticon-stopwatch"></i>
                Belum Melampirkan Hasil 1
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" id="pills-profile-tab-icon" data-toggle="pill" href="#finish" role="tab" aria-controls="order" aria-selected="false">
                <i class="flaticon-check"></i>
                Belum Melampirkan Hasil 2
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" id="pills-profile-tab-icon" data-toggle="pill" href="#finish2" role="tab" aria-controls="order" aria-selected="false">
                <i class="flaticon-check"></i>
                Selesai
              </a>
            </li>


          </ul>
          <div class="tab-content mt-2 mb-3" id="pills-with-icon-tabContent">
            <div class="tab-pane fade show active" id="unconfirmed" role="tabpanel" aria-labelledby="pills-home-tab-icon">

              <form  method="post">
                <div class="card-body">
                  <div class="bd-example">
                    <div class="table-responsive">
                      <table id="multi-filter-select" class="display table table-striped table-hover" cellspacing="0" width="100%">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Pelanggan</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Status</th>
                            <th scope="col">Opsi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $i=1;foreach ($content['order'] as $item): if($item->status!=6){continue;} ?>
                            <tr>
                              <td><?php echo $i; ?></td>
                              <td><?php echo $item->fullname; ?></td>
                              <td><?php echo $item->date_event; ?></td>
                              <td><?php if($item->status==1){echo 'Belum dikonfirmasi';} elseif($item->status==3){echo 'Pesanan Disetujui';}elseif($item->status==4){echo 'Transfer belum verifikasi';}elseif($item->status==5){echo 'Transfer sudah disetujui';}elseif($item->status==6){echo 'PIC sudah dipilih';}
                                elseif($item->status==7){echo 'PIC selesai eksekusi';}elseif($item->status==8){echo 'PIC mengirim hasil dokumentasi';}elseif($item->status==9){echo 'Pelanggan selesai memilih foto';}elseif($item->status==10){echo 'Pembayaran belum diverifikasi';}elseif($item->status==11){echo 'Pembayaran sudah diverifikasi';}elseif($item->status==12)
                                {echo 'PIC sudah menyerahkan hasil editan';}elseif($item->status==13){echo 'Pesanan Dikirim';}elseif($item->status==14){echo 'Pesanan Diterima';}elseif($item->status==15){echo 'Pesanan Selesai';}?></td>
                                <td> <a href="<?php echo base_url('detailOrder/'.$item->id); ?>" class="btn btn-info">Detail</a> </td>

                              </tr>
                              <?php $i++;endforeach; ?>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="tab-pane fade" id="process" role="tabpanel" aria-labelledby="pills-profile-tab-icon">
                  <form  method="post">
                    <div class="card-body">
                      <div class="bd-example">
                        <div class="table-responsive">
                          <table id="multi-filter-select1" class="display table table-striped table-hover" cellspacing="0" width="100%">
                            <thead>
                              <tr>
                                <th scope="col">No</th>
                                <th scope="col">Pelanggan</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Status</th>
                                <th scope="col">Opsi</th>

                              </tr>
                            </thead>
                            <tbody>
                              <?php $i=1;foreach ($content['order'] as $item): if($item->status<6 || $item->status>7 ){continue;} ?>

                                <tr>
                                  <td><?php echo $i; ?></td>
                                  <td><?php echo $item->fullname; ?></td>
                                  <td><?php echo $item->date_event; ?></td>
                                  <td><?php if($item->status==1){echo 'Belum dikonfirmasi';} elseif($item->status==3){echo 'Pesanan Disetujui';}elseif($item->status==4){echo 'Transfer belum verifikasi';}elseif($item->status==5){echo 'Transfer sudah disetujui';}elseif($item->status==6){echo 'PIC sudah dipilih';}
                                    elseif($item->status==7){echo 'PIC selesai eksekusi';}elseif($item->status==8){echo 'PIC mengirim hasil dokumentasi';}elseif($item->status==9){echo 'Pelanggan selesai memilih foto';}elseif($item->status==10){echo 'Pembayaran belum diverifikasi';}elseif($item->status==11){echo 'Pembayaran sudah diverifikasi';}elseif($item->status==12)
                                    {echo 'PIC sudah menyerahkan hasil editan';}elseif($item->status==13){echo 'Pesanan Dikirim';}elseif($item->status==14){echo 'Pesanan Diterima';}elseif($item->status==15){echo 'Pesanan Selesai';}?></td>
                                    <td> <a href="<?php echo base_url('detailOrder/'.$item->id); ?>" class="btn btn-info">Detail</a> </td>
                                  </tr>
                                  <?php $i++;endforeach; ?>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </form>

                    </div>
                    <div class="tab-pane fade" id="finish" role="tabpanel" aria-labelledby="pills-profile-tab-icon">
                      <form  method="post">
                        <div class="card-body">
                          <div class="bd-example">
                            <div class="table-responsive">
                              <table id="multi-filter-select2" class="display table table-striped table-hover" cellspacing="0" width="100%">
                                <thead>
                                  <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Pelanggan</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Opsi</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php $i=1;foreach ($content['order'] as $item): if($item->status<8 || $item->status>12 ){continue;} ?>

                                    <tr>
                                      <td><?php echo $i; ?></td>
                                      <td><?php echo $item->fullname; ?></td>
                                      <td><?php echo $item->date_event; ?></td>
                                      <td><?php if($item->status==1){echo 'Belum dikonfirmasi';} elseif($item->status==3){echo 'Pesanan Disetujui';}elseif($item->status==4){echo 'Transfer belum verifikasi';}elseif($item->status==5){echo 'Transfer sudah disetujui';}elseif($item->status==6){echo 'PIC sudah dipilih';}
                                        elseif($item->status==7){echo 'PIC selesai eksekusi';}elseif($item->status==8){echo 'PIC mengirim hasil dokumentasi';}elseif($item->status==9){echo 'Pelanggan selesai memilih foto';}elseif($item->status==10){echo 'Pembayaran belum diverifikasi';}elseif($item->status==11){echo 'Pembayaran sudah diverifikasi';}elseif($item->status==12)
                                        {echo 'PIC sudah menyerahkan hasil editan';}elseif($item->status==13){echo 'Pesanan Dikirim';}elseif($item->status==14){echo 'Pesanan Diterima';}elseif($item->status==15){echo 'Pesanan Selesai';}?></td>
                                        <td> <a href="<?php echo base_url('detailOrder/'.$item->id); ?>" class="btn btn-info">Detail</a> </td>
                                      </tr>
                                      <?php $i++;endforeach; ?>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </div>
                          </form>
                        </div>

                        <div class="tab-pane fade" id="finish2" role="tabpanel" aria-labelledby="pills-profile-tab-icon">
                          <form  method="post">
                            <div class="card-body">
                              <div class="bd-example">
                                <div class="table-responsive">
                                  <table id="multi-filter-select3" class="display table table-striped table-hover" cellspacing="0" width="100%">
                                    <thead>
                                      <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Pelanggan</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Opsi</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <?php $i=1;foreach ($content['order'] as $item): if($item->status<15 ){continue;} ?>

                                        <tr>
                                          <td><?php echo $i; ?></td>
                                          <td><?php echo $item->fullname; ?></td>
                                          <td><?php echo $item->date_event; ?></td>
                                          <td><?php if($item->status==1){echo 'Belum dikonfirmasi';} elseif($item->status==3){echo 'Pesanan Disetujui';}elseif($item->status==4){echo 'Transfer belum verifikasi';}elseif($item->status==5){echo 'Transfer sudah disetujui';}elseif($item->status==6){echo 'PIC sudah dipilih';}
                                            elseif($item->status==7){echo 'PIC selesai eksekusi';}elseif($item->status==8){echo 'PIC mengirim hasil dokumentasi';}elseif($item->status==9){echo 'Pelanggan selesai memilih foto';}elseif($item->status==10){echo 'Pembayaran belum diverifikasi';}elseif($item->status==11){echo 'Pembayaran sudah diverifikasi';}elseif($item->status==12)
                                            {echo 'PIC sudah menyerahkan hasil editan';}elseif($item->status==13){echo 'Pesanan Dikirim';}elseif($item->status==14){echo 'Pesanan Diterima';}elseif($item->status==15){echo 'Pesanan Selesai';}?></td>
                                            <td> <a href="<?php echo base_url('detailOrder/'.$item->id); ?>" class="btn btn-info">Detail</a> </td>
                                          </tr>
                                          <?php $i++;endforeach; ?>
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
