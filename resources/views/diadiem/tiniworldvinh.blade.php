@extends('master-layout')
@section('title')
	tiNiworldVinh
@endsection
@section('css') 
    <link rel="stylesheet" type="text/css" href="{{ asset('css/diadiem.css') }}">
@endsection
@section('content')
<div class="container">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12">
			<h1 class="title-tieude text-center">
				THÀNH PHỐ VINH “BÙNG NỔ” VỚI SÂN CHƠI TUỔI THƠ TINIWORLD              
			</h1>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="clearfix col-lg-8 col-md-8 col-sm-8 ">
			<img class="img-fluid img-chitiet"src="{{asset('images/chitietleft/tinivinh.png')}}">
			<p class="title-noidung">Những nụ cười giòn tan ngập tràn niềm vui bất tận, những cảm xúc bùng nổ của các bé và gia đình là khoảnh khắc đáng nhớ trong sự kiện khai trương trung tâm tiNiWorld thứ 49 tại Tầng 2, TTTM Vinh Centre (69 Hồ Tùng Mậu, Thành phố Vinh, tỉnh Nghệ An) vào ngày 16/8/2019 vừa qua.
			</p>
			<p class="title-noidung">
				Lần đầu tiên có mặt tại thành phố Vinh, tiNiWorld sẽ giúp cả gia đình ghi lại những ký ức tuổi thơ thật đặc biệt, cùng con trải nghiệm các góc chơi thật đa dạng: khám phá trò chơi vận động tại khu Playland, phát triển năng khiếu nghệ thuật tại khu piCa, hay đơn giản là những giây phút thư giãn bên nhau cuối tuần thật khó quên tại kiLo café.
			</p>
			<p class="title-noidung">
				Với giá vé ngày thường là 60.000đ và cuối tuần, ngày lễ là 80,000đ, các bé sẽ tha hồ vui chơi không giới hạn thời gian tại tiNiWorld.
			</p>

			<img class="img-fluid img-chitiet"src="{{asset('images/chitietleft/tinivinh-1.jpg')}}">
			<img class="img-fluid img-chitiet"src="{{asset('images/chitietleft/tinivinh-2.jpg')}}">
			<img class="img-fluid img-chitiet"src="{{asset('images/chitietleft/tinivinh-3.jpg')}}">
			<img class="img-fluid img-chitiet"src="{{asset('images/chitietleft/tinivinh-4.jpg')}}">
			<img class="img-fluid img-chitiet"src="{{asset('images/chitietleft/tinivinh-5.jpg')}}">
			<img class="img-fluid img-chitiet"src="{{asset('images/chitietleft/tinivinh-6.jpg')}}">

			<p class="title-noidung text-center">Bé vui chơi cùng bạn tại các khu vực ở tiNiWorld
			</p>
			<p class="title-noidung">
				Đặc biệt, khi tải app tiNi và đăng nhập thành công lần đầu tiên, quý khách hàng sẽ nhận được 1 e-code vé cổng miễn phí bất kỳ ngày nào trong tuần (trừ ngày lễ, tết) cho 1 bé và 1 phụ huynh. Nhanh chân đến ngay tiNiWorld và trải nghiệm tuổi thơ kỳ diệu nhé.
			</p>
			<p class="title-noidung">
				tiNiWorld không chỉ mang lại niềm vui cho bé, mà còn mang đến sự an tâm cho bố mẹ với các tiêu chuẩn an toàn và vệ sinh cũng như kết hợp với phương pháp giáo trí “học mà chơi – chơi mà học” giúp bé phát triển một cách tự nhiên.
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
						<i class="far fa-calendar-alt"></i>
						<span class="flaticon-calendar64 ztl-post-info">
							<a class="links" href="#">29th Tháng Tám 2019</a>
						</span>
						<i class="fas fa-align-justify fas-icon"></i>
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
	
	</div>
</div>
@endsection