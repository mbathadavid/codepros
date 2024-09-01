<?= $this->extend(config('Auth')->views['layout']) ?>

<?= $this->section('title') ?><?= lang('Auth.register') ?> <?= $this->endSection() ?>

<?= $this->section('main') ?>
<section class="ftco-section ftco-no-pb ftco-no-pt">
   <div class="container">
      <div class="row">
         <div class="col-md-7"></div>
         <div class="col-md-5 order-md-last">
          <div class="login-wrap p-4 p-md-5">
              <h3 class="mb-4">Register Now</h3>
              <!-- <form action="#" class="signup-form"> -->
              <form action="<?= url_to('register') ?>" class="signup-form" method="post">
                    <?= csrf_field() ?>
                 <!-- <div class="form-group">
                    <label class="label" for="name">Full Name</label>
                    <input type="text" class="form-control" placeholder="John Doe">
                </div> -->
                <div class="form-group">
                    <label class="label" for="email">Email Address</label>
                    <input type="text" class="form-control" name="email" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>" required>
                </div>
                <div class="form-group" hidden>
                    <label class="label" for="email">Username</label>
                    <input type="text" name="username" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>" class="form-control" name="email" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>">
                </div>
                <div class="form-group">
                    <label for="">Register As:</label>
                    <select name="group" id="group" class="form-control">
                        <option value="">Select</option>
                        <option value="techie">Techie</option>
                        <option value="customer">Customer</option>
                    </select>
                </div>
                <div class="form-group">
                 <label class="label" for="password">Password</label>
                 <input id="password-field" name="password" type="password" class="form-control" placeholder="<?= lang('Auth.password') ?>" required>
             </div>
             <div class="form-group">
                 <label class="label" for="password">Confirm Password</label>
                 <input id="password-field" name="password_confirm" type="password" class="form-control" placeholder="<?= lang('Auth.passwordConfirm') ?>" required>
             </div>
             <div class="form-group d-flex justify-content-end mt-4">
                 <button type="submit" class="btn btn-primary submit"><span class="fa fa-paper-plane"></span></button>
             </div>
         </form>
         <p class="text-center">Already have an account? <a href="<?php echo base_url('login') ?>">Sign In</a></p>
     </div>
 </div>
</div>
</div>
</section>
<?= $this->endSection() ?>