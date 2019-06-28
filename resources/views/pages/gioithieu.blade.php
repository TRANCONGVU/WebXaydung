@extends('master-layout')
@section('content')


<main>
    <!-- breadcrumb -->
    <section class="page-header">
        <div class="container">
            <div class="breadcrumb-wrapp">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Trang chu</li>
                    <li class="breadcrumb-item">Gioi thieu SHAC</li>
                </ul>
            </div>
            <div>
                <h1 class="page-tittle">Giới thiệu SHAC</h1>
            </div>
        </div>

    </section>

    <hr>
    <!--option  -->
    <section class="option text-center">
        <div class="container">
            <div class="option-t">
                <select name="" id="">
                    <option value="">công trình tại các tỉnh/thành</option>
                    <option value="">hà nội</option>
                    <option value="">hồ chí minh</option>
                    <option value="">đà nẵng</option>
                    <option value="">thái bình</option>
                    <option value="">cần thơ</option>
                    <option value="">nghệ an</option>

                </select>

                <div class="search-box">
                    <input type="text" placeholder="tìm theo mã số công trình">
                    <button type="button" class="btn btn-secondary"> <i class="fas fa-search"></i></button>
                </div>
            </div>



            <div class="text-option">
                <a href="#">Lorem ipsum dolor sit - amet consectetur adipisicinf san aditi</a>

            </div>
        </div>

    </section>
    <hr>

    <!-- gioi-thieu -->
    <section class="gioi-thieu">
        <div class="container">
            <div class="tittle-shac text-center">
                <h2>shac</h2>
                <h3>chất lượng trong thi công</h3>
                <h3>độc đáo trong thiết kế</h3>
            </div>

            <div class="content-tittle">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid, earum sequi. Placeat, magnam. Quas
                    velit
                    omnis cumque reiciendis quis nobis nam consequatur dignissimos pariatur
                    quo quos, officia modi quia animi repellendus! Qui minima ratione recusandae impedit veritatis
                    assumenda
                    animi tempore quidem? Labore, aspernatur quo. Perspiciatis eum ab debitis mollitia
                    obcaecati. Ducimus sequi at provident odit unde. Eligendi tempora voluptatibus provident. Possimus
                    vero
                    provident necessitatibus earum recusandae consectetur vel totam culpa, molestias
                    eaque dolore eius ad explicabo cum maiores delectus, illo aliquam repudiandae enim ipsa nobis, neque
                    voluptatem. Non commodi esse
                    hic eaque officiis qui maiores incidunt quaerat placeat? Veritatis, quaerat?</p>

            </div>
        </div>

    </section>

    <hr>

    <!-- dich-vu -->
    <section class="dich-vu">

        <div class="container">

            <div class="tittle-dv">
                <h2>các dịch vụ chính của SHAC</h2>
            </div>

            <div class="row">
                <!-- left -->
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="left">
                        <div class="item-1">
                            <div class="icon-key"><i class="fas fa-key"></i></div>
                            <div class="text-item">
                                <h3>Xây nhà trọn gói</h3>
                                <p>Dịch vụ chủ chốt tạo nên thương hiệu SHAC</p>
                            </div>
                        </div>

                        <div class="item-1">
                            <div class="icon-key"><i class="fas fa-tint"></i></div>
                            <div class="text-item">
                                <h3>Xây nhà trọn gói</h3>
                                <p>Dịch vụ chủ chốt tạo nên thương hiệu SHAC</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- right -->
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="left">
                        <div class="item-1">
                            <div class="icon-key"><i class="fas fa-home"></i></div>
                            <div class="text-item">
                                <h3>Xây nhà trọn gói</h3>
                                <p>Dịch vụ chủ chốt tạo nên thương hiệu SHAC</p>
                            </div>
                        </div>

                        <div class="item-1">
                            <div class="icon-key"><i class="fas fa-table"></i></div>
                            <div class="text-item">
                                <h3>Xây nhà trọn gói</h3>
                                <p>Dịch vụ chủ chốt tạo nên thương hiệu SHAC</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>



    </section>


    <!-- counter -->
    <section class="counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-12 text-center">
                    <div class="khach-hang">
                        <p class="counter-count">2000</p>
                        <p class="counter-p">Khách hàng</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12 text-center">
                    <div class="khach-hang">
                        <p class="counter-count">50</p>
                        <p class="counter-p">Tỉnh thành trên cả nước</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12 text-center">
                    <div class="khach-hang">
                        <p class="counter-count">15</p>
                        <p class="counter-p">Năm kinh nghiệm</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12 text-center">
                    <div class="khach-hang">
                        <p class="counter-count">5</p>
                        <p class="counter-p">VPDP</p>
                    </div>
                </div>

            </div>
        </div>

    </section>

    <!-- text-carousel -->
    <section class="text-carousel">
        <div class="container">
            <div class=" text-slide owl-carousel owl-theme">
                <div class="item">
                    <blockquote class="blockquote text-center">
                        <p class="mb-0 text-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                            posuere erat a
                            ante.</p>
                        <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source
                                Title</cite>
                        </footer>
                    </blockquote>
                </div>
                <div class="item">
                    <blockquote class="blockquote text-center">
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a
                            ante.</p>
                        <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source
                                Title</cite>
                        </footer>
                    </blockquote>
                </div>
                <div class="item">
                    <blockquote class="blockquote text-center">
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a
                            ante.</p>
                        <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source
                                Title</cite>
                        </footer>
                    </blockquote>
                </div>
                <div class="item">
                    <blockquote class="blockquote text-center">
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a
                            ante.</p>
                        <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source
                                Title</cite>
                        </footer>
                    </blockquote>
                </div>

            </div>
        </div>
    </section>

    <!-- tam nhin va su menh -->
    <section class="su-menh">
        <div class="container">
            <div class="tittle-sumenh text-center">
                <h2>tầm nhìn và sứ mệnh</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus nobis eaque id eius perspiciatis
                    assumenda iusto praesentium culpa quo mollitia dignissimos earum nisi architecto eligendi est atque
                    sit, magnam delectus?</p>
            </div>
            <!-- card -->
            <div class="row">
                <!-- card-content -->
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <div id="accordion">
                        <!-- chart -->
                        <div class="card">
                            <div class="card-header">
                                <a class="card-link" data-toggle="collapse" href="#collapseOne">
                                    <i class="fas fa-chart-bar"> Collapsible Group Item #1</i>
                                </a>
                            </div>
                            <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos quisquam sapiente sed
                                    at ratione eum iusto doloribus atque delectus id ex nisi, voluptates cumque rerum
                                    minima culpa ipsa nihil laboriosam?
                                </div>
                            </div>
                        </div>

                        <!-- people -->
                        <div class="card">
                            <div class="card-header">
                                <a class="card-link" data-toggle="collapse" href="#collapse2">
                                    <i class="fas fa-user"> Collapsible Group Item #1</i>
                                </a>
                            </div>
                            <div id="collapse2" class="collapse show" data-parent="#accordion">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos quisquam sapiente sed
                                    at ratione eum iusto doloribus atque delectus id ex nisi, voluptates cumque rerum
                                    minima culpa ipsa nihil laboriosam?
                                </div>
                            </div>
                        </div>

                        <!-- users -->
                        <div class="card">
                            <div class="card-header">
                                <a class="card-link" data-toggle="collapse" href="#collapse3">
                                    <i class="fas fa-users"> Collapsible Group Item #1</i>
                                </a>
                            </div>
                            <div id="collapse3" class="collapse show" data-parent="#accordion">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos quisquam sapiente sed
                                    at ratione eum iusto doloribus atque delectus id ex nisi, voluptates cumque rerum
                                    minima culpa ipsa nihil laboriosam?
                                </div>
                            </div>
                        </div>

                        <!-- globe -->
                        <div class="card">
                            <div class="card-header">
                                <a class="card-link" data-toggle="collapse" href="#collapse4">
                                    <i class="fas fa-globe"> Collapsible Group Item #1</i>
                                </a>
                            </div>
                            <div id="collapse4" class="collapse show" data-parent="#accordion">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos quisquam sapiente sed
                                    at ratione eum iusto doloribus atque delectus id ex nisi, voluptates cumque rerum
                                    minima culpa ipsa nihil laboriosam?
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- card-video -->
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <p><iframe width="350" height="220" src="//www.youtube.com/embed/QbTB04utjeg" class="lazyloading" data-was-processed="true"></iframe></p>
                    <p class="text-center">Tổng kết năm 2019 - SHAC</p>
                </div>
            </div>

            <!-- text-content -->
            <div class="text-content">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Unde nam sint voluptatum quis! Asperiores
                    nisi quis cumque labore nihil esse? Molestias ex aperiam nisi voluptatibus voluptatem nam mollitia
                    praesentium minima.</p>
            </div>

        </div>
    </section>

    <hr>

    <!-- gia tri cot loi -->
    <section class="gia-tri">
        <div class="container">
            <!-- tittle-gt -->
            <div class="tittle-gt text-center mb-4">
                <h2>giá trị cốt lõi</h2>
            </div>

            <!-- content-gt -->
            <div class="row">

                <!-- left -->
                <div class="col-lg-4 col-md-4  col-sm-12 ">
                    <div class="left-gt">
                        <div class="img-gt ">
                            <a href="#"><img src="https://shac.vn/wp-content/uploads/2013/12/gia-tri-coto-loi-shac-1024x733.jpg" alt=""></a>
                        </div>
                        <p class="text-center mt-3">Giá trị cốt loại của sơn hà - SHAC</p>
                    </div>
                </div>

                <!-- right -->
                <div class="col-lg-6 col-md-6 offset-md-2 col-sm-12">
                    <div class="text-gt-r">
                        <p><strong>S – Sáng Tạo:</strong> Chúng tôi quan điểm sáng tạo là nền tảng của sự phát triển. Do
                            đó, trong mọi
                            khâu để tạo nên những công trình “Chất lượng trong thi công – Độc đáo trong thiết kế”, SHAC
                            luôn ưu tiên cao và khuyến khích phát huy yếu tố sáng tạo</p>
                        <p><strong>S – Sáng Tạo:</strong> Chúng tôi quan điểm sáng tạo là nền tảng của sự phát triển. Do
                            đó, trong mọi
                            khâu để tạo nên những công trình “Chất lượng trong thi công – Độc đáo trong thiết kế”, SHAC
                            luôn ưu tiên cao và khuyến khích phát huy yếu tố sáng tạo</p>
                        <p><strong>S – Sáng Tạo:</strong> Chúng tôi quan điểm sáng tạo là nền tảng của sự phát triển. Do
                            đó, trong mọi
                            khâu để tạo nên những công trình “Chất lượng trong thi công – Độc đáo trong thiết kế”, SHAC
                            luôn ưu tiên cao và khuyến khích phát huy yếu tố sáng tạo</p>
                        <p><strong>S – Sáng Tạo:</strong> Chúng tôi quan điểm sáng tạo là nền tảng của sự phát triển. Do
                            đó, trong mọi
                            khâu để tạo nên những công trình “Chất lượng trong thi công – Độc đáo trong thiết kế”, SHAC
                            luôn ưu tiên cao và khuyến khích phát huy yếu tố sáng tạo</p>
                        <p><strong>S – Sáng Tạo:</strong> Chúng tôi quan điểm sáng tạo là nền tảng của sự phát triển. Do
                            đó, trong mọi
                            khâu để tạo nên những công trình “Chất lượng trong thi công – Độc đáo trong thiết kế”, SHAC
                            luôn ưu tiên cao và khuyến khích phát huy yếu tố sáng tạo</p>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <!-- van hoa -->
    <section class="van-hoa">
        <div class="container">

            <!-- van hoa doanh nghiep -->
            <h2 class="text-center mb-5">văn hóa doanh nghiệp</h2>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="text-dn">
                        <p>Chúng tôi hiểu được rằng văn hóa doanh nghiệp là chất keo gắn kết và thúc đẩy mỗi cá nhân làm
                            việc hăng say và cống hiến nhiều hơn cho sự phát triển của Công ty. Do đó, ngay từ những
                            ngày đầu thành lập, việc chú trọng xây dựng văn hóa doanh nghiệp luôn được coi là nhiệm vụ
                            trọng tâm trong chiến lược phát triển Công ty nói chung.</p>
                        <p>Chúng tôi hiểu được rằng văn hóa doanh nghiệp là chất keo gắn kết và thúc đẩy mỗi cá nhân làm
                            việc hăng say và cống hiến nhiều hơn cho sự phát triển của Công ty. Do đó, ngay từ những
                            ngày đầu thành lập, việc chú trọng xây dựng văn hóa doanh nghiệp luôn được coi là nhiệm vụ
                            trọng tâm trong chiến lược phát triển Công ty nói chung.</p>

                        <div class="list-dn">
                            <ul>
                                <li><i class="fas fa-check"></i> Văn hóa <strong>"làm"</strong></li>
                                <li><i class="fas fa-check"></i> văn hóa <strong>"chơi"</strong></li>
                            </ul>
                        </div>

                        <p>Chúng tôi hiểu được rằng văn hóa doanh nghiệp là chất keo gắn kết và thúc đẩy mỗi cá nhân làm
                            việc hăng say và cống hiến nhiều hơn cho sự phát triển của Công ty. Do đó, ngay từ những
                            ngày đầu thành lập, việc chú trọng xây dựng văn hóa doanh nghiệp luôn được coi là nhiệm vụ
                            trọng tâm trong chiến lược phát triển Công ty nói chung.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="img-dn mb-4">
                        <img src="https://shac.vn/wp-content/uploads/2013/12/Gioi-thieu-Son-ha-architecture-shac-1.jpg" alt="">
                    </div>
                    <p class="text-center">Đồng phục Sơn Hà Architecture</p>
                </div>
            </div>

            <!-- van hoa choi -->
            <h2 class="text-center mb-5">văn hóa chơi</h2>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 order-2">
                    <div class="text-dn">
                        <p>Chúng tôi hiểu được rằng văn hóa doanh nghiệp là chất keo gắn kết và thúc đẩy mỗi cá nhân làm
                            việc hăng say và cống hiến nhiều hơn cho sự phát triển của Công ty. Do đó, ngay từ những
                            ngày đầu thành lập, việc chú trọng xây dựng văn hóa doanh nghiệp luôn được coi là nhiệm vụ
                            trọng tâm trong chiến lược phát triển Công ty nói chung.</p>
                        <p>Chúng tôi hiểu được rằng văn hóa doanh nghiệp là chất keo gắn kết và thúc đẩy mỗi cá nhân làm
                            việc hăng say và cống hiến nhiều hơn cho sự phát triển của Công ty. Do đó, ngay từ những
                            ngày đầu thành lập, việc chú trọng xây dựng văn hóa doanh nghiệp luôn được coi là nhiệm vụ
                            trọng tâm trong chiến lược phát triển Công ty nói chung.</p>

                        <div class="list-dn">
                            <ul>
                                <li><i class="fas fa-check"></i> Văn hóa <strong>"làm"</strong></li>
                                <li><i class="fas fa-check"></i> văn hóa <strong>"chơi"</strong></li>
                            </ul>
                        </div>

                        <p>Chúng tôi hiểu được rằng văn hóa doanh nghiệp là chất keo gắn kết và thúc đẩy mỗi cá nhân làm
                            việc hăng say và cống hiến nhiều hơn cho sự phát triển của Công ty. Do đó, ngay từ những
                            ngày đầu thành lập, việc chú trọng xây dựng văn hóa doanh nghiệp luôn được coi là nhiệm vụ
                            trọng tâm trong chiến lược phát triển Công ty nói chung.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 order-1">
                    <div class="img-dn mb-4  ">
                        <iframe width="516" height="290" src="https://www.youtube.com/embed/_zUGxqjRXpk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <p class="text-center">Đồng phục Sơn Hà Architecture</p>
                </div>
            </div>

            <!-- van hoa lam -->
            <h2 class="text-center mb-5">văn hóa làm</h2>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="text-dn">
                        <p>Chúng tôi hiểu được rằng văn hóa doanh nghiệp là chất keo gắn kết và thúc đẩy mỗi cá nhân làm
                            việc hăng say và cống hiến nhiều hơn cho sự phát triển của Công ty. Do đó, ngay từ những
                            ngày đầu thành lập, việc chú trọng xây dựng văn hóa doanh nghiệp luôn được coi là nhiệm vụ
                            trọng tâm trong chiến lược phát triển Công ty nói chung.</p>
                        <p>Chúng tôi hiểu được rằng văn hóa doanh nghiệp là chất keo gắn kết và thúc đẩy mỗi cá nhân làm
                            việc hăng say và cống hiến nhiều hơn cho sự phát triển của Công ty. Do đó, ngay từ những
                            ngày đầu thành lập, việc chú trọng xây dựng văn hóa doanh nghiệp luôn được coi là nhiệm vụ
                            trọng tâm trong chiến lược phát triển Công ty nói chung.</p>

                        <div class="list-dn">
                            <ul>
                                <li><i class="fas fa-check"></i> Văn hóa <strong>"làm"</strong></li>
                                <li><i class="fas fa-check"></i> văn hóa <strong>"chơi"</strong></li>
                            </ul>
                        </div>

                        <p>Chúng tôi hiểu được rằng văn hóa doanh nghiệp là chất keo gắn kết và thúc đẩy mỗi cá nhân làm
                            việc hăng say và cống hiến nhiều hơn cho sự phát triển của Công ty. Do đó, ngay từ những
                            ngày đầu thành lập, việc chú trọng xây dựng văn hóa doanh nghiệp luôn được coi là nhiệm vụ
                            trọng tâm trong chiến lược phát triển Công ty nói chung.</p>
                    </div>
                </div>


                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="img-dn mb-4  ">
                        <img src="https://shac.vn/wp-content/uploads/2013/12/Gioi-thieu-Son-ha-architecture-shac-3-500x363.jpg" alt="">
                    </div>
                    <p class="text-center">Đồng phục Sơn Hà Architecture</p>
                </div>
            </div>
        </div>
    </section>

    <!-- history -->
    <section class="history mb-5">
        <div class="container">
            <h2 class="text-center mt-4">lịch sử phát triển và hình thành</h2>
            
            <!-- row-1 -->
            <div class="row mt-5">
                <!-- img -->
                <div class="col-lg-2 col-md-2 col-sm-12">
                    <div class="thumb">
                        <img src="https://shac.vn/wp-content/uploads/2013/12/da-gom-shac.jpg" alt="">
                    </div>
                </div>
                <!-- text -->
                <div class="col-lg-10 col-md-10 col-sm-12 ipad-reponsive">
                    <div class="wrapper-history">

                        <div class="text-box">
                            <p> <span>2003</span> Thành lập Công ty Cổ phần Đá gốm Sơn Hà – tiền thân của Công ty Cổ phần Tư vấn Xây dựng Sơn Hà (SHAC).</p>
                        </div>
                        <p class="text-center">
                            <a href="#" class="btn btn-light">Xem chi tiết...</a>
                        </p>
                    </div>
                </div>
            </div>
            <!-- row-2 -->
            <div class="row mt-5">
                <!-- img -->
                <div class="col-lg-2 col-md-2 col-sm-12">
                    <div class="thumb">
                        <img src="https://shac.vn/wp-content/uploads/2013/12/da-gom-shac.jpg" alt="">
                    </div>
                </div>
                <!-- text -->
                <div class="col-lg-10 col-md-10 col-sm-12 ipad-reponsive">
                    <div class="wrapper-history">

                        <div class="text-box">
                            <p> <span>2003</span> Thành lập Công ty Cổ phần Đá gốm Sơn Hà – tiền thân của Công ty Cổ phần Tư vấn Xây dựng Sơn Hà (SHAC).</p>
                        </div>
                        <p class="text-center">
                            <a href="#" class="btn btn-light">Xem chi tiết...</a>
                        </p>
                    </div>
                </div>
            </div>
            <!-- row-3 -->
            <div class="row mt-5">
                <!-- img -->
                <div class="col-lg-2 col-md-2 col-sm-12">
                    <div class="thumb">
                        <img src="https://shac.vn/wp-content/uploads/2013/12/da-gom-shac.jpg" alt="">
                    </div>
                </div>
                <!-- text -->
                <div class="col-lg-10 col-md-10 col-sm-12 ipad-reponsive">
                    <div class="wrapper-history">

                        <div class="text-box">
                            <p> <span>2003</span> Thành lập Công ty Cổ phần Đá gốm Sơn Hà – tiền thân của Công ty Cổ phần Tư vấn Xây dựng Sơn Hà (SHAC).</p>
                        </div>
                        <p class="text-center">
                            <a href="#" class="btn btn-light">Xem chi tiết...</a>
                        </p>
                    </div>
                </div>
            </div>
            <!-- row-4 -->
            <div class="row mt-5">
                <!-- img -->
                <div class="col-lg-2 col-md-2 col-sm-12">
                    <div class="thumb">
                        <img src="https://shac.vn/wp-content/uploads/2013/12/da-gom-shac.jpg" alt="">
                    </div>
                </div>
                <!-- text -->
                <div class="col-lg-10 col-md-10 col-sm-12 ipad-reponsive">
                    <div class="wrapper-history">

                        <div class="text-box">
                            <p> <span>2003</span> Thành lập Công ty Cổ phần Đá gốm Sơn Hà – tiền thân của Công ty Cổ phần Tư vấn Xây dựng Sơn Hà (SHAC).</p>
                        </div>
                        <p class="text-center">
                            <a href="#" class="btn btn-light">Xem chi tiết...</a>
                        </p>
                    </div>
                </div>
            </div>
            <!-- row-5 -->
            <div class="row mt-5">
                <!-- img -->
                <div class="col-lg-2 col-md-2 col-sm-12">
                    <div class="thumb">
                        <img src="https://shac.vn/wp-content/uploads/2013/12/da-gom-shac.jpg" alt="">
                    </div>
                </div>
                <!-- text -->
                <div class="col-lg-10 col-md-10 col-sm-12 ipad-reponsive">
                    <div class="wrapper-history">

                        <div class="text-box">
                            <p> <span>2003</span> Thành lập Công ty Cổ phần Đá gốm Sơn Hà – tiền thân của Công ty Cổ phần Tư vấn Xây dựng Sơn Hà (SHAC).</p>
                        </div>
                        <p class="text-center">
                            <a href="#" class="btn btn-light">Xem chi tiết...</a>
                        </p>
                    </div>
                </div>
            </div>
            <!-- row-6 -->
            <div class="row mt-5">
                <!-- img -->
                <div class="col-lg-2 col-md-2 col-sm-12">
                    <div class="thumb">
                        <img src="https://shac.vn/wp-content/uploads/2013/12/da-gom-shac.jpg" alt="">
                    </div>
                </div>
                <!-- text -->
                <div class="col-lg-10 col-md-10 col-sm-12 ipad-reponsive">
                    <div class="wrapper-history">

                        <div class="text-box">
                            <p> <span>2003</span> Thành lập Công ty Cổ phần Đá gốm Sơn Hà – tiền thân của Công ty Cổ phần Tư vấn Xây dựng Sơn Hà (SHAC).</p>
                        </div>
                        <p class="text-center">
                            <a href="#" class="btn btn-light">Xem chi tiết...</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- script-carousel -->
    <script src="js\gioithieu-gioithieu-carousel-config.js"></script>

    <!-- script-counter -->
    <script>
        $('.counter-count').each(function() {
            $(this).prop('Counter', 0).animate({
                Counter: $(this).text()
            }, {
                duration: 2000,
                easing: 'swing',
                step: function(now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
    </script>



</main>






@endsection