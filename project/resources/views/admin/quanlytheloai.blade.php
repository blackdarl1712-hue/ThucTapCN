@extends('admin')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Quản lý Thể loại</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('admin') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Thể loại</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header bg-info text-white">
            <i class="fas fa-tags me-1"></i>
            Danh sách Thể loại
        </div>
        <div class="card-body">

            <a href="#" class="btn btn-primary mb-3">
                <i class="fa fa-plus"></i> Thêm Thể loại
            </a>

            <table class="table table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th width="60">ID</th>
                        <th>Tên thể loại</th>
                        <th>Mô tả</th>
                        <th width="120">Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Linh Dị</td>
                        <td>Nội dung rùng rợn, bí ẩn.</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning">Sửa</a>
                            <a href="#" class="btn btn-sm btn-danger">Xóa</a>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Huyền Huyễn</td>
                        <td>Thế giới thần tiên, pháp thuật.</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning">Sửa</a>
                            <a href="#" class="btn btn-sm btn-danger">Xóa</a>
                        </td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>Ngôn Tình</td>
                        <td>Tình yêu lãng mạn, cảm xúc.</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning">Sửa</a>
                            <a href="#" class="btn btn-sm btn-danger">Xóa</a>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection
