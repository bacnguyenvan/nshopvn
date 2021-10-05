<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/styles.css">

  <!-- bootstrap css -->
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<!-- main css -->
	<link rel="stylesheet" href="css/all.css" />
	<!-- font awesome -->
	<link rel="stylesheet" href="fontawesome-free-5.11.2/css/all.css" />
  <title>Trang chủ - Linh kiện điện tử NShop</title>
</head>
<body>

  <!--  header -->
  <header id="header" class="header">
      <!-- navbar -->
      <div class="nav navbar navbar-expand-lg px-5 ">
        <a href="#home" class="navbar-brand ml-5">
          <img width="190" height="66" src="img/new-logo-1.png" alt="company logo" class='img-logo' />
        </a>
        <button
          type="button"
          class="navbar-toggler "
          data-toggle="collapse"
          data-target="#myNavbar"
        >
          <span class="navbar-toggler-icon"> </span>
        </button>
        <div class="info-1">
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="navbar-nav mx-auto text-navbar">
              <li class="nav-item active">
                <a href="#home" class="nav-link">Trang chủ</a>
              </li>
              <li class="nav-item">
                <a href="#product" class="nav-link">Sản phẩm</a>
              </li>
              <li class="nav-item">
                <a href="#contact" class="nav-link">Liên hệ</a>
              </li>
              <li class="nav-item">
                <a href="#news" class="nav-link">Tin tức</a>
              </li>
              <li class="nav-item">
                <a href="#youtube" class="nav-link">Youtube</a>
              </li>
            </ul>
          </div>
          <div class="input-group d-none d-lg-flex">
            <input type="text" class="form-control input-search" aria-label="Amount (to the nearest dollar)">
            <div class="input-group-append">
              <button class="btn btn-orange input-group-text">Tìm kiếm</button>
            </div>
          </div>
        </div>

      <div class="info-2 ml-5 d-none d-lg-block">
        <div class="shop-info my-2">
          <div class="phone-number text-gray">
            <span class="icon-shop mr-2"><i class="fas fa-phone"></i></span><strong>093 27 23 186</strong> (Quận 9) - <strong>093 27 23 186</strong>  (Quận 9)
          </div>
          <div class="mail-shop text-gray">
            <span class="icon-shop mr-2"><i class="fas fa-envelope"></i></span>info@nshopvn.com
          </div>
        </div>
        <div class="user-info d-flex justify-content-between ">
          <div class="dropdown customer-item">
              <div class="user-item d-flex">
                <span><i class="fas fa-gift"></i></span>
                <div class="user-text text-uppercase">
                  <p class="my-0">thông tin</p>
                  <p class="my-0">khuyến mãi</p>
                </div>
              </div>
              <div class="dropdown-menu">
                <div class="dropdown-content">
                  <a class="dropdown-item" href="#">Khuyến mãi tháng 12.2019</a>
                  <a class="dropdown-item" href="#">Khuyến mãi miễn phí vận chuyển</a>
                  <a class="dropdown-item" href="#">Chương trình tích điểm, hoàn tiền</a>
                </div>
              </div>
            </div>
          <a href="#" class="user-item d-flex">
            <span><i class="fas fa-truck"></i></span>
            <div class="user-text text-uppercase">
              <p class="my-0">kiểm tra</p>
              <p class="my-0">đơn hàng</p>
            </div>
          </a>
          <a href="#" class="user-item d-flex ">
            <span><i class="far fa-user"></i></span>
            <div class="user-text text-uppercase">
              <p class="my-0">đăng kí</p>
              <p class="my-0">đăng nhập</p>
            </div>
          </a>
          <div class="dropdown customer-item">
            <div class="user-item d-flex">
              <span><i class="fas fa-shopping-cart"></i></span>
              <div class="user-text text-uppercase">
                <p class="my-0">giỏ hàng</p>
                <p class="my-0">0 sản phẩm</p>
              </div>  
            </div>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-content cart_product" style="padding: 5px">
                <p style="text-align: center;">Chưa có sản phẩm</p>
                <p style="float: right;">Tổng cộng: <span style="font-weight: bold">0 đ</span></p>
                <div  style="overflow: hidden;width: 100%">
                  <a href="" class="btn btn-default" style="background: #f5f5f5;float: left;">giỏ hàng</a>
                  <a href="" class="btn btn-primary">thanh toán</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end of navbar -->
  </header>
    <!--  end of header -->

  <!-- banner -->
  <section id="banner" class="banner">
    <div class="container">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="./img/banner/Banner-30.11.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="./img/banner/Banner-giao-han-trong-4h-2019-1.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="./img/banner/Banner-giao-hang-sieu-toc-2019.jpg" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </section>
  <!-- end of banner -->

  <section id="products" class="products py-4">
    <div class="container">
      <div class="row">
        <!-- Menu -->
        <div class="col-3 d-none d-lg-block">
          <h5 class="text-uppercase">danh mục</h5>
          <!-- Sensor -->
          <div class="menu-item">
            <div class="menu-name-item d-flex justify-content-between">
              <a href="#" class="">Cảm biến</a>
              <a href="#sensor-items" data-toggle="collapse" class="align-self-center sort-icon">
                <i class="fas fa-sort-down"></i>
              </a>
            </div>
            <div class="collapse" id="sensor-items">
              <ul>
                <li class="menu-item-child">
                  <a href="#" >Cảm biến âm thanh</a>
                </li>
                <li  class="menu-item-child">
                  <a href="#">Cảm biến ánh sáng</a>
                </li>
                
               
              </ul>
            </div>
          </div>
          <!-- End of Sensor -->

         
          
          <div class="menu-item">
              <div class="menu-name-item d-flex justify-content-between">
                <a href="#" class="">Mạch điện</a>
                <a href="#module-items" data-toggle="collapse" class="align-self-center sort-icon">
                  <i class="fas fa-sort-down"></i>
                </a>
              </div>
              <div class="collapse" id="module-items">
                <ul>
                  <li class="menu-item-child">
                    <a href="#" >Arduino</a>
                  </li>
                  <li  class="menu-item-child">
                    <a href="#">Màn hình LCD</a>
                  </li>
                  <li class="menu-item-child">
                    <div class=" menu-name-item d-flex justify-content-between">
                      <a href="#" class="">RF, GSM, GPS, Bluetooth, Wifi, RFID</a>
                      <a href="#module-items_1" data-toggle="collapse" class="align-self-center sort-icon">
                        <i class="fas fa-sort-down"></i>
                      </a>
                    </div>
                    <div class="collapse" id="module-items_1">
                      <ul>
                          <li class="menu-item-child">
                            <a href="#" >RF</a>
                          </li>
                          <li class="menu-item-child menu-item-child-last">
                            <a href="#" >Bluetooth</a>
                          </li>
                          <li class="menu-item-child menu-item-child-last">
                            <a href="#" >RFID</a>
                          </li>
                      </ul>
                    </div>
                  </li>
                  <li class="menu-item-child">
                    <a href="#" >Đo dòng điện và điện thế</a>
                  </li>
                  <li class="menu-item-child">
                    <a href="#" >Dò line, encoder, vận tốc</a>
                  </li>
                </ul>
              </div>
          </div>
         

          <!-- Toolkit -->
          <div class="menu-item">
              <div class="menu-name-item d-flex justify-content-between">
                <a href="#" class="">Module</a>
                <a href="#toolkit-items" data-toggle="collapse" class="align-self-center sort-icon">
                  <i class="fas fa-sort-down"></i>
                </a>
              </div>
              <div class="collapse" id="toolkit-items">
                <ul>
                  <li class="menu-item-child">
                    <a href="#" >Bàn phím, điều khiển , joystick</a>
                  </li>
                  <li  class="menu-item-child">
                    <a href="#">Dimmer & tạo xung</a>
                  </li>
                  <li class="menu-item-child">
                    <div class=" menu-name-item d-flex justify-content-between">
                      <a href="#" class="">Nguồn xung, tăng giảm áp,sạc pin</a>
                      <a href="#toolkit-items_1" data-toggle="collapse" class="align-self-center sort-icon">
                        <i class="fas fa-sort-down"></i>
                      </a>
                    </div>
                    <div class="collapse" id="toolkit-items_1">
                      <ul>
                          <li class="menu-item-child">
                            <a href="#" >Nguồn, pin , nguồn xung</a>
                          </li>
                          <li class="menu-item-child menu-item-child-last">
                            <a href="#" >Sạc pin</a>
                          </li>
                      </ul>
                    </div>
                  </li>
                  <li class="menu-item-child">
                    <a href="#" >Điều khiển động cơ</a>
                  </li>
                  <li class="menu-item-child">
                    <a href="#" >Thời gian, hiển thị, còi</a>
                  </li>
                </ul>
              </div>
          </div>
          <!-- End of Toolkit -->

          <div class="menu-item">
            <div class="menu-name-item d-flex justify-content-between">
              <a href="#" class="">Robot & công nghệ</a>
              <a href="#sensor-technology" data-toggle="collapse" class="align-self-center sort-icon">
                <i class="fas fa-sort-down"></i>
              </a>
            </div>
            <div class="collapse" id="sensor-technology">
              <ul>
                <li class="menu-item-child">
                  <a href="#" >Máy in 3D - CNC - Laser</a>
                </li>
                <li  class="menu-item-child">
                  <a href="#">Nhà thông minh</a>
                </li>
                <li  class="menu-item-child">
                  <a href="#">Động cơ</a>
                </li>
                
               
              </ul>
            </div>
          </div>

          <div class="menu-item">
            <div class="menu-name-item d-flex justify-content-between">
              <a href="#" class="">Phụ kiện & dụng cụ</a>
              <a href="#sensor-tools" data-toggle="collapse" class="align-self-center sort-icon">
                <i class="fas fa-sort-down"></i>
              </a>
            </div>
            <div class="collapse" id="sensor-tools">
              <ul>
                <li class="menu-item-child">
                  <a href="#" >Dụng cụ linh kiện điện tử</a>
                </li>
                <li  class="menu-item-child">
                  <a href="#">Dụng cụ linh kiện cơ khí</a>
                </li>
                <li  class="menu-item-child">
                  <a href="#">Hộp nhựa</a>
                </li>
                
               
              </ul>
            </div>
          </div>

          <!-- Contact Phone number -->
        <h5 class="text-uppercase my-3">hỗ trợ online</h5>
        <h6>Bán hàng</h6>
        <ul class="ml-1">
          <li class="my-3">
            <span class="mr-2 contact-icon"><i class="fas fa-phone"></i></span>
            093 27 23 186 (Quận 9)
          </li>
          <li class="my-3">
            <span class="mr-2 contact-icon"><i class="fas fa-phone"></i></span>
            093 27 23 186 (Quận 9)
          </li>
          <li class="my-3">
            <span class="mr-2 contact-icon"><i class="fas fa-phone"></i></span>
            093 27 23 186 (Quận 9)
          </li>
          <li class="my-3">
            <span class="mr-2 contact-icon"><i class="fas fa-phone"></i></span>
            093 27 23 186 (Quận 9)
          </li>
          <li class="my-3">
            <span class="mr-2 contact-icon"><i class="fas fa-phone"></i></span>
            093 27 23 186 (Quận 9)
          </li>
        </ul>
        <h6>Kỹ thuật</h6>
        <ul class="ml-1">
          <li class="my-3">
            <span class="mr-2 contact-icon"><i class="fas fa-phone"></i></span>
            093 27 23 186 (Quận 9)
          </li>
          <li class="my-3">
            <span class="mr-2 contact-icon"><i class="fas fa-phone"></i></span>
            093 27 23 186 (Quận 9)
          </li>
        </ul>
        <!-- End of Contact Phone number -->
        </div>
        <!-- end of Menu -->
