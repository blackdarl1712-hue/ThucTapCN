<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Tin Tức Tiểu Thuyết | NovelFlow </title>

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
</head>

<body class="bg-dark text-white">
    <div id="spinner"
        class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-success" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <div class="container-fluid px-5 py-4 d-none d-lg-block bg-black border-bottom border-secondary">
        <div class="row gx-0 align-items-center text-center">
            <div class="col-md-3 text-center text-lg-start">
                <div class="d-inline-flex align-items-center">
                    <a href="{{ route('home') }}" class="navbar-brand p-0">
                        <h1 class="display-5 text-success m-0"><i
                                class="fas fa-book-reader text-white me-2"></i>NovelFlow</h1>
                    </a>
                </div>
            </div>
            <div class="col-md-6 text-center">
                <div class="position-relative ps-4">
                    <div class="d-flex border border-success rounded-pill">
                        <input class="form-control border-0 rounded-pill w-100 py-3 bg-dark text-white" type="text"
                            placeholder="Tìm kiếm truyện, tác giả, dịch giả...">
                        <button type="button" class="btn btn-success rounded-pill py-3 px-5" style="border: 0;"><i
                                class="fas fa-search text-dark"></i></button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center text-lg-end">
                <div class="d-inline-flex align-items-center">
                    <a href="#" class="text-success d-flex align-items-center justify-content-center me-3"
                        title="Truyện Đang Theo Dõi"><span class="rounded-circle btn-md-square border"><i
                                class="fas fa-heart"></i></a>
                    <a href="#" class="text-success d-flex align-items-center justify-content-center"
                        title="Tài Khoản"><span class="rounded-circle btn-md-square border"><i
                                class="fa fa-user"></i></span>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid nav-bar p-0">
        <div class="row gx-0 bg-success px-5 align-items-center">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-dark bg-success ">
                    <a href="{{ route('home') }}" class="navbar-brand d-block d-lg-none">
                        <h1 class="display-5 text-white m-0"><i
                                class="fas fa-book-reader text-dark me-2"></i>NovelFlow</h1>
                    </a>
                    <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars fa-1x text-dark"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav ms-auto py-0">
                            <a href="{{ route('home') }}" class="nav-item nav-link text-white">Trang Chủ</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown">Thể loại</a>
                                <div class="dropdown-menu bg-success border-0 rounded-0 m-0">
                                    <div class="d-flex p-2">
                                        <div class="col-6">
                                            <h6 class="dropdown-header text-dark fw-bold">Thể loại Truyện</h6>
                                            <a href="{{ route('tienhiep') }}" class="dropdown-item">Tiên Hiệp</a>
                                            <a href="{{ route('dothi') }}" class="dropdown-item">Đô Thị</a>
                                            <a href="#" class="dropdown-item">Huyền Huyễn</a>
                                            <a href="#" class="dropdown-item">Xuyên Không</a>
                                            <a href="#" class="dropdown-item">Ngôn Tình</a>
                                        </div>
                                        <div class="col-6">
                                            <h6 class="dropdown-header text-dark fw-bold">Truyện theo Nguồn</h6>
                                            <a href="#" class="dropdown-item">Truyện Dịch</a>
                                            <a href="#" class="dropdown-item">Truyện Sáng Tác</a>
                                            <a href="#" class="dropdown-item">Truyện Convert</a>
                                            <a href="#" class="dropdown-item">Truyện Việt Nam</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ route('tintuc_frontend') }}" class="nav-item nav-link active text-white">Tin Tức Văn Học</a>
                            <a href="contact.html" class="nav-item nav-link me-2 text-white">Liên Hệ</a>
                        </div>
                        <a href="#"
                            class="btn btn-dark rounded-pill py-2 px-4 px-lg-3 mb-3 mb-md-3 mb-lg-0 text-success border border-white"><i
                                class="fa fa-pencil-alt me-2"></i> Đăng Truyện</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-dark p-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-3 text-success mb-4"><i class="fas fa-feather-alt me-3"></i>Tin Tức Văn Học</h1>
            <p class="text-light fs-5">Cập nhật nhanh chóng những tin tức mới nhất về các tác giả, sự kiện xuất bản, và đánh giá chuyên sâu về tiểu thuyết.</p>
        </div>
    </div>

    <div class="container-fluid news py-5 bg-dark">
        <div class="container py-5">
            <div class="row g-4 justify-content-center">
                
                <div class="col-md-6 col-lg-4 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-black rounded border border-success h-100">
                        <div class="overflow-hidden rounded-top">
                            <img src="{{ asset('img/truyen1.png') }}" class="img-fluid w-100" alt="Ảnh Tin Tức">
                        </div>
                        <div class="p-4">
                            <a href="#" class="d-inline-block text-success mb-2 fw-bold">Tin Văn Học</a>
                            <h4 class="text-white mb-3">Tiểu thuyết "Cổ Tích Hiện Đại" đoạt giải Sách Vàng Quốc Gia</h4>
                            <p class="text-light">Tác phẩm giả tưởng đầy sáng tạo của tác giả Thanh Hải đã gây ấn tượng mạnh mẽ...</p>
                            <div class="d-flex justify-content-between">
                                <small class="text-secondary"><i class="fa fa-user me-2"></i>Phóng viên Văn</small>
                                <small class="text-secondary"><i class="fa fa-calendar-alt me-2"></i>05/11/2025</small>
                            </div>
                            <a href="#" class="btn btn-success btn-sm mt-3 text-dark">Đọc chi tiết <i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-black rounded border border-success h-100">
                        <div class="overflow-hidden rounded-top">
                            <img src="{{ asset('img/tacgia.png') }}" class="img-fluid w-100" alt="Ảnh Tin Tức">
                        </div>
                        <div class="p-4">
                            <a href="#" class="d-inline-block text-success mb-2 fw-bold">Tin Tác Giả</a>
                            <h4 class="text-white mb-3">Tác giả "Đế Vương Chi Lộ" xác nhận sẽ ra phần ngoại truyện</h4>
                            <p class="text-light">Sau thành công rực rỡ của bộ truyện, tác giả nổi tiếng này tiếp tục hé lộ dự án mới khiến fan hâm mộ đứng ngồi không yên...</p>
                            <div class="d-flex justify-content-between">
                                <small class="text-secondary"><i class="fa fa-user me-2"></i>Ban Biên Tập</small>
                                <small class="text-secondary"><i class="fa fa-calendar-alt me-2"></i>02/11/2025</small>
                            </div>
                            <a href="#" class="btn btn-success btn-sm mt-3 text-dark">Đọc chi tiết <i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 col-xl-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-black rounded border border-success h-100">
                        <div class="overflow-hidden rounded-top">
                            <img src="{{ asset('img/truyen3.png') }}" class="img-fluid w-100" alt="Ảnh Tin Tức">
                        </div>
                        <div class="p-4">
                            <a href="#" class="d-inline-block text-success mb-2 fw-bold">Tin Truyện Dịch</a>
                            <h4 class="text-white mb-3">Truyện "Hệ Thống Thần Cấp" bất ngờ ngừng dịch vô thời hạn</h4>
                            <p class="text-light">Lý do được cho là liên quan đến vấn đề bản quyền, gây tiếc nuối lớn trong cộng đồng độc giả...</p>
                            <div class="d-flex justify-content-between">
                                <small class="text-secondary"><i class="fa fa-user me-2"></i>Minh Trí</small>
                                <small class="text-secondary"><i class="fa fa-calendar-alt me-2"></i>28/10/2025</small>
                            </div>
                            <a href="#" class="btn btn-success btn-sm mt-3 text-dark">Đọc chi tiết <i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-12 mt-5">
                    <nav>
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    
    @yield('body')

    <div class="container-fluid py-5 bg-dark">
        <div class="container py-5">
            <div class="row g-4">
                <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                    <a href="#" class="d-flex align-items-center justify-content-between bg-success rounded p-5">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-scroll fa-4x text-dark me-5"></i>
                            <div>
                                <h4 class="text-dark">Tổng hợp các bài Review truyện nổi bật nhất</h4>
                                <h1 class="text-white display-3 mb-0">TUYỂN CHỌN ĐẶC BIỆT</h1>
                            </div>
                        </div>
                        <div class="text-end">
                            <p class="text-dark mb-2">Đừng bỏ lỡ!</p>
                            <span class="btn btn-dark rounded-pill align-self-center py-2 px-4 text-success">Xem Ngay</span>
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
                        <h4 class="mb-4 text-success"><i class="fas fa-book-reader me-2"></i>NovelFlow</h4>
                        <p class="text-light">Nền tảng cung cấp các bài đánh giá tiểu thuyết, tin tức tác giả và sự kiện văn học chuyên sâu.</p>
                        <p class="text-white"><i class="fa fa-map-marker-alt me-2"></i> 456 Phố Văn Học, TP. Truyện</p>
                        <p class="text-white"><i class="fa fa-envelope me-2"></i> info@novelflow.com</p>
                        <p class="text-white"><i class="fa fa-phone-alt me-2"></i> +012 345 67890</p>
                        <div class="d-flex align-items-center">
                            <i class="fab fa-twitter btn-md-square text-success me-3"></i>
                            <i class="fab fa-facebook-f btn-md-square text-success me-3"></i>
                            <i class="fab fa-youtube btn-md-square text-success me-3"></i>
                            <i class="fab fa-linkedin-in btn-md-square text-success"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6">
                    <div class="footer-item">
                        <h4 class="mb-4 text-success">Đăng Ký Nhận Tin</h4>
                        <p class="text-light">Nhận các bài review truyện, tin tức tác giả mới nhất qua email.</p>
                        <div class="position-relative mx-auto">
                            <input class="form-control border-success rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Email của bạn">
                            <button type="button" class="btn btn-success rounded-pill position-absolute top-0 end-0 py-2 mt-2 me-2">Đăng Ký</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>