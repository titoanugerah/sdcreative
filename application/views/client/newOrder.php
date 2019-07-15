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
            <div class="col-5 col-md-4">
              <div class="nav flex-column nav-pills nav-primary nav-pills-no-bd" id="v-pills-tab-without-border" role="tablist" aria-orientation="vertical">
                <?php $i = 1; foreach ($content['category'] as $item): ?>
                  <a class="nav-link <?php if($i==1){echo 'active';} ?>"  data-toggle="pill" href="#<?php echo $item->id;  ?>" role="tab" aria-controls="<?php echo $item->id;  ?>" aria-selected="true"><?php echo $item->category; ?></a>
                <?php $i++;endforeach; ?>
              </div>
            </div>
            <div class="col-7 col-md-8">
              <div class="tab-content" id="v-pills-without-border-tabContent">
                <?php foreach ($content['package'] as $item): ?>
                <div class="tab-pane fade show active" id="<?php echo $item->id; ?>" role="tabpanel" aria-labelledby="<?php echo $item->id; ?>">
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                  <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                </div>
              <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
