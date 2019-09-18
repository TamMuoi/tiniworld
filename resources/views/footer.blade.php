<footer class="footer">	
	
	<div class="footer-top-area pb-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4">
					<div class="title-col">Về tiNiWorld</div>
					<div class="about-content">Thành lập từ năm 2009, tiNiWorld là tổ hợp khu vui chơi giải trí cho trẻ em hàng đầu Việt Nam với hơn 48 trung tâm trên toàn quốc.</div>
					<div class="about-contents-sub">Các dịch vụ hiện có:
						<ul>
							<li><i class="far fa-check-square"></i> &nbsp; <a href="#">Dịch vụ vui chơi giải trí cho trẻ em</a></li>
							<li><i class="far fa-check-square"></i> &nbsp; <a href="#">Tổ chức tiệc sinh nhật, sự kiện thiếu nhi</a></li>
						</ul>
					</div>
					<div class="logo-footer">
						<img src="{{ asset('images/logo-footer.png') }}" alt="" class="img-fluid">
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="title-col">Chăm sóc khách hàng</div>
					<div class="phone-contact"><i class="fas fa-phone-alt"></i> 0123 456 789 (8h - 18h)</div>
					<div class="gmail-contact"><i class="far fa-envelope"></i> talentwins@gmail.com</div>
					<div class="title-col">Phòng kinh doanh</div>
					<div class="area-room">
						<i class="fas fa-phone-alt"></i> Miền Nam : 0123.456.789 (8h – 18h) <br>
						<i class="fas fa-phone-alt"></i> Miền Bắc : 0123.456.789 (8h – 18h) <br>
						<p>Email: talentwins@gmail.com</p>
					</div>
					<div class="title-col">Liên kết - Link</div>
					<div class="link-contact">
						<a href="#">News tiNi</a> <br>
						<a href="#">Blog</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="title-col">Like fanpage của chúng tôi</div>
				</div>
			</div>
		</div> <!-- end footer-top-area -->
	</div>	
	<div class="footer-bottom-area">
		<div class="container">
			
		
			<div class="footer-bottom-site-into pt-3 pb-3">
				<div class="copyright-footer">Copyright © 2019 TALENWINS - Khu vui chơi tiNiWorld</div>
				<div class="footer-socail">
					<a href="#"><i class="fab fa-facebook-f"></i></a>
					<a href="#"><i class="fab fa-instagram"></i></a>
					<a href="#"><i class="fab fa-youtube"></i></a>
				</div>
			</div>
		</div>
	</div> <!-- end footer-bottom-area -->		
</footer> <!-- end footer -->

<div class="container-flui" style="position : relative">
    <div class="box-up">
        <div id="contact-socical" hidden>
            <a href="#">
                <div class="box-up-item">
                    <a href="#"><img src="images/mail-icon.png" alt=""></a>
                </div>
            </a>
            <a href="">
                <div class="box-up-item">
                    <img src="images/messager-icon.png" alt="">
                </div>
            </a>
            <a href="">
                <div class="box-up-item">
                    <a href="#"><img src="images/phone-icon.png" alt=""></a>
                </div>
            </a>

        </div>
        <a id="showcontact" onclick="showcontact()">
            <div class="box-up-item bacham">
                <i class="fas fa-ellipsis-h"></i>
            </div>
        </a>


    </div>
</div>
<script type="text/javascript">
    function showcontact() {
        //var contact= document.getElementById('contact');
        if($('#contact-socical').prop('hidden')===true){
            document.getElementById('contact-socical').removeAttribute('hidden');
        }
        else {
            $('#contact-socical').prop('hidden', true);
        }
    }
</script>





<!-- BACK-TO-TOP -->
<section class="back-to-top">
      <div class="back-to-top-button"><i class="fas fa-arrow-up"></i></div>
</section>