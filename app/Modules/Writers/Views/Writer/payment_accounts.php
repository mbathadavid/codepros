<?= $this->extend('layouts/writer/default') ?>

<?= $this->section('content') ?>


<div class="main">

  <div class="row">
    <!-- BOF General Form -->
    <div class="col-lg-6">
      <div class="card mb-3">
        <form role="form">
          <div class="card-header uppercase">
            <div class="caption">
              <i class="ti-money"></i> CREATE YOUR PAYMENTS ACCOUNT
            </div>
            <div class="tools">
              <a href="#" class="btn btn-outline-secondary"><i class="ti-pencil-alt"></i></a>
              <a href="#" class="btn btn-outline-secondary"><i class="ti-settings"></i></a>
            </div>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label>BANK ACCOUNT</label>
              <input type="text" class="form-control" placeholder="e.g Paypal">
            </div>
            <div class="form-group">
              <label>ACCOUNT HOLDERS NAME</label>
              <input type="text" class="form-control" placeholder="e.g John">
            </div>
            <div class="form-group">
              <label>ACCOUNT NUMBER</label>
              <input type="number" class="form-control" placeholder="XXXX-XXXX-XXXX">
            </div>
            <div class="form-group">
              <label>CODE</label>
              <input type="number" class="form-control" placeholder="XXXXX">
            </div>
          </div>

          <div class="card-footer text-right">
            <a href="#" class="btn btn-flat btn-primary"><i class="ti-face-smile"></i> Submit</a>
            <a href="#" class="btn btn-flat btn-secondary"><i class="ti-face-sad"></i> Cancel</a>
          </div>
        </form>
      </div>
    </div>
    <!-- EOF General Form -->
    <!-- BOF Horizontal Form -->
    <div class="col-md-6 mb-3">
      <div class="card">
        <div class="card-header uppercase">
          <div class="caption text-primary">
            <i class="ti-money"></i> Details
          </div>
          <div class="tools">
            <a href="#" class="btn btn-circle btn-outline-secondary"><i class="ti-pencil-alt"></i></a>
            <a href="#" class="btn btn-circle btn-outline-secondary"><i class="ti-settings"></i></a>
          </div>
        </div>
        <div class="card-body">
          <div class="image-frame">
            <img src="data:image/png;base64,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" alt="image" class="rounded-circle">
          </div>
          <h3 style="text-align:center">Enter Account Details</h3>
          <p class="card-text">To ensure that you receive timely and hassle-free payments for your hard work, we kindly request that you provide your account details. These details will be securely stored and used exclusively for processing your payments. </p>
          <p class="card-text mb-4">Please fill out the required fields with accurate and up-to-date information to avoid any delays in receiving your payments.</p>

        </div>
      </div>
    </div>
    <!-- EOF Horizontal Form -->
  </div>
</div>


<style>
  .image-frame {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    overflow: hidden;
    margin: 0 auto;
    margin-bottom: 15px !important;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .image-frame img {
    width: 100%;
    height: auto;

  }
</style>
<?= $this->endSection() ?>