<header class="header"> 
  <div class="container">
    <!-- menu -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="{{ route('trang-chu') }}"><img src="{{ asset('images/logo/logo-website.png') }}" alt="" class="logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto d-flex justify-content-center align-items-center justify-content-around">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('diadiem') }}"><i class="fas fa-truck" style="color: #c00;"></i> <br>Địa điểm</a>
            <div class="sub-menu">
              <ul>
                <li><a href="#">TP Hồ Chí Minh</a></li>
                <li><a href="#">Hà Nội</a></li>
                <li><a href="#">Đà Nẵng</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('khuvuichoi') }}"><i class="fas fa-home" style="color: #f1c40f;"></i><br>Khu vui chơi</a>
            <div class="sub-menu">
              <ul>
                <li><a href="{{ route('ve') }}">Giá vé</a></li>
                <li><a href="{{ route('vetiniword') }}">Về tiNiWorld</a></li>
               
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('sinh_nhat') }}"><i class="fas fa-grin-hearts" style="color: #2ecc71;"></i><br>Tiệc sinh nhật</a>
             <div class="sub-menu">
              <ul>
                <li><a href="#">Tiệc sinh nhật 1</a></li>
                <li><a href="#">Tiệc sinh nhật 2</a></li>
                <li><a href="#">Tiệc sinh nhật 3</a></li>
              </ul>
            </div>
          </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ route('member') }}"><i class="fas fa-hotel" style="color: #3498db;"></i><br>Tini membership</a>
            <div class="sub-menu">
              <ul>
                <li><a href="#">Tini membership 1</a></li>
                <li><a href="#">Tini membership 2</a></li>
                <li><a href="#">Tini membership 3</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('tin_tini') }}"><i class="fas fa-lightbulb" style="color: #d35400;"></i><br>Tin tini</a>
            <div class="sub-menu">
              <ul>
                <li><a href="{{ route('tin_tv') }}">Tini TV</a></li>
                
              </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('khuyen-mai') }}"><i class="fas fa-gift" style="color: #16a085;"></i><br>Khuyến mãi</a>
          </li>
        </ul>
      </div>
    </nav> <!-- end menu -->
   
  </div>
</header><!-- /header -->