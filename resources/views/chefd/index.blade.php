{{--
 @extends('chefd.chefd_master')
@section('chefd')

 <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="{{route('chefd.dashboard')}}" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Nicechefd</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="{{asset('template/assets/img/profile-img.jpg')}}" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">{{Auth::guard('chefd')->user()->name}}</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>{{Auth::guard('chefd')->user()->name}}</h6>
              <span>{{Auth::guard('chefd')->user()->email}}</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{route('chefd.logout')}}">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{route('chefd.dashboard')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->


      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Forms</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="forms-elements.html">
              <i class="bi bi-circle"></i><span>Form Elements</span>
            </a>
          </li>
          <li>
            <a href="forms-layouts.html">
              <i class="bi bi-circle"></i><span>Form Layouts</span>
            </a>
          </li>
          <li>
            <a href="forms-editors.html">
              <i class="bi bi-circle"></i><span>Form Editors</span>
            </a>
          </li>
          <li>
            <a href="forms-validation.html">
              <i class="bi bi-circle"></i><span>Form Validation</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="tables-general.html">
              <i class="bi bi-circle"></i><span>General Tables</span>
            </a>
          </li>
          <li>
            <a href="tables-data.html">
              <i class="bi bi-circle"></i><span>Data Tables</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Charts</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="charts-chartjs.html">
              <i class="bi bi-circle"></i><span>Chart.js</span>
            </a>
          </li>
          <li>
            <a href="charts-apexcharts.html">
              <i class="bi bi-circle"></i><span>ApexCharts</span>
            </a>
          </li>
          <li>
            <a href="charts-echarts.html">
              <i class="bi bi-circle"></i><span>ECharts</span>
            </a>
          </li>
        </ul>
      </li><!-- End Charts Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gem"></i><span>Icons</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="icons-bootstrap.html">
              <i class="bi bi-circle"></i><span>Bootstrap Icons</span>
            </a>
          </li>
          <li>
            <a href="icons-remix.html">
              <i class="bi bi-circle"></i><span>Remix Icons</span>
            </a>
          </li>
          <li>
            <a href="icons-boxicons.html">
              <i class="bi bi-circle"></i><span>Boxicons</span>
            </a>
          </li>
        </ul>
      </li><!-- End Icons Nav -->

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->


    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('chefd.dashboard')}}">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Sales <span>| Today</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cart"></i>
                    </div>
                    <div class="ps-3">
                      <h6>145</h6>
                      <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Revenue <span>| This Month</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                      <h6>$3,264</h6>
                      <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Customers <span>| This Year</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>1244</h6>
                      <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->

            <!-- Reports -->
            <div class="col-12">
              <div class="card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Reports <span>/Today</span></h5>

                  <!-- Line Chart -->
                  <div id="reportsChart"></div>

                  <script>
                    document.addEventListener("DOMContentLoaded", () => {
                      new ApexCharts(document.querySelector("#reportsChart"), {
                        series: [{
                          name: 'Sales',
                          data: [31, 40, 28, 51, 42, 82, 56],
                        }, {
                          name: 'Revenue',
                          data: [11, 32, 45, 32, 34, 52, 41]
                        }, {
                          name: 'Customers',
                          data: [15, 11, 32, 18, 9, 24, 11]
                        }],
                        chart: {
                          height: 350,
                          type: 'area',
                          toolbar: {
                            show: false
                          },
                        },
                        markers: {
                          size: 4
                        },
                        colors: ['#4154f1', '#2eca6a', '#ff771d'],
                        fill: {
                          type: "gradient",
                          gradient: {
                            shadeIntensity: 1,
                            opacityFrom: 0.3,
                            opacityTo: 0.4,
                            stops: [0, 90, 100]
                          }
                        },
                        dataLabels: {
                          enabled: false
                        },
                        stroke: {
                          curve: 'smooth',
                          width: 2
                        },
                        xaxis: {
                          type: 'datetime',
                          categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
                        },
                        tooltip: {
                          x: {
                            format: 'dd/MM/yy HH:mm'
                          },
                        }
                      }).render();
                    });
                  </script>
                  <!-- End Line Chart -->

                </div>

              </div>
            </div><!-- End Reports -->

            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Recent Sales <span>| Today</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Customer</th>
                        <th scope="col">Product</th>
                        <th scope="col">Price</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><a href="#">#2457</a></th>
                        <td>Brandon Jacob</td>
                        <td><a href="#" class="text-primary">At praesentium minu</a></td>
                        <td>$64</td>
                        <td><span class="badge bg-success">Approved</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#2147</a></th>
                        <td>Bridie Kessler</td>
                        <td><a href="#" class="text-primary">Blanditiis dolor omnis similique</a></td>
                        <td>$47</td>
                        <td><span class="badge bg-warning">Pending</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#2049</a></th>
                        <td>Ashleigh Langosh</td>
                        <td><a href="#" class="text-primary">At recusandae consectetur</a></td>
                        <td>$147</td>
                        <td><span class="badge bg-success">Approved</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#2644</a></th>
                        <td>Angus Grady</td>
                        <td><a href="#" class="text-primar">Ut voluptatem id earum et</a></td>
                        <td>$67</td>
                        <td><span class="badge bg-danger">Rejected</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#2644</a></th>
                        <td>Raheem Lehner</td>
                        <td><a href="#" class="text-primary">Sunt similique distinctio</a></td>
                        <td>$165</td>
                        <td><span class="badge bg-success">Approved</span></td>
                      </tr>
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->

            <!-- Top Selling -->
            <div class="col-12">
              <div class="card top-selling overflow-auto">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body pb-0">
                  <h5 class="card-title">Top Selling <span>| Today</span></h5>

                  <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th scope="col">Preview</th>
                        <th scope="col">Product</th>
                        <th scope="col">Price</th>
                        <th scope="col">Sold</th>
                        <th scope="col">Revenue</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/product-1.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Ut inventore ipsa voluptas nulla</a></td>
                        <td>$64</td>
                        <td class="fw-bold">124</td>
                        <td>$5,828</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/product-2.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Exercitationem similique doloremque</a></td>
                        <td>$46</td>
                        <td class="fw-bold">98</td>
                        <td>$4,508</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/product-3.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Doloribus nisi exercitationem</a></td>
                        <td>$59</td>
                        <td class="fw-bold">74</td>
                        <td>$4,366</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/product-4.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Officiis quaerat sint rerum error</a></td>
                        <td>$32</td>
                        <td class="fw-bold">63</td>
                        <td>$2,016</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/product-5.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Sit unde debitis delectus repellendus</a></td>
                        <td>$79</td>
                        <td class="fw-bold">41</td>
                        <td>$3,239</td>
                      </tr>
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Top Selling -->

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

          <!-- Recent Activity -->
          <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Recent Activity <span>| Today</span></h5>

              <div class="activity">

                <div class="activity-item d-flex">
                  <div class="activite-label">32 min</div>
                  <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                  <div class="activity-content">
                    Quia quae rerum <a href="#" class="fw-bold text-dark">explicabo officiis</a> beatae
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">56 min</div>
                  <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                  <div class="activity-content">
                    Voluptatem blanditiis blanditiis eveniet
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">2 hrs</div>
                  <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                  <div class="activity-content">
                    Voluptates corrupti molestias voluptatem
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">1 day</div>
                  <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                  <div class="activity-content">
                    Tempore autem saepe <a href="#" class="fw-bold text-dark">occaecati voluptatem</a> tempore
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">2 days</div>
                  <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                  <div class="activity-content">
                    Est sit eum reiciendis exercitationem
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">4 weeks</div>
                  <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                  <div class="activity-content">
                    Dicta dolorem harum nulla eius. Ut quidem quidem sit quas
                  </div>
                </div><!-- End activity item-->

              </div>

            </div>
          </div><!-- End Recent Activity -->

          <!-- Budget Report -->
          <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body pb-0">
              <h5 class="card-title">Budget Report <span>| This Month</span></h5>

              <div id="budgetChart" style="min-height: 400px;" class="echart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  var budgetChart = echarts.init(document.querySelector("#budgetChart")).setOption({
                    legend: {
                      data: ['Allocated Budget', 'Actual Spending']
                    },
                    radar: {
                      // shape: 'circle',
                      indicator: [{
                          name: 'Sales',
                          max: 6500
                        },
                        {
                          name: 'chefdistration',
                          max: 16000
                        },
                        {
                          name: 'Information Technology',
                          max: 30000
                        },
                        {
                          name: 'Customer Support',
                          max: 38000
                        },
                        {
                          name: 'Development',
                          max: 52000
                        },
                        {
                          name: 'Marketing',
                          max: 25000
                        }
                      ]
                    },
                    series: [{
                      name: 'Budget vs spending',
                      type: 'radar',
                      data: [{
                          value: [4200, 3000, 20000, 35000, 50000, 18000],
                          name: 'Allocated Budget'
                        },
                        {
                          value: [5000, 14000, 28000, 26000, 42000, 21000],
                          name: 'Actual Spending'
                        }
                      ]
                    }]
                  });
                });
              </script>

            </div>
          </div><!-- End Budget Report -->

          <!-- Website Traffic -->
          <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body pb-0">
              <h5 class="card-title">Website Traffic <span>| Today</span></h5>

              <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  echarts.init(document.querySelector("#trafficChart")).setOption({
                    tooltip: {
                      trigger: 'item'
                    },
                    legend: {
                      top: '5%',
                      left: 'center'
                    },
                    series: [{
                      name: 'Access From',
                      type: 'pie',
                      radius: ['40%', '70%'],
                      avoidLabelOverlap: false,
                      label: {
                        show: false,
                        position: 'center'
                      },
                      emphasis: {
                        label: {
                          show: true,
                          fontSize: '18',
                          fontWeight: 'bold'
                        }
                      },
                      labelLine: {
                        show: false
                      },
                      data: [{
                          value: 1048,
                          name: 'Search Engine'
                        },
                        {
                          value: 735,
                          name: 'Direct'
                        },
                        {
                          value: 580,
                          name: 'Email'
                        },
                        {
                          value: 484,
                          name: 'Union Ads'
                        },
                        {
                          value: 300,
                          name: 'Video Ads'
                        }
                      ]
                    }]
                  });
                });
              </script>

            </div>
          </div><!-- End Website Traffic -->

          <!-- News & Updates Traffic -->
          <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body pb-0">
              <h5 class="card-title">News &amp; Updates <span>| Today</span></h5>

              <div class="news">
                <div class="post-item clearfix">
                  <img src="assets/img/news-1.jpg" alt="">
                  <h4><a href="#">Nihil blanditiis at in nihil autem</a></h4>
                  <p>Sit recusandae non aspernatur laboriosam. Quia enim eligendi sed ut harum...</p>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/news-2.jpg" alt="">
                  <h4><a href="#">Quidem autem et impedit</a></h4>
                  <p>Illo nemo neque maiores vitae officiis cum eum turos elan dries werona nande...</p>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/news-3.jpg" alt="">
                  <h4><a href="#">Id quia et et ut maxime similique occaecati ut</a></h4>
                  <p>Fugiat voluptas vero eaque accusantium eos. Consequuntur sed ipsam et totam...</p>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/news-4.jpg" alt="">
                  <h4><a href="#">Laborum corporis quo dara net para</a></h4>
                  <p>Qui enim quia optio. Eligendi aut asperiores enim repellendusvel rerum cuder...</p>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/news-5.jpg" alt="">
                  <h4><a href="#">Et dolores corrupti quae illo quod dolor</a></h4>
                  <p>Odit ut eveniet modi reiciendis. Atque cupiditate libero beatae dignissimos eius...</p>
                </div>

              </div><!-- End sidebar recent posts-->

            </div>
          </div><!-- End News & Updates -->

        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Nicechefd</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-chefd-bootstrap-chefd-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  @endsection
 --}}

 @extends('chefd.chefd_master')
 @section('chefd')



 <div x-show="loaded" x-init="window.addEventListener('DOMContentLoaded', () => {setTimeout(() => loaded = false, 500)})" class="f q r ze rd nj pa">
    <div class="c"></div>
  </div>

      <!-- ===== Preloader End ===== -->

      <!-- ===== Page Wrapper Start ===== -->
      <div class="nh">
        <!-- ===== Sidebar Start ===== -->
        <aside
    :class="sidebarToggle && 'zf ph'"
    class="qo -ud-translate-x-full _u nj xr _e f u ou q l bv ip hp dp oa"
  >
    <!-- Hamburger Toggle BTN -->
    <button
      :class="sidebarToggle && 'ga'"
      class="vu jc g -ud-right-9.5 pa nj xr ni bj wr _k uo qh"
      @click="sidebarToggle = !sidebarToggle"
    >
      <span class="jc h cg bf sd">
        <span class="du-block g m yd vc">
          <span
            class="jc h r q uj cs zh cf td ya gp fp yo"
            :class="{ 'df zo': !sidebarToggle }"
          ></span>
          <span
            class="jc h r q uj cs zh cf td ya gp fp _o"
            :class="{ 'df gw': !sidebarToggle }"
          ></span>
          <span
            class="jc h r q uj cs zh cf td ya gp fp ap"
            :class="{ 'df bp': !sidebarToggle }"
          ></span>
        </span>
        <span
          class="du-block g m yd vc _f"
        >
          <span
            class="jc uj cs zh gp fp zo g ha r ef vc"
            :class="{ 'ud yo': !sidebarToggle }"
          ></span>
          <span
            class="jc uj cs zh gp fp gw g q ia yd td"
            :class="{ 'ud hw': !sidebarToggle }"
          ></span>
        </span>
      </span>
    </button>
    <!-- Hamburger Toggle BTN -->

    <!-- Sidebar Menu -->
    <nav
      class="ml rl fv gc ru"
      x-data="{selected: 'Dashboard'}"
      x-init="
        selected = JSON.parse(localStorage.getItem('selected'));
        $watch('selected', value => localStorage.setItem('selected', JSON.stringify(value)))"
    >
      <ul class="lc hg bh">
        <!-- Menu Item Dashboard -->
        <li>
          <a
            class="nr h un lc mg sg qh gp dp nl rl _q qq"
            href="{{route('chefd.dashboard')}}"
            @click.prevent="selected = (selected === 'Dashboard' ? '':'Dashboard')"
            :class="{ 'eo oj': (selected === 'Dashboard') || (page === 'analytics' || page === 'ecommerce') }"
          >
            <svg
              class="hk"
              width="20"
              height="20"
              viewBox="0 0 20 20"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M16.8125 5.90625C15.0938 4.09375 12.6875 2.96875 10 2.96875C4.78125 2.96875 0.5625 7.21875 0.5625 12.4375C0.5625 13.9062 0.90625 15.3438 1.53125 16.625C1.625 16.8125 1.78125 16.9375 1.96875 17C2.03125 17 2.0625 17.0312 2.125 17.0312C2.125 17.0312 2.125 17.0312 2.15625 17.0312C2.15625 17.0312 2.15625 17.0312 2.1875 17.0312C2.21875 17.0312 2.25 17.0312 2.28125 17.0312C2.34375 17.0312 2.4375 17 2.5 16.9687L3.78125 16.3437C4.125 16.1875 4.28125 15.75 4.09375 15.4062C3.90625 15.0625 3.5 14.9062 3.15625 15.0937L2.53125 15.4062C2.15625 14.5 2 13.5312 1.96875 12.5312H3.28125C3.65625 12.5312 4 12.2187 4 11.8125C4 11.4062 3.6875 11.0938 3.28125 11.0938H2.0625C2.28125 9.71875 2.875 8.46875 3.71875 7.4375L4.84375 8.5625C4.96875 8.6875 5.15625 8.78125 5.34375 8.78125C5.53125 8.78125 5.71875 8.71875 5.84375 8.5625C6.125 8.28125 6.125 7.84375 5.84375 7.5625L4.6875 6.40625C5.9375 5.3125 7.53125 4.5625 9.3125 4.4375V6.34375C9.3125 6.71875 9.625 7.0625 10.0312 7.0625C10.4062 7.0625 10.75 6.75 10.75 6.34375V4.4375C12.5 4.59375 14.125 5.3125 15.375 6.40625L14.5 7.28125C14.2188 7.5625 14.2188 8 14.5 8.28125C14.625 8.40625 14.8125 8.5 15 8.5C15.1875 8.5 15.375 8.4375 15.5 8.28125L16.3438 7.4375C17.1875 8.46875 17.75 9.71875 18 11.0938H16.7813C16.4063 11.0938 16.0625 11.4062 16.0625 11.8125C16.0625 12.2187 16.375 12.5312 16.7813 12.5312H18.0938C18.0938 13.5312 17.9062 14.5 17.5312 15.4375L16.9062 15.125C16.5625 14.9375 16.125 15.0938 15.9687 15.4375C15.8125 15.7813 15.9375 16.2188 16.2812 16.375L17.5625 17C17.6563 17.0625 17.7813 17.0625 17.875 17.0625C17.875 17.0625 17.875 17.0625 17.9062 17.0625C17.9062 17.0625 17.9063 17.0625 17.9375 17.0625C18.1875 17.0625 18.4375 16.9063 18.5625 16.6875C19.2188 15.4063 19.5313 13.9375 19.5313 12.5C19.4688 9.90625 18.4375 7.59375 16.8125 5.90625Z"
                fill=""
              />
              <path
                d="M11.9062 10.75L9.81247 12.3125C9.43747 12.375 9.09372 12.5938 8.87497 12.9063C8.84372 12.9688 8.81247 13 8.78122 13.0625L8.71872 13.125H8.74997C8.40622 13.7813 8.59372 14.5938 9.21872 15.0625C9.84372 15.5 10.6875 15.4375 11.1875 14.9063H11.2187L11.25 14.8438C11.2812 14.8125 11.3437 14.75 11.375 14.6875C11.625 14.375 11.6875 13.9688 11.6562 13.5938L12.4687 11.0938C12.5625 10.8125 12.1875 10.5625 11.9062 10.75Z"
                fill=""
              />
            </svg>

            Dashboard

            <svg
              class="hk g i j/2 -ud-translate-y-1/2"
              :class="{ 'ag': (selected === 'Dashboard') }"
              width="12"
              height="8"
              viewBox="0 0 12 8"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M0.410704 0.929411C0.736141 0.603974 1.26378 0.603974 1.58922 0.929411L5.99996 5.34016L10.4107 0.929411C10.7361 0.603974 11.2638 0.603974 11.5892 0.929411C11.9147 1.25485 11.9147 1.78249 11.5892 2.10792L6.58922 7.10792C6.26378 7.43336 5.73614 7.43336 5.4107 7.10792L0.410704 2.10792C0.0852667 1.78249 0.0852667 1.25485 0.410704 0.929411Z"
                fill=""
              />
            </svg>
          </a>

          <!-- Dropdown Menu Start -->
          <div class="nh" :class="(selected === 'Dashboard') ? 'jc' :'pc'">
            <ul
              class="lc hg tg wm yb fb"
            >
              <li>
                <a
                  class="nr h un lc mg sg qh gp dp ol rl zq os vq ls/5"
                  href="{{route('chefd.dashboard')}}"
                  :class="page === 'analytics' && '_n gs dk cs/5'"
                  >Analytics</a
                >
              </li>
              <li>
                <a
                  class="nr h un lc mg sg qh gp dp ol rl zq os vq ls/5"
                  href="{{route('chefd.dashboard')}}"
                  :class="page === 'ecommerce' && '_n gs dk cs/5'"
                  >eCommerce</a
                >
              </li>
            </ul>
          </div>
          <!-- Dropdown Menu End -->
        </li>
        <!-- Menu Item Dashboard -->

        <!-- Menu Item Chat -->
        <li>
          <a
            class="nr h un lc mg sg qh gp dp nl rl _q qq"
            href="{{route('demande.indexChefdep')}}"
            @click="selected = (selected === 'Chat' ? '':'Chat')"
            :class="{ 'eo oj': (selected === 'Chat') && (page === 'chat') }"
          >
            <svg
              class="hk"
              width="20"
              height="18"
              viewBox="0 0 20 18"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M9.625 17.25C9.46875 17.25 9.3125 17.2187 9.1875 17.1562C3.0625 14.375 0.5625 11.6562 0.5625 7.78125C0.5625 3.90625 3.8125 0.75 7.8125 0.75H12.1875C16.1875 0.75 19.4688 3.90625 19.4688 7.78125C19.4688 11.6562 16.1875 14.8437 12.1875 14.8437H10.6875V16.1875C10.6875 16.5625 10.5 16.9062 10.1875 17.0937C10.0312 17.1875 9.8125 17.25 9.625 17.25ZM7.8125 2.15625C4.59375 2.15625 1.9375 4.6875 1.9375 7.78125C1.9375 10.9687 4 13.1875 9.28125 15.6562V14.5C9.28125 13.9062 9.78125 13.4062 10.375 13.4062H12.1875C15.4063 13.4062 18.0625 10.875 18.0625 7.78125C18.0625 4.6875 15.4375 2.15625 12.1875 2.15625H7.8125V2.15625Z"
                fill=""
              />
            </svg>

            Demande
          </a>
        </li>
        <!-- Menu Item Chat -->

        <!-- Menu Item Inbox -->
        <li>
          <a
            class="nr h un lc mg sg qh gp dp nl rl _q qq"
            href="inbox.html"
            @click="selected = (selected === 'Inbox' ? '':'Inbox')"
            :class="{ 'eo oj': (selected === 'Inbox') && (page === 'inbox') }"
          >
            <svg
              class="hk"
              width="20"
              height="18"
              viewBox="0 0 20 18"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M18.75 9.6875C18.375 9.6875 18.0625 10 18.0625 10.375V16C18.0625 16.3125 17.8125 16.5625 17.5 16.5625H2.5C2.1875 16.5625 1.9375 16.3125 1.9375 16V10.375C1.9375 10 1.625 9.6875 1.25 9.6875C0.875 9.6875 0.5625 10 0.5625 10.375V16C0.5625 17.0625 1.4375 17.9375 2.5 17.9375H17.5C18.5625 17.9375 19.4375 17.0625 19.4375 16V10.375C19.4375 10.0313 19.125 9.6875 18.75 9.6875Z"
                fill=""
              />
              <path
                d="M9.28125 11.9688C9.46875 12.1563 9.75 12.2813 10 12.2813C10.25 12.2813 10.5312 12.1875 10.7187 12L13.6875 9.0625C13.9687 8.78125 13.9687 8.34375 13.6875 8.0625C13.4062 7.78125 12.9687 7.78125 12.6875 8.0625L10.7187 10.0312V0.71875C10.7187 0.34375 10.4062 0.03125 10.0312 0.03125C9.65625 0.03125 9.34375 0.34375 9.34375 0.71875V10.0312L7.375 8.0625C7.09375 7.78125 6.65625 7.78125 6.375 8.0625C6.09375 8.34375 6.09375 8.78125 6.375 9.0625L9.28125 11.9688Z"
                fill=""
              />
            </svg>
            Inbox
          </a>
        </li>
        <!-- Menu Item Inbox -->

        <!-- Menu Item Calendar -->
        <li>
          <a
            class="nr h un lc mg sg qh gp dp nl rl _q qq"
            href="calendar.html"
            @click="selected = (selected === 'Calendar' ? '':'Calendar')"
            :class="{ 'eo oj': (selected === 'Calendar') && (page === 'calendar') }"
          >
            <svg
              class="hk"
              width="20"
              height="20"
              viewBox="0 0 20 20"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M17.1875 3.3125H15.875V2.625C15.875 2.25 15.5625 1.90625 15.1562 1.90625C14.75 1.90625 14.4375 2.21875 14.4375 2.625V3.3125H5.53125V2.625C5.53125 2.25 5.21875 1.90625 4.8125 1.90625C4.40625 1.90625 4.09375 2.21875 4.09375 2.625V3.3125H2.8125C1.5625 3.3125 0.53125 4.34375 0.53125 5.59375V15.8438C0.53125 17.0938 1.5625 18.125 2.8125 18.125H17.1875C18.4375 18.125 19.4687 17.0938 19.4687 15.8438V5.5625C19.4687 4.3125 18.4375 3.3125 17.1875 3.3125ZM2.8125 4.71875H4.125V5C4.125 5.375 4.4375 5.71875 4.84375 5.71875C5.25 5.71875 5.5625 5.40625 5.5625 5V4.71875H14.5V5C14.5 5.375 14.8125 5.71875 15.2188 5.71875C15.625 5.71875 15.9375 5.40625 15.9375 5V4.71875H17.1875C17.6562 4.71875 18.0625 5.09375 18.0625 5.59375V7.34375H1.96875V5.59375C1.96875 5.09375 2.34375 4.71875 2.8125 4.71875ZM17.1875 16.6875H2.8125C2.34375 16.6875 1.9375 16.3125 1.9375 15.8125V8.75H18.0312V15.8438C18.0625 16.3125 17.6562 16.6875 17.1875 16.6875Z"
                fill="#"
              />
              <path
                d="M12.125 10.4687L9.40625 13.1875L8.53125 12.3125C8.25 12.0313 7.8125 12.0313 7.53125 12.3125C7.25 12.5938 7.25 13.0312 7.53125 13.3125L8.90625 14.6875C9.03125 14.8125 9.21875 14.9062 9.40625 14.9062C9.59375 14.9062 9.78125 14.8437 9.90625 14.6875L13.125 11.4688C13.4062 11.1875 13.4062 10.75 13.125 10.4687C12.8437 10.1875 12.4062 10.1875 12.125 10.4687Z"
                fill="#"
              />
            </svg>
            Calendar
          </a>
        </li>
        <!-- Menu Item Calendar -->

        <!-- Menu Item Profile -->
        <li>
          <a
            class="nr h un lc mg sg qh gp dp nl rl _q qq"
            href="profile.html"
            @click="selected = (selected === 'Profile' ? '':'Profile')"
            :class="{ 'eo oj': (selected === 'Profile') && (page === 'profile') }"
            :class="page === 'profile' && 'eo oj'"
          >
            <svg
              class="hk"
              width="16"
              height="20"
              viewBox="0 0 16 20"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M13.375 10.625C12.4375 9.5 11.25 8.71875 9.9375 8.3125C11.25 7.625 12.125 6.25 12.125 4.65625C12.125 2.375 10.2813 0.5 7.96875 0.5C5.65625 0.5 3.84375 2.40625 3.84375 4.6875C3.84375 6.25 4.71875 7.625 6.03125 8.34375C4.71875 8.75 3.5625 9.53125 2.59375 10.6562C1.21875 12.2812 0.4375 14.5313 0.40625 17C0.40625 17.2813 0.5625 17.5313 0.78125 17.625C1.625 18.0625 4.6875 19.4375 7.96875 19.4375C11.5313 19.4375 14.375 18.0313 15.1875 17.5938C15.4062 17.4688 15.5625 17.2188 15.5625 16.9688C15.5312 14.5313 14.75 12.2813 13.375 10.625ZM8 1.96875C9.5 1.96875 10.75 3.1875 10.75 4.71875C10.75 6.25 9.53125 7.46875 8 7.46875C6.46875 7.46875 5.25 6.25 5.25 4.71875C5.25 3.1875 6.5 1.96875 8 1.96875ZM8 18.0625C5.40625 18.0625 2.875 17.0625 1.84375 16.5625C1.96875 14.5938 2.59375 12.8438 3.6875 11.5313C4.8125 10.1875 6.34375 9.4375 8 9.4375C9.65625 9.4375 11.1875 10.1875 12.3125 11.5313C13.4062 12.8125 14.0625 14.5938 14.1562 16.5625C13.1875 17.0625 10.8125 18.0625 8 18.0625Z"
                fill=""
              />
            </svg>
            Profile
          </a>
        </li>
        <!-- Menu Item Profile -->

        <!-- Menu Item Settings -->
        <li>
          <a
            class="nr h un lc mg sg qh gp dp nl rl _q qq"
            href="{{route('chefd.setting')}}"
            @click="selected = (selected === 'Settings' ? '':'Settings')"
            :class="{ 'eo oj': (selected === 'Settings') && (page === 'settings') }"
            :class="page === 'settings' && 'eo oj'"
          >
            <svg
              class="hk"
              width="20"
              height="20"
              viewBox="0 0 20 20"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M18.9687 8.0625C18.6562 7.71875 18.2187 7.53125 17.75 7.53125H17.6562C17.5 7.53125 17.375 7.4375 17.3437 7.3125C17.3125 7.1875 17.25 7.09375 17.2187 6.96875C17.1562 6.84375 17.2187 6.71875 17.3125 6.625L17.375 6.5625C17.7187 6.25 17.9062 5.8125 17.9062 5.34375C17.9062 4.875 17.75 4.4375 17.4062 4.09375L16.1875 2.84375C15.5312 2.15625 14.4062 2.125 13.7187 2.8125L13.625 2.875C13.5312 2.96875 13.375 3 13.2187 2.9375C13.0937 2.875 12.9687 2.8125 12.8125 2.78125C12.6562 2.71875 12.5625 2.59375 12.5625 2.46875V2.3125C12.5625 1.34375 11.7812 0.5625 10.8125 0.5625H9.06249C8.59374 0.5625 8.15624 0.75 7.84374 1.0625C7.49999 1.40625 7.34374 1.84375 7.34374 2.28125V2.40625C7.34374 2.53125 7.24999 2.65625 7.12499 2.71875C7.06249 2.75 7.03124 2.75 6.96874 2.78125C6.84374 2.84375 6.68749 2.8125 6.59374 2.71875L6.53124 2.625C6.21874 2.28125 5.78124 2.09375 5.31249 2.09375C4.84374 2.09375 4.40624 2.25 4.06249 2.59375L2.81249 3.8125C2.12499 4.46875 2.09374 5.59375 2.78124 6.28125L2.84374 6.375C2.93749 6.46875 2.96874 6.625 2.90624 6.71875C2.84374 6.84375 2.81249 6.9375 2.74999 7.0625C2.68749 7.1875 2.59374 7.25 2.43749 7.25H2.34374C1.87499 7.25 1.43749 7.40625 1.09374 7.75C0.74999 8.0625 0.56249 8.5 0.56249 8.96875L0.53124 10.7188C0.49999 11.6875 1.28124 12.4688 2.24999 12.5H2.34374C2.49999 12.5 2.62499 12.5938 2.65624 12.7188C2.71874 12.8125 2.78124 12.9063 2.81249 13.0313C2.84374 13.1563 2.81249 13.2812 2.71874 13.375L2.65624 13.4375C2.31249 13.75 2.12499 14.1875 2.12499 14.6563C2.12499 15.125 2.28124 15.5625 2.62499 15.9063L3.84374 17.1563C4.49999 17.8438 5.62499 17.875 6.31249 17.1875L6.40624 17.125C6.49999 17.0312 6.65624 17 6.81249 17.0625C6.93749 17.125 7.06249 17.1875 7.21874 17.2187C7.37499 17.2812 7.46874 17.4062 7.46874 17.5312V17.6563C7.46874 18.625 8.24999 19.4062 9.21874 19.4062H10.9687C11.9375 19.4062 12.7187 18.625 12.7187 17.6563V17.5312C12.7187 17.4062 12.8125 17.2812 12.9375 17.2187C13 17.1875 13.0312 17.1875 13.0937 17.1563C13.25 17.0938 13.375 17.125 13.4687 17.2187L13.5312 17.3125C13.8437 17.6563 14.2812 17.8437 14.75 17.8437C15.2187 17.8437 15.6562 17.6875 16 17.3438L17.25 16.125C17.9375 15.4687 17.9687 14.3438 17.2812 13.6563L17.2187 13.5625C17.125 13.4688 17.0937 13.3125 17.1562 13.2188C17.2187 13.0937 17.25 13 17.3125 12.875C17.375 12.75 17.5 12.6875 17.625 12.6875H17.7187H17.75C18.6875 12.6875 19.4687 11.9375 19.5 10.9687L19.5312 9.21875C19.4687 8.84375 19.2812 8.375 18.9687 8.0625ZM18.0312 11C18.0312 11.1875 17.875 11.3438 17.6875 11.3438H17.5937H17.5625C16.8437 11.3438 16.1875 11.7813 15.9375 12.4063C15.9062 12.5 15.8437 12.5937 15.8125 12.6875C15.5312 13.3125 15.6562 14.0938 16.1562 14.5938L16.2187 14.6875C16.3437 14.8125 16.3437 15.0313 16.2187 15.1563L14.9687 16.375C14.875 16.4688 14.7812 16.4688 14.7187 16.4688C14.6562 16.4688 14.5625 16.4688 14.4687 16.375L14.4062 16.2812C13.9062 15.75 13.1562 15.5938 12.4687 15.9063L12.3437 15.9687C11.6562 16.25 11.2187 16.875 11.2187 17.5938V17.7188C11.2187 17.9063 11.0625 18.0625 10.875 18.0625H9.12499C8.93749 18.0625 8.78124 17.9063 8.78124 17.7188V17.5938C8.78124 16.875 8.34374 16.2187 7.65624 15.9687C7.56249 15.9375 7.43749 15.875 7.34374 15.8438C7.09374 15.7188 6.84374 15.6875 6.59374 15.6875C6.15624 15.6875 5.71874 15.8437 5.37499 16.1875L5.31249 16.2188C5.18749 16.3438 4.96874 16.3438 4.84374 16.2188L3.62499 14.9688C3.53124 14.875 3.53124 14.7812 3.53124 14.7187C3.53124 14.6562 3.53124 14.5625 3.62499 14.4688L3.68749 14.4062C4.21874 13.9062 4.37499 13.125 4.09374 12.5C4.06249 12.4063 4.03124 12.3125 3.96874 12.2187C3.71874 11.5625 3.09374 11.0938 2.37499 11.0938H2.28124C2.09374 11.0938 1.93749 10.9375 1.93749 10.75L1.96874 9C1.96874 8.875 2.03124 8.8125 2.06249 8.75C2.09374 8.71875 2.18749 8.65625 2.31249 8.65625H2.40624C3.12499 8.6875 3.78124 8.25 4.06249 7.59375C4.09374 7.5 4.15624 7.40625 4.18749 7.3125C4.46874 6.6875 4.34374 5.90625 3.84374 5.40625L3.78124 5.3125C3.65624 5.1875 3.65624 4.96875 3.78124 4.84375L5.03124 3.625C5.12499 3.53125 5.21874 3.53125 5.28124 3.53125C5.34374 3.53125 5.43749 3.53125 5.53124 3.625L5.59374 3.71875C6.09374 4.25 6.84374 4.40625 7.53124 4.125L7.65624 4.0625C8.34374 3.78125 8.78124 3.15625 8.78124 2.4375V2.3125C8.78124 2.1875 8.84374 2.125 8.87499 2.0625C8.90624 2 8.99999 1.96875 9.12499 1.96875H10.875C11.0625 1.96875 11.2187 2.125 11.2187 2.3125V2.4375C11.2187 3.15625 11.6562 3.8125 12.3437 4.0625C12.4375 4.09375 12.5625 4.15625 12.6562 4.1875C13.3125 4.5 14.0937 4.375 14.625 3.875L14.7187 3.8125C14.8437 3.6875 15.0625 3.6875 15.1875 3.8125L16.4062 5.0625C16.5 5.15625 16.5 5.25 16.5 5.3125C16.5 5.375 16.4687 5.46875 16.4062 5.5625L16.3437 5.625C15.7812 6.09375 15.625 6.875 15.875 7.5C15.9062 7.59375 15.9375 7.6875 16 7.78125C16.25 8.4375 16.875 8.90625 17.5937 8.90625H17.6875C17.8125 8.90625 17.875 8.96875 17.9375 9C18 9.03125 18.0312 9.125 18.0312 9.25V11Z"
                fill=""
              />
              <path
                d="M10 5.75C7.65625 5.75 5.75 7.65625 5.75 10C5.75 12.3438 7.65625 14.25 10 14.25C12.3438 14.25 14.25 12.3438 14.25 10C14.25 7.65625 12.3438 5.75 10 5.75ZM10 12.8437C8.4375 12.8437 7.15625 11.5625 7.15625 10C7.15625 8.4375 8.4375 7.15625 10 7.15625C11.5625 7.15625 12.8437 8.4375 12.8437 10C12.8437 11.5625 11.5625 12.8437 10 12.8437Z"
                fill=""
              />
            </svg>
            Settings
          </a>
        </li>
        <!-- Menu Item Settings -->
      </ul>

      <!-- Menu Divider -->
      <span class="jc _c yj ds/20 za"></span>
      <!-- Menu Divider -->

      
    </nav>
    <!-- Sidebar Menu -->
  </aside>

        <!-- ===== Sidebar End ===== -->

        <!-- ===== Header Start ===== -->
        <header
    class="f q r lc yd nj xr hp dp oa"
    :class="{ 'iw' : stickyMenu }"
    @scroll.window="stickyMenu = (window.pageYOffset > 20) ? true : false"
  >
    <!-- Site Logo Start -->
    <div
      class="lc mg qo rv yu ml rl fv"
    >
      <a class="lc mg zg" href="{{route('chefd.dashboard')}}">
        <img
          class="vr"
          src="src/images/logo/logo-light.svg"
          alt="Logo"
        />
        <img
          class="pc ur"
          src="src/images/logo/logo-dark.svg"
          alt="Logo"
        />

        <span class="pc tu lo gs bc">
          <svg class="hk" width="118" height="25" viewBox="0 0 118 25" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0.320007 4.77941H7.08207V24.1492H11.1267V4.77941H17.8887V1.05079H0.320007V4.77941Z" fill=""/>
            <path d="M22.4029 24.56C24.8359 24.56 26.953 23.4541 27.6166 21.8425L27.901 24.1492H31.282V14.6697C31.282 10.3407 28.6909 8.06564 24.4883 8.06564C20.2542 8.06564 17.4735 10.2775 17.4735 13.6586H20.7597C20.7597 12.0154 22.0237 11.0675 24.2988 11.0675C26.2579 11.0675 27.5218 11.9206 27.5218 14.0377V14.3853L22.8452 14.7329C19.1482 15.0173 17.0627 16.8184 17.0627 19.6939C17.0627 22.6325 19.085 24.56 22.4029 24.56ZM23.6668 21.653C21.9289 21.653 20.9809 20.9578 20.9809 19.5359C20.9809 18.2719 21.8973 17.482 24.2988 17.2608L27.5534 17.008V17.8296C27.5534 20.231 26.0367 21.653 23.6668 21.653Z" fill=""/>
            <path d="M36.9966 5.41137C38.2606 5.41137 39.3033 4.36863 39.3033 3.07309C39.3033 1.77756 38.2606 0.766409 36.9966 0.766409C35.6695 0.766409 34.6267 1.77756 34.6267 3.07309C34.6267 4.36863 35.6695 5.41137 36.9966 5.41137ZM35.0691 24.1492H38.9241V8.53962H35.0691V24.1492Z" fill=""/>
            <path d="M46.7936 24.1492V0.640015H42.9702V24.1492H46.7936Z" fill=""/>
            <path d="M57.2519 24.56C59.6218 24.56 61.6441 23.5173 62.5921 21.7162L62.8449 24.1492H66.3839V0.640015H62.5605V10.5303C61.5809 8.982 59.6534 8.06564 57.4731 8.06564C52.765 8.06564 49.9211 11.5415 49.9211 16.4076C49.9211 21.2422 52.7334 24.56 57.2519 24.56ZM58.1051 21.021C55.4192 21.021 53.7761 19.0619 53.7761 16.2812C53.7761 13.5006 55.4192 11.5099 58.1051 11.5099C60.791 11.5099 62.5289 13.469 62.5289 16.2812C62.5289 19.0935 60.791 21.021 58.1051 21.021Z" fill=""/>
            <path d="M75.0463 24.56C77.4794 24.56 79.5965 23.4541 80.26 21.8425L80.5444 24.1492H83.9254V14.6697C83.9254 10.3407 81.3344 8.06564 77.1318 8.06564C72.8976 8.06564 70.1169 10.2775 70.1169 13.6586H73.4032C73.4032 12.0154 74.6671 11.0675 76.9422 11.0675C78.9013 11.0675 80.1652 11.9206 80.1652 14.0377V14.3853L75.4887 14.7329C71.7917 15.0173 69.7062 16.8184 69.7062 19.6939C69.7062 22.6325 71.7285 24.56 75.0463 24.56ZM76.3102 21.653C74.5723 21.653 73.6244 20.9578 73.6244 19.5359C73.6244 18.2719 74.5407 17.482 76.9422 17.2608L80.1968 17.008V17.8296C80.1968 20.231 78.6801 21.653 76.3102 21.653Z" fill=""/>
            <path d="M86.5118 19.4095C86.5118 22.4745 88.9765 24.56 92.8631 24.56C96.7181 24.56 99.404 22.6009 99.404 19.4411C99.404 17.0396 98.0769 15.8389 95.4542 15.2385L92.6419 14.5749C91.3148 14.2589 90.6196 13.6902 90.6196 12.8054C90.6196 11.6363 91.5044 10.9411 93.0211 10.9411C94.5062 10.9411 95.391 11.7943 95.4226 13.1214H99.088C99.0564 10.0879 96.6865 8.06564 93.1791 8.06564C89.5769 8.06564 86.9858 9.89835 86.9858 12.9634C86.9858 15.4597 88.3445 16.7868 91.1568 17.4188L93.9691 18.0823C95.3594 18.3983 95.7702 18.9671 95.7702 19.7571C95.7702 20.8946 94.7906 21.6214 92.9895 21.6214C91.22 21.6214 90.2088 20.7682 90.1772 19.4095H86.5118Z" fill=""/>
            <path d="M106.194 24.1492V15.6177C106.194 13.2794 107.616 11.5731 110.049 11.5731C112.008 11.5731 113.304 12.837 113.304 15.4597V24.1492H117.159V14.5433C117.159 10.4987 115.137 8.06564 111.282 8.06564C109.038 8.06564 107.205 9.04519 106.226 10.5619V0.640015H102.339V24.1492H106.194Z" fill=""/>
          </svg>
        </span>
      </a>
    </div>
    <!-- Site Logo End -->

    <div
      class="lc xf mg og _s qo ml rl hu 2xl:ud-px-11"
    >
      <div class="pc rs">
        <form action="https://formbold.com/s/unique_form_id" method="POST">
          <div class="h">
            <button class="g -ud-translate-y-1/2 j/2 q">
              <svg
                class="mk fs yq ms"
                width="20"
                height="20"
                viewBox="0 0 20 20"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M9.16666 3.33332C5.945 3.33332 3.33332 5.945 3.33332 9.16666C3.33332 12.3883 5.945 15 9.16666 15C12.3883 15 15 12.3883 15 9.16666C15 5.945 12.3883 3.33332 9.16666 3.33332ZM1.66666 9.16666C1.66666 5.02452 5.02452 1.66666 9.16666 1.66666C13.3088 1.66666 16.6667 5.02452 16.6667 9.16666C16.6667 13.3088 13.3088 16.6667 9.16666 16.6667C5.02452 16.6667 1.66666 13.3088 1.66666 9.16666Z"
                  fill=""
                />
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M13.2857 13.2857C13.6112 12.9603 14.1388 12.9603 14.4642 13.2857L18.0892 16.9107C18.4147 17.2362 18.4147 17.7638 18.0892 18.0892C17.7638 18.4147 17.2362 18.4147 16.9107 18.0892L13.2857 14.4642C12.9603 14.1388 12.9603 13.6112 13.2857 13.2857Z"
                  fill=""
                />
              </svg>
            </button>

            <input
              type="text"
              placeholder="Type to search..."
              class="yd tj gr rm sm"
            />
          </div>
        </form>
      </div>

      <div class="lc mg _g">
        <ul class="lc mg vg">
          <li>
            <!-- Dark Mode Toggler -->
            <label class="jc ua h">
              <input
                type="checkbox"
                :value="darkMode"
                @change="darkMode = !darkMode"
                class="cg yd vc oo g r ra ua"
              />
              <img
                class="vr"
                src="src/images/icon/icon-sun.svg"
                alt="Sun"
              />
              <img
                class="pc ur"
                src="src/images/icon/icon-moon.svg"
                alt="Moon"
              />
            </label>
            <!-- Dark Mode Toggler -->
          </li>

          <li>
            <a class="h" href="#">
              <svg
                class="mk yq gp dp"
                width="22"
                height="22"
                viewBox="0 0 22 22"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M4.58398 4.58333C4.07772 4.58333 3.66732 4.99374 3.66732 5.5V18.3333C3.66732 18.8396 4.07772 19.25 4.58398 19.25H17.4173C17.9236 19.25 18.334 18.8396 18.334 18.3333V5.5C18.334 4.99374 17.9236 4.58333 17.4173 4.58333H4.58398ZM1.83398 5.5C1.83398 3.98122 3.0652 2.75 4.58398 2.75H17.4173C18.9361 2.75 20.1673 3.98122 20.1673 5.5V18.3333C20.1673 19.8521 18.9361 21.0833 17.4173 21.0833H4.58398C3.0652 21.0833 1.83398 19.8521 1.83398 18.3333V5.5Z"
                  fill=""
                />
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M14.6667 0.916504C15.1729 0.916504 15.5833 1.32691 15.5833 1.83317V5.49984C15.5833 6.0061 15.1729 6.4165 14.6667 6.4165C14.1604 6.4165 13.75 6.0061 13.75 5.49984V1.83317C13.75 1.32691 14.1604 0.916504 14.6667 0.916504Z"
                  fill=""
                />
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M7.33268 0.916504C7.83894 0.916504 8.24935 1.32691 8.24935 1.83317V5.49984C8.24935 6.0061 7.83894 6.4165 7.33268 6.4165C6.82642 6.4165 6.41602 6.0061 6.41602 5.49984V1.83317C6.41602 1.32691 6.82642 0.916504 7.33268 0.916504Z"
                  fill=""
                />
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M1.83398 9.16667C1.83398 8.66041 2.24439 8.25 2.75065 8.25H19.2506C19.7569 8.25 20.1673 8.66041 20.1673 9.16667C20.1673 9.67293 19.7569 10.0833 19.2506 10.0833H2.75065C2.24439 10.0833 1.83398 9.67293 1.83398 9.16667Z"
                  fill=""
                />
              </svg>
            </a>
          </li>

          <!-- Notification Menu Area -->
          <li class="h" x-data="{ dropdownOpen: false }" @click.outside="dropdownOpen = false">
            <a
              class="h"
              href="#"
              @click.prevent="dropdownOpen = ! dropdownOpen"
            >
              <span
                class="g -ud-top-0.5 m he dd th ck sa"
              >
                <span
                  class="bg g nc vc yd th ck po -ud-z-1"
                ></span>
              </span>

              <svg
                class="mk yq gp dp"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M7.05033 3.05025C8.36309 1.7375 10.1436 1 12.0001 1C13.8566 1 15.6371 1.7375 16.9498 3.05025C18.2626 4.36301 19.0001 6.14349 19.0001 8C19.0001 11.3527 19.7171 13.4346 20.378 14.6461C20.7098 15.2544 21.0329 15.6535 21.2573 15.8904C21.3698 16.0091 21.4581 16.0878 21.5114 16.1322C21.538 16.1544 21.5558 16.168 21.5635 16.1737C21.5647 16.1746 21.5657 16.1753 21.5664 16.1758C21.9249 16.4221 22.0835 16.8725 21.9572 17.2898C21.8295 17.7115 21.4407 18 21.0001 18H3.00008C2.55941 18 2.17068 17.7115 2.04299 17.2898C1.91664 16.8725 2.07528 16.4221 2.43377 16.1758C2.43447 16.1753 2.43542 16.1746 2.43663 16.1737C2.44432 16.168 2.46218 16.1544 2.4888 16.1322C2.54202 16.0878 2.6304 16.0091 2.74288 15.8904C2.9673 15.6535 3.29039 15.2544 3.62218 14.6461C4.28301 13.4346 5.00008 11.3527 5.00008 8C5.00008 6.14348 5.73758 4.36301 7.05033 3.05025ZM2.44388 16.169C2.44395 16.1689 2.44403 16.1688 2.44411 16.1688C2.44411 16.1688 2.4441 16.1688 2.4441 16.1688L2.44388 16.169ZM5.1494 16H18.8508C18.7747 15.8753 18.6983 15.7434 18.6222 15.6039C17.783 14.0654 17.0001 11.6473 17.0001 8C17.0001 6.67392 16.4733 5.40215 15.5356 4.46447C14.5979 3.52678 13.3262 3 12.0001 3C10.674 3 9.40223 3.52678 8.46454 4.46447C7.52686 5.40215 7.00008 6.67392 7.00008 8C7.00008 11.6473 6.21715 14.0654 5.37797 15.6039C5.30188 15.7434 5.22549 15.8753 5.1494 16Z"
                  fill=""
                />
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M9.76792 20.1352C10.2457 19.858 10.8576 20.0207 11.1347 20.4984C11.2226 20.6499 11.3488 20.7757 11.5006 20.8632C11.6524 20.9506 11.8245 20.9966 11.9997 20.9966C12.1749 20.9966 12.347 20.9506 12.4988 20.8632C12.6506 20.7757 12.7768 20.6499 12.8647 20.4984C13.1418 20.0207 13.7537 19.858 14.2315 20.1352C14.7092 20.4123 14.8718 21.0242 14.5947 21.5019C14.331 21.9566 13.9525 22.3339 13.497 22.5962C13.0416 22.8586 12.5253 22.9966 11.9997 22.9966C11.4741 22.9966 10.9578 22.8586 10.5024 22.5962C10.0469 22.3339 9.66841 21.9566 9.4047 21.5019C9.12758 21.0242 9.2902 20.4123 9.76792 20.1352Z"
                  fill="#"
                />
              </svg>
            </a>

            <!-- Dropdown Start -->
            <div
              x-show="dropdownOpen"
              class="a nj xr dc -ud-right-30 sm:-ud-right-8.5 ve vs od"
            >
            <div class="vi bj wr vl ql">
              <h5 class="tn sn zn gs">
                Notifications (02)
              </h5>
            </div>

            <ul class="lc hg tg ph ip pd rl ym fn">
              <li class="nr cg h lc mg qg vg qh sq js yk">
                <a class="lc mg ug" href="#">
                  <div class="wf">
                    <img src="src/images/user/user-03.png" alt="User" />
                  </div>

                  <div>
                    <p class="mn zn gs fc">
                      <span class="tn">Mahmudul added</span>
                      to his favorite list
                      <span class="tn">Leather Belt Steve Madden</span>
                    </p>
                    <span class="un mn _n">12 min ago.</span>
                  </div>
                </a>
                <div class="lc mg">
                  <div x-data="{openDropDown: false}" class="h">
                    <button
                      @click="openDropDown = !openDropDown"
                      @click.outside="openDropDown = false"
                      class="lc mg pg"
                      >
                      <svg class="hk" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_4662_3241)">
                        <path d="M8.75 12.25C8.75 11.2835 7.9665 10.5 7 10.5C6.0335 10.5 5.25 11.2835 5.25 12.25C5.25 13.2165 6.0335 14 7 14C7.9665 14 8.75 13.2165 8.75 12.25Z" fill=""/>
                        <path d="M8.75 7C8.75 6.0335 7.9665 5.25 7 5.25C6.0335 5.25 5.25 6.0335 5.25 7C5.25 7.9665 6.0335 8.75 7 8.75C7.9665 8.75 8.75 7.9665 8.75 7Z" fill=""/>
                        <path d="M8.75 1.75C8.75 0.783502 7.9665 1.19677e-07 7 1.61924e-07C6.0335 2.04171e-07 5.25 0.783502 5.25 1.75C5.25 2.7165 6.0335 3.5 7 3.5C7.9665 3.5 8.75 2.7165 8.75 1.75Z" fill=""/>
                        </g>
                        <defs>
                        <clipPath id="clip0_4662_3241">
                        <rect width="14" height="14" fill="white" transform="translate(0 14) rotate(-90)"/>
                        </clipPath>
                        </defs>
                      </svg>
                    </button>

                      <div
                      class="or pr qr g m n oa we eh sh so nj xr ni bj wr vk gc"
                      x-show="openDropDown"
                      >
                        <button class="yd sh ol ll gn mn tq js">Mark As Unread</button>
                        <button class="yd sh ol ll gn mn tq js">Delete Notification</button>
                        <button class="yd sh ol ll gn mn tq js">Block Notification</button>
                      </div>
                  </div>
                </div>
              </li>
              <li class="nr cg h lc mg qg vg qh sq js yk">
                <a class="lc mg ug" href="#">
                  <div class="wf">
                    <img src="src/images/user/user-02.png" alt="User" />
                  </div>

                  <div>
                    <p class="mn zn gs fc">
                      <span class="tn">Labonno</span>
                      leave her comment to Dressni
                      <span class="tn">Breathable Female Dress</span>
                    </p>
                    <span class="un mn _n">25 min ago.</span>
                  </div>
                </a>
                <div class="lc mg">
                  <div x-data="{openDropDown: false}" class="h">
                    <button
                      @click="openDropDown = !openDropDown"
                      @click.outside="openDropDown = false"
                      class="lc mg pg"
                      >
                      <svg class="hk" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_4662_3241)">
                        <path d="M8.75 12.25C8.75 11.2835 7.9665 10.5 7 10.5C6.0335 10.5 5.25 11.2835 5.25 12.25C5.25 13.2165 6.0335 14 7 14C7.9665 14 8.75 13.2165 8.75 12.25Z" fill=""/>
                        <path d="M8.75 7C8.75 6.0335 7.9665 5.25 7 5.25C6.0335 5.25 5.25 6.0335 5.25 7C5.25 7.9665 6.0335 8.75 7 8.75C7.9665 8.75 8.75 7.9665 8.75 7Z" fill=""/>
                        <path d="M8.75 1.75C8.75 0.783502 7.9665 1.19677e-07 7 1.61924e-07C6.0335 2.04171e-07 5.25 0.783502 5.25 1.75C5.25 2.7165 6.0335 3.5 7 3.5C7.9665 3.5 8.75 2.7165 8.75 1.75Z" fill=""/>
                        </g>
                        <defs>
                        <clipPath id="clip0_4662_3241">
                        <rect width="14" height="14" fill="white" transform="translate(0 14) rotate(-90)"/>
                        </clipPath>
                        </defs>
                      </svg>
                    </button>

                      <div
                      class="or pr qr g m n oa we eh sh so nj xr ni bj wr vk gc"
                      x-show="openDropDown"
                      >
                        <button class="yd sh ol ll gn mn tq js">Mark As Unread</button>
                        <button class="yd sh ol ll gn mn tq js">Delete Notification</button>
                        <button class="yd sh ol ll gn mn tq js">Block Notification</button>
                      </div>
                  </div>
                </div>
              </li>
              <li class="nr cg h lc mg qg vg qh sq js yk">
                <a class="lc mg ug" href="#">
                  <div class="wf">
                    <img src="src/images/user/user-03.png" alt="User" />
                  </div>

                  <div>
                    <p class="mn zn gs fc">
                      <span class="tn">Tahmina</span>
                      announce to 50% discoun
                      <span class="tn">New Exclusive Long Kurti</span>
                    </p>
                    <span class="un mn _n">45 min ago.</span>
                  </div>
                </a>
                <div class="lc mg">
                  <div x-data="{openDropDown: false}" class="h">
                    <button
                      @click="openDropDown = !openDropDown"
                      @click.outside="openDropDown = false"
                      class="lc mg pg"
                      >
                      <svg class="hk" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_4662_3241)">
                        <path d="M8.75 12.25C8.75 11.2835 7.9665 10.5 7 10.5C6.0335 10.5 5.25 11.2835 5.25 12.25C5.25 13.2165 6.0335 14 7 14C7.9665 14 8.75 13.2165 8.75 12.25Z" fill=""/>
                        <path d="M8.75 7C8.75 6.0335 7.9665 5.25 7 5.25C6.0335 5.25 5.25 6.0335 5.25 7C5.25 7.9665 6.0335 8.75 7 8.75C7.9665 8.75 8.75 7.9665 8.75 7Z" fill=""/>
                        <path d="M8.75 1.75C8.75 0.783502 7.9665 1.19677e-07 7 1.61924e-07C6.0335 2.04171e-07 5.25 0.783502 5.25 1.75C5.25 2.7165 6.0335 3.5 7 3.5C7.9665 3.5 8.75 2.7165 8.75 1.75Z" fill=""/>
                        </g>
                        <defs>
                        <clipPath id="clip0_4662_3241">
                        <rect width="14" height="14" fill="white" transform="translate(0 14) rotate(-90)"/>
                        </clipPath>
                        </defs>
                      </svg>
                    </button>

                      <div
                      class="or pr qr g m n oa we eh sh so nj xr ni bj wr vk gc"
                      x-show="openDropDown"
                      >
                        <button class="yd sh ol ll gn mn tq js">Mark As Unread</button>
                        <button class="yd sh ol ll gn mn tq js">Delete Notification</button>
                        <button class="yd sh ol ll gn mn tq js">Block Notification</button>
                      </div>
                  </div>
                </div>
              </li>
              <li class="nr cg h lc mg qg vg qh sq js yk">
                <a class="lc mg ug" href="#">
                  <div class="wf">
                    <img src="src/images/user/user-02.png" alt="User" />
                  </div>

                  <div>
                    <p class="mn zn gs fc">
                      <span class="tn">Mahmudul added</span>
                      to his favorite list
                      <span class="tn">Leather Belt Steve Madden</span>
                    </p>
                    <span class="un mn _n">12 min ago.</span>
                  </div>
                </a>
                <div class="lc mg">
                  <div x-data="{openDropDown: false}" class="h">
                    <button
                      @click="openDropDown = !openDropDown"
                      @click.outside="openDropDown = false"
                      class="lc mg pg"
                      >
                      <svg class="hk" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_4662_3241)">
                        <path d="M8.75 12.25C8.75 11.2835 7.9665 10.5 7 10.5C6.0335 10.5 5.25 11.2835 5.25 12.25C5.25 13.2165 6.0335 14 7 14C7.9665 14 8.75 13.2165 8.75 12.25Z" fill=""/>
                        <path d="M8.75 7C8.75 6.0335 7.9665 5.25 7 5.25C6.0335 5.25 5.25 6.0335 5.25 7C5.25 7.9665 6.0335 8.75 7 8.75C7.9665 8.75 8.75 7.9665 8.75 7Z" fill=""/>
                        <path d="M8.75 1.75C8.75 0.783502 7.9665 1.19677e-07 7 1.61924e-07C6.0335 2.04171e-07 5.25 0.783502 5.25 1.75C5.25 2.7165 6.0335 3.5 7 3.5C7.9665 3.5 8.75 2.7165 8.75 1.75Z" fill=""/>
                        </g>
                        <defs>
                        <clipPath id="clip0_4662_3241">
                        <rect width="14" height="14" fill="white" transform="translate(0 14) rotate(-90)"/>
                        </clipPath>
                        </defs>
                      </svg>
                    </button>

                      <div
                      class="or pr qr g m n oa we eh sh so nj xr ni bj wr vk gc"
                      x-show="openDropDown"
                      >
                        <button class="yd sh ol ll gn mn tq js">Mark As Unread</button>
                        <button class="yd sh ol ll gn mn tq js">Delete Notification</button>
                        <button class="yd sh ol ll gn mn tq js">Block Notification</button>
                      </div>
                  </div>
                </div>
              </li>
            </ul>

            <div class="g l ra yd ei ti nj xr bj wr yk">
              <a href="#" class="lc mg pg qh un eo oj wq vk">View All Notifications</a>
            </div>
            </div>
            <!-- Dropdown End -->
          </li>
          <!-- Notification Menu Area -->

          <!-- Chat Notification Area -->
          <li class="h" x-data="{ dropdownOpen: false }" @click.outside="dropdownOpen = false">
            <a
              class="h"
              href="#"
              @click.prevent="dropdownOpen = ! dropdownOpen"
            >
              <span
                class="g -ud-top-0.5 -ud-right-0.5 he dd th ck sa"
              >
                <span
                  class="bg g nc vc yd th ck po -ud-z-1"
                ></span>
              </span>

              <svg
                class="mk yq gp dp"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M4 5C3.45228 5 3 5.45228 3 6V18C3 18.5477 3.45228 19 4 19H20C20.5477 19 21 18.5477 21 18V6C21 5.45228 20.5477 5 20 5H4ZM1 6C1 4.34772 2.34772 3 4 3H20C21.6523 3 23 4.34772 23 6V18C23 19.6523 21.6523 21 20 21H4C2.34772 21 1 19.6523 1 18V6Z"
                  fill=""
                />
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M1.18085 5.42662C1.49757 4.97417 2.1211 4.86414 2.57355 5.18085L12.0001 11.7794L21.4266 5.18085C21.8791 4.86414 22.5026 4.97417 22.8193 5.42662C23.136 5.87907 23.026 6.5026 22.5735 6.81932L12.5735 13.8193C12.2292 14.0603 11.7709 14.0603 11.4266 13.8193L1.42662 6.81932C0.974174 6.5026 0.864139 5.87907 1.18085 5.42662Z"
                  fill=""
                />
              </svg>
            </a>

            <!-- Dropdown Start -->
            <div
              x-show="dropdownOpen"
              class="a nj xr dc -ud-right-20 sm:-ud-right-8.5 gq mt ve vs od"
            >
              <div class="vi bj wr vl ql">
                <h5 class="tn sn zn gs">
                  Message (02)
                </h5>
              </div>

              <ul class="lc hg tg ph ip pd rl ym fn">
                <li class="nr cg h lc mg qg qh sq js yk">
                  <a class="lc mg ug" href="#">
                    <div class="h sa wf uk th ni ej">
                      <img src="src/images/user/user-02.png" alt="User" />
                      <span class="g l m xe qd th pi jj xj ra"></span>
                    </div>

                    <div>
                      <h6 class="un zn gs">
                        Craig Baptista
                      </h6>
                      <p class="mn hc">
                        Lorem ipsum has been th...
                      </p>
                    </div>
                  </a>
                  <div class="lc mg tg">
                    <span class="tn nn eo jl kl xh oj">03</span>

                    <div x-data="{openDropDown: false}" class="h">
                      <button
                        @click="openDropDown = !openDropDown"
                        @click.outside="openDropDown = false"
                        class="lc mg pg"
                        >
                        <svg class="hk" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_4662_3241)">
                          <path d="M8.75 12.25C8.75 11.2835 7.9665 10.5 7 10.5C6.0335 10.5 5.25 11.2835 5.25 12.25C5.25 13.2165 6.0335 14 7 14C7.9665 14 8.75 13.2165 8.75 12.25Z" fill=""/>
                          <path d="M8.75 7C8.75 6.0335 7.9665 5.25 7 5.25C6.0335 5.25 5.25 6.0335 5.25 7C5.25 7.9665 6.0335 8.75 7 8.75C7.9665 8.75 8.75 7.9665 8.75 7Z" fill=""/>
                          <path d="M8.75 1.75C8.75 0.783502 7.9665 1.19677e-07 7 1.61924e-07C6.0335 2.04171e-07 5.25 0.783502 5.25 1.75C5.25 2.7165 6.0335 3.5 7 3.5C7.9665 3.5 8.75 2.7165 8.75 1.75Z" fill=""/>
                          </g>
                          <defs>
                          <clipPath id="clip0_4662_3241">
                          <rect width="14" height="14" fill="white" transform="translate(0 14) rotate(-90)"/>
                          </clipPath>
                          </defs>
                        </svg>
                      </button>

                        <div
                        class="or pr qr g m n oa de eh sh so nj xr ni bj wr vk gc"
                        x-show="openDropDown"
                        >
                          <button class="yd sh ol ll gn mn tq js">View Profile</button>
                          <button class="yd sh ol ll gn mn tq js">Mark As Unread</button>
                          <button class="yd sh ol ll gn mn tq js">Delete Message</button>
                          <button class="yd sh ol ll gn mn tq js">Block Message</button>
                        </div>
                    </div>
                  </div>
                </li>
                <li class="nr cg h lc mg qg qh sq js yk">
                  <a class="lc mg ug" href="#">
                    <div class="h sa wf uk th ni ej">
                      <img src="src/images/user/user-03.png" alt="User" />
                      <span class="g l m xe qd th pi jj xj ra"></span>
                    </div>

                    <div>
                      <h6 class="un zn gs">
                        Maren Lipshutz
                      </h6>
                      <p class="mn hc">
                        Lorem ipsum has been th...
                      </p>
                    </div>
                  </a>
                  <div class="lc mg tg">
                    <span class="tn nn eo jl kl xh oj">01</span>

                    <div x-data="{openDropDown: false}" class="h">
                      <button
                        @click="openDropDown = !openDropDown"
                        @click.outside="openDropDown = false"
                        class="lc mg pg"
                        >
                        <svg class="hk" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_4662_3241)">
                          <path d="M8.75 12.25C8.75 11.2835 7.9665 10.5 7 10.5C6.0335 10.5 5.25 11.2835 5.25 12.25C5.25 13.2165 6.0335 14 7 14C7.9665 14 8.75 13.2165 8.75 12.25Z" fill=""/>
                          <path d="M8.75 7C8.75 6.0335 7.9665 5.25 7 5.25C6.0335 5.25 5.25 6.0335 5.25 7C5.25 7.9665 6.0335 8.75 7 8.75C7.9665 8.75 8.75 7.9665 8.75 7Z" fill=""/>
                          <path d="M8.75 1.75C8.75 0.783502 7.9665 1.19677e-07 7 1.61924e-07C6.0335 2.04171e-07 5.25 0.783502 5.25 1.75C5.25 2.7165 6.0335 3.5 7 3.5C7.9665 3.5 8.75 2.7165 8.75 1.75Z" fill=""/>
                          </g>
                          <defs>
                          <clipPath id="clip0_4662_3241">
                          <rect width="14" height="14" fill="white" transform="translate(0 14) rotate(-90)"/>
                          </clipPath>
                          </defs>
                        </svg>
                      </button>

                        <div
                        class="or pr qr g m n oa de eh sh so nj xr ni bj wr vk gc"
                        x-show="openDropDown"
                        >
                          <button class="yd sh ol ll gn mn tq js">View Profile</button>
                          <button class="yd sh ol ll gn mn tq js">Mark As Unread</button>
                          <button class="yd sh ol ll gn mn tq js">Delete Message</button>
                          <button class="yd sh ol ll gn mn tq js">Block Message</button>
                        </div>
                    </div>
                  </div>
                </li>
                <li class="nr cg h lc mg qg qh sq js yk">
                  <a class="lc mg ug" href="#">
                    <div class="h sa wf uk th ni ej">
                      <img src="src/images/user/user-02.png" alt="User" />
                      <span class="g l m xe qd th pi jj sj ra"></span>
                    </div>

                    <div>
                      <h6 class="un zn gs">
                        Craig Baptista
                      </h6>
                      <p class="mn hc">
                        Lorem ipsum has been th...
                      </p>
                    </div>
                  </a>
                  <div class="lc mg tg">
                    <div x-data="{openDropDown: false}" class="h">
                      <button
                        @click="openDropDown = !openDropDown"
                        @click.outside="openDropDown = false"
                        class="lc mg pg"
                        >
                        <svg class="hk" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_4662_3241)">
                          <path d="M8.75 12.25C8.75 11.2835 7.9665 10.5 7 10.5C6.0335 10.5 5.25 11.2835 5.25 12.25C5.25 13.2165 6.0335 14 7 14C7.9665 14 8.75 13.2165 8.75 12.25Z" fill=""/>
                          <path d="M8.75 7C8.75 6.0335 7.9665 5.25 7 5.25C6.0335 5.25 5.25 6.0335 5.25 7C5.25 7.9665 6.0335 8.75 7 8.75C7.9665 8.75 8.75 7.9665 8.75 7Z" fill=""/>
                          <path d="M8.75 1.75C8.75 0.783502 7.9665 1.19677e-07 7 1.61924e-07C6.0335 2.04171e-07 5.25 0.783502 5.25 1.75C5.25 2.7165 6.0335 3.5 7 3.5C7.9665 3.5 8.75 2.7165 8.75 1.75Z" fill=""/>
                          </g>
                          <defs>
                          <clipPath id="clip0_4662_3241">
                          <rect width="14" height="14" fill="white" transform="translate(0 14) rotate(-90)"/>
                          </clipPath>
                          </defs>
                        </svg>
                      </button>

                        <div
                        class="or pr qr g m n oa de eh sh so nj xr ni bj wr vk gc"
                        x-show="openDropDown"
                        >
                          <button class="yd sh ol ll gn mn tq js">View Profile</button>
                          <button class="yd sh ol ll gn mn tq js">Mark As Unread</button>
                          <button class="yd sh ol ll gn mn tq js">Delete Message</button>
                          <button class="yd sh ol ll gn mn tq js">Block Message</button>
                        </div>
                    </div>
                  </div>
                </li>
                <li class="nr cg h lc mg qg qh sq js yk">
                  <a class="lc mg ug" href="#">
                    <div class="h sa wf uk th ni ej">
                      <img src="src/images/user/user-03.png" alt="User" />
                      <span class="g l m xe qd th pi jj xj ra"></span>
                    </div>

                    <div>
                      <h6 class="un zn gs">
                        Craig Baptista
                      </h6>
                      <p class="mn hc">
                        Lorem ipsum has been th...
                      </p>
                    </div>
                  </a>
                  <div class="lc mg tg">
                    <div x-data="{openDropDown: false}" class="h">
                      <button
                        @click="openDropDown = !openDropDown"
                        @click.outside="openDropDown = false"
                        class="lc mg pg"
                        >
                        <svg class="hk" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_4662_3241)">
                          <path d="M8.75 12.25C8.75 11.2835 7.9665 10.5 7 10.5C6.0335 10.5 5.25 11.2835 5.25 12.25C5.25 13.2165 6.0335 14 7 14C7.9665 14 8.75 13.2165 8.75 12.25Z" fill=""/>
                          <path d="M8.75 7C8.75 6.0335 7.9665 5.25 7 5.25C6.0335 5.25 5.25 6.0335 5.25 7C5.25 7.9665 6.0335 8.75 7 8.75C7.9665 8.75 8.75 7.9665 8.75 7Z" fill=""/>
                          <path d="M8.75 1.75C8.75 0.783502 7.9665 1.19677e-07 7 1.61924e-07C6.0335 2.04171e-07 5.25 0.783502 5.25 1.75C5.25 2.7165 6.0335 3.5 7 3.5C7.9665 3.5 8.75 2.7165 8.75 1.75Z" fill=""/>
                          </g>
                          <defs>
                          <clipPath id="clip0_4662_3241">
                          <rect width="14" height="14" fill="white" transform="translate(0 14) rotate(-90)"/>
                          </clipPath>
                          </defs>
                        </svg>
                      </button>

                        <div
                        class="or pr qr g m n oa de eh sh so nj xr ni bj wr vk gc"
                        x-show="openDropDown"
                        >
                          <button class="yd sh ol ll gn mn tq js">View Profile</button>
                          <button class="yd sh ol ll gn mn tq js">Mark As Unread</button>
                          <button class="yd sh ol ll gn mn tq js">Delete Message</button>
                          <button class="yd sh ol ll gn mn tq js">Block Message</button>
                        </div>
                    </div>
                  </div>
                </li>
              </ul>

              <div class="g l ra yd ei ti nj xr bj wr yk">
                <a href="#" class="lc mg pg qh un eo oj wq vk">View All Message</a>
              </div>
            </div>
            <!-- Dropdown End -->
          </li>
          <!-- Chat Notification Area -->
        </ul>

        <!-- User Area -->
        <div class="h" x-data="{ dropdownOpen: false }" @click.outside="dropdownOpen = false">
          <a
            class="lc mg vg"
            href="#"
            @click.prevent="dropdownOpen = ! dropdownOpen"
          >
            <span class="pc tu in">
              <span
                class="jc un mn zn gs"
                >Thomas Anree</span
              >
              <span class="jc nn">UX Designer</span>
            </span>

            <span class="th ni vj bj wr uk">
              <img src="src/images/user/user-01.png" alt="User" />
            </span>

            <svg
              :class="dropdownOpen && 'ag'"
              class="mk fs pc rs hp ep"
              width="12"
              height="8"
              viewBox="0 0 12 8"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M0.410765 0.910734C0.736202 0.585297 1.26384 0.585297 1.58928 0.910734L6.00002 5.32148L10.4108 0.910734C10.7362 0.585297 11.2638 0.585297 11.5893 0.910734C11.9147 1.23617 11.9147 1.76381 11.5893 2.08924L6.58928 7.08924C6.26384 7.41468 5.7362 7.41468 5.41077 7.08924L0.410765 2.08924C0.0853277 1.76381 0.0853277 1.23617 0.410765 0.910734Z"
                fill=""
              />
            </svg>
          </a>

          <!-- Dropdown Start -->
          <div x-show="dropdownOpen" class="a ye m yb">
            <ul class="lc hg ug vi bj wr ql wl">
              <li>
                <a
                  href="#"
                  class="un mn qv lc mg ah gp dp zq"
                >
                  <svg class="hk" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11 9.62499C8.42188 9.62499 6.35938 7.59687 6.35938 5.12187C6.35938 2.64687 8.42188 0.618744 11 0.618744C13.5781 0.618744 15.6406 2.64687 15.6406 5.12187C15.6406 7.59687 13.5781 9.62499 11 9.62499ZM11 2.16562C9.28125 2.16562 7.90625 3.50624 7.90625 5.12187C7.90625 6.73749 9.28125 8.07812 11 8.07812C12.7188 8.07812 14.0938 6.73749 14.0938 5.12187C14.0938 3.50624 12.7188 2.16562 11 2.16562Z" fill=""/>
                    <path d="M17.7719 21.4156H4.2281C3.5406 21.4156 2.9906 20.8656 2.9906 20.1781V17.0844C2.9906 13.7156 5.7406 10.9656 9.10935 10.9656H12.925C16.2937 10.9656 19.0437 13.7156 19.0437 17.0844V20.1781C19.0094 20.8312 18.4594 21.4156 17.7719 21.4156ZM4.53748 19.8687H17.4969V17.0844C17.4969 14.575 15.4344 12.5125 12.925 12.5125H9.07498C6.5656 12.5125 4.5031 14.575 4.5031 17.0844V19.8687H4.53748Z" fill=""/>
                  </svg>
                  My Profile
                </a>
              </li>
              <li>
                <a
                  href="#"
                  class="un mn qv lc mg ah gp dp zq"
                >
                  <svg class="hk" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.6687 1.44374C17.1187 0.893744 16.4312 0.618744 15.675 0.618744H7.42498C6.25623 0.618744 5.25935 1.58124 5.25935 2.78437V4.12499H4.29685C3.88435 4.12499 3.50623 4.46874 3.50623 4.91562C3.50623 5.36249 3.84998 5.70624 4.29685 5.70624H5.25935V10.2781H4.29685C3.88435 10.2781 3.50623 10.6219 3.50623 11.0687C3.50623 11.4812 3.84998 11.8594 4.29685 11.8594H5.25935V16.4312H4.29685C3.88435 16.4312 3.50623 16.775 3.50623 17.2219C3.50623 17.6687 3.84998 18.0125 4.29685 18.0125H5.25935V19.25C5.25935 20.4187 6.22185 21.4156 7.42498 21.4156H15.675C17.2218 21.4156 18.4937 20.1437 18.5281 18.5969V3.47187C18.4937 2.68124 18.2187 1.95937 17.6687 1.44374ZM16.9469 18.5625C16.9469 19.2844 16.3625 19.8344 15.6406 19.8344H7.3906C7.04685 19.8344 6.77185 19.5594 6.77185 19.2156V17.875H8.6281C9.0406 17.875 9.41873 17.5312 9.41873 17.0844C9.41873 16.6375 9.07498 16.2937 8.6281 16.2937H6.77185V11.7906H8.6281C9.0406 11.7906 9.41873 11.4469 9.41873 11C9.41873 10.5875 9.07498 10.2094 8.6281 10.2094H6.77185V5.63749H8.6281C9.0406 5.63749 9.41873 5.29374 9.41873 4.84687C9.41873 4.39999 9.07498 4.05624 8.6281 4.05624H6.77185V2.74999C6.77185 2.40624 7.04685 2.13124 7.3906 2.13124H15.6406C15.9844 2.13124 16.2937 2.26874 16.5687 2.50937C16.8094 2.74999 16.9469 3.09374 16.9469 3.43749V18.5625Z" fill=""/>
                  </svg>
                  My Contacts
                </a>
              </li>
              <li>
                <a
                  href="{{route('chefd.setting')}}"
                  class="un mn qv lc mg ah gp dp zq"
                >
                  <svg class="hk" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20.8656 8.86874C20.5219 8.49062 20.0406 8.28437 19.525 8.28437H19.4219C19.25 8.28437 19.1125 8.18124 19.0781 8.04374C19.0437 7.90624 18.975 7.80312 18.9406 7.66562C18.8719 7.52812 18.9406 7.39062 19.0437 7.28749L19.1125 7.21874C19.4906 6.87499 19.6969 6.39374 19.6969 5.87812C19.6969 5.36249 19.525 4.88124 19.1469 4.50312L17.8062 3.12812C17.0844 2.37187 15.8469 2.33749 15.0906 3.09374L14.9875 3.16249C14.8844 3.26562 14.7125 3.29999 14.5406 3.23124C14.4031 3.16249 14.2656 3.09374 14.0937 3.05937C13.9219 2.99062 13.8187 2.85312 13.8187 2.71562V2.54374C13.8187 1.47812 12.9594 0.618744 11.8937 0.618744H9.96875C9.45312 0.618744 8.97187 0.824994 8.62812 1.16874C8.25 1.54687 8.07812 2.02812 8.07812 2.50937V2.64687C8.07812 2.78437 7.975 2.92187 7.8375 2.99062C7.76875 3.02499 7.73437 3.02499 7.66562 3.05937C7.52812 3.12812 7.35625 3.09374 7.25312 2.99062L7.18437 2.88749C6.84062 2.50937 6.35937 2.30312 5.84375 2.30312C5.32812 2.30312 4.84687 2.47499 4.46875 2.85312L3.09375 4.19374C2.3375 4.91562 2.30312 6.15312 3.05937 6.90937L3.12812 7.01249C3.23125 7.11562 3.26562 7.28749 3.19687 7.39062C3.12812 7.52812 3.09375 7.63124 3.025 7.76874C2.95625 7.90624 2.85312 7.97499 2.68125 7.97499H2.57812C2.0625 7.97499 1.58125 8.14687 1.20312 8.52499C0.824996 8.86874 0.618746 9.34999 0.618746 9.86562L0.584371 11.7906C0.549996 12.8562 1.40937 13.7156 2.475 13.75H2.57812C2.75 13.75 2.8875 13.8531 2.92187 13.9906C2.99062 14.0937 3.05937 14.1969 3.09375 14.3344C3.12812 14.4719 3.09375 14.6094 2.99062 14.7125L2.92187 14.7812C2.54375 15.125 2.3375 15.6062 2.3375 16.1219C2.3375 16.6375 2.50937 17.1187 2.8875 17.4969L4.22812 18.8719C4.95 19.6281 6.1875 19.6625 6.94375 18.9062L7.04687 18.8375C7.15 18.7344 7.32187 18.7 7.49375 18.7687C7.63125 18.8375 7.76875 18.9062 7.94062 18.9406C8.1125 19.0094 8.21562 19.1469 8.21562 19.2844V19.4219C8.21562 20.4875 9.075 21.3469 10.1406 21.3469H12.0656C13.1312 21.3469 13.9906 20.4875 13.9906 19.4219V19.2844C13.9906 19.1469 14.0937 19.0094 14.2312 18.9406C14.3 18.9062 14.3344 18.9062 14.4031 18.8719C14.575 18.8031 14.7125 18.8375 14.8156 18.9406L14.8844 19.0437C15.2281 19.4219 15.7094 19.6281 16.225 19.6281C16.7406 19.6281 17.2219 19.4562 17.6 19.0781L18.975 17.7375C19.7312 17.0156 19.7656 15.7781 19.0094 15.0219L18.9406 14.9187C18.8375 14.8156 18.8031 14.6437 18.8719 14.5406C18.9406 14.4031 18.975 14.3 19.0437 14.1625C19.1125 14.025 19.25 13.9562 19.3875 13.9562H19.4906H19.525C20.5562 13.9562 21.4156 13.1312 21.45 12.0656L21.4844 10.1406C21.4156 9.72812 21.2094 9.21249 20.8656 8.86874ZM19.8344 12.1C19.8344 12.3062 19.6625 12.4781 19.4562 12.4781H19.3531H19.3187C18.5281 12.4781 17.8062 12.9594 17.5312 13.6469C17.4969 13.75 17.4281 13.8531 17.3937 13.9562C17.0844 14.6437 17.2219 15.5031 17.7719 16.0531L17.8406 16.1562C17.9781 16.2937 17.9781 16.5344 17.8406 16.6719L16.4656 18.0125C16.3625 18.1156 16.2594 18.1156 16.1906 18.1156C16.1219 18.1156 16.0187 18.1156 15.9156 18.0125L15.8469 17.9094C15.2969 17.325 14.4719 17.1531 13.7156 17.4969L13.5781 17.5656C12.8219 17.875 12.3406 18.5625 12.3406 19.3531V19.4906C12.3406 19.6969 12.1687 19.8687 11.9625 19.8687H10.0375C9.83125 19.8687 9.65937 19.6969 9.65937 19.4906V19.3531C9.65937 18.5625 9.17812 17.8406 8.42187 17.5656C8.31875 17.5312 8.18125 17.4625 8.07812 17.4281C7.80312 17.2906 7.52812 17.2562 7.25312 17.2562C6.77187 17.2562 6.29062 17.4281 5.9125 17.8062L5.84375 17.8406C5.70625 17.9781 5.46562 17.9781 5.32812 17.8406L3.9875 16.4656C3.88437 16.3625 3.88437 16.2594 3.88437 16.1906C3.88437 16.1219 3.88437 16.0187 3.9875 15.9156L4.05625 15.8469C4.64062 15.2969 4.8125 14.4375 4.50312 13.75C4.46875 13.6469 4.43437 13.5437 4.36562 13.4406C4.09062 12.7187 3.40312 12.2031 2.6125 12.2031H2.50937C2.30312 12.2031 2.13125 12.0312 2.13125 11.825L2.16562 9.89999C2.16562 9.76249 2.23437 9.69374 2.26875 9.62499C2.30312 9.59062 2.40625 9.52187 2.54375 9.52187H2.64687C3.4375 9.55624 4.15937 9.07499 4.46875 8.35312C4.50312 8.24999 4.57187 8.14687 4.60625 8.04374C4.91562 7.35624 4.77812 6.49687 4.22812 5.94687L4.15937 5.84374C4.02187 5.70624 4.02187 5.46562 4.15937 5.32812L5.53437 3.98749C5.6375 3.88437 5.74062 3.88437 5.80937 3.88437C5.87812 3.88437 5.98125 3.88437 6.08437 3.98749L6.15312 4.09062C6.70312 4.67499 7.52812 4.84687 8.28437 4.53749L8.42187 4.46874C9.17812 4.15937 9.65937 3.47187 9.65937 2.68124V2.54374C9.65937 2.40624 9.72812 2.33749 9.7625 2.26874C9.79687 2.19999 9.9 2.16562 10.0375 2.16562H11.9625C12.1687 2.16562 12.3406 2.33749 12.3406 2.54374V2.68124C12.3406 3.47187 12.8219 4.19374 13.5781 4.46874C13.6812 4.50312 13.8187 4.57187 13.9219 4.60624C14.6437 4.94999 15.5031 4.81249 16.0875 4.26249L16.1906 4.19374C16.3281 4.05624 16.5687 4.05624 16.7062 4.19374L18.0469 5.56874C18.15 5.67187 18.15 5.77499 18.15 5.84374C18.15 5.91249 18.1156 6.01562 18.0469 6.11874L17.9781 6.18749C17.3594 6.70312 17.1875 7.56249 17.4625 8.24999C17.4969 8.35312 17.5312 8.45624 17.6 8.55937C17.875 9.28124 18.5625 9.79687 19.3531 9.79687H19.4562C19.5937 9.79687 19.6625 9.86562 19.7312 9.89999C19.8 9.93437 19.8344 10.0375 19.8344 10.175V12.1Z" fill=""/>
                    <path d="M11 6.32498C8.42189 6.32498 6.32501 8.42186 6.32501 11C6.32501 13.5781 8.42189 15.675 11 15.675C13.5781 15.675 15.675 13.5781 15.675 11C15.675 8.42186 13.5781 6.32498 11 6.32498ZM11 14.1281C9.28126 14.1281 7.87189 12.7187 7.87189 11C7.87189 9.28123 9.28126 7.87186 11 7.87186C12.7188 7.87186 14.1281 9.28123 14.1281 11C14.1281 12.7187 12.7188 14.1281 11 14.1281Z" fill=""/>
                  </svg>
                  Account Settings
                </a>
              </li>
            </ul>
            <form action="{{route('chefd.logout')}}" method="get">
            <button class="un mn qv lc mg ah gp dp zq ml ql">
              <svg class="hk" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.5375 0.618744H11.6531C10.7594 0.618744 10.0031 1.37499 10.0031 2.26874V4.64062C10.0031 5.05312 10.3469 5.39687 10.7594 5.39687C11.1719 5.39687 11.55 5.05312 11.55 4.64062V2.23437C11.55 2.16562 11.5844 2.13124 11.6531 2.13124H15.5375C16.3625 2.13124 17.0156 2.78437 17.0156 3.60937V18.3562C17.0156 19.1812 16.3625 19.8344 15.5375 19.8344H11.6531C11.5844 19.8344 11.55 19.8 11.55 19.7312V17.3594C11.55 16.9469 11.2062 16.6031 10.7594 16.6031C10.3125 16.6031 10.0031 16.9469 10.0031 17.3594V19.7312C10.0031 20.625 10.7594 21.3812 11.6531 21.3812H15.5375C17.2219 21.3812 18.5625 20.0062 18.5625 18.3562V3.64374C18.5625 1.95937 17.1875 0.618744 15.5375 0.618744Z" fill=""/>
                <path d="M6.05001 11.7563H12.2031C12.6156 11.7563 12.9594 11.4125 12.9594 11C12.9594 10.5875 12.6156 10.2438 12.2031 10.2438H6.08439L8.21564 8.07813C8.52501 7.76875 8.52501 7.2875 8.21564 6.97812C7.90626 6.66875 7.42501 6.66875 7.11564 6.97812L3.67814 10.4844C3.36876 10.7938 3.36876 11.275 3.67814 11.5844L7.11564 15.0906C7.25314 15.2281 7.45939 15.3312 7.66564 15.3312C7.87189 15.3312 8.04376 15.2625 8.21564 15.125C8.52501 14.8156 8.52501 14.3344 8.21564 14.025L6.05001 11.7563Z" fill=""/>
                </svg>
                Log Out
            </button>
            </form>
          </div>
          <!-- Dropdown End -->
        </div>
        <!-- User Area -->
      </div>
    </div>
  </header>

        <!-- ===== Header End ===== -->

        <!-- ===== Main Content Start ===== -->
        <main class="gv hm hv">
          <div class="sk bu 2xl:ud-p-11">
            <div
              class="oc gg yt xv vg au 2xl:ud-gap-7.5"
            >
              <!-- Card Item Start -->
              <div
                class="rh ni bj wr nj xr _l em"
              >
                <div
                  class="lc mg pg re hd th bk as"
                >
                  <svg
                    class="jk es"
                    width="22"
                    height="16"
                    viewBox="0 0 22 16"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M11 15.1156C4.19376 15.1156 0.825012 8.61876 0.687512 8.34376C0.584387 8.13751 0.584387 7.86251 0.687512 7.65626C0.825012 7.38126 4.19376 0.918762 11 0.918762C17.8063 0.918762 21.175 7.38126 21.3125 7.65626C21.4156 7.86251 21.4156 8.13751 21.3125 8.34376C21.175 8.61876 17.8063 15.1156 11 15.1156ZM2.26876 8.00001C3.02501 9.27189 5.98126 13.5688 11 13.5688C16.0188 13.5688 18.975 9.27189 19.7313 8.00001C18.975 6.72814 16.0188 2.43126 11 2.43126C5.98126 2.43126 3.02501 6.72814 2.26876 8.00001Z"
                      fill=""
                    />
                    <path
                      d="M11 10.9219C9.38438 10.9219 8.07812 9.61562 8.07812 8C8.07812 6.38438 9.38438 5.07812 11 5.07812C12.6156 5.07812 13.9219 6.38438 13.9219 8C13.9219 9.61562 12.6156 10.9219 11 10.9219ZM11 6.625C10.2437 6.625 9.625 7.24375 9.625 8C9.625 8.75625 10.2437 9.375 11 9.375C11.7563 9.375 12.375 8.75625 12.375 8C12.375 7.24375 11.7563 6.625 11 6.625Z"
                      fill=""
                    />
                  </svg>
                </div>

                <div class="lc lg qg yb">
                  <div>
                    <h4
                      class="wn jn zn gs"
                    >
                      $3.456K
                    </h4>
                    <span class="un mn">Total views</span>
                  </div>

                  <span
                    class="lc mg xg un mn jo"
                  >
                    0.43%
                    <svg
                      class="kk"
                      width="10"
                      height="11"
                      viewBox="0 0 10 11"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M4.35716 2.47737L0.908974 5.82987L5.0443e-07 4.94612L5 0.0848689L10 4.94612L9.09103 5.82987L5.64284 2.47737L5.64284 10.0849L4.35716 10.0849L4.35716 2.47737Z"
                        fill=""
                      />
                    </svg>
                  </span>
                </div>
              </div>
              <!-- Card Item End -->

              <!-- Card Item Start -->
              <div
                class="rh ni bj wr nj xr _l em"
              >
                <div
                  class="lc mg pg re hd th bk as"
                >
                  <svg
                    class="jk es"
                    width="20"
                    height="22"
                    viewBox="0 0 20 22"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M11.7531 16.4312C10.3781 16.4312 9.27808 17.5312 9.27808 18.9062C9.27808 20.2812 10.3781 21.3812 11.7531 21.3812C13.1281 21.3812 14.2281 20.2812 14.2281 18.9062C14.2281 17.5656 13.0937 16.4312 11.7531 16.4312ZM11.7531 19.8687C11.2375 19.8687 10.825 19.4562 10.825 18.9406C10.825 18.425 11.2375 18.0125 11.7531 18.0125C12.2687 18.0125 12.6812 18.425 12.6812 18.9406C12.6812 19.4219 12.2343 19.8687 11.7531 19.8687Z"
                      fill=""
                    />
                    <path
                      d="M5.22183 16.4312C3.84683 16.4312 2.74683 17.5312 2.74683 18.9062C2.74683 20.2812 3.84683 21.3812 5.22183 21.3812C6.59683 21.3812 7.69683 20.2812 7.69683 18.9062C7.69683 17.5656 6.56245 16.4312 5.22183 16.4312ZM5.22183 19.8687C4.7062 19.8687 4.2937 19.4562 4.2937 18.9406C4.2937 18.425 4.7062 18.0125 5.22183 18.0125C5.73745 18.0125 6.14995 18.425 6.14995 18.9406C6.14995 19.4219 5.73745 19.8687 5.22183 19.8687Z"
                      fill=""
                    />
                    <path
                      d="M19.0062 0.618744H17.15C16.325 0.618744 15.6031 1.23749 15.5 2.06249L14.95 6.01562H1.37185C1.0281 6.01562 0.684353 6.18749 0.443728 6.46249C0.237478 6.73749 0.134353 7.11562 0.237478 7.45937C0.237478 7.49374 0.237478 7.49374 0.237478 7.52812L2.36873 13.9562C2.50623 14.4375 2.9531 14.7812 3.46873 14.7812H12.9562C14.2281 14.7812 15.3281 13.8187 15.5 12.5469L16.9437 2.26874C16.9437 2.19999 17.0125 2.16562 17.0812 2.16562H18.9375C19.35 2.16562 19.7281 1.82187 19.7281 1.37499C19.7281 0.928119 19.4187 0.618744 19.0062 0.618744ZM14.0219 12.3062C13.9531 12.8219 13.5062 13.2 12.9906 13.2H3.7781L1.92185 7.56249H14.7094L14.0219 12.3062Z"
                      fill=""
                    />
                  </svg>
                </div>

                <div class="lc lg qg yb">
                  <div>
                    <h4
                      class="wn jn zn gs"
                    >
                      $45,2K
                    </h4>
                    <span class="un mn">Total Profit</span>
                  </div>

                  <span
                    class="lc mg xg un mn jo"
                  >
                    4.35%
                    <svg
                      class="kk"
                      width="10"
                      height="11"
                      viewBox="0 0 10 11"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M4.35716 2.47737L0.908974 5.82987L5.0443e-07 4.94612L5 0.0848689L10 4.94612L9.09103 5.82987L5.64284 2.47737L5.64284 10.0849L4.35716 10.0849L4.35716 2.47737Z"
                        fill=""
                      />
                    </svg>
                  </span>
                </div>
              </div>
              <!-- Card Item End -->

              <!-- Card Item Start -->
              <div
                class="rh ni bj wr nj xr _l em"
              >
                <div
                  class="lc mg pg re hd th bk as"
                >
                  <svg
                    class="jk es"
                    width="22"
                    height="22"
                    viewBox="0 0 22 22"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M21.1063 18.0469L19.3875 3.23126C19.2157 1.71876 17.9438 0.584381 16.3969 0.584381H5.56878C4.05628 0.584381 2.78441 1.71876 2.57816 3.23126L0.859406 18.0469C0.756281 18.9063 1.03128 19.7313 1.61566 20.3844C2.20003 21.0375 2.99066 21.3813 3.85003 21.3813H18.1157C18.975 21.3813 19.8 21.0031 20.35 20.3844C20.9 19.7656 21.2094 18.9063 21.1063 18.0469ZM19.2157 19.3531C18.9407 19.6625 18.5625 19.8344 18.15 19.8344H3.85003C3.43753 19.8344 3.05941 19.6625 2.78441 19.3531C2.50941 19.0438 2.37191 18.6313 2.44066 18.2188L4.12503 3.43751C4.19378 2.71563 4.81253 2.16563 5.56878 2.16563H16.4313C17.1532 2.16563 17.7719 2.71563 17.875 3.43751L19.5938 18.2531C19.6282 18.6656 19.4907 19.0438 19.2157 19.3531Z"
                      fill=""
                    />
                    <path
                      d="M14.3345 5.29375C13.922 5.39688 13.647 5.80938 13.7501 6.22188C13.7845 6.42813 13.8189 6.63438 13.8189 6.80625C13.8189 8.35313 12.547 9.625 11.0001 9.625C9.45327 9.625 8.1814 8.35313 8.1814 6.80625C8.1814 6.6 8.21577 6.42813 8.25015 6.22188C8.35327 5.80938 8.07827 5.39688 7.66577 5.29375C7.25327 5.19063 6.84077 5.46563 6.73765 5.87813C6.6689 6.1875 6.63452 6.49688 6.63452 6.80625C6.63452 9.2125 8.5939 11.1719 11.0001 11.1719C13.4064 11.1719 15.3658 9.2125 15.3658 6.80625C15.3658 6.49688 15.3314 6.1875 15.2626 5.87813C15.1595 5.46563 14.747 5.225 14.3345 5.29375Z"
                      fill=""
                    />
                  </svg>
                </div>

                <div class="lc lg qg yb">
                  <div>
                    <h4
                      class="wn jn zn gs"
                    >
                      2.450
                    </h4>
                    <span class="un mn">Total Product</span>
                  </div>

                  <span
                    class="lc mg xg un mn jo"
                  >
                    2.59%
                    <svg
                      class="kk"
                      width="10"
                      height="11"
                      viewBox="0 0 10 11"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M4.35716 2.47737L0.908974 5.82987L5.0443e-07 4.94612L5 0.0848689L10 4.94612L9.09103 5.82987L5.64284 2.47737L5.64284 10.0849L4.35716 10.0849L4.35716 2.47737Z"
                        fill=""
                      />
                    </svg>
                  </span>
                </div>
              </div>
              <!-- Card Item End -->

              <!-- Card Item Start -->
              <div
                class="rh ni bj wr nj xr _l em"
              >
                <div
                  class="lc mg pg re hd th bk as"
                >
                  <svg
                    class="jk es"
                    width="22"
                    height="18"
                    viewBox="0 0 22 18"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M7.18418 8.03751C9.31543 8.03751 11.0686 6.35313 11.0686 4.25626C11.0686 2.15938 9.31543 0.475006 7.18418 0.475006C5.05293 0.475006 3.2998 2.15938 3.2998 4.25626C3.2998 6.35313 5.05293 8.03751 7.18418 8.03751ZM7.18418 2.05626C8.45605 2.05626 9.52168 3.05313 9.52168 4.29063C9.52168 5.52813 8.49043 6.52501 7.18418 6.52501C5.87793 6.52501 4.84668 5.52813 4.84668 4.29063C4.84668 3.05313 5.9123 2.05626 7.18418 2.05626Z"
                      fill=""
                    />
                    <path
                      d="M15.8124 9.6875C17.6687 9.6875 19.1468 8.24375 19.1468 6.42188C19.1468 4.6 17.6343 3.15625 15.8124 3.15625C13.9905 3.15625 12.478 4.6 12.478 6.42188C12.478 8.24375 13.9905 9.6875 15.8124 9.6875ZM15.8124 4.7375C16.8093 4.7375 17.5999 5.49375 17.5999 6.45625C17.5999 7.41875 16.8093 8.175 15.8124 8.175C14.8155 8.175 14.0249 7.41875 14.0249 6.45625C14.0249 5.49375 14.8155 4.7375 15.8124 4.7375Z"
                      fill=""
                    />
                    <path
                      d="M15.9843 10.0313H15.6749C14.6437 10.0313 13.6468 10.3406 12.7874 10.8563C11.8593 9.61876 10.3812 8.79376 8.73115 8.79376H5.67178C2.85303 8.82814 0.618652 11.0625 0.618652 13.8469V16.3219C0.618652 16.975 1.13428 17.4906 1.7874 17.4906H20.2468C20.8999 17.4906 21.4499 16.9406 21.4499 16.2875V15.4625C21.4155 12.4719 18.9749 10.0313 15.9843 10.0313ZM2.16553 15.9438V13.8469C2.16553 11.9219 3.74678 10.3406 5.67178 10.3406H8.73115C10.6562 10.3406 12.2374 11.9219 12.2374 13.8469V15.9438H2.16553V15.9438ZM19.8687 15.9438H13.7499V13.8469C13.7499 13.2969 13.6468 12.7469 13.4749 12.2313C14.0937 11.7844 14.8499 11.5781 15.6405 11.5781H15.9499C18.0812 11.5781 19.8343 13.3313 19.8343 15.4625V15.9438H19.8687Z"
                      fill=""
                    />
                  </svg>
                </div>

                <div class="lc lg qg yb">
                  <div>
                    <h4
                      class="wn jn zn gs"
                    >
                      3.456
                    </h4>
                    <span class="un mn">Total Users</span>
                  </div>

                  <span
                    class="lc mg xg un mn ko"
                  >
                    0.95%
                    <svg
                      class="lk"
                      width="10"
                      height="11"
                      viewBox="0 0 10 11"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M5.64284 7.69237L9.09102 4.33987L10 5.22362L5 10.0849L-8.98488e-07 5.22362L0.908973 4.33987L4.35716 7.69237L4.35716 0.0848701L5.64284 0.0848704L5.64284 7.69237Z"
                        fill=""
                      />
                    </svg>
                  </span>
                </div>
              </div>
              <!-- Card Item End -->
            </div>

            <div
              class="lc kg hg av vg au 2xl:ud-gap-7.5 yb ot 2xl:ud-mt-7.5"
            >
              <!-- ====== Chart One Start -->
              <div class="yd uf 2xl:ud-max-w-230 rh ni bj wr nj xr al">
    <div class="lc qg">
      <div>
        <h4 class="tn rn zn gs">Sales Analytics</h4>
      </div>
      <div>
        <div class="h ka kc sh wj bs">
          <select
            name="#"
            id="#"
            class="h ka nc eg sh ni bj wr tj jl en vm mn vo"
          >
            <option value="">Monthly</option>
            <option value="">Yearly</option>
          </select>
          <span class="g j/2 da la -ud-translate-y-1/2">
            <svg
              width="10"
              height="6"
              viewBox="0 0 10 6"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M0.47072 1.08816C0.47072 1.02932 0.500141 0.955772 0.54427 0.911642C0.647241 0.808672 0.809051 0.808672 0.912022 0.896932L4.85431 4.60386C4.92785 4.67741 5.06025 4.67741 5.14851 4.60386L9.09079 0.896932C9.19376 0.793962 9.35557 0.808672 9.45854 0.911642C9.56151 1.01461 9.5468 1.17642 9.44383 1.27939L5.50155 4.98632C5.22206 5.23639 4.78076 5.23639 4.51598 4.98632L0.558981 1.27939C0.50014 1.22055 0.47072 1.16171 0.47072 1.08816Z"
                fill="#637381"
              />
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M1.22659 0.546578L5.00141 4.09604L8.76422 0.557869C9.08459 0.244537 9.54201 0.329403 9.79139 0.578788C10.112 0.899434 10.0277 1.36122 9.77668 1.61224L9.76644 1.62248L5.81552 5.33722C5.36257 5.74249 4.6445 5.7544 4.19352 5.32924C4.19327 5.32901 4.19377 5.32948 4.19352 5.32924L0.225953 1.61241C0.102762 1.48922 -4.20186e-08 1.31674 -3.20269e-08 1.08816C-2.40601e-08 0.905899 0.0780105 0.712197 0.211421 0.578787C0.494701 0.295506 0.935574 0.297138 1.21836 0.539529L1.22659 0.546578ZM4.51598 4.98632C4.78076 5.23639 5.22206 5.23639 5.50155 4.98632L9.44383 1.27939C9.5468 1.17642 9.56151 1.01461 9.45854 0.911642C9.35557 0.808672 9.19376 0.793962 9.09079 0.896932L5.14851 4.60386C5.06025 4.67741 4.92785 4.67741 4.85431 4.60386L0.912022 0.896932C0.809051 0.808672 0.647241 0.808672 0.54427 0.911642C0.500141 0.955772 0.47072 1.02932 0.47072 1.08816C0.47072 1.16171 0.50014 1.22055 0.558981 1.27939L4.51598 4.98632Z"
                fill="#637381"
              />
            </svg>
          </span>
        </div>
      </div>
    </div>

    <div>
      <div id="chartOne" class="-ud-ml-5 -ud-mb-5"></div>
    </div>
  </div>
              <!-- ====== Chart One End -->

              <!-- ====== Chart Two Start -->
              <div class="yd vf 2xl:ud-max-w-180 rh ni bj wr nj xr al">
    <div class="kb qg ss">
      <div class="kb qs">
        <h4 class="tn kn zn gs">Sales Graph</h4>
      </div>
      <div>
        <div class="h ka kc sh wj bs">
          <select
            name="#"
            id="#"
            class="h ka nc eg sh ni bj wr tj jl en vm mn rw vo"
          >
            <option value="">This Week</option>
            <option value="">Last Week</option>
          </select>
          <span class="g j/2 da la -ud-translate-y-1/2">
            <svg
              width="10"
              height="6"
              viewBox="0 0 10 6"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M0.47072 1.08816C0.47072 1.02932 0.500141 0.955772 0.54427 0.911642C0.647241 0.808672 0.809051 0.808672 0.912022 0.896932L4.85431 4.60386C4.92785 4.67741 5.06025 4.67741 5.14851 4.60386L9.09079 0.896932C9.19376 0.793962 9.35557 0.808672 9.45854 0.911642C9.56151 1.01461 9.5468 1.17642 9.44383 1.27939L5.50155 4.98632C5.22206 5.23639 4.78076 5.23639 4.51598 4.98632L0.558981 1.27939C0.50014 1.22055 0.47072 1.16171 0.47072 1.08816Z"
                fill="#637381"
              />
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M1.22659 0.546578L5.00141 4.09604L8.76422 0.557869C9.08459 0.244537 9.54201 0.329403 9.79139 0.578788C10.112 0.899434 10.0277 1.36122 9.77668 1.61224L9.76644 1.62248L5.81552 5.33722C5.36257 5.74249 4.6445 5.7544 4.19352 5.32924C4.19327 5.32901 4.19377 5.32948 4.19352 5.32924L0.225953 1.61241C0.102762 1.48922 -4.20186e-08 1.31674 -3.20269e-08 1.08816C-2.40601e-08 0.905899 0.0780105 0.712197 0.211421 0.578787C0.494701 0.295506 0.935574 0.297138 1.21836 0.539529L1.22659 0.546578ZM4.51598 4.98632C4.78076 5.23639 5.22206 5.23639 5.50155 4.98632L9.44383 1.27939C9.5468 1.17642 9.56151 1.01461 9.45854 0.911642C9.35557 0.808672 9.19376 0.793962 9.09079 0.896932L5.14851 4.60386C5.06025 4.67741 4.92785 4.67741 4.85431 4.60386L0.912022 0.896932C0.809051 0.808672 0.647241 0.808672 0.54427 0.911642C0.500141 0.955772 0.47072 1.02932 0.47072 1.08816C0.47072 1.16171 0.50014 1.22055 0.558981 1.27939L4.51598 4.98632Z"
                fill="#637381"
              />
            </svg>
          </span>
        </div>
      </div>
    </div>

    <div>
      <div id="chartTwo" class="-ud-ml-5 -ud-mb-9"></div>
    </div>
  </div>

              <!-- ====== Chart Two End -->
            </div>

            <!-- Order List Start -->
            <div class="yb ot 2xl:ud-mt-10">
              <h4
                class="tn jn zn gs xb"
              >
                Order List
              </h4>
              <p class="mn kb qu">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras
                ultrices lectus sem.
              </p>

              <div
                class="rh ni bj wr nj xr"
              >
                <div class="nf oh">
                  <table class="yd yf rh">
                    <thead>
                      <tr
                        class="vi bj wr"
                      >
                        <th class="ff sl rm sm">
                          <p
                            class="gn un zn gs"
                          >
                            Customer
                          </p>
                        </th>
                        <th class="ff sl rl">
                          <p
                            class="gn un zn gs"
                          >
                            Product
                          </p>
                        </th>
                        <th class="min-w-[160px] sl rl">
                          <p
                            class="gn un zn gs"
                          >
                            Order Number
                          </p>
                        </th>
                        <th class="gf sl rl">
                          <p
                            class="gn un zn gs"
                          >
                            Date
                          </p>
                        </th>
                        <th class="hf sl rl">
                          <p
                            class="gn un zn gs"
                          >
                            Status
                          </p>
                        </th>
                        <th class="if sl tm nm">
                          <p
                            class="in un zn gs"
                          >
                            Confirmation
                          </p>
                        </th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr
                        class="vi bj wr"
                      >
                        <td class="_l rm sm">
                          <h5 class="un">Musharof Chowdhury</h5>
                          <p class="mn">musharof@gmail.com</p>
                        </td>

                        <td class="_l rl">
                          <h5 class="un">Apple Macbook Pro M1</h5>
                          <p class="mn">8/256 GB</p>
                        </td>

                        <td class="_l rl">
                          <p>#WE234343</p>
                        </td>
                        <td class="_l rl">
                          <p>25 Dec 2024</p>
                        </td>
                        <td class="_l rl">
                          <p
                            class="nc mg pg th pj/10 jl am mn un go"
                          >
                            <span
                              class="ub jc dd he th pj"
                            ></span>
                            Pending
                          </p>
                        </td>
                        <td class="_l tm nm in">
                          <button
                            class="nc mg pg sh ni ej ol rl un _n qq _q gp dp"
                          >
                            Confirm Order
                          </button>
                        </td>
                      </tr>

                      <tr
                        class="vi bj wr"
                      >
                        <td class="_l rm sm">
                          <h5 class="un">Shafiq Hammad</h5>
                          <p class="mn">shafiq@gmail.com</p>
                        </td>

                        <td class="_l rl">
                          <h5 class="un">iPhone 13 Pro Max</h5>
                          <p class="mn">4/256 GB</p>
                        </td>

                        <td class="_l rl">
                          <p>#WE234343</p>
                        </td>
                        <td class="_l rl">
                          <p>25 Dec 2024</p>
                        </td>
                        <td class="_l rl">
                          <p
                            class="nc mg pg th pj/10 jl am mn un go"
                          >
                            <span
                              class="ub jc dd he th pj"
                            ></span>
                            Pending
                          </p>
                        </td>
                        <td class="_l tm nm in">
                          <button
                            class="nc mg pg sh ni ej ol rl un _n qq _q gp dp"
                          >
                            Confirm Order
                          </button>
                        </td>
                      </tr>

                      <tr
                        class="vi bj wr"
                      >
                        <td class="_l rm sm">
                          <h5 class="un">Naimur Rahman</h5>
                          <p class="mn">naim@gmail.com</p>
                        </td>

                        <td class="_l rl">
                          <h5 class="un">Apple watch series 7</h5>
                        </td>

                        <td class="_l rl">
                          <p>#WE234343</p>
                        </td>
                        <td class="_l rl">
                          <p>25 Dec 2024</p>
                        </td>
                        <td class="_l rl">
                          <p
                            class="nc mg pg th sj/10 jl am mn un fo"
                          >
                            <span
                              class="ub jc dd he th sj"
                            ></span>
                            Cancelled
                          </p>
                        </td>
                        <td class="_l tm nm in"></td>
                      </tr>

                      <tr class="vi cj">
                        <td class="_l rm sm">
                          <h5 class="un">Jhon Smith</h5>
                          <p class="mn">smith@gmail.com</p>
                        </td>

                        <td class="_l rl">
                          <h5 class="un">Apple Macbook air M1</h5>
                          <p class="mn">8/256 GB</p>
                        </td>

                        <td class="_l rl">
                          <p>#WE234343</p>
                        </td>
                        <td class="_l rl">
                          <p>25 Dec 2024</p>
                        </td>
                        <td class="_l rl">
                          <p
                            class="nc mg pg th xj/10 jl am mn un io"
                          >
                            <span
                              class="ub jc dd he th xj"
                            ></span>
                            Shipped
                          </p>
                        </td>
                        <td class="_l tm nm in"></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- Order List End -->
          </div>
        </main>
        <!-- ===== Main Content End ===== -->
      </div>
      <!-- ===== Page Wrapper End ===== -->

      <!-- ====== Back To Top Start ===== -->
      <button
    class="pc mg pg zd qc yh jw oj kw f ea fa oa"
    @click="window.scrollTo({top: 0, behavior: 'smooth'})"
    @scroll.window="scrollTop = (window.pageYOffset > 50) ? true : false"
    :class="{ 'mc' : scrollTop }"
  >
    <svg class="nk ge cd" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
      <path d="M233.4 105.4c12.5-12.5 32.8-12.5 45.3 0l192 192c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L256 173.3 86.6 342.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l192-192z" />
    </svg>
  </button>

 @endsection
