@extends('master-layout')
@section('title')
Khu vui chơi dành cho trẻ em hiện đại nhất Việt Nam | tiNiWorld
@endsection
@section('css') 
<link rel="stylesheet" type="text/css" href="{{ asset('css/diadiem.css') }}">
@endsection
@section('content')
<!-- Tiêu đề -->
<main>
	

<div class="container">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12">
			<h1 class="title-tieude text-center">
				Khu vui chơi          
			</h1>
		</div>
	</div>
</div>
<!-- Nội dung -->
<div class="container">
	<div class="row">
		<div class="col-lg-4">
			<img class="img-fluid"src="{{asset('images/khuvuichoi/khuvuichoi-1.png')}}">
		</div>
		<div class="col-lg-8">
			<img class="img-fluid"src="{{asset('images/khuvuichoi/khuvuichoi-2.png')}}">
			<p class="title-noidung"> Mỗi bé sẽ sở hữu cá tính và sở trường riêng biệt nên nhiều bố mẹ phải đau đầu lựa chọn khu vui chơi phù hợp cho các con. Thế nhưng từ khi tiNiWorld ra đời, bậc cha mẹ đã thật sự vui mừng vì tập hợp được hàng loạt trò chơi vừa mang tính chất giải trí vừa bổ ích để phát triển tiềm năng của bé.</p>
			<ul>
				<li class="khuvuichoi">Hạ tầng và thiết bị vui chơi cao cấp</li>
				<li class="khuvuichoi">30+ góc chơi riêng biệt</li>
				<li class="khuvuichoi">Nhân viên hỗ trợ tại mỗi góc chơi</li>
				<li class="khuvuichoi">Khu vận động liên hoàn</li>
				<li class="khuvuichoi">Khu sáng tạo nghệ thuật</li>
				<li class="khuvuichoi">Khu nghiên cứu khoa học</li>
				<li class="khuvuichoi">Quầy đồ ăn và nghỉ ngơi cho cha mẹ</li>
			</ul>
			<p class="title-noidung">Phương châm của tiNiWorld là kết hợp giữa giáo dục và giải trí, tạo thành những hoạt động Giáo – Trí. Thông qua việc tham gia các trò chơi tại tiNiWorld, bé sẽ phát triển toàn diện 4 kỹ năng:</p>
			<p class="title-noidung">
				Vận động <br/>
				Giao tiếp <br/>
				Học tập<br/>
				Làm việc nhóm
			</p>
			<p class="title-noidung">Các hoạt động trong khu vui chơi tiNiWorld đều bổ sung kiến thức và kỹ năng sống cho bé mà không làm mất đi hứng thú của bé khi chơi đùa. Đến với khu vui chơi GIÁO – TRÍ tiNiWorld, BÉ VUI CHƠI – BA MẸ ĐƯỢC NGHỈ NGƠI!</p>
		</div>
		
	</div>
	<!-- Góc vui chơi -->
	<div class="row">
		<div class="col-lg-12">
			<img class="img-gocvuichoi"src="{{asset('images/khuvuichoi/gocvuichoi.png')}}">
		</div>
		<div class="col-md-6">
			<div class="col-sm-3 img-icon">
				<figure class="wpb_wrapper vc_figure figure-gocvuichoi">
					<img class="icon"src="{{asset('images/khuvuichoi/gocvuichoi-1.png')}}">
				</figure>
			</div>
			<div class="col-sm-9 img-icon-right">
				<figure class="wpb_wrapper vc_figure">
					<a href="https://tiniworld.com/vi/khu-vui-choi/juno-playland/" target="_self" class="vc_single_image-wrapper   vc_box_border_grey">
						<img class="img-fuild img-right" src="{{asset('images/khuvuichoi/gocvuichoi-2.png')}}">
					</a>
				</figure>			
				<p>Là góc trò chơi vận động liên hoàn, các bé năng động vô cùng yêu thích. Một số trò chơi tiêu biểu trong juNo Playland như nhà banh, cầu trượt…</p>
			</div>
		</div>
		<div class="col-md-6">
			<div class="col-sm-3 img-icon">
				<figure class="wpb_wrapper vc_figure figure-gocvuichoi">
					<img class="icon"src="{{asset('images/khuvuichoi/gocvuichoi-3.png')}}">
				</figure>
			</div>
			<div class="col-sm-9 img-icon-right">
				<figure class="wpb_wrapper vc_figure">
					<a href="https://tiniworld.com/vi/khu-vui-choi/juno-playland/" target="_self" class="vc_single_image-wrapper   vc_box_border_grey">
						<img class="img-fuild img-right" src="{{asset('images/khuvuichoi/gocvuichoi-4.png')}}">
					</a>
				</figure>			
				<p>Góc Discovery dành cho các bé đam mê học hỏi, bao gồm vô số trò chơi như Sandbox, Hot Wheels, Thomas & Friend, brick, thư viện, Barbie House…</p>
			</div>
		</div>
		<div class="col-md-6">
			<div class="col-sm-3 img-icon">
				<figure class="wpb_wrapper vc_figure figure-gocvuichoi">
					<img class="icon"src="{{asset('images/khuvuichoi/gocvuichoi-5.png')}}">
				</figure>
			</div>
			<div class="col-sm-9 img-icon-right">
				<figure class="wpb_wrapper vc_figure ">
					<a href="https://tiniworld.com/vi/khu-vui-choi/juno-playland/" target="_self" class="vc_single_image-wrapper   vc_box_border_grey">
						<img class="img-fuild img-right" src="{{asset('images/khuvuichoi/gocvuichoi-6.png')}}">
					</a>
				</figure>			
				<p>piCa Studio là không gian tuyệt vời dành cho các bạn nhỏ yêu thích mỹ thuật. Bé được sáng tạo, thể hiện năng khiếu của mình thông qua nhiều trò chơi: tô màu, tập vẽ tranh, tô tượng, tranh cát…</p>
			</div>
		</div>
		<div class="col-md-6">
			<div class="col-sm-3 img-icon">
				<figure class="wpb_wrapper vc_figure figure-gocvuichoi">
					<img class="icon"src="{{asset('images/khuvuichoi/gocvuichoi-8.png')}}">
				</figure>
			</div>
			<div class="col-sm-9 img-icon-right">
				<figure class="wpb_wrapper vc_figure ">
					<a href="https://tiniworld.com/vi/khu-vui-choi/juno-playland/" target="_self" class="vc_single_image-wrapper   vc_box_border_grey">
						<img class="img-fuild img-right" src="{{asset('images/khuvuichoi/gocvuichoi-9.png')}}">
					</a>
				</figure>			
				<p>Khu vực Snack Bar với các món ăn khoái khẩu nhất sẽ giúp các bé nạp năng lượng và chơi thật vui mỗi khi đến tiNi.</p>
			</div>
		</div>
		<div class="col-md-6">
			<div class="col-sm-3 img-icon">
				<figure class="wpb_wrapper vc_figure figure-gocvuichoi">
					<img class="icon"src="{{asset('images/khuvuichoi/gocvuichoi-10.png')}}">
				</figure>
			</div>
			<div class="col-sm-9 img-icon-right">
				<figure class="wpb_wrapper vc_figure">
					<a href="https://tiniworld.com/vi/khu-vui-choi/juno-playland/" target="_self" class="vc_single_image-wrapper   vc_box_border_grey">
						<img class="img-fuild img-right" src="{{asset('images/khuvuichoi/gocvuichoi-11.png')}}">
					</a>
				</figure>			
				<p>Game Arcade có vô số trò chơi cực kì hấp dẫn sẽ giúp bé tăng cường khả năng quan sát và rèn luyện sự nhanh nhạy</p>
			</div>
		</div>
		<div class="col-md-6">
			<div class="col-sm-3 img-icon">
				<figure class="wpb_wrapper vc_figure figure-gocvuichoi">
					<img class="icon"src="{{asset('images/khuvuichoi/gocvuichoi-10.png')}}">
				</figure>
			</div>
			<div class="col-sm-9 img-icon-right">
				<figure class="wpb_wrapper vc_figure">
					<a href="https://tiniworld.com/vi/khu-vui-choi/juno-playland/" target="_self" class="vc_single_image-wrapper   vc_box_border_grey">
						<img class="img-fuild img-right" src="{{asset('images/khuvuichoi/gocvuichoi-12.png')}}">
					</a>
				</figure>			
				<p>Thường xuyên diễn ra những chương trình, hoạt động mới lạ và hấp dẫn như diễn kịch, ảo thuật, nhảy flashmob, diễu hành…</p>
			</div>
		</div>
	</div>
	<!-- time -->
	<div class="container">
		<div class="row thongtin ">
			<div class="col-thongtin">
				<div class="counter time-coso" data-count="48">0</div><br/>
				<span class="title-thongtin">Trung tâm tiNiWorld trên khắp Việt Nam và sẽ còn thêm nhiều trung tâm khác</span>
			</div>
			<div class="col-thongtin">
				<div class="counter time-nhanvien" data-count="3116">0</div><br/>
				<span class="title-thongtin">Số nhân viên phục vụ tại tiNiWorld, mỗi khu trò chơi đều có rất nhiều nhân viên năng nổ phục vụ</span>
			</div>
			<div class="col-thongtin">
				<div class="counter time-doanhso" data-count="525000">0</div><br/>
				<span class="title-thongtin">Số phụ huynh và bé đã tham gia khu vui chơi giải trí cho trẻ em tiNiWorld cho đến năm 2019</span>
			</div>
			<div class="col-thongtin">
				<div class="counter time-sukien" data-count="2085">0</div><br/>
				<span >Bữa tiệc sinh nhật và sự kiện thiếu nhi đã được tổ chức tại tiNiWorld được phục vụ cho các bé</span>
			</div>
		</div>
	</div>
	<!-- Khoảng khắc -->
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<img class="img-fuild img-gocvuichoi"src="{{asset('images/khuvuichoi/khoangkhaccuabe.png')}}" >
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-6">
					<img class="img-fuild img-khoangkhac-left rotate-in-center" src="{{('images/khuvuichoi/khoanhkhac1.jpg')}}" alt="">
					<img class="img-fuild img-khoangkhac-left rotate-in-center" src="{{('images/khuvuichoi/khoanhkhac2.jpg')}}" alt="">
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="row">
						<div class="col-md-6 col-sm-3">
							<img class="img-fuild img-khoangkhac-right rotate-in-center" src="{{('images/khuvuichoi/khoanhkhac3.jpg')}}" alt="">
						</div>
						<div class="col-md-6 col-sm-3">
							<img class="img-fuild img-khoangkhac-right1 rotate-in-center" src="{{('images/khuvuichoi/khoanhkhac4.jpg')}}" alt="">
						</div>
					</div>
					
					<div class="col-md-6">
						<img class="img-fuild img-right-bottom rotate-in-center" src="{{asset('images/khuvuichoi/khoanhkhac5.jpg')}}" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- tiệc sinh nhật -->
	<div class="container">
		<div style="margin-top: 60px;"class="row">
			<div class="col-lg-6">
				<img class="tiecsinhnhat"  src="{{asset('images/khuvuichoi/tiecsn.png')}}" alt="">
				<img class="dattiec" src="{{asset('images/khuvuichoi/dattiec.png')}}" alt="">
				<p class="title-noidung">Tổ chức tiệc sinh nhật theo phong cách vô cùng độc đáo của tiNiWorld, nơi mà bé sẽ được trở thành tâm điểm của bữa tiệc, và tỏa sáng rạng rỡ bên gia đình và bạn bè</p>
				<p class="title-noidung">Hãy để các chuyên gia thiết kế tiệt sinh nhật của tiNiWorld lên ý tưởng và trang hoàng bữa tiệc sinh nhật của bé theo những chủ đề đặc biệt được lấy ý tưởng từ các nhân vật trên hành tinh tiNi: teRa, piCa, juNo, kilo, hoặc tha hồ tự chọn phong cách riêng “không đụng hàng” theo sở thích của bé.</p>
				<p class="title-noidung">Cùng với đó, tiNiWorld linh hoạt cung cấp menu thức ăn, đồ uống, giúp ba mẹ dễ dàng lựa chọn thực đơn khoái khẩu cho con trong ngày đặc biệt của bé.</p>
				<p class="title-noidung">Đặc biệt, tại ngày tổ chức tiệc sinh nhật, bé sẽ có cơ hội cùng bạn bè thả ga vui chơi miễn phí, không giới hạn thời gian tại trung tâm tiNiWorld.</p>
			</div>
			<div class="col-lg-6">
				<img style="width:100%;" src="{{asset('images/khuvuichoi/hpbd.jpg')}}" alt="">
			</div>
			
		</div>
	</div>
	<!-- thông tin tiNi world -->
	<div class="container end">
		<div style="margin-top: 50px;" class="row">
			<div class="col-sm-4">
				<div class="col-sm-3">
				<img class="img-thongtin icon-left" src="{{asset('images/thongtin/icon-fb.png')}}" alt="">
				</div>
				<div class="col-sm-8 icon-right">
					<span>Theo dõi</span>
					<a class="icon-thongtin"style="color: #704f32" href="https://www.facebook.com/tiNiWorld/">Fanpage của tiNiWorld</a>  để cập nhật nhiều thông tin khuyến mãi hấp dẫn
				</div>
			</div>
			<div class="col-sm-4">
				<div class="col-sm-3">
				<img class="img-thongtin icon-left" src="{{asset('images/thongtin/icon-smartphone.png')}}" alt="">
				</div>
				<div class="col-sm-8 icon-right">
					<span>Gọi hotline 0908 04 04 11 nếu muốn đặt vé số lượng lớn hoặc đặt tiệc sinh nhật, ngoại khóa cho thiếu nhi</span>
					
				</div>
			</div>
			<div class="col-sm-4">
				<div class="col-sm-3">
				<img class="img-thongtin icon-left" src="{{asset('images/thongtin/icon-clock.png')}}" alt="">
				</div>
				<div class="col-sm-8 icon-right">
					<span>tiNiWorld mở cửa vào 10h sáng tới 9h30 tối các ngày từ thứ Hai tới Chủ nhật</span>
					
				</div>
			</div>
		</div>
	</div>
<!-- end -->
	
</div>
</main>
@endsection
@section('js')
<script src="{{ asset('js/jstime.js') }}"></script>
@endsection
