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
  <div class="page-inner mt--5">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <ul class="nav nav-pills nav-primary  nav-pills-no-bd nav-pills-icons justify-content-center" id="pills-tab-with-icon" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="pills-home-tab-icon" data-toggle="pill" href="#unconfirmed" role="tab" aria-controls="information" aria-selected="true">
                  <i class="flaticon-box-3"></i>
                  Belum Dikonfirmasi
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab-icon" data-toggle="pill" href="#process" role="tab" aria-controls="order" aria-selected="false">
                  <i class="flaticon-stopwatch"></i>
                  Diproses
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab-icon" data-toggle="pill" href="#finish" role="tab" aria-controls="order" aria-selected="false">
                  <i class="flaticon-check"></i>
                  Selesai
                </a>
              </li>
            </ul>
            <div class="tab-content mt-2 mb-3" id="pills-with-icon-tabContent">
              <div class="tab-pane fade show active" id="unconfirmed" role="tabpanel" aria-labelledby="pills-home-tab-icon">

                <form  method="post">
                  <div class="card-body">
                    <div class="bd-example">
                      <div class="table-responsive">
                        <table id="multi-filter-select" class="display table table-striped table-hover" cellspacing="0" width="100%">
                          <thead>
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">Pelanggan</th>
                              <th scope="col">Tanggal</th>
                              <th scope="col">Status</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $i=1;foreach ($content['order'] as $item): if($item->status!=2){continue;} ?>

                              <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $item->fullname; ?></td>
                                <td><?php echo $item->date_event; ?></td>
                                <td><?php if($item->status==1){echo 'Belum dikonfirmasi';} ?></td>
                              </tr>
                              <?php $i++;endforeach; ?>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </form>
              </div>
              <div class="tab-pane fade" id="process" role="tabpanel" aria-labelledby="pills-profile-tab-icon">
                <form  method="post">
                  <div class="card-body">
                    <div class="bd-example">
                      <div class="table-responsive">
                        <table id="multi-filter-select1" class="display table table-striped table-hover" cellspacing="0" width="100%">
                          <thead>
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">Pelanggan</th>
                              <th scope="col">Tanggal</th>
                              <th scope="col">Status</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $i=1;foreach ($content['order'] as $item): if(($item->need_hardfile==1 && $item->status<2 && $item->status>14) ||
                              ($item->need_hardfile==0 && $item->status<2 && $item->status>12)){continue;} ?>

                              <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $item->fullname; ?></td>
                                <td><?php echo $item->date_event; ?></td>
                                <td><?php if($item->status==1){echo 'Belum dikonfirmasi';} ?></td>
                              </tr>
                              <?php $i++;endforeach; ?>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </form>

                </div>
                <div class="tab-pane fade" id="finish" role="tabpanel" aria-labelledby="pills-profile-tab-icon">
                  <form  method="post">
                    <div class="card-body">
                      <div class="bd-example">
                        <div class="table-responsive">
                          <table id="multi-filter-select2" class="display table table-striped table-hover" cellspacing="0" width="100%">
                            <thead>
                              <tr>
                                <th scope="col">No</th>
                                <th scope="col">Pelanggan</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Status</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php $i=1;foreach ($content['order'] as $item): if($item->status!=15){continue;} ?>

                                <tr>
                                  <td><?php echo $i; ?></td>
                                  <td><?php echo $item->fullname; ?></td>
                                  <td><?php echo $item->date_event; ?></td>
                                  <td><?php if($item->status==1){echo 'Belum dikonfirmasi';} ?></td>
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
        </div>
      </div>
    </div>

  </div>
