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
                <a class="nav-link active" id="pills-home-tab-icon" data-toggle="pill" href="#information" role="tab" aria-controls="information" aria-selected="true">
                  <i class="flaticon-location"></i>
                  Informasi Umum
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab-icon" data-toggle="pill" href="#order" role="tab" aria-controls="order" aria-selected="false">
                  <i class="flaticon-list"></i>
                  Detail Layanan
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab-icon" data-toggle="pill" href="#status" role="tab" aria-controls="order" aria-selected="false">
                  <i class="flaticon-medical"></i>
                  Status Layanan
                </a>
              </li>
            </ul>
            <div class="tab-content mt-2 mb-3" id="pills-with-icon-tabContent">
              <div class="tab-pane fade show active" id="information" role="tabpanel" aria-labelledby="pills-home-tab-icon">

                <div class="card-body">
                  <div class="row">
                    <div class="form-group col-6">
                      <label>Nama Lengkap Akun</label>
                      <div class="input-group">
                        <input type="text" class="form-control" aria-describedby="basic-addon1"  value="<?php echo $this->session->userdata['fullname']; ?>" readonly>
                      </div>
                    </div>

                    <div class="form-group col-6 ">
                      <label>Nomor HP</label>
                      <input type="text" class="form-control" placeholder="Masukan nomor HP anda" name="phone_number" value="<?php echo $this->session->userdata['phone_number']; ?>" readonly>
                    </div>

                    <div class="form-group">
                      <label>Pilih Hasil Layanan</label>
                      <div class="selectgroup w-100" required>
                        <label class="selectgroup-item">
                          <input type="radio" name="need_hardfile" value="0" class="selectgroup-input" <?php if($content['order']->need_hardfile==0 && $content['order']->need_hardfile!=null){echo 'checked';} ?>>
                          <span class="selectgroup-button">Hanya Softfile</span>
                        </label>
                        <label class="selectgroup-item">
                          <input type="radio" name="need_hardfile" value="1" class="selectgroup-input" <?php if($content['order']->need_hardfile==1){echo 'checked';} ?>>
                          <span class="selectgroup-button">Softfile dan Hardfile</span>
                        </label>
                      </div>
                    </div>

                    <div class="form-group col-6 ">
                      <label>Tanggal Pelaksanaan</label>
                      <input type="date" class="form-control" name="date_event"  value="<?php echo $content['order']->date_event; ?>" readonly>
                    </div>
                  </div>
                  <div class="row">

                    <div class="form-group col-3 ">
                      <label>Total Layanan</label>
                      <input type="text" class="form-control" value="<?php echo 'Rp. '.$content['order']->total; ?>" readonly>
                    </div>

                    &nbsp;&nbsp;
                    &nbsp;&nbsp;

                    <div class="form-group col-3 ">
                      <div class="row">
                        <label>Kode Promo</label>
                        <input type="text" class="form-control" name="promo" value="<?php if($content['order']->promo!=''|$content['order']->promo!=null){echo $content['order']->promo;} else{echo 'Tidak menggunakan promo';} ?>" readonly>
                      </div>
                    </div>
                    &nbsp;&nbsp;
                    &nbsp;&nbsp;

                    <div class="form-group col-2 ">
                      <label>Diskon</label>
                      <input type="text" class="form-control" value="<?php echo 'Rp. '.$content['order']->discount; ?>" readonly>
                    </div>

                    <div class="form-group col-3 ">
                      <label>Sub Total</label>
                      <input type="text" class="form-control" value="<?php echo 'Rp. '.$content['order']->subtotal; ?>" readonly>
                    </div>
                  </div>

                  <div class="row">
                  <div class="form-group col-<?php if($content['order']->need_hardfile==0){echo '12';} else{echo '6';}?>">
                    <label>Alamat Event </label>
                    <textarea class="form-control" name="address_event" rows="2" placeholder="masukan alamat event anda disini" readonly><?php echo $content['order']->address_event; ?></textarea>
                  </div>

                  <div class="form-group col-6" <?php if($content['order']->need_hardfile==0){echo 'hidden';} ?>>
                    <label>Alamat dikirim </label>
                    <textarea class="form-control" name="address_sent" rows="2" placeholder="masukan alamat pengiriman cetakan foto" readonly><?php echo $content['order']->address_sent; ?></textarea>
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


                        <li class="timeline-inverted">
                          <div class="timeline-badge success"><i class="flaticon-credit-card-1"></i></div>
                          <div class="timeline-panel">
                            <div class="timeline-heading">
                              <h4 class="timeline-title">Mussum ipsum cacilds</h4>
                            </div>
                            <div class="timeline-body">
                              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
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
