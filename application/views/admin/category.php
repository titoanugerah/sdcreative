<div class="panel-header" style="background-image: url(<?php echo base_url('./assets/upload/bg_category.png'); ?>);background-position: center;background-size: cover;height: 250px">
  <div class="page-inner py-5">
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
      <div>
        <h2 class="text-white pb-2 fw-bold">Kategori</h2>
      </div>
      <div class="ml-md-auto py-2 py-md-0">
        <button type="button" class="btn btn-info  btn-round" data-toggle="modal" data-target="#myModal">Tambah Kategori</button>

      </div>
    </div>
  </div>
</div>
<div class="page-inner mt--5">
  <div class="row">
    <?php foreach ($content['category'] as $item): ?>
      <div class="col-md-4">
        <div class="card" >
          <img class="card-img-top" src="<?php echo base_url('./assets/upload/'.$item->image); ?>" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><?php echo $item->category; ?></h5>
            <p class="card-text"><?php echo $item->info ?></p>
            <a href="<?php echo base_url('detailCategory/'.$item->id); ?>" class="btn btn-warning">Detail Kategori</a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>


<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <center>
          <h4> Tambah Kategori</h4>
        </center>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <form  method="post" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="form-group col-6 col-md-12">
            <label>Nama Kategori</label>
            <input type="text" class="form-control" placeholder="Masukan nama kategori" name="category">
          </div>
          <div class="form-group  col-6 col-md-12">
            <br>
          </center>
          <input type="file" name="fileUpload" class="btn btn-warning">
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-warning" name="createCategory" value="createCategory">Buat Kategori</button>
        <button type="button" class="btn btn-grey" data-dismiss="modal">Kembali</button>
      </div>
    </form>
  </div>
</div>
</div>
