@extends('admin')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Quản lý Người dùng</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('admin') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Người dùng</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header bg-primary text-white">
            <i class="fas fa-users me-1"></i>
            Danh sách Người dùng
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Họ tên</th>
                        <th>Email</th>
                        <th>Quyền</th>
                        <th>Trạng thái</th>
                        <th width="120">Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Demo User</td>
                        <td>demo@example.com</td>
                        <td>Admin</td>
                        <td>Hoạt động</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning">Sửa</a>
                            <a href="#" class="btn btn-sm btn-danger">Xóa</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Test User</td>
                        <td>test@example.com</td>
                        <td>Member</td>
                        <td>Khóa</td>
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
