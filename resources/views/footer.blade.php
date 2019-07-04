<div class="box-chat">
<div class="container-fluid box-bottom">
	<div class="container d-flex justify-content-around ">
		<a href="#">đăng ký , thiết kế thi công : 0123231233</a>
		<a href="#">tư vấn thi công : 0124454595</a>
	</div>
</div>
<div class="lienhe text-left d-flex flex-column">
	<div id="minimize" onclick="minimize" class="icon">
		<i  class="fas fa-window-minimize"></i>
	</div>
	<h4 class="lienhe-head py-3 text-center">Tư vấn trực tiếp ngay</h4>
	<span>Vui lòng thông tin để bắt đầu chat :</span>
	<form>
		<div class="form-group">
					    <label for="formGroupExampleInput">Họ & Tên</label>
					    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Name">
					  </div>
					  <div class="form-group">
					    <label for="formGroupExampleInput2">Số điện thoại </label>
					    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="SĐT">
					  </div>
					   <div class="form-group">
					    <label for="formGroupExampleInput2">Nội dung cần tư vấn</label>
					    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Content">
					  </div>
					  <button type="button" class="btn">Đăng ký</button>
		</form>
</div>
</div>
<div class="container-fluid bg-dark footer pb-5">
	<div class="container pt-3">
		<div class="row">
			<div class="col-md-4">
				<h4>Liên hệ</h4>
				<span>CÔNG TY CỔ PHẦN TƯ VẤN XÂY DỰNG  abc</span><br>
				<span>Đc: Số 129-131 Chợ Hàng, Lê Chân, Hải Phòng</span><br>
				<span>Tel:</span><br>
				<span>Email:...</span><br>
				<span>Văn phòng đại diện</span><br>
				<span>Hà Nội : .........</span><br>
				<span>Việt Nam :. ..</span><br>
			</div>
			<div class="col-md-4">
				<h4>Hướng dẫn sử dụng</h4>
				<span>Liên hệ bảo hành</span><br>
				<span>Thông tin mới nhất</span><br>
				<span>Khuyến mãi dịch vụ</span><br>
				<span>Khách hàng</span><br>
				<span>Dự án</span><br>
				<span>Liên kết</span><br>
			</div>
			<div class="col-md-4">
				<h4>Đăng ký nhận thông tin</h4>
				<form>
					  <div class="form-group">
					    <label for="formGroupExampleInput">Email</label>
					    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Email">
					  </div>
					  <div class="form-group">
					    <label for="formGroupExampleInput2">Name</label>
					    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Name">
					  </div>
					  <button type="button" class="btn btn-primary">Đăng ký</button>
				</form>
			</div>
		</div>
		<div class="text-center text-light py-3">
			<i class="fas fa-copyright pr-2"></i>Coppy right TallentWins DevTeam
		</div>
	</div>
</div>

	<section class="back-to-top"><div class="back-to-top-button"><i class="fas fa-angle-double-up"></i></div></section>
	<script type="text/javascript" src="js/backtotop.js"></script>
	<script type="text/javascript">
		var minimize = document.getElementById("minimize");
		var box = document.querySelector(".box-chat");
		var tt = true;


		minimize.addEventListener('click', function () {
		    if (tt === true) {
		        box.classList.add('box-chat2');
		        box.classList.remove('box-chat');

		        tt = false;
		    } else {
		        box.classList.add('box-chat');
		        box.classList.remove('box-chat2');
		        tt = true;
		    }
		});
	</script>
