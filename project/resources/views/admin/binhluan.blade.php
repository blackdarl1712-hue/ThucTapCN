@extends('admin')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Quản lý Bình luận</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('admin') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Bình luận</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header bg-success text-white">
            <i class="fas fa-comments me-1"></i>
            Danh sách Bình luận
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Người dùng</th>
                        <th>Nội dung</th>
                        <th>Thuộc truyện</th>
                        <th>Ngày tạo</th>
                        <th>Trạng thái</th>
                        <th width="120">Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>12</td>
                        <td>Demo User</td>
                        <td>Bình luận mẫu để test giao diện.</td>
                        <td>Truyện Demo</td>
                        <td>2025-11-21</td>
                        <td>
                            <span class="badge bg-success">Đã duyệt</span>
                        </td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning">Ẩn</a>
                            <a href="#" class="btn btn-sm btn-danger">Xóa</a>
                        </td>
                    </tr>

                    <tr>
                        <td>13</td>
                        <td>Test User</td>
                        <td>Bình luận chờ duyệt...</td>
                        <td>Truyện ABC</td>
                        <td>2025-11-20</td>
                        <td>
                            <span class="badge bg-secondary">Chờ duyệt</span>
                        </td>
                        <td>
                            <a href="#" class="btn btn-sm btn-success">Duyệt</a>
                            <a href="#" class="btn btn-sm btn-danger">Xóa</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
