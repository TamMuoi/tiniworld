@extends('master-layout')
@section('title')
	Check in rinh quà ngay trung thu. Còn gì tuyệt hơn.
@endsection
@section('css') 
    <link rel="stylesheet" type="text/css" href="{{ asset('css/diadiem.css') }}">
@endsection
@section('content')
<div class="container">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12">
			<h1 class="title-tieude text-center">
				Check in rinh quà ngay trung thu. Còn gì tuyệt hơn.              
			</h1>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="clearfix col-lg-8 col-md-8 col-sm-8 ">
			<img class="img-fluid img-chitiet"src="{{asset('images/chitietleft/checkinrinhqua.png')}}">
			<p class="title-noidung">Còn gì vui hơn khi vui chơi trung thu tại tiNiWorld mà còn được nhận quà.
			</p>
			<p class="title-noidung">
				Nhân dịp trung thu, tiNiWorld sẽ có thật nhiều trò chơi hấp dẫn cùng những trang trí cực xinh xắn tại sân khấu tiNiWorld. Chính vì điều đó, tiNiWorld tạo ngay cho ba mẹ cơ hội vừa chụp ảnh và khoe ảnh của bé yêu lại vừa được nhận ngay quà tại chỗ.
			</p>
			<p class="title-noidung">Chỉ cần chụp hình bé yêu tại khu vực “sạp hàng tuổi thơ” cùng những trang trí ấn tượng trên sân khấu và check in Facebook cá nhân của bá mẹ, kèm theo like fanpage tiNiWorld, cả nhà mình sẽ nhận ngay 30 tiNi Điểm top up vào tài khoản thẻ thành viên tiNi.
			</p>
			<p class="title-noidung">
				Thật tuyệt phải không nào ? Vậy thì hãy đến vui chơi trung thu tại tiNiWorld cùng những chương trình mang chủ đề trung thu đặc biệt và rinh ngay quà từ tiNi nhé cả nhà.
			</p>
			<p class="title-noidung">
				<strong>Hệ thống trung tâm giáo trí thiếu nhi tiNiWorld</strong>
			</p>
			<p class="title-noidung">
				Fanpage: &nbsp;
				<a href="https://www.facebook.com/tiNiWorld">https://www.facebook.com/tiNiWorld</a>
			</p>
			<p class="title-noidung">
				Youtube: &nbsp;
				<a href="https://www.youtube.com/tiNiTV">https://www.youtube.com/tiNiTV</a>
			</p>
			<p class="title-noidung">
				Website: &nbsp;
				<a href="https://tiniworld.com/vi/home/">https://tiniworld.com/vi/home/</a>
			</p>
			<p class="title-noidung">
				Hotline thông tin dịch vụ (9AM-5PM): 0908 040 411
			</p>
			<p class="title-noidung">
				Hotline chương trình ngoại khóa (9AM-5PM): 0906 898 037
			</p>
			<div class="post">
				<div class="date">
					<span class="posted-on">
						<i class="far  fa-calendar-alt"></i>
						<span class="flaticon-calendar64 ztl-post-info">
							<a class="links" href="#">6th Tháng Chín 2019</a>
						</span>
						<i class="fas fa-align-justify"></i>
						<a class="links" href="#">Tin tiNi</a>
					</span>
				</div>	
			</div>
			<nav class="navigation post-navigation">
			<div class="nav-previous">
				<i class="fa fa-chevron-left icon-post"></i>
				<a href="route('')" rel="prev">KHÁM PHÁ 2 TINIWORLD</a>
			</div>
		</nav>
		</div>
	
	</div>
</div>
@endsection
