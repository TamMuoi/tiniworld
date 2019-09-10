@extends('master-layout')
@section('title')
	Trang chủ
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
					<h2 class="title-block text-center">
						Tin tiNi & Khuyến mãi
					</h2>
					<div class="small-line"></div>
					<div class="block-news mt-5">
						<div class="row">
							<div class="col-md-4">
								<div class="card">
								  <img src="{{ asset('images/news-3.png')}}" class="card-img-top" alt="...">
								  <div class="card-body">
								    <h5 class="card-title">Check in rinh quà ngay trung thu. Còn gì tuyệt hơn</h5>
								    <p class="card-text">Còn gì vui hơn khi vui chơi trung thu tại tiNiWorld mà còn được nhận quà. Nhân dịp trung thu ...</p>
								    <a href="#" class="btn btn-primary">Xem chi tiết >></a>
								  </div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card">
								  <img src="{{ asset('images/news-1.png') }}" class="card-img-top" alt="...">
								  <div class="card-body">
								    <h5 class="card-title">Háo hức chờ đón sự xuất hiện tiniworld thứ 50 tại CRESCENT MALL</h5>
								    <p class="card-text">Ngày 30/8/2019 sẽ đánh dấu cột mốc tiNiWorld thứ 50 đi vào hoạt động, chính thức có mặt tại tầng ...</p>
								    <a href="#" class="btn btn-primary">Xem chi tiết >></a>
								  </div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card">
								  <img src="{{ asset('images/news-2.jpg') }}" class="card-img-top" alt="...">
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
			
		</div>

		</div> 
	</div> <!-- end home-wrapper -->

@endsection

@section('js')
	
	<script type="text/javascript" src="{{ asset('js/home-jvs.js') }}"></script>
@endsection