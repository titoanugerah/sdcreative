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
  <div class="page-inner mt--5">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <ul class="nav nav-pills nav-primary  nav-pills-no-bd nav-pills-icons justify-content-center" id="pills-tab-with-icon" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="pills-home-tab-icon" data-toggle="pill" href="#unprocess" role="tab" aria-controls="information" aria-selected="true">
                  <i class="flaticon-location"></i>
                  Belum Diproses
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab-icon" data-toggle="pill" href="#unverified" role="tab" aria-controls="order" aria-selected="false">
                  <i class="flaticon-list"></i>
                  Belum Diverifikasi
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab-icon" data-toggle="pill" href="#pic" role="tab" aria-controls="order" aria-selected="false">
                  <i class="flaticon-medical"></i>
                  Tahap Pemilihan PIC
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab-icon" data-toggle="pill" href="#process" role="tab" aria-controls="order" aria-selected="false">
                  <i class="flaticon-list"></i>
                  Diproses
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab-icon" data-toggle="pill" href="#unsend" role="tab" aria-controls="order" aria-selected="false">
                  <i class="flaticon-list"></i>
                  Belum Dikirim
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab-icon" data-toggle="pill" href="#finish" role="tab" aria-controls="order" aria-selected="false">
                  <i class="flaticon-list"></i>
                  Selesai
                </a>
              </li>

            </ul>
            <div class="tab-content mt-2 mb-3" id="pills-with-icon-tabContent">
              <div class="tab-pane fade show active" id="information" role="tabpanel" aria-labelledby="pills-home-tab-icon">

                <div class="card-body">

                  <div class="bd-example">
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Layanan</th>
                            <th scope="col">Harga</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $i=1;foreach ($content['detailOrder'] as $item): ?>

                            <tr>
                              <td><?php echo $i; ?></td>
                              <td><?php echo $item->package; ?></td>
                              <td><?php echo 'Rp. '.$item->price; ?></td>
                            </tr>
                            <?php $i++;endforeach; ?>
                          </tbody>
                        </table>
                      </div>
                    </div>


                </div>

                </div>
              </div>
              <div class="tab-pane fade" id="order" role="tabpanel" aria-labelledby="pills-profile-tab-icon">
                  <form  method="post">
                    <div class="card-body">
                      <div class="bd-example">
                        <div class="table-responsive">
                          <table class="table table-hover">
                            <thead>
                              <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Layanan</th>
                                <th scope="col">Harga</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php $i=1;foreach ($content['detailOrder'] as $item): ?>

                                <tr>
                                  <td><?php echo $i; ?></td>
                                  <td><?php echo $item->package; ?></td>
                                  <td><?php echo 'Rp. '.$item->price; ?></td>
                                </tr>
                                <?php $i++;endforeach; ?>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </form>
                    <div class="card-body" <?php if($content['status']<5){echo 'hidden';} ?>>
                      <center>
                        <h3>Penanggung Jawab</h3>
                      </center>
                      <div class="row">

                      <?php for($i=1; $i<$content['order']->pic_count; $i++){ ?>
                        <div class="col-md-4">
                          <div class="card" >
                            <img class="card-img-top" src="<?php echo base_url('./assets/upload/'.$content['order']->dp_pic.$i); ?>" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title"><?php echo $content['order']->fullname_pic.$i ?></h5>
                            </div>
                          </div>
                        </div>
                      <?php } ?>
                    </div>
                    </div>

              </div>
              <div class="tab-pane fade" id="status" role="tabpanel" aria-labelledby="pills-profile-tab-icon">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-12">

                      <ul class="timeline">
                        <li>
                          <div class="timeline-badge"><i class="flaticon-message"></i></div>
                          <div class="timeline-panel">
                            <div class="timeline-heading">
                              <h4 class="timeline-title"><?php echo $content['order']->fullname; ?></h4>
                              <p><small class="text-muted"><i class="flaticon-message"></i> <?php echo $content['order']->date_order; ?></small></p>
                            </div>
                            <div class="timeline-body">
                              <p><?php echo 'Permintaan layanan dari '.$content['order']->fullname.' berhasil masuk kedalam database'; ?></p>
                            </div>
                          </div>
                        </li>
                        <li class="timeline-inverted" <?php if($content['order']->status==1 || $content['order']->status==2){echo 'hidden';} ?>>
                          <div class="timeline-badge warning"><i class="flaticon-<?php if($content['order']->status==0){echo 'danger';} else {echo 'alarm';} ?>"></i></div>
                          <div class="timeline-panel">
                            <div class="timeline-heading">
                              <h4 class="timeline-title"><?php echo $content['order']->admin; ?></h4>
                              <p><small class="text-muted"><i class="flaticon-message"></i> <?php echo $content['order']->date_respond; ?></small></p>
                            </div>
                            <div class="timeline-body">
                              <p>Berhasil merespon permintaan pelanggan <?php echo $content['order']->fullname; ?> dan memutuskan untuk <?php if($content['order']->status==0){echo 'menolak permintaan dikarenakan padatnya jadwal';} else {echo 'menerima permintaan pelanggan';} ?></p>
                            </div>
                          </div>
                        </li>

                        <li <?php if($content['order']->status<=3){echo 'hidden';} ?>>
                          <div class="timeline-badge"><i class="flaticon-message"></i></div>
                          <div class="timeline-panel">
                            <div class="timeline-heading">
                              <h4 class="timeline-title"><?php echo $content['order']->fullname; ?></h4>
                              <p><small class="text-muted"><i class="flaticon-message"></i> <?php echo $content['order']->date_payment_dp; ?></small></p>
                            </div>
                            <div class="timeline-body">
                              <p><?php echo $content['order']->fullname.' berhasil melakukan pembayaran dengan jumlah Rp. '.$content['order']->payment_amount_1; ?></p>
                              <img src="<?php echo base_url('./assets/upload/'.$content['order']->payment_1); ?>" alt="">
                            </div>
                          </div>
                        </li>

                        <li class="timeline-inverted" <?php if($content['order']->status<=4){echo 'hidden';} ?>>
                          <div class="timeline-panel">
                            <div class="timeline-heading">
                              <h4 class="timeline-title"><?php echo $content['order']->admin; ?></h4>
                            </div>
                            <div class="timeline-body">
                              <p>Berhasil melakukan verifikasi pembayaran <?php echo $content['order']->fullname ?></p>
                            </div>
                          </div>
                        </li>

                        <li class="timeline-inverted" <?php if($content['order']->status<=5){echo 'hidden';} ?>>
                          <div class="timeline-panel">
                            <div class="timeline-heading">
                              <h4 class="timeline-title"><?php echo $content['order']->admin; ?></h4>
                            </div>
                            <div class="timeline-body">
                              <p><?php echo $content['order']->admin ?> selaku admin memilih petugas untuk project ini antara lain </p>
                              <div class="row">

                              <?php for($i=1; $i<=$content['order']->pic_count; $i++){ ?>
                                <div class="col-md-4">
                                  <div class="card" >
                                    <img class="card-img-top" src="<?php echo base_url('./assets/upload/'.$content['order']->dp_pic.$i); ?>" alt="Card image cap">
                                    <div class="card-body">
                                      <h5 class="card-title"><?php echo $content['order']->fullname_pic.$i; ?></h5>
                                    </div>
                                  </div>
                                </div>
                              <?php } ?>
                              </div>
                            </div>
                          </div>
                        </li>

                        <li class="timeline-inverted" <?php if($content['order']->status<=6){echo 'hidden';} ?>>
                          <div class="timeline-panel">
                            <div class="timeline-heading">
                              <h4 class="timeline-title"><?php for($i=1; $i<$content['order']->pic_count; $i++){echo $content['order']->fullname_pic.$i;} ?></h4>
                              <p><small class="text-muted"><i class="flaticon-message"></i> <?php echo $content['order']->date_event; ?></small></p>
                            </div>
                            <div class="timeline-body">
                              <p>Melakukan eksekusi lapangan pada tempat yang ditentukan (<?php echo $content['order']->address_event; ?>)</p>
                            </div>
                          </div>
                        </li>

                        <li class="timeline-inverted" <?php if($content['order']->status<=7){echo 'hidden';} ?>>
                          <div class="timeline-panel">
                            <div class="timeline-heading">
                              <h4 class="timeline-title"><?php for($i=1; $i<$content['order']->pic_count; $i++){echo $content['order']->fullname_pic.$i;} ?></h4>
                            </div>
                            <div class="timeline-body">
                              <p>Mengirimkan hasil pengambilan gambar yang diunggah pada link (<?php echo $content['order']->link_1; ?>)</p>
                            </div>
                          </div>
                        </li>

                        <li <?php if($content['order']->status<=8){echo 'hidden';} ?>>
                          <div class="timeline-badge"><i class="flaticon-message"></i></div>
                          <div class="timeline-panel">
                            <div class="timeline-heading">
                              <h4 class="timeline-title"><?php echo $content['order']->fullname; ?></h4>
                              <p><small class="text-muted"><i class="flaticon-message"></i> <?php echo $content['order']->date_payment_full; ?></small></p>
                            </div>
                            <div class="timeline-body">
                              <p><?php echo $content['order']->fullname.' memilih foto yang akan diedit'; ?></p>
                            </div>
                          </div>
                        </li>

                        <li <?php if($content['order']->status<=9){echo 'hidden';} ?>>
                          <div class="timeline-badge"><i class="flaticon-message"></i></div>
                          <div class="timeline-panel">
                            <div class="timeline-heading">
                              <h4 class="timeline-title"><?php echo $content['order']->fullname; ?></h4>
                              <p><small class="text-muted"><i class="flaticon-message"></i> <?php echo $content['order']->date_payment_full; ?></small></p>
                            </div>
                            <div class="timeline-body">
                              <p><?php echo $content['order']->fullname.' berhasil melakukan pembayaran penuh dengan jumlah Rp. '.$content['order']->payment_amount_1; ?></p>
                              <img src="<?php echo base_url('./assets/upload/'.$content['order']->payment_2); ?>" alt="">
                            </div>
                          </div>
                        </li>

                        <li class="timeline-inverted" <?php if($content['order']->status<=10){echo 'hidden';} ?>>
                          <div class="timeline-panel">
                            <div class="timeline-heading">
                              <h4 class="timeline-title"><?php echo $content['order']->admin; ?></h4>
                            </div>
                            <div class="timeline-body">
                              <p>Berhasil melakukan verifikasi pembayaran <?php echo $content['order']->fullname ?></p>
                            </div>
                          </div>
                        </li>

                        <li class="timeline-inverted" <?php if($content['order']->status<=11){echo 'hidden';} ?>>
                          <div class="timeline-panel">
                            <div class="timeline-heading">
                              <h4 class="timeline-title"><?php for($i=1; $i<$content['order']->pic_count; $i++){echo $content['order']->fullname_pic.$i;} ?></h4>
                            </div>
                            <div class="timeline-body">
                              <p>Mengirimkan hasil gambar yang sudah diedit pada link (<?php echo $content['order']->link_1; ?>)</p>
                            </div>
                          </div>
                        </li>

                        <li class="timeline-inverted" <?php if($content['order']->status<=12){echo 'hidden';} ?>>
                          <div class="timeline-panel">
                            <div class="timeline-heading">
                              <h4 class="timeline-title"><?php for($i=1; $i<$content['order']->pic_count; $i++){echo $content['order']->fullname_pic.$i;} ?></h4>
                            </div>
                            <div class="timeline-body">
                              <p>Mengirimkan hasil gambar yang sudah diedit pada link (<?php echo $content['order']->link_2; ?>)</p>
                            </div>
                          </div>
                        </li>

                        <li class="timeline-inverted" <?php if($content['order']->status<=10){echo 'hidden';} ?>>
                          <div class="timeline-panel">
                            <div class="timeline-heading">
                              <h4 class="timeline-title"><?php echo $content['order']->admin; ?></h4>
                            </div>
                            <div class="timeline-body">
                              <p>Berhasil mengirimkan hasil hardfile gambar ke lokasi yang ditentukan ( <?php echo $content['order']->address_sent; ?>) dengan nomor resi </p>
                            </div>
                          </div>
                        </li>

                      </ul>
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
