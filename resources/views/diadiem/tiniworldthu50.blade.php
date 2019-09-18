@extends('master-layout')
@section('title')
tiNiworldThu50
@endsection
@section('css') 
<link rel="stylesheet" type="text/css" href="{{ asset('css/diadiem.css') }}">
@endsection
@section('content')
<div class="container">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12">
			<h1 class="title-tieude text-center">
				HÁO HỨC CHỜ ĐÓN SỰ XUẤT HIỆN TINIWORLD THỨ 50 TẠI CRESCENT MALL              
			</h1>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="clearfix col-lg-8 col-md-8 col-sm-8 ">
			<img class="img-fluid img-chitiet"src="{{asset('images/chitietleft/tinithu50.jpg')}}">
			<p class="title-noidung">Ngày 30/8/2019 sẽ đánh dấu cột mốc <strong style="color: red"> tiNiWorld thứ 50 </strong>đi vào hoạt động, chính thức có mặt tại<strong> tầng B1 – TTTM Crescent Mall, 101 đường Tôn Dật Tiên, Phường Tân Phú, Quận 7, TP. HCM.</strong>
			</p>
			<p class="title-noidung">
				Với quy mô 1.000m2, đây thực sự là không gian an toàn, phù hợp cho trẻ vận động, học hỏi và sáng tạo. Không chỉ là một sân chơi bổ ích với các góc chơi đa dạng dành cho bé, tiNiWorld còn là vùng đất của niềm vui dành cho cả gia đình.
			</p>
			<img class="img-fluid img-chitiet"src="{{asset('images/chitietleft/tinithu50-1.jpg')}}">
			<img class="img-fluid img-chitiet"src="{{asset('images/chitietleft/tinithu50-2.jpg')}}">
			<img class="img-fluid img-chitiet"src="{{asset('images/chitietleft/tinithu50-3.jpg')}}">
			<img class="img-fluid img-chitiet"src="{{asset('images/chitietleft/tinithu50-4.jpg')}}">
			<img class="img-fluid img-chitiet"src="{{asset('images/chitietleft/tinithu50-5.jpg')}}">
			<p class="title-noidung">Tại tiNiWorld Crescent Mall, bé yêu sẽ thỏa thích vui chơi và phát triển các kỹ năng giao tiếp, vận động, cảm xúc, nghệ thuật, còn ba mẹ sẽ có cơ hội nghỉ ngơi, thư giãn với các dịch vụ của tiNi tại kiLo cafe…
			</p>
			<p class="title-noidung">
				Nhanh chân lên nhé cả nhà ơi!! Khu vui chơi giáo trí thiếu nhi tiNiWorld Crescent Mall hứa hẹn sẽ là một điểm đến lý tưởng cho cả nhà cùng vui.
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
			<div class="post text-center">
				<div class="date">
					<span class="posted-on">
						<i class="far  fa-calendar-alt"></i>
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
					<i class="fa fa-chevron-left icon-post 3"></i>
					<a href="{{route('tiniworldvinh')}}" rel="prev">THÀNH PHỐ VINH “BÙNG NỔ” <BR/> VỚI SÂN CHƠI TUỔI THƠ TINIWORLD</a>
				</div>
				<div class="nav-next">
					<a href="{{route('trangchitietleft')}}"rel="next">KHÁM PHÁ 2 TINIWORLD<br/> MỚI TOANH TẠI VINCOM PLAZA NGÔ QUYỀN, ĐÀ NẴNG VÀ VINCOM BÀ TRIỆU, HN</a>
					<i class="fa fa-chevron-right"></i>
				</div>
			</nav>
		</div>

	</div>
</div>
@endsection
