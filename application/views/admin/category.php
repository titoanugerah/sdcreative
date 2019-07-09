<div class="panel-header bg-primary-gradient">
  <div class="page-inner py-5">
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
      <div>
        <h2 class="text-white pb-2 fw-bold">Kategori</h2>
      </div>
    </div>
  </div>
</div>
<div class="page-inner mt--5">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <div class="card-title">Rekap Kategori</div>
        </div>
        <div class="card-body">
          <div class="bd-example">
            <div class="table-responsive">
              <table id="multi-filter-select" class="display table table-striped table-hover" cellspacing="0" width="100%">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Kategori</th>
                    <th>Keterangan</th>
                    <th>Jumlah Paket</th>
                    <th>Opsi</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Nama Kategori</th>
                    <th>Keterangan</th>
                    <th>Jumlah Paket</th>
                    <th>Opsi</th>
                  </tr>
                </tfoot>
                <tbody>
                  <?php $i=1;foreach ($content['category'] as $item): ?>

                  <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $item->category ?></td>
                    <td><?php echo $item->info ?></td>
                    <td><?php echo '5'; ?></td>
                    <td> <a href="<?php echo base_url('detailCategory/'.$item->id); ?>" class="btn btn-info"> Detail </a> </td>
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
