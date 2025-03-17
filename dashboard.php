<?php
include (".includes/header.php");
$title = "Dashboard";
// menyertakan file untuk menampilakn notifikasi (jika ada) 
include '.includes/toast_notification.php';
?>
 <!-- Content wrapper -->
 <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-10 mb-4 order-0 w-100">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-7">
                        <div class="card-body">
                          <h5 class="card-title text-primary">Selamat Datang <?php echo $nama; ?>! 🎉</h5>
                          <p class="mb-4">
                            You have done <span class="fw-bold">72%</span> more sales today. Check your new badge in
                            your profile.
                          </p>
                          <a href="javascript:;" class="btn btn-sm btn-outline-primary">View Badges</a>
                        </div>
                      </div>
                      <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                          <img
                            src="assets/img/illustrations/man-with-laptop-light.png"
                            height="140"
                            alt="View Badge User"
                            data-app-dark-img="illustrations/man-with-laptop-dark.png"
                            data-app-light-img="illustrations/man-with-laptop-light.png"
                          />
                        </div>
                      </div>
                      <div class="row mb-5">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="container">
              <h1 class="text-center py-3">Dalam Negeri</h1>
              <div class="row">
              <div class="col-md-6 col-lg-4 mb-3">
                <div class="card h-100">
                  <img class="card-img-top" src="assets/img/penerbangan/Photograph by Simon Spring on unsplash.png" alt="Jakarta" height="500"/>
                    <div class="card-body">
                      <h5 class="card-title">Jakarta</h5>
                        <p class="card-text">
                        Some quick example text to build on the card title and make up the bulk of the card's content.
                        </p>
                      <a href="javascript:void(0)" class="btn btn-outline-primary">Lihat</a>
                    </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-3">
                <div class="card h-100">
                  <img class="card-img-top" src="assets/img/penerbangan/View of the evening sky in the city of Batam, to be precise at the Pollux Habibie building.png" alt="Card image cap" height="500"/>
                    <div class="card-body">
                      <h5 class="card-title">Batam</h5>
                        <p class="card-text">
                        Some quick example text to build on the card title and make up the bulk of the card's content.
                        </p>
                      <a href="javascript:void(0)" class="btn btn-outline-primary">Lihat</a>
                    </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-3">
                <div class="card h-100">
                  <img class="card-img-top" src="assets/img/penerbangan/Nusa Penida Travel Guide_ How to Visit Nusa Penida from Bali.png" alt="Card image cap" height="500"/>
                    <div class="card-body">
                      <h5 class="card-title">Bali</h5>
                        <p class="card-text">
                        Some quick example text to build on the card title and make up the bulk of the card's content.
                        </p>
                      <a href="javascript:void(0)" class="btn btn-outline-primary">Lihat</a>
                    </div>
                </div>
              </div>
              <div class="d-grid gap-2 col-lg-6 mx-auto mb-5 mt-3">
                <button class="btn btn-primary btn-lg" type="button">View More</button>
              </div>
              <h1 class="text-center py-3">Luar Negeri</h1>
              <div class="col-md-6 col-lg-4 mb-3">
                <div class="card h-100">
                  <img class="card-img-top" src="assets/img/penerbangan/Petronas Towers - Kuala Lumpur, Malaysia.png" alt="Card image cap" height="500"/>
                    <div class="card-body">
                      <h5 class="card-title">Malaysia</h5>
                        <p class="card-text">
                        Some quick example text to build on the card title and make up the bulk of the card's content.
                        </p>
                      <a href="javascript:void(0)" class="btn btn-outline-primary">Lihat</a>
                    </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-3">
                <div class="card h-100">
                  <img class="card-img-top" src="assets/img/penerbangan/Singapore.png" alt="Card image cap" height="500"/>
                    <div class="card-body">
                      <h5 class="card-title">Singapore</h5>
                        <p class="card-text">
                        Some quick example text to build on the card title and make up the bulk of the card's content.
                        </p>
                      <a href="javascript:void(0)" class="btn btn-outline-primary">Lihat</a>
                    </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-3">
                <div class="card h-100">
                  <img class="card-img-top" src="assets/img/penerbangan/Sunrise at Opera.png" alt="Card image cap" height="500"/>
                    <div class="card-body">
                      <h5 class="card-title">Australia</h5>
                        <p class="card-text">
                        Some quick example text to build on the card title and make up the bulk of the card's content.
                        </p>
                      <a href="javascript:void(0)" class="btn btn-outline-primary">Lihat</a>
                    </div>
                </div>
              </div>
              <div class="d-grid gap-2 col-lg-6 mx-auto mb-5 mt-3">
                <button class="btn btn-primary btn-lg" type="button" >View More</button>
              </div>
            </div>
          </div>
<!-- Testing Bro -->
<?php 
include (".includes/footer.php");
?>