<div class="panel-header bg-warning-gradient">
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
          <ul class="nav nav-pills nav-warning  nav-pills-no-bd nav-pills-icons justify-content-center" id="pills-tab-with-icon" role="tablist">
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

            <li class="nav-item">
              <a class="nav-link" id="pills-profile-tab-icon" data-toggle="pill" href="#option" role="tab" aria-controls="order" aria-selected="false">
                <i class="flaticon-alarm"></i>
                Opsi
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
                  <div class="row" <?php if($content['order']->status!=2){echo 'hidden';} ?>>
                    <div class="form-group form-inline">
                      <label for="inlineinput" class="col-form-label">Layanan </label>
                      <div class="col-md-8">
                        <select class="form-control" id="exampleFormControlSelect1" name="id_package">
                          <?php foreach ($content['package'] as $item): ?>
                            <option value="<?php echo $item->id; ?>"><?php echo $item->category.' - '.$item->package; ?></option>
                          <?php endforeach; ?>
                        </select>
                      </div>
                    </div>


                    <div class="form-group col-4">
                      <button class="btn btn-success" type="submit" name="addOrder" value="addOrder">Tambah Order</button>
                    </div>

                  </div>
                </form>
                <div class="bd-example">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Nama Layanan</th>
                          <th scope="col">Harga</th>
                          <th scope="col" <?php if($content['order']->status!=2){echo 'hidden';} ?>>Opsi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i=1;foreach ($content['detailOrder'] as $item): ?>

                          <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $item->package; ?></td>
                            <td><?php echo 'Rp. '.$item->price; ?></td>
                            <td <?php if($content['order']->status!=2){echo 'hidden';} ?>> <a href="<?php echo base_url('deleteDetailOrder/'.$content['order']->id.'/'.$item->id); ?>" class="btn btn-danger">Hapus</a> </td>
                          </tr>
                          <?php $i++;endforeach; ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="card-body" <?php if($content['order']->status>0){echo 'hidden';} ?>>
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
                          <div class="timeline-badge success"><i class="flaticon-<?php if($content['order']->status==0){echo 'danger';} else {echo 'alarm';} ?>"></i></div>
                          <div class="timeline-panel">
                            <div class="timeline-heading">
                              <h4 class="timeline-title"><?php echo $content['order']->admin.' (Admin)'; ?></h4>
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
                              <img src="<?php echo base_url('./assets/upload/'.$content['order']->payment_1); ?>" alt="" class="col-12">
                            </div>
                          </div>
                        </li>

                        <li class="timeline-inverted" <?php if($content['order']->status<=4){echo 'hidden';} ?>>
                          <div class="timeline-badge success"><i class="flaticon-alarm"></i></div>
                          <div class="timeline-panel">
                            <div class="timeline-heading">
                              <h4 class="timeline-title"><?php echo $content['order']->admin.' (Admin)'; ?></h4>
                            </div>
                            <div class="timeline-body">
                              <p>Berhasil melakukan verifikasi pembayaran <?php echo $content['order']->fullname ?></p>
                            </div>
                          </div>
                        </li>

                        <li class="timeline-inverted" <?php if($content['order']->status<=5){echo 'hidden';} ?>>
                          <div class="timeline-badge success"><i class="flaticon-alarm"></i></div>
                          <div class="timeline-panel">
                            <div class="timeline-heading">
                              <h4 class="timeline-title"><?php echo $content['order']->admin.' (Admin)'; ?></h4>
                            </div>
                            <div class="timeline-body">
                              <p><?php echo $content['order']->admin.' (Admin)' ?> selaku admin memilih petugas untuk project ini antara lain </p>
                              <div class="row">

                                <?php for($i=1; $i<=$content['order']->pic_count; $i++){ ?>
                                  <div class="col-md-4">
                                    <div class="card" >
                                      <img class="card-img-top" src="<?php echo base_url('./assets/upload/'.$content['order']->dp_pic1); ?>" alt="Card image cap">
                                      <div class="card-body">
                                        <h5 class="card-title"><?php echo $content['order']->fullname_pic1; ?></h5>
                                      </div>
                                    </div>
                                  </div>
                                <?php } ?>
                              </div>
                            </div>
                          </div>
                        </li>

                        <li class="timeline-inverted" <?php if($content['order']->status<=6){echo 'hidden';} ?>>
                          <div class="timeline-badge info"><i class="flaticon-stopwatch"></i></div>

                          <div class="timeline-panel">
                            <div class="timeline-heading">
                              <h4 class="timeline-title">PIC</h4>
                              <p><small class="text-muted"><i class="flaticon-message"></i> <?php echo $content['order']->date_event; ?></small></p>
                            </div>
                            <div class="timeline-body">
                              <p>Melakukan eksekusi lapangan pada tempat yang ditentukan (<?php echo $content['order']->address_event; ?>)</p>
                            </div>
                          </div>
                        </li>

                        <li class="timeline-inverted" <?php if($content['order']->status<=7){echo 'hidden';} ?>>
                          <div class="timeline-badge success"><i class="flaticon-alarm"></i></div>

                          <div class="timeline-panel">
                            <div class="timeline-heading">
                              <h4 class="timeline-title"><?php echo $content['order']->fullname_pic1; ?></h4></div>
                            <div class="timeline-body">
                              <p>Mengirimkan hasil pengambilan gambar yang diunggah pada link (<?php echo $content['order']->link_1; ?>)</p>
                              <a href="<?php echo ($content['order']->link_1); ?>" class="btn btn-success"> Kunjungi Link</a>
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
                          <div class="timeline-badge success"><i class="flaticon-alarm"></i></div>

                          <div class="timeline-panel">
                            <div class="timeline-heading">
                              <h4 class="timeline-title"><?php echo $content['order']->admin.' (Admin)'; ?></h4>
                            </div>
                            <div class="timeline-body">
                              <p>Berhasil melakukan verifikasi pembayaran <?php echo $content['order']->fullname ?></p>
                            </div>
                          </div>
                        </li>

                        <li class="timeline-inverted" <?php if($content['order']->status<=11){echo 'hidden';} ?>>
                          <div class="timeline-badge success"><i class="flaticon-alarm"></i></div>

                          <div class="timeline-panel">
                            <div class="timeline-heading">
                              <h4 class="timeline-title">PIC</h4>
                            </div>
                            <div class="timeline-body">
                              <p>Mengirimkan hasil gambar yang sudah diedit pada link (<?php echo $content['order']->link_2; ?>)</p>
                              <a href="<?php echo ($content['order']->link_2); ?>" class="btn btn-success"> Kunjungi Link</a>

                            </div>
                          </div>
                        </li>

                        <li class="timeline-inverted" <?php if(($content['order']->need_hardfile==1 & $content['order']->status<13) || ($content['order']->need_hardfile==0)){echo 'hidden';} ?>>
                          <div class="timeline-badge success"><i class="flaticon-alarm"></i></div>
                          <div class="timeline-panel">
                            <div class="timeline-heading">
                              <h4 class="timeline-title"><?php echo $content['order']->admin.' (Admin)'; ?></h4>
                            </div>
                            <div class="timeline-body">
                              <p>Berhasil mengirimkan hasil hardfile gambar ke lokasi yang ditentukan ( <?php echo $content['order']->address_sent; ?>) dengan nomor resi <?php echo $content['order']->awb; ?> </p>
                            </div>
                          </div>
                        </li>

                        <li <?php if(($content['order']->need_hardfile==1 & $content['order']->status<14) || ($content['order']->need_hardfile==0)){echo 'hidden';} ?>>
                          <div class="timeline-badge"><i class="flaticon-message"></i></div>
                          <div class="timeline-panel">
                            <div class="timeline-heading">
                              <h4 class="timeline-title"><?php echo $content['order']->fullname; ?></h4>
                              <p><small class="text-muted"><i class="flaticon-message"></i> <?php echo $content['order']->date_recieved; ?></small></p>

                            </div>
                            <div class="timeline-body">
                              <p> Barang diterima oleh <?php echo $content['order']->fullname; ?> </p>
                            </div>
                          </div>
                        </li>

                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="option" role="tabpanel" aria-labelledby="pills-profile-tab-icon">
                <div class="card-body">
                  <form method="post">
                    <div class="" <?php if($content['order']->status!=2){echo 'hidden';} ?>>
                      <p>Untuk menyetujui silahkan klik button dibawah ini</p>
                      <button type="submit" name="acceptOrder" value="acceptOrder" class="btn btn-success">Setujui</button>
                      <button type="submit" name="declineOrder" value="declineOrder" class="btn btn-danger">Tolak</button>

                    </div>

                    <div class="row" <?php if($content['order']->status!=4){echo 'hidden';} ?>>
                      <div class="card card-info card-annoucement card-round col-6" >
                        <div class="card-body text-center">
                          <div class="card-opening">Konfirmasi pembayaran DP</div>
                          <div class="card-desc">
                            Silahkan lakukan proses verifikasi gambar bukti pembayaran, dengan nominal yang ditulis oleh pelanggan, apabila valid silahkan klik tombol dibawah ini

                          </div>
                        </div>
                      </div>
                      <img src="<?php echo base_url('./assets/upload/'.$content['order']->payment_1); ?>" class="col-6" width="300px">
                      <button type="submit" name="verifyPayment1" value="verifyPayment1" class="btn btn-success">Konfirmasi Pembayaran</button>
                    </div>


                    <div class="" <?php if($content['order']->status!=5){echo 'hidden';} ?>>
                    <?php for($i=1;$i<=$content['order']->pic_count;$i++){ ?>
                        <div class="form-group form-inline">
                          <label for="inlineinput" class="col-form-label">Pilih PIC <?php echo $i; ?> </label>
                          <div class="col-md-8">
                            <select class="form-control" id="exampleFormControlSelect1" name="pic_<?php echo $i;?>">
                              <?php foreach ($content['account'] as $item): if($item->role!='staff'){continue;} ?>
                                <option value="<?php echo $item->id; ?>"><?php echo $item->fullname; ?></option>
                              <?php endforeach; ?>
                            </select>
                          </div>
                        </div>
                    <?php } ?>
                    <button type="submit" name="setPIC" value="setPIC" class="btn btn-success" <?php if($content['order']->status!=5){echo 'hidden';} ?>>Pilih PIC</button>
                  </div>

                  <div class="row" <?php if($content['order']->status!=10){echo 'hidden';} ?>>
                    <div class="card card-info card-annoucement card-round col-6" >
                      <div class="card-body text-center">
                        <div class="card-opening">Konfirmasi pembayaran Penuh</div>
                        <div class="card-desc">
                          Silahkan lakukan proses verifikasi gambar bukti pembayaran, dengan nominal yang ditulis oleh pelanggan, apabila valid silahkan klik tombol dibawah ini

                        </div>
                      </div>
                    </div>
                    <img src="<?php echo base_url('./assets/upload/'.$content['order']->payment_2); ?>" class="col-6" width="300px">
                    <button type="submit" name="verifyPayment2" value="verifyPayment2" class="btn btn-success">Konfirmasi Pembayaran</button>
                  </div>

                  </form>

                  <form method="post">
                  <div class="row" <?php if($content['order']->status!=12 && $content['order']->need_hardfile!=1){echo 'hidden';} ?>>
                    <div class="card card-info card-annoucement card-round col-12" >
                      <div class="card-body text-center">
                        <div class="card-opening">Lakukan pencetakan dan pengiriman foto</div>
                        <div class="card-desc">
                          Silahkan cetak hasil dokumentasi dari PIC yang ada pada <a href="<?php echo $content['order']->link_2; ?>">link</a>, setelah itu silahkan kirim hasil cetakan menuju alamat yang ditentukan yaitu <?php echo $content['order']->address_sent; ?>, setelah itu tuliskan nomor resinya pada kolom dibawah ini
                        </div>
                      </div>
                    </div>
                    <input type="text" name="awb" class="form-control col-7" placeholder="Masukan nomor resi">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" name="delivery_fee" class="form-control col-3" placeholder="Masukan ongkir">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <button type="submit" name="confirmDelivery" value="confirmDelivery" class="btn btn-success">Simpan</button>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </div>
                </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
