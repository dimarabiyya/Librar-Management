<?= $this->extend('layouts/home_layout') ?>

<?= $this->section('head') ?>
<title>Home</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="px-4 pt-5 my-5 text-center border-bottom">
  <h1 class="display-4 fw-bold text-body-emphasis">Buku<span class="text-primary">Hub</span></h1>
  <div class="col-lg-6 mx-auto">
    <p class="lead mb-4">Buku Hub siap membantu Perpustakaan untuk mengelola buku dan anggota nya. Sebuah sistem untuk mengelola Buku di sebuah Perpustakaan<br>
    Website ini di peruntukan untuk Admin dari Perpustakaan</p>
    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
      <a href="<?= base_url('login'); ?>" class="btn btn-primary btn-lg px-4 me-sm-3">Login</a>
    </div>
  </div>
  <div class="overflow-hidden" style="max-height: 45vh;">
    <div class="container px-5">
      <h4>Kelompok <span class="fw-bold">DIKIRA</span></h4>
      <small>Dimar Kio Rana</small>
    </div>
  </div>

    <div class="container py-5">
      <div class="row justify-content-center">
          <div class="col-lg-8">
              <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                      <div class="carousel-item active">
                          <div class="testimonial-card position-relative">
                              <div class="quote-icon">❝</div>
                              <div class="row align-items-center">
                                  <div class="col-md-4 text-center">
                                      <img src="assets/images/Dimar.jpeg" class="avatar mb-3" alt="Client Avatar">
                                      <h5 class="client-name mb-1">Dimar Abiyya</h5>
                                      <p class="client-position">Admin Perpustakaan</p>
                                  </div>
                                  <div class="col-md-8">
                                      <p class="testimonial-text">"Bagus banget Appsnya"</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="carousel-item">
                          <div class="testimonial-card position-relative">
                              <div class="quote-icon">❝</div>
                              <div class="row align-items-center">
                                  <div class="col-md-4 text-center">
                                      <img src="assets/images/Kio.jpeg" class="avatar mb-3" alt="Client Avatar">
                                      <h5 class="client-name mb-1">Arifian Jamal</h5>
                                      <p class="client-position">Admin Perpustakaan Australi</p>
                                  </div>
                                  <div class="col-md-8">
                                      <p class="testimonial-text">"Saking bagusnya sampai gak bisa berkata-kata"</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="carousel-item">
                          <div class="testimonial-card position-relative">
                              <div class="quote-icon">❝</div>
                              <div class="row align-items-center">
                                  <div class="col-md-4 text-center">
                                      <img src="assets/images/Rana.JPEG" class="avatar mb-3" alt="Client Avatar">
                                      <h5 class="client-name mb-1">Rana Effendi</h5>
                                      <p class="client-position">Admin Perpustakaan Roblox</p>
                                  </div>
                                  <div class="col-md-8">
                                      <p class="testimonial-text">"Bagus banget "</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

                  <!-- Carousel Controls -->
                  <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                  </button>

                  <!-- Carousel Indicators -->
                  <div class="carousel-indicators">
                      <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="0" class="active"></button>
                      <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="1"></button>
                      <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="2"></button>
                  </div>
              </div>
          </div>
      </div>
  </div>  

</div>

<style>
.testimonial-card {
            background: linear-gradient(145deg, #ffffff, #f5f5f5);
            border-radius: 20px;
            padding: 2rem;
            box-shadow: 8px 8px 16px #e6e6e6, -8px -8px 16px #ffffff;
            transition: transform 0.3s ease;
        }
        
        .testimonial-card:hover {
            transform: translateY(-5px);
        }
        
        .quote-icon {
            font-size: 4rem;
            color: #6c63ff;
            opacity: 0.2;
            position: absolute;
            top: 1rem;
            right: 2rem;
        }
        
        .avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #6c63ff;
        }
        
        .carousel-indicators {
            bottom: -3rem;
        }
        
        .carousel-indicators button {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background-color: #6c63ff;
            opacity: 0.5;
        }
        
        .carousel-indicators .active {
            opacity: 1;
        }
        
        .testimonial-text {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #555;
        }
        
        .client-name {
            color: #2d2d2d;
            font-weight: 600;
        }
        
        .client-position {
            color: #6c63ff;
            font-size: 0.9rem;
        }
</style>
<?= $this->endSection() ?>