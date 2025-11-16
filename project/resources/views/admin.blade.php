@extends('layout/admin') 
@section('body')
<div class="container-fluid py-4">

    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item">
            <a href="{{ route('admin')}}">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Tổng Quan</li>
    </ol>

    <h2 class="mb-4 text-dark"><i class="fa fa-tachometer-alt me-2 text-warning"></i> Thống Kê Nhanh</h2>

    <div class="row">

        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100 shadow-sm border-0">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fa fa-file-alt"></i> </div>
                    <div class="h5 mb-0">26 Chương Chờ Duyệt!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="{{ route('chuongchoduyet') }}"> 
                    <span class="float-left fw-bold">Duyệt Chương Ngay</span>
                    <span class="float-right">
                        <i class="fa fa-angle-right"></i>
                    </span>
                </a>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100 shadow-sm border-0">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fa fa-fw fa-user-plus"></i>
                    </div>
                    <div class="h5 mb-0">11 Độc Giả Mới Hôm Nay!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="{{ route('nguoidung') }}">
                    <span class="float-left fw-bold">Xem Chi Tiết Người Dùng</span>
                    <span class="float-right">
                        <i class="fa fa-angle-right"></i>
                    </span>
                </a>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-info o-hidden h-100 shadow-sm border-0">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fa fa-book"></i> </div>
                    <div class="h5 mb-0">123 Truyện Cần Cập Nhật!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="{{ route('danhsachtruyen') }}">
                    <span class="float-left fw-bold">Quản Lý Truyện</span>
                    <span class="float-right">
                        <i class="fa fa-angle-right"></i>
                    </span>
                </a>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100 shadow-sm border-0">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fa fa-comment-dots"></i> </div>
                    <div class="h5 mb-0">13 Bình Luận Vi Phạm!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="{{ route('binhluan') }}">
                    <span class="float-left fw-bold">Xử Lý Bình Luận Ngay</span>
                    <span class="float-right">
                        <i class="fa fa-angle-right"></i>
                    </span>
                </a>
            </div>
        </div>
    </div>
    
    <hr>

    <div class="card mb-3 shadow-sm border-0">
        <div class="card-header bg-white border-bottom">
            <i class="fa fa-area-chart me-2"></i> Lưu Lượng Truy Cập Theo Ngày
        </div>
        <div class="card-body">
            <canvas id="myAreaChart" width="100%" height="30"></canvas>
        </div>
        <div class="card-footer small text-muted">Cập nhật lúc 11:59 PM hôm qua</div>
    </div>

</div>
@endsection