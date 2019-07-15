<div class="panel-header bg-primary-gradient">
  <div class="page-inner py-5">
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
      <div>
        <h2 class="text-white pb-2 fw-bold">Order Baru</h2>
        <h5 class="text-white op-7 mb-2">Silahkan pilih dari layanan berikut ini</h5>
      </div>
    </div>
  </div>
</div>
<div class="page-inner mt--5">
  <div class="row mt--2">

      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Silahkan Pilih Layanan Terbaik Kami</h4>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-5 col-md-2">
              <div class="nav flex-column nav-pills nav-primary nav-pills-no-bd" id="v-pills-tab-without-border" role="tablist" aria-orientation="vertical">
                <?php $i = 1; foreach ($content['category'] as $item): ?>
                  <a class="nav-link <?php if($i==1){echo 'active';} ?>"  data-toggle="pill" href="#<?php echo $item->id;  ?>" role="tab" aria-controls="<?php echo $item->id;  ?>" aria-selected="true"><?php echo $item->category; ?></a>
                <?php $i++;endforeach; ?>
              </div>
            </div>
            <div class="col-7 col-md-10">
              <div class="tab-content" id="v-pills-without-border-tabContent">
                <?php $i=1; foreach ($content['category'] as $item1): ?>
                <div class="tab-pane fade show <?php if($i==1){echo 'active';} ?>" id="<?php echo $item1->id; ?>" role="tabpanel" aria-labelledby="<?php echo $item1->id; ?>">
                  <div class="row">
                  <?php foreach ($content['package'] as $item): if($item->id_category!=$item1->id){continue;}?>
                    <div class="col-md-4">
                      <div class="card" >
                        <img class="card-img-top" src="<?php echo base_url('./assets/upload/'.$item->image); ?>" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title"><?php echo $item->package; ?></h5>
                          <p><?php echo $item->description; ?></p>
                          <h5 style="color:green;"><b><?php echo 'Rp. '.$item->price; ?></b></h5>
                          <button type="button" class="btn btn-info" data-toggle="modal" data-target="#detail<?php echo $item->id?>">Detail Paket</button>
                        </div>
                      </div>
                    </div>
                  <?php endforeach; ?>
                </div>

                </div>
              <?php $i++;endforeach; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
