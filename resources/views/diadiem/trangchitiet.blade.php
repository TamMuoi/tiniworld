@extends('master-layout')
@section('title')
	tiNiworldNgôQuyền
@endsection
@section('css') 
    <link rel="stylesheet" type="text/css" href="{{ asset('css/diadiem.css') }}">
@endsection
@section('content')
<div class="container">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12">
			<h1 class="title-tieude text-center">
				KHÁM PHÁ 2 TINIWORLD MỚI TOANH TẠI VINCOM PLAZA NGÔ QUYỀN, ĐÀ NẴNG VÀ VINCOM BÀ TRIỆU, HN                
			</h1>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="clearfix col-lg-8 col-md-8 col-sm-8">
			<img class="img-fluid img-chitiet"src="{{asset('images/chitietleft/batrieu.jpg')}}">
			<p class="title-noidung">tiNiWorld chính thức đưa vào hoạt động 2 trung tâm mới toanh, tọa lạc tại thành phố biển nổi tiếng Đà Nẵng và thủ đô Hà Nội từ ngày 30 & 31/8/2019
			</p>
			<p class="title-noidung">
				tiNiWorld mới toanh hứa hẹn sẽ mang lại thật nhiều niềm vui cho các gia đình trên khắp mảnh đất hình chữ S và cũng như tiếp tục sứ mệnh “Delivery Smile” của mình cho thật nhiều trẻ em. 2 trung tâm mới toanh tại Tầng 3 – TTTM Vincom Plaza Ngô Quyền, Đà Nẵng và Tầng 5, tòa tháp B – TTTM Vincom Bà Triệu, Hà Nội sẽ là một sự lựa chọn tuyệt vời cho cả gia đình khi bên nhau.
			</p>
			<p class="title-noidung">Bố mẹ đừng quên tải ngay ứng dụng tiNi về điện thoại để nhận ngay 1 mã vào cổng miễn phí cho bé yêu khám phá tiNiWorld bất kỳ ngày nào trong tuần (trừ ngày lễ) nhé. Lưu ý : Chương trình chỉ áp dụng cho lần tải đầu tiên.
			</p>
			<p class="title-noidung">
				Đến ngay khám phá <strong> tiNi mới toanh tại Vincom Plaza Ngô Quyền và Vincom Bà Triệu </strong>nhé!
			</p>
			<p class="title-noidung">
				<strong>Hệ thống trung tâm giáo trí thiếu nhi tiNiWorld</strong>
			</p>
			<p class="title-noidung">
				Fanpage: &nbsp;
				<a class="sub-title" href="https://www.facebook.com/tiNiWorld">https://www.facebook.com/tiNiWorld</a>
			</p>
			<p class="title-noidung">
				Youtube: &nbsp;
				<a class="sub-title" href="https://www.youtube.com/tiNiTV">https://www.youtube.com/tiNiTV</a>
			</p>
			<p class="title-noidung">
				Website: &nbsp;
				<a class="sub-title" href="https://tiniworld.com/vi/home/">https://tiniworld.com/vi/home/</a>
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
						<i class="far fa-calendar-alt"></i>
						<span class="flaticon-calendar64 ztl-post-info">
							<a class="links" href="#">29th Tháng Tám 2019</a>
						</span>
						<i class="fas fa-align-justify"></i>
						<a class="links" href="#">Tin tiNi</a>
					</span>
				</div>	
			</div>
			<nav class="navigation post-navigation">
			<div class="nav-previous">
				<i class="fa fa-chevron-left icon-post"></i>
				<a href="{{Route('tiniworldthu50')}}" rel="prev">HÁO HỨC CHỜ ĐÓN SỰ XUẤT HIỆN TINIWORLD THỨ 50 TẠI CRESCENT MALL</a>
			</div>
			<div class="nav-next">
				<a href="{{route('checkinrinhqua')}}" rel="next">Check in rinh quà ngay trung thu.<br/> Còn gì tuyệt hơn.</a>
				<i class="fa fa-chevron-right"></i>
			</div>
		</nav>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4">
			@include('aside-right')
		</div>
	
	</div>
</div>
@endsection