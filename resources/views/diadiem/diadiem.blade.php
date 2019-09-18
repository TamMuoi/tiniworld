
@extends('master-layout')
@section('title')
	Địa điểm
@endsection
@section('css') 
    <link rel="stylesheet" type="text/css" href="{{ asset('css/diadiem.css') }}">
@endsection

@section('content')
<div class="main">
	<div class="container-fluid">
	<div class="vc_tta-tabs-container">
		<h1 class="title-diadiem">Địa điểm khu vui chơi tiNiWorld</h1>
		<!-- section a -->
		<div class="section-a">
			<div class="tab-list">
				<ul class="nav nav-tabs nav-tabs-mien" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link nav-link-mien" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">MIỀN NAM</a>
				</li>
				<li class="nav-item">
					<a class="nav-link nav-link-mien" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">MIỀN TRUNG</a>
				</li>
				<li class="nav-item">
					<a class="nav-link nav-link-mien" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">MIỀN BẮC</a>
				</li>
			</ul>
			</div>
			
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
					<a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-modern vc_btn3-color-danger" href=""><input type="submit" value="TP Hồ Chí Minh" class="btn btn-full btn-diadiem"></a>
					<a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-modern vc_btn3-color-danger" href=""><input type="submit" value="Cà mau" class="btn btn-full btn-diadiem"></a>
					<a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-modern vc_btn3-color-danger" href=""><input type="submit" value="Long An" class="btn btn-full btn-diadiem"></a>
					<a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-modern vc_btn3-color-danger" href=""><input type="submit" value="Mỹ Tho" class="btn btn-full btn-diadiem"></a>
					<a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-modern vc_btn3-color-danger" href=""><input type="submit" value="Củ Chi" class="btn btn-full btn-diadiem"></a>
					<a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-modern vc_btn3-color-danger" href=""><input type="submit" value="Vũng Tàu" class="btn btn-full btn-diadiem"></a>
					<a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-modern vc_btn3-color-danger" href=""><input type="submit" value="Buôn Mê Thuật" class="btn btn-full btn-diadiem"></a>
					<a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-modern vc_btn3-color-danger" href=""><input type="submit" value="Gia Lai" class="btn btn-full btn-diadiem"></a>
					<a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-modern vc_btn3-color-danger" href=""><input type="submit" value="Cần Thơ" class="btn btn-full btn-diadiem"></a>
					<a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-modern vc_btn3-color-danger" href=""><input type="submit" value="Bình Dương" class="btn btn-full btn-diadiem"></a>
					<a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-modern vc_btn3-color-danger" href=""><input type="submit" value="Đồng Nai" class="btn btn-full btn-diadiem"></a>
					<a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-modern vc_btn3-color-danger" href=""><input type="submit" value="An Giang" class="btn btn-full btn-diadiem"></a>
				</div>
				<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
					<a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-modern vc_btn3-color-danger" href=""><input type="submit" value="Đà Nẵng" class="btn btn-full btn-diadiem"></a>
				</div>
				<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
					<a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-modern vc_btn3-color-danger" href=""><input type="submit" value="Hà Nội" class="btn btn-full btn-diadiem"></a>
					<a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-modern vc_btn3-color-danger" href=""><input type="submit" value="Nghệ An" class="btn btn-full btn-diadiem"></a>
					<a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-modern vc_btn3-color-danger" href=""><input type="submit" value="Hải Phòng" class="btn btn-full btn-diadiem"></a>
					<a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-modern vc_btn3-color-danger" href=""><input type="submit" value="Bắc Ninh" class="btn btn-full btn-diadiem"></a>
					<a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-modern vc_btn3-color-danger" href=""><input type="submit" value="Phú Thọ" class="btn btn-full btn-diadiem"></a>
				</div>
			</div>
		</div>
	</div>
	<!-- section-img- -->
	<section id="portfolio">
			<div class="container-fluid p-0">
			<div class="row no-gutters">
				<!-- Bà Triệu -->
				<div class="portfolio rotate-in-center">
					<a class="portfolio-box" href="{{Route('trangchitietleft')}}">
						<img class="img-fuild img-diadiem"src="{{asset('images/diadiem/batrieu.jpg')}}">
						<div class="portfolio-box-caption">
							<p class="address ">Địa chỉ : Tầng 5, tòa tháp B – TTTM Vincom Center Bà Triệu, 91 Bà Triệu, phường Lê Đại Hành, quận Hai Bà Trưng, Tp Hà Nội.<br/>
							Hotline : 0906 639 558 <br/>
							Email: vbt@tiniworld.com 
							</p>
						</div>
						<div class="link">
							<p>
								<strong><a href="https://tiniworld.com/vi/kham-pha-2-tiniworld-moi-toanh-tai-vincom-plaza-ngo-quyen-da-nang-va-vincom-ba-trieu-hn/">tiNiWorld Vincom Center Bà Triệu </a></strong>
							</p>
						</div>
					</a>
				</div>
				<!-- Ngô Quyền -->
				<div class="portfolio rotate-in-center">
					<a class="portfolio-box" href="{{Route('trangchitietleft')}}">
						<img class="img-fuild img-diadiem"src="{{asset('images/diadiem/ngoquyen.jpg')}}">
						<div class="portfolio-box-caption">
							<p class="address">Địa chỉ : Tầng 3 – TTTM Vincom Plaza Ngô Quyền, 910A Ngô Quyền, Q. Sơn Trà, Tp. Đà Nẵng<br/>
							Hotline : 0901 317 636<br/>
							Email: vdn@tiniworld.com
							</p>
						</div>
						<div class="link">
							<p>
								<strong><a href="https://tiniworld.com/vi/kham-pha-2-tiniworld-moi-toanh-tai-vincom-plaza-ngo-quyen-da-nang-va-vincom-ba-trieu-hn/">tiNiWorld Vincom Plaza Ngô Quyền</a></strong>
							</p>
						</div>
					</a>
				</div>
				<!-- Vinh --> 
				<div class="portfolio rotate-in-center">
					<a class="portfolio-box" href="{{Route('tiniworldvinh')}}">
						<img class="img-fuild img-diadiem"src="{{asset('images/diadiem/Vinh.jpg')}}">
						<div class="portfolio-box-caption">
							<p class="address">Địa chỉ : Tầng 2, TTTM Hoa Sen, Số 69 Hồ Tùng Mậu, Phường Trường Thi, Thành Phố Vinh, Tỉnh Nghệ An<br/>
							Hotline : 0901 422 9866<br/>
							Email: vic@tiniworld.com
							</p>
						</div>
						<div class="link">
							<p>
								<strong><a href="https://tiniworld.com/vi/thanh-pho-vinh-bung-no-voi-san-choi-tuoi-tho-tiniworld/">tiNiWorld Vinh Centre</a></strong>
							</p>
						</div>
					</a>
				</div>
				<!-- Long Biên -->
				<div class="portfolio rotate-in-center">
					<a class="portfolio-box" href="{{Route('tiniworldlongbien')}}">
						<img class="img-fuild img-diadiem"src="{{asset('images/diadiem/longbien.jpg')}}">
						<div class="portfolio-box-caption">
							<p class="address">Địa chỉ : Tầng 4, TTTM Vincom Plaza Long Biên, phường Việt Hưng, Q. Long Biên, Tp. Hà Nội<br/>
							Hotline : 0906 605 919<br/>
							Email: vlb@tiniworld.com
							</p>
						</div>
						<div class="link">
							<p>
								<strong><a href="https://tiniworld.com/vi/kham-pha-2-tiniworld-moi-toanh-tai-vincom-plaza-ngo-quyen-da-nang-va-vincom-ba-trieu-hn/">tiNiWorld Vincom Plaza Long Biên</a></strong>
							</p>
						</div>
					</a>
				</div>
				<!-- Crescent Mall -->
				<div class="portfolio rotate-in-center">
					<a class="portfolio-box" href="{{Route('tiniworldthu50')}}">
						<img class="img-fuild img-diadiem"src="{{asset('images/diadiem/crescentmall.jpg')}}">
						<div class="portfolio-box-caption">
							<p class="address">Địa chỉ : tầng B1 – TTTM Crescent Mall, 101 đường Tôn Dật Tiên, Phường Tân Phú, Quận 7, TP. HCM<br/>
							Hotline : 0909 370 558<br/>
							Email: csm@tiniworld.com
							</p>
						</div>
						<div class="link">
							<p>
								<strong><a href="https://tiniworld.com/vi/kham-pha-san-choi-tuoi-tho-tini-vincom-nam-long-quan-7/">tiNiWorld Crescent Mall</a></strong>
							</p>
						</div>
					</a>
				</div>
				<!-- aaa -->
				<div class="portfolio rotate-in-top">
					<a class="portfolio-box" href="{{Route('trangchitietleft')}}">
						<img class="img-fuild img-diadiem"src="{{asset('images/diadiem/batrieu.jpg')}}">
						<div class="portfolio-box-caption">
							<p class="address ">Địa chỉ : Tầng 5, tòa tháp B – TTTM Vincom Center Bà Triệu, 91 Bà Triệu, phường Lê Đại Hành, quận Hai Bà Trưng, Tp Hà Nội.<br/>
							Hotline : 0906 639 558 <br/>
							Email: vbt@tiniworld.com 
							</p>
						</div>
						<div class="link">
							<p>
								<strong><a href="https://tiniworld.com/vi/kham-pha-2-tiniworld-moi-toanh-tai-vincom-plaza-ngo-quyen-da-nang-va-vincom-ba-trieu-hn/">tiNiWorld Vincom Center Bà Triệu </a></strong>
							</p>
						</div>
					</a>
				</div>
				<!-- Ngô Quyền -->
				<div class="portfolio rotate-in-top">
					<a class="portfolio-box" href="{{Route('tiniworldthu50')}}">
						<img class="img-fuild img-diadiem"src="{{asset('images/diadiem/crescentmall.jpg')}}">
						<div class="portfolio-box-caption">
							<p class="address">Địa chỉ : tầng B1 – TTTM Crescent Mall, 101 đường Tôn Dật Tiên, Phường Tân Phú, Quận 7, TP. HCM<br/>
							Hotline : 0909 370 558<br/>
							Email: csm@tiniworld.com
							</p>
						</div>
						<div class="link">
							<p>
								<strong><a href="https://tiniworld.com/vi/kham-pha-san-choi-tuoi-tho-tini-vincom-nam-long-quan-7/">tiNiWorld Crescent Mall</a></strong>
							</p>
						</div>
					</a>
				</div>
				<!-- Vinh --> 
				<div class="portfolio rotate-in-top">
					<a class="portfolio-box" href="https://tiniworld.com/vi/thanh-pho-vinh-bung-no-voi-san-choi-tuoi-tho-tiniworld/">
						<img class="img-fuild img-diadiem"src="{{asset('images/diadiem/Vinh.jpg')}}">
						<div class="portfolio-box-caption">
							<p class="address">Địa chỉ : Tầng 2, TTTM Hoa Sen, Số 69 Hồ Tùng Mậu, Phường Trường Thi, Thành Phố Vinh, Tỉnh Nghệ An<br/>
							Hotline : 0901 422 9866<br/>
							Email: vic@tiniworld.com
							</p>
						</div>
						<div class="link">
							<p>
								<strong><a href="https://tiniworld.com/vi/thanh-pho-vinh-bung-no-voi-san-choi-tuoi-tho-tiniworld/">tiNiWorld Vinh Centre</a></strong>
							</p>
						</div>
					</a>
				</div>
				<!-- Long Biên -->
				<div class="portfolio rotate-in-top">
					<a class="portfolio-box" href="{{Route('trangchitietleft')}}">
						<img class="img-fuild img-diadiem"src="{{asset('images/diadiem/ngoquyen.jpg')}}">
						<div class="portfolio-box-caption">
							<p class="address">Địa chỉ : Tầng 3 – TTTM Vincom Plaza Ngô Quyền, 910A Ngô Quyền, Q. Sơn Trà, Tp. Đà Nẵng<br/>
							Hotline : 0901 317 636<br/>
							Email: vdn@tiniworld.com
							</p>
						</div>
						<div class="link">
							<p>
								<strong><a href="https://tiniworld.com/vi/kham-pha-2-tiniworld-moi-toanh-tai-vincom-plaza-ngo-quyen-da-nang-va-vincom-ba-trieu-hn/">tiNiWorld Vincom Plaza Ngô Quyền</a></strong>
							</p>
						</div>
					</a>
				</div>
				<!-- Crescent Mall -->
				<div class="portfolio rotate-in-top">
					<a class="portfolio-box" href="{{Route('tiniworldlongbien')}}">
						<img class="img-fuild img-diadiem"src="{{asset('images/diadiem/longbien.jpg')}}">
						<div class="portfolio-box-caption">
							<p class="address">Địa chỉ : Tầng 4, TTTM Vincom Plaza Long Biên, phường Việt Hưng, Q. Long Biên, Tp. Hà Nội<br/>
							Hotline : 0906 605 919<br/>
							Email: vlb@tiniworld.com
							</p>
						</div>
						<div class="link">
							<p>
								<strong><a href="https://tiniworld.com/vi/kham-pha-2-tiniworld-moi-toanh-tai-vincom-plaza-ngo-quyen-da-nang-va-vincom-ba-trieu-hn/">tiNiWorld Vincom Plaza Long Biên</a></strong>
							</p>
						</div>
					</a>
				</div>

			</div>
		</div>
	</section>
	<!-- end section-img -->
	<div class="container">
		<div class="row text-center">
			<p class="text-diadiem">Để được hướng dẫn cụ thể về các dịch vụ tổ chức tiệc sinh nhật, tiệc thiếu nhi, hoạt động ngoại khóa, sự kiện tài trợ… Quý phụ huynh vui lòng gọi Hotline của trung tâm muốn tổ chức sự kiện. Các nhân viên của chúng tôi sẽ tư vấn và báo giá cho quý vị.
			</p>
			<div class="col-lg-12 btn-uudai">
			<a class="link-uudai" href="https://tiniworld.com/vi/tiec-cho-be/">
				<i class="vc_btn3-icon fa fa-gift fa-git-diadiem"></i>
				ƯU ĐÃI ĐẶT TIỆC SINH NHẬT
			</a>
			</div>	
		</div>
	</div>
	<div class="maps">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15676.862081984838!2d106.61278716875503!3d10.794798755029465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752bf894db7137%3A0x8b48d821be179801!2zVMOibiBRdcO9LCBUw6JuIFBow7osIEjhu5MgQ2jDrSBNaW5oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1568173485771!5m2!1svi!2s" width="100%" height="350px" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
	</div>
</div>
</div>

@endsection