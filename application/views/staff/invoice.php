<div class="card card-invoice">
  <div class="card-header">
    <div class="invoice-header">
      <h3 class="invoice-title">
        Invoice
      </h3>
      <div class="invoice-logo">
        <img src="<?php echo base_url('./assets/upload/'.$content['webconf']->logo); ?>" alt="company logo" style="width:100px;">
      </div>
    </div>
    <div class="invoice-desc">
      <?php echo $content['webconf']->address; ?><br>
      <?php echo $content['webconf']->phone_number; ?><br>
    </div>
  </div>
  <div class="card-body">
    <div class="separator-solid"></div>
    <div class="row">
      <div class="col-md-4 info-invoice">
        <h5 class="sub">Date</h5>
        <p><?php echo $content['order']->date_payment_full; ?></p>
      </div>
      <div class="col-md-4 info-invoice">
        <h5 class="sub">Invoice ID</h5>
        <p>#INV<?php echo $content['order']->id; ?></p>
      </div>
      <div class="col-md-4 info-invoice">
        <h5 class="sub">Invoice To</h5>
        <p>
          <?php echo $content['order']->fullname; ?> <?php echo ','.$content['order']->address_sent; ?>
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="invoice-detail">
          <div class="invoice-top">
            <h3 class="title"><strong>Order summary</strong></h3>
          </div>
          <div class="invoice-item">
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <td>No</td>
                    <td><strong>Item</strong></td>
                    <td class="text-center"><strong>Price</strong></td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php $i=1;foreach ($content['listOrder'] as $item): ?>
                      <td><?php echo $i; ?></td>
                      <td><?php echo $item->package; ?></td>
                      <td class="text-center"><?php echo 'Rp. '.number_format($item->price,2,',','.'); ?></td>
                    <?php $i++;endforeach; ?>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="separator-solid  mb-3"></div>
      </div>
    </div>
  </div>
  <div class="card-footer">
    <div class="row">
      <div class="col-sm-7 col-md-5 mb-3 mb-md-0 transfer-to">
        <h5 class="sub">Bank Transfer</h5>
        <div class="account-transfer">
          <div><span>Account Name:</span><span>Putri Maulani</span></div>
          <div><span>Account Number:</span><span><?php $content['webconf']->bank_number ?></span></div>
          <div><span>Amount:</span><span><?php echo number_format($content['order']->payment_amount_1+$content['order']->payment_amount_2,2,',','.'); ?></span></div>
        </div>
      </div>
      <div class="col-sm-5 col-md-7 transfer-total">
        <h5 class="sub">Total Amount</h5>
        <div class="price"><?php echo number_format($content['order']->subtotal,2,',','.'); ?></div>
        <span>Taxes Included</span>
      </div>
    </div>
    <div class="separator-solid"></div>
    <h6 class="text-uppercase mt-4 mb-3 fw-bold">
      Notes
    </h6>
    <p class="text-muted mb-0">
      We really appreciate your business and if there's anything else we can do, please let us know! Also, should you need us to add VAT or anything else to this order, it's super easy since this is a template, so just ask!
    </p>
  </div>
</div>
