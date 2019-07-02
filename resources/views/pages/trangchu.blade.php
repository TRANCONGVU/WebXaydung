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
                <img class="d-block w-100" src="https://edge.alluremedia.com.au/m/l/2019/03/GoT-season-8.jpg"
                    alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://edge.alluremedia.com.au/m/l/2019/03/GoT-season-8.jpg"
                    alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://edge.alluremedia.com.au/m/l/2019/03/GoT-season-8.jpg"
                    alt="Third slide">
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
    <h5 class="text-center">Đó là cam kết của Công ty Cổ phần Tư vấn Xây dựng Sơn Hà (SHAC) đối với Quý khách hàng. SHAC
        sẽ bằng mọi nỗ lực để tiếp tục là một thương hiệu uy tín trong ngành xây dựng, là đối tác tin cậy của Quý khách
        hàng trên toàn quốc.</h5>
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
                    <a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio sed libero nam
                        iusto! Eligendi excepturi soluta, iste dolorem non repellat, ut, nam aperiam facere, praesentium
                        omnis? Repudiandae veritatis eveniet sequi.</a>
                </div>
            </div>
            <div class="ss2 d-flex justify-content-start my-4">
                <img src="images/hinhanh1.jpg" alt="">
                <div class="f-flex flex-row ml-5">
                    <a href="#" class="text-danger">20+ bản vẽ chuẩn phong thủy</a>
                    <div>
                        <i class="fas fa-calendar-alt"></i> <span class="ml-2">20/7/2019</span>
                    </div>
                    <a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio sed libero nam
                        iusto! Eligendi excepturi soluta, iste dolorem non repellat, ut, nam aperiam facere, praesentium
                        omnis? Repudiandae veritatis eveniet sequi.</a>
                </div>
            </div>
            <div class="ss2 d-flex justify-content-start my-4">
                <img src="images/hinhanh1.jpg" alt="">
                <div class="f-flex flex-row ml-5">
                    <a href="#" class="text-danger">20+ bản vẽ chuẩn phong thủy</a>
                    <div>
                        <i class="fas fa-calendar-alt"></i> <span class="ml-2">20/7/2019</span>
                    </div>
                    <a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio sed libero nam
                        iusto! Eligendi excepturi soluta, iste dolorem non repellat, ut, nam aperiam facere, praesentium
                        omnis? Repudiandae veritatis eveniet sequi.</a>
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
            <a href="#" class="text-danger">Xem thêm các mẫu nhà đẹp >></a>

        </div>
    </div>
</section>
<section class="section-3 container">
    <div class="row">
        <div class="col-md-3">
            <div class="item-ss3">
                <h4>XEM HƯỚNG NHÀ</h4>
                <span>Năm sinh gia chủ</span>
                <select class="form-control" id="">
                    <option>1960</option>
                    <option>1961</option>
                    <option>1962</option>
                    <option>1963</option>
                    <option>1964</option>
                    <option>...</option>
                </select>
                <select class="form-control my-1" id="">
                    <option>Nam</option>
                    <option>Nữ</option>
                </select>
                <span>Hướng nhà</span>
                <select class="form-control" id="">
                    <option>Đông</option>
                    <option>Tây</option>
                    <option>Nam</option>
                    <option>Bắc</option>
                    <option>Đông Bắc</option>
                    <option>Đông Nam</option>
                    <option>Tây Nam</option>
                    <option>Tây bắc</option>
                </select>
                <button class="btn btn-danger mt-3">Xem ngay</button>
            </div>
        </div>
        <div class="col-md-3">
            <div class="item-ss3">
                <h4>XEM HƯỚNG NHÀ</h4>
                <span>Năm sinh gia chủ</span>
                <select class="form-control" id="">
                    <option>1960</option>
                    <option>1961</option>
                    <option>1962</option>
                    <option>1963</option>
                    <option>1964</option>
                    <option>...</option>
                </select>
                <select class="form-control my-1" id="">
                    <option>Nam</option>
                    <option>Nữ</option>
                </select>
                <span>Hướng nhà</span>
                <select class="form-control" id="">
                    <option>Đông</option>
                    <option>Tây</option>
                    <option>Nam</option>
                    <option>Bắc</option>
                    <option>Đông Bắc</option>
                    <option>Đông Nam</option>
                    <option>Tây Nam</option>
                    <option>Tây bắc</option>
                </select>
                <button class="btn btn-danger mt-3">Xem ngay</button>
            </div>
        </div>
        <div class="col-md-6">
            <div class="item-ss3 ss3-right text-center text-white">
                <h6>Tra cứu thông tin dự báo giá thành xây dựng nhà trọn gói</h6>
                <div class="d-flex justify-content-around">
                    <select class="form-control" id="">
                        <option>Nhà phố mặt tiền</option>
                        <option>Nhà phố 2 mặt tiền</option>
                        <option>Biệt thự phong cách châu âu</option>
                        <option>Biệt thự cổ phong cách châu âu</option>
                        <option>Biệt thự cao cấp</option>
                    </select>
                    <select class="form-control" id="">
                        <option>Xây thô</option>
                        <option>Xây thô + hoàn thiện trung bình</option>
                        <option>Xây thô + hoàn thiện hoàn toàn</option>

                    </select>
                </div>
                <div class="d-flex justify-content-around">
                    <select class="form-control" id="">
                        <option>Nhà phố mặt tiền</option>
                        <option>Nhà phố 2 mặt tiền</option>
                        <option>Biệt thự phong cách châu âu</option>
                        <option>Biệt thự cổ phong cách châu âu</option>
                        <option>Biệt thự cao cấp</option>
                    </select>
                    <select class="form-control" id="">
                        <option>Xây thô</option>
                        <option>Xây thô + hoàn thiện trung bình</option>
                        <option>Xây thô + hoàn thiện hoàn toàn</option>

                    </select>
                </div>
                <div class="d-flex justify-content-around">
                    <select class="form-control" id="">
                        <option>Nhà phố mặt tiền</option>
                        <option>Nhà phố 2 mặt tiền</option>
                        <option>Biệt thự phong cách châu âu</option>
                        <option>Biệt thự cổ phong cách châu âu</option>
                        <option>Biệt thự cao cấp</option>
                    </select>
                    <select class="form-control" id="">
                        <option>Xây thô</option>
                        <option>Xây thô + hoàn thiện trung bình</option>
                        <option>Xây thô + hoàn thiện hoàn toàn</option>

                    </select>
                </div>
                <button class="btn btn-secondary mt-3">Tra cứu</button>
            </div>
        </div>
    </div>

</section>
<section class="section-4">
    <div class="container">
        <h3 class="text-center text-uppercase">Thiết kế kiến trúc & nội thất nhà đẹp</h3>
        <div class="row">
            <div class="col-md-3">
                <div class="item">
                    <div class="item-img">
                        <img src="http://kientrucsuvietnam.vn/wp-content/uploads/2017/12/mau-biet-thu-vuon-13.jpg"
                            alt="">
                    </div>
                    <div class="ss4-title">
                        <span>thiết kế biệt thự xây dựng</span>
                    </div>

                    <div class="tag">
                        <a href="">Biệt thự pháp</a>
                        <a href="">Lâu đài</a>
                        <a href="">Biệt thự hiện đại</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="item">
                    <div class="item-img">
                        <img src="http://kientrucsuvietnam.vn/wp-content/uploads/2017/12/mau-biet-thu-vuon-13.jpg"
                            alt="">
                    </div>
                    <div class="ss4-title">
                        <span>thiết kế biệt thự xây dựng</span>
                    </div>

                    <div class="tag">
                        <a href="">Biệt thự pháp</a>
                        <a href="">Lâu đài</a>
                        <a href="">Biệt thự hiện đại</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="item">
                    <div class="item-img">
                        <img src="http://kientrucsuvietnam.vn/wp-content/uploads/2017/12/mau-biet-thu-vuon-13.jpg"
                            alt="">
                    </div>
                    <div class="ss4-title">
                        <span>thiết kế biệt thự xây dựng</span>
                    </div>

                    <div class="tag">
                        <a href="">Biệt thự pháp</a>
                        <a href="">Lâu đài</a>
                        <a href="">Biệt thự hiện đại</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="item">
                    <div class="item-img">
                        <img src="http://kientrucsuvietnam.vn/wp-content/uploads/2017/12/mau-biet-thu-vuon-13.jpg"
                            alt="">
                    </div>
                    <div class="ss4-title">
                        <span>thiết kế biệt thự xây dựng</span>
                    </div>

                    <div class="tag">
                        <a href="">Biệt thự pháp</a>
                        <a href="">Lâu đài</a>
                        <a href="">Biệt thự hiện đại</a>
                    </div>
                </div>
            </div>

        </div>


    </div>
</section>
<section class="section-5 my-3">
    <div class="container">
        <h3 class="text-center text-uppercase py-2">Xây nhà đẹp trọn gói đẳng cấp</h3>
        <div class="row">
            <div class="col-md-3">
                <div class="item">
                    <div class="item-img">
                        <img src="http://kientrucsuvietnam.vn/wp-content/uploads/2017/12/mau-biet-thu-vuon-13.jpg"
                            alt="">
                    </div>
                    <div class="ss4-title">
                        <span>thiết kế biệt thự xây dựng</span>
                    </div>

                    <div class="tag">
                        <a href="">Biệt thự pháp</a>
                        <a href="">Lâu đài</a>
                        <a href="">Biệt thự hiện đại</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="item">
                    <div class="item-img">
                        <img src="http://kientrucsuvietnam.vn/wp-content/uploads/2017/12/mau-biet-thu-vuon-13.jpg"
                            alt="">
                    </div>
                    <div class="ss4-title">
                        <span>thiết kế biệt thự xây dựng</span>
                    </div>

                    <div class="tag">
                        <a href="">Biệt thự pháp</a>
                        <a href="">Lâu đài</a>
                        <a href="">Biệt thự hiện đại</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="coment owl-carousel owl-theme">
                    <div class="item">
                        <div class="ss5-coment">
                            <i class="fas fa-quote-left"></i>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus, dolorem
                            corporis! At, animi l\
                            <i class="fas fa-quote-right"></i></div>
                        <div class="user-coment">
                            <img src="images/user-icon.png" alt="">
                            <div class="ml-4">
                                <span>Ông : Nguyễn văn A</span><br>
                                <span>Chủ đầu tư : biệt thự sabecon</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="ss5-coment">
                            <i class="fas fa-quote-left"></i>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus, dolorem
                            corporis! At, animi l\
                            <i class="fas fa-quote-right"></i></div>
                        <div class="user-coment">
                            <img src="images/user-icon.png" alt="">
                            <div class="ml-4">
                                <span>Ông : Nguyễn văn A</span><br>
                                <span>Chủ đầu tư : biệt thự sabecon</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <hr style="background-image: linear-gradient(to right,transparent,rgba(0,0,0,.15),transparent);">
</section>
<section class="section-6">
    <div class="container">
        <h3 class="text-center text-uppercase py-2">Mẫu thiết kế biệt thự lâu đài - dinh thự</h3>
        <div class="vidu owl-carousel owl-theme">
            <div class="item">
                <img src="images/sp.jpg" alt="">
                <a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae et sed enim laudantium
                    reiciendis beatae deleniti ipsum. Neque impedit laborum labore officiis ex pariatur quae autem
                    doloremque ab, possimus magnam!</a>
            </div>
            <div class="item">
                <img src="images/sp.jpg" alt="">
                <a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae et sed enim laudantium
                    reiciendis beatae deleniti ipsum. Neque impedit laborum labore officiis ex pariatur quae autem
                    doloremque ab, possimus magnam!</a>
            </div>
            <div class="item">
                <img src="images/sp.jpg" alt="">
                <a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae et sed enim laudantium
                    reiciendis beatae deleniti ipsum. Neque impedit laborum labore officiis ex pariatur quae autem
                    doloremque ab, possimus magnam!</a>
            </div>
            <div class="item">
                <img src="images/sp.jpg" alt="">
                <a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae et sed enim laudantium
                    reiciendis beatae deleniti ipsum. Neque impedit laborum labore officiis ex pariatur quae autem
                    doloremque ab, possimus magnam!</a>
            </div>
            <div class="item">
                <img src="images/sp.jpg" alt="">
                <a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae et sed enim laudantium
                    reiciendis beatae deleniti ipsum. Neque impedit laborum labore officiis ex pariatur quae autem
                    doloremque ab, possimus magnam!</a>
            </div>
            <div class="item">
                <img src="images/sp.jpg" alt="">
                <a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae et sed enim laudantium
                    reiciendis beatae deleniti ipsum. Neque impedit laborum labore officiis ex pariatur quae autem
                    doloremque ab, possimus magnam!</a>
            </div>
            <div class="item">
                <img src="images/sp.jpg" alt="">
                <a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae et sed enim laudantium
                    reiciendis beatae deleniti ipsum. Neque impedit laborum labore officiis ex pariatur quae autem
                    doloremque ab, possimus magnam!</a>
            </div>
        </div>
        <button class="btn btn-danger">Xem thêm</button>
        <hr style="background-image: linear-gradient(to right,transparent,rgba(0,0,0,.15),transparent);">




        <h3 class="text-center text-uppercase py-2">Mẫu thiết kế khách sạn - tòa nhà</h3>
        <div class="vidu owl-carousel owl-theme">
            <div class="item">
                <img src="images/sp.jpg" alt="">
                <a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae et sed enim laudantium
                    reiciendis beatae deleniti ipsum. Neque impedit laborum labore officiis ex pariatur quae autem
                    doloremque ab, possimus magnam!</a>
            </div>
            <div class="item">
                <img src="images/sp.jpg" alt="">
                <a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae et sed enim laudantium
                    reiciendis beatae deleniti ipsum. Neque impedit laborum labore officiis ex pariatur quae autem
                    doloremque ab, possimus magnam!</a>
            </div>
            <div class="item">
                <img src="images/sp.jpg" alt="">
                <a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae et sed enim laudantium
                    reiciendis beatae deleniti ipsum. Neque impedit laborum labore officiis ex pariatur quae autem
                    doloremque ab, possimus magnam!</a>
            </div>
            <div class="item">
                <img src="images/sp.jpg" alt="">
                <a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae et sed enim laudantium
                    reiciendis beatae deleniti ipsum. Neque impedit laborum labore officiis ex pariatur quae autem
                    doloremque ab, possimus magnam!</a>
            </div>
            <div class="item">
                <img src="images/sp.jpg" alt="">
                <a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae et sed enim laudantium
                    reiciendis beatae deleniti ipsum. Neque impedit laborum labore officiis ex pariatur quae autem
                    doloremque ab, possimus magnam!</a>
            </div>
            <div class="item">
                <img src="images/sp.jpg" alt="">
                <a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae et sed enim laudantium
                    reiciendis beatae deleniti ipsum. Neque impedit laborum labore officiis ex pariatur quae autem
                    doloremque ab, possimus magnam!</a>
            </div>
            <div class="item">
                <img src="images/sp.jpg" alt="">
                <a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae et sed enim laudantium
                    reiciendis beatae deleniti ipsum. Neque impedit laborum labore officiis ex pariatur quae autem
                    doloremque ab, possimus magnam!</a>
            </div>

        </div>
        <button class="btn btn-danger">Xem thêm</button>
        <hr style="background-image: linear-gradient(to right,transparent,rgba(0,0,0,.15),transparent);">







        <h3 class="text-center text-uppercase py-2">Khách hàng nói gì về chúng tôi</h3>
        <div class="vidu owl-carousel owl-theme">
            <div class="item">
                <img src="images/sp.jpg" alt="">
                <a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae et sed enim laudantium
                    reiciendis beatae deleniti ipsum. Neque impedit laborum labore officiis ex pariatur quae autem
                    doloremque ab, possimus magnam!</a>
            </div>
            <div class="item">
                <img src="images/sp.jpg" alt="">
                <a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae et sed enim laudantium
                    reiciendis beatae deleniti ipsum. Neque impedit laborum labore officiis ex pariatur quae autem
                    doloremque ab, possimus magnam!</a>
            </div>
            <div class="item">
                <img src="images/sp.jpg" alt="">
                <a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae et sed enim laudantium
                    reiciendis beatae deleniti ipsum. Neque impedit laborum labore officiis ex pariatur quae autem
                    doloremque ab, possimus magnam!</a>
            </div>
            <div class="item">
                <img src="images/sp.jpg" alt="">
                <a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae et sed enim laudantium
                    reiciendis beatae deleniti ipsum. Neque impedit laborum labore officiis ex pariatur quae autem
                    doloremque ab, possimus magnam!</a>
            </div>
            <div class="item">
                <img src="images/sp.jpg" alt="">
                <a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae et sed enim laudantium
                    reiciendis beatae deleniti ipsum. Neque impedit laborum labore officiis ex pariatur quae autem
                    doloremque ab, possimus magnam!</a>
            </div>
            <div class="item">
                <img src="images/sp.jpg" alt="">
                <a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae et sed enim laudantium
                    reiciendis beatae deleniti ipsum. Neque impedit laborum labore officiis ex pariatur quae autem
                    doloremque ab, possimus magnam!</a>
            </div>
            <div class="item">
                <img src="images/sp.jpg" alt="">
                <a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae et sed enim laudantium
                    reiciendis beatae deleniti ipsum. Neque impedit laborum labore officiis ex pariatur quae autem
                    doloremque ab, possimus magnam!</a>
            </div>

        </div>
        <button class="btn btn-danger">Xem thêm</button>
        <hr style="background-image: linear-gradient(to right,transparent,rgba(0,0,0,.15),transparent);">




        <h3 class="text-center text-uppercase py-2">Hân hạnh đồng hành cùng các thương hiệu uy tín</h3>
        <div class="contact owl-carousel owl-theme">
            <div class="item">
                <img src="images/sp.jpg" alt="">

            </div>
            <div class="item">
                <img src="images/sp.jpg" alt="">

            </div>
            <div class="item">
                <img src="images/sp.jpg" alt="">

            </div>
            <div class="item">
                <img src="images/sp.jpg" alt="">

            </div>
            <div class="item">
                <img src="images/sp.jpg" alt="">

            </div>
            <div class="item">
                <img src="images/sp.jpg" alt="">

            </div>
            <div class="item">
                <img src="images/sp.jpg" alt="">

            </div>

        </div>
        <hr style="background-image: linear-gradient(to right,transparent,rgba(0,0,0,.15),transparent);">

</section>
<script type="text/javascript" src="js/carousel-config.js"></script>
@endsection
