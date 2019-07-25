<div class="panel-header bg-warning-gradient">
  <div class="page-inner py-5">
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
      <div>
        <h2 class="text-white pb-2 fw-bold">Riwayat Pemakaian Layanan</h2>
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
              <a class="nav-link active" id="pills-home-tab-icon" data-toggle="pill" href="#process" role="tab" aria-controls="process" aria-selected="true">
                <i class="flaticon-stopwatch"></i>
                Order Diproses
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-profile-tab-icon" data-toggle="pill" href="#rejected" role="tab" aria-controls="rejected" aria-selected="false">
                <i class="flaticon-close"></i>
                Order Ditolak
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-profile-tab-icon" data-toggle="pill" href="#success" role="tab" aria-controls="success" aria-selected="false">
                <i class="flaticon-interface-1"></i>
                Order Selesai
              </a>
            </li>
          </ul>
          <div class="tab-content mt-2 mb-3" id="pills-with-icon-tabContent">
            <div class="tab-pane fade show active" id="process" role="tabpanel" aria-labelledby="process">

              <br><br>
              <div class="row">
                <?php foreach ($content['order'] as $item): if($item->status==0 || $item->status>14){continue;} ?>
                  <div class="col-md-4">
                    <div class="card" >
                      <img class="card-img-top" src="<?php echo base_url('./assets/upload/'.$item->image); ?>" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title"><?php echo $item->package; ?></h5>
                        <p class="card-text"><?php echo $item->date_event ?></p>
                        <a href="<?php echo base_url('detailOrder/'.$item->id); ?>" class="btn btn-warning">Detail Order</a>
                      </div>
                    </div>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
            <div class="tab-pane fade" id="rejected" role="tabpanel" aria-labelledby="rejected">
              <br><br>
              <div class="row">
                <?php foreach ($content['order'] as $item): if($item->status!=0){continue;} ?>
                  <div class="col-md-4">
                    <div class="card" >
                      <img class="card-img-top" src="<?php echo base_url('./assets/upload/'.$item->image); ?>" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title"><?php echo $item->package; ?></h5>
                        <p class="card-text"><?php echo $item->date_event ?></p>
                        <a href="<?php echo base_url('detailOrder/'.$item->id); ?>" class="btn btn-warning">Detail Order</a>
                      </div>
                    </div>
                  </div>
                <?php endforeach; ?>
              </div>

            </div>
            <div class="tab-pane fade" id="success" role="tabpanel" aria-labelledby="success">
              <br><br>
              <div class="row">
                <?php foreach ($content['order'] as $item): if($item->status!=8||$item->status!=12){continue;} ?>
                  <div class="col-md-4">
                    <div class="card" >
                      <img class="card-img-top" src="<?php echo base_url('./assets/upload/'.$item->image); ?>" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title"><?php echo $item->package; ?></h5>
                        <p class="card-text"><?php echo $item->date_event ?></p>
                        <a href="<?php echo base_url('detailOrder/'.$item->id); ?>" class="btn btn-warning">Detail Order</a>
                      </div>
                    </div>
                  </div>
                <?php endforeach; ?>
              </div>

            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
