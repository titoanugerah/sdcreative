<div class="page-inner">
  <!-- Card -->
  <h4 class="page-title">Card</h4>
  <div class="row">
    <div class="col-sm-6 col-md-3">
      <div class="card card-stats card-primary card-round">
        <div class="card-body">
          <div class="row">
            <div class="col-5">
              <div class="icon-big text-center">
                <i class="flaticon-users"></i>
              </div>
            </div>
            <div class="col-7 col-stats">
              <div class="numbers">
                <p class="card-category">Client</p>
                <h4 class="card-title"><?php echo $content['account']->user; ?></h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-3">
      <div class="card card-stats card-info card-round">
        <div class="card-body">
          <div class="row">
            <div class="col-5">
              <div class="icon-big text-center">
                <i class="flaticon-interface-6"></i>
              </div>
            </div>
            <div class="col-7 col-stats">
              <div class="numbers">
                <p class="card-category">Finished Project</p>
                <h4 class="card-title"><?php $i=0; foreach ($content['totalProject'] as $item) {
                  if($item->status==15){ echo $item->totalProject;}
                } ?></h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-3">
      <div class="card card-stats card-success card-round">
        <div class="card-body ">
          <div class="row">
            <div class="col-5">
              <div class="icon-big text-center">
                <i class="flaticon-analytics"></i>
              </div>
            </div>
            <div class="col-7 col-stats">
              <div class="numbers">
                <p class="card-category">Income</p>
                <h4 class="card-title">IDR <?php echo number_format(($content['revenue']->revenue)/1000000,2,',','.'); ?>M</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-3">
      <div class="card card-stats card-secondary card-round">
        <div class="card-body ">
          <div class="row">
            <div class="col-5">
              <div class="icon-big text-center">
                <i class="flaticon-success"></i>
              </div>
            </div>
            <div class="col-7 col-stats">
              <div class="numbers">
                <p class="card-category">Order</p>
                <h4 class="card-title"><?php echo number_format($content['revenue']->project,0,'','.'); ?></h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Row Card No Padding -->
  <div class="row row-card-no-pd" hidden>
    <div class="col-sm-6 col-md-3">
      <div class="card card-stats card-round">
        <div class="card-body ">
          <div class="row">
            <div class="col-5">
              <div class="icon-big text-center">
                <i class="flaticon-chart-pie text-warning"></i>
              </div>
            </div>
            <div class="col-7 col-stats">
              <div class="numbers">
                <p class="card-category">Number</p>
                <h4 class="card-title">150GB</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-3">
      <div class="card card-stats card-round">
        <div class="card-body ">
          <div class="row">
            <div class="col-5">
              <div class="icon-big text-center">
                <i class="flaticon-coins text-success"></i>
              </div>
            </div>
            <div class="col-7 col-stats">
              <div class="numbers">
                <p class="card-category">Revenue</p>
                <h4 class="card-title">$ 1,345</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-3">
      <div class="card card-stats card-round">
        <div class="card-body">
          <div class="row">
            <div class="col-5">
              <div class="icon-big text-center">
                <i class="flaticon-error text-danger"></i>
              </div>
            </div>
            <div class="col-7 col-stats">
              <div class="numbers">
                <p class="card-category">Errors</p>
                <h4 class="card-title">23</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-3">
      <div class="card card-stats card-round">
        <div class="card-body">
          <div class="row">
            <div class="col-5">
              <div class="icon-big text-center">
                <i class="flaticon-twitter text-primary"></i>
              </div>
            </div>
            <div class="col-7 col-stats">
              <div class="numbers">
                <p class="card-category">Followers</p>
                <h4 class="card-title">+45K</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>




</div>
