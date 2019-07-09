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
