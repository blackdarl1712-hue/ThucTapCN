<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Truyện Đô Thị | StoryReview </title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    
    <style>
        /* Định nghĩa màu tùy chỉnh cho chủ đạo (Hồng nhạt) */
        .text-pink-main { color: #FFC0CB !important; } /* Hồng nhạt */
        .bg-pink-main { background-color: #FFC0CB !important; } /* Hồng nhạt */
        .border-pink-main { border-color: #FFC0CB !important; } /* Hồng nhạt */
        
        /* Định nghĩa màu cho chi tiết nổi bật (Đỏ) */
        .text-red-highlight { color: #DC3545 !important; } /* Đỏ Bootstrap */
        .bg-red-highlight { background-color: #DC3545 !important; } /* Đỏ Bootstrap */
        
        /* Thay đổi màu Spinner Loading */
        #spinner .spinner-border { border-color: #FFC0CB; border-right-color: transparent !important; }
        
        /* Thay đổi màu cho nút tìm kiếm và các nút chính */
        .btn-pink-main {
            background-color: #FFC0CB;
            color: #111; /* Text màu tối trên nền hồng */
            border: 1px solid #FFC0CB;
        }
        .btn-pink-main:hover {
            background-color: #FFB6C1;
        }
    </style>
    </head>

<body class="bg-dark text-white">
    <div id="spinner"
        class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-pink-main" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <div class="container-fluid px-5 py-4 d-none d-lg-block bg-black border-bottom border-secondary">
        <div class="row gx-0 align-items-center text-center">
            <div class="col-md-3 text-center text-lg-start">
                <div class="d-inline-flex align-items-center">
                    <a href="{{ route('home') }}" class="navbar-brand p-0">
                        <h1 class="display-5 text-pink-main m-0"><i
                                class="fas fa-book text-white me-2"></i>StoryReview</h1> 
                    </a>
                </div>
            </div>
            <div class="col-md-6 text-center">
                <div class="position-relative ps-4">
                    <div class="d-flex border border-pink-main rounded-pill">
                        <input class="form-control border-0 rounded-pill w-100 py-3 bg-dark text-white" type="text"
                            placeholder="Tìm kiếm truyện, tác giả...">
                        <button type="button" class="btn btn-pink-main rounded-pill py-3 px-5" style="border: 0;"><i
                                class="fas fa-search text-dark"></i></button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center text-lg-end">
                <div class="d-inline-flex align-items-center">
                    <a href="#" class="text-pink-main d-flex align-items-center justify-content-center me-3"
                        title="Truyện Yêu Thích"><span class="rounded-circle btn-md-square border"><i
                                class="fas fa-heart"></i></a>
                    <a href="#" class="text-pink-main d-flex align-items-center justify-content-center"
                        title="Tài Khoản"><span class="rounded-circle btn-md-square border"><i
                                class="fa fa-user"></i></span>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid nav-bar p-0">
        <div class="row gx-0 bg-pink-main px-5 align-items-center">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-dark bg-pink-main">
                    <a href="{{ route('home') }}" class="navbar-brand d-block d-lg-none">
                        <h1 class="display-5 text-white m-0"><i
                                class="fas fa-book text-dark me-2"></i>StoryReview</h1>
                    </a>
                    <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars fa-1x text-dark"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav ms-auto py-0">
                            <a href="{{ route('home') }}" class="nav-item nav-link text-white">Trang Chủ</a>
                            <div class="nav-item dropdown">
                                <a href="review.html" class="nav-link dropdown-toggle text-white active" data-bs-toggle="dropdown">Thể loại</a>
                                <div class="dropdown-menu bg-pink-main border-0 rounded-0 m-0">
                                    <div class="d-flex p-2">
                                        <div class="col-6">
                                            <h6 class="dropdown-header text-dark fw-bold">Thể loại truyện</h6>
                                            <a href="{{ route('tienhiep') }}" class="dropdown-item">Tiên Hiệp</a>
                                            <a href="{{ route('linhdi') }}" class="dropdown-item">Linh Dị</a>
                                            <a href="{{ route('huyenhuyen') }}" class="dropdown-item">Huyền Huyễn</a>
                                            <a href="{{ route('dothi') }}" class="dropdown-item active">Đô Thị</a>
                                            <a href="{{ route('ngontinh') }}" class="dropdown-item">Ngôn Tình</a>
                                        </div>
                                        <div class="col-6">
                                            <h6 class="dropdown-header text-dark fw-bold">Truyện theo Quốc gia</h6>
                                            <a href="#" class="dropdown-item">Việt Nam</a>
                                            <a href="#" class="dropdown-item">Trung Quốc</a>
                                            <a href="#" class="dropdown-item">Phương Tây</a>
                                            <a href="#" class="dropdown-item">Nhật Bản</a>
                                            <a href="#" class="dropdown-item">Hàn Quốc</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="news.html" class="nav-item nav-link text-white">Tin Tức Văn Học</a>
                            <a href="contact.html" class="nav-item nav-link me-2 text-white">Liên Hệ</a>
                        </div>
                        <a href="https://www.youtube.com/results?search_query=book+trailer" target="_blank"
                            class="btn btn-dark rounded-pill py-2 px-4 px-lg-3 mb-3 mb-md-3 mb-lg-0 text-pink-main border border-white"><i
                                class="fa fa-video me-2"></i> Xem Trailer Sách</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-dark p-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-3 text-pink-main mb-4">Truyện Thể Loại Đô Thị</h1>
            <p class="text-light fs-5">Tổng hợp các bài đánh giá về những bộ truyện đô thị, tổng tài, võng du, và đời sống hiện đại hấp dẫn nhất.</p>
        </div>
    </div>
    
    <div class="container-fluid product py-5 bg-dark">
        <div class="container py-5">
            <div class="tab-class">
                <div class="row g-4 mb-5">
                    <div class="col-12 text-center wow fadeIn" data-wow-delay="0.1s">
                        <h2 class="text-pink-main">Tuyển Chọn Truyện Đô Thị Đặc Sắc</h2>
                    </div>
                </div>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="product-item rounded wow fadeInUp bg-dark border border-pink-main" data-wow-delay="0.1s">
                                    <div class="product-item-inner border-0 rounded">
                                        <div class="product-item-inner-item">
                                            <img src="{{ asset('img/trong_sinh.png') }}" class="img-fluid w-100 rounded-top"
                                                alt="Bìa Truyện">
                                            <div class="product-new bg-red-highlight text-white">HOT</div> <div class="product-details">
                                                <a href="#"><i class="fa fa-eye fa-1x text-pink-main"></i></a>
                                            </div>
                                        </div>
                                        <div class="text-center rounded-bottom p-4 bg-black">
                                            <a href="#" class="d-block mb-2 text-pink-main">Đô Thị</a>
                                            <a href="#" class="d-block h4 text-white">Trọng Sinh Đô Thị <br> (Tu Chân)</a>
                                            <span class="me-2 fs-5 text-light">Nhiều Tác Giả</span>
                                            <span class="text-pink-main fs-5">⭐ 9.1/10</span>
                                        </div>
                                    </div>
                                    <div
                                        class="product-item-add border border-top-0 border-pink-main rounded-bottom text-center p-4 pt-0">
                                        <a href="#"
                                            class="btn btn-pink-main border-white rounded-pill py-2 px-4 mb-4"><i
                                                class="fas fa-book-open me-2"></i> Đọc Review / Tóm Tắt</a>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <div class="d-flex text-pink-main">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star text-secondary"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="product-item rounded wow fadeInUp bg-dark border border-pink-main" data-wow-delay="0.3s">
                                    <div class="product-item-inner border-0 rounded">
                                        <div class="product-item-inner-item">
                                            <img src="{{ asset('img/con_duong_ba_chu.png') }}" class="img-fluid w-100 rounded-top"
                                                alt="Bìa Truyện">
                                            <div class="product-sale bg-red-highlight text-white">Cân Não</div> <div class="product-details">
                                                <a href="#"><i class="fa fa-eye fa-1x text-pink-main"></i></a>
                                            </div>
                                        </div>
                                        <div class="text-center rounded-bottom p-4 bg-black">
                                            <a href="#" class="d-block mb-2 text-pink-main">Đô Thị</a>
                                            <a href="#" class="d-block h4 text-white">Con Đường Bá Chủ <br> (Tổng Tài)</a>
                                            <span class="me-2 fs-5 text-light">Thần Tác</span>
                                            <span class="text-pink-main fs-5">⭐ 8.7/10</span>
                                        </div>
                                    </div>
                                    <div
                                        class="product-item-add border border-top-0 border-pink-main rounded-bottom  text-center p-4 pt-0">
                                        <a href="#"
                                            class="btn btn-pink-main border-white rounded-pill py-2 px-4 mb-4"><i
                                                class="fas fa-book-open me-2"></i> Đọc Review / Tóm Tắt</a>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <div class="d-flex text-pink-main">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star text-secondary"></i>
                                                <i class="fas fa-star text-secondary"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="product-item rounded wow fadeInUp bg-dark border border-pink-main" data-wow-delay="0.5s">
                                    <div class="product-item-inner border-0 rounded">
                                        <div class="product-item-inner-item">
                                            <img src="{{ asset('img/vong_du.png') }}" class="img-fluid w-100 rounded-top"
                                                alt="Bìa Truyện">
                                            <div class="product-details">
                                                <a href="#"><i class="fa fa-eye fa-1x text-pink-main"></i></a>
                                            </div>
                                        </div>
                                        <div class="text-center rounded-bottom p-4 bg-black">
                                            <a href="#" class="d-block mb-2 text-pink-main">Đô Thị</a>
                                            <a href="#" class="d-block h4 text-white">Võng Du Chi Trộm <br> (Game Online)</a>
                                            <span class="me-2 fs-5 text-light">Đường Gia Tam Thiếu</span>
                                            <span class="text-pink-main fs-5">⭐ 8.5/10</span>
                                        </div>
                                    </div>
                                    <div
                                        class="product-item-add border border-top-0 border-pink-main rounded-bottom  text-center p-4 pt-0">
                                        <a href="#"
                                            class="btn btn-pink-main border-white rounded-pill py-2 px-4 mb-4"><i
                                                class="fas fa-book-open me-2"></i> Đọc Review / Tóm Tắt</a>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <div class="d-flex text-pink-main">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star text-secondary"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="product-item rounded wow fadeInUp bg-dark border border-pink-main" data-wow-delay="0.7s">
                                    <div class="product-item-inner border-0 rounded">
                                        <div class="product-item-inner-item">
                                            <img src="{{ asset('img/cuc_pham.png') }}" class="img-fluid w-100 rounded-top"
                                                alt="Bìa Truyện">
                                            <div class="product-new bg-red-highlight text-white">Lâu Năm</div> <div class="product-details">
                                                <a href="#"><i class="fa fa-eye fa-1x text-pink-main"></i></a>
                                            </div>
                                        </div>
                                        <div class="text-center rounded-bottom p-4 bg-black">
                                            <a href="#" class="d-block mb-2 text-pink-main">Đô Thị</a>
                                            <a href="#" class="d-block h4 text-white">Cực Phẩm Toàn Năng <br> (Dị Năng)</a>
                                            <span class="me-2 fs-5 text-light">Khuyết Danh</span>
                                            <span class="text-pink-main fs-5">⭐ 8.0/10</span>
                                        </div>
                                    </div>
                                    <div
                                        class="product-item-add border border-top-0 border-pink-main rounded-bottom  text-center p-4 pt-0">
                                        <a href="#"
                                            class="btn btn-pink-main border-white rounded-pill py-2 px-4 mb-4"><i
                                                class="fas fa-book-open me-2"></i> Đọc Review / Tóm Tắt</a>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <div class="d-flex text-pink-main">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star text-secondary"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-12 text-center mt-5">
                                <a href="#" class="btn btn-pink-main rounded-pill py-3 px-5">Tải thêm Truyện / Xem tất cả</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-fluid py-5 bg-dark">
        <div class="container py-5">
            <div class="row g-4">
                <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                    <a href="#" class="d-flex align-items-center justify-content-between bg-pink-main rounded p-5">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-magic fa-4x text-dark me-5"></i>
                            <div>
                                <h4 class="text-dark">Tổng hợp các bài Review truyện nổi bật nhất</h4>
                                <h1 class="text-red-highlight display-3 mb-0">TUYỂN CHỌN ĐẶC BIỆT</h1>
                            </div>
                        </div>
                        <div class="text-end">
                            <p class="text-dark mb-2">Đừng bỏ lỡ!</p>
                            <span class="btn btn-dark rounded-pill align-self-center py-2 px-4 text-pink-main">Xem Ngay</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid footer py-2 wow fadeIn bg-black" data-wow-delay="0.1s">
        <div class="container py-2">
            <div class="row g-2">
                <div class="col-md-6 col-lg-6 col-xl-6">
                    <div class="footer-item">
                        <h4 class="mb-4 text-pink-main"><i class="fas fa-book me-2"></i>StoryReview</h4> 
                        <p class="text-light">Nền tảng cung cấp các bài đánh giá truyện chữ chuyên sâu và khách quan nhất.</p>
                        <p class="text-white"><i class="fa fa-map-marker-alt me-2"></i> 123 Phố Văn Học, TP. Truyện</p>
                        <p class="text-white"><i class="fa fa-envelope me-2"></i> info@storyreview.com</p>
                        <p class="text-white"><i class="fa fa-phone-alt me-2"></i> +012 345 67890</p>
                        <div class="d-flex align-items-center">
                            <i class="fab fa-twitter btn-md-square text-pink-main me-3"></i>
                            <i class="fab fa-facebook-f btn-md-square text-pink-main me-3"></i>
                            <i class="fab fa-youtube btn-md-square text-pink-main me-3"></i>
                            <i class="fab fa-linkedin-in btn-md-square text-pink-main"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6">
                    <div class="footer-item">
                        <h4 class="mb-4 text-pink-main">Đăng Ký Nhận Tin</h4>
                        <p class="text-light">Nhận các bài review truyện mới nhất qua email.</p>
                        <div class="position-relative mx-auto">
                            <input class="form-control border-pink-main rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Email của bạn">
                            <button type="button" class="btn btn-pink-main rounded-pill position-absolute top-0 end-0 py-2 mt-2 me-2">Đăng Ký</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @yield('body')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>