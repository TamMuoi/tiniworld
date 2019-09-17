@extends('master-layout')

@section('title')
	Khu vui chơi
@endsection

@section('content')
	<div class="home-wrapper">
		<!-- Slider -->
		<div class="main-slider">
			 
			    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1920px;height:720px;overflow:hidden;visibility:hidden;">
			        <!-- Loading Screen -->
			        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
			            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="{{ asset('images/loading/spin.svg') }}" />
			        </div>
			        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1920px;height:720px;overflow:hidden;">
			            <div data-b="0">
			                <img data-u="image" src="{{ asset('images/slider-1.png') }}"/>
			                <div data-ts="preserve-3d" style="position:absolute;top:77px;left:460px;width:460px;height:210px;">                 
			                </div> 
			            </div>
			            <div data-b="1">
			                <img data-u="image" src="{{ asset('images/slider-2.png') }}" />
			                <div data-ts="flat" data-p="1360" style="position:absolute;top:0px;left:0px;width:1920px;height:720px;overflow:hidden;">
			                  
			                </div>
			                <div data-ts="preserve-3d" style="position:absolute;top:20px;left:327px;width:336px;height:312px;">
			                    <div data-t="25" data-ts="preserve-3d" style="position:absolute;top:82px;left:104px;width:128px;height:147px;">
			                      
			                    </div>
			                 
			                </div>
			            </div>
			            <div data-b="2">
			                <img data-u="image" src="{{ asset('images/slider-3.png') }}" />
			                <div data-ts="flat" data-p="850" style="position:absolute;top:0px;left:0px;width:1920px;height:720px;overflow:hidden;">
			                  
			                    <div data-t="72" data-ts="preserve-3d" style="position:absolute;top:-210px;left:200px;width:580px;height:225px;">
			                      
			                    </div>
			                </div>
			               
			            </div>
			            <div data-b="3">
			                <img data-u="image" src="{{ asset('images/slider-4.png') }}" />
			                <div data-ts="flat" data-p="850" style="position:absolute;top:0px;left:0px;width:1920px;height:720px;overflow:hidden;">
			                  
			                    <div data-t="72" data-ts="preserve-3d" style="position:absolute;top:-210px;left:200px;width:580px;height:225px;">
			                      
			                    </div>
			                </div>
			               
			            </div>
			             <div data-b="4">
			                <img data-u="image" src="{{ asset('images/slider-5.jpg') }}" />
			                <div data-ts="flat" data-p="850" style="position:absolute;top:0px;left:0px;width:1920px;height:720px;overflow:hidden;">
			                  
			                    <div data-t="72" data-ts="preserve-3d" style="position:absolute;top:-210px;left:200px;width:580px;height:225px;">
			                      
			                    </div>
			                </div>
			               
			            </div>
			             <div data-b="5">
			                <img data-u="image" src="{{ asset('images/slider-6.png') }}" />
			                <div data-ts="flat" data-p="850" style="position:absolute;top:0px;left:0px;width:1920px;height:720px;overflow:hidden;">
			                  
			                    <div data-t="72" data-ts="preserve-3d" style="position:absolute;top:-210px;left:200px;width:580px;height:225px;">
			                      
			                    </div>
			                </div>
			               
			            </div>
			             <div data-b="5">
			                <img data-u="image" src="{{ asset('images/slider-7.png') }}" />
			                <div data-ts="flat" data-p="850" style="position:absolute;top:0px;left:0px;width:1920px;height:720px;overflow:hidden;">
			                  
			                    <div data-t="72" data-ts="preserve-3d" style="position:absolute;top:-210px;left:200px;width:580px;height:225px;">
			                      
			                    </div>
			                </div>
			               
			            </div>
			        </div>

			         <!-- Bullet Navigator -->
			         <div data-u="navigator" class="jssorb101" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
			            <div data-u="prototype" class="i" style="width:16px;height:16px;">
			                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
			                    <circle class="co" cx="8000" cy="8000" r="5000"></circle>
			                    <circle class="ci" cx="8000" cy="8000" r="3000"></circle>
			                </svg>
			            </div>
			        </div> <!-- end Bullet Navigator -->
			        
			        <!-- Start Controll Arrrow -->
 			       <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
			            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
			                <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
			            </svg>
			        </div>
			        <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
			            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
			                <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
			            </svg>
			        </div> 
			    </div> <!-- end controll arrow -->
  
		</div> <!-- end Slider -->
		<div class="main-content">
			<div class="container">				
				<div class="news-promotion">
					<h2 class="title-block text-center wow fadeInLeft">
						Tin tiNi & Khuyến mãi
					</h2>
					<div class="small-line mt-3 wow jackInTheBox"></div>
					<div class="block-news mt-5">
						<div class="row">
							<div class="col-md-4">
								<div class="card mb-3 wow fadeInLeft">
								<a href="#" class="img-items">
								  <img src="{{ asset('images/news-3.png')}}" class="card-img-top" alt="...">
								</a>
								  <div class="card-body">
								    <h5 class="card-title">Check in rinh quà ngay trung thu. Còn gì tuyệt hơn</h5>
								    <p class="card-text">Còn gì vui hơn khi vui chơi trung thu tại tiNiWorld mà còn được nhận quà. Nhân dịp trung thu ...</p>
								    <a href="#" class="btn btn-primary">Xem chi tiết >></a>
								  </div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card mb-3 wow bounceInDown">
								  <a href="#" class="img-items">
								  <img src="{{ asset('images/news-1.png')}}" class="card-img-top" alt="...">
								</a>
								  <div class="card-body">
								    <h5 class="card-title">Háo hức chờ đón sự xuất hiện tiniworld thứ 50 tại CRESCENT MALL</h5>
								    <p class="card-text">Ngày 30/8/2019 sẽ đánh dấu cột mốc tiNiWorld thứ 50 đi vào hoạt động, chính thức có mặt tại tầng ...</p>
								    <a href="#" class="btn btn-primary">Xem chi tiết >></a>
								  </div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card mb-3 wow fadeInRight">
								 <a href="#" class="img-items">
								  <img src="{{ asset('images/news-2.jpg')}}" class="card-img-top" alt="...">
								</a>
								  <div class="card-body">
								    <h5 class="card-title">Khám phá 2 TINIWORLD mới toanh tại VINCOM PLAZA NGÔ QUYỀN, ĐÀ NẴNG và VINCOM BÀ TRIỆU, HN</h5>
								    <p class="card-text">TiniWorld chính thức đưa vào hoạt động 2 trung tâm mới toanh, tọa lạc tại thành phố biển nổi tiếng </p>
								    <a href="#" class="btn btn-primary">Xem chi tiết >></a>
								  </div>
								</div>
							</div>
						</div>
					</div>  <!-- end block-news -->
					</div><!-- end news-promotion -->
				<div class="why-choose-block mt-5">
					<h2 class="title-block text-center wow fadeInLeft">
						Vì sao lựa chọn tiNiWorld
					</h2>
					<div class="small-line mt-3 wow jackInTheBox"></div>
					<div class="why-choose-option mt-5">
						<div class="row">
							<div class="col-md-3 col-sm-6 item" style="height: 289px;">
								<div class="ztl-widget-circle wow slideOutLeft" data-wow-duration="1.5s" data-wow-delay="0.2s" style="background-color:#fc44e0; color:#fc44e0;">
									<img src="{{ asset('images/option-1.png') }}" alt="">
									
								</div>
								<div class="ztl-widget-circle-title" style="color:#fc44e0;">Trí tuệ</div>
								<div class="ztl-widget-circle-description">Khu vui chơi đa dạng giúp bé tìm hiểu về thế giới qua những hoạt động tuyệt vời</div>
							</div>
							<div class="col-md-3 col-sm-6 item" style="height: 289px;">
								<div class="ztl-widget-circle wow bounce" data-wow-duration="1.5s" data-wow-delay="0.5s" data-wow-iteration="2" style="background-color:#1f73e0; color:#1f73e0;">
									<img src="{{ asset('images/option-2.png') }}" alt="">
									
								</div>
								<div class="ztl-widget-circle-title" style="color:#fc44e0;">Thể chất</div>
								<div class="ztl-widget-circle-description">tiNiWorld giúp bé có điều kiện vận động và phát triển tốt về thể chất
								</div>
								
							</div>
							<div class="col-md-3 col-sm-6 item" style="height: 289px;">
								<div class="ztl-widget-circle wow bounce" data-wow-duration="1.5s" data-wow-delay="0.5s" data-wow-iteration="2" style="background-color:#eaea23; color:#eaea23;">
									<img src="{{ asset('images/option-3.png') }}" alt="">
									
								</div>
								<div class="ztl-widget-circle-title" style="color:#fc44e0;">Mỹ thuật</div>
								<div class="ztl-widget-circle-description">Bé được rèn luyện khả năng thẩm mỹ qua các góc chơi tranh cát, tô màu, tô tượng
								</div>
							</div>
							<div class="col-md-3 col-sm-6 item" style="height: 289px;">
								<div class="ztl-widget-circle wow slideOutRight" data-wow-duration="1.5s" data-wow-delay="0.2s" style="background-color:#539e1a; color:#539e1a;">
									<img src="{{ asset('images/option-4.png') }}" alt="">
									
								</div>
								<div class="ztl-widget-circle-title" style="color:#fc44e0;">Cảm xúc</div>
								<div class="ztl-widget-circle-description">Các hoạt động giao lưu tưng bừng tại tiNiWorld giúp bé có được niềm vui khi chơi cùng bạn bè đồng lứa
								</div>
							</div>
						</div>						
					</div> <!-- end why-choose-option -->
				</div> <!-- end why-choose-block -->
			</div>
			<div class="numbers-block">
				<div class="overlay"></div>
				<div class="numbers-block-title text-center mt-2">Những con số biết nói</div>
				<div class="circle-numbers">
					<div class="container">
						<div class="row">						
							<div class="col-md-3 col-sm-6">
								<div class="one-circle counter wow shake" data-count="1000" data-wow-delay="1s" data-wow-duration="1s" data-wow-iteration = "2">0</div>
								<div class="one-circle-title">Số trung tâm</div>				
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="one-circle counter wow rubberBand" data-count="1000" data-wow-delay="1s" data-wow-duration="1s" data-wow-iteration = "2">0</div>
								<div class="one-circle-title">Số nhân viên</div>				
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="one-circle counter wow rubberBand" data-count="1000" data-wow-delay="1s" data-wow-duration="1s" data-wow-iteration = "2">0</div>
								<div class="one-circle-title">Nụ cười/ngày</div>				
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="one-circle counter wow shake" data-count="1000" data-wow-delay="1s" data-wow-duration="1s" data-wow-iteration = "2">0</div>
								<div class="one-circle-title">Sự kiện/năm</div>				
							</div>								
						</div>
					</div>
				</div>
			</div> <!-- end numbers-block -->		
			<div class="active-images-block mt-5">
				<div class="container">
					<h2 class="title-block text-center wow fadeInDown">
						Hình ảnh tiNiWorld
					</h2>
					<div class="small-line mt-3 wow rubberBand" data-wow-delay="0.5s" data-wow-duration="1s" data-wow-iteration="2"></div>
					<div class="active-images-content text-center mt-4 wow fadeInLeftBig">Những hoạt động và góc chơi tuyệt đẹp của khu vui chơi tiNiWorld khiến các ba mẹ thích mê</div>
					<div class="active-images-box mt-5">
						
						<div class="row">
							
							<div class="col-md-3 col-sm-6 col-xs-6">
								<div class="card mb-3 wow fadeInLeft">
								  <a href="#" class="active-images-box-link">
									<img src="{{ asset('images/box-active-1.png') }}" alt="" class="card-img-top img-fluid">
								  </a>
								 
								</div>
								
							</div>
							<div class="col-md-3 col-sm-6 col-xs-6">
								<div class="card mb-3 wow fadeInDown">
								  <a href="#" class="active-images-box-link">
									<img src="{{ asset('images/box-active-2.png') }}" alt="" class="card-img-top img-fluid">
								  </a>
								 
								</div>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-6">
								<div class="card mb-3 wow fadeInUp">
								  <a href="#" class="active-images-box-link">
									<img src="{{ asset('images/box-active-3.png') }}" alt="" class="card-img-top img-fluid">
								  </a>
								 
								</div>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-6">
								<div class="card mb-3 wow fadeInRight">
								  <a href="#" class="active-images-box-link">
									<img src="{{ asset('images/box-active-4.png') }}" alt="" class="card-img-top img-fluid">
								  </a>
								 
								</div>
							</div>
						</div>
								
					</div> <!-- end active-images-box -->
				</div>
			</div> <!-- end active-images-block -->
			<div class="feedback-block mt-5">
				<div class="feedback-bg-block">
					<div class="container">
							<div class="owl-carousel owl-theme">
						    <div class="item">
						    	<p class="feedback-content text-center">Qua rất nhiều trung tâm vui chơi nhưng tôi thấy tiNiWorld vẫn là tốt nhất vì có đủ khu vực chơi cho con. Các con tôi không còn muốn về nhà nữa</p>
						    	<div class="small-line-white"></div>
						    	<p class="feedback-author text-center">Anh Tâm Muỗi - Hải Dương</p>
						    </div>
						    <div class="item">
						    	<p class="feedback-content text-center">Không ngờ khu vui chơi đẹp như thế: sân cát, nhà bóng, hồ câu cái gì cũng có, các nhân viên của tiNi cũng rất thân thiện. Tôi rất thích đưa con tới đây</p>
						    	<div class="small-line-white"></div>
						    	<p class="feedback-author text-center">Anh Tâm Muỗi - Hải Dương</p>
						    </div>
						    <div class="item">
						    	<p class="feedback-content text-center">Khu vui chơi sạch sẽ và nhiều chỗ chơi khác nhau, đồ chơi đẹp và an toàn. Tôi luôn mong những trung tâm thế này có mặt ở mọi quận huyện để trẻ con được về đúng tuổi thơ của mình</p>
						    	<div class="small-line-white"></div>
						    	<p class="feedback-author text-center">Anh Tâm Muỗi - Hải Dương</p>
						    </div>
						</div>
					</div>				
				</div>
			</div>
			<div class="blog-block mt-5">
				<div class="container">			
					<h2 class="title-block text-center wow fadeInLeft">
						Blog
					</h2>
					<div class="small-line mt-3 wow jackInTheBox"></div>
					<div class="blog-images mt-5 pb-5"> 
						
						<div class="row">
							<div class="col-md-4">
								<div class="card mb-3 wow fadeInLeft">
								<a href="#" class="img-items">
								  <img src="{{ asset('images/news-3.png')}}" class="card-img-top" alt="...">
								</a>
								  <div class="card-body">
								    <h5 class="card-title">Check in rinh quà ngay trung thu. Còn gì tuyệt hơn</h5>
								    <p class="card-text">Còn gì vui hơn khi vui chơi trung thu tại tiNiWorld mà còn được nhận quà. Nhân dịp trung thu ...</p>
								    <a href="#" class="btn btn-primary">Xem chi tiết >></a>
								  </div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card mb-3 wow bounceInDown">
								  <a href="#" class="img-items">
								  <img src="{{ asset('images/news-1.png')}}" class="card-img-top" alt="...">
								</a>
								  <div class="card-body">
								    <h5 class="card-title">Háo hức chờ đón sự xuất hiện tiniworld thứ 50 tại CRESCENT MALL</h5>
								    <p class="card-text">Ngày 30/8/2019 sẽ đánh dấu cột mốc tiNiWorld thứ 50 đi vào hoạt động, chính thức có mặt tại tầng ...</p>
								    <a href="#" class="btn btn-primary">Xem chi tiết >></a>
								  </div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card mb-3 wow fadeInRight">
								 <a href="#" class="img-items">
								  <img src="{{ asset('images/news-2.jpg')}}" class="card-img-top" alt="...">
								</a>
								  <div class="card-body">
								    <h5 class="card-title">Khám phá 2 TINIWORLD mới toanh tại VINCOM PLAZA NGÔ QUYỀN, ĐÀ NẴNG và VINCOM BÀ TRIỆU, HN</h5>
								    <p class="card-text">TiniWorld chính thức đưa vào hoạt động 2 trung tâm mới toanh, tọa lạc tại thành phố biển nổi tiếng </p>
								    <a href="#" class="btn btn-primary">Xem chi tiết >></a>
								  </div>
								</div>
							</div>
						</div>
					</div>  
					</div> <!-- end blog-block -->
			</div> <!-- blog-block -->
			<div class="link-address mt-5 mb-5">
				<div class="container">
					<div class="link-address-view">
						<h3 style="font-size: 3rem;color: #2980b9;" class="wow bounce" data-wow-iteration="2">Địa điểm Tìm tiNiWorld gần nhà bạn</h3>
						<div class="btn-go wow tada" data-wow-iteration="2">											
							<a href="#" class="btn btn-success">Tới ngay</a>
						</div>
					</div>
				</div>
				
			</div>
		</div> <!--  end main-content -->
	</div> <!-- end home-wrapper -->

@endsection

@section('js')
	
	<script type="text/javascript" src="{{ asset('js/home-jvs.js') }}"></script>
	<script>
		new WOW().init();
	</script>
@endsection