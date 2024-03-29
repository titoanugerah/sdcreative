<div class="panel-header bg-warning-gradient">
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
            <div class="nav flex-column nav-pills nav-warning nav-pills-no-bd" id="v-pills-tab-without-border" role="tablist" aria-orientation="vertical">
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
                              <h5 style="color:green;"><b><?php echo 'Rp. '.number_format($item->price,2,',','.'); ?></b></h5>
                              <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#detail<?php echo $item->id?>">Detail Paket</button>
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


    <?php foreach ($content['package'] as $item): ?>
      <div class="modal fade" id="detail<?php echo $item->id;?>" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header"style="background-image: url(<?php echo base_url('./assets/upload/'.$item->image); ?>);background-position: center;background-size: cover; height: 100px;">
              <center>
                <h4 style="color:white;"> <?php echo $item->package; ?></h4>
              </center>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="form-group col-6 col-md-12">
                  <center>
                    <p><?php echo $item->description; ?></p>
                  </center>
                </div>
              </div>
              <div class="form-group col-6 col-md-6">
                <p style="color:green;"><?php echo 'Rp. '.$item->price; ?></p>
              </div>
            </div>
            <div class="modal-footer">
              <a href="<?php echo base_url('createOrder/'.$item->id) ?>" class="btn btn-warning">Pilih Paket</a>
              <button type="button" class="btn btn-grey" data-dismiss="modal">Kembali</button>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
