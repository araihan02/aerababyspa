<div class="container-xxl">
  <div class="authentication-wrapper authentication-basic container-p-y">
    <div class="authentication-inner">
      <!-- Login -->
      <div class="card">
        <div class="card-body">
          <!-- Logo -->
          <div class="justify-content-center">
            <div class="brand-logo text-center">
              <img src="<?= base_url('assets/images') ?>/logorpgnew.png" alt="logo" style="width:35%">
            </div>
            <h1 class="app-brand-text demo text-body fw-bolder ms-0" style="text-transform:none;text-align:center;margin-bottom:30px">E-learning</h1>
          </div>
          <!-- /Logo -->
          <!-- <h4 class="mb-2">Welcome to RPG E-Learning! 👋</h4>
          <p class="mb-4">Please sign-in to your account and start the adventure</p> -->

          <form id="formAuthentication" class="mb-3" action="#" method="POST">
          <?php if (validation_errors()) : ?>
							<div class="alert alert-warning alert-dismissible fade show" role="alert">
								<?= validation_errors(); ?>
								<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
							</div>
						<?php endif; ?>
            <div class="mb-3">
              <label for="nik" class="form-label">NIK</label>
              <input type="text" class="form-control" id="nik" name="nik" placeholder="Enter your nik" autofocus />
            </div>
            <div class="mb-3">
              <button class="btn btn-primary d-grid w-100" type="submit">Sign up</button>
            </div>
          </form>

          <p class="text-center">
            <span>Already have an account?</span>
            <a href="<?= base_url('Login') ?>">
              <span>Sign in instead</span>
            </a>
          </p>
        </div>
      </div>
      <!-- /Login -->
    </div>
  </div>
</div>