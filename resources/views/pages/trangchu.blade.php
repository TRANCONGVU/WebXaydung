	

	@extends('master-layout')
	@section('content')
	
	<section class="container-fluid">
		<div id="carousel1" class="carousel slide silde-home" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#carousel1" data-slide-to="0" class="active"></li>
		    <li data-target="#carousel1" data-slide-to="1"></li>
		    <li data-target="#carousel1" data-slide-to="2"></li>
		  </ol>
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img class="d-block w-100" src="https://edge.alluremedia.com.au/m/l/2019/03/GoT-season-8.jpg" alt="First slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="https://edge.alluremedia.com.au/m/l/2019/03/GoT-season-8.jpg" alt="Second slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="https://edge.alluremedia.com.au/m/l/2019/03/GoT-season-8.jpg" alt="Third slide">
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carousel1" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
			<div class="container d-flex justify-content-center mb-3">
				    <select class="form-control select-home" id="">
				      <option>Công trình tại tỉnh/thành</option>
				      <option>Hà nội</option>
				      <option>Phú Thọ</option>
				      <option>Đà Nẵng</option>
				      <option>Quảng Ninh</option>
				    </select>
				    <input class="form-control select-home ml-2" type="text" placeholder="Default input">
				    <button class="p-1 ml-2"><i class="fas fa-search"></i></button>
			</div>
			<div class="text-center text-danger">
				Tuổi xây nhà phù hợp 2019 - nhất định bạn nên nắm bắt
			</div>
				
			<hr style="background-image: linear-gradient(to right,transparent,rgba(0,0,0,.15),transparent);">
		</div>
	</section>
	<section class="section-2 container">
		<h3 class="text-center text-uppercase">16+ kiến tạo những công trình độc đáo trong thiết kế</h3>
		<h5 class="text-center">Đó là cam kết của Công ty Cổ phần Tư vấn Xây dựng Sơn Hà (SHAC) đối với Quý khách hàng. SHAC sẽ bằng mọi nỗ lực để tiếp tục là một thương hiệu uy tín trong ngành xây dựng, là đối tác tin cậy của Quý khách hàng trên toàn quốc.</h5>
		<div class="row my-3">
			<div class="col-md-7">
					<h3 class="text-center text-uppercase pb-2">Thông tin doanh nghiệp 24/7</h3>
					<div class="ss2 d-flex justify-content-start my-4">
						<img src="images/hinhanh1.jpg" alt="">
						<div class="f-flex flex-row ml-5">
							<a href="#" class="text-danger">20+ bản vẽ chuẩn phong thủy</a>
							<div>
								<i class="fas fa-calendar-alt"></i> <span class="ml-2">20/7/2019</span>
							</div>
							<a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio sed libero nam iusto! Eligendi excepturi soluta, iste dolorem non repellat, ut, nam aperiam facere, praesentium omnis? Repudiandae veritatis eveniet sequi.</a>
						</div>
					</div>
					<div class="ss2 d-flex justify-content-start my-4">
						<img src="images/hinhanh1.jpg" alt="">
						<div class="f-flex flex-row ml-5">
							<a href="#" class="text-danger">20+ bản vẽ chuẩn phong thủy</a>
							<div>
								<i class="fas fa-calendar-alt"></i> <span class="ml-2">20/7/2019</span>
							</div>
							<a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio sed libero nam iusto! Eligendi excepturi soluta, iste dolorem non repellat, ut, nam aperiam facere, praesentium omnis? Repudiandae veritatis eveniet sequi.</a>
						</div>
					</div>
					<div class="ss2 d-flex justify-content-start my-4">
						<img src="images/hinhanh1.jpg" alt="">
						<div class="f-flex flex-row ml-5">
							<a href="#" class="text-danger">20+ bản vẽ chuẩn phong thủy</a>
							<div>
								<i class="fas fa-calendar-alt"></i> <span class="ml-2">20/7/2019</span>
							</div>
							<a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio sed libero nam iusto! Eligendi excepturi soluta, iste dolorem non repellat, ut, nam aperiam facere, praesentium omnis? Repudiandae veritatis eveniet sequi.</a>
						</div>
					</div>	

			</div>
			<div class="col-md-5 ss2-right">
					<h3 class="text-center text-uppercase pb-2">Không gian nhà đẹp</h3>
					<img src="images/ks.jpg" alt="">
					<div class="slide-2 owl-carousel owl-theme mt-4">
						<div class="item">
							<a href=""><img src="images/hinhanh1.jpg" alt=""></a>
						</div>
						<div class="item"><img src="images/hinhanh1.jpg" alt=""></div>
						<div class="item"><img src="images/hinhanh1.jpg" alt=""></div>
						<div class="item"><img src="images/hinhanh1.jpg" alt=""></div>
					</div>
					<script type="text/javascript" src="js/carousel-config.js"></script>
			</div>
		</div>
	</section>
		
	@endsection