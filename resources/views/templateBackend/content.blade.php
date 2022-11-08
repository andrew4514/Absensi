  <!-- Begin Page Content -->
  @if (Auth::user()->role == 'admin')
      <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
              <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          </div>

          <!-- Content Row -->
          <div class="row">

              <!-- Earnings (Monthly) Card Example -->
              <div class="col-xl-3 col-md-6 mb-4">
                  <div class="card border-left-primary shadow h-100 py-2">
                      <div class="card-body">
                          <div class="row no-gutters align-items-center">
                              <div class="col mr-2">
                                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                      Jumlah Kelas (SD,SMP,SMA,SMK)</div>
                                  <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                              </div>
                              <div class="col-auto">
                                  <i class="fas fa-calendar fa-2x text-gray-300"></i>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

              <!-- Earnings (Monthly) Card Example -->
              <div class="col-xl-3 col-md-6 mb-4">
                  <div class="card border-left-success shadow h-100 py-2">
                      <div class="card-body">
                          <div class="row no-gutters align-items-center">
                              <div class="col mr-2">
                                  <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                      Artikel</div>
                                  <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                              </div>
                              <div class="col-auto">
                                  <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

              <!-- Pending Requests Card Example -->
              <div class="col-xl-3 col-md-6 mb-4">
                  <div class="card border-left-warning shadow h-100 py-2">
                      <div class="card-body">
                          <div class="row no-gutters align-items-center">
                              <div class="col mr-2">
                                  <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                      Komentar</div>
                                  <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                              </div>
                              <div class="col-auto">
                                  <i class="fas fa-comments fa-2x text-gray-300"></i>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <!-- Content Row -->
          <div class="row">

              <div class="col-lg-6 mb-4">



                  <!-- Approach -->
                  <div class="card shadow mb-4">
                      <div class="card-header py-3">
                          <h6 class="m-0 font-weight-bold text-primary">Development Approach</h6>
                      </div>
                      <div class="card-body">
                          <p>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to reduce
                              CSS bloat and poor page performance. Custom CSS classes are used to create
                              custom components and custom utility classes.</p>
                          <p class="mb-0">Before working with this theme, you should become familiar with the
                              Bootstrap framework, especially the utility classes.</p>
                      </div>
                  </div>

              </div>
          </div>

      </div>
      <!-- /.container-fluid -->

      </div>
  @else
      <div class="container">
          <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">


  <div class="carousel-inner text-center">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="{{ asset('image') }}/{{ 'class.png' }}" class="rounded mb-3 shadow mt-4" width="500px" alt="gambar_artikel">
      <h4><a href="" class="text-dark text-decoration-none">Ini Judul</a></h4>
      <small>Penulis: Andrew</small>
      <div class="d-flex justify-content-center mt-2">
        <p class="col-6">Ini paragraf Lorem ipsum dolor sit, amet consectetur adipisicing elit. Impedit ipsam assumenda veniam, optio in laborum officia maiores doloribus alias unde.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
      </div>
  @endif
  <!-- End of Main Content -->
