<!DOCTYPE html>
<html lang="en">

<head>
 <!-- meta -->

</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="#" class="logo d-flex align-items-center w-auto">
                  <img src="/assets/img/icon.png" alt="">
                  <span class="d-none d-lg-block">HELPDESK</span>
                </a>
              </div>

              <div class="card mb-3" style="background-color: rgba(255, 255, 255, 0.5);">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login</h5>
                    <p class="text-center small">Enter your username & password to login</p><br>
                    <?php if(session()->getFlashdata('msg')):?>
                      <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
                    <?php endif; ?>
                  </div>

                  <form class="row g-3 needs-validation" action="/api/login" method="post" enctype="multipart/form-data" wire:submit.prevent="savePersonalData" onkeydown="return event.key != 'Enter';">

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="username" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Gunakan username kamu.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Gunakan password kamu!</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" onclick="showPWD()" type="checkbox" name="remember" value="true" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Tampilkan Password</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Login</button>
                    </div>
                  </form>

                </div>
              </div>

              <div class="credits">
                Frontend by <a target="_blank" href="https://www.linkedin.com/in/alexander-alexander-b2ba03152/"> Alex</a>,
                Backend by <a href="#">Atot</a>,
                Database by <a href="#">Andi</a>
              </div>

            </div>
          </div>
        </div>
      </section>
    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- vendorStyle JS Files -->
  <script src="/assets/vendorStyle/apexcharts/apexcharts.min.js"></script>
  <script src="/assets/vendorStyle/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/vendorStyle/chart.js/chart.umd.js"></script>
  <script src="/assets/vendorStyle/echarts/echarts.min.js"></script>
  <script src="/assets/vendorStyle/quill/quill.min.js"></script>
  <script src="/assets/vendorStyle/simple-datatables/simple-datatables.js"></script>
  <script src="/assets/vendorStyle/tinymce/tinymce.min.js"></script>
  <script src="/assets/vendorStyle/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/assets/js/main.js"></script>
  <script src="/assets/js/tambahan.js"></script>

</body>

</html>