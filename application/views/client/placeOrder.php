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
        <div class="card-header">
          <div class="card-title">Identitas Pelanggan</div>
        </div>
        <form  method="post">
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
                <input type="date" class="form-control" name="date_event"  value="<?php echo $content['order']->date_event; ?>" required>
              </div>
              <div class="form-group col-2 ">
                <label>Total Layanan</label>
                <input type="text" class="form-control" value="<?php echo 'Rp. '.$content['order']->total; ?>" readonly>
              </div>
              &nbsp;&nbsp;
                &nbsp;&nbsp;
              <div class="form-group col-4 ">
                <div class="row">

                <label>Kode Promo</label>
                <input type="text" class="form-control col-10" name="promo" value="<?php echo $content['order']->promo; ?>" placeholder="masukan kode promo">
                <button type="submit" name="addPromo" value="addPromo" class="btn col-2 btn-success" <?php if($content['order']->promo!=null){echo 'hidden';} ?>>+</button>
                <button type="submit" name="deletePromo" value="deletePromo" class="btn col-2 btn-danger" <?php if($content['order']->promo==null){echo 'hidden';} ?>>x</button>
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

          </div>
        </form>
      </div>
    </div>
  </div>
</div>



<div class="page-inner mt--5">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <div class="card-title">Form Order Layanan</div>
        </div>
        <form  method="post">
          <div class="card-body">
            <div class="row">
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
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="page-inner mt--5">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <div class="card-title">Form Order Layanan</div>
        </div>
        <form  method="post">
          <div class="card-body">
            <div class="bd-example">
              <div class="table-responsive">
                <table id="multi-filter-select" class="display table table-striped table-hover" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Layanan</th>
                      <th>Harga</th>
                      <th>Opsi</th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php $i=1;foreach ($content['detailOrder'] as $item): ?>

                      <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $item->package; ?></td>
                        <td><?php echo 'Rp. '.$item->price; ?></td>
                        <td> <a href="<?php echo base_url('deleteDetailOrder/'.$content['order']->id.'/'.$item->id);?>" class="btn btn-danger">Hapus Layanan</a> </td>
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

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <center>
            <h4> Ganti Foto</h4>
          </center>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <form role="form" enctype="multipart/form-data" method="post">
          <div class="modal-body">
            <div class="form-group">
              <br>
            </center>
            <input type="file" name="fileUpload" class="btn btn-primary">
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" name="upload" value="upload">Upload Foto</button>
          <button type="button" class="btn btn-grey" data-dismiss="modal">Kembali</button>
        </div>
      </form>
    </div>
  </div>
</div>
